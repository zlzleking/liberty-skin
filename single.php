<?php get_header(); ?>

<body <?php body_class(); ?>>
    <div class="Liberty">
        <?php get_template_part('template/navbar'); ?>
        <section>
            <div class="content-wrapper">
                <?php get_template_part('template/sidebar'); ?>
                <div class="container-fluid liberty-content">
                    <div class="liberty-content-header liberty-content-header-single">
                        <div class="alert alert-dismissible fade in alert-info liberty-notice" role="alert">
                            <?php bloginfo('description'); ?>
                        </div>
                        <div class="content-tools">
                            <div class="btn-group" role="group" aria-label="content-tools">
                                <button type="button" class="btn btn-secondary tools-btn tools-share">
                                    <i class="fas fa-share-alt"></i> 공유
                                </button>
                            </div>
                        </div>
                        <div class="title">
                            <a href=<?php the_permalink(); ?>>
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="liberty-content-main liberty-content-main-single">
                        <div class="reading_time">
                            <span class="reading-time-number"><i class="fas fa-book-reader"></i>  읽는데 <?php echo do_shortcode('[rt_reading_time]'); ?>분 정도 걸려요</span>
                        </div>
                        <div class="written_time">
                            <i class="far fa-clock"></i> <?php the_date('Y년 F j일'); ?> <?php the_time('a g:i에 작성됨.') ?>
                        </div>
                        <div id="catlinks" class="catlinks">
                            <span id="catlinks-header">카테고리 : </span>
                            <span id="catlinks-cat">
                                <?php echo get_the_category_list(' | '); ?>
                            </span>
                        </div>
                        <article class="content">
                            <?php the_content(); ?>
                        </article>
                    </div>
                    <?php get_footer(); ?>
                </div>
            </div>
        </section>
    </div>
    <?php wp_footer(); ?>
    <script>
        var page_title = '<?php the_title(); ?>';
        var blog_name = '<?php bloginfo('name'); ?>';
        var page_link = '<?php the_permalink(); ?>';
    </script>
</body>

</html>