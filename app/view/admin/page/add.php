<?php require TEMP.'/header.php'; ?>
<div class="container">

    <h2>Dodaj nowy wpis</h2>
    <hr>

    <form method="POST" action="<?php echo URL; ?>/admin/?action=add">

        <!--    new page label  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-label">Nazwa wpisu</label>
        <input class="form-control" id="form-label" name="form-label" type="text">
        </div>

        <!--    new page title  -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-title">Nazwa wpisu</label>
        <input class="form-control" id="form-title" name="form-title" type="text">
        </div>

        <!--    new page body   -->
        <div class="form-grup my-4">
        <label class="form-label" for="form-body">Treść zapytania</label>
        <textarea class="form-control" id="form-body" name="form-body" rows="12"></textarea>
        </div>


        <input class="btn btn-success" type="submit" value="Dodaj">

    </form>


</div>
<?php require TEMP.'/footer.php'; ?>