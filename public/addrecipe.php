<?php include '../src/inc/header.php';?>

<form action="add_recipe.php" method="post" class="form addrecipe-form">
        <h1>Dodaj swój przepis</h1>
       
        <div class="input-control">
            <label for="email">Nazwa</label>
            <input type="text" name="nazwa" id="nazwa">
        </div>
        
        <div class="input-control">
            <label for="preptime">Czas przygotowania</label>
            <input type="text" name="preptime" id="preptime">
        </div>

        <div class="input-control">
            <label for="difficulty">Trudność</label>
            <input type="text" name="difficulty" id="difficulty">
        </div>

        <div class="input-control">
            <label for="category">Kategoria</label>
            <input type="text" name="category" id="category">
        </div>
        
        <div class="input-control">
            <label for="description">Opis</label>
            <input type="text" name="description" id="description">
        </div>

        <div class="input-control">
            <label for="photo">Zdjęcie</label>
            <input type="text" name="photo" id="photo">
        </div>

        <div class="btn-container">
            <button type="submit">Dodaj przepis</button>
        </div>
</form>

<?php include '../src/inc/footer.php';?>