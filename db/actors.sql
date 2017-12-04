CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `actors` (`id`, `name`, `birthdate`) VALUES
(1, 'Keanu Reeves', '1973-12-04'),
(2, 'Bruce Willis', '1967-12-19'),
(3, 'Will Smith', '1971-12-02'),
(4, 'Sandra Bullock', '1978-12-14');

--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
