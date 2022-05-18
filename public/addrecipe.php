<?php 

session_start();
include '../src/inc/header.php';

?>

<form action="add_recipe.php" method="post" class="form addrecipe-form">
        <h1>Dodaj swój przepis</h1>
       
        <div class="input-control">
            <label for="email">Nazwa</label>
            <input type="text" name="nazwa" id="nazwa">
        </div>
        
        <div class="input-control">
            <label for="preptime">Czas przygotowania</label>
            <select style="width:100%; cursor:pointer;" name="preptime" id="preptime">
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
                <option value="60">60</option>
            </select>

        </div>

        <div class="input-control">
            <label for="difficulty">Trudność</label>
            <select style="width:100%; cursor:pointer;" name="difficulty" id="difficulty">
                <option value="Łatwy">Łatwy</option>
                <option value="Średni">Średni</option>
                <option value="Trudny">Trudny</option>
            </select>

        </div>

        <div class="input-control">
            <label for="category">Kategoria</label>
            <select style="width:100%; cursor:pointer;" name="category" id="category">
                <option value="Śniadanie">Śniadanie</option>
                <option value="Obiad">Obiad</option>
                <option value="Kolacja">Kolacja</option>
                <option value="Deser">Deser</option>
            </select>
        </div>
        
        <div class="input-control">
            <label for="description">Opis</label>
            <textarea name="description" id="description" placeholder="Napisz swój opis..." cols="30" rows="10"></textarea>
        </div>

        <div class="input-control">
            <label for="photo">Zdjęcie</label>
            <button style="cursor: pointer;" type="submit" name="photo" id="photo">
                Dodaj zdjęcie
            </button>
        </div>

        <div class="btn-container">
            <button type="submit">Dodaj przepis</button>
        </div>
</form>

<?php include '../src/inc/footer.php';?>