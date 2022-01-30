<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>


<!-- Footer -->
<section id="footer" class="wrapper">
	<div class="inner">
		<div class="split">
			<div class="content">
				<header>
					<h2>このサイトについて</h2>
				</header>
				<?php if (is_active_sidebar('sidebar-site-summary')): ?>
					<?php dynamic_sidebar('sidebar-site-summary'); ?>
				<?php endif;?>

				<?php global $post; ?>

				<?php if ($post->post_name != 'profile'): ?>
					<ul class="actions">
						<li>
							<a href="<?php echo get_permalink( get_page_by_path( 'profile' ) ) ?>" 
								class="button next">もっと読む</a>
						</li>
					</ul>
				<?php endif; ?>
			</div>
			<ul class="contact-icons">
				<li><a href="#" class="icon brands alt fa-twitter"><span class="label">twitter.com/untitled</span></a></li>
				<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">facebook.com/untitled</span></a></li>
				<li><a href="#" class="icon brands alt fa-instagram"><span class="label">instagram.com/untitled</span></a></li>
				<li><a href="#" class="icon solid alt fa-envelope"><span class="label">contact@untitled.tld</span></a></li>
			</ul>
		</div>
	</div>
</section>


<!-- Copyright -->
<section class="wrapper style2 copyright">
	<div class="inner">
		Copyright &copy; 2004 Sei Senkoji
	</div>
</section>

</div><!-- .page-wrapper -->

<?php wp_footer(); ?>
</body>
</html>