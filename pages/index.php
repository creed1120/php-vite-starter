<?php
require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$book = "Dark Matter";
$read = true;

?>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center">
		<h3 class=" text-indigo-500"><?= VITE_NAME; ?></h3>
		<p class="text-lg">Current Git Branch: <strong><?= VITE_BRANCH; ?></strong></p>

		<?php if ($read): ?>
			<p class=" mt-10">You have read <?= htmlspecialchars($book); ?>.</p>
		<?php else: ?>
			<p class="mt-10">You have not read <?= htmlspecialchars($book); ?> yet.</p>
		<?php endif; ?>
		
	</div>



	<!-- <div id="repos" class="text-base flex gap-10"></div> -->
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
