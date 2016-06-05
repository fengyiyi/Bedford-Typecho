<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>
                  <ul id="comments">
                    <li class="comment" id="<?php $comments->theId(); ?>">
                      <div class="c_content comment_body">
                        <div class="author">
                          <div class="avatar"><?php $comments->gravatar('80', ''); ?>
                          </div>
                          <div class="author-name"><b><?php $comments->author(); ?></b></a>
                          </div>
                          <div class="author-date"><small><?php $comments->date('Y-m-d H:i'); ?></small>
                          </div>
                        </div>
                        <?php if ('waiting' == $comments->status) : ?>
                        <p><small><strong>您的评论正在等待审核……</strong></small></p>
                        <?php endif; ?>
                        <div class="comment_content"><?php $comments->content(); ?></div>
                      </div>
                    </li>
                  </ul>
 
<?php } ?>

<?php if ($this->allow('comment')) : ?>
              <div id="comments_container">
                <div class="in-mark"><link href="<?php $this->options->themeUrl('static/comment-style.css'); ?>" type="text/css" rel="stylesheet"/>
                <div class="comment-title">发表评论</div>
                  <form id="new_comment" method="post" action="<?php $this->commentUrl() ?>">
                    <div class="comment-traggle">
                      <div class="avatar"><img src="<?php $this->options->themeUrl('static/uface.png'); ?>"/></div>
                      <div class="traggle-title">撰写评论</div>
                    </div>
                    <div class="new_comment"><textarea name="text" rows="2" class="textarea_box"><?php $this->remember('text'); ?></textarea></div>
                    <div class="comment-traggled">
                      <div class="input_body clearfix">
                        <?php if (!$this->user->hasLogin()) : ?>
                        <ul class="ident">
                          <li>
                            <lable>昵称</lable>
                            <input type="text" name="author" value="<?php $this->remember('author'); ?>" />
                          </li>
                          <li>
                            <lable>邮箱</lable>
                            <input type="text" name="mail" value="<?php $this->remember('mail'); ?>" />
                          </li>
                          <li>
                            <lable>网址</lable>
                            <input type="text" name="url" value="<?php $this->remember('url'); ?>" />
                          </li>
                        </ul>
                        <?php endif; ?>
                        <?php $security = $this->widget('Widget_Security'); ?>
                          <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
                        <input id="c_submit" type="submit" value="提交评论"  class="c_button"/>
                      </div>
                    </div>
                  </form>
                  <?php $this->comments()->to($comments); ?>
                  <?php if ($comments->have()) : ?>
                  <?php $comments->listComments('before=<div>&after=</div>'); ?>
                  <?php if ($comments->pageNav()) : ?>
                  <div class="page-navigator clearfix">
                    <div class="in-mark">
                      <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;',0 ,'', 'wrapTag=div&wrapClass='); ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endif; ?>
                  <script>
                    $(document).ready(function(){
                      $(".new_comment").click(function(){
                        $(".comment-traggle").hide();
                        $(".new_comment textarea").css("height","auto");
                        $(".comment-traggled").fadeIn("slow");
                      });
                    });
                    $('textarea').keyup(function () {
                      $(this).height(this.scrollHeight);
                    });
                  </script>
                </div>
              </div>
<?php endif; ?>