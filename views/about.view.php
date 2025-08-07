<?php require('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl">
		<!-- Your content -->
		 <?php foreach( $aboutPageArray as $aboutPage ) : ?>
			<h3><?php echo $aboutPage['pagename']; ?></h3>
		<?php endforeach; ?>
	</div>
</main>

<!-- <script src="/src/scripts/repos.ts" type="module"></script> -->

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>