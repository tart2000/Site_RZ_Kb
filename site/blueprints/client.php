<?php if(!defined('KIRBY')) exit ?>

title: Client
pages: false
files: true
fields:
  title:
    label: Nom compagnie
    type: text
  environment: 
    label: Environment
    type: checkboxes
    options: query
    query:
      page: /environments
      template: environment
