<aside>
	<div class="liberty-sidebar">
		<div class="live-recent-wrapper">
			<div class="live-recent">
				<div class="live-recent-header">
					<ul class="nav nav-tabs">
						<li class="nav-item" style="width:100%" id="resent-post">
							<a class="nav-link">
								<strong>
									최근 글
								</strong>
							</a>
						</li>
					</ul>
				</div>
				<div class="live-recent-content">
					<ul class="live-recent-list" id="live-recent-list">
						<?php
						$args = array('post_type' => 'post', 'posts_per_page' => 10, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC', 'ignore_sticky_posts' => True);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							$post_count = 0;
							while ($the_query->have_posts()) {
								$the_query->the_post();
						?>
								<li class="recent-item">
									<a href="<?php the_permalink(); ?>" class="resent-link">
										<span class="resent-time">[<?php echo get_the_modified_time('F j일'); ?>]</span> <span class="resent-title"><?php the_title(); ?></span>
									</a>
								</li>
						<?php };
							wp_reset_postdata();
						endif;
						?>
					</ul>
				</div>
				<div class="live-recent-footer">
				</div>
			</div>

		</div>
		<div class="twitter-widget" style="margin-top:2rem;">
			<a class="twitter-timeline" data-lang="ko" data-height="400" data-dnt="true" href="https://twitter.com/zlzleking?ref_src=twsrc%5Etfw"></a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
</aside>