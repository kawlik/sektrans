<?php

    /*
        1.  Tworzenie zapytania w sprawie dostępnych stron
        2.  Obsługa rezultatów zapytania
    */

    $pages = false; //  deklaracja zmiennej przechowującej informacje o dostępności stron
    $pages = $db->query('SELECT id, label, body, created, edited FROM pages ORDER BY id DESC LIMIT 20')->fetchAll(PDO::FETCH_ASSOC);


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
<div class="baner baner-list">
<div class="baner-photo"></div>
<div class="baner-text">Aktualności</div>
</div>



<!--    content container   -->
<div class="container">
<?php if(empty($pages)): ?>


<!--    no pages found      -->
<h2>Brak wpisów.</h2>



<?php else: ?>


<!--    some pages found    -->
<div class="page-list">
<?php foreach($pages as $page): ?>


    <!--    list elem   -->
    <div class="list-elem">

    <!--    list elem title & info  -->
    <h2 class="page-list-label"><?php echo e($page['label']); ?></h2>
    <span class="page-list-time-c breadcrumb">Dodano <?php echo e($page['created']); ?></span>

    <!--    if avalibe edited info  -->
    <?php if($page['edited']): ?><span class="page-list-time-e breadcrumb">Edytowano <?php echo e($page['edited']); ?></span><?php endif; ?>
    <hr>

    <!--    list elem link for view -->
    <a class="page-list-link btn btn-success" href="<?php echo URL.'/?view=page&page='.e($page['id']); ?>">Czytaj więcej</a>
    </div>



<?php endforeach; ?>
<!--    end of pages list   -->
</div>



<?php endif; ?>
<!--    end of container    -->
</div>