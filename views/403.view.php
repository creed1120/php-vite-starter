<?php
include('includes/nav.php');
$partials = new HTML();

?>

<p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<?php require('includes/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
		<h2 class="text-2xl pb-4">Unauthorized. You are not allowed to access the page.</h2>
		<a class="text-lg text-blue-600 underline" href="/">&larr; Back to Home</a>
	</div>
</main>

<div id="repos" class="text-base flex gap-10"></div>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php $partials->addPartials('includes/gitbranch.php'); ?>
<?php $partials->addPartials('includes/footer.php'); ?>