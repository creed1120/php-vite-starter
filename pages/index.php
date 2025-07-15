<?php
require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp')
?>

<p class="text-sm text-center text-gray-300 absolute top-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center text-ye">
		<?= VITE_NAME; ?>

		<div>+</div>

		<img src="%BASE%/logo.svg" class="w-20" />
	</div>



	<!-- <div id="repos" class="text-base flex gap-10"></div> -->
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
