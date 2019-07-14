<main class="track-page">
	<title><?="$artist - $title"?></title>

	<div class="wrapper">
		<section class="info">
			<div class="cover cover-wrapper">
				<div class="idkbro"></div>
				<img class="cover" src="<?="/img/$cover_art_filename"?>"/>
				<div class="cover darken"></div>
				<div class="cover play-button"></div>
			</div>
			<div class="info-card">
				<p class="title"><?="$artist - $title"?></p>
			</div>
		</section>
		<section class="cards">
			<div class="soundcloud card"></div>
			<div class="youtube card"></div>
			<div class="spotify card"></div>
		</section>
	</div>

	<div class="bg"></div>
	<img class="bg" src="<?="/img/$cover_art_filename"?>"/>
</main>
<script src="track.js"></script>
