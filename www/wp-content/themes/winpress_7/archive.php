<?php get_header(); ?>

<!-- container start -->
	<div id="container">

<!-- content start -->
		<div id="content">

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

					<div class="post-top"></div>
					<div class="post">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p class="postmetadata">Категория: <?php the_category(', ') ?> | <?php the_time('j F Y') ?></p>
						<div class="entry">
							<?php the_excerpt(); ?>
							<div class="endline"></div>

							<?php the_tags('<p class="tags"><strong>Метки:</strong> ', ', ', '</p>'); ?>
							<p class="commentline">
								<a href="<?php comments_link(); ?>">Комментарии (<?php comments_number('0','1','%'); ?>)</a>
							</p>
						</div>
					</div>
					<div class="post-bottom"></div>
			    <?php endwhile; ?>

				<?php include('pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				<div class="endline"></div>

			<?php else : ?>
				<div class="notfound"><p>Ничего не нашлось!</p><p>Воспользуйтесь навигацией или поиском, чтобы найти необходимую вам информацию.</p></div>
				<div class="endline"></div>
			<?php endif; ?>
		</div>
<!-- content end -->

		<?php get_sidebar(); ?>

		<div class="endline"></div>

	</div>
<!-- container end -->

</div>
<!-- wrapper end -->

<?php get_footer(); ?>