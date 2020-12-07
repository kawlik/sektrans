<div class="container">

    <h2>Dodaj nowy wpis</h2>
    <hr>

    <form class="form-rows" method="POST" action="<?php echo URL; ?>/admin/?action=add">

        <!--    new page label  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-label">Nazwa wpisu</label>
        <input class="form-control form-label" id="form-label" name="form-label" type="text" required>
        </div>

        <!--    new page title  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-title">Nazwa wpisu</label>
        <input class="form-control form-title" id="form-title" name="form-title" type="text" required>
        </div>

        <!--    new page body   -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-body">Treść zapytania</label>
        <textarea class="form-control form-body" id="form-body" name="form-body" rows="12" required></textarea>
        </div>


        <button class="btn btn-success form-submit" type="button">Dodaj!</button>

    </form>


</div>