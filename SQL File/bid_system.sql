-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                10.4.18-MariaDB - mariadb.org binary distribution
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- tablo yapısı dökülüyor ses1.bid_system
CREATE TABLE IF NOT EXISTS `bid_system` (
  `bid_id` bigint(20) DEFAULT NULL,
  `bid_pid` bigint(20) DEFAULT NULL,
  `bid_credit` bigint(20) DEFAULT NULL,
  `bid_pilotname` varchar(20) COLLATE utf8_bin NOT NULL,
  `last_pilotname` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ses1.bid_system: ~8 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `bid_system` DISABLE KEYS */;
INSERT INTO `bid_system` (`bid_id`, `bid_pid`, `bid_credit`, `bid_pilotname`, `last_pilotname`) VALUES
	(1, 2234, 999999, 'FEEDS', ''),
	(2, 2020, 9999999999, 'FeedsFUN', ''),
	(3, 2020, 9999999999, 'FeedsFUN', ''),
	(4, 2091, 9999999999, 'FeedsFUN', ''),
	(5, 2054, 9999999999, 'FeedsFUN', ''),
	(6, 1, 1, '0', ''),
	(7, 1416, 9999999999, 'FeedsFUN', ''),
	(8, 1, 1, '0', '');
/*!40000 ALTER TABLE `bid_system` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
