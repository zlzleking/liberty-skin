<?php get_header(); ?>

<body <?php body_class(); ?>>
	<div class="Liberty">
		<?php get_template_part('template/navbar'); ?>
		<section>
			<div class="content-wrapper">
				<?php get_template_part('template/sidebar'); ?>
				<div class="container-fluid liberty-content">
					<div class="liberty-content-header">
						<div class="alert alert-dismissible fade in alert-info liberty-notice" role="alert" style="margin-left:3rem;margin-right:3rem;">
							<?php if (is_category()) {
								echo (category_description());
							} else {
								bloginfo('description');
							} ?>
						</div>
						<!--
						<div class="content-tools">
							<div class="btn-group" role="group" aria-label="content-tools">
								<button type="button" class="btn btn-secondary tools-btn tools-share">
									<i class="far fa-share-square"></i>
									공유
								</button>
							</div>
						</div>-->

					</div>
					<div class="liberty-content-main liberty-content-loop">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$cat = (get_query_var('cat')) ? get_query_var('cat') : -1;
						$args = array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 5, 'post_status' => 'publish', 'cat' => $cat);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							$post_count = 0;
							while ($the_query->have_posts()) {
								$the_query->the_post();
						?>
								<article class="content-loop">
									<div class="main_posttitle">
										<a href=<?php the_permalink(); ?>>
											<h2><?php the_title(); ?></h2>
										</a>
										<i class="far fa-comments"></i>
										<?php comments_number(); ?>
										<div class="written_time">
											<i class="far fa-clock"></i> <?php the_date('Y년 F j', '', '일', True); ?> <?php the_time('a g:i에 작성됨.') ?>
										</div>
									</div>
									<hr>
									<div style="clear:both"></div>
									<?php
									if ($post_count == 0 && is_home()) : the_content();
									else :
										the_excerpt(); ?>
										<!--
										<div class="liberty-article-more">
											<hr>
											<a href="<?php the_permalink(); ?>" class="liberty-article-morelink">더 보기</a>
										</div> -->
									<?php endif; ?>
								</article>
							<?php
								$post_count++;
								if ($post_count == 10) :
									break;
								endif;
							}; ?>
							<div class="content-loop-page">
								<?php
								if ($paged != 1) { ?>
									<div class="previous-page page-button">
										<?php previous_posts_link(__('이전 페이지', 'textdomain')); ?>
									</div>
								<?php };
								if ($paged != $the_query->max_num_pages) : ?>
									<div class="next-page page-button">
										<?php next_posts_link(__('다음 페이지', 'textdomain'), $the_query->max_num_pages); ?>
									</div>

								<?php
								endif;
								wp_reset_postdata(); ?>
							</div>

						<?php else : ?>
							<article class="content-loop">
								<div class="main_posttitle">
									<h2 style="color:#3399FF">아직 여기에는 글이 없는 것 같습니다....</h2>
								</div>
								<div style="clear:both"></div>
							</article>
							<?php
							if ($paged != 1) { ?>
								<div class="previous-page page-button">
									<?php previous_posts_link(__('이전 페이지', 'textdomain')); ?>
								</div>previous_posts_link(__('이전 페이지', 'textdomain'));
						<?php wp_reset_postdata();
							};
						endif;
						?>
					</div>
					<?php get_footer(); ?>
				</div>
			</div>
		</section>
	</div>
	<?php wp_footer(); ?>
</body>

</html>