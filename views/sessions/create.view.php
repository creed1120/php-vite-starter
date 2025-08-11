<?php 
// Login View
include('includes/nav.php'); ?>

<main>
    <div class="sm:w-full md:w-1/2 mx-auto px-4 py-6 sm:px-6 lg:px-8">

        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <!-- <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" /> -->
                <h2 class="text-center text-2xl/9 font-bold tracking-tight">Login to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="/sessions" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm/6 font-medium">Email address</label>
                        <div class="mt-1">
                        <input id="email" type="email" name="email" class="block w-full rounded-md bg-white px-3 py-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium">Password</label>
                        </div>
                        <div class="mt-1">
                        <input id="password" type="password" name="password" class="block w-full rounded-md bg-white px-3 py-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
                    </div>

                    <?php if(isset($errors['email']) || isset($errors['password'])) : ?>
                                
                        <div role="alert" class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><?php echo $errors['email'] ?? $errors['password'] ?></span>
                        </div>
                        
                    <?php endif; ?>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                Not yet a member?
                <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Register Here</a>
                </p>
            </div>
        </div>

    </div>
</main>
        
<!-- <script src="/src/scripts/repos.ts" type="module"></script> -->

<?php addPartials('includes/gitbranch.php'); ?>
<?php addPartials('includes/footer.php'); ?>