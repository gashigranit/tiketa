CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `films` (`id`, `name`, `description`, `rating`, `year`) VALUES
(1, 'Wonder Woman', 'Before she was Wonder Woman (Gal Gadot), she was Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise...', 5, 2017),
(2, 'Blade Runner', 'Deckard (Harrison Ford) is forced by the police Boss (M. Emmet Walsh) to continue his old job as Replicant Hunter. His assignment: eliminate four escaped Replicants from the colonies who have returned to Earth...', 4, 2017),
(3, 'Justice League', 'Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat...', 5, 2017),
(5, 'Coco', 'Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Hector, the two ne\r\n', 4, 2017);

ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
