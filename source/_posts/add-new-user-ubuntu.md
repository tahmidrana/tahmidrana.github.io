---
extends: _layouts.post
section: content
title: Adding a new user on Ubuntu 18.04
date: 2020-08-17
description: Add and remove user on Ubuntu 18.04
cover_image: /assets/img/ubuntu-server-img.jpg
featured: true
categories: [server]
---

<span>Photo by <a  href="https://unsplash.com/@jstrippa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">James Harrison</a> on <a  href="https://unsplash.com/s/photos/hacker?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>

After creating a linux server, the first thing we should do is to create a non-root user. Because, running as the `root` user gives complete control over a system and users, which is really dangerous. To create a non-root user we need to follow below instructions.

 
###  Prerequisites
*  Access to your Ubuntu System as `root` or via `sudo` command is required

#####  **Step 1- Login to server using ssh:**
Use below command to Login to your ubuntu server from terminal. Use powershell or git bash from windows pc.

```bash
// replace "xx.xx.xx.xx" with your server ip
$ ssh root@xx.xx.xx.xx
```
Once you are logged in as `root`, we're prepared to add the new user account that we will use to log in from now on.

##### **Step - 2: Create user:**
Create a new user with this command below:
```bash
// `sudo` is optional if you are signed in as `root` user
$ sudo adduser sammy
```
You will be asked some questions like **new password**, **retype new password**, **full name** and some other optional informations. This example creates a new user called `sammy`, but you should replace it with a username that you like.

Now that you have created a new user `sammy`, you can login to your server with the newly created user:
```bash
// replace "xx.xx.xx.xx" with your server ip
$ ssh sammy@xx.xx.xx.xx
```

If you need your new user to have access to administrative functionality, continue on to the next section.

### Granting a User Sudo Privileges
If your new user should have the ability to execute commands with root (administrative) privileges, you will need to give the new user access to `sudo`.
With below command you can see groups of your new user:
```bash
$ groups sammy
// Output: sammy : sammy
```
In order to add the user to a new group, we can use the `usermod` command:
```bash
// this will add `sammy` to `sudo` group
$ usermod -aG sudo sammy
```

### Deleting a User
You can delete the user itself, without deleting any of their files, by typing the following command as **root**:
``` bash
$ sudo deluser sammy
```
To delete the users home directory along with the user, use the following command:
``` bash
$ deluser --remove-home sammy
```
> For more details. please follow below reference links.

Referrences: 

1. [Ubuntu 18.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-and-delete-users-on-ubuntu-18-04)
2. [Ubuntu 16.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-16-04)
3. [My previous blog post](https://tahmidrana.blogspot.com/)