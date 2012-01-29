-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2012 a las 22:08:37
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mootales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(140) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `time_posted` datetime NOT NULL,
  `amount_votes` int(11) NOT NULL DEFAULT '0',
  `amount_comments` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcar la base de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `tags`, `author_id`, `time_posted`, `amount_votes`, `amount_comments`) VALUES
(7, 'Hundred years'' war', 'The Hundred Years'' War was a series of separate wars waged from 1337 to 1453 by the House of Valois and the House of Plantagenet, also known as the House of Anjou, for the French throne, which had become vacant upon the extinction of the senior Capetian line of French kings. The House of Valois claimed the title of King of France, while the Plantagenets claimed the thrones of both France and England. The Plantagenet kings were the 12th-century rulers of the kingdom of England, and had their roots in the French regions of Anjou and Normandy.\nThe conflict was punctuated by several periods of peace, before it finally ended in the expulsion of the Plantagenets from France (except from the Pale of Calais). The final outcome was a victory for the house of Valois, which succeeded in recovering early gains made by the Plantagenets and expelling them from the majority of France by the 1450s. However, the war nearly ruined the Valois, while the Plantagenets enriched themselves with plunder. France suffered greatly from the war, since most of the conflict occurred in that country.\nThe &quot;war&quot; was in fact a series of conflicts and is commonly divided into three or four phases: the Edwardian War (1337&acirc;??1360), the Caroline War (1369&acirc;??1389), the Lancastrian War (1415&acirc;??1429), and the slow decline of Plantagenet fortunes after the appearance of Joan of Arc (1412&acirc;??1431). Several other contemporary European conflicts were directly related to this conflict: the Breton War of Succession, the Castilian Civil War, the War of the Two Peters, and the 1383-1385 Crisis. The term &quot;Hundred Years'' War&quot; was a later term invented by historians to describe the series of events.\nThe war owes its historical significance to a number of factors. Though primarily a dynastic conflict, the war gave impetus to ideas of both French and English nationalism. Militarily, it saw the introduction of new weapons and tactics, which eroded the older system of feudal armies dominated by heavy cavalry in Western Europe. The first standing armies in Western Europe since the time of the Western Roman Empire were introduced for the war, thus changing the role of the peasantry. For all this, as well as for its long duration, it is often viewed as one of the most significant conflicts in the history of medieval warfare. In France, civil wars, deadly epidemics, famines and marauding mercenary armies (turned to banditry) reduced the population by about one-half.[1]', '', 10, '2011-12-09 03:17:55', 2, 3),
(11, 'blog', 'blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog ', '', 10, '2011-12-09 18:33:29', 1, 4),
(24, 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n', 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n ', 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n', 7, '2011-12-20 10:25:43', 2, 4),
(25, 'Pagination test :)', 'Gotta test pagination. Don''t really know how to though... it seems to me that kohana 3.2 has deprecated that module :S i''ll try doing it with limits, this is my first time implementing pagination!', 'php is easy :D', 7, '2011-12-22 13:44:16', 3, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcar la base de datos para la tabla `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `author_id`, `blog_id`, `content`, `when`) VALUES
(1, 7, 6, 'this blog is awesome! very informative. thanks.', '2011-12-09 01:56:52'),
(2, 7, 6, 'this blog is awesome! very informative. thanks.', '2011-12-09 01:57:25'),
(3, 7, 6, 'Birmingham West Suburban Railway\nFrom Wikipedia, the free encyclopedia\nBirmingham West Suburban Railway\nOverview\nStatus	Open as part of the Cross-City Line\nLocale	Birmingham, West Midlands\nTermini	Granville Street\nKings Norton\nOperation\nOpened	1876\nOwner	Builder: Midland Railway\nOwner: Network Rail\nOperator(s)	Midland Railway and successors\nDepot(s)	21B, Bournville\nTechnical\nTrack gauge	Standard gauge 1,435 mm (4 ft 8 1?2 in)\nThe Birmingham West Suburban Railway was a suburban railway built by the Midland Railway company. Opened in 1876, it allowed both the opening of development of central southwest suburban Birmingham south into Worcestershire, and the by-passing of railway traffic via the Birmingham and Gloucester Railway into central Birmingham. Today, it forms a major section of the Cross-City Line, running from Lichfield to Redditch.\nContents  [hide] \n1 Development\n2 Route\n3 Cadbury railway\n3.1 Station names\n3.2 Bournville Works Railway\n4 Bournville engine shed\n5 References\n6 External links\n[edit]Development\n\nFrom 1846, Birmingham New Street was constructed as a joint station by the London and North Western Railway and the Midland Railway, to replace several earlier unconnected rail termini, the most notable being Curzon Street. It was opened in 1851 as a temporary rail terminus of the London and Birmingham Railway, and completed in 1854.[1] This new site was a through station, designed as two termini back-to-back, allowing for more traffic.\nA group of local business men noticed the resultant need for additional capacity south, through what were the under developed suburbs of south Birmingham and villages of northern Worcestershire. They therefore proposed development of a new branch railway, following the route of the Worcester and Birmingham Canal south to the Birmingham and Gloucester Railway to allow access to their new station at Kings Norton.\nNeeding finance for construction of the BWSR, the newly formed Midland Railway became involved in the deal. An eventual agreement was reached with the then loss making canal company, who would be paid a rent for the land, which later became a guarantee of a 1% share dividend.[2] The payments to the canal company and development began in 1873, and the line was running by 1875.\n[edit]Route\n\n[hide]Birmingham West Suburban Railway\nLegend\n				\nMidland Railway to Walsall and Burton upon Trent\n				\nMidland Railway to Peterborough\n				\nLondon & Birmingham south to London Euston\n				\n				\nCamp Hill Line\n		\nCurzon Street\n\nBirmingham New Street\n				\nWest Coast Main Line to Wolverhampton\n		\nCentral Goods\n				\nGas Street Basin\n				\nGranville Street\n				\nBath Row\n				\nFive Ways\n				\n				\nChurch Road\n		\nChurch Road Tunnel\n		\nSomerset Road\n		\nUniversity not built until 1978\n		\nWorcester and Birmingham Canal\n		\nSelly Oak\n		\n				\nWaterside Wharf and sidings\n				\n				\n				\nBournville sidings\n				\n						\n						\nCadbury Bournville factory\n						\n				\nBournville\n								\nCamp Hill Line\n								\nBournville Depot, 21B\n								\nLifford\n						\nOriginal BWSR route into Kings Norton\n\nKings Norton\n\nNorthfield\n\nLongbridge\n				\nHalesowen Joint Railway to GWR Halesowen\n\nBarnt Green\n				\nOxford, Worcester & Wolverhampton to Evesham\n\nBlackwell\n\nBirmingham and Gloucester Railway south\nBuilt as a single track line with passing loops at each station, the route exited from Granville Street, then proceeded through Church Road, Somerset Road and Selly Oak, before reaching what was originally called Stirchley Street.\nThe original line then followed the route of the canal east under the Pershore Road to what was effectively a joint dual-level station at Lifford. It then passed under the Birmingham and Gloucester Railway viaduct and turned sharp right (westwards), steeply climbing to join with the Birmingham and Gloucester to the south east of the newly built Kings Norton railway station.[3] Due to the engineering involved in this part of the line, it opened two months after the rest of the line in April 1876, under full operational control of soon to be owner, the Midland Railway.\nIn 1885 a major development was undertaken, known as the Stirchley Street and Bournville to Kings Norton Deviation. This allowed Midland Railway trains from Derby to Bristol to pass directly through Birmingham, instead of having to change engines and reverse direction. In the north, the project completed works connecting Birmingham New Street via tunnels under both Gloucester and Bath Rows and then via Five Ways to the BWSR. In the south, after passing through the renamed Bournville and Stirchley station, the line was swung westwards away from the canal after passing under the Mary Vale Road bridge, to join the Birmingham and Gloucester to the north east of Kings Norton station, providing a more direct and flatter route between Kings Norton and the BWSR. The line was now also double tracked along its complete length.\nFollowing integration of the line with the Midland Railway system, the company undertook four key further developments:[4]\nThe closure of the under utilised Granville Street,[5] allowed the now spur lines extension under the canal to open the Central Goods railway station in 1887, providing easier transfer of particularly fresh food freight from the southwest into Birmingham.\nThe Lifford loop allowed a circular service along long the Birmingham West Suburban and return via the Camp Hill Line. The company built a new two platform joint Lifford station on the site of the original 1840 Birmingham and Gloucester Lifford railway station.\nQuadrupling of the joint line between Kings Norton and Northfield, extended south to the junction with Halesowen Joint Railway in 1894.\nA new engine shed was opened at Bournville, constructed on the route of the old Stirchley-Lifford-Kings Norton alignment, alongside the realigned main line in 1895.\nBy 1892, the railway had allowed rapid expansion of southern Birmingham and northern Worcestershire, which in part result in an expanded Birmingham in 1911.[4]\nIn a review of traffic levels in 1930, both the lightly used Somerset Road and all of the stations along the Camp Hill Line were closed. They were all demolished during World War II to allow for greater freight capacity, never to reopen. Camp Hill remains solely a freight line to this day, although there are initial proposals to rebuild the former stations from Birmingham Council. In 1944, the lightly used Church Road was closed.\n[edit]Cadbury railway\n\nMain article: Cadbury plc\nIn 1861, John Cadbury''s sons Richard and George had taken over ''Cadbury Brothers of Birmingham,'' then based in central Birmingham at Bridge Street.[6]\nNoticing the development of the BWSR, the Cadbury Brothers began a search for land on which to develop a factory. At the time, their milk was delivered on canal barges, mainly via the Worcester and Birmingham Canal, while their cocoa was delivered either from London or Southampton via railway. They hence were looking for a junction of canal and rail.\nIn 1878 the company acquired the Bournbrook estate, comprising 14.5 acres (5.9 ha) of countryside 5 miles (8.0 km) south of the outskirts of Birmingham, right next to the new Stirchley Street station. They renamed the Bournbrook estate to the French-sounding Bournville, and opened the Bournville factory in 1879.\nIn 1893, George Cadbury bought 120 acres (49 ha) of land close to the works and planned, at his own expense, a model village which would ''alleviate the evils of modern more cramped living conditions''. By 1900 the estate included 313 cottages and houses set on 330 acres (130 ha) of land. As the Cadbury family were Quakers there were no pubs in the estate;[7][8]', '2011-12-09 02:19:11'),
(4, 7, 6, 'Birmingham West Suburban Railway<br/>From Wikipedia, the free encyclopedia<br/>Birmingham West Suburban Railway<br/>Overview<br/>Status	Open as part of the Cross-City Line<br/>Locale	Birmingham, West Midlands<br/>Termini	Granville Street<br/>Kings Norton<br/>Operation<br/>Opened	1876<br/>Owner	Builder: Midland Railway<br/>Owner: Network Rail<br/>Operator(s)	Midland Railway and successors<br/>Depot(s)	21B, Bournville<br/>Technical<br/>Track gauge	Standard gauge 1,435 mm (4 ft 8 1?2 in)<br/>The Birmingham West Suburban Railway was a suburban railway built by the Midland Railway company. Opened in 1876, it allowed both the opening of development of central southwest suburban Birmingham south into Worcestershire, and the by-passing of railway traffic via the Birmingham and Gloucester Railway into central Birmingham. Today, it forms a major section of the Cross-City Line, running from Lichfield to Redditch.<br/>Contents  [hide] <br/>1 Development<br/>2 Route<br/>3 Cadbury railway<br/>3.1 Station names<br/>3.2 Bournville Works Railway<br/>4 Bournville engine shed<br/>5 References<br/>6 External links<br/>[edit]Development<br/><br/>From 1846, Birmingham New Street was constructed as a joint station by the London and North Western Railway and the Midland Railway, to replace several earlier unconnected rail termini, the most notable being Curzon Street. It was opened in 1851 as a temporary rail terminus of the London and Birmingham Railway, and completed in 1854.[1] This new site was a through station, designed as two termini back-to-back, allowing for more traffic.<br/>A group of local business men noticed the resultant need for additional capacity south, through what were the under developed suburbs of south Birmingham and villages of northern Worcestershire. They therefore proposed development of a new branch railway, following the route of the Worcester and Birmingham Canal south to the Birmingham and Gloucester Railway to allow access to their new station at Kings Norton.<br/>Needing finance for construction of the BWSR, the newly formed Midland Railway became involved in the deal. An eventual agreement was reached with the then loss making canal company, who would be paid a rent for the land, which later became a guarantee of a 1% share dividend.[2] The payments to the canal company and development began in 1873, and the line was running by 1875.<br/>[edit]Route<br/><br/>[hide]Birmingham West Suburban Railway<br/>Legend<br/>				<br/>Midland Railway to Walsall and Burton upon Trent<br/>				<br/>Midland Railway to Peterborough<br/>				<br/>London & Birmingham south to London Euston<br/>				<br/>				<br/>Camp Hill Line<br/>		<br/>Curzon Street<br/><br/>Birmingham New Street<br/>				<br/>West Coast Main Line to Wolverhampton<br/>		<br/>Central Goods<br/>				<br/>Gas Street Basin<br/>				<br/>Granville Street<br/>				<br/>Bath Row<br/>				<br/>Five Ways<br/>				<br/>				<br/>Church Road<br/>		<br/>Church Road Tunnel<br/>		<br/>Somerset Road<br/>		<br/>University not built until 1978<br/>		<br/>Worcester and Birmingham Canal<br/>		<br/>Selly Oak<br/>		<br/>				<br/>Waterside Wharf and sidings<br/>				<br/>				<br/>				<br/>Bournville sidings<br/>				<br/>						<br/>						<br/>Cadbury Bournville factory<br/>						<br/>				<br/>Bournville<br/>								<br/>Camp Hill Line<br/>								<br/>Bournville Depot, 21B<br/>								<br/>Lifford<br/>						<br/>Original BWSR route into Kings Norton<br/><br/>Kings Norton<br/><br/>Northfield<br/><br/>Longbridge<br/>				<br/>Halesowen Joint Railway to GWR Halesowen<br/><br/>Barnt Green<br/>				<br/>Oxford, Worcester & Wolverhampton to Evesham<br/><br/>Blackwell<br/><br/>Birmingham and Gloucester Railway south<br/>Built as a single track line with passing loops at each station, the route exited from Granville Street, then proceeded through Church Road, Somerset Road and Selly Oak, before reaching what was originally called Stirchley Street.<br/>The original line then followed the route of the canal east under the Pershore Road to what was effectively a joint dual-level station at Lifford. It then passed under the Birmingham and Gloucester Railway viaduct and turned sharp right (westwards), steeply climbing to join with the Birmingham and Gloucester to the south east of the newly built Kings Norton railway station.[3] Due to the engineering involved in this part of the line, it opened two months after the rest of the line in April 1876, under full operational control of soon to be owner, the Midland Railway.<br/>In 1885 a major development was undertaken, known as the Stirchley Street and Bournville to Kings Norton Deviation. This allowed Midland Railway trains from Derby to Bristol to pass directly through Birmingham, instead of having to change engines and reverse direction. In the north, the project completed works connecting Birmingham New Street via tunnels under both Gloucester and Bath Rows and then via Five Ways to the BWSR. In the south, after passing through the renamed Bournville and Stirchley station, the line was swung westwards away from the canal after passing under the Mary Vale Road bridge, to join the Birmingham and Gloucester to the north east of Kings Norton station, providing a more direct and flatter route between Kings Norton and the BWSR. The line was now also double tracked along its complete length.<br/>Following integration of the line with the Midland Railway system, the company undertook four key further developments:[4]<br/>The closure of the under utilised Granville Street,[5] allowed the now spur lines extension under the canal to open the Central Goods railway station in 1887, providing easier transfer of particularly fresh food freight from the southwest into Birmingham.<br/>The Lifford loop allowed a circular service along long the Birmingham West Suburban and return via the Camp Hill Line. The company built a new two platform joint Lifford station on the site of the original 1840 Birmingham and Gloucester Lifford railway station.<br/>Quadrupling of the joint line between Kings Norton and Northfield, extended south to the junction with Halesowen Joint Railway in 1894.<br/>A new engine shed was opened at Bournville, constructed on the route of the old Stirchley-Lifford-Kings Norton alignment, alongside the realigned main line in 1895.<br/>By 1892, the railway had allowed rapid expansion of southern Birmingham and northern Worcestershire, which in part result in an expanded Birmingham in 1911.[4]<br/>In a review of traffic levels in 1930, both the lightly used Somerset Road and all of the stations along the Camp Hill Line were closed. They were all demolished during World War II to allow for greater freight capacity, never to reopen. Camp Hill remains solely a freight line to this day, although there are initial proposals to rebuild the former stations from Birmingham Council. In 1944, the lightly used Church Road was closed.<br/>[edit]Cadbury railway<br/><br/>Main article: Cadbury plc<br/>In 1861, John Cadbury''s sons Richard and George had taken over ''Cadbury Brothers of Birmingham,'' then based in central Birmingham at Bridge Street.[6]<br/>Noticing the development of the BWSR, the Cadbury Brothers began a search for land on which to develop a factory. At the time, their milk was delivered on canal barges, mainly via the Worcester and Birmingham Canal, while their cocoa was delivered either from London or Southampton via railway. They hence were looking for a junction of canal and rail.<br/>In 1878 the company acquired the Bournbrook estate, comprising 14.5 acres (5.9 ha) of countryside 5 miles (8.0 km) south of the outskirts of Birmingham, right next to the new Stirchley Street station. They renamed the Bournbrook estate to the French-sounding Bournville, and opened the Bournville factory in 1879.<br/>In 1893, George Cadbury bought 120 acres (49 ha) of land close to the works and planned, at his own expense, a model village which would ''alleviate the evils of modern more cramped living conditions''. By 1900 the estate included 313 cottages and houses set on 330 acres (130 ha) of land. As the Cadbury family were Quakers there were no pubs in the estate;[7][8]', '2011-12-09 02:20:35'),
(5, 7, 4, '/spoiler alert: skyrim. this happened when i was in level 4 or 5 /<br/><br/>It''s freaking cold here. I can''t believe I am doing this, I don''t know where the castle is anyway.. <br/>I turn back to see how my companion is doing.<br/>God, Lydia, you walk so slow. We''re never gonna make it like this! Now, focus on me. You have to stay next to me, in case a troll attacks us. Remember last time? You died, and I was left alone dodging the ice troll''s attacks. I had to load the last save in which you were alive. Did you understand? Alright. Let''s go. <br/>we continue walking through the snow. I stop as I find two wolves about fifty meters north<br/>Lydia, you take the one on the right and I''ll take the one on the left. We have two act quick, otherwise they''ll get to us and you suck at melee combat.<br/>Lydiaaaaaaaaa, what are you waiting for? Grab your bow. Quickly.<br/>god, are you going to wait until they attack us? whatever, I''ll do it myself.<br/>I cast some spells and, as expected, the wolves start running to us.<br/>Lydia calmly took out her bow. She licked her index finger and arose it, in an attempt to determine the direction of the wind.<br/>What are you doing, Lydia? This is not golf. Just throw some arrows already.<br/>As she got her hand on one arrow, a wolf attacked her. Lydia''s stupid. I ended up killing the two wolves, and I''m only level 4.<br/>whatever. we get to the scene with the troll<br/><br/>The troll appears from the skies. I had just *carefully* selected my fire spell when Lydia fired around a thousand arrows towards the frosty monster. <br/>Whoah, you rock, girl.<br/>I cast my spell with two hands in a kamehameha pose. Lydia''s storm of arrows and my spells were not enough to kill the troll, unfortunately. My mana ran out, so I wielded the special axe the king gave me, which had a blue glow all over it. I sprinted towards the disgusting creature and swung my axe at it. Some blood drops of my part later, the battle was over. We had won.<br/>Way to go, Lydia! Why weren''t you like that before?<br/>But she did not respond, as usual. She packed her bow and waited for me to start walking again. <br/>And I did.<br/>Thousands of steps and ten wolves later I could see something in the distance.<br/><br/><br/><br/><br/>Well, whatever. I don''t have many exams this week so I pirated the game (I''m so badass it took around 6 hours at 250~400kb/s. ). But I definitely will buy it when I have the money. The game is awesome, although I seem to have certain problems iwth it. E.g. the game freezes for a few seconds at random. At first I thought it could be the graphic intensive scenery, but I could be looking at a wall and it would happen too. Nevertheless, I set everything on max and I''m able to run the game without lag, except for that issue.', '2011-12-09 02:21:01'),
(6, 10, 6, 'bitches', '2011-12-09 03:02:40'),
(7, 7, 7, 'okay, now every time someone comments, the system will properly update the row on the blogs table.', '2011-12-09 03:25:46'),
(8, 7, 8, 'just checking the redirect function.<br/>', '2011-12-09 03:27:22'),
(9, 7, 7, 'teeest.!', '2011-12-09 13:30:59'),
(10, 10, 11, '<b>xss</b>?', '2011-12-09 19:21:29'),
(11, 10, 11, 'fuck', '2011-12-09 19:21:33'),
(12, 10, 11, '&lt;i&gt;can''t xss now&lt;/i&gt;', '2011-12-09 19:28:16'),
(13, 10, 7, 'break line\nbreak line\n', '2011-12-09 19:53:07'),
(15, 7, 14, 'so brave', '2011-12-12 01:29:56'),
(16, 7, 24, 'http://google.com', '2011-12-22 11:46:48'),
(17, 7, 24, '[url=google.com]link[/url]\n[url]google.com[/url]', '2011-12-22 11:52:59'),
(18, 7, 24, '[b]so no bbcode works now? great[/b]', '2011-12-22 11:53:11'),
(19, 7, 24, '[url=http://google.com]google[/url]\n[url]http://google.com[/url]', '2011-12-22 12:12:35'),
(20, 7, 25, '1', '2011-12-22 13:44:19'),
(21, 7, 25, '2', '2011-12-22 13:44:21'),
(22, 7, 25, '3', '2011-12-22 13:44:24'),
(23, 7, 25, '4', '2011-12-22 13:44:25'),
(24, 7, 25, '5', '2011-12-22 13:44:28'),
(25, 7, 25, '6', '2011-12-22 13:44:31'),
(26, 7, 25, '7', '2011-12-22 13:44:34'),
(27, 7, 25, '8', '2011-12-22 13:44:36'),
(28, 7, 25, '9', '2011-12-22 13:44:38'),
(29, 7, 25, '10', '2011-12-22 13:44:42'),
(30, 7, 25, '11', '2011-12-22 13:44:45'),
(31, 7, 25, '12', '2011-12-22 13:44:48'),
(32, 7, 25, 'sup', '2011-12-28 18:03:59'),
(33, 7, 25, 'dsfg', '2011-12-28 18:07:44'),
(34, 7, 25, 'asdf', '2011-12-28 19:24:35'),
(35, 7, 25, 'asdfasdf', '2011-12-28 19:24:38'),
(36, 7, 25, 'adsfasdfasdf', '2011-12-28 19:24:42'),
(37, 7, 25, 'asdfasdfasdf', '2011-12-28 19:24:45'),
(38, 7, 25, 'asdfasdfasdf', '2011-12-28 19:24:48'),
(39, 7, 25, 'adsfsdfasdf', '2011-12-28 19:24:51'),
(40, 7, 25, 'asdfasdfasdf', '2011-12-28 19:24:55'),
(41, 7, 25, 'Congrats, man! Looks like you sorted it out. :)', '2011-12-28 20:04:33'),
(44, 7, 25, 'ಠ_ಠ', '2012-01-08 22:44:18'),
(45, 13, 11, '[url]http://google.com[/url]', '2012-01-28 14:02:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forum_categories`
--

CREATE TABLE IF NOT EXISTS `forum_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `count_threads` int(11) NOT NULL DEFAULT '0',
  `count_comments` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `name`, `description`, `count_threads`, `count_comments`) VALUES
(1, 'General chat', 'Chat about anything that doesn''t fit in any other category and/or a blog.', 11, 0),
(2, 'The train wreck and forum games', 'Mindless rubbish here!', 11, 0),
(3, 'Project discussion', 'Discuss about this project.', 11, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forum_comments`
--

CREATE TABLE IF NOT EXISTS `forum_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcar la base de datos para la tabla `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `author_id`, `thread_id`, `content`, `when`) VALUES
(1, 7, 1, 'first comment!', '2011-12-12 00:23:05'),
(2, 7, 1, 'YAY!', '2011-12-12 00:23:11'),
(3, 7, 1, 'i''m so happy right now, it worked on first try &lt;3', '2011-12-12 00:23:22'),
(4, 7, 1, '''&quot;);', '2011-12-12 00:26:03'),
(5, 7, 5, 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n ', '2011-12-20 10:29:17'),
(6, 7, 2, 'testing something.', '2011-12-28 20:34:27'),
(7, 7, 5, 'Pretty convincing, huh? That wasn''t even a real person!', '2011-12-28 20:53:52'),
(8, 7, 5, 'Third comment.', '2011-12-28 20:54:03'),
(9, 7, 5, 'When Lorem Ipsum is not enough...', '2011-12-28 20:54:14'),
(10, 7, 5, 'when creativity fails...', '2011-12-28 20:54:22'),
(11, 7, 5, 'all that is left is some inner monologue for other forkers to read.', '2011-12-28 20:54:34'),
(12, 7, 5, 'wonder when i''ll reach page 2?', '2011-12-28 20:54:45'),
(13, 7, 5, '''cuz i need it to test thread pagination, y''know', '2011-12-28 20:54:56'),
(14, 7, 5, 'reminder: add uniq_ids...', '2011-12-28 20:55:06'),
(15, 7, 5, 'Howard''s nose is pretty big.', '2011-12-28 20:55:26'),
(16, 7, 5, 'Lucky Baldwins.', '2011-12-28 20:55:36'),
(17, 7, 5, 'finally! page two! :D', '2011-12-28 20:55:46'),
(18, 7, 9, '[b][i][s][s][u][center][justify][/justify][/center][/u][/s][/s][/i][/b]', '2012-01-08 13:16:18'),
(19, 7, 7, 'I don''t intend to discomfit my readers, but I do need to point out that I wouldn''t waste my time trying to point the high-powered fire hose of truth at Tarheel''s unsophisticated, lamebrained bunco games to wash away their multiple layers of propagandism if Tarheel''s philippics weren''t parroted by so many prissy louts. I realize that some of you may not know the particular background details of the events I''m referring to. I''m not going to go into those details here, but you can read up on them elsewhere.\n\nI''m not particularly old, but I do remember a time when honesty, decency, and respect for others were the norm. Nowadays, thanks to Tarheel''s fatuous, counterproductive mind games, people everywhere live in fear that the worst classes of grotty weasels there are will subject human beings to indignities. Even worse, many people are being prevented from knowing that I have a tendency to report the more sensational things that Tarheel is up to, the more shocking things, things like how he wants to squander irreplaceable treasures. And I realize the difficulty that the average person has in coming to grips with that, but you might have heard the story that he once agreed to help us win the culture war and save this country. No one has located the document in which Tarheel said that. No one has identified when or where Tarheel said that. That''s because he never said it. As you might have suspected, I know more about elitism than most people. You might even say that I''m an expert on the subject. I can therefore state with confidence that one can only speculate how much worse things would be if Tarheel were to relabel millions of people as "egotism-oriented". More emphatically, Tarheel''s method (or school, or ideology&mdash;it is hard to know exactly what to call it) goes by the name of "Tarheel-ism". It is a headlong and avowedly bloody-minded philosophy that aims to introduce disease, ignorance, squalor, idleness, and want into affluent neighborhoods.\n\nCynical slumlords are more susceptible to Tarheel''s brainwashing tactics than are any other group. Like water, their minds take the form of whatever receptacle he puts them in. They then lose all recollection that as Tarheel matures emotionally he''ll eventually grow out of his present way of thinking and come to realize that whenever I turn around I see him preventing the real problems from being solved. To deny such a truth would be to deny the evidence of our own senses. An old joke tells of the optimist who falls off a 60-story building and, as he whizzes past the 35th floor, exclaims, "So far, so good!" But it is not such blind optimism that causes Tarheel''s legatees to think that they can pooh-pooh the concerns of others. Tarheel has allowed himself to become a spokesman for the same point of view shared by impertinent blowhards, bloodthirsty half-wits, and inimical pipsqueaks while masquerading as an outspoken radical bucking the system.\n\nTarheel can''t seriously believe that he has a "special" perspective on factionalism that carries with it a "special" right to make self-deceiving, loathsome adulterers out to be something they''re not, can he? We should be able to look into our own souls for the answer. If we do, I suspect we''ll find that society must soon decide either to maximize our individual potential for effectiveness and success in combatting him or else to let Tarheel persecute the innocent and let the guilty go unpunished. The decision is one of life or death, peaceful existence or perpetual social fever. I can hope only that those in charge realize that Tarheel is an unambitious meany. I''m being super-extra nice when I say that. If I weren''t so polite I instead would have stated that Tarheel has been known to destroy the heart and fabric of our nation. That always spurs on his bedfellows to cause the destruction of human ambition and joy. That, in turn, encourages Tarheel to envelop us in a nameless, unreasoning, unjustified terror. This cycle inevitably, inexorably ratchets upwards and outwards until at last some snarky nitwit winds up diluting the nation''s sense of common purpose and shared sacrifice.\n\nTarheel may unwittingly transmogrify society''s petty gripes and irrational fears into "issues" to be catered to. I say "unwittingly" because he is apparently unaware that he operates under the influence of a particular ideology&mdash;a set of beliefs based on the root metaphor of the transmission of forces. Until you understand this root metaphor you won''t be able to grasp why we must reach out to people with the message that the Orwellian implications of Tarheel''s maneuvers are clear. We must alert people of that. We must educate them. We must inspire them. And we must encourage them to supply the missing ingredient that could stop the worldwide slide into metagrobolism.\n\nEven though Tarheel gives flattering titles to his natural distempers, in Tarheel''s sentiments, Trotskyism is witting and unremitting, militant and mawkish. He revels in it, rolls in it, and uses it to ignite a maelstrom of alarmism. His pronouncements are geared toward the continuation of social stratification under the rubric of "tradition". Funny, that was the same term that Tarheel''s intimates once used to prosecute, sentence, and label people as evil tricksters without the benefit of any evidence whatsoever.\n\nRather than respond to my letters with reasoned arguments, Tarheel prefers to shame the poor into blaming themselves for losing the birth lottery. Although this method of attack is unparalleled in any other sphere of literary controversy it does prove that sometimes I think that Tarheel is simply a willing pawn of those rambunctious smear merchants who exclude all people and proposals that oppose his backwards editorials. I typically drop that willing-pawn notion, however, whenever I remember that in a recent tell-all, a former member of Tarheel''s faction writes that "anal-retentive doomsday prophets thrive on hatred rather than love". Those are some pretty harsh words even when one considers that if you intend to challenge someone''s assertions, you need to present a counterargument. Tarheel provides none. Tarheel says that bad things "just happen" (i.e., they''re not caused by Tarheel himself). But then he turns around and says that censorship could benefit us. You know, you can''t have it both ways, Tarheel.\n\nI am not concerned with rumors or hearsay about Tarheel. I am interested only in ascertained facts attested by published documents and in these primarily as an illustration that Tarheel frequently avers his support of democracy and his love of freedom. But one need only look at what Tarheel is doing&mdash;as opposed to what he is saying&mdash;to understand his true aims. I do not appreciate being labeled. No one does. Nevertheless, if we don''t do something soon, his raving programs of Gleichschaltung will rise like a golem with a million hands on a million throats to choke the honor out of decent, hardworking people.\n\nTo change the topic slightly, Tarheel has stated that skin color means more than skill, and gender is more impressive than genius. I find such declaratory statements quite telling. They tell me that the first lies that Tarheel told us were relatively benign. Still, they have been progressing. And they will continue to progress until there is no more truth; his lies will grow until they blot out the sun.\n\nJust because Tarheel and his subordinates don''t like being labelled as "capricious hoodwinkers" or "crude, chauvinistic evildoers" doesn''t mean the shoe doesn''t fit. Honor means nothing to him. Principles mean nothing to him. All he cares about is how best to work hand-in-glove with harebrained Huns. When asked to mend his ways, Tarheel will give people a wink and a smile, but when the wheels begin to turn, it''s business as usual. His short-sighted words are meticulously designed to keep the population unaware, uneducated, dumbed down, and focused on stupefying activities like video games. The intention is to prevent people from noticing that Tarheel has been quoting me out of context. Before he spews any more psychoanalytical drivel, let me assure him that he uses the word "chromatographic" to justify making incorrect leaps of logic. In doing so, he is reversing the meaning of that word as a means of disguising the fact that in these days of political correctness and the changing of how history is taught in schools to fulfill a particular agenda, if the only way to condemn&mdash;without hesitation, without remorse&mdash;all those who turn our country into a high-handed cesspool overrun with scum, disease, and crime is for me to become increasingly frustrated, humiliated and angry, then so be it. It would truly be worth it because contrary to my personal preferences, I''m thinking about what''s best for all of us. My conclusion is that what''s best for all of us is for me to improve the physical and spiritual quality of life for the population at present and for those yet to come. Let me point out that the reader who has followed me through this lengthy letter will have been able to gather an idea of Tarheel''s general character and disposition. Hence, I shall conclude simply by stating that whenever a will-o''-the-wisp of narcissism, however unreal, turns up anywhere, Tarheel is off at a trot.', '2012-01-18 18:35:09'),
(20, 7, 9, 'what are they doing here?', '2012-01-20 20:32:43'),
(21, 7, 3, 'ಠ_ಠ', '2012-01-22 18:20:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forum_threads`
--

CREATE TABLE IF NOT EXISTS `forum_threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_posted` datetime NOT NULL,
  `last_active` datetime NOT NULL,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `amount_comments` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `forum_threads`
--

INSERT INTO `forum_threads` (`id`, `author_id`, `category_id`, `title`, `content`, `time_posted`, `last_active`, `sticky`, `closed`, `amount_comments`) VALUES
(3, 7, 2, 'Another thread.', 'Mindless rubbish here.                                                                                                                                                                        ', '2011-12-12 00:27:23', '2011-12-12 00:27:23', 0, 0, 4),
(5, 7, 3, 'General discussion', 'Post your ideas for the project here.\n                                                                                                                                                                                                                                                                                                                                  ', '2011-12-13 18:38:21', '2011-12-13 18:38:21', 0, 0, 4),
(7, 7, 3, 'Are you enjoying the new look?', 'I noticed that the forums didn''t look quite well, so I tried to make them look better. What do you think? Do you have any suggestions? Leave a comment below!', '2011-12-30 21:32:40', '2011-12-30 21:32:40', 0, 0, 4),
(9, 7, 1, 'bbcode test', 'http://google.com \nhttp://google.com \nhttp://google.com \nhttp://google.com \nhttp://www.google.com \nhttps://www.google.com \nhttps://google.com \nhttp://000webhost.com\nhttp://www.000webhost.com\nhttps://000webhost.com\nhttps://www.000webhost.com\nhttp://ip-us_info.google.reddit.com\nhttp://reddit.com/r/reddit.com\nhttp://localhost/mootales\nhttp://word\n[url=http://www.vutales.com]vutales[/url]\n[url]http://reddit.com/r/google[/url]\nhttp://"style="color:red;"attr="\n', '2012-01-07 15:51:40', '2012-01-07 15:51:40', 0, 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fragments`
--

CREATE TABLE IF NOT EXISTS `fragments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcar la base de datos para la tabla `fragments`
--

INSERT INTO `fragments` (`id`, `content`, `author_id`, `when`) VALUES
(1, 'okay lets try dis again', 7, '2011-12-09 14:22:17'),
(2, 'okay, i should probably add a count_fragments, eh?', 7, '2011-12-09 14:41:07'),
(3, 'okay, done', 7, '2011-12-09 14:44:28'),
(4, 'fixed *my* frag_count', 7, '2011-12-09 14:47:18'),
(5, '&lt;b&gt;xss&lt;/b&gt;?', 7, '2011-12-09 14:47:26'),
(6, 'html_entities &lt;3', 7, '2011-12-09 14:47:37'),
(7, 'i noticed all frags in the frontpage were by admin. jojo''s jealous', 10, '2011-12-09 16:23:01'),
(24, 'Iñtërnâtiônàlizætiøn', 7, '2011-12-20 09:39:38'),
(26, 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n', 7, '2011-12-20 10:15:45'),
(27, 'I&ntilde;t&euml;rn&acirc;ti&ocirc;n&agrave;liz&aelig;ti&oslash;n', 7, '2011-12-20 10:24:54'),
(28, 'testing the date system', 7, '2011-12-20 12:01:12'),
(29, 'testing a quite long fragment. it''s funny how at nite you become a super programmer! ', 7, '2011-12-20 12:32:40'),
(30, '☭', 7, '2011-12-23 21:32:56'),
(35, '@common_user @common_user @common_user', 7, '2012-01-07 03:07:34'),
(36, 'here''s a ping to you, @admin!', 13, '2012-01-07 10:32:42'),
(38, 'What happens when I ping you with a very long fragment, eh, mister @admin? what happensssssssssss?', 13, '2012-01-07 10:36:48'),
(41, '@admin that''s awesome! keep up the good work :)', 13, '2012-01-07 12:32:47'),
(42, 'Listenin'' to the album "Seven years" by ATB. http://tny.gs/wHEd1s', 10, '2012-01-07 12:59:58'),
(45, '@jojo You should listen to even earlier albums, mang.', 7, '2012-01-19 21:20:30'),
(46, ' Ծ_Ծ', 7, '2012-01-23 19:06:24'),
(47, '@admin Loving the UTF-8 support, huh? :D', 13, '2012-01-26 13:44:22'),
(48, 'Tiesto - Surrounded by Light [8:52]', 7, '2012-01-26 13:45:33'),
(49, 'Testing DateHelper.', 11, '2004-01-31 16:59:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `receiver_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `mail`
--

INSERT INTO `mail` (`id`, `author_id`, `receiver_id`, `title`, `content`, `read`, `receiver_hidden`, `when`) VALUES
(1, 7, 13, 'There aint no problem', 'just do it, mang.', 1, 0, '2012-01-23 16:28:32'),
(2, 7, 13, 'There aint no problem', 'just do it, mang.', 1, 0, '2012-01-23 16:45:52'),
(3, 7, 7, 'Your first message!', 'I didn''t have anything on my inbox so... :)', 1, 0, '2012-01-23 16:50:08'),
(4, 7, 7, 'Just another message', 'So I can test something. :P', 1, 0, '2012-01-26 13:46:03'),
(5, 13, 10, 'Your first message!', 'Thought you''d like one, too  ;)', 1, 0, '2012-01-26 14:26:05'),
(6, 13, 7, 'hello man', 'this is the german on the dance floor', 1, 0, '2012-01-26 14:27:50'),
(7, 13, 7, 'hello man', 'what u doinnn', 1, 0, '2012-01-26 14:28:04'),
(8, 10, 13, 'Heey!', 'Thanks for the message, man. Really appreciate it. :)', 1, 0, '2012-01-28 13:54:22'),
(9, 7, 7, 'Oldest message ever', 'Testing DateHelper!', 0, 0, '2005-01-29 14:07:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pings`
--

CREATE TABLE IF NOT EXISTS `pings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pinged_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `fragment_id` int(11) NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `pings`
--

INSERT INTO `pings` (`id`, `pinged_id`, `author_id`, `fragment_id`, `when`) VALUES
(7, 7, 13, 47, '2012-01-26 13:44:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://i.imgur.com/Wrado.png',
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `count_blogs` int(11) NOT NULL DEFAULT '0',
  `count_fragments` int(11) NOT NULL DEFAULT '0',
  `count_pageviews` int(11) NOT NULL DEFAULT '0',
  `count_friends` int(11) NOT NULL DEFAULT '0',
  `date_joined` date NOT NULL,
  `date_last_seen` datetime NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`, `name`, `age`, `country`, `gender`, `email`, `count_blogs`, `count_fragments`, `count_pageviews`, `count_friends`, `date_joined`, `date_last_seen`, `rank`) VALUES
(7, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'http://i.imgur.com/DLpg4.jpg', 'JoJo', 16, 'Argentina', 'Male', 'joa.dev@live.com', 2, 27, 24, 0, '2011-12-08', '2012-01-29 14:05:04', 3),
(10, 'jojo', '7f1d2b3a4016c460a93cdca536f3acce', 'http://www.vutales.com/assets/user_avatars/Joaco.png', '', 0, '', '', 'joa.dev@live.com', 1, 2, 0, 0, '2011-12-09', '2012-01-29 13:40:20', 1),
(11, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 'http://www.vutales.com/assets/user_avatars/Joaco.png', '', 20, 'Rumania', 'Cualquiera', 'me@example.com', 0, 0, 0, 0, '2011-12-09', '2012-01-29 13:59:46', 1),
(13, 'common_user', 'f30a20b53eb9eb61a87108545283d1be', 'http://i.imgur.com/Wrado.png', '', 0, '', '', '', 0, 4, 0, 0, '2012-01-06', '2012-01-06 23:20:28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcar la base de datos para la tabla `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `blog_id`, `when`) VALUES
(3, 7, 5, '2011-12-09 01:01:04'),
(5, 10, 8, '2011-12-09 03:18:52'),
(7, 11, 7, '2011-12-09 03:22:26'),
(13, 10, 5, '2011-12-09 22:02:36'),
(14, 7, 14, '2011-12-11 10:36:03'),
(16, 7, 6, '2011-12-13 18:57:05'),
(17, 7, 15, '2011-12-19 23:38:16'),
(18, 7, 23, '2011-12-20 10:04:47'),
(20, 7, 24, '2011-12-20 12:24:04'),
(21, 7, 11, '2011-12-28 15:32:06'),
(27, 7, 25, '2011-12-28 20:04:16'),
(32, 10, 25, '2012-01-07 13:27:21'),
(33, 13, 24, '2012-01-18 15:27:56'),
(34, 13, 25, '2012-01-28 13:38:56');
