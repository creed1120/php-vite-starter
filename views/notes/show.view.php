<?php include('includes/nav.php'); ?>
<?php include('includes/header.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a class="inline-block text-xl text-blue-950 underline mb-6" href="/notes">Go Back</a>

        <p class="text-2xl"><?php echo htmlspecialchars($note['body']); ?></p>

        <span class="grid-cols-1 gap-4 lg:inline-flex">
            <a href="/note/edit?id=<?php echo $note['id']; ?>" type="submit" 
            class="mt-6 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 inline-block w-full lg:w-56 text-center">
            Edit Note
            </a>
        </span>
    </div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>