-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_laravelbasic
CREATE DATABASE IF NOT EXISTS `db_laravelbasic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_laravelbasic`;

-- Dumping structure for table db_laravelbasic.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_laravelbasic.authors: ~11 rows (approximately)
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` (`id`, `name`) VALUES
	(1, 'Susana Turner'),
	(2, 'Miss Trudie Schuster'),
	(3, 'Evert Fay'),
	(4, 'Miss Eulah Nader'),
	(5, 'Rodger Erdman'),
	(6, 'Shyann Kessler'),
	(7, 'Lian Mafutra'),
	(8, 'ika sundarry'),
	(9, '123'),
	(10, 'Lian Mafutra 112277'),
	(11, 'pertrt');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `author_id` int(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `release_date` datetime DEFAULT NULL,
  `description` text,
  `cover` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Dumping data for table db_laravelbasic.books: ~53 rows (approximately)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `author_id`, `title`, `release_date`, `description`, `cover`, `qty`, `created_at`, `updated_at`) VALUES
	(1, 5, 'Accusamus blanditiis nostrum velit corporis.', NULL, 'Molestiae eveniet facere expedita modi culpa quas sint dicta accusamus occaecati aut occaecati facere quod soluta dolore est facilis pariatur ipsum deleniti autem ut est asperiores a iure rerum laboriosam mollitia.', 'https://picsum.photos/id/77/200/300', '15', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(2, 9, 'Ut asperiores fugit.', NULL, 'Tempora aut est dolor deserunt dolores ex facere rerum voluptas dolorum ab et dolores sed nihil et repellendus quo consequuntur eum maxime unde delectus voluptates sapiente ducimus earum natus vel minima eveniet excepturi adipisci ut recusandae blanditiis dicta esse incidunt quam earum quam quia.', 'https://picsum.photos/id/46/200/300', '14', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(3, 6, 'Et assumenda non qui nam labore.', NULL, 'Iste doloremque blanditiis quam nihil dicta modi non dignissimos dicta sequi repellendus quia id assumenda officiis quia expedita alias velit veritatis ea delectus aliquam dolore accusantium repellat est ducimus totam esse ipsam voluptatem exercitationem nostrum non sequi ex doloribus ex consequuntur veritatis ullam maxime repudiandae nemo sit possimus odit nam et cum delectus maiores libero autem.', 'https://picsum.photos/id/40/200/300', '12', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(4, 3, 'Et perferendis dicta perferendis et.', NULL, 'Impedit repellendus ad aut repellat dicta odio cumque eaque voluptas iusto ab reiciendis quia enim deserunt et in deserunt nihil voluptatum voluptate natus quia omnis fuga commodi ipsa voluptatem et doloremque et dolorem aperiam pariatur nihil recusandae ut pariatur qui voluptates omnis officia facilis rerum consequatur sit fugiat veniam quo ad dicta architecto dolor tempora laboriosam dolores aut ab vel hic sint molestiae ut repudiandae quod voluptatibus incidunt at aut.', 'https://picsum.photos/id/4/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(5, 2, 'Ipsum quo unde sapiente ut.', NULL, 'Consectetur est est voluptate error nulla a dolorem dolores ut esse animi est tempora porro assumenda sit ut molestiae quia ad minima porro ea laborum ab incidunt itaque at sed sapiente alias ratione qui quo non et sit est omnis facere voluptatem voluptatem enim aliquam quae perspiciatis delectus ea.', 'https://picsum.photos/id/39/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(6, 6, 'Dolor laboriosam quidem ratione adipisci quas.', NULL, 'Et ut eius nemo voluptatem id doloremque ducimus rerum facere quae ratione vitae nisi quo accusamus distinctio dolores et voluptas illo eius enim provident impedit non voluptatum facilis est cum quas sapiente dolores in eos est ut voluptate.', 'https://picsum.photos/id/83/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(7, 7, 'Repudiandae delectus voluptatum laudantium asperiores.', NULL, 'Fuga praesentium sed rerum placeat velit dolorum deleniti officia aliquid sunt libero dolorem ad et cumque asperiores iusto et quaerat voluptatem excepturi ullam nam architecto optio amet qui quis doloribus illum assumenda illum beatae vel nihil voluptatibus.', 'https://picsum.photos/id/7/200/300', '11', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(8, 7, 'Exercitationem consequatur voluptatem id.', NULL, 'Quod ut rem et omnis excepturi ab cupiditate aut quia sunt assumenda qui ut sunt unde soluta quia ab incidunt dicta cumque quam doloremque ullam dolorem eius animi non delectus voluptas et ullam culpa nam quibusdam sint corrupti et nostrum et sunt tempora placeat iste placeat accusamus ullam quia.', 'https://picsum.photos/id/34/200/300', '13', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(9, 3, 'Maiores est praesentium voluptas.', NULL, 'Neque voluptatibus nam doloribus minima ratione minus qui voluptas exercitationem aut amet consequatur velit voluptas nihil aut facere culpa eum quibusdam quo eius quaerat veritatis alias et nesciunt animi sapiente aut ut sit temporibus voluptas laudantium porro quo sed qui et id error distinctio et minus.', 'https://picsum.photos/id/28/200/300', '15', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(10, 5, 'Qui et voluptates eius iste.', NULL, 'Incidunt aut velit iste est voluptatem a nihil sed qui placeat exercitationem consequuntur expedita eos est eos est voluptatum ad nulla consequatur repudiandae mollitia velit et nam dolor sed praesentium sapiente sint quis corporis harum aut tenetur maiores molestias ea qui aut tempora veritatis numquam esse adipisci vitae sit quis laudantium aut et deserunt tempora est.', 'https://picsum.photos/id/95/200/300', '11', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(11, 10, 'Qui quaerat doloremque repellendus animi.', NULL, 'Quae atque adipisci quibusdam distinctio nihil mollitia sed eos dolorem voluptatibus omnis veniam reprehenderit ad esse ut quibusdam occaecati ut enim eaque necessitatibus magni vel et repellendus at rem inventore ullam nam.', 'https://picsum.photos/id/92/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(12, 8, 'Cupiditate itaque similique dolor.', NULL, 'Et repellendus quia eos explicabo autem expedita dignissimos alias repellendus ratione consequuntur commodi excepturi numquam nisi id sit voluptatem tempore accusamus velit aperiam quod et in quaerat et quia dolorem similique fuga est ea est quod enim vero et ullam sint praesentium dicta ipsa aut consequatur est laborum officia qui sequi doloribus voluptatem hic expedita rerum dolorum.', 'https://picsum.photos/id/39/200/300', '19', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(13, 1, 'Porro ipsum non sit.', NULL, 'At sapiente alias soluta itaque qui atque velit dolor possimus eaque libero omnis nobis non ut corporis veniam culpa dolor ad qui provident aliquam praesentium nobis sint recusandae qui illum possimus voluptas perferendis veniam reprehenderit odit officiis temporibus dolores distinctio sapiente blanditiis repellendus sunt veniam ut excepturi quia debitis aut est quia eligendi tenetur assumenda ad dolor quae nostrum id dicta.', 'https://picsum.photos/id/95/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(14, 5, 'Corporis aspernatur maiores ea.', NULL, 'Rerum ipsa laudantium ad rerum minus et ab quas aliquid velit rerum ratione sapiente enim officia est dolore reprehenderit ut eaque et sed labore aut nemo sapiente laborum nihil dolor rem iure sunt esse maiores voluptas quasi eaque nihil eum labore explicabo vitae.', 'https://picsum.photos/id/99/200/300', '19', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(15, 6, 'Dolore vel illum et a dolore.', NULL, 'Eaque eligendi sit et deserunt hic magni deserunt voluptatem saepe modi rem incidunt possimus quas vel similique dolorem sint nobis corporis quod sint itaque eum dolore itaque rerum voluptas alias impedit cum perferendis debitis ut incidunt aliquid.', 'https://picsum.photos/id/5/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(16, 8, 'Voluptas ea laborum impedit aut provident.', NULL, 'Est corrupti cum quidem alias repudiandae sunt eligendi fugit illo tempore repellendus voluptates cupiditate ipsam vel repellat et culpa sed aut maxime reiciendis ut id rem excepturi quisquam consequatur dicta voluptas id itaque dignissimos ut qui ullam tenetur qui nisi corrupti et sit optio consectetur et voluptas nulla consequuntur reprehenderit ut provident est sed sint tempore optio corrupti et.', 'https://picsum.photos/id/63/200/300', '10', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(17, 9, 'Consequuntur quis molestias ut ratione.', NULL, 'Voluptatum eligendi itaque at ipsum optio officiis voluptas quae quas quia ut occaecati sed voluptas fugiat optio quo et iusto eum magni fugit rerum mollitia cumque ipsam vero quis provident maiores expedita dolorem molestiae maiores voluptate voluptates at provident minima aliquid minima qui atque autem ab est exercitationem id cumque voluptas.', 'https://picsum.photos/id/54/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(18, 7, 'Eos dolor deserunt sunt voluptas.', NULL, 'Rerum debitis officiis et vero hic dolorum sunt ea sed sint sint repellendus vitae sapiente deserunt velit tenetur adipisci rerum est et et cumque minus doloremque eos dolores eos consequuntur dolor magni asperiores nesciunt tempore debitis unde quisquam exercitationem minus molestias temporibus.', 'https://picsum.photos/id/66/200/300', '19', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(19, 7, 'Doloribus sed enim quo doloremque.', NULL, 'Sit perferendis mollitia consequatur provident quae dolorum vero et quo veritatis numquam accusantium eos nam fuga et soluta aut quod enim aliquid vero sit qui quis mollitia omnis odio sit eaque accusantium aut eum delectus reiciendis ut voluptatem debitis aut similique sed aut earum quia sunt in officia blanditiis in est rerum autem alias.', 'https://picsum.photos/id/38/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(20, 2, 'Eligendi incidunt quidem porro quia itaque.', NULL, 'Harum aut quod minima autem ratione pariatur placeat dolorem quis aliquid omnis voluptate rerum autem quae beatae suscipit repudiandae minima odio dolor natus modi alias et dignissimos eum repudiandae animi quo tempora qui nam.', 'https://picsum.photos/id/78/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(21, 2, 'Quibusdam reiciendis adipisci tenetur.', NULL, 'Mollitia sapiente quia voluptas maiores tempora veniam quos reprehenderit rerum eius ut laudantium et aperiam esse dolor et in animi maxime libero commodi rerum molestiae ipsa voluptatem deleniti eaque id quasi dignissimos voluptatem quia quia eos error corrupti voluptatem illo.', 'https://picsum.photos/id/2/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(22, 9, 'Ut hic repellendus inventore aut.', NULL, 'Qui debitis ut tenetur sed aut dolores excepturi voluptatem sit accusamus impedit repellat aspernatur et eum cum distinctio pariatur exercitationem similique quis sit in laboriosam odio hic et consequatur saepe optio rerum asperiores temporibus dolorem nihil qui esse qui eius quod voluptatem sit deserunt porro.', 'https://picsum.photos/id/27/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(23, 4, 'Consequatur quia aspernatur quis sit.', NULL, 'Dolores omnis quo sit quod error similique est reprehenderit esse ut optio voluptatem beatae adipisci illum inventore incidunt animi enim perferendis vel adipisci at in excepturi repellat ducimus deserunt aliquid qui fuga distinctio itaque sequi eligendi non ullam vitae distinctio sit repudiandae mollitia perspiciatis sequi unde reiciendis illo explicabo sed voluptate aperiam cupiditate laudantium iste quis ut ut animi ut facilis aut voluptatem ipsam iusto.', 'https://picsum.photos/id/40/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(24, 6, 'Ab vitae nemo blanditiis.', NULL, 'Reprehenderit porro dignissimos magnam quo consequuntur labore provident mollitia et nesciunt dolor aspernatur natus dolor et non pariatur libero quis facilis alias voluptatibus impedit aliquam natus dolores ut quia odio ea nihil praesentium cum est necessitatibus est veniam omnis ut magni ea in nesciunt cum velit maxime enim voluptatem sed quisquam enim modi consectetur non non omnis rerum nesciunt sed sit sed est.', 'https://picsum.photos/id/66/200/300', '12', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(25, 2, 'Tenetur perferendis nam ut.', NULL, 'Quam aut veritatis ut adipisci quos qui consequatur corrupti quia ut quidem occaecati et tempora nobis nesciunt laboriosam rerum deserunt atque praesentium nulla ex nisi et quasi fugit sequi cumque ducimus mollitia voluptatem aut accusamus cumque et atque quisquam rem voluptatum tempora et eos cum dignissimos est quia ut et dolorem natus soluta odit molestias quo voluptatum rem aut vitae dicta at.', 'https://picsum.photos/id/89/200/300', '13', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(26, 7, 'Soluta earum iste rem maxime blanditiis.', NULL, 'Autem occaecati exercitationem reiciendis recusandae minus inventore laudantium eius enim et minima in qui doloremque totam magni reprehenderit ab labore tempore itaque deleniti qui at culpa eum exercitationem qui molestiae est nihil temporibus iste qui adipisci voluptas et voluptate est iure quae in distinctio nostrum itaque natus rem porro quae voluptas et in accusamus quis aut.', 'https://picsum.photos/id/27/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(27, 5, 'Dolorum laudantium quia.', NULL, 'Voluptatibus sit sint ipsam molestias placeat dolores impedit commodi consequatur sint voluptas temporibus est possimus ab earum quae sit at cupiditate quia architecto minima molestiae tempora cumque quis quia aut praesentium ipsa inventore ea et possimus sint veniam et quis sint iure recusandae aut inventore rerum non impedit labore ducimus labore ipsa et ipsum aspernatur quia odit ullam voluptatum sunt ipsum et et ab sint quis.', 'https://picsum.photos/id/41/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(28, 6, 'Veniam mollitia dignissimos consequuntur.', NULL, 'Consequuntur sed placeat consequatur dicta aspernatur quas eligendi enim dolor aut numquam ipsam est veniam enim blanditiis dolor architecto nemo iure cum dolorem beatae perspiciatis similique non perspiciatis animi maxime esse deleniti sit sunt necessitatibus in repellendus recusandae eaque in excepturi.', 'https://picsum.photos/id/28/200/300', '15', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(29, 2, 'Incidunt sint laboriosam facere.', NULL, 'Voluptas distinctio voluptates quaerat nesciunt maxime voluptatem enim voluptatum deserunt voluptatem similique ea sed harum perspiciatis officiis alias ut animi itaque blanditiis aliquid et placeat hic quos aut commodi accusamus iure et qui nesciunt aut ab est repellat earum reprehenderit.', 'https://picsum.photos/id/4/200/300', '11', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(30, 3, 'Laboriosam quae sit et.', NULL, 'Explicabo assumenda hic amet tempore commodi in doloremque qui molestias voluptatum dolorem maiores officia ipsam eos sit nulla enim consectetur sit aspernatur sapiente ut alias voluptatibus aut culpa rem ea optio laboriosam libero eaque perspiciatis esse dolor temporibus sit deleniti cupiditate sed possimus ab aut hic et ut odit fugit omnis cupiditate.', 'https://picsum.photos/id/87/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(31, 10, 'Repudiandae sit non vel.', NULL, 'Qui iure exercitationem non harum non minima velit dolorem ut et et beatae aliquam quia ipsam quia sequi molestiae nisi dolor sed molestiae quia aut reiciendis molestiae corporis non quisquam aut fugit minus minima consequuntur recusandae provident ut et nisi at cumque ex et quas quidem nihil tenetur optio aut animi blanditiis velit nostrum id praesentium eaque et est.', 'https://picsum.photos/id/58/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(32, 9, 'Occaecati eligendi unde eligendi.', NULL, 'Sit necessitatibus dolorem asperiores non eius ipsum facilis tenetur illo perspiciatis velit facilis vero omnis eveniet molestiae labore quidem et ea omnis eos sit delectus quia consectetur enim rem molestiae at ad.', 'https://picsum.photos/id/24/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(33, 1, 'Dolorem impedit enim qui libero rerum.', NULL, 'Minus aliquam numquam expedita possimus totam neque nobis est et dolorum qui rerum deleniti ducimus minima deserunt consequuntur ea ullam quos reiciendis quo expedita porro nam deleniti rerum perferendis officia ipsum omnis voluptates perferendis voluptatem eum.', 'https://picsum.photos/id/53/200/300', '18', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(34, 4, 'Sed eum quam ducimus.', NULL, 'Id vel porro asperiores inventore dolorem earum et exercitationem eaque qui quas molestiae quibusdam maiores ut voluptas adipisci facilis illo omnis ex quis nesciunt nihil nisi perferendis sed dolores expedita accusamus qui rerum dolorum sit eum est praesentium deleniti laboriosam ullam eaque doloribus eius delectus nisi ut consequuntur et quae ut ratione quidem harum.', 'https://picsum.photos/id/70/200/300', '14', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(35, 9, 'Ea harum aut voluptatem.', NULL, 'Voluptatem facere qui iste expedita ducimus est minus natus et nobis sequi et porro occaecati alias non placeat nulla inventore fugit distinctio doloribus rerum molestias quae sunt adipisci ullam et autem ut quia optio vel sint aut eos quod sit iusto est qui minima error necessitatibus excepturi neque numquam esse iste ea officia ad dolor dolore dolorum cupiditate consequatur est fuga quia.', 'https://picsum.photos/id/3/200/300', '10', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(36, 3, 'Repellendus quia possimus maxime.', NULL, 'Dicta aut et ab sequi officia sit exercitationem exercitationem voluptas voluptate voluptatem vitae consequatur officia molestias enim quasi quam aperiam aspernatur rerum vitae adipisci aut consectetur est asperiores nulla sed eum aperiam quis corrupti earum perferendis mollitia tempora expedita quia eveniet hic amet provident quae.', 'https://picsum.photos/id/22/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(37, 6, 'Itaque ab vero eum.', NULL, 'Cupiditate vero quis velit architecto alias et pariatur iusto quo autem architecto ex ut deserunt cum consequatur unde ut qui aut architecto dolores officia blanditiis natus est delectus consequatur animi molestias dolores repellendus non praesentium et minima autem reprehenderit non rerum incidunt alias labore et quidem aperiam atque praesentium unde est architecto maxime nihil consequatur est ex fugit dolorem.', 'https://picsum.photos/id/90/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(38, 2, 'Quidem iusto perspiciatis qui.', NULL, 'Similique voluptatem eligendi illo repellendus voluptatum ut sunt molestias similique facilis aut quaerat perferendis eius quae dolore consectetur numquam ex sit consequatur consequatur ad nobis ea quo maiores exercitationem sit fugit velit quidem eum id deserunt ipsum.', 'https://picsum.photos/id/64/200/300', '15', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(39, 8, 'Sapiente voluptatem vel consequatur.', NULL, 'Nulla quo quia et facere et molestiae aut nostrum hic assumenda facilis fugiat eum consequatur molestias sit delectus sed ea id expedita nostrum possimus quas libero pariatur provident sit laborum tenetur.', 'https://picsum.photos/id/37/200/300', '19', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(40, 1, 'Quia dolores aut aut expedita.', NULL, 'Et quia non iste minima iusto doloribus aperiam aspernatur aut et optio voluptatibus id sunt dolores beatae neque repudiandae aut quisquam et quis in quos quia provident eum delectus amet ducimus maiores delectus voluptatem alias nisi ducimus tenetur totam qui fugiat id hic quibusdam nihil laboriosam nobis enim qui mollitia totam perspiciatis enim voluptates dolorum minima repellendus aspernatur quisquam nihil aperiam mollitia earum perferendis explicabo ut esse similique laborum.', 'https://picsum.photos/id/63/200/300', '12', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(41, 9, 'Et et placeat.', NULL, 'Nihil labore modi repellendus quia autem quod et laborum nulla ea officiis deserunt ea quae quia est quasi harum iusto explicabo doloremque voluptatem enim voluptate aut officia et commodi facere ut enim quisquam repellat magni fugiat earum enim ut et consequuntur adipisci qui dignissimos perferendis accusantium quis ea sint similique sit cumque consequatur laborum et quo optio perspiciatis sit tenetur sunt id velit corrupti quo.', 'https://picsum.photos/id/70/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(42, 1, 'Eius saepe labore sed id consequatur.', NULL, 'Animi error officia id aperiam ipsa est soluta nulla qui perspiciatis non ea enim ipsum ducimus non tempora voluptatum et necessitatibus qui id autem et expedita a qui voluptate omnis consequuntur doloribus molestiae sed impedit illo eos ut aut quo quo quia minus in enim voluptas omnis consequatur sed qui sunt reiciendis sapiente hic dolorem.', 'https://picsum.photos/id/9/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(43, 1, 'Iure quas quaerat doloremque ut.', NULL, 'Occaecati delectus eos molestiae est autem omnis voluptas nostrum nemo porro provident recusandae blanditiis nobis ea natus modi aut laudantium est placeat magnam incidunt adipisci debitis sint eveniet facere blanditiis est perferendis fugit reprehenderit dolorem omnis fuga rerum qui mollitia quos et cumque blanditiis omnis non esse unde dolores nisi repudiandae architecto quae.', 'https://picsum.photos/id/61/200/300', '20', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(44, 7, 'Minus nulla et ut tempora.', NULL, 'Ipsa quibusdam consequatur quis accusamus facilis modi sed in deleniti delectus labore atque dolor omnis quas nobis delectus eos saepe sint corrupti accusamus perspiciatis necessitatibus tenetur iusto eligendi vel assumenda nam aut et consequatur recusandae qui sequi similique eius dignissimos consequatur vitae nam eius magnam sed quia consequuntur.', 'https://picsum.photos/id/15/200/300', '13', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(45, 8, 'Molestias deserunt aspernatur aut.', NULL, 'Alias molestiae voluptatem delectus quas accusamus eveniet et quam harum dolores labore consequuntur aperiam praesentium corporis sit quasi ex quisquam minima quo rerum magni qui nam aut minus quia est quisquam repellendus architecto nemo enim ipsum facilis est et et suscipit dignissimos animi omnis delectus hic alias suscipit omnis enim alias non consectetur placeat nam quidem.', 'https://picsum.photos/id/58/200/300', '10', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(46, 9, 'Omnis ab consequatur magni aliquid.', NULL, 'Velit laudantium rem voluptates quia quis maxime id saepe eos quam et asperiores sint sint deserunt occaecati accusamus iste provident in eaque iste officia culpa alias labore ad nemo et placeat omnis molestiae ea quod dolorem quaerat voluptatem aut minima iusto fugiat repellat et delectus blanditiis est eligendi ad eius minus distinctio possimus sit esse id non odit sunt reiciendis.', 'https://picsum.photos/id/88/200/300', '12', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(47, 5, 'Voluptates qui quia.', NULL, 'Eos dicta quia enim et quibusdam reiciendis est sit ut neque dolorem nostrum mollitia illum totam similique officiis quaerat corrupti at qui delectus temporibus aut modi facilis error incidunt harum nemo ut natus et fugiat quia quibusdam culpa earum earum et repudiandae occaecati numquam eum enim porro sit est fuga ea nesciunt cupiditate quo perferendis laudantium incidunt consequatur exercitationem ut enim sed non ut a repellat ut pariatur.', 'https://picsum.photos/id/56/200/300', '10', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(48, 10, 'Velit rem rerum.', NULL, 'Non doloremque ut ut et fugiat debitis et aperiam corporis adipisci soluta modi voluptas possimus aspernatur veniam ipsam qui quis inventore praesentium non repellendus eligendi dolor praesentium perspiciatis ut magni fugit nam ratione eveniet et voluptas quia qui rerum reprehenderit qui alias rerum quo quo modi quia sunt molestias distinctio harum ea et aut alias qui voluptas corporis quod suscipit.', 'https://picsum.photos/id/68/200/300', '16', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(49, 4, 'Modi quidem modi voluptatem ipsam.', NULL, 'Dignissimos dolores ipsum dignissimos voluptatem iusto possimus nihil et unde ipsam magnam voluptatem incidunt tempore quae accusamus numquam mollitia quas omnis facilis quos nihil provident et qui totam voluptates omnis aut qui ipsum alias commodi accusantium officiis alias.', 'https://picsum.photos/id/92/200/300', '19', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(50, 4, 'Corrupti earum accusamus accusantium et ipsa.', NULL, 'Praesentium aliquid aut blanditiis molestiae inventore sequi maiores ipsum a id aut fugit molestias facilis quibusdam animi ipsam odio voluptatem commodi explicabo voluptate in enim dignissimos ullam facilis quis tenetur iure et rerum modi ea officiis quasi aliquam eveniet vitae consequatur quo eius laborum velit distinctio sint nam accusantium dolorem illum quam quisquam accusamus optio quidem iusto sunt tempore debitis ut corrupti facere accusantium aliquid ducimus et.', 'https://picsum.photos/id/51/200/300', '17', '2020-03-03 17:42:38', '2020-03-03 17:42:38'),
	(51, 10, '44', NULL, '44', 'assets/covers/0B61dSkDCGrS1KWhBAaFqJWdiK1Bq3Vs9di26mVX.jpeg', '44', '2020-03-08 06:15:21', '2020-03-08 06:15:21'),
	(52, 8, '111', NULL, '111', 'assets/covers/jPXmNrkAng4dpHk0jdd3Y1hKADXk4gYeSHWbwmMJ.jpeg', '111', '2020-03-08 06:20:16', '2020-03-08 06:20:16'),
	(53, 3, '222', NULL, '222', 'assets/covers/9u3YMzBSrWXvZhBYuco5asCaY0IVPlmI6NoM2JkM.jpeg', '222', '2020-03-08 06:24:56', '2020-03-08 06:24:56'),
	(54, 10, '666', NULL, '666', 'assets/covers/iaBcA7L9gRl6dtNgLtAmoX2wqxGbTrBlJe9N6d5V.jpeg', '666', '2020-03-08 13:55:49', '2020-03-08 13:55:49'),
	(55, 3, '777', NULL, '777', 'assets/covers/LnnqlRpoVBZRYCoQnqENITEx7GFZxTL6vwwOX1JI.jpeg', '777', '2020-03-08 13:59:27', '2020-03-08 13:59:27'),
	(56, 4, '1', NULL, 'lian', 'assets/covers/YCjmwb8kmGgdswdfvuCQNnjCVsjlICjDPnTtAXx0.jpeg', '45', '2020-03-08 14:05:11', '2020-03-08 14:05:11');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_03_01_023008_create_permission_tables', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.model_has_roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 1),
	(2, 'App\\User', 2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', NULL, NULL),
	(2, 'user', 'web', NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table db_laravelbasic.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_laravelbasic.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Lian Mafutra', 'lianmafutra@gmail.com', NULL, '$2y$10$WLRXa5atg/Cav1JCB2yhHuD9jY9OwbsjnM3j20PxIYe7aKwWauQIC', NULL, '2020-03-01 04:40:00', '2020-03-01 04:40:00'),
	(2, 'ika_user', 'ika@gmail.com', NULL, '$2y$10$SC1nEBAJzQF/k5AZU/NvFOw2sLrTQo7fxvCyfZZWR/f96BA4D.3yu', NULL, '2020-03-01 04:51:08', '2020-03-01 04:51:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
