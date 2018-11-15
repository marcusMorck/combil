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
</section>  