 
 <!-- Contact -->
 <section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<?php dynamic_sidebar('footer-address') ?>
							</section>
							
						</div>
					</section>


<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<!-- <ul class="icons">
			<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Untitled</li>
			<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
		</ul> -->
		<?php dynamic_sidebar('footer-1') ?>
	</div>
</footer>

</div>

<?php
 wp_footer();
?>