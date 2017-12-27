CREATE TABLE `plays` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL,
  `date` DATETIME NULL,
  `location` VARCHAR(100) NULL,
  `created_at` DATETIME NULL,
  `last_updated` DATETIME NULL,
  PRIMARY KEY (`id`));

INSERT INTO `plays` VALUES (1,'The band\'s visit','Pretty close to perfection, and of a subtlety seldom seen in Broadway musicals. David Yazbek and Itamar Moses’s delicate story of Egyptian musicians stranded for one uneventful night in an Israeli desert town, directed by David Cromer','2018-01-13 19:00:00','Prishtine','2017-12-26 19:00:00','2017-12-26 19:00:00'),(2,'Burning doors','This self-described “Record Album Interpretation” from the Wooster Group asked us to listen, with concentrated attention and virgin ears, to a vinyl recording of songs performed a cappella by African-American prisoners in the early 1960s. ','2018-01-17 19:00:00','Prishtine','2017-12-27 14:25:00','2017-12-27 14:25:00'),(3,'Escaped alone','In which the revolutionary British dramatist Caryl Churchill demonstrated once again her ability to reinvent the English-speaking play with every work she writes. This compact study of apocalyptic dreams, directed by James Macdonald and seen at the Brooklyn Academy of Music, portrayed four anxious, chatty women considering fears both present and future, and mundane and cosmic.','2018-01-21 19:00:00','Prishtine','2017-12-28 16:20:00','2017-12-28 16:20:00');
