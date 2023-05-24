-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: May 23, 2023, 12:17 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `test`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `course`
-- 

CREATE TABLE `course` (
  `cid` varchar(3) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `credit` tinyint(3) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `course`
-- 

INSERT INTO `course` VALUES ('c01', '國文', 3);
INSERT INTO `course` VALUES ('c02', '英文', 3);
INSERT INTO `course` VALUES ('c03', '電腦程式設計', 10);

-- --------------------------------------------------------

-- 
-- 資料表格式： `mcourse`
-- 

CREATE TABLE `mcourse` (
  `mid` varchar(3) NOT NULL,
  `cid` varchar(3) NOT NULL,
  KEY `mid` (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `mcourse`
-- 

INSERT INTO `mcourse` VALUES ('001', 'c01');
INSERT INTO `mcourse` VALUES ('001', 'c02');
INSERT INTO `mcourse` VALUES ('001', 'c03');
INSERT INTO `mcourse` VALUES ('002', 'c01');
INSERT INTO `mcourse` VALUES ('002', 'c02');

-- --------------------------------------------------------

-- 
-- 資料表格式： `member`
-- 

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `lastlogindatetime` varchar(30) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES ('001', '劉慧禎', '1234', '2023-05-22 12:27:49');
INSERT INTO `member` VALUES ('002', '穆景煬', '1234', '2023-05-22 12:39:34');
INSERT INTO `member` VALUES ('003', '蔡承霖', '1234', '00:00:00');
INSERT INTO `member` VALUES ('004', '王詩晴', '1234', '00:00:00');
INSERT INTO `member` VALUES ('005', '黃鼎文', '1234', '00:00:00');
INSERT INTO `member` VALUES ('006', '孟子登', '1234', '00:00:00');
INSERT INTO `member` VALUES ('007', '陳樣鍀', '1234', '00:00:00');
INSERT INTO `member` VALUES ('008', '劉大猷', '1234', '00:00:00');
INSERT INTO `member` VALUES ('009', '陳昱任', '1234', '2023-05-22 16:14:58');
INSERT INTO `member` VALUES ('010', '陳祈羽', '1234', '00:00:00');
INSERT INTO `member` VALUES ('011', '羅筑秋', '1234', '00:00:00');
INSERT INTO `member` VALUES ('012', '宋廣義', '1234', '00:00:00');
INSERT INTO `member` VALUES ('013', '朱敏雄', '1234', '00:00:00');
INSERT INTO `member` VALUES ('014', '陳彥華', '1234', '2023-05-22 16:17:50');
INSERT INTO `member` VALUES ('015', '唐旅平', '1234', '2023-05-22 13:47:58');
INSERT INTO `member` VALUES ('016', '安代怡慧', '1234', '00:00:00');
INSERT INTO `member` VALUES ('017', '莊皓程', '1234', '2023-05-22 13:17:01');
INSERT INTO `member` VALUES ('018', '鄭雅文', '1234', '00:00:00');
INSERT INTO `member` VALUES ('019', '蔡明宏', '1234', '00:00:00');
INSERT INTO `member` VALUES ('020', '李朝吉', '1234', '2023-05-22 12:47:59');
INSERT INTO `member` VALUES ('023', '劉峻昇', '1234', '00:00:00');
INSERT INTO `member` VALUES ('adm', '系統管理者', '123456', '00:00:00');
INSERT INTO `member` VALUES ('030', '777777', '123456', '');
INSERT INTO `member` VALUES ('888', '888888', '888888', '');
