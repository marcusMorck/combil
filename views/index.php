<?php
 include "header.php"; //Include header
?>

<div class="hero index">
    <div class="overlay">
        <h1 class="hero-title">Välkommen till Combil!</h1>
    </div>
</div>
<main role="main">
    <section class="intro">
        <h2>
            Välkommen till Combil verkstad och butik!
        </h2>
        <p>
            Hos oss kan du handla dina reservdelar och
            även lämna din bil i trygga händer för både service och reparationer. Följ länkarna här ovan för att
            läsa mer om vad vi kan hjälpa er med!
        </p>
    </section>
    <section id="opening-hours">
        <h3>Våra Öppetider</h3>

            <h4>Butik</h4>
            <p>Vardagar: 09:00 - 18:00</p>
            <p>Lördag: 10:00 - 14:00</p>

    </section>
    <section id="home-boking">
        <a href="#">
            <div>
                <img src="/images/service-icon.png" />
                <h3>Boka tid för service</h3>
                <p>Klicka här för att boka service för din bil.</p>
            </div>
        </a>
        <a href="#">
            <div>
                <img src="/images/repair-icon.png" />
                <h3>Boka tid för reperation</h3>
                <p>Klicka här för att boka en tid för att reperera skador på din </p>
            </div>
        </a>
        <a href="#">
            <div>
                <img src="/images/tire-icon.png" />
                <h3>Boka tid för däckservice</h3>
                <p>Klicka här för att boka en tid för däckskifte på din bil</p>
            </div>
        </a>
        <a href="#">
            <div>
                <img src="/images/carglas-icon.png" />
                <h3>Boka tid för bilglas</h3>
                <p>Klicka här för att boka en tid för att reperera sprickor eller byta bilglas
                    på din bil.
                </p>
            </div>
        </a>
    </section>
</main>

<?php 
include "footer.php";
?>