CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `user` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `reviews` (`id`, `text`, `user`, `date`, `film_id`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages Ipsum.', 'user1', '2017-12-03 13:00:00', 3),
(3, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc', 'user1', '2017-12-03 13:00:00', 3),
(4, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'user2', '2017-12-01 00:00:00', 1);

ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_film_id` (`film_id`);

ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `reviews`
  ADD CONSTRAINT `review_film_id` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`);
