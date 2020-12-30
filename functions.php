<?php
function wpdocs_excerpt_more($more)
{
    return "....";
};

function comments_field($fields)
{
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);
    $fields['author'] = $author_field;
    $fields['comment'] = $comment_field;
    return $fields;
};

add_filter('comment_form_fields', 'comments_field');
add_filter('excerpt_more', 'wpdocs_excerpt_more');
