
<div class="background-picture-registration">

<div class="wrapper-registrierung">
       <div class="contact-form">
            <h1 class="text-center"> Registrierung  </h1>

               <form  action="index.php?c=pages&a=registration" method="post">
                     
                 <div class="form-group">
                       <label for="lastname">Name*:</label>
                       <input type="text" name="lastname" id="name" placeholder=" dein Nachname "><br>
                   </div>

                   <br>

                   <div class=" form-group ">
                        <label for="firstname ">Vorname*:</label>
                       <input type="text " name="firstname" placeholder="dein Vorname ">
                   </div>

                       <br>
       
                       <div class="form-group">
                           <label for="birthdate"> Geburtsdatum*:</label>
                           <input type="date" name="birthdate" value="date" />
                       </div>

                       <br>

                       <div class=" form-group ">
                           <label for="Gender"> Gender*: </label>
                               <select>
                                   <option value="Female" name="gender"> Female </option>
                                   <option value="Male" name="gender"> Male   </option>
                                   <option value="Diverse" name="gender"> Diverse </option>
                               </select>
                       
                       </div>

                       <br>

                       <div class="form-group">
                           <label for="username">Username*:</label>
                           <input class="form-control" id="username" type="text" name="username" placeholder="Username">
                       </div> 

                       <br>

                       <div class="form-group">
                           <label for="password ">Passwort*:</label>
                           <input class="form-control " id="Passwort " type="text " name="password " placeholder="Passwort ">
                       </div>

                       <br>

                       <div class="form-group">
                           <label for="passwordRepeat ">Passwort wiederholen*:</label>
                           <input class="form-control " id="passwordRepeat " type="text " name="passwordRepeat" placeholder="Passwort wiederholen ">
                       </div>

                       <br>

                       <div class="form-group">
                           <label for="email ">E-Mail*:</label>
                           <input class="form-control " id="email " type="text " name="email " placeholder="E-Mail ">
                       </div>

                       <br>

                       <div class="form-group">
                           <button name="submit" class="submit-btn ">Registrieren </button>
                       </div>

                       <? if(isset($errMsg)) : ?>
                           <div class="error-message">
                               <?=$errMsg?>
                           </div>
                       <? endif; ?> 
               </form>  
                         
       </div> 
   </div>
           
</div>