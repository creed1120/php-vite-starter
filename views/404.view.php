<?php include('includes/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
		<h2 class="text-2xl font-black pb-4">Sorry. Page not found.</h2>
		<a class="text-lg text-blue-600 underline" href="/">&larr; Back to Home</a>
	</div>
</main>

<div id="repos" class="text-base flex gap-10"></div>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>