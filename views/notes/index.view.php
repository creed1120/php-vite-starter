<?php include('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl text-white">
        <?php foreach( $notes as $note ) : ?>
            <article
            class="rounded-lg border border-gray-100 bg-white mb-4 p-4 shadow-xs transition hover:shadow-lg sm:p-6"
            >
            <!-- <a href="#">
                <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                Title of Note could go here..
                </h3>
            </a> -->

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                <?php echo htmlspecialchars($note['body']); ?>
            </p>

            <a href="/note?id=<?php echo htmlspecialchars($note['id']); ?>" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                View Note

                <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                &rarr;
                </span>
            </a>
            </article>
        <?php endforeach; ?>

        <a href="/notes/create" type="submit" class="mt-6 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 inline-block w-full lg:w-56 text-center">Create Note</a>
	</div>
</main>

<!-- <script src="/src/scripts/repos.ts" type="module"></script> -->
<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>