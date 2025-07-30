<?php
include('includes/nav.php');
$partials = new HTML();

?>

<main>
	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl text-white">
		<ul class="list bg-base-100 rounded-box shadow-md">
            <?php foreach( $notes as $note ) : ?>
                <li class="list-row my-4">
                    <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/></div>
                    <div>
                    <div>Note Title or referring data...</div>
                    <a class="link link-primary" href="/note?id=<?php echo $note['id'] ?>" class="text-xs uppercase font-semibold opacity-60"><?php echo htmlspecialchars($note['body']) ?></a>
                    </div>
                    <button class="btn btn-square btn-ghost">
                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
                    </button>
                    <button class="btn btn-square btn-ghost">
                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></g></svg>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/notes/create" class="btn btn-primary mt-4">Create Note</a>
	</div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php $partials->addPartials('includes/gitbranch.php'); ?>
<?php $partials->addPartials('includes/footer.php'); ?>