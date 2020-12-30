<footer <?php if (is_single()) { ?>
    class='footer-single'
    <?php}?> >
    <div class="liberty-footer <?php if (is_single()) { ?>liberty-footer-single<?php}?>">
        <?php if (is_single() && (comments_open() || get_comments_number())) { ?>
            <div class="liberty-comment">
                <?php comments_template(); ?>
            </div>
        <?php } ?>
        <a class="footer-icons" href="https://librewiki.net"><img id="designedbylibre" src="/wp-content/themes/Liberty/img/designedbylibre.png"></a>
        <a href="https://blog.zlzleking.tk/?feed=rss2" id="rss" class="footer-icons">
            <div class="footer-icon-text">
                <i class="fas fa-rss-square"></i> RSS 2.0
            </div>
        </a>
        <span style="margin-left:1rem">
            이 블로그는 <a href="https://zlzleking.tk" style="color:#3399FF">Zlzleking</a>의 개인 블로그입니다.
        </span>
        <span style="margin-left:1rem;">
        <a href="https://blog.zlzleking.tk/?page_id=105">오픈 소스 라이선스</a></span>
    </div>
</footer>