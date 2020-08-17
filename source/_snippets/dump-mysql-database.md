---
extends: _layouts.post
section: content
title: Dumping Mysql database
author: Tahmidur Rahman
date: 2020-08-14
categories: [snippets]
---

> Dump a single database:
```mysql
// mysql
# mysqldump -u [uname] -p db_name > db_backup.sql
```

> Dump all database from a server:
```mysql
// mysql
# mysqldump -u [uname] -p --all-databases > all_db_backup.sql
```