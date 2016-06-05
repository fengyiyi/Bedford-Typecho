<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>
      <section id="body">
        <div class="container">
          <div id="main" class="post-page">
            <div class="res-cons">
              <?php while ($this->next()) : ?>
              <article class="post">
                <header class="post-meta">
                  <date class="post-date"><?php $this->date('M d, Y'); ?></date>
                  <h1 class="post-title"><?php $this->title() ?></h1>
                </header>
                <section class="post-content"><?php $this->content(); ?></section>
              </article>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </section>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>