<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  pro_image:
    label: Image du projet
    type: selector 
    mode: single
    types: 
      - image
  logo_image:
    label: Logo du projet
    type: selector
    mode: single
    types: 
      - image
  text:
    label: Text
    type:  textarea
  offer: 
    label: Offer
    type: checkboxes
    options: query
    query:
      page: /offers
      template: offer
    columns: 1
    width: 1/2
  environment: 
    label: Environment
    type: checkboxes
    options: query
    query:
      page: /environments
      template: environment
    columns: 1
    width: 1/2

