<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
</section>

<img src="<?php bloginfo( 'template_url' ); ?>/img/skyline.svg" class="skyline" />
<footer class="footer">
	<div class="column logos">
		<img src="<?php bloginfo( 'template_url' ) ?>/img/logo-footer.svg" />
	</div>
	<div class="column address">
		<?php the_field( 'address', 'option' ); ?>
	</div>
	<div class="column map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.5058109963857!2d-87.6254699!3d41.88197789999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca233c47a1b%3A0xf1457fff4c40686c!2sChicago%20Debates!5e0!3m2!1sen!2sus!4v1740607855015!5m2!1sen!2sus" width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>