<?php include "partials/head.php" ?>

<!-- scroll button  -->
<?php include "partials/button.php" ?>

<header class="">
    <?php include "partials/nav.php" ?>
</header>

<section class="">
    <div class="bg-third">
        <div class="w-full mx-auto text-white grid grid-cols-1 md:gap-2 gap-5 2xl:px-28 md:p-5 py-5">
            <div class="flex justify-center items-center">
                <h1 class="text-2xl font-serif font-bold">Our Projects</h1>
            </div>

            <div class="lg::px-10 md:px-5 flex md:flex-nowrap flex-wrap-reverse gap-5 lg:justify-between justify-center items-center">

                <!-- categories  -->
                <ul class="font-serif text-fifth text-nowrap flex flex-wrap gap-1 py-1">
                    <?php foreach ($categories as $category) : ?>
                        <li class="<?= $title == $category['value'] ? "bg-fourth text-white" : "" ?> cursor-pointer hover:bg-fourth hover:text-white duration-300 px-2 py-1 rounded-md"><a href="/project?title=<?= $category['value'] ?>"><?= $category['name'] ?></a></li>
                    <?php endforeach ?>
                </ul>

                <!-- search box  -->
                <form action="" method="get" class="flex gap-1 justify-center">
                    <input type="search" name="search" id="search" class="bg-third px-2 py-1 rounded-full border w-80 outline-none " placeholder="search by customers">
                </form>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto md:p-5 py-5 grid grid-cols-6 md:gap-1 gap-3">

        <!-- projects  -->
        <div class="2xl:px-40 lg:px-10 md:5 px-1 md:col-span-6 col-span-6 grid grid-cols-1 gap-2">
            <!-- project count  -->
            <!-- <div class="flex justify-end">
                <span class="text-fourth">Projects : 15</span>
            </div> -->

            <!-- card  -->
            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5 gap-2">
                <div class="<?= $total_page == 0 ? "flex" : "hidden" ?> justify-center items-center text-2xl col-span-3 h-48">
                    <p> No Projects!</p>
                </div>
                <?php foreach ($projects as $project) : ?>
                    <div class="swiper-container overflow-hidden shadow-md flex flex-col gap-2 p-2 border rounded-md hover:-translate-y-2 duration-300">
                        <div class="w-full swiper-wrapper">
                            <div class="w-full swiper-slide">
                                <img loading="lazy" src="<?= $project['photo1'] ?>" alt="" class=" w-full h-80 rounded-md object-center object-cover border duration-200">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?= $project['photo2'] ?>" alt="" class=" w-full h-80 rounded-md object-center object-cover border duration-200">
                            </div>
                            <div class="swiper-slide ">
                                <img loading="lazy" src="<?= $project['photo3'] ?>" alt="" class="w-full h-80 rounded-md object-center object-cover border duration-200">
                            </div>
                        </div>

                        <p class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                            <span class=""><?= $project['service'] ?></span>
                        </p>
                        <div class="flex gap-2">
                            <span class="px-2 text-xs <?= isset($_SESSION['user']) ? "block" : "hidden" ?>">Project Id - <?= $project['id'] ?></span>
                            <input type="month" value="<?= $project['date'] ?>" class="px-2 text-xs bg-white" disabled>
                        </div>
                        <div class="flex flex-wrap gap-10">
                            <h1 class="font-bold flex gap-2 items-center">
                                <span class="block w-2 h-2 bg-gray-500 p-1"></span>
                                <span><?= $project['customer'] ?></span>
                            </h1>
                            <p class="flex gap-2 items-center">
                                <span class="block w-2 h-2 bg-gray-500 p-1"></span>
                                <span>
                                    <?= $project['location'] ?>
                                </span>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

            <!-- page button  -->
            <?php if (!isset($_GET['search'])) : ?>
                <div>
                    <div id="pagination-parent" class="mt-5 font-medium flex gap-5 justify-center">

                        <!-- prev button  -->
                        <button id="prev-btn" class="border border-primary px-2 rounded-md"><a class=" <?= $page == 1 ? "pointer-events-none text-fifth" : "" ?>" href="/project?title=<?= $title ?>&page=<?= $page - 1 ?>">prev</a></button>

                        <ul class="flex gap-1">
                            <!-- start page  -->
                            <li class="px-2 rounded-full <?= $page >= 5  ? "block" : "hidden" ?>"><a href="/projects?title=<?= $title ?>&page=1">1</a></li>

                            <!-- ... page  -->
                            <li class="px-2 rounded-full <?= $page >= 5  ? "block" : "hidden" ?>">...</li>

                            <!-- calculate pagination number per display -->
                            <?php $paginationNumber = $total_page < 6 ? $total_page : $page + 3 ?>

                            <!-- calculate last number per display  -->
                            <?php $maxNumber = $paginationNumber > $total_page ? $total_page : $paginationNumber ?>

                            <!-- calculate start number per display -->
                            <?php $paginationStart = $page >= 5 ? $page - 2 : 1 ?>

                            <!-- pagination link  -->
                            <?php for ($paginationStart; $paginationStart < $maxNumber; $paginationStart++) : ?>
                                <li class="px-2 rounded-full <?= $page === $paginationStart ? "text-white bg-primary" : "" ?>"><a href="/project?title=<?= $title ?>&page=<?= $paginationStart ?>"><?= $paginationStart ?></a></li>
                            <?php endfor ?>

                            <!-- ... page  -->
                            <li class="px-2 rounded-full <?= $total_page < 5 || $page == $total_page ? "hidden" : "block" ?>">...</li>

                            <!-- last page  -->
                            <li class="px-2 rounded-full <?= $page == $total_page ? "text-white bg-primary" : "" ?>"><a href="/project?title=<?= $title ?>&page=<?= $total_page ?>"><?= $total_page ?></a></li>
                        </ul>

                        <!-- next button  -->
                        <button id="next-btn" class="border border-primary px-2 rounded-md"><a class="<?= $page == $total_page || $total_page == 0 ? "pointer-events-none text-fifth" : "" ?>" href="/project?title=<?= $title ?>&page=<?= $page + 1 ?>">next</a></button>
                    </div>
                </div>
            <?php endif ?>

            <?php if (isset($_GET['search'])) : ?>
                <div>
                    <div id="pagination-parent" class="mt-5 font-medium flex gap-5 justify-center">

                        <!-- prev button  -->
                        <button id="prev-btn" class="border border-primary px-2 rounded-md"><a class=" <?= $page == 1 ? "pointer-events-none text-fifth" : "" ?>" href="/project?title=<?= $_GET['search'] ?>&page=<?= $page - 1 ?>">prev</a></button>

                        <ul class="flex gap-1">
                            <!-- start page  -->
                            <li class="px-2 rounded-full <?= $page >= 5  ? "block" : "hidden" ?>"><a href="/projects?search=<?= $_GET['search'] ?>&page=1">1</a></li>

                            <!-- ... page  -->
                            <li class="px-2 rounded-full <?= $page >= 5  ? "block" : "hidden" ?>">...</li>

                            <!-- calculate pagination number per display -->
                            <?php $paginationNumber = $total_page < 6 ? $total_page : $page + 3 ?>

                            <!-- calculate last number per display  -->
                            <?php $maxNumber = $paginationNumber > $total_page ? $total_page : $paginationNumber ?>

                            <!-- calculate start number per display -->
                            <?php $paginationStart = $page >= 5 ? $page - 2 : 1 ?>

                            <!-- pagination link  -->
                            <?php for ($paginationStart; $paginationStart < $maxNumber; $paginationStart++) : ?>
                                <li class="px-2 rounded-full <?= $page === $paginationStart ? "text-white bg-primary" : "" ?>"><a href="/project?search=<?= $_GET['search'] ?>&page=<?= $paginationStart ?>"><?= $paginationStart ?></a></li>
                            <?php endfor ?>

                            <!-- ... page  -->
                            <li class="px-2 rounded-full <?= $total_page < 5 || $page == $total_page ? "hidden" : "block" ?>">...</li>

                            <!-- last page  -->
                            <li class="px-2 rounded-full <?= $page == $total_page ? "text-white bg-primary" : "" ?>"><a href="/project?search=<?= $_GET['search'] ?>&page=<?= $total_page ?>"><?= $total_page ?></a></li>
                        </ul>

                        <!-- next button  -->
                        <button id="next-btn" class="border border-primary px-2 rounded-md"><a class="<?= $page == $total_page || $total_page == 0 ? "pointer-events-none text-fifth" : "" ?>" href="/project?search=<?= $_GET['search'] ?>&page=<?= $page + 1 ?>">next</a></button>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>

    <!-- our valuable customers  -->
    <div class="bg-third text-white">
        <div class="2xl:px-16 md:px-5 lg:w-5/6 w-full py-10 mx-auto flex flex-col gap-5">
            <div class="flex justify-center">
                <h1 class="text-white text-xl font-serif font-bold mb-5">Our Valuable Customers</h1>
            </div>
            <!-- hosiptals  -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Hospital & Clinic</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">Asia Royal</li>
                    <li class="">ARYU</li>
                    <li class="">White & Green</li>
                    <li class="">Swan Yee Moe</li>
                    <li class="">Asia Royal Dental</li>
                    <li class="">Shwe La Yaung</li>
                </ul>
            </div>
            <!-- hotels  -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Hotel , Guest House & Resort</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">Royal Golden View Hotel</li>
                    <li class="">Kyaik Hto Hotel</li>
                    <li class="">Academy Hotel</li>
                    <li class="">Top Hotel</li>
                    <li class="">Sat Sun Hotel</li>
                    <li class="">Aung Zaya Hotel</li>
                    <li class="">Minglar Garden Resort</li>
                    <li class="">Thiri Aung Resort</li>
                    <li class="">Araindamar Hotel</li>
                    <li class="">GVI</li>
                    <li class="">Green Paradise Hotel</li>
                    <li class="">Mibamitta</li>
                    <li class="">Gandamar Hotel</li>
                    <li class="">Rainbow Hotel</li>
                    <li class="">San Yaeik Nyin Hotel</li>
                    <li class="">Golden Bliss Hotel</li>
                    <li class="">Royal Boss Hotel</li>
                    <li class="">Ayarwady Hotel</li>
                    <li class="">Wood Land Hotel</li>
                    <li class="">Chindwin Queen Hotel</li>
                    <li class="">Shwe Sin House</li>
                    <li class="">Nuge War Hotel</li>
                    <li class="">Shwe Sin Guest House</li>
                </ul>
            </div>
            <!-- schools  -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Schools</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">Stanfort international School</li>
                    <li class="">MISY School</li>
                    <li class="">WEBS Collage</li>
                    <li class="">YIU Youth</li>
                    <li class="">YIU Youth</li>
                    <li class="">Chindwinge Collage</li>
                    <li class="">Adaman Eight Japanese Agency</li>
                    <li class="">No.3 School</li>
                </ul>
            </div>
            <!-- Restaurants & Bar -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Restaurants & Bar</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">Chinese-47</li>
                    <li class="">Thai-47 (All Branch)</li>
                    <li class="">Sushi Tei</li>
                    <li class="">The Myst Bar</li>
                    <li class="">Pinlon House</li>
                    <li class="">Pinlon Loudge</li>
                    <li class="">Chapter 8</li>
                    <li class="">TORA</li>
                    <li class="">Glorial Jean's</li>
                    <li class="">Little Bee</li>
                    <li class="">La Yaeik</li>
                    <li class="">Dagon Kyaw</li>
                </ul>
            </div>
            <!-- factory  -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Factory & Corporate</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">MAEX</li>
                    <li class="">ESI</li>
                    <li class="">Pann Wut Hmone</li>
                    <li class="">Sun Flower F&B</li>
                    <li class="">Atrium Condo</li>
                    <li class="">Hledan Center</li>
                    <li class="">Taik 2 Lone</li>
                    <li class="">Phyo Wai Vinyl</li>
                    <li class="">Century Beverage</li>
                    <li class="">Central Manufacture</li>
                    <li class="">Daw Win Germent</li>
                    <li class="">Shwe Myanmar</li>
                    <li class="">Lucky Bag</li>
                    <li class="">United Product</li>
                    <li class="">Green Power Myanmar</li>
                    <li class="">Tun Tauk</li>
                    <li class="">Toe Nayar</li>
                    <li class="">Aung Aung</li>
                    <li class="">Tapyae Mon</li>
                    <li class="">Shwe Du Wunn</li>
                    <li class="">Aung Yadanar Thikdi</li>
                    <li class="">Ko Khaing Soe ( Pyarpon )</li>
                    <li class="">Htun Patrol</li>
                    <li class="">Tayaw Hinthata</li>
                    <li class="">Goden Dragon</li>
                    <li class="">Eucyptus</li>
                    <li class="">Ri & Co</li>
                    <li class="">Fast Corner</li>
                    <li class="">Win Gold Shop</li>
                    <li class="">Win Car</li>
                    <li class="">Nay Zar Lwin Tea Shop</li>
                    <li class="">Kwee La Min</li>
                    <li class="">Pon Nya Car Work Shop</li>
                    <li class="">Armini Exchange</li>
                    <li class="">Avandage Generator</li>
                </ul>
            </div>
            <!-- construction  -->
            <div class="bg-[#88593d]/35 shadow-lg px-2 py-5 rounded-md flex flex-col gap-1">
                <h1 class="font-serif text-lg font-bold">Construction & Decoration</h1>
                <ul class="w-full grid md:grid-cols-5 grid-cols-2 font-medium gap-2 px-3 justify-center items-center font-serif">
                    <li class="">Naing Group</li>
                    <li class="">Yadanar Myaing</li>
                    <li class="">Decor Space</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include "partials/footer.php" ?>