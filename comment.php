<div class="liberty-comment">
    <?php
    // 댓글 표시
    if (get_comments_number()) { ?>
        <span id="liberty-comments-header"><i class="far fa-comments"></i>댓글</span>

        <ul class="liberty-comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 74,
            ));
            ?>
        </ol>
    <?php
    }

    // 댓글 폼
    if (comments_open()) {
        if (get_comments_number()) {
            echo ("<hr>");
        };
    ?>
        <span>댓글 남기기</span>
    <?php
        $comment_form_args = array(
            'comment_field' => '내용',
            'author' => '닉네임',
            'comment_notes_before' => ''
        );
        comment_form($comment_form_args);
    }

    ?>

</div>