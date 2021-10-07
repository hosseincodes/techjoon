<?php
function advanced_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
    <li class="comment">
      <article class="comment-body">
        <header class="comment-meta">
          <div class="comment-author">
            <?php echo get_avatar( $comment, 45 ); ?>
            <b class="fn"><?php echo get_comment_author_link(); ?></b>
            <span class="says"> گفت: </span>
          </div>
          <div class="comment-metadata">
            <a>
              <time><?php printf(__('%1$s'), get_comment_date('j F Y در g:i a'), get_comment_time()) ?></time>
            </a>
          </div>
        </header>
        <div class="notregcmnt">
          <?php if ($comment->comment_approved == '0') : ?>
            <p>
                      <em>دیدگاه شما منتظر تایید مدیریت است.</em><br />
                    </p>
                  <?php endif; ?>
        </div>
        <div class="comment-content">
          <?php comment_text(); ?>
        </div>
        <div class="reply">
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      </article>
    </li>
<?php }
