<div class="liberty-comment">
    <?php
    // 댓글 표시
    if (get_comments_number()) { ?>
        <div id="liberty-comments-header">
            <span><i class="far fa-comments"></i> 댓글</span>
        </div>

        <ul class="liberty-comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 100,
                'type' => 'comment'
            ));
            ?>
        </ul>
    <?php
    }

    // 댓글 폼
    if (comments_open()) {
        if (get_comments_number()) {
            echo ("<hr>");
        };
    ?>

    <?php
        $comment_form_args = array(
            'title_reply' => '댓글 남기기',
            'title_reply_before' => '<span id="liberty-comment-reply">',
            'title_reply_after' => '</span>',
            'comment_field' => '<p class="liberty-comment-field"><label for="comment">내용</label><br><textarea id="comment"></textarea></p>',
            'comment_notes_before' => '',
            'comment_notes_after' => ''
        );
        comment_form($comment_form_args);
    }

    ?>

</div>