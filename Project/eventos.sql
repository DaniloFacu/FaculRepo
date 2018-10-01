SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `downsmaster`
--
--
-- Estrutura da tabela `eventos`
--
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
--
-- Extraindo dados da tabela `eventos`
--
INSERT INTO `eventos` (`id`, `titulo`, `data`, `link`) VALUES
(1, 'Evento exemplo 1', '2016-05-14 16:59:00', 'http://downsmaster.com'),
(2, 'Evento numero dois', '2016-05-17 23:59:00', 'http://google.com.br');


---------------------
/* Criando Tabela de Usuários */
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(80) NOT NULL,
	password VARCHAR(128)
) ENGINE = INNODB CHARSET = utf8;
