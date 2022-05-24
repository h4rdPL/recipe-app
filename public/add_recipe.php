<?php 

    session_start();
    require __DIR__ . '/../src/add_recipe.php';
    include '../src/inc/header.php';

?>

<form action="add_recipe.php" method="post" class="form addrecipe-form">
        <h1>Dodaj swój przepis</h1>
       
        <div class="input-control">
            <label for="recipe-name">Nazwa</label>
            <input type="text" name="recipe-name" id="recipe-name">
        </div>
        
        <div class="input-control">
            <label for="recipe-preptime">Czas przygotowania</label>
            <input type="range" id="recipe-preptime" name="recipe-preptime" min="1" max="120">

        </div>

        <div class="input-control">
            <label for="recipe-difficulty">Trudność przepisu</label>
            <select name="recipe-difficulty" id="recipe-difficulty">
                <option value="easy">Łatwy</option>
                <option value="medium">Średni</option>
                <option value="hard">Trudny</option>
            </select>
          

        </div>

        <div class="input-control">
            <label for="recipe-ingredients">Składniki</label>
            <input type="text" name="recipe-ingredients" id="recipe-ingredients" placeholder="Wpisz pierwszy składnik">
            <input type="number" name="recipe-quantity" id="recipe-quantity" placeholder="Podaj ilość" min="1" max="10000">
            <input type="text" name="recipe-unit" id="recipe-unit" placeholder="Podaj jednostkę miary">
            <button class="ingredients-btn">
                Dodaj składnik
            </button>
        </div>
        
        <div class="input-control">
            <label for="recipe-description">Opis</label>
            <textarea name="recipe-description" id="recipe-description" placeholder="Opisz przepis..." cols="30" rows="10"></textarea>
        </div>

        <div class="input-control">
            <label for="recipe-photo">Zdjęcie</label>
            <input type="file" id="recipe-photo" name="recipe-photo">
            <button type="submit" name="recipe-photo">
                Dodaj zdjęcie
            </button>
        </div>

        <div class="btn-container">
            <button name="add-recipe" type="submit">Dodaj przepis</button>
        </div>
</form>

<?php include '../src/inc/footer.php';?>