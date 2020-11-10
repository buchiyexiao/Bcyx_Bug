# Bcyx_Bug

在之前的学习中，一直借助了一些已有的漏洞集进行学习和测试，虽然漏洞利用课程中有涉及到部分漏洞，但是由于课本是在几年前编写的，可能在一些新技术的发现和总结上并不能做到知识体系的完善，因此个人做一个WEB相关的漏洞集，为了便于加深自己对部分漏洞的基础理解和认识

## Bcyx_Bug环境搭建

因为WEB漏洞主要需要apache，mysql，因此直接借助集成环境xampp已有的docker进行搭建，docker搭建的具体细节不赘述，别问为什么不用dockerfile，问就是懒的整sql，sh文件

> docker pull tomsik68/xampp
> docker run -p 2222:22 -p 8888:80 -d -v /本机共享文件夹的位置(建议使用绝对地址):/www tomsik68/xampp
> ssh -p 2222 root@localhost
默认密码为root

连接到后台后访问ip的8888端口进入phpmyadmin对数据库进行设置，包括创建表等，具体题目具体创建，不予以详细赘述

#### ⭐⭐⭐⭐⭐⭐