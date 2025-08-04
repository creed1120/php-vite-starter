<?php include('includes/nav.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a class="inline-block text-xl text-blue-950 underline mb-6" href="/notes">Go Back</a>

        <p class="text-2xl"><?php echo htmlspecialchars($note['body']); ?></p>

        <form class="mt-5" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?php echo $note['id'] ?? '' ?>">
            <button class="btn btn-soft btn-error" type="submit">Delete Note</button>
        </form>
    </div>
</main>

<script src="/src/scripts/repos.ts" type="module"></script>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>