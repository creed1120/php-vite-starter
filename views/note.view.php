<p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<?php include('includes/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a class="inline-block text-xl text-blue-950 underline mb-6" href="/notes">Go Back</a>
        <p class="text-2xl"><?php echo $note['body']; ?></p>
	</div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>