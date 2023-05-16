<?php
$first_menu = [
    ['link' => '/team', 'name' => 'our team'],
    ['link' => '/docs/10.x/releases', 'name' => 'Release Notes'],
    ['link' => '/docs/10.x/installation', 'name' => 'Getting Started'],
    ['link' => '/docs/10.x/routing', 'name' => 'Routing'],
    ['link' => '/docs/10.x/authentication', 'name' => 'Blade Templates'],
    ['link' => '/docs/10.x/authorization', 'name' => 'Authentication'],
    ['link' => '/docs/10.x/artisan', 'name' => 'Artisan Console'],
    ['link' => '/docs/10.x/database', 'name' => 'Database'],
    ['link' => '/docs/10.x/eloquent', 'name' => 'Eloquent ORM'],
    ['link' => '/docs/10.x/testing', 'name' => 'Eloquent ORM'],
    ['link' => '/docs/10.x/testing', 'name' => 'Testing'],
];

$second_menu = [
    array('link' => 'https://bootcamp.laravel.com', 'name' => 'Laravel Bootcamp'),
    array('link' => 'https://laracasts.com', 'name' => 'Laracasts'),
    array('link' => 'https://laravel-news.com', 'name' => 'Laravel News'),
    array('link' => 'https://laracon.us', 'name' => 'Laracon'),
    array('link' => 'https://laracon.eu/', 'name' => 'Laracon EU'),
    array('link' => 'https://laracon.in/', 'name' => 'Laracon India'),
    array('link' => 'https://larajobs.com', 'name' => 'Jobs '),
    array('link' => 'https://larajobs.com', 'name' => 'Database'),
    array('link' => 'https://laracasts.com/discuss', 'name' => 'Forums '),
    array('link' => '/trademark', 'name' => 'Trademark ')

    
];


$third_menu = [
    array('link' => 'https://webreinvent.com/?utm_source=laravel&amp;utm_medium=laravel.com&amp;utm_campaign=footer-link', 'name' => 'WebReinvent'),
    array('link' => 'https://vehikl.com', 'name' => 'Vehikl'),
    array('link' => 'https://tighten.co', 'name' => 'Tighten'),
    array('link' => 'https://64robots.com/', 'name' => '64 Robots'),
    array('link' => 'https://activelogic.com/', 'name' => 'Active Logic'),
    array('link' => 'https://www.byte5.net/', 'name' => 'Byte 5'),
    array('link' => 'https://www.curotec.com/services/technologies/laravel/', 'name' => 'Curotec '),
    array('link' => 'https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&amp;utm_medium=Sponsorship', 'name' => 'Cyber-Duck'),
    array('link' => 'https://devsquad.com/', 'name' => 'DevSquad '),
    array('link' => 'https://jump24.co.uk/', 'name' => 'Jump24 '),
    array('link' => 'https://kirschbaumdevelopment.com/', 'name' => 'Kirschbaum '),
];


$fourth_menu =[
    array('link' => '"/docs/10.x/billing', 'name' => 'Cashier'),
    array('link' => '/docs/10.x/dusk', 'name' => 'Dusk'),
    array('link' => '/docs/10.x/broadcasting', 'name' => 'Echo'),
    array('link' => 'https://envoyer.io', 'name' => 'Envoyer'),
    array('link' => 'https://forge.laravel.com', 'name' => 'Forge'),
    array('link' => '/docs/10.x/horizon', 'name' => 'Horizon'),
    array('link' => 'https://nova.laravel.com', 'name' => 'Nova '),
    array('link' => '/docs/10.x/octane', 'name' => 'Octane'),
    array('link' => '/docs/10.x/sail', 'name' => 'Sail '),
    array('link' => '/docs/10.x/sanctum', 'name' => 'Sanctum '),
    array('link' => '/docs/10.x/scout', 'name' => 'Scout '),
    array('link' => 'https://spark.laravel.com', 'name' => 'Spark '),
    array('link' => '/docs/10.x/telescope', 'name' => 'Telescope '),
    array('link' => '/docs/10.x/valet', 'name' => 'valet '),
    array('link' => 'https://vapor.laravel.com', 'name' => 'vapor '),
];

function footer_menu($linkarray)
{
    $menu = '<ul  class="space-y-3 text-gray-700 ">';

    for ($i = 0; $i < count($linkarray); $i++) {
        ///$menu .= "<li><a href='" . $linkarray[$i]['link'] . "'>" . $linkarray[$i]['name'] . "</a></li>";
        $menu .= sprintf( '<li><a href="%s">%s</a></li>',$linkarray[$i]['link'],$linkarray[$i]['name']);
       
    }
    $menu .= '</ul>';

 

    return $menu;
}

?>