/*
SQLyog Ultimate v11.25 (64 bit)
MySQL - 5.1.73 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

/* 创建表 */
CREATE TABLE `deepcate` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '菜单ID，自增长',
  `pid` int(10) NOT NULL COMMENT '父ID',
  `catename` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单名',
  `cateorder` int(10) DEFAULT NULL COMMENT '同级菜单排名',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

/* 插入数据 */
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('1','0','新闻','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('2','0','图片','2',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('3','1','国内新闻','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('4','1','国际新闻','2',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('5','3','北京新闻','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('6','4','美国新闻','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('7','2','美女图片','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('8','2','风景图片','2',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('9','7','日韩明星','1',NULL);
insert into `deepcate` (`id`, `pid`, `catename`, `cateorder`, `createtime`) values('10','9','日本AV','1',NULL);
