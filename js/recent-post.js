$('#recent-post-button').click(function () {
    $('#recent-post-button').addClass('active');
    $('#recent-comment-button').removeClass('active');
    $('#recent-post-list').show();
    $('#recent-comment-list').hide();
});
$('#recent-comment-button').click(function () {
    $('#recent-comment-button').addClass('active');
    $('#recent-post-button').removeClass('active');
    $('#recent-comment-list').show();
    $('#recent-post-list').hide();
})