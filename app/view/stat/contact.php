<?php require TEMP.'/menu.php'; ?>



<!--    standard site baner -->
<div class="baner baner-contact">
    <div class="baner-photo"></div>
    <div class="baner-text">Kontakt</div>
</div>



<!--    content container   -->
<div class="container">



    <!--    basic contaci info  -->
    <div class="contact-info">
        <span><i class='fas fa-phone-alt'></i> +48 693 355 760
        <br>Janusz Sekuła</span>
        <span><i class='fas fa-phone-alt'></i> +48 607 860 968
        <br>Robert Sekuła</span>
        <span><i class='far fa-envelope-open'></i> mail@mail.pl</span>
    </div>


    <!--    important hr        -->
    <hr>


    <!--    social media links  -->
    <div class="social-info">
        <hr>
        <div class="social-link"><a target="blank" href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></div>
        <div class="social-link"><a target="blank" href="https://instagram.com"><i class="fab fa-instagram"></i></a></div>
        <div class="social-link"><a target="blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></div>
        <hr>
    </div>


    <!--    important hr        -->
    <hr>


    <!--    contact form        -->
    <form class="form-rows contact-form" method="POST" action="<?php echo URL; ?>/admin/f_form.php">


        <!--    name surname    -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-name">Imię i nazwisko</label>
        <input class="form-control form-name" id="form-name" name="form-name" type="text" placeholder="np. Jan Kowalski" required>
        </div>


        <!--    mail & phone    -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-email">E-mail</label>
        <input class="form-control form-email" id="form-email" name="form-email" type="email" placeholder="np. j.kowal@mail.pl" required>
        </div>

        <div class="form-grup my-4">
        <label class="form-label" for="form-phone">Numer telefonu</label>
        <input class="form-control form-phone" id="form-phone" name="form-phone" type="text" placeholder="np. 789 123 456" required>
        </div>


        <!--    message         -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-body">Treść zapytania</label>
        <textarea class="form-control form-body" id="form-body" name="form-body" rows="12" required></textarea>
        </div>


        <!--    agreement       -->
        <div class="form-check my-4">
        <input class="form-check-input" type="checkbox" id="form-check"  required>
        <label class="form-check-label" for="form-check">Znam i akceptuję politykę prywatności.</label>
        </div>


        <!--    form submit     -->
        <button class="btn btn-success form-submit" type="submit">Dodaj!</button>


    <!--    end ofcontact form  -->
    </form>


<!--    end of container    -->
</div>