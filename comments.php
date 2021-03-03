<div class="liberty-comment">
    <?php
    if (get_comments_number()) { ?>
        <div id="liberty-comments-header">
            <span><i class="far fa-comments"></i> 댓글</span>
        </div>

        <ul class="liberty-comment-list">
            <?php
            wp_list_comments(
                array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 100,
                'type' => 'comment'
             )
        );
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
            'comment_field' => '<p class="liberty-comment-field"><label for="comment">내용</label><br><textarea id="comment" name="comment"></textarea></p>',
            'comment_notes_before' => '',
            'comment_notes_after' => '<div id="capchanotice">구글의 리캡챠를 사용하고 있습니다. <a href="https://policies.google.com/privacy">개인 정보 정책</a>,  <a href="https://policies.google.com/terms">이용약관</a></div>'
        );
        comment_form($comment_form_args);
    }

    ?>

    
</div>