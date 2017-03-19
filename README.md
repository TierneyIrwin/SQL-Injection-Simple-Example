# cinf301-spr17-project3_part_A
1. CREATE SCHEMA project3_partA;
2. CREATE USER newUser IDENTIFIED BY 'n3wus3rp4ssw0rd';
3. GRANT ALL ON project3_partA.* TO newUser;
4. CREATE TABLE project3_partA.Cats ('id' INT UNSIGNED NOT NULL AUTO_INCREMENT, 'name' VARHAR(45) NOT NULL, 'birthdate' DATE NOT NULL, 'cuteness' VARCHAR(45) NOT NULL, 'fur_length' DOUBLE NOT NULL, PRIMARY KEY('id'));
4. CREATE TABLE project_partA.Cuteness ('id' INT UNSIGNED NOT NULL AUTO_INCREMENT, 'cuteness' VARCHAR(45) NOT NULL, 'cute_level' INT NOT NULL, 'adjective' VARCHAR(45) NOT NULL, 'seen' INT NOT NULL, PRIMARY KEY('id'));
5. INSERT INTO project3_partA.Cats ('name','birthdate','cuteness','fur_length')VALUES('Miles','2010-06-01','mega','1.0');
   INSERT INTO project3_partA.Cats ('name','birthdate','cuteness','fur_length')VALUES('Mandy','2008-04-16','adorable','2.3');
   INSERT INTO project3_partA.Cats ('name','birthdate','cuteness','fur_length')VALUES('Baby','2005-12-14','birb','5.7');
   INSERT INTO project3_partA.Cats ('name','birthdate','cuteness','fur_length')VALUES('Bud','1992-04-01','mega','1.5');
   INSERT INTO project3_partA.Cats ('name','birthdate','cuteness','fur_length')VALUES('Sabrina','2010-06-01','kawaii','1.0');
   INSERT INTO project3_partA.Cuteness ('cuteness','cute_level','adjective','seen')VALUES('mega','100','best','10');
   INSERT INTO project3_partA.Cuteness ('cuteness','cute_level','adjective','seen')VALUES('adorable','90','still best','9');
   INSERT INTO project3_partA.Cuteness ('cuteness','cute_level','adjective','seen')VALUES('kawaii','1000','bestest','2');
   INSERT INTO project3_partA.Cuteness ('cuteness','cute_level','adjective','seen')VALUES('birb','40','pretty good','5');
   INSERT INTO project3_partA.Cuteness ('cuteness','cute_level','adjective','seen')VALUES('not','0','no way','1');
6. - 9. On screenshot titled '2017-03-18.png'
