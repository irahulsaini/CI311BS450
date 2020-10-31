<?php defined('BASEPATH') or exit('No direct access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <?=!empty($title)?'<title>'.$title.'</title>':'';?>
          <?=!empty($description)?'<meta name="description" content="'.$description.'"/>':'';?>
          <?=!empty($canonical)?'<link rel="canonical" href="'.$canonical.'"/>':'';?>
          <link rel="stylesheet" href="<?php echo template_url('dist/css/bootstrap.css');?>"/>
          <link rel="stylesheet" href="<?php echo template_url('dist/css/all.min.css');?>"/>
     </head>
     <body>