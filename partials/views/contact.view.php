<p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<?php include('partials/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl">
		<!-- Your content -->
		 <?php foreach( $contactPageArray as $contactPage ) : ?>
			<h3><?php echo $contactPage['pagename']; ?></h3>
		<?php endforeach; ?>
	</div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>