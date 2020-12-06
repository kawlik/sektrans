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
    <form class="form-rows">


        <!--    name surname    -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-name">Imię i nazwisko</label>
        <input class="form-control" id="form-name" type="text" placeholder="np. Jan Kowalski">
        </div>


        <!--    mail & phone    -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-email">E-mail</label>
        <input class="form-control" id="form-email" type="email" placeholder="np. j.kowal@mail.pl">
        </div>

        <div class="form-grup my-4">
        <label class="form-label" for="form-phone">Numer telefonu</label>
        <input class="form-control" id="form-phone" type="text" placeholder="np. 789 123 456">
        </div>


        <!--    message         -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-mess">Treść zapytania</label>
        <textarea class="form-control" id="form-mess" rows="12"></textarea>
        </div>


        <!--    agreement       -->
        <div class="form-check my-4">
        <input class="form-check-input" type="checkbox" id="form-check">
        <label class="form-check-label" for="form-check">Znam i akceptuję politykę prywatności.</label>
        </div>


        <!--    form submit     -->
        <button type="submit" class="btn btn-primary">Wyślij!</button>


    <!--    end ofcontact form  -->
    </form>


<!--    end of container    -->
</div>