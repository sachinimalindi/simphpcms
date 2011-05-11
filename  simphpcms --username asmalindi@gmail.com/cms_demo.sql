-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2011 at 12:05 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(12) NOT NULL,
  `cat_despription` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_title`, `cat_despription`) VALUES
(24, 'cat1', 'categorie 1'),
(25, 'cat2', 'categorie 2'),
(26, 'cat3', 'categorie 3'),
(27, 'cat4', 'categorie 4'),
(28, 'cat5', 'categorie 5'),
(29, 'cat6', 'categorie 6'),
(30, 'cat7', 'categorie 7'),
(31, 'cat8', 'categorie 8'),
(32, 'cat9', 'categorie 9'),
(33, 'cat10', 'categorie 10'),
(34, 'cat11', 'categorie 11'),
(35, 'cat12', 'categorie 12'),
(36, 'cat13', 'categorie 13'),
(37, 'cat14', 'categorie 14'),
(38, 'cat15', 'categorie 15'),
(39, 'cat16', 'categorie 16'),
(40, 'cat17', 'categorie 17'),
(41, 'cat18', 'categorie 18'),
(42, 'cat19', 'categorie 19'),
(43, 'cat20', 'categorie 20'),
(44, 'cat21', 'categorie 21'),
(45, 'cat22', 'categorie 22'),
(46, 'cat23', 'categorie 23'),
(47, 'cat24', 'categorie 24'),
(54, 'test cat', 'this for a test');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(150) NOT NULL,
  `post_author` int(11) NOT NULL,
  `postcontent` text NOT NULL,
  `category` int(11) NOT NULL,
  `linklabel` int(12) DEFAULT NULL,
  `showing` enum('0','1') NOT NULL,
  `keywords` mediumtext NOT NULL,
  `c_date` date NOT NULL,
  `porder` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `category` (`category`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_author`, `postcontent`, `category`, `linklabel`, `showing`, `keywords`, `c_date`, `porder`) VALUES
