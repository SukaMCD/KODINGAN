import spotipy
from spotipy.oauth2 import SpotifyOAuth
import pandas as pd

# Spotify API Credentials
CLIENT_ID = "886e3c76038e484a965b0c150260f159"
CLIENT_SECRET = "bf50a338f74b4e40a72d9925006c8cd6"
REDIRECT_URI = "http://localhost:8888/callback"

# Auth dengan Spotify
sp = spotipy.Spotify(auth_manager=SpotifyOAuth(client_id=CLIENT_ID,
                                               client_secret=CLIENT_SECRET,
                                               redirect_uri=REDIRECT_URI,
                                               scope="user-library-read playlist-modify-public playlist-modify-private"))

# Ambil Semua Liked Songs
liked_songs = []
offset = 0
while True:
    results = sp.current_user_saved_tracks(limit=50, offset=offset)
    if not results['items']:
        break
    liked_songs.extend(results['items'])
    offset += 50

# Data Processing
songs_data = []
for song in liked_songs:
    track = song['track']
    audio_features = sp.audio_features(track['id'])[0]
    
    if audio_features:
        songs_data.append({
            'id': track['id'],
            'name': track['name'],
            'artist': track['artists'][0]['name'],
            'energy': audio_features['energy'],
            'valence': audio_features['valence'],  # Valence = Happy/Sad Factor
            'danceability': audio_features['danceability']
        })

# Konversi ke DataFrame
songs_df = pd.DataFrame(songs_data)

# Kategori Mood (Bisa Diubah Sesuai Preferensi)
def categorize_mood(row):
    if row['valence'] > 0.6 and row['energy'] > 0.6:
        return 'Happy & Energetic'
    elif row['valence'] > 0.6:
        return 'Happy & Calm'
    elif row['valence'] <= 0.4 and row['energy'] <= 0.4:
        return 'Sad & Calm'
    elif row['valence'] <= 0.4:
        return 'Sad & Energetic'
    else:
        return 'Neutral'

songs_df['mood'] = songs_df.apply(categorize_mood, axis=1)

# Buat Playlist Baru di Spotify
user_id = sp.current_user()['id']
playlist_names = songs_df['mood'].unique()
playlist_ids = {}

for playlist in playlist_names:
    new_playlist = sp.user_playlist_create(user_id, name=playlist, public=False)
    playlist_ids[playlist] = new_playlist['id']

# Masukkan Lagu ke Playlist Sesuai Mood
for mood, group in songs_df.groupby('mood'):
    track_ids = group['id'].tolist()
    sp.playlist_add_items(playlist_ids[mood], track_ids)

print("🎵 Lagu berhasil dikelompokkan ke playlist berdasarkan mood!")
