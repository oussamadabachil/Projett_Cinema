<?php
$title ='Login ';

$link_a="./css/main.css";
$link_b="./css/reset.css";
$link_c="./css/responsive.css";
$link_img="./asset/menu_1.png";
include_once('src_inc/head_inc.php');
?>

<?php
include_once('src_inc/header_inc.php');
?>


    <main>
        <section>
            <h2 class="h2">Afin de bénéficier de toutes séances sportives</h2>
            <p class="p">Vous devez vous inscrire sur la plateforme et ici vous aurez accés à vos résérvations</p>
        </section>
  
        <ul class="login_ul">
            <li><img src="./asset/1.jpg" alt="affiche sport">
                <div class="show_hover">
                    <a class="btn_primary" href="#subscribe_form">S'inscrire</a>
                    <button
                    data-image="./asset/1.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>

                </div></li>
            <li><img src="./asset/2.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary" href="#subscribe_form">S'inscrire</a>
                    <button
                    data-image="./asset/2.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li><img src="./asset/3.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary" href="#subscribe_form">S'inscrire</a>
                    <button
                    data-image="./asset/3.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="./asset/4.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary" href="#subscribe_form">S'inscrire</a>
                    <button
                    data-image="./asset/4.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>

        </ul>

        <?php
include_once('src_inc/form_verif_inscription.php');

?>
    
    </main>


    <?php
include_once('src_inc/newsletter_button_form_inc.php');

?>


<div class="parent-modale" id="peremodale" role="region">
    <figure class="modale" id="modaleid">
        <button aria-label="closed">
            <span class="material-symbols-outlined">
                close
                </span>        </button>
        <img src="" alt="picture">
        <figcaption class="desc">
            <h3>title</h3>
            <p>
            
            </p>
            <time>Years : </time>
        </figcaption>
    </figure>
</div>
  
    <footer>
        <p class="footer_black">&copy; Oussama DABACHIL</p>
    </footer>

<?php
$linkJs = "./app/app.js";

include_once("./src_inc/script_inc.php")
?>

