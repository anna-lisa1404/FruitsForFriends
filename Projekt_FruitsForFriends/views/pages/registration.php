<!-- Hintergrundbild funktioniert so nicht. Nicht im body als Hintergrundbild anlegen! -->
<!-- bei Gender ist was falsch! Select kann als Option ausgewählt werden, aber Diverse fehlt! --> 
<!-- !!EINHEITLICHE BEZEICHNER VERWENDEN!! Kleinbuchstaben, englisch -->

<div class="page-container">
    <!-- <div class="background-picture">
       <img src=<?= IMAGEPATH.'lots_of_fruits/-background-with-raspberries-berries-background-ripe-raspberries.jpg' ?> alt="a lot of raspberries"> 
    </div> -->

    <div  class="container-registrierung" id="contactform">
        <div  class="wrapper-registrierung">
            <h1 class="text-center"> Registrierung  </h1>
            <form class="contact-form">

                <div class="form-group">
                    <label for="Name">Name*:</label>
                    <input type="text" name="name" id="Name" placeholder=" dein Nachname "><br>
                </div>

                <br>

                <div class=" form-group ">
                    <label for="Vorname ">Vorname*:</label>
                    <input type="text " placeholder="dein Vorname ">
                </div>

                <br>
    
                <div class="form-group">
                    <label for="geburtsdatum"> Geburtsdatum*:</label>
                    <input type="date" value="" />
                </div>

                <div class=" form-group ">
                    <label for="Gender "> Gender*: </label>
                    <select>
                        <option value=""> Select</option>
                        <option value=""> Female</option>
                        <option value=""> Male</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <label for="username">Username*:</label>
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username">
                </div> 

                <br>

                <div class="form-group">
                    <label for="Passwort ">Passwort*:</label>
                    <input class="form-control " id="Passwort " type="text " name="Passwort " placeholder="Passwort ">
                </div>

                <br>

                <div class="form-group">
                    <label for="passwordRepeat ">Passwort wiederholen*:</label>
                    <input class="form-control " id="PasswordRepeat " type="text " name="Passwort wiederholen " placeholder="Passwort wiederholen ">
                </div>

                <br>

                <div class="form-group">
                    <label for="email ">E-Mail*:</label>
                    <input class="form-control " id="email " type="text " name="email " placeholder="E-Mail ">
                </div>

                <br>

                <div class="form-group">
                    <button name="register " class="submit-btn ">Registrieren </button>
                </div> 
            </form>                         
        </div>    
    </div>
</div>