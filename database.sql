-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 08 月 20 日 12:59
-- 服务器版本: 5.5.34-0ubuntu0.13.04.1
-- PHP 版本: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库: `newdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `nb_company`
--

CREATE TABLE IF NOT EXISTS `nb_company` (
  `company_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_company_wifi`
--

CREATE TABLE IF NOT EXISTS `nb_company_wifi` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL DEFAULT 0,
  `macid` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_order`
--

CREATE TABLE IF NOT EXISTS `nb_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `site_no_id` int(10) unsigned NOT NULL,
  `order_status` tinyint(4) NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- 表的结构 `nb_site_no`
--

CREATE TABLE IF NOT EXISTS `nb_site_no` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `site_id` int(10) unsigned NOT NULL,
  `waiter_id` int unsigned NOT NULL,
  `code` varchar(10) NOT NULL DEFAULT '',
  `delete_falg` tinyint unsigned not null default 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_order_product`
--

CREATE TABLE IF NOT EXISTS `nb_order_product` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_product`
--

CREATE TABLE IF NOT EXISTS `nb_product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL DEFAULT '',
  `main_picture` varchar(255) NOT NULL DEFAULT '',
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `delete_flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `price` decimal(12,0) NOT NULL DEFAULT '0',
  `recommend` tinyint unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_site`
--

CREATE TABLE IF NOT EXISTS `nb_site` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serial` varchar(50) NOT NULL DEFAULT '',
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_user`
--
CREATE TABLE IF NOT EXISTS `nb_user` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `username` varchar(50) NOT NULL DEFAULT '',
      `password_hash` varchar(60) NOT NULL DEFAULT '',
      `password_reset_token` varchar(255) NOT NULL DEFAULT '',
      `staff_no` varchar(20) NOT NULL DEFAULT '',
      `company_id` int(10) unsigned NOT NULL DEFAULT '0',
      `email` varchar(255) NOT NULL DEFAULT '',
      `auth_key` varchar(255) NOT NULL DEFAULT '',
      `role` int(10) unsigned NOT NULL DEFAULT '0',
      `status` int(10) unsigned NOT NULL DEFAULT '0',
      `create_at` int(10) unsigned NOT NULL DEFAULT '0',
      `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
INSERT INTO `nb_user` (`id`, `username`, `password_hash`, `password_reset_token`, `staff_no`, `company_id`, `email`, `auth_key`, `role`, `status`, `create_at`, `update_at`) VALUES
(2, 'admin', '$2y$13$mnsscQgwuveH.EqDgDkcCedM2XH6T3OSmxQU/oKFO9J.ngaLMXrgm', 'asdasd', '100', 0, 'a@a.com', 'adasd', 1, 10, 0, '2014-08-25 08:08:21');
