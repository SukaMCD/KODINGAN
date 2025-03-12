import random
import time

def russian_roulette():
    print("=== Selamat datang di permainan Jdl! ===")
    print("Aturan: habiskan uang kalian.")
    print("Selamat Bermain")
    
    # Inisialisasi revolver dengan 1 peluru di posisi acak
    bullet_position = random.randint(1, 6)
    attempts = 0
    
    while True:
        try:
            # Input pemain
            choice = int(input("\nPilih nomor slot (1-6): "))
            if choice < 1 or choice > 6:
                print("Masukkan angka antara 1 dan 6!")
                continue
            
            attempts += 1
            print(f"Anda memilih slot {choice}...")
            time.sleep(1)  # Efek dramatis
            
            # Memeriksa apakah pemain kalah
            if choice == bullet_position:
                print("JACKPOTTT!")
                break
            else:
                print("Maaf anda gagal!")
                print(f"Sisa percobaan: {6 - attempts}")
            
            # Jika semua slot aman
            if attempts >= 6:
                print("\nYah... Rungkad, Gapapa dpo lagi!")
                break
        
        except ValueError:
            print("Masukkan angka yang valid!")
            
if __name__ == "__main__":
    russian_roulette()