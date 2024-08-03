<nav class="<?= !uris("/") ? "bg-secondary text-white" : "" ?>">
    <div class="relative w-full py-2 mx-auto grid grid-cols-12">

        <!-- logo  -->
        <div class="md:col-span-2 col-span-3 flex justify-center font-bold text-xl">
            <a class="" href="/" class="">
                <img src="/assets/logos/ip-logo.jpg" alt="" class="w-16 rounded-md">
            </a>
        </div>

        <!-- desktop menu -->
        <ul class="col-span-8 text-lg font-serif hidden md:flex justify-center items-center lg:gap-10 md:gap-5">
            <li><a class="<?= uris("/") ? "bg-fourth/55 text-white" : "hover:bg-fourth/55 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/">Home</a></li>

            <li><a class="<?= uris("/service") ? "bg-fourth/55 text-white" : "hover:bg-fourth/55 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/service">Services</a></li>

            <li><a class="<?= uris("/project") ? "bg-fourth/55 text-white" : "hover:bg-fourth/55 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/project">Projects</a></li>

            <li><a class="<?= uris("/contact") ? "bg-fourth/55 text-white" : "hover:bg-fourth/55 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/contact">Contact</a></li>
        </ul>

        <!-- mobile menu  -->
        <div class="md:hidden col-span-9 flex flex-col justify-end items-end">
            <button title="menu" id="menuBtn" class="bg-fourth me-5 px-2 py-1 rounded-md <?= !uris("/") ? "text-white" : "" ?>">
                <svg id="menuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg id="menuClose" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <div id="menubar" class="text-lg font-serif py-10 w-full bg-secondary bg-opacity-95 absolute top-20 z-20 left-0 hidden">
                <ul class="flex flex-col justify-center items-center gap-5">
                    <li><a class="<?= uris("/") ? "bg-fourth/55 text-white" : "hover:bg-fourth/55 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/">Home</a></li>

                    <li><a class="<?= uris("/service") ? "bg-fourth/55 text-white" : "hover:bg-gray-400/45 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/service">Services</a></li>

                    <li><a class="<?= uris("/project") ? "bg-fourth/55 text-white" : "hover:bg-gray-400/45 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/project">Projects</a></li>

                    <li><a class="<?= uris("/contact") ? "bg-fourth/55 text-white" : "hover:bg-gray-400/45 hover:text-white text-gray-300" ?> px-5 py-1 rounded-md duration-300" href="/contact">Contact</a></li>
                </ul>

                <div class="mt-5 flex justify-center gap-10 items-center">
                    <a href="https://www.facebook.com/intelligencepowercctv" target="_blank">
                        <svg class="size-6" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                        </svg>
                    </a>
                    <a href="viber://chat?number=09409709911">
                        <svg class="size-6" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                        </svg>
                    </a>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <a href="/admin" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md font-medium">admin</a>
                    <?php endif ?>
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <a href="/admin" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md font-medium">Login</a>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <!-- social icon  -->
        <div class="col-span-2 hidden md:flex justify-center gap-5 items-center">
            <a href="https://www.facebook.com/intelligencepowercctv" target="_blank">
                <svg class="size-6" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                </svg>
            </a>
            <a href="viber://chat?number=09409709911">
                <svg class="size-6" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z" />
                </svg>
            </a>
            <?php if (isset($_SESSION['user'])) : ?>
                <a href="/admin" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md font-medium">admin</a>
            <?php endif ?>
            <?php if (!isset($_SESSION['user'])) : ?>
                <a href="/admin" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md font-medium">Login</a>
            <?php endif ?>
        </div>
    </div>
</nav>