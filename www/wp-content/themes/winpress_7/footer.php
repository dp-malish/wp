<!-- footer start -->
	<div id="footer">

		<div id="rss"><a href="<?php bloginfo('rss2_url'); ?>">&nbsp;</a></div>

<!-- footernavi start -->
		<div id="task-nav">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">Главная</a></li>		
				<?php wp_list_pages('title_li=&depth=1&exclude='); ?>
			</ul>
		</div>
<!-- footernavi end -->

		<div id="clock">
			<script type="text/javascript">var d = new Date(); document.write(d.getHours()+':'+d.getMinutes());</script>
		</div>
		<div id="credit-icon"></div>
		<div id="credit-box"><a href="http://cubizm.ru/vyazanyj-strit-art/">ВСЁ О ДИЗАЙНЕ И АРХИТЕКТУРЕ: Вязаный стрит арт</a>
		</div>

		<div class="endline"></div>

    </div>
<!-- footer end -->

<?php wp_footer(); ?>

</body>
</html>