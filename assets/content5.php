<?php 
    $dot = [
        ['svg'=>'<svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#F9322C" d="M.5.5h31v31H.5z"></path><path d="M8 11v10c0 2.21 3.582 4 8 4s8-1.79 8-4V11M8 11c0 2.21 3.582 4 8 4s8-1.79 8-4M8 11c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round"></path></svg>', 
        'h3'=>'Database',
        'p' => 'Laravel s',
        'href' => 'href="/docs/eloquent',
        'hrefname' => '"Eloquent" ORM',
        'paraline' => 'provides best-in-class database abstraction without the headaches. Query and update your data without breaking a sweat. Eloquent pairs perfectly with MySQL, Postgres, SQLite, and SQL Server.'],

        ['svg'=>'<svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="currentColor" d="M.5.5h31v31H.5z"></path><path d="M23 15H9m14 0a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2m14 0v-2a2 2 0 0 0-2-2M9 15v-2a2 2 0 0 1 2-2m10 0V9a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v2m10 0H11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
        'h3' => 'Queues', 
        'p' => 'Dispatch background jobs to perform slow tasks like sending emails and generating reports while maintaining blazing fast response times. Laravel s ' , 
        'href' => '/docs/queues',
        'hrefname' => 'robust queue system',
        'paraline' => 'can process jobs using Redis, Amazon SQS, or even MySQL and Postgres.'],

        ['svg'=>'<svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#F9322C" d="M.5.5h31v31H.5z"></path><path d="m10.171 15.828-2.12 2.122M19 19l-2 5-4-11 11 4-5 2Zm0 0 5 5-5-5ZM11.188 6.239l.777 2.897-.777-2.897Zm-2.052 5.726-2.898-.777 2.898.777ZM17.95 8.05l-2.122 2.122L17.95 8.05Z" stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
        'h3' => 'Webscockets', 
         'p' => ' ', 
        'href' => '/docs/broadcasting',
        'hrefname' => 'Laravel Echo',
        'paraline' => 'and event broadcasting make it a cinch to build modern, realtime user experiences. Create amazing realtime applications while powering your WebSockets with pure PHP, Node.js, or serverless solutions like'],
        
        ['svg'=>'<svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#F9322C" d="M.5.5h31v31H.5z"></path><path d="M19 11a2 2 0 0 1 2 2l-2-2Zm6 2a6 6 0 0 1-7.743 5.743L15 21h-2v2h-2v2H8a1 1 0 0 1-1-1v-2.586a1 1 0 0 1 .293-.707l5.964-5.964A6 6 0 1 1 25 13v0Z" stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
        'h3' => 'Authentication', 
        'p' => 'Stop sweating authentication. Laravel provides scaffolding for secure, session based authentication, while', 
        'href' => '/docs/sanctum',
        'hrefname' => 'Laravel Sanctum',
        'paraline' => 'provides painless authentication for APIs and mobile applications.'],
];


            function svg_menu($link)
            {
                $menu = '<div class="">';

                for ($i = 0; $i < count($link); $i++) 
                {
                     $menu.='<div class="w-10 h-10 p-2">'.$link[$i]['svg'].'</div>';
                     $menu .= '<h3 class="mt-5 text-xl font-bold ">'. $link[$i]['h3'].'</h3>';
                     $menu.= '<p class="mt-4 text-gray-700 text-sm leading-relaxed  ">'.$link[$i]['p'].'<a class="underline" href="'.$link[$i]['href'].'">'.$link[$i]['hrefname'].'</a>'.$link[$i]['paraline'].'</p> ';
                }
                
                $menu .= '</div>';

                return $menu;
        
            }

?>
            
         <div class="max-w-screen-xl w-full mx-auto px-5">
             <h2 class="text-4xl font-bold max-w-lg md:text-5xl">Everything you need to be amazing.</h2>
            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

                <div class="flex">
                <?php echo svg_menu($dot)  ?>
                </div>

            </div>

        </div>