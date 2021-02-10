
<div  class="page-container" >
        
    <div class="himbeer-img">
        <img src=<?= IMAGEPATH.'lots_of_fruits/-background-with-raspberries-berries-background-ripe-raspberries.jpg' ?> alt="a lot of limes"> 
    </div>

    <div  class="wrapper-registrierung">
        <div class="contact-form">
             <h1 class="text-center"> Registrierung  </h1>

                <form action="index.php?c=pages&a=registration" method="post">
                      
                  <div class="form-group">
                        <label for="name">Name*:</label>
                        <input type="text" name="name" id="name" placeholder=" dein Nachname "><br>
                    </div>

                    <br>

                    <div class=" form-group ">
                         <label for="firstname ">Vorname*:</label>
                        <input type="text " placeholder="dein Vorname ">
                    </div>

                        <br>
        
                        <div class="form-group">
                            <label for="birthdate"> Geburtsdatum*:</label>
                            <input type="date" value="" />
                        </div>

                        <br>

                        <div class=" form-group ">
                            <label for="Gender "> Gender*: </label>
                                <select>
                                    <option value=""> Female </option>
                                    <option value=""> Male   </option>
                                    <option value=""> Diverse </option>
                                </select>
                        
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="username">Username*:</label>
                            <input class="form-control" id="username" type="text" name="username" placeholder="Username">
                        </div> 

                        <br>

                        <div class="form-group">
                            <label for="passwort ">Passwort*:</label>
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
