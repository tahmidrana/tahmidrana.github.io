---
extends: _layouts.post
section: content
title: Disable sql_mode ONLY_FULL_GROUP_BY for Mysql
author: Tahmidur Rahman
date: 2020-08-14
categories: [snippets]
---

> Running this script will disable sql_mode `ONLY_FULL_GROUP_BY` for only current session. Each time the mysql server restarts, `ONLY_FULL_GROUP_BY` will be enabled again
 
```mysql
> SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
```
<br>
> Disable ONLY_FULL_GROUP_BY for mysql permanently:

→ **Step 1:** Add below line at the bottom of the mysql conf file (without any leading or trailing space)
```
sql_mode = "STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"
```
→ **Step 2:** Restart mysql with below command:
```bash
$ sudo service mysql restart
```

> **MySql conf file location:** <br>
> - **mint**: */etc/mysql/my.cnf*<br>
> - **ubuntu 16 and up**: /etc/mysql/my.cnf<br>
> - **ubuntu 14-16**: /etc/mysql/mysql.conf.d/mysqld.cnf