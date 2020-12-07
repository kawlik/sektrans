<?php

    /*
        1.  Tworzenie zapytania w sprawie dostępnych formularzy
        2.  Obsługa rezultatów zapytania
    */

    $forms = false; //  deklaracja zmiennej przechowującej informacje o dostępności formularzy
    $forms = $db->query('SELECT id, name, email, phone, body, added FROM forms ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);


    /*
        Poniżej wykonanie odpowiednich opcji z kodu.
        Wersja tymczasowa - docelowo:

            Docelowo cały kod w tym miejscu ma zostać zastapiony
            przez opdpowiednią klasę, lub ma być generowny bezpośrednio
            przez kod JavaScript.

            Edit 30.11.2020
            Jednak JavaScript, podobnie jak w przypadku slidera.
    */
?>



<!--    standar site baner  -->
<div class="baner baner-admin">
<div class="baner-photo"></div>
<div class="baner-text">Administracja</div>
</div>



<!--    content container   -->
<div class="container">
<?php if(empty($forms)): ?>


<!--    no forms found      -->
<h2>Brak formularzy.</h2>



<?php else: ?>


<!--    some forms found    -->
<div class="forms-list">
<?php foreach($forms as $form): ?>


    <!--    form elem           -->
    <div class="forms-list-elem">

    <!--    form elem data      -->
    <p class="lead elem-name"><?php echo $form['name']; ?></p>
    <p class="lead elem-email"><?php echo $form['email']; ?></p>
    <p class="lead elem-phone"><?php echo $form['phone']; ?></p>
    <hr>

    <!--    form elem time      -->
    <span class="page-article-time-c breadcrumb">Dodano <?php echo e($form['added']); ?></span>
    <?php if($form['answered']): ?><span class="page-article-time-e breadcrumb">Odpowiedziano <?php echo e($form['answered']); ?></span><?php endif; ?>

    <button class="btn btn-info elem-toggle" type="button"><i class="far fa-caret-square-down"></i></button>
    <div class="lead elem-body"><?php echo $form['body']; ?></div>


    </div>



<?php endforeach; ?>
<!--    end of pages list   -->
</div>



<?php endif; ?>
<!--    end of container    -->
</div>