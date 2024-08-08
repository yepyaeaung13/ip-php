<?php include base_path("views/partials/head.php") ?>

<?php include base_path("views/partials/adminnav.php") ?>

<section class="relative w-full h-full">
    <div class="w-full mx-auto ">
        <div class="flex justify-between 2xl:px-16 md:px-5 px-1 pt-2">
            <h1>Projects : <?= count($projects) ?></h1>
            <button id="createFormBtn" class="hover:bg-white hover:border-primary hover:text-primary border duration-300 bg-third px-2 py-1 rounded-md text-white">New Project</button>
        </div>

        <!-- create project form  -->
        <div id="createFormContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
            <div class="relative md:w-1/2 w-80 overflow-y-scroll bg-white border rounded-md shadow-md">
                <!-- create form close Btn  -->
                <button id="createFormClose" class="absolute top-1 right-1 hover:text-red-500 duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pointer-events-none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- create projects form  -->
                <form action="/project/create" method="post" id="createForm" enctype="multipart/form-data" class="p-5 flex flex-col justify-center items-center gap-5">
                    <h1 class="text-center font-bold font-serif text-lg">Create Projects</h1>
                    <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-3">
                        <div class="flex flex-col gap-1">
                            <label for="project-date">Project Date</label>
                            <input type="month" name="project_date" id="project-date" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="customer">Customer</label>
                            <input type="text" name="customer" id="customer" placeholder="enter your customer" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="location">location</label>
                            <input type="text" name="location" id="location" placeholder="enter your location" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="service">Service</label>
                            <input type="text" name="service" id="service" placeholder="enter your service" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="categories">Categories</label>
                            <select name="categories" id="categories" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                                <option class="" value="">select a project</option>
                                <option class="" value="cctv">CCTV Systems</option>
                                <option class="" value="network">WIFI & Network</option>
                                <option class="" value="solar">Solar Systems</option>
                                <option class="" value="pabx">PABX Telephone Systems</option>
                                <option class="" value="pa">PA Sound Systems</option>
                                <option class="" value="card-access">Door Card Access & Fingerprint Systems</option>
                                <option class="" value="gps">Vehicle GPS Systems</option>
                                <option class="" value="fire-alarm">Fire alarm Systems</option>
                                <option class="" value="matv">MATV, CATV Systems</option>
                                <option class="" value="tender">Tender Projects</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="photo">Photos</label>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo1" id="photo1" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo2" id="photo" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="photo3" id="photo" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="md:col-span-2 flex justify-center">
                            <input type="submit" name="upload" value="Upload" class="cursor-pointer text-white bg-primary w-1/2 py-1 rounded-md">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- alert box  -->
        <?php if (isset($_GET['photoErr'])) : ?>
            <div id="alertBoxContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
                <div class="relative w-80 h-28 overflow-y-scroll bg-white border rounded-md shadow-md">
                    <!-- alert box close Btn  -->
                    <button id="alertBoxClose" class="absolute top-1 right-1 hover:text-red-500 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pointer-events-none">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- create projects form  -->
                    <div class="h-full flex justify-center items-center">
                        <h1 class="text-red-500 font-medium">!upload photo error</h1>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <!-- update form container  -->
        <div id="updateContainer" class="absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50 hidden justify-center items-center">
            <div class="relative md:w-1/2 w-80 bg-white border rounded-md shadow-md">
                <!-- update form close Btn  -->
                <button id="updateClose" class="absolute top-1 right-1 hover:text-red-500 duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pointer-events-none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                <!-- update form  -->
                <form action="/project/update" method="post" id="updateForm" enctype="multipart/form-data" class="p-5 flex flex-col justify-center items-center gap-5">

                    <h1 class="text-center font-bold font-serif text-lg">Update Projects</h1>
                    <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-3">
                        <div class="flex flex-col gap-1">
                            <label for="id">Project Id</label>
                            <input type="text" name="id" id="id" placeholder="enter your title" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600 pointer-events-none" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="project-date">Project Date</label>
                            <input type="month" name="project_date" id="project-date" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="customer">Customer</label>
                            <input type="text" name="customer" id="customer" placeholder="enter your customer" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="location">location</label>
                            <input type="text" name="location" id="location" placeholder="enter your location" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="service">Service</label>
                            <input type="text" name="service" id="service" placeholder="enter your service" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="categories">Categories</label>
                            <select name="categories" id="categories" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                                <option class="" value="">select a project</option>
                                <option class="" value="cctv">CCTV Systems</option>
                                <option class="" value="network">WIFI & Network</option>
                                <option class="" value="solar">Solar Systems</option>
                                <option class="" value="pabx">PABX Telephone Systems</option>
                                <option class="" value="pa">PA Sound Systems</option>
                                <option class="" value="card-access">Door Card Access & Fingerprint Systems</option>
                                <option class="" value="gps">Vehicle GPS Systems</option>
                                <option class="" value="fire-alarm">Fire alarm Systems</option>
                                <option class="" value="matv">MATV, CATV Systems</option>
                                <option class="" value="tender">Tender Projects</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="update-photo">Photos</label>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="update_photo1" id="update-photo1" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600">
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="update_photo2" id="update-photo2" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600">
                            <input type="file" accept="image/jpeg, image/png, image/jpg" name="update_photo3" id="update-photo3" class="border border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600">
                        </div>
                        <div class="flex flex-col gap-1">
                            <input type="text" value="" name="photo1" id="photo1" class="border hidden border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                            <input type="text" value="" name="photo2" id="photo2" class="border hidden border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                            <input type="text" value="" name="photo3" id="photo3" class="border hidden border-fifth rounded-md px-2 py-1 outline-none focus:border-blue-600" required>
                        </div>
                        <div class="flex justify-center">
                            <input type="submit" value="Update" name="update" class="cursor-pointer text-white bg-primary w-1/2 py-1 rounded-md">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="h-[80vh] overflow-y-scroll overflow-x-scroll border rounded-md 2xl:mx-16 md:mx-5 mx-1">
            <table id="table" class="w-full table-auto text-nowrap">
                <!-- table head  -->
                <tr class="sticky top-0 z-10 border bg-third text-white">
                    <td class="w-16 text-center border border-gray-300 p-1">Id</td>
                    <td class="w-56 text-center border border-gray-300 p-1">Project Date</td>
                    <td class="w-56 text-center border border-gray-300 p-1">Customer</td>
                    <td class="w-56 text-center border border-gray-300 p-1">Location</td>
                    <td class="w-56 text-center border border-gray-300 p-1">Service</td>
                    <td class="w-56 text-center border border-gray-300 p-1">Categories</td>
                    <td class="w-56 text-center hidden border border-gray-300 p-1">Photo1</td>
                    <td class="w-56 text-center hidden border border-gray-300 p-1">Photo2</td>
                    <td class="w-56 text-center hidden border border-gray-300 p-1">Photo3</td>
                    <td class="w-36 text-center border border-gray-300 p-1">Created_at</td>
                    <td class="w-36 text-center border border-gray-300 p-1">Updated_at</td>
                    <td class="w-36 text-center border border-gray-300 p-1">Actions</td>
                </tr>
                <tbody class="">
                    <?php foreach ($projects as $project) : ?>
                        <tr class="project-table-row">
                            <td class="project-id border border-gray-300 p-2"><?= $project['id'] ?></td>
                            <td class="project-date border border-gray-300 p-2"> <?= $project['date'] ?></td>
                            <td class="project-customer border border-gray-300 p-2"> <?= $project['customer'] ?></td>
                            <td class="project-location border border-gray-300 p-2"><?= $project['location'] ?></td>
                            <td class="project-service border border-gray-300 p-2"><?= $project['service'] ?></td>
                            <td class="project-categories border border-gray-300 p-2"><?= $project['categories'] ?></td>
                            <td class="project-photo1 hidden border border-gray-300 p-2"><?= $project['photo1'] ?></td>
                            <td class="project-photo2 hidden border border-gray-300 p-2"><?= $project['photo2'] ?></td>
                            <td class="project-photo3 hidden border border-gray-300 p-2"><?= $project['photo3'] ?></td>
                            <td class="border border-gray-300 p-2 text-xs"><?= $project['created_at'] ?></td>
                            <td class="border border-gray-300 p-2 text-xs"><?= $project['update_at'] ?></td>
                            <td class="border border-gray-300 p-2 text-center">
                                <div class="flex justify-evenly md:gap-2 gap-5">
                                    <button id="updateBtn" class="update-btn text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </button>
                                    <a href="/project/delete?id=<?= $project['id'] ?>&name1=<?= $project['photo1'] ?>&name2=<?= $project['photo2'] ?>&name3=<?= $project['photo3'] ?>" class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php include base_path("views/partials/adminfooter.php") ?>