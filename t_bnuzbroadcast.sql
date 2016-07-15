/*
Navicat MySQL Data Transfer

Source Server         : bnuzbroadcast
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : t_bnuzbroadcast

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-03 08:55:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_activity
-- ----------------------------
DROP TABLE IF EXISTS `t_activity`;
CREATE TABLE `t_activity` (
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  `activityname` varchar(50) NOT NULL,
  `activityintroduce` varchar(300) NOT NULL,
  `activitybigpicture` varchar(300) NOT NULL,
  `activitysmallpicture` varchar(255) NOT NULL,
  `activityphoto1` varchar(300) NOT NULL,
  `activityphoto2` varchar(255) NOT NULL,
  `activityphoto3` varchar(255) NOT NULL,
  `activityphoto4` varchar(255) NOT NULL,
  `activityphoto5` varchar(255) NOT NULL,
  `activityphoto6` varchar(255) NOT NULL,
  `activityphoto7` varchar(255) NOT NULL,
  `activityphoto8` varchar(255) NOT NULL,
  `activityphoto9` varchar(255) NOT NULL,
  `activityphoto10` varchar(255) NOT NULL,
  PRIMARY KEY (`activityid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_activity
-- ----------------------------
INSERT INTO `t_activity` VALUES ('1', '民谣弹唱会', '大冰老师师大之音广播台的老朋友\r\n\r\n而师大之音广播台有幸请到了大冰老师书中的民谣歌手\r\n\r\n来我校举办弹唱会', '/Public/img/my.jpg', '/Public/img/activity1.png', '/Public/img/memories1.png', '/Public/img/memories2.png', '/Public/img/memories3.png', '/Public/img/memories4.png', '/Public/img/memories5.png', '/Public/img/memories6.png', '/Public/img/memories7.png', '/Public/img/memories8.png', '/Public/img/memories9.png', '/Public/img/memories10.png');
INSERT INTO `t_activity` VALUES ('2', '校主持队', '全校唯一校级主持队\r\n\r\n隶属师大之音广播台\r\n\r\n有着专业素养和爆表的颜值。', '/Public/img/zcd.jpg', '/Public/img/activity2.png', '/Public/img/memories1.png', '/Public/img/memories2.png', '/Public/img/memories3.png', '/Public/img/memories4.png', '/Public/img/memories5.png', '/Public/img/memories6.png', '/Public/img/memories7.png', '/Public/img/memories8.png', '/Public/img/memories9.png', '/Public/img/memories10.png');
INSERT INTO `t_activity` VALUES ('3', '配音大赛', '配音大赛为了让更多的同学关注到广播台\r\n\r\n关注只闻其声不见其人的广播人\r\n\r\n是广播台大力发展的一项品牌活动', '/Public/img/ts.jpg', '/Public/img/activity3.png', '/Public/img/memory1.png', '/Public/img/memory2.png', '/Public/img/memory3.png', '/Public/img/memory4.png', '/Public/img/memory5.png', '/Public/img/memory6.png', '/Public/img/memory7.png', '/Public/img/memory8.png', '/Public/img/memory9.png', '/Public/img/memory10.png');
INSERT INTO `t_activity` VALUES ('4', '校园歌手CD派送', '第十三届校园歌手大赛专辑派送活动于2016年4月10日于会同坊前举行，\r\n扫二维码即可免费获得校园十大歌手专辑CD，并有机会抽取精美礼品', '/Public/img/activity-banner.png', '/Public/img/activity4.png', '/Public/img/memory1.png', '/Public/img/memory2.png', '/Public/img/memory3.png', '/Public/img/memory4.png', '/Public/img/memory5.png', '/Public/img/memory6.png', '/Public/img/memory7.png', '/Public/img/memory8.png', '/Public/img/memory9.png', '/Public/img/memory10.png');

-- ----------------------------
-- Table structure for t_hcomment
-- ----------------------------
DROP TABLE IF EXISTS `t_hcomment`;
CREATE TABLE `t_hcomment` (
  `hcommentid` int(11) NOT NULL AUTO_INCREMENT,
  `hostid` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `hcommentcontent` text NOT NULL,
  `hcommentdate` datetime NOT NULL,
  PRIMARY KEY (`hcommentid`),
  KEY `FK_Reference_7` (`hostid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_hcomment
-- ----------------------------
INSERT INTO `t_hcomment` VALUES ('38', '12', '1', '打发打发', '2016-06-24 20:59:52');
INSERT INTO `t_hcomment` VALUES ('39', '12', '2', '发', '2016-06-24 21:01:47');
INSERT INTO `t_hcomment` VALUES ('40', '5', '1', '刚好', '2016-06-24 21:03:28');
INSERT INTO `t_hcomment` VALUES ('41', '5', '1', '123', '2016-06-24 21:07:38');
INSERT INTO `t_hcomment` VALUES ('42', '1', '2', 'ggg', '2016-06-25 13:13:26');
INSERT INTO `t_hcomment` VALUES ('43', '14', '2', 'fff', '2016-07-02 11:54:13');

-- ----------------------------
-- Table structure for t_host
-- ----------------------------
DROP TABLE IF EXISTS `t_host`;
CREATE TABLE `t_host` (
  `hostid` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(10) NOT NULL,
  `hostheight` varchar(5) NOT NULL,
  `hostmarjor` varchar(30) NOT NULL,
  `hostposition` varchar(30) NOT NULL,
  `hostbig` varchar(100) NOT NULL,
  PRIMARY KEY (`hostid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_host
-- ----------------------------
INSERT INTO `t_host` VALUES ('1', '潘志航', '181', '播音与主持艺术', '副队长', '/Public/img/lgm1.png');
INSERT INTO `t_host` VALUES ('2', '马宇晴', '169', '播音与主持艺术', '队长', '/Public/img/lgm2.png');
INSERT INTO `t_host` VALUES ('3', '申博扬', '178', '传播学', '副队长', '/Public/img/lgm3.png');
INSERT INTO `t_host` VALUES ('4', '林晶晗', '172', '播音与主持艺术', '队员', '/Public/img/lgm4.png');
INSERT INTO `t_host` VALUES ('5', '李玲慧', '165', '服装与服饰设计', '队员', '/Public/img/lgm5.png');
INSERT INTO `t_host` VALUES ('6', '郝晨欣', '174', '播音与主持艺术', '队员', '/Public/img/lgm6.png');
INSERT INTO `t_host` VALUES ('7', '成栩莹', '162', '英语-国际汉语教育 双专', '队员', '/Public/img/lgm7.png');
INSERT INTO `t_host` VALUES ('8', '谭湘雯', '168', '播音与主持艺术', '队员', '/Public/img/lgm8.png');
INSERT INTO `t_host` VALUES ('9', '冯佳', '162', '播音与主持艺术', '队员', '/Public/img/lgm9.png');
INSERT INTO `t_host` VALUES ('10', '赵俊', '163', '汉语言文学 ', '队员', '/Public/img/lgm10.png');
INSERT INTO `t_host` VALUES ('11', '方良文', '180', '播音与主持艺术', '队员', '/Public/img/lgm11.png');
INSERT INTO `t_host` VALUES ('12', '张宇辉', '176', '播音与主持艺术', '队员', '/Public/img/lgm12.png');
INSERT INTO `t_host` VALUES ('13', '刘银寺', '183', '播音与主持艺术', '队员', '/Public/img/lgm13.png');
INSERT INTO `t_host` VALUES ('14', '孙铭泽', '180', '播音与主持艺术', '队员', '/Public/img/lgm14.png');
INSERT INTO `t_host` VALUES ('15', '杨力帆', '178', '播音与主持艺术', '队员', '/Public/img/lgm15.png');
INSERT INTO `t_host` VALUES ('16', '林钧和', '179', '播音与主持艺术', '队员', '/Public/img/lgm16.png');
INSERT INTO `t_host` VALUES ('17', '123', '123', '123', '123', '/Uploads/2016-07-01/57768c5e8ec99.jpg');

-- ----------------------------
-- Table structure for t_invite
-- ----------------------------
DROP TABLE IF EXISTS `t_invite`;
CREATE TABLE `t_invite` (
  `inviteid` int(11) NOT NULL AUTO_INCREMENT,
  `hostid` int(11) NOT NULL,
  `invitename` varchar(10) NOT NULL,
  `invitenumber` varchar(30) NOT NULL,
  `invitemain` varchar(30) NOT NULL,
  `invitetime` varchar(30) NOT NULL,
  `inviteplace` varchar(50) NOT NULL,
  `invitecontent` varchar(300) NOT NULL,
  PRIMARY KEY (`inviteid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_invite
-- ----------------------------
INSERT INTO `t_invite` VALUES ('2', '3', '6', '', '', '20161006', '', '');
INSERT INTO `t_invite` VALUES ('3', '3', '666', '6', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('4', '3', '', '6', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('5', '1', '', '6', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('7', '1', '6', '', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('8', '1', '6', '', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('9', '6', '', '', '', '20160406', '', '');
INSERT INTO `t_invite` VALUES ('10', '1', 'aa', 'aaaa', 'aa', '20160101', 'aaaa', 'aa');
INSERT INTO `t_invite` VALUES ('11', '4', 'fggg', 'gg', 'gg', '20160103', 'gg', 'rr');
INSERT INTO `t_invite` VALUES ('12', '1', 'ff', 'fff', 'ffff', '20160406', 'ffffffff', 'fffffff');
INSERT INTO `t_invite` VALUES ('13', '12', '456', '45', '365', '20160908', '66666', '666');

-- ----------------------------
-- Table structure for t_join
-- ----------------------------
DROP TABLE IF EXISTS `t_join`;
CREATE TABLE `t_join` (
  `joinid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `joindate` datetime NOT NULL,
  `joinname` varchar(10) NOT NULL,
  `joinnumber` varchar(30) NOT NULL,
  PRIMARY KEY (`joinid`),
  KEY `FK_Reference_10` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_join
-- ----------------------------
INSERT INTO `t_join` VALUES ('1', '2', '2016-06-01 08:01:02', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('2', '2', '2016-06-06 08:00:55', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('3', '2', '2016-06-14 08:00:49', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('4', '2', '2016-07-03 08:00:42', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('5', '2', '2016-07-03 08:03:07', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('6', '2', '2016-07-03 08:07:05', '陈晓莹', '13631270877');
INSERT INTO `t_join` VALUES ('7', '2', '2016-07-03 08:08:14', '陈晓莹', '13631270877');

-- ----------------------------
-- Table structure for t_noice
-- ----------------------------
DROP TABLE IF EXISTS `t_noice`;
CREATE TABLE `t_noice` (
  `noticeid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `noticename` varchar(50) NOT NULL,
  `noticedate` datetime NOT NULL,
  `noticeintroduce` varchar(300) NOT NULL,
  `noticepicture` varchar(300) NOT NULL,
  PRIMARY KEY (`noticeid`),
  KEY `FK_Reference_1` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_noice
-- ----------------------------

-- ----------------------------
-- Table structure for t_pcomment
-- ----------------------------
DROP TABLE IF EXISTS `t_pcomment`;
CREATE TABLE `t_pcomment` (
  `pcommentid` int(11) NOT NULL AUTO_INCREMENT,
  `programid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `pcommentcontent` text NOT NULL,
  `pcommentdate` datetime NOT NULL,
  PRIMARY KEY (`pcommentid`),
  KEY `FK_Reference_4` (`programid`),
  KEY `FK_Reference_6` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_pcomment
-- ----------------------------
INSERT INTO `t_pcomment` VALUES ('2', '7', '2', '的萨芬', '2016-06-24 22:43:01');

-- ----------------------------
-- Table structure for t_program
-- ----------------------------
DROP TABLE IF EXISTS `t_program`;
CREATE TABLE `t_program` (
  `programid` int(11) NOT NULL AUTO_INCREMENT,
  `programname` varchar(50) NOT NULL,
  `programdate` datetime NOT NULL,
  `programcontent` varchar(300) DEFAULT NULL,
  `programinstruction` varchar(300) DEFAULT NULL,
  `programpicture` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`programid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_program
-- ----------------------------
INSERT INTO `t_program` VALUES ('1', '那些我所向往的自由与远方', '2016-07-03 00:00:00', '/Uploads/2016-07-03/57785f83be127.mp3', '莱蒙托夫将人生比喻成航行，每个人都是浩瀚海洋中的一只小帆，我们孤独，我们随风飘动，我们自由。我们可能身不由己，我们也许饱受挫折，但是我们活着，我们相爱，我们就不能害怕被伤害呀。关于自由，每个人都有不同的理解与追求。一百名观众有一百种哈姆雷特，一百个人就有一百种自由的追求。无论哪一种，生命不息战斗不止，千万不要放弃，对自由的追求。', '/Uploads/2016-07-03/57785f83b871c.jpg');
INSERT INTO `t_program` VALUES ('2', 'Maroon 5', '2016-07-03 00:00:00', '/Uploads/2016-07-03/57785fbd9044e.mp3', '有没有一个瞬间对当下的流行音乐感到一丝厌倦？感觉那些繁杂的电音扰乱着的心弦？迫切期待着能够洗涤灵魂的传统抒情摇滚?本周我们将为你带来来自魔力红的一些经典抒情摇滚推荐，是的你没听错，是来自魔力红的抒情摇滚。曾几何时魔力红还未被流行元素侵染的岁月，让我们随着主唱亚当灵动的声线去感受经典给我们带来的灵魂激荡。', '/Uploads/2016-07-03/57785fbd8b93f.png');
INSERT INTO `t_program` VALUES ('3', '生活大爆炸', '2016-07-03 00:00:00', '/Uploads/2016-07-03/577860544ee47.mp3', 'hi 小朋友们大家好 还记得我们是谁吗\r\n对啦 我们就是当年叱咤风云的大忽悠\r\n什么大忽悠啊 我们是小鲜肉 我们是今年师大之音生活大爆炸的新成员XX XX 今天我们要和海华 粤华 京华和燕华\r\n还有京师家园的小朋友们来做现场的表演\r\n对了我们今天就来讲一讲如何搞基 呸 如何学习的故事\r\n准备好了吗 我们马上就要开讲啦~~~', '/Uploads/2016-07-03/577860544b086.jpg');
INSERT INTO `t_program` VALUES ('7', '关于大学生使用信用卡利弊', '2016-07-03 00:00:00', '/Uploads/2016-07-03/5778608f0bd1d.mp3', '近几年，学生信用卡在各大高校迅速窜红，越来越多的大学生开始使用这种先消费后还款的透支服务。各家银行都推出了相关的学生信用卡业务，慷慨地提供给大学生额度不小的透支额度。其中，建设银行提供的最高额度为3000，工商银行的额度为500元，其他银行的透支额度大多控制在2000元以内。同时，信用卡办卡的门槛也越来越低。\r\n  随着市场经济的发展和与国外的日益接轨，信用卡为大学生带来了许多便利之处，了解和使用信用卡，是新时代大学生的必修课。同时它也是一把双刃剑，对其放任自流，糊涂消费就会出现这样或那样的问题。我们要学会理性消费、合理理财，上好大学生活的理财的第一课。在全球金融危机的今天，理性对待信用卡更具', '/Uploads/2016-07-03/5778608f07efd.jpg');
INSERT INTO `t_program` VALUES ('8', 'Lucas Till in“You Belong With Me”', '2016-07-03 00:00:00', '/Uploads/2016-07-03/57786106bf3b8.mp3', 'Lucas Till在Taylor Swift的榜首歌单“You Belong With Me”MV里面赢得了她的欢心，不过他们俩的感情维持的时间并不长，这看起来并没有什么戏剧性因为在泰勒斯威夫特后来的歌里并没有看到关于他的歌。而Lucas后来也承认他们俩有尝试过认真的去约会，说“并不很成功”，他“只是把她当作朋友一样喜欢”', '/Uploads/2016-07-03/57786106bbb45.jpg');
INSERT INTO `t_program` VALUES ('9', 'The Hunger Games:Mockingjay-Part2', '2016-07-03 00:00:00', '/Uploads/2016-07-03/57786138b0fd7.mp3', '这部电影告诉我们Ktniss并不是强大得无以复加，她很突然的领导了革命，她的命运改变让她成为了嘲笑鸟，成为了自由的象征。这并不是她的选择，却成为了她唯一的选择，她实际上是领导世界，渴望自由的人安排的一个角色。毫无疑问，在争取自由的过程中，很多人会悲剧的死去。我们需要知道的只是当一个人无法决定他的命运，他最好做点什么去改变这个世界。', '/Uploads/2016-07-03/57786138abab2.jpg');
INSERT INTO `t_program` VALUES ('10', 'MUSIC  Ariana Grande:Santa Tell Me', '2016-07-03 00:00:00', '/Uploads/2016-07-03/5778616e20fe2.mp3', 'Santa Tell Me是美国歌手爱丽安娜·格兰德在2014年11月25日，与圣诞节前夕发行的圣诞单曲。灵感源自圣诞老人，歌曲表达了希望拥有永远的爱。', '/Uploads/2016-07-03/5778616e1d6c7.JPG');
INSERT INTO `t_program` VALUES ('11', '20151110粤嚟粤北师公众号推送by鲸鱼', '2016-07-03 00:00:00', '/Uploads/2016-07-03/577861c1c6fcf.mp3', '一年一度嘅双十一就到啦 仲系孤身寡人嘅你打算有咩搞作啊 系click入淘宝最后武装自己嘅购物战车 定系趁双十一之前贴埋大床将自己sell出去 抑或系反锁自己系宿舍杜绝一切对单身狗嘅暴击伤害 呢个确实系一个头痕嘅问题  ', '/Uploads/2016-07-03/577861c1bc113.jpg');
INSERT INTO `t_program` VALUES ('12', '心情沙漏', '2016-07-03 00:00:00', '/Uploads/2016-07-03/5778620cf0a18.mp3', '所有的曲终人散 分道扬镳，到最后可惜的不是离散，而是没有好好告别。这是一个流行分离的世界，但我们都不擅长告别。那些毕业的语录总会让你笑着流泪，那些偷偷溜走的时光却丰盈了我们的人生。感谢路上一直有你们的陪伴，我才是幸福的。从今往后 愿我们脚下有风，各自灿烂。', '/Uploads/2016-07-03/5778620ced604.jpg');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `usernumber` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `userphone` varchar(30) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `userpicture` varchar(300) DEFAULT NULL,
  `userinstruction` varchar(300) DEFAULT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', '3432', '23', '34324', '34324', '34234', '/Uploads/2016-06-21/5768c6601eb37.jpg', '324324', '2');
INSERT INTO `t_user` VALUES ('2', '1301050007', 'mumu', '25d55ad283aa400af464c76d713c07ad', '13631270877', '420199278@qq.com', '/Uploads/2016-07-03/57786255dd355.png', '123', '0');
