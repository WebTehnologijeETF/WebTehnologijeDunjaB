      <form id="Contact"class="contact">

      <p>Svrha kontaktiranja naseg preduzeca: <br />
        <input id="SvrhaVal" list="svrha" onchange="ValidirajPolje('Svrha')"><span id="validSvrha" class="display-none"><img src="Content\valid.png" alt="validan unos"></span>
      <datalist id="svrha">        
        <option value="Primjedba">
        <option value="Zalba">
        <option value="Pitanje">
        <option value="Pohvala">
        <option value="Prijedlog">
      </datalist><br />

      <!--Required---regex za email-->
       Vas email: <br />      
       <input id="EmailVal" type="text" onchange="ValidirajPolje('Email', true, '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'); ValidirajPolje('PotvrdiEmail', false, false, 'Email')"></input>
       <span id="validEmail" class="display-none"><img src="Content\valid.png" alt="validan unos"></span>
       <span id="invalidEmail" class="display-inline"><img src="Content\novalid.png" alt="nije validan unos"></span>
       <span id="requiredEmail" class="display-inline">Email je obavezan</span>
       <span id="patternEmail" class="display-none">Email nema odgovarajuci format</span>
       <br />

       <!--Required---regex za email-->
       Potvrdite vas email: <br />      
       <input id="PotvrdiEmailVal" type="text" onchange="ValidirajPolje('PotvrdiEmail', true, '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'Email')"></input>
       <span id="validPotvrdiEmail" class="display-none"><img src="Content\valid.png" alt="validan unos"></span>
       <span id="invalidPotvrdiEmail" class="display-inline"><img src="Content\novalid.png" alt="nije validan unos"></span>
       <span id="requiredPotvrdiEmail" class="display-inline">Email je obavezan</span>
       <span id="patternPotvrdiEmail" class="display-none">Email nema odgovarajuci format</span>
       <span id="crossPotvrdiEmail" class="display-none">Unosi su razliciti</span>
       <br />

       Vase ime i prezime:<br />
       <input id="ImeVal" type="text" onchange="ValidirajPolje('Ime', true, '^[a-zA-Z ,.-]+$')"></input>
       <span id="validIme" class="display-none"><img src="Content\valid.png" alt="validan unos"></span>
       <span id="invalidIme" class="display-inline"><img src="Content\novalid.png" alt="nije validan unos"></span>
       <span id="requiredIme" class="display-inline">Vase ime je obavezno</span>
       <span id="patternIme" class="display-none">Vas unos nema validnu vrijednost</span>
       <br />
       
       
       <p>Text:
       <span id="validText" class="display-none"><img src="Content\valid.png" alt="validan unos"></input><br /></span>
       <span id="invalidText" class="display-inline"><img src="Content\novalid.png" alt="nije validan unos">Text poruke je obavezan<br /></span>
       <textarea id="TextVal" rows="4" cols="50" class="contact-textearea" onchange="ValidirajPolje('Text',true)" placeholder="Ovdje upišite text vaše poruke..." maxlength="100" ></textarea>

       Vase mjesto i postanski broj: <br /></p>
       <input id="mjesto" type="text" placeholder="Mjesto" onchange="validirajMjestoBroj()"><input id="postanskiBroj" type="text" placeholder="postanski broj" onchange="validirajMjestoBroj()"></input>
       <span id="validMjestoBroj" class="display-none"><img src="Content\valid.png" alt="validan unos"><br /></span>
       <span id="invalidMjestoBroj" class="display-none"><img src="Content\novalid.png" alt="nije validan unos"><br /></span>
       <span id="validityText"></span><br /><br />
       
       <button type="submit" class="contact-button" form="Contact" formmethod="post">Pošalji</button>
       
       <button type="reset" class="contact-button" form="Contact">Obriši sve</button>
      </form>