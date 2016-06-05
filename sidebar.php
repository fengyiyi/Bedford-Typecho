      <asid id="secondary">
        <div class="sidebar">
          <section class="widget">
            <div id="nav-menu">
                <a id="nav_blog" href="<?php $this->options->siteUrl(); ?>"<?php if ($this->is('index')) echo " class=\"selected active current\""; ?>>博客</a>
                <a href="<?php $this->options->siteUrl(); ?>archive.html"<?php if ($this->is('page', 'archive')) echo " class=\"selected active current\""; ?>>归档</a>
                <a href="<?php $this->options->siteUrl(); ?>about.html"<?php if ($this->is('page', 'about')) echo " class=\"selected active current\""; ?>>关于</a>
            </div>
          </section>
          <section class="widget">
            <div class="widget-title">最新文章</div>
            <?php $obj = $this->widget('Widget_Contents_Post_Recent', 'pageSize=8'); ?>
            <ul class="widget-list widget-list2">
              <?php if($obj->have()) : while($obj->next()) : ?>
              <li>
                <h3><a href="<?php $obj->permalink(); ?>" ><span class="date-day"><?php $obj->date('d'); ?></span><span class="date-month">/<?php strtoupper($obj->date('M')); ?></span><?php $obj->title(); ?></a>
                </h3>
              </li>
              <?php endwhile; ?>
			  <?php endif; ?>
            </ul>
          </section>
          <section class="widget">
            <div class="widget-title">搜索文章</div>
            <form id="search" method="get" action="<?php $this->options->siteUrl(); ?>">
              <input id="search_value" placeholder="Search" name="s" type="text" value="" class="text"/>
            </form>
          </section>
        </div>
      </asid>