<?php
include('includes/nav.php');
$partials = new HTML();

// $thePostReq = $_POST;
// if (isset($thePostReq['body'])) {
//     $noteBody = $thePostReq['body'];
//     // Here you would typically save the note to a database or perform some action
//     // For demonstration, we'll just echo it back
//     echo "<div class='alert alert-success'>Note created successfully: " . htmlspecialchars($noteBody) . "</div>";
// }
?>

<main>
    <div class="sm:w-full md:w-1/2 mx-auto px-4 py-6 sm:px-6 lg:px-8 text-gray-300">
        <form method="POST">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="about" class="block text-sm/6 font-medium text-gray-900">Note Body</label>
                            <div class="mt-2">
                                <textarea id="note-body" name="note-body" rows="6" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
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

<?php $partials->addPartials('includes/gitbranch.php'); ?>
<?php $partials->addPartials('includes/footer.php'); ?>