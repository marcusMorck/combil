<?php
    include "header.php";
?>
<div class="hero service">

    <div class="overlay">
       <h1 class="hero-title">Service och reparation</h1>
    </div>
</div>

<main role="main">
    <section id="feature-service">
        <div class="feature-row">
            <div class="feature-icon">
                <i class="fas fa-cog fa-4x"></i>
            </div>
            <div class="feature-text">
                <h2>
                    Service
                </h2>
                <p>
                    Regelbunden bilservice förlänger din bils livslängd och
                    ger dig ett mer problemfritt bilägande. Vi erbjuder ett komplett servicepaket för er bil, både inför
                    sommarens resor och inför vintervägens utmaningar.
                </p>
            </div>
        </div>
        <div class="feature-row">
            <div class="feature-icon">
                <i class="fas fa-wrench fa-4x"></i>
            </div>
            <div class="feature-text">
                <h2>
                    Reparationer
                </h2>
                <p>
                    Högteknologisaka bilar med den senaste utrustningen ställer även höga krav
                    på bilverkstadens teknologi och kunnande. Vi kan erbjuda er en certifierad och kunnig verkstad som
                    tar hand om alla era reparationsbehov, oavsett om det gäller högteknologiska komponenter eller
                    mekanisk reparation. 
                </p>
            </div>
        </div>
        <div class="feature-row">
            <div class="feature-icon">
                <i class="fas fa-check fa-4x"></i>
            </div>
            <div class="feature-text">
                <h2>
                    Garanti
                </h2>
                <p>
                    All utförd service och samtliga reparationer kommer med garanti för er trygghet.
                </p>
            </div>
        </div>
    </section>
    <section id="contact-service">
        <div class="contact-info">
            <h2>
                Kontaktformulär
            </h2>
            <p>
                Boka gärna tid genom nedanstående kontaktformulär. Ange om det
                gäller felsökning, service eller reparation. Du kan även komma in på vår verkstad så hjälper vi dig
                med en tidsbokning eller drop-in.
            </p>
        </div>
        <hr>
        <form action="">
            <div class="form-group">
                <div class="form-row">
                    <label>För- och efternamn*</label>
                    <input name="name" type="text" required/>
                </div>
                <div class="form-row">
                    <label>Epost*</label>
                    <input name="email" type="email" required/>
                </div>
                <div class="form-row">
                    <label>Telefon*</label>
                    <input name="phone" type="tel" required/>
                </div>
                <div class="form-row">
                    <label>Registreringsnummer*</label>
                    <input name="regnr" type="text" />
                </div>
                <div class="form-row">
                    <label>Datum*</label>
                    <input name="date" type="date" />
                </div>
            </div>
            <div class="form-group">
                <div class="contact-row">
                    <label>Vad gäller ditt ärende?</label>
                    <select>
                        <option>Felsökning</option>
                        <option>Service</option>
                        <option>Reparation</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <textarea></textarea>
            </div>
            <div class="btn form-group ">
                <input type="submit" value="Skicka meddelandet" >
            </div>
        </form>
    </section>
</main>
<?php
    include "footer.php";
?>