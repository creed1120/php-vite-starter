<?php
require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp')
?>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center text-ye">
		<?= VITE_NAME; ?>
		<p class="text-lg">Current Git Branch: <strong><?= VITE_BRANCH; ?></strong></p>
	</div>



	<div id="repos" class="text-base flex gap-10"></div>
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
