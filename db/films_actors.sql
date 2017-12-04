CREATE TABLE `films_actors` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `films_actors` (`id`, `film_id`, `actor_id`) VALUES
(1, 2, 3),
(2, 3, 3),
(3, 5, 1),
(4, 1, 2);

ALTER TABLE `films_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `films_actors_films` (`film_id`),
  ADD KEY `films_actos_actors` (`actor_id`);

ALTER TABLE `films_actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `films_actors`
  ADD CONSTRAINT `films_actors_films` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `films_actos_actors` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`);
