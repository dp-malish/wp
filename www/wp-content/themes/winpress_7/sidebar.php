<!-- sidebar start -->
		<div id="sidebar">
			<ul>
				<li id="about-me">
					<h2>Об авторе</h2>
					<p>Несколько слов об авторе.</p>
				</li>
				<li>
					<h2>Поиск</h2>
					<div id="searchform">
						<?php include(TEMPLATEPATH . '/searchform.php'); ?>
					</div>
				</li>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<li>
					<h2>Категории</h2>
					<ul>
						<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
					</ul>
				</li>
				<li>
					<h2>Архивы</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				<li>
					<h2>Последние записи</h2>
					<ul>
						<?php get_archives('postbypost', 5); ?>
					</ul>
				</li>
				<li>
					<?php get_recent_comments(array('number' => 5)); ?>
				</li>
				<li>
					<h2>Мета</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>


						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>

		</div>
<!-- sidebar end -->