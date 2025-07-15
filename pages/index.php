<?php
require('system/main.php');

$layoutTemplate = new HTML('Modern PHP + Vite sethp');

$book = "Dark Matter";
$read = true;

?>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center">
		<?= VITE_NAME; ?>

		<?php if ($read): ?>
			<p>You have read <?= htmlspecialchars($book); ?>.</p>
		<?php else: ?>
			<p>You have not read <?= htmlspecialchars($book); ?> yet.</p>
		<?php endif; ?>
		
	</div>



	<!-- <div id="repos" class="text-base flex gap-10"></div> -->
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
