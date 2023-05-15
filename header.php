<?php
    $navbar = [
        ['link'=>'https://forge.laravel.com','name'=>'Forge'],
        ['link'=>'https://vapor.laravel.com','name'=>'Vapor'],
        ['link'=>'https://forge.laravel.com','name'=>'Ecosystem'],
        ['link'=>'https://laravel-news.com','name'=>'News'],
        ['link'=>'https://partners.laravel.com','name'=>'Partners'], 
    ];

    function nav_menu($linkarray)
    {
        $menu = '<ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10 text-xl space-x-4 pt-4">';
    
        for ($i = 0; $i < count($linkarray); $i++) {
            $menu .= "<li><a href='" . $linkarray[$i]['link'] . "'>" . $linkarray[$i]['name'] . "</a></li>";
        }
        $menu .= '</ul>';
    
        return $menu;
    }
?>


<div class="absolute top-0 w-full">
<header x-trap.inert.noscroll="navIsOpen" class="main-header relative z-50 text-gray-700" @keydown.window.escape="navIsOpen = false" @click.away="navIsOpen = false">
    <div class="hidden lg:flex items-center justify-center bg-gradient-to-b from-red-500 to-red-600 p-2 text-center text-white text-sm">
    
            <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>

        <div class="mt-px ml-1">
            Servers with PHP 8.2 are now available for provisioning via <a href="https://forge.laravel.com" class="underline">Laravel Forge</a>.
        </div>
    
    
    </div>

    <div class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
        <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
            <div class="flex-1">
                <a href="/" class="inline-flex items-center">
                    <img class="w-12" src="/img/logomark.min.svg" alt="Laravel" width="50" height="52">
                    <img class="ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel" width="114" height="29">
                </a>
            </div>

            <!-- Navbar-->
            <?php echo nav_menu($navbar); ?>
            

            <div class="flex-1 flex items-center justify-end">
                <button id="docsearch"><button type="button" class="DocSearch DocSearch-Button" aria-label="Search"><span class="DocSearch-Button-Container"><svg width="20" height="20" class="DocSearch-Search-Icon" viewBox="0 0 20 20"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="DocSearch-Button-Placeholder"></span></span><span class="DocSearch-Button-Keys"><kbd class="DocSearch-Button-Key"><svg width="15" height="15" class="DocSearch-Control-Key-Icon"><path d="M4.505 4.496h2M5.505 5.496v5M8.216 4.496l.055 5.993M10 7.5c.333.333.5.667.5 1v2M12.326 4.5v5.996M8.384 4.496c1.674 0 2.116 0 2.116 1.5s-.442 1.5-2.116 1.5M3.205 9.303c-.09.448-.277 1.21-1.241 1.203C1 10.5.5 9.513.5 8V7c0-1.57.5-2.5 1.464-2.494.964.006 1.134.598 1.24 1.342M12.553 10.5h1.953" stroke-width="1.2" stroke="currentColor" fill="none" stroke-linecap="square"></path></svg></kbd><kbd class="DocSearch-Button-Key"></kbd></span></button></button>
                <a class="group relative inline-flex border border-red-600 focus:outline-none hidden lg:ml-4 lg:inline-flex" href="/docs">
    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
        Documentation
    </span>
</a>
          <button class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden" aria-label="Toggle Menu" @click.prevent="navIsOpen = !navIsOpen">
                    <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2"></line><line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2"></line></svg>
                    <svg x-show="navIsOpen" class="absolute inset-0 mt-2.5 ml-2.5 w-5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;"><rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)" fill="currentColor"></rect><rect width="2" height="24" transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)" fill="currentColor"></rect></svg>
                </button>
            </div>
        </div>
    </div>
</header>
</div>