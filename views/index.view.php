<?php

$partials = new HTML();
require('includes/nav.php'); ?>

	<section class="bg-white lg:grid dark:bg-gray-900 text-white">
		<div class="mx-auto w-screen px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
			<div class="mx-auto w-10/12">
				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">

					<?php foreach( $posts as $post ) : ?>
						 <div class="h-32 p-6 rounded bg-gray-600">
							<h3 class="text-lg font-semibold text-gray-900 dark:text-white">
								<?php echo htmlspecialchars($post['title']); ?>
							</h3>
							<a href="/post?id=<?php echo $post['id']; ?>" class="text-blue-500 hover:underline mt-4 inline-block">
								Read more
							</a>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<div id="callyDiv"></div>
	</section>

<script src="/src/scripts/callycalender.ts" type="module"></script>

<?php $partials->addPartials('includes/gitbranch.php'); ?>
<?php $partials->addPartials('includes/footer.php'); ?>