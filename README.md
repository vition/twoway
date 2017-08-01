#### 官网系统

> 简介

* 全站通过thinkphp框架搭建
* 后台使用了adminLTE模板（bootstrap框架）
* 基础功能：配置、添加新闻、单页管理、添加用户、资源管理和banner管理，
* 高级功能：前端模板在线编辑（使用了codemirror编辑器），修改前端控制器。

##### 全局配置

* 基本配置【这些也可以通过高级代码直接编写】
    * 网站名称：配置网站全局title显示的名称
    * 默认网址：配置网站主要的网址
    * 关键字：即全站meta便签里的keywords
    * 网站描述：即全站meta便签里的description
    * 底部脚本：即前端footer脚本
* 高级配置
    * 网站开启：网站维护等情况可以暂时关闭网站【模板编辑中可以修改内容】
    * 对外开放：可以适用于内部网站，需要登录才能访问网站
    * 开放注册：是否允许所有人注册会员
    * 开放评论：开启后任何人可以评论文章
    * 评论审核：建议开启，不然太多垃圾评论 

##### 文章管理

* 新建文章：包含分类，标题，封面，标签和内容【使用KindEditor编辑器】
* 文章管理：对文章列表进行查看和编辑删除
* 分类管理：管理文章分类

##### 单页管理

* 新建单页：包含分类，标题，封面，标签和内容【使用KindEditor编辑器】
* 单页管理：对单页列表进行查看和编辑删除

##### 用户管理

* 新建用户
* 用户管理
* 分组管理

##### 资源管理

* 上传资源
* 资源管理

##### 其他功能

* banner管理
* 评论管理
* 日志管理

#### 高级功能
* 模板编辑：编辑Home/view下所有html文件
* 前端控制器：编写前端控制器功能了

> 2017-6-6新增数据字段
'''
ALTER TABLE tw_posts ADD posts_likes INT(9) NOT NULL DEFAULT 0;
ALTER TABLE tw_pages ADD pages_likes INT(9) NOT NULL DEFAULT 0;
ALTER TABLE tw_posts ADD posts_views int (9) NOT NULL DEFAULT 1;
ALTER TABLE tw_pages ADD pages_views int (9) NOT NULL DEFAULT 1;
'''
> 2017-8-1 新增数据 tw_log,tw_source表，tw_user表新增user_access字段

* 表 tw_user

```
alter table tw_user add user_access tinyint(2) unsigned default 0;
```

* 表 tw_source

```
CREATE TABLE IF NOT EXISTS `tw_source` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `min_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;
```

* 表 tw_log

```
CREATE TABLE IF NOT EXISTS `tw_log` (
    ->   `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
    ->   `user` char(20) DEFAULT NULL,
    ->   `type` char(5) DEFAULT NULL COMMENT '操作类型',
    ->   `module` char(20) DEFAULT NULL COMMENT '操作模块',
    ->   `create_time` datetime DEFAULT NULL COMMENT '创建时间',
    ->   PRIMARY KEY (`id`)
    -> ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
```
