CREATE TABLE IF NOT EXISTS meniu (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    tevo_id SMALLINT DEFAULT NULL,
    gylis SMALLINT DEFAULT 1,
    tekstas TEXT CHARACTER SET utf8 COLLATE utf8_lithuanian_ci,
    nuoroda VARCHAR(30),
    failas MEDIUMBLOB,
    PRIMARY KEY (id),
    UNIQUE KEY id (id)
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_lithuanian_ci;

INSERT INTO meniu (tevo_id, gylis, tekstas, nuoroda, failas ) VALUES
   (NULL, 1, 'Apie', '', ''),
   (1, 2, 'Kontaktai', '', ''),
   (1, 2, '....', '', ''),
   (NULL, 1, 'Socialiniai tinklai', '', ''),
   (3, 2, 'Facebook', 'http://www.google.lt', ''),
   (3, 2, 'Twitter', 'http://www.twitter.com', ''),
   (NULL, 1, 'Dokumentai', '', ''),
   (6, 2, 'Anketa', '', 'file:anketa.docx'),
   (6, 2, 'Skaičiuoklė', '', 'file:calc.xlsx');
