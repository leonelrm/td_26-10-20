
drop database if exists `dawmnoisiel`;
create database `dawmnoisiel`;
use `dawmnoisiel`;

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id_employes` int(5) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `function` char(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `salaire` int(10) NOT NULL,
  PRIMARY KEY (`id_employes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `employes` (`prenom`, `date_naissance`, `function`, `email`, `salaire`) VALUES
('Joan', '2010-10-10', 'PDG', 'joan@dawn.no', '75000'),
('Medhi', '2010-10-10', 'DSI', 'medhi@dawn.no', '70000'),
('Zacharie', '2010-10-10', 'DG', 'zacharie@dawn.no', '65000'),
('Leopold', '2010-10-10', 'RH', 'leopold@dawn.no', '55000'),
('Mohamed', '2010-10-10', 'STI', 'mohamed@dawn.no', '60000'),
('Philippe', '2010-10-10', 'CEO', 'philippe@dawn.no', '78000'),
('Adama', '2010-10-10', 'CTO', 'adama@dawn.no', '73000');






