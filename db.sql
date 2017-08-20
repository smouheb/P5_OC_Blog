SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date_article` datetime NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `chapo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date_article`, `id_image`, `id_user`, `chapo`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2017-03-11 22:15:33', 2, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(2, 'Test2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2017-03-11 23:18:42', 2, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(3, 'Bonjour', 'petit test1', '2017-03-19 22:33:05', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(4, 'Bonjour', 'petit test1', '2017-03-19 22:35:43', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(5, 'rreeee', 'eerrrrrfrpofjpriepihfperihpriehpzihpzihgpzhigpzrhgpzrhgpzrhgpzrihgprzi', '2017-03-19 22:37:07', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(6, 'rreeee', 'eerrrrrfrpofjpriepihfperihpriehpzihpzihgpzhigpzrhgpzrhgpzrhgpzrihgprzi', '2017-03-19 22:37:31', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(7, 'rreeee', 'eerrrrrfrpofjpriepihfperihpriehpzihpzihgpzhigpzrhgpzrhgpzrhgpzrihgprzi', '2017-03-19 22:38:47', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(8, 'TestPost', 'vorbfozrbgozrbgaregbaregiheorgheorigheorigherigheorghoreihgerogheorgiheroigherig', '2017-03-19 22:43:11', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(10, 'TestPost', 'oergfgnigerhgerihgpzirhgpzrihgpgpùergizpù`^jeaêaòeoeojgzèjotz`êjot', '2017-03-20 08:15:22', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(12, 'Hello World2! ', 'ANow it works really really good!', '2017-07-11 06:19:11', 0, 1, 'PPPlusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(34, 'new post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula ligula eget porta laoreet. Vivamus vulputate lectus sit amet urna elementum, non pellentesque lacus pharetra. Vestibulum maximus justo turpis, eget rutrum sapien venenatis convallis. Aenean ornare ante sit amet diam luctus pellentesque. Nulla vestibulum arcu vitae risus posuere luctus a convallis mi. Donec suscipit commodo nulla id varius. Nulla sed pellentesque ex, vitae iaculis mauris. Vestibulum commodo mollis ligula, sit amet viverra magna. Nunc dapibus vestibulum elit, in aliquet ante vehicula eu. Mauris bibendum lorem vel nunc pretium faucibus. Cras mattis nunc eu felis maximus sagittis. Sed ultrices laoreet mauris id iaculis. Fusce euismod, ex non lobortis suscipit, magna lectus venenatis sem, consequat blandit erat diam quis justo. Aliquam lobortis, mauris a condimentum auctor, libero justo luctus mauris, vitae egestas erat diam tristique lectus.\r\n\r\nFusce nec ex dolor. Aliquam at neque ut quam rhoncus ultrices. Cras mi purus, aliquam nec mi a, tincidunt fringilla odio. Donec convallis cursus ante eu consequat. Sed lobortis purus vehicula varius rhoncus. Sed quis nibh auctor, mollis ligula ut, euismod dolor. Ut vulputate ultricies ligula. Vivamus laoreet sapien id feugiat pellentesque. Quisque ut laoreet urna, sit amet blandit lorem. Duis in augue vitae ex tempor commodo.\r\n\r\nNam sagittis lobortis odio ac fermentum. Vestibulum metus enim, semper ut vulputate quis, gravida nec mi. Integer in ultricies urna. Aliquam semper arcu quis ex vestibulum pellentesque. Quisque eget pellentesque sem. Aliquam fermentum ut mi ut sagittis. Etiam arcu quam, pretium sit amet urna vitae, malesuada faucibus purus. In eros sem, auctor eu convallis nec, feugiat fermentum felis. Nulla sed condimentum nibh, congue consequat massa. Phasellus posuere lorem eu sagittis venenatis.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam hendrerit ut orci nec egestas. Sed iaculis augue sed metus tincidunt vestibulum. Aliquam lacinia dui viverra libero pulvinar, ac ornare sem interdum. Proin a tempor dui. Pellentesque pellentesque bibendum orci, et vehicula diam lacinia condimentum. Vivamus suscipit tempor fringilla. Sed vitae dui sem. Etiam volutpat turpis sed erat gravida pulvinar. Pellentesque ac venenatis metus. Nullam rutrum libero diam, vel convallis augue vestibulum id. Morbi euismod leo vel elementum commodo. Suspendisse vitae diam ac ante venenatis fringilla. Sed ac iaculis justo. Duis sagittis tellus non neque fringilla interdum.\r\n\r\nPraesent mattis dignissim metus. Nam pellentesque magna et metus bibendum, ut posuere enim eleifend. Fusce ornare pellentesque aliquam. Fusce orci diam, iaculis eu ultrices ac, mattis ut elit. Aliquam eget dui aliquet, ornare ex eu, sodales diam. Suspendisse placerat lacus in metus aliquet, at commodo tellus suscipit. Pellentesque a dui nec nulla mattis feugiat sed in urna. Aenean purus tellus, aliquet a sem quis, egestas accumsan lectus. Curabitur tristique felis dolor, non finibus ipsum pellentesque ut. Proin nec nulla nisl. Maecenas consequat tristique vulputate. Sed congue consequat enim, eu consectetur leo pretium ac. Nulla quis lectus lacus. Proin sit amet erat quis lorem pretium vulputate. Integer viverra nulla eu iaculis tristique.', '0000-00-00 00:00:00', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(35, 'hello', 'Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda, stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps, cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet, ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.', '0000-00-00 00:00:00', 0, 1, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(45, 'Hello Tout le monde', 'Depuis 1897 et l’avènement de Dracula par Bram Stoker, on a tendance à confondre ou mélanger l’ensemble des monstres de la culture populaire et à les placer dans le même panier. La Goule, la Liche, la Momie, le Squelette, le Vampire et le Zombie appartiennent donc officiellement à la catégorie des morts-vivants. Ils représentent parfaitement ces êtres plongés dans un état intermédiaire entre la vie et la mort, et qui subsistent tant bien que mal sous cette forme précaire.\r\n\r\nPour ce dossier, nous allons nous focaliser sur le plus populaire de ces monstres : le zombie. Il faut savoir, qu’au départ, on appelait comme tel des revenants dont les origines étaient propres au folklore lié au vaudou haïtien. Ce n’est que plus tard que le concept d’infection, comme c’est notamment le cas dans la série The Walking Dead, fera son apparition. Dans notre culture, le zombie est un « être social inférieur, incapable de réfléchir, de reconnaître ses amis et bien évidemment de prendre des décisions » . On a ainsi tendance à estimer qu’il n’est présent que pour dévorer de la chair humaine ou animal afin de répondre au besoin incessant de faim. Un être humain non infecté pouvant par ailleurs se transformer en zombie à cause d’un contact (bien souvent, une morsure) avec un zombie.', '0000-00-00 00:00:00', 0, 2017, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(46, 'hello', 'Depuis 1897 et l’avènement de Dracula par Bram Stoker, on a tendance à confondre ou mélanger l’ensemble des monstres de la culture populaire et à les placer dans le même panier. La Goule, la Liche, la Momie, le Squelette, le Vampire et le Zombie appartiennent donc officiellement à la catégorie des morts-vivants. Ils représentent parfaitement ces êtres plongés dans un état intermédiaire entre la vie et la mort, et qui subsistent tant bien que mal sous cette forme précaire.\r\n\r\nPour ce dossier, nous allons nous focaliser sur le plus populaire de ces monstres : le zombie. Il faut savoir, qu’au départ, on appelait comme tel des revenants dont les origines étaient propres au folklore lié au vaudou haïtien. Ce n’est que plus tard que le concept d’infection, comme c’est notamment le cas dans la série The Walking Dead, fera son apparition. Dans notre culture, le zombie est un « être social inférieur, incapable de réfléchir, de reconnaître ses amis et bien évidemment de prendre des décisions » . On a ainsi tendance à estimer qu’il n’est présent que pour dévorer de la chair humaine ou animal afin de répondre au besoin incessant de faim. Un être humain non infecté pouvant par ailleurs se transformer en zombie à cause d’un contact (bien souvent, une morsure) avec un zombie.', '0000-00-00 00:00:00', 0, 2017, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(47, 'Yo', 'Depuis 1897 et l’avènement de Dracula par Bram Stoker, on a tendance à confondre ou mélanger l’ensemble des monstres de la culture populaire et à les placer dans le même panier. La Goule, la Liche, la Momie, le Squelette, le Vampire et le Zombie appartiennent donc officiellement à la catégorie des morts-vivants. Ils représentent parfaitement ces êtres plongés dans un état intermédiaire entre la vie et la mort, et qui subsistent tant bien que mal sous cette forme précaire.\r\n\r\nPour ce dossier, nous allons nous focaliser sur le plus populaire de ces monstres : le zombie. Il faut savoir, qu’au départ, on appelait comme tel des revenants dont les origines étaient propres au folklore lié au vaudou haïtien. Ce n’est que plus tard que le concept d’infection, comme c’est notamment le cas dans la série The Walking Dead, fera son apparition. Dans notre culture, le zombie est un « être social inférieur, incapable de réfléchir, de reconnaître ses amis et bien évidemment de prendre des décisions » . On a ainsi tendance à estimer qu’il n’est présent que pour dévorer de la chair humaine ou animal afin de répondre au besoin incessant de faim. Un être humain non infecté pouvant par ailleurs se transformer en zombie à cause d’un contact (bien souvent, une morsure) avec un zombie.', '0000-00-00 00:00:00', 0, 2017, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(48, 'Yo', 'Depuis 1897 et l’avènement de Dracula par Bram Stoker, on a tendance à confondre ou mélanger l’ensemble des monstres de la culture populaire et à les placer dans le même panier. La Goule, la Liche, la Momie, le Squelette, le Vampire et le Zombie appartiennent donc officiellement à la catégorie des morts-vivants. Ils représentent parfaitement ces êtres plongés dans un état intermédiaire entre la vie et la mort, et qui subsistent tant bien que mal sous cette forme précaire.\r\n\r\nPour ce dossier, nous allons nous focaliser sur le plus populaire de ces monstres : le zombie. Il faut savoir, qu’au départ, on appelait comme tel des revenants dont les origines étaient propres au folklore lié au vaudou haïtien. Ce n’est que plus tard que le concept d’infection, comme c’est notamment le cas dans la série The Walking Dead, fera son apparition. Dans notre culture, le zombie est un « être social inférieur, incapable de réfléchir, de reconnaître ses amis et bien évidemment de prendre des décisions » . On a ainsi tendance à estimer qu’il n’est présent que pour dévorer de la chair humaine ou animal afin de répondre au besoin incessant de faim. Un être humain non infecté pouvant par ailleurs se transformer en zombie à cause d’un contact (bien souvent, une morsure) avec un zombie.', '0000-00-00 00:00:00', 0, 2017, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(56, 'Hell Guys 2!', 'ANow it works really really good!\r\nEdit Delete', '2017-07-11 06:41:27', 0, 23, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(57, '569404', 'ANow it works really really good!\r\nEdit Delete', '2017-07-11 07:06:32', 0, 24, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(58, 'Hell Guys 2!', 'ANow it works really really good!\r\nEdit Delete', '2017-07-11 07:06:09', 0, 25, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(60, 'yhoyoyoyoyoyoy  1', 'ANow it works really really good!\r\nEdit Delete', '2017-07-11 07:11:19', 0, 27, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(61, 'Hell Guys 2!', 'ANow it works really really good!\r\nEdit Delete', '2017-07-11 07:11:06', 0, 28, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là'),
(79, 'Yep another test', 'The creation of web forms has always been a complex task. While marking up the form itself is easy, checking whether each field has a valid and coherent value is even more difficult, and informing the user about the problem may become a headache. HTML5 introduced new mechanisms for forms: it added new semantic types for the &lt;input&gt; element and constraint validation to ease the work of checking the form content on the client side. Basic, usual constraints can be checked, without the need for JavaScript, by setting new attributes; more complex constraints can be tested using the HTML5 Constraint Validation API.', '2017-07-21 05:58:45', 0, 46, 'Plusieurs exemples de Lorem Ipsum peuvent être trouvées ici ou là');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `date_comment` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `date_comment`) VALUES
(4, 'je ne pense pas que ca soit encore ok', '2017-03-29 21:09:54'),
(5, 'je ne pense pas que ca soit encore ok', '2017-03-29 21:11:03'),
(6, 'je ne pense pas que ca soit encore ok', '2017-03-29 21:13:02'),
(7, 'je ne pense pas que ca soit encore ok', '2017-03-29 21:13:28'),
(8, 'je ne pense pas que ca soit encore ok', '2017-03-29 21:19:59'),
(9, 'hello what''s up guys', '2017-03-29 21:20:29'),
(10, 'and another one guys', '2017-03-29 21:21:44'),
(11, 'and another one guys', '2017-03-29 21:23:11'),
(12, 'and another one guys', '2017-03-29 21:23:20'),
(13, 'and another one guys', '2017-03-29 21:24:15'),
(14, 'and another one guys', '2017-03-29 21:26:19'),
(15, 'and another one guys', '2017-03-29 21:33:09'),
(16, 'and another one guys', '2017-03-29 21:34:31'),
(17, 'and another one guys', '2017-03-29 21:35:33'),
(18, 'and another one guys', '2017-03-29 21:38:06'),
(19, 'and another one guys', '2017-03-29 21:46:06'),
(20, 'kekekekekekekekeke', '2017-03-29 21:46:59'),
(21, 'another one let see now!!!', '2017-03-29 21:51:08'),
(22, 'another one let see now!!!', '2017-03-29 21:54:39'),
(23, 'blalalalalalalalalalalalaalalalala', '2017-03-29 21:55:15'),
(24, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 21:56:27'),
(25, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 21:58:05'),
(26, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 21:58:11'),
(27, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 22:01:07'),
(28, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 22:01:43'),
(29, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 22:04:41'),
(30, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 22:08:06'),
(31, 'alllaoaoahaezifuvzogufazùigrùapiregaùpiregerigespirgvbepivbepribvepbivepribvpervnper', '2017-03-29 22:09:12'),
(32, 'Ca marche bien ce truc franchement c''est cool', '2017-04-16 17:38:38'),
(33, 'regrtgrthtyutryujtyjrtyjrtjtyjrtyj', '2017-03-29 22:19:55'),
(34, 'regrtgrthtyutryujtyjrtyjrtjtyjrtyj', '2017-03-29 22:21:42'),
(35, 'regrtgrthtyutryujtyjrtyjrtjtyjrtyj', '2017-03-29 22:27:42'),
(36, 'regrtgrthtyutryujtyjrtyjrtjtyjrtyj', '2017-03-29 22:28:00'),
(37, 'mfbazeibffzepfnzenfzpeifbpzeibfpzeibfepifbeiiibfpzeibfpeibfzpeibfpùzebifùzpefbaùzefbùzapeifbzepbifzpeibf', '2017-03-29 22:28:30'),
(38, 'revergrzgerger', '2017-03-29 22:29:41'),
(40, 'rferververvferverververververve', '2017-03-29 22:37:43'),
(41, 'rferververvferverververververve', '2017-03-29 22:39:27'),
(42, 'rferververvferverververververve', '2017-03-29 22:39:38'),
(43, 'rferververvferverververververve', '2017-03-29 22:39:48'),
(44, 'rferververvferverververververve', '2017-03-29 22:40:10'),
(45, '', '2017-03-29 22:56:17'),
(46, '', '2017-03-29 22:58:25'),
(47, 'npzrbvpzrbvpzrbvpzrbvpzribrvpzbvpzrbvpzribvpzribv', '2017-03-29 23:01:31'),
(48, 'npzrbvpzrbvpzrbvpzrbvpzribrvpzbvpzrbvpzribvpzribv', '2017-03-29 23:02:21'),
(49, 'zergzgegergergr', '2017-03-29 23:02:36'),
(50, 'zergzgegergergr', '2017-03-29 23:05:17'),
(51, 'zergzgegergergr', '2017-03-29 23:42:28'),
(52, 'leleleleleleleleleleled,ezNPZNVPZinvpzNVpainzvpaNZVZ`NPV', '2017-03-30 22:01:50'),
(53, 'zvzevzefeazf', '2017-03-30 22:03:21'),
(54, 'babababababbab', '2017-04-16 14:03:16'),
(55, 'something', '2017-03-30 22:54:24'),
(56, 'something', '2017-03-30 22:54:50'),
(57, 'something is wrong mate nothing works as expected but will get there', '2017-03-30 22:55:39'),
(58, 'zpeigpzirhgpzihgprzihgpzrihgzprghizprhigpzrhgiùpzrihg', '2017-03-30 22:58:12'),
(59, 'zpeigpzirhgpzihgprzihgpzrihgzprghizprhigpzrhgiùpzrihg', '2017-03-30 22:58:34'),
(60, 'now I''m sure it''s fine :)))', '2017-03-30 23:20:45'),
(61, 'now I''m sure it''s fine :)))', '2017-03-30 23:27:04'),
(62, 'now I''m sure it''s fine :)))', '2017-03-30 23:29:14'),
(63, 'now I''m sure it''s fine :)))', '2017-03-30 23:30:10'),
(64, 'now I''m sure it''s fine :)))', '2017-03-30 23:30:53'),
(65, 'now I''m sure it''s fine :)))', '2017-03-30 23:31:59'),
(66, 'now I''m sure it''s fine :)))', '2017-03-30 23:39:41'),
(67, 'now I''m sure it''s fine :)))', '2017-03-30 23:42:08'),
(68, 'now I''m sure it''s fine :)))', '2017-03-30 23:43:02'),
(69, 'now I''m sure it''s fine :)))', '2017-03-30 23:43:15'),
(70, 'what''s up dude', '2017-04-03 21:11:09'),
(71, 'now I''m sure it''s fine :)))', '2017-04-03 21:29:29'),
(72, 'now I''m sure it''s fine :)))', '2017-04-03 21:30:04'),
(73, '&quot;(y(y&quot;(y''(y''y&quot;(y&quot;(y(&quot;y', '2017-04-03 21:32:51'),
(74, '&quot;(y(y&quot;(y''(y''y&quot;(y&quot;(y(&quot;y', '2017-04-03 21:35:04'),
(75, '&quot;(y(y&quot;(y''(y''y&quot;(y&quot;(y(&quot;y', '2017-04-03 21:43:50'),
(76, 'tbehtrhrt', '2017-04-03 21:44:19'),
(77, 'tbehtrhrt', '2017-04-03 21:46:47'),
(78, 'efzzfzefzefzefzefzefe', '2017-04-03 21:48:11'),
(79, 'grregregergf', '2017-04-03 21:57:11'),
(80, 'grregregergf', '2017-04-03 21:57:43'),
(81, 'grregregergf', '2017-04-03 22:03:22'),
(82, 'grregregergf', '2017-04-03 22:03:50'),
(83, 'grregregergf', '2017-04-03 22:03:58'),
(84, 'regergergergerg', '2017-04-03 22:31:47'),
(85, 'regergergergerg', '2017-04-03 22:32:16'),
(86, 'regergergergerg', '2017-04-03 22:32:45'),
(87, 'regergergergerg', '2017-04-03 22:34:02'),
(88, 'g&quot;grergregreg', '2017-04-03 22:34:39'),
(89, 'zfzefzefezfzefzefzefezf', '2017-04-03 22:36:06'),
(90, 'zfzefzefezfzefzefzefezf', '2017-04-03 22:37:37'),
(91, 'zfzefzefezfzefzefzefezf', '2017-04-03 22:38:05'),
(92, 'igbzpeibgpzebgzpbgzpeibgzeibg', '2017-04-03 22:39:33'),
(93, 'igbzpeibgpzebgzpbgzpeibgzeibg', '2017-04-03 22:40:10'),
(94, 'igbzpeibgpzebgzpbgzpeibgzeibg', '2017-04-03 22:40:21'),
(95, 'igbzpeibgpzebgzpbgzpeibgzeibg', '2017-04-03 22:41:05'),
(96, 'thethterhetrh', '2017-04-03 22:47:20'),
(97, 'ergergergerg', '2017-04-03 22:50:20'),
(98, 'ergergergerg', '2017-04-03 22:51:37'),
(99, 'zefzefzef', '2017-04-03 22:52:04'),
(100, 'zefzefzef', '2017-04-03 22:52:57'),
(101, 'zefzefzef', '2017-04-03 22:53:30'),
(102, 'zefzefzef', '2017-04-03 22:54:35'),
(103, 'zefzefzef', '2017-04-03 22:54:42'),
(104, 'bbuçuçubçubçbçubuiioiàkààà^^kk^', '2017-04-03 23:00:44'),
(105, 'bbuçuçubçubçbçubuiioiàkààà^^kk^', '2017-04-03 23:01:06'),
(106, 'bbuçuçubçubçbçubuiioiàkààà^^kk^', '2017-04-03 23:01:40'),
(107, 'rthryhrthrhrt', '2017-04-03 23:01:47'),
(108, 'rthryhrthrhrt', '2017-04-03 23:02:49'),
(109, 'rthryhrthrhrt', '2017-04-03 23:03:01'),
(110, 'rthryhrthrhrt', '2017-04-03 23:07:01'),
(111, 'biuboubobuôubôububuo', '2017-04-04 22:07:13'),
(112, 'biuboubobuôubôububuo', '2017-04-04 22:08:16'),
(113, 'biuboubobuôubôububuo', '2017-04-04 22:12:05'),
(114, 'biuboubobuôubôububuo', '2017-04-04 22:15:14'),
(115, 'biuboubobuôubôububuo', '2017-04-04 22:15:32'),
(116, 'biuboubobuôubôububuo', '2017-04-04 22:20:16'),
(117, 'biuboubobuôubôububuo', '2017-04-04 22:20:39'),
(118, 'biuboubobuôubôububuo', '2017-04-04 22:23:00'),
(119, 'biuboubobuôubôububuo', '2017-04-04 22:25:41'),
(120, 'biuboubobuôubôububuo', '2017-04-04 22:26:14'),
(121, 'biuboubobuôubôububuo', '2017-04-04 22:26:20'),
(122, 'biuboubobuôubôububuo', '2017-04-04 22:26:28'),
(123, 'biuboubobuôubôububuo', '2017-04-04 22:29:53'),
(124, 'biuboubobuôubôububuo', '2017-04-04 22:30:16'),
(125, 'biuboubobuôubôububuo', '2017-04-04 22:30:38'),
(126, 'biuboubobuôubôububuo', '2017-04-04 22:31:21'),
(127, 'biuboubobuôubôububuo', '2017-04-04 22:32:07'),
(129, 'alright mate', '2017-04-04 22:48:19'),
(130, 'alright mate', '2017-04-04 22:48:47'),
(133, 'yep super much!!!', '2017-04-05 21:18:12'),
(143, 'Hello Papa!', '2017-04-08 20:55:50'),
(145, 'Hello Papa!', '2017-04-12 23:18:02'),
(147, 'Ca c''est trés bien!', '2017-04-25 21:17:08'),
(148, 'De quoi???', '2017-04-25 21:16:50'),
(150, 'Sorry I meant HELLO', '2017-04-25 21:16:31'),
(152, 'What''s up man that''s way too long buddy!', '2017-04-25 21:31:49'),
(153, 'what the hell I don''t understand anything', '2017-04-26 22:15:20'),
(162, '<p style="text-align: left;"><span style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 16px; text-align: center; word-spacing: 0.3px; background-color: #1abc9c;">Mais pas qd j''en fai plusieurs</span></p>', '2017-05-07 12:54:10'),
(163, '<p style="text-align: left;"><strong>Ca marche</strong></p>', '2017-05-10 22:58:31'),
(166, 'Nothing special just a quick test', '2017-05-16 19:56:00');

