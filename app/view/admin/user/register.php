<!--    login container -->
<div class="container">
<div class="row">


<!--    login form      -->
<form class="col-md-6" method="POST" action="<?php echo URL; ?>/admin/f_register.php">


    <!--    login input     -->
    <div class="form-grup my-4">
    <label class="form-label" for="form-login">Login użytkownika</label>
    <input class="form-control" id="form-login" name="form-login" type="text" required>
    </div>

    <!--    password input  -->
    <div class="form-grup my-4">
    <label class="form-label" for="form-haslo">Hasło użytkownika</label>
    <input class="form-control" id="form-haslo" name="form-haslo" type="password" required>
    </div>

    <!--    name input      -->
    <div class="form-grup my-4">
    <label class="form-label" for="form-name">Imię</label>
    <input class="form-control" id="form-name" name="form-name" type="text" required>
    </div>

    <!--    surname input  -->
    <div class="form-grup my-4">
    <label class="form-label" for="form-surname">Nazwisko</label>
    <input class="form-control" id="form-surname" name="form-surname" type="text" required>
    </div>


    <input class="btn btn-success" type="submit" value="Dodaj">


<!--    end of form     -->
</form>


<!--    container end   -->
</div>
</div>