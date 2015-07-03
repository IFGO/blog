CREATE TABLE IF NOT EXISTS `blg_artigo` (
  `artigo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `BLG_USUARIO_usuario_id` int(10) unsigned NOT NULL,
  `artigo_titulo` varchar(255) DEFAULT NULL,
  `artigo_corpo` text,
  `artigo_datamodificacao` datetime DEFAULT NULL,
  `artigo_datacriacao` datetime DEFAULT NULL,
  PRIMARY KEY (`artigo_id`),
  KEY `BLG_ARTIGO_FKIndex1` (`BLG_USUARIO_usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blg_artigo_tag`
--

CREATE TABLE IF NOT EXISTS `blg_artigo_tag` (
  `BLG_ARTIGO_artigo_id` int(10) unsigned NOT NULL,
  `BLG_TAG_tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`BLG_ARTIGO_artigo_id`,`BLG_TAG_tag_id`),
  KEY `BLG_ARTIGO_has_BLG_TAG_FKIndex1` (`BLG_ARTIGO_artigo_id`),
  KEY `BLG_ARTIGO_has_BLG_TAG_FKIndex2` (`BLG_TAG_tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8;

-- --------------------------------------------------------

--
-- Table structure for table `blg_comentario`
--

CREATE TABLE IF NOT EXISTS `blg_comentario` (
  `comentario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `BLG_ARTIGO_artigo_id` int(10) unsigned NOT NULL,
  `comentario_autor` varchar(255) NOT NULL,
  `comentario_data` datetime NOT NULL,
  `comentario_conteudo` text NOT NULL,
  PRIMARY KEY (`comentario_id`),
  KEY `BLG_COMENTARIO_FKIndex1` (`BLG_ARTIGO_artigo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blg_tag`
--

CREATE TABLE IF NOT EXISTS `blg_tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blg_usuario`
--

CREATE TABLE IF NOT EXISTS `blg_usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(255) NOT NULL,
  `usuario_email` varchar(255) NOT NULL,
  `usuario_aniversario` date NOT NULL,
  `usuario_apelido` varchar(255) NOT NULL,
  `usuario_senha` varchar(255) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf-8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
