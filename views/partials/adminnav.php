<nav class="bg-secondary text-sm">
    <div class="relative w-full mx-auto flex items-center justify-between 2xl:px-16 md:px-5 px-2 py-2">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <a href="/">
                    <img src="/assets/logos/ip-logo.jpg" alt="" class="w-12 rounded-md">
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/admin" class="<?= uris("/admin") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif text-base" aria-current="page">Dashboard</a>
                    <a href="/accounts" class="<?= uris("/accounts") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif">Account Management</a>
                    <a href="/quotation" class="<?= uris("/quotation") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif">Quotations</a>
                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="flex items-center gap-5">
                <a href="/logout" class="text-white" id="user-menu-item-2">Logout</a>
            </div>
        </div>

        <!-- mobile menu  -->
        <div class="md:hidden flex flex-col justify-end items-end">
            <button title="menu" id="menuBtn" class="bg-fourth px-2 py-1 rounded-md <?= !uris("/") ? "text-white" : "" ?>">
                <svg id="menuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg id="menuClose" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <div id="menubar" class="text-lg font-serif py-10 w-full bg-secondary absolute top-14 left-0 z-20 hidden">
                <ul class="flex flex-col justify-center items-center gap-5">
                    <li><a href="/admin" class="<?= uris("/admin") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif text-base" aria-current="page">Dashboard</a></li>

                    <li><a href="/accounts" class="<?= uris("/accounts") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif">Account Management</a></li>

                    <li><a href="/quotation" class="<?= uris("/quotation") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif">Quotations</a></li>
                </ul>

                <div class="mt-5 flex justify-center gap-10 items-center">
                    <a href="/logout" class="<?= uris("/logout") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-serif">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>