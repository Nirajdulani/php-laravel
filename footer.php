<?php include  './footerdata.php'; ?>

<footer class="relative pt-12 ">
    <div class="max-w-screen-2xl mx-auto w-full px-5">
        <div>
            <a href="/" class="inline-flex">
                <img class="w-16 h-16" src="/img/logomark.min.svg" alt="Laravel" loading="lazy">
            </a>
        </div>

        <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
            <div class="col-span-12 lg:col-span-4">
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm ">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                <ul class="mt-6 flex items-center space-x-3">


                    <li>
                        <a href="https://twitter.com/laravelphp"><img id="footer__twitter_dark" class="hidden w-6 h-6" src="/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                            <img id="footer__twitter" class="inline-block w-6 h-6" src="/img/social/twitter.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                        </a>
                    </li>

                    <li>
                        <a href="https://github.com/laravel"><img id="footer__github_dark" class="hidden w-6 h-6" src="/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                            <img id="footer__github" class="inline-block w-6 h-6" src="/img/social/github.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                        </a>
                    </li>

                    <li>
                        <a href="https://discord.gg/mPZNm7A"><img id="footer__discord_dark" class="hidden w-6 h-6" src="/img/social/discord.dark.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                            <img id="footer__discord" class="inline-block w-6 h-6" src="/img/social/discord.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.youtube.com/laravelphp"> <img id="footer__youtube_dark" class="hidden w-6 h-6" src="/img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                            <img id="footer__youtube" class="inline-block w-6 h-6" src="/img/social/youtube.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                        </a>
                    </li>

                </ul>
            </div>

            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                <span class="uppercase ">Highlights</span>

                <div class="mt-5">
                    <?php echo footer_menu($first_menu); ?>
                </div>
            </div>

            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                <span class="uppercase ">Resources</span>

                <div class="mt-5">
                <?php echo footer_menu($second_menu); ?>
                </div>
            </div>

            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                <span class="uppercase ">Partners</span>

                <div class="mt-5">
                    <?php  echo footer_menu($third_menu); ?>
                </div>
            </div>

            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                <span class="uppercase ">Ecosystem</span>

                <div class="mt-5">
                    <?php echo footer_menu($fourth_menu); ?>
                </div>
            </div>
        </div>
        <div class="mt-10 border-t pt-6 pb-16 border-gray-200 ">
            <p class="text-xs text-gray-700 "> Laravel is a Trademark of Taylor Otwell. Copyright © 2011-2023 Laravel LLC.
            </p>
            <p class="mt-6 text-xs text-gray-700 ">
                Code highlighting provided by <a href="https://torchlight.dev">Torchlight</a>
            </p>
        </div>
    </div>
</footer>