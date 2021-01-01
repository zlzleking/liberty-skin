<aside>
	<div class="liberty-sidebar">
		<div class="recent-post-wrapper">
			<div class="recent-post">
				<div class="recent-post-header">
					<ul class="nav nav-tabs">
						<li class="nav-item" id="recent-post">
							<a class="nav-link active" href="javascript:" id="recent-post-button">
								<strong>
									최근 글
								</strong>
							</a>
						</li>
						<li class="nav-item" id="recent-comment">
							<a class="nav-link" href="javascript:" id="recent-comment-button">
								<strong>
									최근 댓글
								</strong>
							</a>
						</li>
					</ul>
				</div>
				<div class="recent-post-content">
					<ul class="recent-post-list" id="recent-post-list">
						<?php
						$args = array('post_type' => 'post', 'posts_per_page' => 10, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC', 'ignore_sticky_posts' => True);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							$post_count = 0;
							while ($the_query->have_posts()) {
								$the_query->the_post();
						?>
								<li class="recent-item">
									<a href="<?php the_permalink(); ?>" class="recent-link">
										<span class="recent-time">[<?php echo get_the_modified_time('F j일'); ?>]</span> <span class="recent-title"><?php the_title(); ?></span>
									</a>
								</li>
						<?php };
							wp_reset_postdata();
						endif;
						?>
					</ul>
					<ul class="recent-post-list" id="recent-comment-list">
						<?php
						$args = array('type' => 'comment', 'number' => 5, 'status' => 'approve', 'orderby' => 'comment_date', 'order' => 'DESC');
						$comments_query = new WP_Comment_Query($args);
						$comments = $comments_query->comments;
						if ($comments) {
							foreach ($comments as $comment) { ?>
								<li class="recent-item">
									<a href="<?php echo (get_permalink($comment->comment_post_ID)); ?>" class="recent-link">
										<span class="recernt-comment-author">[<?php echo ($comment->comment_author); ?>님의 댓글]</span><br> <span class="recent-comment-content"><?php echo (mb_substr($comment->comment_content, 0, 30, 'utf-8')); ?></span>
									</a>
								</li>
							<?php
							}
						} else { ?>
							<li class="recent-item">
								<span class="recent-title">아직은 아무 댓글이 없습니다.</span>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="recent-post-footer">
				</div>
			</div>

		</div>
		<div class="twitter-widget" style="margin-top:2rem;">
			<a class="twitter-timeline" data-lang="ko" data-height="400" data-dnt="true" href="https://twitter.com/zlzleking?ref_src=twsrc%5Etfw"></a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
</aside>