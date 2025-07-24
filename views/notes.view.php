<p class="text-sm text-center text-gray-300 absolute bottom-0 left-0 block p-2 bg-gray-600 w-screen">
	Current Git Branch: <strong><?= VITE_BRANCH; ?></strong>
</p>

<?php include('includes/nav.php'); ?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl">
		<ul>
            <?php foreach( $notes as $note ) : ?>
                <li>
                    <a class=" text-blue-600 hover:underline" href="/note?id=<?php echo $note['id'] ?>">
                        <?php echo $note['body']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
	</div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>