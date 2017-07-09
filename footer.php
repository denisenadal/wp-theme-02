	<footer>
		<div class="inner-wrap">
			<p class="footer clear">copyright <?php the_time('Y'); $current_user = wp_get_current_user(); echo" ". $current_user->display_name; ?> </p>
		</div>
	</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
	 <svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" style="position:absolute;">
	<filter id="drop-shadow">
		<feGaussianBlur in="SourceAlpha" stdDeviation="1"/>
		<feOffset dx="0" dy="0" result="offsetblur"/>
		<feFlood flood-color="rgba(50,50,50,0.3)"/>
		<feComposite in2="offsetblur" operator="in"/>
		<feMerge>
			<feMergeNode/>
			<feMergeNode in="SourceGraphic"/>
		</feMerge>
	</filter>
</svg>
<script type="text/javascript">
$(document).ready(function(){
	textResizer(".menu-item:last-child a",16,".mobile_label");
	$(window).resize(function(){
	textResizer(".menu-item:last-child a",16,".mobile_label");
	});
});

</script>
<?php wp_footer(); ?>
</body>
</html>
