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
-- 表的结构 `nb_companies`
--

CREATE TABLE IF NOT EXISTS `nb_companies` (
  `company_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_orders`
--

CREATE TABLE IF NOT EXISTS `nb_orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `site_id` int(10) unsigned NOT NULL,
  `order_no` varchar(20) NOT NULL DEFAULT '',
  `order_status` tinyint(4) NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_order_products`
--

CREATE TABLE IF NOT EXISTS `nb_order_products` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_products`
--

CREATE TABLE IF NOT EXISTS `nb_products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL DEFAULT '',
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `delete_flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `price` decimal(12,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_sites`
--

CREATE TABLE IF NOT EXISTS `nb_sites` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_no` varchar(50) NOT NULL DEFAULT '',
  `qrcode` varchar(255) NOT NULL DEFAULT '',
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
      `password` varchar(20) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
