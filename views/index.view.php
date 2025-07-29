<!-- <p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><//?= VITE_BRANCH; ?></strong>
</p> -->

<?php require('includes/nav.php'); ?>


	<section class="bg-white lg:grid lg:place-content-center dark:bg-gray-900 text-white">
		<div class="mx-auto w-screen px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
			<div class="mx-auto max-w-prose text-center">
				<!-- <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
					Understand user flow and
					<strong class="text-indigo-600"> increase </strong>
					conversions
				</h1> -->

				<?php foreach( $posts as $post ) : ?>
					<h1 class="text-4xl"><?php echo htmlspecialchars($post['title'] ?? ''); ?></h1>
				<?php endforeach; ?>

				<p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed dark:text-gray-200">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi. Natus, provident
					accusamus impedit minima harum corporis iusto.
				</p>

				<div class="mt-4 flex justify-center gap-4 sm:mt-6">
					<button class="btn btn-outline btn-secondary">Secondary</button>
				</div>
			</div>
		</div>
	</section>

<!-- <div id="repos" class="text-base flex gap-10"></div> -->

<!-- <script src="/src/scripts/repos.ts" type="module"></script> -->