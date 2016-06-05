<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>">
  <link rel="alternate" type="application/rss+xml" title="rss 2.0" href="<?php $this->options->feedUrl(); ?>">
  <meta name="viewport" content="width=device-width"/>
  <title>请求的页面不存在</title><link href="<?php $this->options->themeUrl('static/style.scss'); ?>" type="text/css" rel="stylesheet"/>
  </head>
  <body>
    <div class="body404">
      <div class="info404">
        <header id="header404" class="clearfix">
          <div class="site-name404"><i>404</i>
          </div>
        </header>
        <section>
          <div class="title404">
            <p>每一个平凡的日常<br>都是连续发生中的奇迹</p>
          </div><a href="<?php $this->options->siteUrl(); ?>" real="nofollow" class="index404">返回首页</a>
        </section>
        <footer id="footer404">© <?php echo date("Y"); ?> <a href="<?php $this->options->siteUrl(); ?>" real="nofollow"><?php $this->title() ?></a></footer>
      </div>
    </div>
  </body>
</html>