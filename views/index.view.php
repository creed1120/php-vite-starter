<p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<?php require('includes/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl">

		<!-- <//?php echo $post['title']; ?> -->

		<?php foreach( $posts as $post ) : ?>
			<h1><?php echo htmlspecialchars($post['title'] ?? ''); ?></h1>
		<?php endforeach; ?>

	</div>
</main>

<!-- <div id="repos" class="text-base flex gap-10"></div> -->

<script src="/src/scripts/repos.ts" type="module"></script>