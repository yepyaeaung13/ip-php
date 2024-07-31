<?php include "partials/head.php" ?>

<!-- scroll button  -->
<?php include "partials/button.php" ?>

<!-- hero and nav  -->
<main class="h-screen w-full grid grid-rows-12 md:p-5 text-white bg-third bg-no-repeat bg-center bg-cover bg-blend-multiply" style="background-image: url('assets/photos/bg.jpg')">

    <header class="row-span-2">
        <?php include "partials/nav.php" ?>
    </header>

    <!-- hero para  -->
    <section class="row-span-9 flex items-center justify-center">
        <div class="md:w-96 w-80 flex flex-col items-center gap-5">
            <h1 class="text-xl font-bold text-center">Protect What Matters Most with Our Comprehensive Security Solutions</h1>
            <p class="text-center">Providing top-notch security services including CCTV, Door Card Access, and more.</p>
            <div class="flex gap-5">
                <button id="moreBtn" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md">Learn More</button>
                <a href="/contact#quotationForm" class="hover:bg-transparent duration-300 border border-primary bg-primary px-3 py-1 rounded-md">Get a Quote</a>
            </div>
        </div>
    </section>

    <!-- show more btn  -->
    <div class=" row-span-1 flex justify-center">
        <button class="hover:text-primary duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
            </svg>
        </button>
    </div>
</main>

