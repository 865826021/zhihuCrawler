CREATE TABLE users (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `createAt` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE informations(
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `nickname` VARCHAR(255) NOT NULL,
  `bio` VARCHAR(255) NOT NULL DEFAULT '',
  `location` VARCHAR(16) NOT NULL DEFAULT '',
  `gender` VARCHAR(10) NOT NULL DEFAULT '',
  `eduction` VARCHAR(64) NOT NULL DEFAULT '',
  `eduction_extra` VARCHAR(64) NOT NULL DEFAULT '',
  `content` VARCHAR(255) NOT NULL DEFAULT '',
  `agrees` INT NOT NULL DEFAULT 0,
  `thanks` INT NOT NULL DEFAULT 0,
  `following` INT NOT NULL DEFAULT 0,
  `followers` INT NOT NULL DEFAULT 0,
  `bule_stars` SMALLINT NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;