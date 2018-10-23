<?php
    include "header.php";
?>
<div class="hero service">

    <div class="overlay">
       <h1 class="hero-title">Service och reparation</h1>
    </div>
</div>

<main role="main">
    <section class="intro">
        <h2>Vi utför service och reparationer</h2> 

        <p>Här på combil tar vi hand om din bil och ser till att den mår så bra som möjligt!
            Vi utför service och reperationer på nya bilar men även på bilar som har några år på nacken.
            Tveka inte att hör av dig och boka service eller reperation. Arbetet genomförs självklart med garanti!
        </p>
    </section>
    <section id="feature-service">
        <div>
            <div class="feature-icon">
                <img src="/images/service-icon.png" />
            </div>
            <h2>Service</h2>
            <p>Regelbunden bilservice förlänger din bils livslängd och
                ger dig ett mer problemfritt bilägande. Vi erbjuder ett komplett servicepaket för er bil, både inför
                sommarens resor och inför vintervägens utmaningar.
            </p>
        </div>
        <div>
            <div class="feature-icon">
                <img src="/images/repair-icon.png" />
            </div>
            <h2>Reparationer</h2>
            <p>
                Högteknologisaka bilar med den senaste utrustningen ställer även höga krav
                på bilverkstadens teknologi och kunnande. Vi kan erbjuda er en certifierad och kunnig verkstad som
                tar hand om alla era reparationsbehov, oavsett om det gäller högteknologiska komponenter eller
                mekanisk reparation. 
            </p>
        </div>
        <div> 
            <div class="feature-icon">
                <img src="/images/ok-icon.png" />
            </div>
            <h2>Garanti</h2>
            <p>
                All utförd service och samtliga reparationer kommer med garanti för er trygghet.
            </p>
        </div>
    </section>
    <section id="contact-service">
        <div class="contact-info">
            <h2>
                Kontaktformulär
            </h2>
            <p>
                Boka gärna tid genom att använda detta kontaktformuläret. Ange om det
                gäller felsökning, service eller reparation. Du kan även komma in på vår verkstad så hjälper vi dig
                med en tidsbokning eller drop-in.
            </p>
        </div>
        
        <form action="" method="" class="contact-form">
            <div class="contact-row">
                <div class="contact-group">
                    <label>För- och efternamn*</label>
                    <input name="name" type="text" placeholder="För- och efternamn*" required />
                </div>
                <div class="contact-group">
                    <label>Epost*</label>
                    <input name="email" type="email" placeholder="Epost*" required />
                </div>
            </div>
            <div class="contact-row">
                <div class="contact-group">
                    <label>Telefon*</label>
                    <input name="phone" type="tel" placeholder="Telefon*" required/>
                </div>
                <div class="contact-group">
                    <label>Registreringsnummer*</label>
                    <input name="regnr" type="text" placeholder="Regnummer*" required/>
                </div>
            </div>

            <div class="contact-row">
                <div class="contact-group">
                    <label>Datum*</label>
                    <input name="date" type="date" placeholder="Datum*" required/>
                </div>
                <div class="contact-group">
                <label>Vad gäller ditt ärende?</label>
                    <select>
                        <option>Felsökning</option>
                        <option>Service</option>
                        <option>Reparation</option>
                    </select>
                </div>
            </div>

            <div class="form-msg-submit">
                <div class="contact-group">
                    <label>Ditt meddelande</label>
                    <textarea></textarea>
                </div>
                <div>
                    <input type="submit" value="Skicka meddelandet">
                </div>
            </div>

               



        </form>
        

        <!--
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
                <input type="submit" value="Skicka meddelandet">
            </div>
        </form>-->
    </section>
</main>
<?php
    include "footer.php";
?>