<?php
/**
 * A light and elegent theme ported from Farbox by Cho. (Ported by <a href="mailto:ljxprime@foxmail.com">Vincent Liou</a>)
 * 
 * @package BedFord
 * @author Cho
 * @version 1.1
 * @link http://pagecho.com
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>
      <section id="body">
        <div class="container">
          <div id="main">
            <div class="res-cons">
            <?php if ($this->is('search')) : ?>
            <h1 class="label-title in-mark">搜索包含 <b><?php $this->archiveTitle(); ?></b>  的结果</h1>
            <?php endif; ?>
            <?php while ($this->next()) : ?>
              <article class="post">
                <header class="post-meta">
                  <time datetime="<?php $this->date('M d, Y'); ?>" pubdate="pubdate" class="post-date"><?php $this->date('M d, Y'); ?></time>
                  <h2 class="post-title"><a href="<?php $this->permalink(); ?>" ><?php $this->title(); ?></a>
                  </h2>
                </header>
                  <div class="post-content"><?php $this->content(''); ?></div>
              </article>
            <?php endwhile; ?>
            <?php if ($this->pageLink('下一页 &raquo;','next') || $this->pageLink('&laquo; 上一页')) : ?>
              <div class="page-navigator clearfix">
                <div class="in-mark">
                <?php $this->pageLink('下一页 &raquo;','next'); ?>
                <?php $this->pageLink('&laquo; 上一页'); ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>