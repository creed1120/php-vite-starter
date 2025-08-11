<?php require('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

	<section class="text-white m-auto w-full py-10 px-4 lg:px-0 lg:w-10/12">
		<?php if (isset($_SESSION['user'])) : ?>
			<h3 class=" text-gray-500 text-lg lg:text-2xl">Welcome, <?php echo $_SESSION['user']['email']; ?></h3>
		<?php endif; ?>

				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 pt-6">

					<?php foreach( $posts as $post ) : ?>
						<article class="rounded-[10px] border border-gray-200 bg-white px-4 pt-6 pb-4">
						<time datetime="2022-10-10" class="block text-xs text-gray-500"> <?php echo htmlspecialchars($post['created_at']); ?></time>

						<a href="#">
							<h3 class="mt-0.5 text-lg font-medium text-gray-900">
							<?php echo htmlspecialchars($post['title']); ?>
							</h3>
						</a>

						<div class="mt-4 flex flex-wrap gap-1">
							<span
							class="rounded-full bg-purple-100 px-2.5 py-0.5 text-xs whitespace-nowrap text-purple-600"
							>
							Snippet
							</span>

							<span
							class="rounded-full bg-purple-100 px-2.5 py-0.5 text-xs whitespace-nowrap text-purple-600"
							>
							JavaScript
							</span>
						</div>
						</article>
					<?php endforeach; ?>

				</div>

	</section>

	<section>
		<!-- <div id="repos"></div> -->
		<!-- <div id="callyDiv"></div> -->
		<!-- <div id="testalert"></div> -->
	</section>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>