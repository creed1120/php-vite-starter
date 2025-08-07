<?php require('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

	<section class="lg:grid text-white">
		<div class="mx-auto w-screen px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
			<div class="mx-auto w-10/12">
				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">

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
			</div>
		</div>
	</section>

	<section>
		<!-- <div id="repos"></div> -->
		<!-- <div id="callyDiv"></div> -->
		<!-- <div id="testalert"></div> -->
	</section>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>