<?php
/*
*	Saltbox Footer
*/
?>
		</div><!-- .site-main-content -->

		<footer class="site-footer">
			<div class="row-primary">
				<div class="inner">
					<div class="pad">
						<div class="col-1-3-tb">
							<img src="footer-logo.png" alt="Footer logo">
							<img src="footer-logo.png" alt="Footer logo">
							<img src="footer-logo.png" alt="Footer logo">

							<h5>CONTACT</h5>
							<p>Founder: Brian Fruits</p>
							<p>Email: <a class="mail" href="mailto:info@saltboxtheatre.org">info@Saltboxtheatre.org</a></p>
						</div>
						<div class="col-1-3-tb">
						<?php if(has_nav_menu('footer')): ?>
							<div class="nav-footer">
								<?php 
									wp_nav_menu(array(
										'theme_location' => 'footer',
										'menu_id'        => 'nav-footer',
									)); 
								?>
							</div>
						<?php endif; ?>
						</div>
						<div class="col-1-3-tb">
							<img src="footer-calendar.jpg" class="footer-calendar">
						</div>
					</div>
				</div>
			</div>

			<div class="row-secondary">
				<div class="inner">
					<div class="pad">
						<div class="col-1-2-tb">
							<h6>Copyright &#169; 2018 Saltbox Theatre Theatre Collective. All rights reserved.</h6>
						</div>
						<div class="col-1-2-tb">
							<img src="saltbox-theatre-collective-logo-footer.png" alt="Saltbox Theatre Collective">
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div><!-- .site-wrapper -->
</div><!-- .site-container -->

<?php wp_footer(); ?>

</body>
</html>
