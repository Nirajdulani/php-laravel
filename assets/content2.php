<?php 

$img = [
        ['link'=>'http://www.fotolip.com/wp-content/uploads/2016/05/Disney-logo-vector-2.png'],
        ['link'=>'https://tse3.mm.bing.net/th?id=OIP.grSQm2ggbKvxtqYgLs3-TwHaCd&pid=Api&P=0'],
        ['link'=>'https://pbs.twimg.com/profile_images/2623522677/ckpurvi2karfnbiubmtf.gif'],
        ['link'=>'https://tse1.mm.bing.net/th?id=OIP.0RwyxL6YYw5wQmZUbqtQUgHaBu&pid=Api&P=0'],
        ['link'=>'https://tse4.mm.bing.net/th?id=OIP.4cQyZLfOGmfHPZpj2SC0VAHaE8&pid=Api&P=0'],
        ['link'=>'https://tse1.mm.bing.net/th?id=OIP.P1kbH6YiKpzihsWP4XC2QAHaBD&pid=Api&P=0'],
        ['link'=>'https://logos-download.com/wp-content/uploads/2016/12/WWE_logo_logotype.png'],

];

function image_menu($linkimage)
{
        $menu = '';

    for ($i = 0; $i < count($linkimage); $i++) 
    {
       $menu .= '<img src="'.$linkimage[$i]['link'].'" style="height: 32px">';
    }
  

    return $menu;
}

?>

<div class="hidden md:block md:overflow-hidden md:mt-24">
        <div class="flex items-center justify-center gap-x-10">

                <?php echo image_menu($img) ?>

         </div>
</div>