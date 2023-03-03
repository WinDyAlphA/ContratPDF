
CREATE TABLE `Contrat` (
  `id` int(6) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `nom_mecene` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Contrat` (`id`, `nom`, `nom_mecene`, `date_debut`, `date_fin`) VALUES
(1, 'thierry', 'Guillaume', '2022-12-12', '2023-03-01');

ALTER TABLE `Contrat`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `Contrat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

