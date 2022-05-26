<?php 

    session_start();
    require __DIR__ . '/../src/addrecipe.php';
    include '../src/inc/header.php';

?>


<form action="addrecipe.php" method="post" class="form addrecipe-form" enctype="multipart/form-data">
        <h1>Dodaj swój przepis</h1>
       
        <div class="input-control">
            <label for="recipe-name">Nazwa</label>
            <input class="recipe-input" type="text" placeholder="Wpisz nazwę przepisu" name="recipe-name" id="recipe-name">
        </div>
        
        <div class="input-control">
            <label for="recipe-preptime">Czas przygotowania</label>
            <input type="range" id="recipe-preptime" name="recipe-preptime" min="1" value="60" max="120">
            <span class="recipe-input-result" id="recipe-preptime-value">
                60 min
            </span>
        </div>

        <div class="input-control">
            <label for="recipe-difficulty">Trudność przepisu</label>
            <select name="recipe-difficulty" 
            class="recipe-input" 
            id="recipe-difficulty">
                <option value="easy">Łatwy</option>
                <option value="medium">Średni</option>
                <option value="hard">Trudny</option>
            </select>
        </div>

        <div class="input-control" id="ingredients">
            <label for="recipe-ingredients">Składniki</label>

            <div class="ingredients">
                <div class="ingredient">
                    <input class="recipe-input" type="text" name="recipe-ingredient[]" id="recipe-ingredient" placeholder="Wpisz składnik">
                
                    <input class="recipe-input" type="number" name="recipe-quantity[]" id="recipe-quantity" placeholder="Podaj ilość" min="1" max="10000">
                
                    <input class="recipe-input" type="text" name="recipe-unit[]" id="recipe-unit" placeholder="Podaj jednostkę miary">
                </div>
            </div>

            <button id="ingredient-btn">
                Dodaj składnik
            </button>
        
        </div>
        
        <div class="input-control">
            <label for="recipe-description">Opis</label>
            <textarea name="recipe-description" 
            class="recipe-input-textarea" id="recipe-description" placeholder="Opisz przepis..." cols="30" rows="10"></textarea>
        </div>

        <div class="input-control">
            Zdjęcie
            <div class="preview"></div>
            <input type="file" name="recipe-photo" id="fileToUpload">
        </div>

        <div class="btn-container">
            <button name="add-recipe" type="submit">Dodaj przepis</button>
        </div>
</form>

<script src="js/addrecipe.js"></script>

<?php include '../src/inc/footer.php';?>