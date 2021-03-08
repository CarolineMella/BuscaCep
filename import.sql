-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela sistema-cep.dados_cep: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `dados_cep` DISABLE KEYS */;
REPLACE INTO `dados_cep` (`id`, `cep`, `rua`, `bairro`, `cidade`, `estado`) VALUES
	(34, 88110633, 'Rua Caetana Alves Leite', 'Nossa Senhora do Rosário', 'São José', 'SC'),
	(35, 88110655, 'Rua Alfredo José do Amorim', 'Nossa Senhora do Rosário', 'São José', 'SC'),
	(36, 88040310, 'Rua Aracuã', 'Pantanal', 'Florianópolis', 'SC'),
	(37, 88102340, 'Rua Cassol', 'Kobrasol', 'São José', 'SC');
/*!40000 ALTER TABLE `dados_cep` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
