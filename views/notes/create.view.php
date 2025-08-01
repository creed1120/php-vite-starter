<?php

include('includes/nav.php'); ?>

<main>
    <div class="sm:w-full md:w-1/2 mx-auto px-4 py-6 sm:px-6 lg:px-8 text-gray-300">
        <form method="POST">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="about" class="block text-sm/6 font-medium text-gray-900">Note Body</label>
                            <div class="mt-2">
                                <textarea id="note-body" name="note-body" rows="6" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-4"><?php echo $_POST['note-body'] ?? '' ?></textarea>

                                <?php if(isset($errors['body'])) : ?>
                                   
                                    <div role="alert" class="alert alert-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span><?php echo $errors['body'] ?></span>
                                    </div>
                                    
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900 hover:text-gray-500">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

        </form>
    </div>
</main>
        
<script src="/src/scripts/repos.ts" type="module"></script>

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>