(1, 'test post 1', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu augue ipsum. Nulla nec mauris augue, ac ultricies justo. Sed semper tortor quis leo aliquet sodales. Ut leo dui, pulvinar vel mattis non, fermentum id ipsum. Phasellus eget urna nibh, ac ornare libero. Nam sollicitudin, purus nec bibendum molestie, diam augue volutpat arcu, eu hendrerit enim lacus sit amet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin convallis enim at risus fermentum eu iaculis quam elementum. Sed feugiat orci sed magna pretium consequat. Ut varius felis vel quam vehicula molestie. Quisque sit amet erat tellus. Aliquam mauris turpis, dictum id posuere et, egestas sit amet purus. Aliquam a tincidunt eros. Quisque ornare accumsan varius. Nunc mi tellus, varius ac sollicitudin quis, egestas vel dui. Aliquam ultricies neque id mauris tincidunt at feugiat leo eleifend. Integer vulputate, turpis at laoreet volutpat, felis justo porta nunc, at tempus elit sapien ut est. Duis volutpat tortor mattis leo dictum aliquet. Donec consequat euismod mauris sit amet faucibus.', 24, NULL, '1', '', '2011-04-28', NULL),
(2, 'test post 2', 1, 'Sed placerat dictum massa vitae dapibus. Sed elementum erat sed metus vulputate in viverra augue aliquet. Duis interdum accumsan eros. Quisque risus sapien, pellentesque ut aliquet quis, tempor eget metus. Mauris quam ipsum, varius vitae blandit id, mollis ut lectus. Praesent consectetur luctus eros, sit amet vehicula eros vestibulum et. Integer risus enim, iaculis vitae iaculis ac, auctor commodo magna. Praesent imperdiet tortor ut massa tincidunt sollicitudin. Donec tempor bibendum volutpat. Phasellus porta mollis vehicula. Vestibulum dui nibh, posuere et iaculis vitae, blandit nec odio.', 25, NULL, '1', '', '2011-04-28', NULL),
(3, 'test post 3', 1, 'Curabitur euismod hendrerit massa, ut condimentum dui consequat id. Nam sed sagittis tellus. Curabitur a scelerisque sapien. Nulla sit amet ligula tortor, ac gravida dolor. Pellentesque vestibulum lorem adipiscing dui molestie quis auctor lectus auctor. Etiam porttitor, dui sed faucibus auctor, neque nibh varius turpis, id rhoncus mi magna ac enim. Pellentesque congue mi sed nisl placerat ultricies. In hac habitasse platea dictumst. Integer dictum, ante eget cursus iaculis, dui nisl congue leo, a eleifend enim ipsum at lacus. Morbi quis mauris et quam laoreet tempor.', 26, NULL, '1', '', '2011-04-28', NULL),
(4, 'test post 4', 1, 'Proin elementum malesuada quam, ac rutrum metus semper vel. Etiam nec eros sem. Mauris faucibus varius purus et adipiscing. Aliquam bibendum massa ac justo mattis et ornare arcu molestie. Suspendisse potenti. Integer quis ipsum augue. Integer malesuada imperdiet ligula, ac posuere urna venenatis sed. Nunc ut dui dolor, ut tristique nisi. Vestibulum in tempus turpis. Integer adipiscing dignissim neque sed luctus. Nunc iaculis convallis tellus, sit amet rutrum nisl egestas quis. In hac habitasse platea dictumst. Aliquam ac urna quam, et cursus eros.', 27, NULL, '1', '', '2011-04-28', NULL),
(5, 'test post 5', 1, 'Morbi porttitor ultrices sem. Ut vel erat mi. Nulla accumsan dapibus sem vestibulum mattis. Suspendisse turpis nisl, bibendum quis aliquet in, pellentesque vel tellus. Morbi adipiscing elementum sem ut laoreet. Praesent sollicitudin erat nec mauris consectetur volutpat sodales leo sodales. Mauris condimentum consequat velit, et varius magna feugiat ut. Maecenas luctus commodo erat, ac tempor mauris imperdiet vitae. Phasellus ut orci felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vulputate tristique sapien in rutrum. In tempor, mi non pharetra rutrum, lectus risus placerat mauris, ut vestibulum ante mauris et risus. Cras bibendum, dolor quis fringilla ultricies, nulla dui luctus lorem, in vehicula turpis orci in velit. Nunc eget urna justo.', 28, NULL, '1', '', '2011-04-28', NULL),
(6, 'test post 6', 2, 'Nam a nulla id nibh tempus ultrices. Donec sit amet justo sed tortor eleifend laoreet. Cras eget massa sit amet ante eleifend lobortis. Mauris quis risus libero, at cursus enim. In sit amet tellus libero, ut mollis enim. Pellentesque ac tempus ligula. Suspendisse posuere vehicula bibendum. Fusce lorem neque, scelerisque et dignissim at, egestas at quam. Nulla eleifend pellentesque risus in porttitor. Aenean vitae dui ut massa vehicula bibendum. Nam eget blandit justo. Ut vehicula consectetur sem, nec fermentum sapien vestibulum id. Etiam dolor felis, faucibus ut fringilla vitae, ullamcorper a lorem. Morbi vitae ipsum sed felis semper laoreet sit amet quis nibh. Mauris erat libero, facilisis in tempus vitae, dapibus in odio. Vestibulum iaculis libero a nisl gravida et fermentum sapien condimentum.', 29, NULL, '1', '', '2011-04-28', NULL),
(7, 'test post 7', 2, 'Aenean tortor mi, viverra sed vulputate nec, tempus eu enim. Mauris ultricies elit fringilla felis dignissim consectetur. Morbi interdum lacinia turpis. Quisque eget justo odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris ac felis eu justo iaculis iaculis. Proin commodo sodales libero vel tempus. Praesent congue augue vitae dolor condimentum auctor sed at purus. Duis at augue et justo pharetra viverra. Vestibulum vel felis rutrum odio mollis aliquet vitae id ligula. Nam lacus justo, pretium id ullamcorper a, commodo at felis.', 30, NULL, '1', '', '2011-04-28', NULL),
(8, 'test post 8', 1, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi ac purus sed ante sollicitudin ullamcorper. Nullam feugiat nisi eget libero pharetra et vehicula velit rhoncus. Nunc tortor arcu, varius sit amet ornare ut, egestas eget nisi. Cras commodo magna vel nulla fringilla vitae sodales nisi fermentum. Nullam et ligula at augue blandit fringilla in tincidunt metus. Nam ac diam sit amet sem pulvinar aliquet quis non nibh. Duis nec mi ut nibh pellentesque interdum. Phasellus dolor ante, rhoncus dapibus rutrum et, aliquet a eros. Duis ut purus non eros tincidunt lobortis nec imperdiet dolor. Vivamus non odio quis risus mollis mattis non in nulla. Duis dolor tellus, viverra sed tincidunt a, mollis eu tellus. Nulla semper, est dapibus ullamcorper venenatis, velit tellus facilisis nibh, sit amet gravida risus risus sit amet sem. Donec vulputate rutrum ullamcorper. Praesent at libero velit. Phasellus vel ligula non tellus dignissim lacinia. Integer aliquam tempor dolor, vel volutpat turpis ultricies fringilla. Praesent volutpat massa eget lacus viverra pretium. Aenean eros odio, hendrerit a accumsan at, vehicula sed justo. Pellentesque libero eros, fermentum eget aliquam quis, tincidunt in est.', 31, NULL, '1', '', '2011-04-28', NULL),
(9, 'test post 9', 1, 'Sed consectetur est ac eros convallis a fermentum magna cursus. Aliquam erat volutpat. Mauris sit amet metus at tortor bibendum malesuada a vitae massa. Phasellus vel sollicitudin dolor. In eget eros vitae magna sagittis vehicula. Maecenas eleifend, erat et hendrerit commodo, purus nisl ultrices tortor, sit amet consectetur orci erat et neque. Etiam et nibh suscipit libero bibendum aliquet. Quisque libero eros, convallis varius sodales ut, fringilla sed nunc. Quisque eget condimentum sapien. Fusce eget convallis enim. Sed eget mi quam. Praesent convallis pharetra orci, a dictum massa blandit quis.', 32, NULL, '1', '', '2011-04-28', NULL),
(10, 'test post 10 ', 13, 'Nam pulvinar odio metus. Nulla justo urna, mollis et vulputate pellentesque, placerat et nulla. Nunc at lectus arcu, vel condimentum eros. Sed et eros nunc, eget aliquam purus. Suspendisse a diam tellus, in pellentesque augue. Etiam gravida dolor id metus tristique vel dignissim est dapibus. Vivamus rutrum, ipsum quis pharetra sodales, diam augue accumsan purus, sed porttitor magna mi vitae ante. Aliquam iaculis arcu sed mauris euismod id interdum tortor pulvinar. Praesent nisi turpis, viverra et lacinia posuere, venenatis non augue. Sed scelerisque ornare sapien, porttitor sagittis urna gravida id. Phasellus nulla nisi, tempor sodales condimentum non, ultricies sed orci. Cras dictum, nunc nec dignissim dictum, turpis mauris euismod nulla, quis malesuada massa turpis eget leo. Aenean at ipsum nec nulla tristique interdum. Morbi vulputate pellentesque dolor, non elementum odio malesuada eu. Nulla viverra facilisis velit, vel pharetra quam pulvinar in.', 33, NULL, '1', '', '2011-04-28', NULL),
(11, 'test post 11', 13, 'Ut fermentum arcu eget dolor elementum pretium. Donec euismod aliquam porttitor. Proin sed nisi eget turpis fermentum accumsan vel et nulla. Sed quam enim, vehicula sed faucibus vel, condimentum sed neque. Nam mauris elit, laoreet quis laoreet ut, tempor eu dui. Nullam cursus, mi nec eleifend laoreet, nisl libero adipiscing enim, non fringilla eros est eget nisi. Duis scelerisque est quis nisl suscipit cursus. Phasellus placerat nisi id nunc adipiscing in mollis nunc sollicitudin. Morbi consectetur nibh a libero facilisis interdum. Quisque iaculis, eros condimentum commodo iaculis, arcu dolor condimentum neque, eu facilisis sem nulla a sapien. Sed ultricies metus mi. Phasellus egestas suscipit neque et hendrerit. Suspendisse potenti. Donec non lacus eget urna pretium vulputate.', 34, NULL, '1', '', '2011-04-28', NULL),
(12, 'test post 12 ', 1, 'Donec sed libero at ante pharetra tempor. Vivamus adipiscing felis et ante dictum in aliquet ipsum vehicula. Praesent porta viverra nunc in congue. Integer sagittis metus eget enim pellentesque non aliquet elit egestas. Etiam tincidunt tristique magna non tempor. Phasellus metus tellus, consectetur sed tincidunt eu, egestas et velit. Cras libero sem, interdum vel aliquet facilisis, ultricies a sapien. Donec vulputate congue arcu id volutpat. Aenean vestibulum ornare elit. Proin et elit vel dui lobortis dignissim. Quisque lacinia purus in nulla rhoncus bibendum. Praesent vel ipsum non tellus suscipit auctor. Nunc et lacus nulla. Fusce dui ligula, ultrices ut convallis vitae, rutrum ac arcu. Ut sagittis felis nec erat laoreet varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus, nisl quis sodales placerat, leo felis blandit elit, nec varius arcu nisi laoreet nisi. Pellentesque pellentesque dolor eu erat convallis ut dignissim mi viverra.', 35, NULL, '1', '', '2011-04-28', NULL),
(13, 'test post 13', 1, 'Morbi tincidunt euismod urna, id auctor mi laoreet in. Aenean sed risus ante. Pellentesque laoreet metus et sapien aliquam et varius tortor tincidunt. Nulla pretium nisl vel elit ullamcorper vel mattis metus mattis. Nulla facilisi. Sed vitae nisi nibh, sollicitudin vulputate metus. Proin hendrerit turpis sit amet lacus elementum ultrices. Sed consectetur blandit turpis vel pharetra. Cras convallis nunc quis diam vestibulum elementum. Nam lacinia eros porta ipsum scelerisque volutpat.', 36, NULL, '1', '', '2011-04-28', NULL),
(16, 'test post 14', 1, 'Curabitur venenatis elementum lacinia. Pellentesque tincidunt faucibus leo, et condimentum tortor pretium sed. Sed imperdiet bibendum nibh a faucibus. Proin molestie est ligula. Mauris ut enim quam. Phasellus dui enim, dictum sit amet volutpat sit amet, malesuada tempor leo. Vivamus ac neque risus. Mauris id iaculis dui. Praesent consectetur arcu sit amet purus congue placerat. Fusce vestibulum ante nec libero aliquam varius. Nulla iaculis imperdiet diam, in iaculis massa mattis id. Pellentesque tincidunt sodales dignissim. Aliquam erat volutpat. Integer quis est nisi. Pellentesque quis auctor quam. Duis accumsan luctus lectus ut consectetur. Pellentesque ut purus nisl. Donec dapibus purus dui, id porttitor velit. Morbi volutpat elementum enim aliquam luctus', 37, NULL, '1', '', '2011-04-29', NULL),
(17, 'test post 15 ', 2, 'In semper scelerisque nunc, eu euismod erat imperdiet ac. Ut nibh lorem, ullamcorper sed egestas vitae, laoreet at libero. Aliquam cursus hendrerit quam, in ornare ipsum bibendum quis. Phasellus sit amet pretium sem. Proin sit amet turpis nunc. Pellentesque scelerisque mauris scelerisque augue sagittis placerat. Aliquam erat volutpat. Praesent magna diam, tincidunt mollis sollicitudin at, scelerisque quis mauris. Donec tincidunt ultricies malesuada. Mauris scelerisque ante vitae lorem ullamcorper et pharetra leo ultrices. Curabitur vel magna eu urna posuere venenatis ac et tortor. Suspendisse auctor felis a erat sagittis adipiscing. Proin lacinia adipiscing lacus. Integer rhoncus nibh ut felis tincidunt consectetur. Nullam at metus felis. Phasellus et fringilla ante. Morbi diam nibh, fermentum vitae eleifend ac, pulvinar dictum ante.', 38, NULL, '1', '', '2011-04-26', NULL),
(18, 'test post 16', 2, 'Praesent sed neque at leo cursus sagittis. In venenatis adipiscing magna ornare sagittis. Suspendisse in dolor a leo rutrum condimentum. Nulla quis est arcu, id tempus elit. Nulla congue consectetur velit in faucibus. Quisque nisl enim, dignissim ut auctor in, volutpat vel purus. In in malesuada erat. Aliquam erat volutpat. Morbi ac sapien lectus. Duis sapien sem, congue sed interdum eu, eleifend a nunc. Phasellus varius urna et metus sodales sagittis. Etiam commodo, neque ut luctus elementum, risus libero placerat nibh, quis consectetur libero tellus et ipsum.', 39, NULL, '1', '', '2011-04-25', NULL),
(19, 'test post 17', 1, 'Nam aliquet luctus lorem, eget tempor diam auctor sed. Sed sed metus enim. Etiam libero ipsum, molestie eu condimentum eget, vehicula vitae felis. Maecenas justo mi, cursus ut condimentum eleifend, faucibus a orci. Sed pretium, quam vitae tincidunt venenatis, lectus ipsum posuere erat, nec hendrerit purus dui eu dolor. Nulla et orci mi. Phasellus nisl justo, scelerisque at volutpat quis, ultricies id erat. Nullam mattis arcu quis libero imperdiet ac suscipit diam elementum. Vivamus dapibus lectus et velit aliquet eget ultricies enim bibendum. Donec facilisis adipiscing ipsum, sit amet dictum diam pharetra eget.', 40, NULL, '1', '', '2011-04-25', NULL),
(20, 'test post 18', 1, 'Sed condimentum porta bibendum. Donec sagittis porta iaculis. Phasellus laoreet porta dolor non fermentum. Donec dui neque, dignissim et congue id, placerat sit amet velit. Donec ut enim a turpis dapibus tempor nec vitae eros. Ut dignissim neque massa, non ultrices lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce metus metus, pharetra id mollis quis, consectetur vel sem. Duis sit amet orci mi. Sed a lorem eu odio viverra luctus. Donec dapibus tincidunt orci, vel volutpat elit adipiscing et. Mauris massa velit, pretium ut congue eget, volutpat vitae magna. Etiam euismod placerat mi in sagittis. Morbi sagittis semper sagittis. Proin vitae justo eu nisl volutpat mattis. Suspendisse pulvinar ante vitae dolor sagittis placerat. Vivamus non est eros, pretium gravida nulla. Proin vitae massa quis eros placerat ultrices. Praesent egestas porta neque a pretium.', 41, NULL, '1', '', '2011-04-22', NULL),
(21, 'test post 19', 2, 'Aliquam lobortis tellus non arcu feugiat ac consectetur quam malesuada. Donec vel lorem nunc. Nunc metus tortor, ultricies id tincidunt eu, volutpat ac risus. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Integer pharetra commodo lectus, ac imperdiet felis lacinia tincidunt. Phasellus et dui vitae tellus hendrerit rhoncus at placerat mi. Aliquam suscipit porttitor mattis. Aliquam tempor bibendum sem ut gravida. Vestibulum odio ante, ultricies vel viverra in, tempor nec ligula. Morbi sit amet tellus nec neque ullamcorper lobortis id in tellus. Donec dapibus gravida sem ac ullamcorper. Suspendisse vulputate ornare dolor, eu commodo quam feugiat vitae. Fusce diam orci, lobortis nec condimentum in, cursus ut urna.', 42, NULL, '1', '', '2011-04-22', NULL),
(22, 'test post 20', 1, 'In neque urna, ullamcorper vel pellentesque ut, ultrices eget ipsum. Curabitur porta dictum venenatis. Vestibulum consectetur varius varius. Praesent congue lacus non arcu consectetur tincidunt. Fusce pretium blandit lacus eu pulvinar. Mauris arcu justo, blandit aliquet luctus aliquet, feugiat in felis. Nam euismod metus id nisl consectetur in molestie risus sodales. Mauris condimentum mauris id diam iaculis fringilla. In non risus vitae purus tristique posuere. Proin vel est eu quam eleifend convallis. Fusce neque mi, gravida vitae egestas at, pellentesque sit amet orci. Pellentesque tortor eros, bibendum nec fringilla vitae, condimentum non enim.', 44, NULL, '1', '', '2011-04-22', NULL),
(23, 'test post 21', 13, 'Nulla sodales lacinia ipsum, vitae vestibulum leo suscipit a. Quisque ac elit sed ligula venenatis cursus. Cras gravida tempus arcu a pellentesque. Nunc urna metus, hendrerit ut aliquam id, rutrum quis velit. In hac habitasse platea dictumst. Sed at blandit orci. Morbi dui magna, dignissim at volutpat a, euismod sit amet orci. Maecenas in ligula ullamcorper urna molestie egestas at et magna. Ut pretium, mi quis volutpat lacinia, felis tortor tincidunt mi, vitae ornare nibh quam ac ipsum. Mauris eget iaculis magna.', 43, NULL, '1', '', '2011-04-26', NULL),
(24, 'test post 22', 1, 'Nulla ante ipsum, pellentesque eget gravida quis, iaculis ut arcu. Sed id orci velit, eget eleifend arcu. Curabitur ac felis eros, ut congue lorem. Curabitur vel erat lorem. Sed augue turpis, euismod vitae consequat ac, fringilla nec velit. Morbi vehicula, eros eu pulvinar pulvinar, ipsum nisi ultricies massa, eu fermentum lacus magna non erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt convallis neque, et dictum augue eleifend sodales. Maecenas porttitor nisi nec enim ultrices adipiscing vel ac libero. Duis nisl lectus, tincidunt eget cursus et, imperdiet eu purus. Donec tortor erat, auctor a malesuada quis, sollicitudin ac tortor. Curabitur posuere dolor tincidunt felis dapibus tincidunt. Sed sollicitudin tristique urna. Curabitur imperdiet dignissim nulla suscipit posuere. Phasellus lobortis augue eu lacus viverra euismod. Ut euismod hendrerit viverra. Suspendisse tempus ultrices mauris vel mollis. Sed fermentum facilisis venenatis', 44, NULL, '1', '', '2011-04-25', NULL),
(25, 'test post 23', 1, 'Pellentesque suscipit augue laoreet mi consequat a consequat nisi scelerisque. Mauris vitae nibh at urna varius vestibulum nec a urna. Duis accumsan tortor a est suscipit facilisis. In hendrerit diam odio, nec facilisis dui. Donec varius, orci sit amet vehicula semper, nisl mi eleifend sem, a aliquet lorem nisl et sem. Sed euismod venenatis dapibus. Maecenas elit tortor, pretium vel rutrum at, luctus quis orci. Praesent hendrerit enim vitae nibh aliquam vestibulum rutrum lorem aliquam. Integer interdum quam nisi. Proin nisi lorem, fringilla eu luctus non, pretium in sapien. Ut sem tellus, gravida sit amet venenatis quis, interdum sit amet est. Quisque fermentum lectus ac orci aliquam eget interdum quam tristique. Phasellus sit amet nulla lectus, ut ornare lectus. Etiam vitae lorem magna.', 45, NULL, '1', '', '2011-04-27', NULL),
(26, 'test post 24', 13, 'Cras sit amet turpis et tellus mattis scelerisque ut sed ante. Donec ante libero, condimentum sit amet laoreet nec, vulputate nec metus. Etiam justo magna, pharetra ut sodales eu, consectetur non libero. Donec a sapien non enim viverra posuere vitae eu nulla. Phasellus turpis felis, faucibus quis tempus vel, accumsan molestie eros. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam sit amet tortor vel diam tempor ultrices. Integer congue arcu et nunc molestie laoreet. Nunc est nisi, ultricies eget ultricies non, tempor ut justo. Phasellus pellentesque suscipit turpis, ac vestibulum nulla suscipit sit amet. Ut ac diam arcu.', 46, NULL, '1', '', '2011-04-23', NULL),
(27, 'test post 25', 1, 'Donec vehicula suscipit dui vel viverra. Ut nec urna nibh. In vitae lectus arcu, ac luctus sem. Fusce turpis felis, pharetra ornare pretium eu, convallis et orci. Etiam vel enim vel odio posuere gravida vitae nec neque. Aliquam lobortis, nisi a dignissim sagittis, leo sapien posuere eros, id vulputate orci erat vitae neque. Curabitur leo sem, hendrerit vel tristique non, malesuada eu ligula. In mollis hendrerit augue et facilisis. Praesent fringilla mi ut lacus mollis vulputate. Donec sagittis massa ac lectus vehicula congue. Donec aliquam, risus porttitor aliquam tincidunt, diam eros tempus arcu, at rhoncus mi risus in dui. Cras adipiscing vulputate bibendum. Ut luctus lectus pulvinar ligula pharetra nec porta neque pretium. Mauris vulputate, mi in blandit ultricies, felis dolor ultrices justo, vel varius mi ligula ac mauris.', 47, NULL, '1', '', '2011-04-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_title` varchar(12) NOT NULL,
  `sec_url` varchar(25) NOT NULL,
  `sec_order` tinyint(2) NOT NULL,
  `sec_despription` varchar(100) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_title`, `sec_url`, `sec_order`, `sec_despription`) VALUES
(1, 'Home', '', 1, 'home here'),
(2, 'Code', '', 2, 'code here'),
(3, 'Php', '', 3, 'php hhmm'),
(4, 'Mysql', '', 4, 'mysql tama etin');

-- --------------------------------------------------------

--
-- Table structure for table `sectioncategorie`
--

CREATE TABLE IF NOT EXISTS `sectioncategorie` (
  `cat_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  KEY `cat_id` (`cat_id`,`sec_id`),
  KEY `cat_id_2` (`cat_id`),
  KEY `sec_id` (`sec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectioncategorie`
--

INSERT INTO `sectioncategorie` (`cat_id`, `sec_id`) VALUES
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(43, 3),
(44, 3),
(45, 4),
(46, 4),
(47, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(60) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `random` varchar(20) NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `userlevel` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `date`, `random`, `activated`, `userlevel`) VALUES
(1, 'sachini malindi', 'asmalindi', '0e0f9155f603f6568fd7218de63e63bf', 'asmalindi@gmail.com', '2011-04-25', '', 1, 12),
(2, 'char hettiarachchi', 'charka', '9b9702cef153ef16ed652b66f9f8ec60', 'djchar89@gmail.com', '2011-04-25', '', 1, 1),
(13, 'supun malinga', 'supun', 'c28a340921221fc7cffbb81ae3a782cb', 'asmalindi@gmail.com', '2011-04-28', '25332150', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_author`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categorie` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sectioncategorie`
--
ALTER TABLE `sectioncategorie`
  ADD CONSTRAINT `sectioncategorie_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sectioncategorie_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `section` (`sec_id`) ON DELETE CASCADE ON UPDATE CASCADE;
