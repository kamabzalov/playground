SET NAMES 'utf8';


USE test;

DROP TABLE IF EXISTS specialities;

CREATE TABLE specialities (
    speciality_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    speciality_code VARCHAR(1000),
    speciality_title VARCHAR(1000),
    speciality_level VARCHAR(1000),
    qualification VARCHAR(1000),
    code_qualification VARCHAR(1000),
    programm_type VARCHAR(1000),
    learn_period VARCHAR(1000)
)
ENGINE = INNODB
CHARACTER set 'utf8';