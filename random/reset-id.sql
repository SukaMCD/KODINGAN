SET @num := 0;

UPDATE tablename 
SET id = (@num := @num + 1)
ORDER BY id;

ALTER TABLE tablename AUTO_INCREMENT = 1;
