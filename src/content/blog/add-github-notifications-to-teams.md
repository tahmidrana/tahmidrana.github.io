---
author: Tahmidur Rahman
pubDatetime: 2024-02-18T14:32:00
# modDatetime: 2023-12-21T09:12:47.400Z
title: Github notifications to Teams channel
slug: github-notifications-to-teams-channel
featured: true
draft: false
tags:
  - teams
  - github
description:
  Send Git push and pull request notifications to Microsoft teams using GitHub Actions
---

## Table of contents

## Get Going
A simplified way to send git notifications to the MS Teams channel

## Step 1: Create an Incoming webhook in Teams:
1. Create a channel under Teams
2. Get the WebHook URL and copy
3. Reference how to create a webhook URL: https://learn.microsoft.com/en-us/microsoftteams/platform/webhooks-and-connectors/how-to/add-incoming-webhook?tabs=dotnet

## Step 2: Configure Webhook in GitHub:
1. Settings -> Secret and Variables -> Actions -> New Repository Secret
2. Name as: TEAMS_WEBHOOK_URL
3. Value as: paste the webhook URL which you copied in step 1.2

## Step 3: Allow permissions for GitHub Actions:
1. Settings -> Actions -> General ->
2. Allow all actions and reusable workflows -> Save
3. Accessible from repositories in the ‘YourOrg’ organization -> Save

## Step 4: Set up a workflow
1. Actions -> set up a workflow yourself ->
2. Add this in main.yml

```
name: MS Teams Notification
on: [push, pull_request]

jobs:
  build:
    runs-on: ubuntu-latest

    steps:
      - uses: actions/checkout@v2
      # this is the new step
      - uses: dchourasia/ms-teams-notification@1.0 #  or "./" if in a local set-up
        if: always()
        with:
          github-token: ${{ github.token }}
          webhook-uri: ${{ secrets.TEAMS_WEBHOOK_URL }}
```

## 3. Commit changes:
Reference: https://github.com/marketplace/actions/microsoft-teams-notifications