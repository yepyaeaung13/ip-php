<?php include base_path("views/partials/head.php") ?>


<?php include base_path("views/partials/adminnav.php") ?>

<section class="relative w-full h-full md:p-5 px-1 py-5 flex flex-col items-center gap-5">
    <h1 class="text-xl font-serif">My Accounts</h1>
    <ul class="w-full flex md:flex-row md:justify-center flex-col md:gap-10 gap-2 md:border-b border-third rounded-md md:p-5 p-1 text-white">
        <li class="bg-third px-3 py-1 rounded-md">Name : <?= $_SESSION['user']['name'] ?></li>
        <li class="bg-third px-3 py-1 rounded-md">Username : <?= $_SESSION['user']['username'] ?></li>
        <li class="bg-third px-3 py-1 rounded-md">Role : <?= $_SESSION['user']['role'] ?></li>
        <li class="bg-third px-3 py-1 rounded-md">Created_at : <?= $_SESSION['user']['created_at'] ?></li>
    </ul>

    <div id="newAccountFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="relative md:w-96 w-80 bg-white border rounded-md shadow-md">
            <!-- create account form close Btn  -->
            <button id="newAccountFormClose" class="absolute top-1 right-1 hover:text-red-500 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pointer-events-none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- create account form  -->
            <form action="/accounts/create" method="post" id="newAccountForm" class="p-5 flex flex-col justify-center items-center gap-5">
                <h1 class="text-center font-bold font-serif text-lg">Create Account</h1>
                <div class="w-full flex flex-col gap-3">
                    <div class="flex flex-col gap-1">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="enter your name" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="enter your username" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="Role">Role</label>
                        <select name="role" id="role">
                            <option value="user">user</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="enter your password" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                    </div>
                    <div class="flex justify-center">
                        <input type="submit" name="Create" value="Create" class="cursor-pointer text-white bg-primary w-1/2 py-1 rounded-md">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if ($_SESSION['user']['role'] === "admin") : ?>
        <div class="lg:px-16 md:px-5 w-full flex flex-col">
            <div class="flex justify-end">
                <button id="newAccountFormBtn" class="hover:bg-white hover:border-primary hover:text-primary border duration-300 bg-third px-2 py-1 rounded-md text-white">New Account</button>
            </div>

            <div class="overflow-x-scroll text-nowrap">
                <table class="table-auto border-collapse w-full">
                    <thead>
                        <tr class="bg-third text-white">
                            <td class="border p-1">Id</td>
                            <td class="border p-1">Name</td>
                            <td class="border p-1">Username</td>
                            <td class="border p-1">Password</td>
                            <td class="border p-1">Role</td>
                            <td class="border p-1">Created_at</td>
                            <td class="border p-1">Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td class="border p-1"><?= $user['id'] ?></td>
                                <td class="border p-1"><?= $user['name'] ?></td>
                                <td class="border p-1"><?= $user['username'] ?></td>
                                <td class="border p-1"><?= $user['password'] ?></td>
                                <td class="border p-1"><?= $user['role'] ?></td>
                                <td class="border p-1"><?= $user['created_at'] ?></td>
                                <td class="border p-1">
                                    <div class="flex justify-center">
                                        <?php if ($_SESSION['user']['username'] !== $user['username']) : ?>
                                            <a href="/accounts/delete?id=<?= $user['id'] ?>" class="text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 pointer-events-none">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>

</section>
</div>


<?php include base_path("views/partials/adminfooter.php") ?>