
--
-- Base de données: `private_board`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `text_to_match` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `text_to_match`) VALUES
(32, 'The Walking Dead', 'the.walking.dead'),
(5, 'Homeland', 'homeland'),
(7, 'Revolution', 'Revolution'),
(14, 'Game Of Thrones', 'game.of.thrones'),
(15, 'Dexter', 'dexter'),
(20, 'Suits', 'suits.'),
(22, 'How i met your mother', 'how.i.met'),
(31, 'Arrow', 'arrow.S0');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(256) NOT NULL,
  `filecomplete` int(11) NOT NULL DEFAULT '0',
  `cat` varchar(256) NOT NULL,
  `code_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1269 ;



--
-- Structure de la table `log_connexion`
--

CREATE TABLE IF NOT EXISTS `log_connexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `Ip` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=277 ;


--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `fileid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=517 ;


-- --------------------------------------------------------

--
-- Structure de la table `requetes`
--

CREATE TABLE IF NOT EXISTS `requetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(256) NOT NULL,
  `quality` varchar(256) NOT NULL,
  `language` varchar(256) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `requete` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;


--
-- Structure de la table `restrictions`
--

CREATE TABLE IF NOT EXISTS `restrictions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text_to_match` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Structure de la table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `url`
--

INSERT INTO `url` (`id`, `name`, `url`) VALUES
(1, 'YourCreation', 'http://yourcreation.fr'),
(3, 'Yourcreation Mix', 'http://yourcreation.fr/?cat=300');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `userpass` varchar(256) NOT NULL,
  `userlevel` int(11) NOT NULL DEFAULT '1',
  `useravatar` varchar(256) NOT NULL DEFAULT 'notdefine',
  `lastconexion` int(11) NOT NULL,
  `LastLoadIndex` int(11) NOT NULL DEFAULT '0',
  `userstyle` varchar(255) NOT NULL DEFAULT 'style.css',
  `userstream` tinyint(4) NOT NULL DEFAULT '0',
  `userlastip` varchar(128) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `userpass`, `userlevel`, `useravatar`, `lastconexion`, `LastLoadIndex`, `userstyle`, `userstream`, `userlastip`) VALUES
(52, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'notdefine', 0, 0, 'style3.css', 0, 'none');
