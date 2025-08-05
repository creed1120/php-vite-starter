<?php include('includes/nav.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a class="inline-block text-xl text-blue-950 underline mb-6" href="/notes">Go Back</a>

        <p class="text-2xl"><?php echo htmlspecialchars($note['body']); ?></p>

        <span class="grid-cols-1 gap-4 lg:inline-flex">
            <a class="btn btn-warning mt-5" href="/note/edit?id=<?php echo $note['id']; ?>">Edit Note</a>
        </span>
    </div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>