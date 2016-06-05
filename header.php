<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>">
    <link rel="alternate" type="application/rss+xml" title="rss 2.0" href="<?php $this->options->feedUrl(); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="renderer" content="webkit">
    <meta name="description" content="<?php $this->options->description(); ?>" />
    <title><?php $this->archiveTitle('','',' - '); ?><?php $this->options->title(); ?></title>

    <link href="<?php $this->options->themeUrl('static/style.css'); ?>" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php $this->options->themeUrl('static/jquery.min.js'); ?>"></script>
    <!-- Typecho Native Head Output -->
    <?php $this->header(); ?>
  </head>
  <body>
    <div class="side-click-mask"></div>
    <div class="move-block">
      <header id="header" class="clearfix">
        <div class="in-mark">
          <div class="container">
            <div class="site-name"><a href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('static/avatar.jpg?width=80&fixed=true&height=80'); ?>"  class="site-avatar"/>
                <div id="logo"><?php $this->options->title(); ?></div></a>
              <h1 class="title"><?php $this->options->title(); ?></h1>
            </div>
          </div>
        </div>
      </header>