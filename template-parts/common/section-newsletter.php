<section class="newsletter">
	<div class="inner read-width">
		<form action="<?php echo admin_url( 'admin-ajax.php' ) ?>">
			<input type="hidden" name="action" value="jio_new_member">
			<h2 class="dimitri">Velkommen i klubben</h2>
			<p>Klubmedlemmer får notifikationer om nye blogindlæg og adgang til eksklusive, ikke offentligt tilgængelige artikler.</p>
			<div class="box">
				<input type="email" name="email">
				<label for="email">Din email *</label>
			</div>
			<div class="box">
				<input type="text" name="name">
				<label for="name">Dit navn</label>
			</div>
			<div class="right">
				<a href="#" class="button black submit">Meld ind</a>
			</div>
		</form>
	</div>
</section>
