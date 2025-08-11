<?php require('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

<main>
	<div class="mx-auto w-full lg:w-10/12 py-4 px-4 lg:px-0 text-2xl">
		<!-- Your content -->
		 <?php foreach( $contactPageArray as $contactPage ) : ?>
			<h3><?php echo $contactPage['pagename']; ?></h3>
		<?php endforeach; ?>
	</div>
</main>

<!-- <script src="/src/scripts/repos.ts" type="module"></script> -->

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>