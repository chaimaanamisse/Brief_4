Create Database getion_apprenents;    /*  create databe*/

create table student (  /* create student tabel */

    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    Html int default "0",
    Css int default "0",
    Javascript int default "0",
    Php int default "0",
    class varchar(255)
)

CREATE TABLE formateur AS   /* create table from another exist table */
SELECT id ,nom, prenom , email
FROM student;

ALTER TABLE formateur  /* add attrubite to  exists table */
ADD password_formateur VARCHAR(255) NOT NULL ;

/* add a row from a table */
INSERT INTO student (nom,prenom,email,password,Html,Css,Javascript,Php) VALUES("faical","bahsis","faissalabr@gmail.com","faical99",16,15,14,13)

/* add a row from a table */
INSERT INTO formateur (id,nom,prenom,email,password_formateur) VALUES("chaimae","nmeyess","chaima@gmail.com","chaimae123")


/* update a attrubite from a eow table */
UPDATE student
SET email = 'faical@gmail.com', /* update */
    password = 'faicalbahsisbahsis'  /* update */
WHERE nom = "faical"; /* condition should exists */


/* delete a row from a table */

DELETE FROM student
WHERE nom = "faical" AND prenom = "bahsis";


ALTER TABLE formateur_youcode   /* change name of table */
RENAME TO formateur;  


ALTER TABLE student /* delete attrubite for exist table */
DROP class;