<section class="">
    <!-- company intro -->
    <section class="bg-secondary text-white">
        <div class="w-full mx-auto p-5 flex flex-col gap-5">
            <div class="lg:px-10 md:px-5 px-1">
                <div class="flex md:flex-row flex-col justify-between gap-5">
                    <div class="md:w-1/2 w-full flex flex-col md:gap-5 gap-2">
                        <h1 class="text-2xl font-bold font-serif">Intelligence Power Co.,Ltd</h1>
                        <p class="leading-6 text-justify">
                            Founded in 2016, Intelligence Power Co., Ltd. (IP) provides high-quality security and Hotel System (ELV) solutions for various sectors. With rising crime rates, we ensure reliable, tamper-proof, and remotely accessible security systems. Partnered with top suppliers, we offer the latest technology and software for ELV systems at competitive prices. Our services include a 1-year project warranty and 24-hour maintenance support.
                        </p>
                        <div class="flex">
                            <a href="/about" class="group flex items-center gap-1 bg-primary text-white px-5 py-1 rounded-md border border-primary duration-300">
                                <span>About Us</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 group-hover:translate-x-2 duration-150">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full flex flex-col md:gap-5 gap-2">
                        <h1 class="font-bold text-lg underline underline-offset-8 font-serif">Over 7 Years Of Experience</h1>
                        <p class="leading-6 tracking-widest text-justify">
                            With over 7 years of experience, our company has established itself as a trusted name in the security solutions industry. We specialize in providing top-quality installation and service for a range of security systems, ensuring the safety and peace of mind of our clients. Our expertise spans across several key areas:
                        </p>
                        <blockquote class="text-fifth">"Security is not a product, but a process." – Bruce Schneier</blockquote>
                    </div>
                </div>
            </div>

            <!-- work done overview  -->
            <div class="text-sm rounded-md h-40 flex items-center md:justify-center justify-evenly flex-wrap md:gap-20 gap-5">
                <div class="flex flex-col justify-center items-center">
                    <h2 class="text-2xl font-bold">7 <span class="text-primary">+</span> </h2>
                    <span class="">Years Experience</span>
                </div>
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-bold">1,000 <span class="text-primary">+</span> </h2>
                    <span class="">Projects Done</span>
                </div>
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-bold">20 <span class="text-primary">+</span> </h2>
                    <span class="">Team Advisors</span>
                </div>
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-bold">200 <span class="text-primary">+</span> </h2>
                    <span class="">Active Clients</span>
                </div>
            </div>
        </div>
    </section>

    <!-- our services section  -->
    <section class="w-full mx-auto md:p-5 py-5 px-1 flex flex-col gap-5">
        <div class="flex justify-center">
            <h1 class="text-center flex flex-col">
                <span class="uppercase text-primary font-serif">What We Do</span>
                <span class="text-2xl font-serif">Our Services</span>
            </h1>
        </div>
        <div class="xl:px-10 px-1 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 text-sm">
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/bg.jpg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">CCTV Installation & Service</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/solar.jpeg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">Solar Systems Installation & Service</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/fire-alarm.jpg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">Fire Alarm Systems</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/card-access.jpg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">Attendance Fingerprint & Card Access Systems</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/wifi.jpeg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">WIFI & Network Solutions</span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/pabx.jpeg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">PABX, IPBX Systems Installation & Service </span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/gps.jpg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">Vehicle GPS Tracking Systems Installation & Service </span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/matv.jpeg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">CATV, MATV & IPTV Installation & Service </span>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="h-60 relative overflow-hidden">
                <div style="background-image: url(assets/photos/pa.jpg);" class="h-full bg-cover bg-center bg-fourth/45 bg-blend-multiply hover:scale-[105%] duration-300">
                </div>
                <span class="text-white w-full bg-secondary absolute left-0 bottom-0 px-2 py-1 z-50">Public Address (PA) Systems Installation & Service </span>
            </div>
        </div>
    </section>

    <!-- why choose us section  -->
    <section class="py-5 bg-third text-white">
        <div class="w-full mx-auto xl:px-20 px-1 flex flex-col gap-5">
            <div class="flex justify-center">
                <h1 class="text-2xl font-serif">Why Choose Us</h1>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 md:px-10 px-1 md:gap-10 gap-5">
                <div class="flex flex-col gap-2 rounded-md">
                    <h1 class="text-xl font-serif underline underline-offset-4">Experience</h1>
                    <p>With over 7 years in the industry, we have the expertise to deliver exceptional security solutions.</p>
                </div>
                <div class="flex flex-col gap-2 rounded-md">
                    <h1 class="text-xl font-serif underline underline-offset-4">Quality</h1>
                    <p>We use the latest technology and high-quality equipment to ensure reliable and effective security systems.</p>
                </div>
                <div class="flex flex-col gap-2 rounded-md">
                    <h1 class="text-xl font-serif underline underline-offset-4">Customer Service</h1>
                    <p>Our dedicated team is committed to providing excellent service and support, tailored to your needs.</p>
                </div>
                <div class="flex flex-col gap-2 rounded-md">
                    <h1 class="text-xl font-serif underline underline-offset-4">Comprehensive Solutions</h1>
                    <p>From CCTV and Wifi to fire alarms and PA systems, we offer a full range of security services to protect your property and enhance your operations.</p>
                </div>
            </div>
            <div class="">
                <p class="md:px-10 px-2">
                    Contact us today to learn more about how we can help secure your property with our professional security solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- some recent projects  -->
    <section class="lg:px-20 md:px-5 px-2 w-full mx-auto py-5 flex flex-col gap-5">
        <div class="flex justify-center">
            <h1 class="text-2xl flex items-center gap-1 font-serif">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                </svg>
                <span>Recent Projects</span>
            </h1>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-5 md:gap-2 px-1">
            <?php foreach ($projects as $project) : ?>
                <div data-aos="flip-right" data-aos-duration="1000" class="shadow-md flex flex-col gap-2 p-2 border rounded-md hover:-translate-y-2 duration-300">
                    <img src="<?= $project['photo'] ?>" alt="" class="h-52 rounded-md object-center object-cover">
                    <p class="flex justify-center items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <span class=""><?= $project['service'] ?></span>
                    </p>
                    <div class="flex gap-2">
                        <span class="px-2 text-xs <?= isset($_SESSION['user']) ? "block" : "hidden" ?>">Project Id - <?= $project['id'] ?></span>
                        <span class="px-2 text-xs"><?= $project['created_at'] ?></span>
                    </div>
                    <div class="flex flex-wrap gap-5">
                        <h1 class="font-bold flex gap-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                            </svg>

                            <span><?= $project['customer'] ?></span>
                        </h1>
                        <p class="flex gap-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <span>
                                <?= $project['location'] ?>
                            </span>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <div class="flex justify-center">
            <a href="/project" class="group flex items-center gap-1 bg-primary text-white px-5 py-1 rounded-md border border-primary duration-300">
                <span>View All</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 group-hover:translate-x-2 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </section>
</section>

<?php include "partials/footer.php" ?>