-- --------------------------------------------------------

--
-- Structure de la table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `telephon` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addresss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact_names`
--

CREATE TABLE `contact_names` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_comment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact_names`
--

INSERT INTO `contact_names` (`id`, `first_name`, `last_name`, `id_comment`) VALUES
(6, 'Lana', 'Mouheb', 0),
(8, 'Noah', 'Mouheb', 0),
(9, 'Fadoua', 'Belaouchi', 0),
(10, 'LetMeDev4-U', '', 139),
(11, 'LetMeDev4-U', '', 140),
(12, 'LetMeDev4-U', '', 141),
(13, 'LetMeDev4-U', '', 142),
(14, 'Nanou', '', 143),
(15, 'Smale', '', 144),
(16, 'Noah', '', 145),
(17, 'LetMeDev4-U', '', 146),
(18, 'Nanou', '', 147),
(19, 'Noah', '', 148),
(20, 'LetMeDev4U', '', 149),
(21, 'Fay', '', 150),
(22, 'LetMeDev4U', '', 151),
(23, 'Add', '', 152),
(24, 'Fay', '', 153),
(25, 'LetMeDev4U', '', 154),
(26, 'Fadoua', '', 155),
(27, 'LetMeDev4U', '', 156),
(28, 'Smael', '', 157),
(29, '', '', 158),
(30, 'Rertertzrtrzt', '', 159),
(31, 'LetMeDev4U', '', 160),
(32, 'LetMeDev4U', '', 161),
(33, 'LetMeDev4U', '', 162),
(34, 'LetMeDev4U', '', 163),
(35, 'LetMeDev4U', '', 164),
(36, '', '', 165),
(37, 'Smael', '', 166);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `images`) VALUES
(2, 'MeSma.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `joint_a_comments`
--

CREATE TABLE `joint_a_comments` (
  `id_comment` int(11) NOT NULL DEFAULT '0',
  `id_article` int(11) NOT NULL DEFAULT '0',
  `id_image` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `joint_a_comments`
--

INSERT INTO `joint_a_comments` (`id_comment`, `id_article`, `id_image`) VALUES
(20, 30, 0),
(32, 30, 0),
(39, 30, 0),
(128, 30, 0),
(129, 28, 0),
(130, 28, 0),
(131, 30, 0),
(132, 30, 0),
(133, 21, 0),
(134, 30, 0),
(135, 30, 0),
(136, 30, 0),
(137, 30, 0),
(138, 30, 0),
(139, 29, 0),
(140, 29, 0),
(141, 30, 0),
(142, 30, 0),
(143, 29, 0),
(144, 30, 0),
(145, 22, 0),
(146, 30, 0),
(147, 30, 0),
(148, 30, 0),
(149, 30, 0),
(150, 30, 0),
(151, 30, 0),
(152, 31, 0),
(153, 37, 0),
(154, 41, 0),
(155, 41, 0),
(156, 41, 0),
(157, 41, 0),
(158, 41, 0),
(159, 41, 0),
(160, 41, 0),
(161, 41, 0),
(162, 41, 0),
(163, 41, 0),
(164, 41, 0),
(165, 41, 0),
(166, 49, 0);

-- --------------------------------------------------------

--
-- Structure de la table `joint_c_details`
--

CREATE TABLE `joint_c_details` (
  `id_contact_name` int(11) NOT NULL,
  `id_contact_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joint_c_rights`
--

CREATE TABLE `joint_c_rights` (
  `id_contact_name` int(11) NOT NULL,
  `id_rights` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rights`
--

CREATE TABLE `rights` (
  `id` int(11) NOT NULL,
  `rights` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_entry` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `date_entry`) VALUES
(1, 'LetMeDev4-U', NULL, '2017-05-12 21:23:44'),
(2, 'LetMeDev4U', NULL, '2017-05-12 21:23:44'),
(3, 'Fay', NULL, '2017-05-12 21:23:44'),
(4, 'Fay', NULL, '2017-05-12 21:23:44'),
(5, 'Nanou', NULL, '2017-05-12 21:23:44'),
(6, 'Nanou', NULL, '2017-05-12 21:23:44'),
(7, 'Nanou', NULL, '2017-05-12 21:23:44'),
(8, 'Nanou', NULL, '2017-05-12 21:23:44'),
(9, 'LetMeDev4U', NULL, '2017-05-22 20:39:37'),
(10, 'LetMeDev4U', NULL, '2017-05-22 20:41:12'),
(11, 'LetMeDev4U', NULL, '2017-05-22 20:41:31'),
(12, 'LetMeDev4U', NULL, '2017-05-22 20:42:21'),
(13, 'LetMeDev4U', NULL, '2017-05-22 20:42:46'),
(14, 'Smael', NULL, '2017-07-04 20:46:13'),
(15, 'LetMeDev4U', NULL, '2017-07-04 21:05:25'),
(16, 'LetMeDev4U', NULL, '2017-07-04 21:16:28'),
(17, 'LetMeDev4U', NULL, '2017-07-09 18:53:15'),
(18, 'LetMeDev4U', NULL, '2017-07-09 18:56:49'),
(19, 'LetMeDev4U', NULL, '2017-07-09 18:58:01'),
(20, 'LetMeDev4U', NULL, '2017-07-09 19:04:27'),
(21, 'LetMeDev4U', NULL, '2017-07-10 21:10:02'),
(22, 'LetMeDev4U', NULL, '2017-07-10 21:11:58'),
(23, 'LetMeDev4U', NULL, '2017-07-11 06:41:27'),
(24, 'LetMeDev4U', NULL, '2017-07-11 06:43:43'),
(25, 'LetMeDev4U', NULL, '2017-07-11 07:06:09'),
(26, 'LetMeDev4U', NULL, '2017-07-11 07:06:38'),
(27, 'LetMeDev4U', NULL, '2017-07-11 07:08:16'),
(28, 'LetMeDev4U', NULL, '2017-07-11 07:11:06'),
(29, 'LetMeDev4U', NULL, '2017-07-11 07:11:23'),
(30, 'LetMeDev4U', NULL, '2017-07-11 07:11:42'),
(31, '', NULL, '2017-07-15 06:11:39'),
(32, '', NULL, '2017-07-15 06:11:56'),
(33, 'LetMeDev4U', NULL, '2017-07-15 06:28:48'),
(34, ' erbbreb', NULL, '2017-07-15 14:09:43'),
(35, ' erbbreb', NULL, '2017-07-15 14:09:58'),
(36, ' erbbreb', NULL, '2017-07-15 14:10:02'),
(37, 'l ', NULL, '2017-07-15 15:26:44'),
(38, ' rferpf', NULL, '2017-07-15 15:27:13'),
(39, ' rferpf', NULL, '2017-07-15 15:32:12'),
(40, ' l', NULL, '2017-07-15 15:32:52'),
(41, 'elol', NULL, '2017-07-15 15:34:49'),
(42, 'elol', NULL, '2017-07-15 15:35:26'),
(43, 'Hello', NULL, '2017-07-15 22:19:30'),
(44, 'LetMeDev4U', NULL, '2017-07-17 20:20:26'),
(45, 'LetMeDev4U', NULL, '2017-07-17 20:51:07'),
(46, 'LetMeDev4U', NULL, '2017-07-18 22:50:36');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_names`
--
ALTER TABLE `contact_names`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joint_a_comments`
--
ALTER TABLE `joint_a_comments`
  ADD PRIMARY KEY (`id_comment`,`id_article`,`id_image`);

--
-- Index pour la table `joint_c_details`
--
ALTER TABLE `joint_c_details`
  ADD PRIMARY KEY (`id_contact_name`,`id_contact_detail`);

--
-- Index pour la table `joint_c_rights`
--
ALTER TABLE `joint_c_rights`
  ADD PRIMARY KEY (`id_contact_name`,`id_rights`);

--
-- Index pour la table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT pour la table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact_names`
--
ALTER TABLE `contact_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `rights`
--
ALTER TABLE `rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;