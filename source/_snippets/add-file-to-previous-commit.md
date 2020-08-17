---
extends: _layouts.post
section: content
title: Add a new file to previous commit in git
author: Tahmidur Rahman
date: 2020-08-14
categories: [snippets]
---

> Git commands for adding new files to previous commit:
``` git
$ git add new-file // add new files
$ git commit --amend // add files to previous commit
$ git commit --amend --no-edit // add files to previous commit without changing the commit message
```