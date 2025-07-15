<?php
require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$book = "Dark Matter";
$read = true;

?>

<p class="text-sm text-center text-gray-300 absolute top-0 left-0 block p-2 bg-gray-600 w-screen">Current Git Branch: <strong><?= VITE_BRANCH; ?></strong></p>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center">
		<h3 class=" text-indigo-500"><?= VITE_NAME; ?></h3>

		<?php if ($read): ?>
			<p class=" mt-10">You have read <?= htmlspecialchars($book); ?>.</p>
		<?php else: ?>
			<p class="mt-10">You have not read <?= htmlspecialchars($book); ?> yet.</p>
		<?php endif; ?>
		
	</div>

	<!-- <div id="repos" class="text-base flex gap-10"></div> -->
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
