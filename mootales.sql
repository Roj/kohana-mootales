-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2011 a las 21:52:32
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
  `title` varchar(140) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `author_id` int(11) NOT NULL,
  `time_posted` datetime NOT NULL,
  `amount_votes` int(11) NOT NULL DEFAULT '0',
  `amount_comments` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `tags`, `author_id`, `time_posted`, `amount_votes`, `amount_comments`) VALUES
(2, 'hello world', 'hello world! this is the first blog of the site. \nright now I''m coding more stuff so I probably won''t make more blogs :(\nanyway, my cat is making a mess in the kitchen so I should probably check that out...', 'hello, world, first post', 7, '2011-12-08 21:51:32', 0, 0),
(4, 'XSS test!', '&amp;lt;b&amp;gt;bold&amp;lt;/b&amp;gt;\n&amp;lt;i&amp;gt;italic&amp;lt;/i&amp;gt;\n&amp;lt;script language=&amp;quot;javascript&amp;quot;&amp;gt;\nconsole.log(&amp;quot;xss&amp;quot;);\n//alert(&amp;quot;xss&amp;quot;);\n&amp;lt;/script&amp;gt;\n140chars140chars140chars140chars140chars140chars140chars140chars', '', 7, '2011-12-08 22:33:17', 0, 0),
(5, 'xss test', '&lt;b&gt;bold&lt;/b&gt;\n&lt;i&gt;italic&lt;/i&gt;\n&lt;script language=&quot;javascript&quot;&gt;\nconsole.log(&quot;xss&quot;);\n//alert(&quot;xss&quot;);\n&lt;/script&gt;\n140chars140chars140chars140chars140chars140chars140chars140chars', '', 7, '2011-12-08 22:33:54', 1, 0),
(6, 'Axolotl', 'The axolotl ( /&Euml;?&Atilde;&brvbar;ks&Eacute;?l&Eacute;?t&Eacute;?l/), Ambystoma mexicanum, is a neotenic salamander, closely related to the Tiger Salamander. Larvae of this species fail to undergo metamorphosis, so the adults remain aquatic and gilled. It is also called ajolote (which is also a common name for different types of salamander).[1] The species originates from numerous lakes, such as Lake Xochimilco underlying Mexico City.[2] Axolotls are used extensively in scientific research due to their ability to regenerate limbs.\nAxolotls should not be confused with waterdogs, the larval stage of the closely related Tiger Salamanders (Ambystoma tigrinum and Ambystoma mavortium), which are widespread in much of North America and also occasionally become neotenic, nor with mudpuppies (Necturus spp.), fully aquatic salamanders which are not closely related to the axolotl but bear a superficial resemblance.[1]\nAs of 2010, wild axolotls are near extinction[3] due to urbanization in Mexico City and polluted waters. Nonnative fish such as African tilapia and Asian carp have also recently been introduced to the waters. These new fish have been eating the axolotls'' young, as well as its primary source of food.[4] The axolotl is currently on the International Union for Conservation of Nature''s annual Red List of threatened species.[5]', '', 7, '2011-12-08 23:56:08', 1, 0),
(7, 'Hundred years'' war', 'The Hundred Years'' War was a series of separate wars waged from 1337 to 1453 by the House of Valois and the House of Plantagenet, also known as the House of Anjou, for the French throne, which had become vacant upon the extinction of the senior Capetian line of French kings. The House of Valois claimed the title of King of France, while the Plantagenets claimed the thrones of both France and England. The Plantagenet kings were the 12th-century rulers of the kingdom of England, and had their roots in the French regions of Anjou and Normandy.\nThe conflict was punctuated by several periods of peace, before it finally ended in the expulsion of the Plantagenets from France (except from the Pale of Calais). The final outcome was a victory for the house of Valois, which succeeded in recovering early gains made by the Plantagenets and expelling them from the majority of France by the 1450s. However, the war nearly ruined the Valois, while the Plantagenets enriched themselves with plunder. France suffered greatly from the war, since most of the conflict occurred in that country.\nThe &quot;war&quot; was in fact a series of conflicts and is commonly divided into three or four phases: the Edwardian War (1337&acirc;??1360), the Caroline War (1369&acirc;??1389), the Lancastrian War (1415&acirc;??1429), and the slow decline of Plantagenet fortunes after the appearance of Joan of Arc (1412&acirc;??1431). Several other contemporary European conflicts were directly related to this conflict: the Breton War of Succession, the Castilian Civil War, the War of the Two Peters, and the 1383-1385 Crisis. The term &quot;Hundred Years'' War&quot; was a later term invented by historians to describe the series of events.\nThe war owes its historical significance to a number of factors. Though primarily a dynastic conflict, the war gave impetus to ideas of both French and English nationalism. Militarily, it saw the introduction of new weapons and tactics, which eroded the older system of feudal armies dominated by heavy cavalry in Western Europe. The first standing armies in Western Europe since the time of the Western Roman Empire were introduced for the war, thus changing the role of the peasantry. For all this, as well as for its long duration, it is often viewed as one of the most significant conflicts in the history of medieval warfare. In France, civil wars, deadly epidemics, famines and marauding mercenary armies (turned to banditry) reduced the population by about one-half.[1]', '', 10, '2011-12-09 03:17:55', 2, 2),
(8, 'test', '140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*140chars, *sigh*', '', 7, '2011-12-09 03:27:07', 0, 1),
(9, 'this blog has 0 likes', 'let''s see if it gets to front page!\n140 chars *sigh*\n140 chars *sigh*\n140 chars *sigh*140 chars *sigh*\n140 chars *sigh*140 chars *sigh*\n140 chars *sigh*\n140 chars *sigh*\n140 chars *sigh*\n140 chars *sigh*\n140 chars *sigh*\n', '', 7, '2011-12-09 03:35:25', 0, 0),
(10, 'update!', 'now every time you submit a blog, the system will properly update the amount of blogs you have :)\r\n140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars140 chars', '', 7, '2011-12-09 13:16:30', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(9, 7, 7, 'teeest.!', '2011-12-09 13:30:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fragments`
--

CREATE TABLE IF NOT EXISTS `fragments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(300) NOT NULL,
  `author_id` int(11) NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `fragments`
--

INSERT INTO `fragments` (`id`, `content`, `author_id`, `when`) VALUES
(1, 'okay lets try dis again', 7, '2011-12-09 14:22:17'),
(2, 'okay, i should probably add a count_fragments, eh?', 7, '2011-12-09 14:41:07'),
(3, 'okay, done', 7, '2011-12-09 14:44:28'),
(4, 'fixed *my* frag_count', 7, '2011-12-09 14:47:18'),
(5, '&lt;b&gt;xss&lt;/b&gt;?', 7, '2011-12-09 14:47:26'),
(6, 'html_entities &lt;3', 7, '2011-12-09 14:47:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT 'http://i.imgur.com/Wrado.png',
  `name` varchar(200) NOT NULL DEFAULT 'unknown',
  `age` int(11) NOT NULL DEFAULT '-1',
  `country` varchar(70) NOT NULL DEFAULT 'unknown',
  `gender` varchar(10) NOT NULL DEFAULT 'unknown',
  `email` varchar(200) NOT NULL,
  `count_blogs` int(11) NOT NULL DEFAULT '0',
  `count_fragments` int(11) NOT NULL DEFAULT '0',
  `count_pageviews` int(11) NOT NULL DEFAULT '0',
  `count_friends` int(11) NOT NULL DEFAULT '0',
  `date_joined` date NOT NULL,
  `date_last_seen` datetime NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`, `name`, `age`, `country`, `gender`, `email`, `count_blogs`, `count_fragments`, `count_pageviews`, `count_friends`, `date_joined`, `date_last_seen`, `rank`) VALUES
(7, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'http://i.imgur.com/DLpg4.jpg', 'unknown', -1, 'unknown', 'unknown', 'joa.dev@live.com', 1, 6, 0, 0, '2011-12-08', '2011-12-08 19:01:39', 0),
(10, 'jojo', '7f1d2b3a4016c460a93cdca536f3acce', 'http://i.imgur.com/Wrado.png', 'unknown', -1, 'unknown', 'unknown', 'joa.dev@live.com', 0, 0, 0, 0, '2011-12-09', '2011-12-09 03:02:11', 0),
(11, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 'http://i.imgur.com/Wrado.png', 'unknown', -1, 'unknown', 'unknown', 'me@example.com', 0, 0, 0, 0, '2011-12-09', '2011-12-09 03:22:14', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `blog_id`, `when`) VALUES
(3, 7, 5, '2011-12-09 01:01:04'),
(4, 7, 6, '2011-12-09 01:28:02'),
(5, 10, 8, '2011-12-09 03:18:52'),
(7, 11, 7, '2011-12-09 03:22:26');
