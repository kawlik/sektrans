<?php

    /*
        1.  Tworzenie zapytania o zawartość podstrony
        2.  Obsługa rezultatów zapytania
    */


    $article = false;   //  deklaracja zmiennej przechowującej informacje o zawartości artykułu


    $article = $db->prepare('SELECT id, label, title, body, edited FROM pages WHERE id = :id');
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


<div class="container">

    <h2>Edytuj wybrany wpis</h2>
    <hr>

    <form class="form-rows" method="POST" action="<?php echo URL; ?>/admin/?action=edit">

        <!--    new page label  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-label">Nazwa wpisu</label>
        <input class="form-control form-label" id="form-label" name="form-label" type="text" value="<?php echo $article['label']; ?>" required>
        </div>

        <!--    new page title  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-title">Nazwa wpisu</label>
        <input class="form-control form-title" id="form-title" name="form-title" type="text" value="<?php echo $article['title']; ?>" required>
        </div>

        <!--    new page body   -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-body">Treść zapytania</label>
        <textarea class="form-control form-body" id="form-body" name="form-body" rows="12" required>
            <?php echo $article['body']; ?>
        </textarea>
        </div>

        <input type="hidden" name="form-id" value="<?php echo $article['id']; ?>">
        <button class="btn btn-success form-submit" type="button">Dodaj!</button>

    </form>


</div>