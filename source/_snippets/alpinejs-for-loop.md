---
extends: _layouts.post
section: content
title: Alpine.js `x-for` a number of iterations (n times)
author: Tahmidur Rahman
date: 2020-08-14
categories: [snippets]
---

> Alpine.js `x-for` a number of iterations (n times):
```html
<template x-for="_ in Array.from({ length: 4 })">
    ...
</template>
```