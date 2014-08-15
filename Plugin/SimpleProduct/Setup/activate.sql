CREATE TABLE IF NOT EXISTS `ip_simple_product_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `deliveryCost` int(11) NOT NULL COMMENT 'in cents',
  `priority` int(11) NOT NULL DEFAULT '0',
  `isDefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `ip_simple_product_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `deliveryCost` int(11) NULL COMMENT 'in cents',
  `country` varchar(255) NOT NULL,
  `other` text COMMENT 'This field store any other custom fields added by customizing checkout form. JSON format.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ip_simple_product_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `item_number` varchar(32) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'MOP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
