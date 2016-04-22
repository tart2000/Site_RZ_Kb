<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  fb:
    label: Facebook
    type: url
    width: 1/2
  tw: 
    label: Twitter
    type: url
    width: 1/2
  ln:
    label: LinkedIn
    type: url
    width: 1/2 
  mail: 
    label: Mail
    type: email
    width: 1/2
  address:
    label: Address
    type: textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea  
  analytics:
    label: Google Analytics ID
    type:  text
    default: UA-XXXXX-X