<?php

    /*
        1.  Tworzenie zapytania o zawartość podstrony
        2.  Obsługa rezultatów zapytania
    */


    $article = false;   //  deklaracja zmiennej przechowującej informacje o zawartości artykułu


    $article = $db->prepare('SELECT label, title, body, created, edited FROM pages WHERE id = :id');
    $article->execute(['id' => $_GET['page']]);

    if(!$article = $article->fetch(PDO::FETCH_ASSOC)) {
        require ERR.'/error.php';
        require TEMP.'/footer.php';
        exit;
    }


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
<div class="baner baner-page">
    <div class="baner-photo"></div>
    <div class="baner-text"><?php echo e($article['label']); ?></div>
</div>



<!--    content container   -->
<div class="container">
<?php if(empty($article)): ?>


<!--    page not found      -->
<h2>Podany wpis nie istnieje.</h2>



<?php else: ?>

    <!--    article container   -->
    <div class="page-article">


    <!--    article title       -->
    <h1 class="page-article-title"><?php echo e($article['title']); ?></h1>
    <hr>


    <!--    article body        -->
    <div class="page-article-body"><?php echo e($article['body']); ?></div>
    <hr>


    <!--    article info        -->
    <span class="page-article-time-c breadcrumb">Dodano <?php echo e($article['created']); ?></span>
    <?php if($article['edited']): ?><span class="page-article-time-e breadcrumb">Edytowano <?php echo e($article['edited']); ?></span><?php endif; ?>
    </div>


<?php endif; ?>
<!--    end of container    -->
</div>