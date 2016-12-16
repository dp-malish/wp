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
							<?php the_content(); ?>
							<div class="endline"></div>
							<?php wp_link_pages(array('before' => '<p style="margin: 0px;"><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
					</div>
					<div class="post-bottom"></div>
			    <?php endwhile; ?>

			<?php else : ?>
				<div class="notfound"><p>Страница не найдена!</p><p>Воспользуйтесь навигацией или поиском, чтобы найти необходимую вам информацию.</p></div>
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