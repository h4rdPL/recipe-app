<?php 

    session_start();
    require __DIR__ . '/../src/add_recipe.php';
    include '../src/inc/header.php';

?>
<style>


input[type=range] {
  height: 34px;
  -webkit-appearance: none;
  margin: 10px 0;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 12px;
  cursor: pointer;
  animate: 0.2s;
  background: #ABD793;
  border-radius: 5px;
}
input[type=range]::-webkit-slider-thumb {
  height: 23px;
  width: 23px;
  border-radius: 23px;
  background: #559b61;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 12px;
  cursor: pointer;
  animate: 0.2s;
  border-radius: 1px;
  border: 1px solid #18D501;
}
input[type=range]::-moz-range-thumb {
  height: 23px;
  width: 23px;
  border-radius: 23px;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 12px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  border-radius: 2px;
}
input[type=range]::-ms-fill-upper {
  border-radius: 2px;
}
input[type=range]::-ms-thumb {
  margin-top: 1px;
  height: 23px;
  width: 23px;
  border-radius: 23px;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
}
input[type=range]:focus::-ms-fill-upper {
}
input[type=file] {
  margin: .5rem auto;
}

.ingredient-input {
  border-bottom: 2px solid #ABD793;
  padding: .5rem;
  margin: .5rem auto;
}

.ingredient-input-textarea {
  border: 2px solid #ABD793;
  width: 100%;
  padding: .5rem;
  margin-top:.5rem;
  border-radius:5px;
}

.ingredient-input-result {
  padding: .5rem;
}

.skladnik {
  background-color: #559b61;
  padding: 15px;
  /* border-radius: 50px; */
  margin: 10px;
  color: #fff;
  font-size: .8rem;
}

.result {
  display: flex;
  flex-wrap: wrap;
}

</style>
<form action="add_recipe.php" method="post" class="form addrecipe-form">
        <h1>Dodaj swój przepis</h1>
       
        <div class="input-control">
            <label  for="recipe-name">Nazwa</label>
            <input class="ingredient-input" type="text" placeholder="Jak nazywa się Twój przepis?" name="recipe-name" id="recipe-name">
        </div>
        
        <div class="input-control">
            <label for="recipe-preptime">Czas przygotowania</label>
            <input type="range" id="recipe-preptime" name="recipe-preptime" min="1" max="120">
            <span class="ingredient-input-result" id="recipe-preptime-value">
                61 min
            </span>
        </div>

        <div class="input-control">
            <label for="recipe-difficulty">Trudność przepisu</label>
            <select style="width:100%;" name="recipe-difficulty" class="ingredient-input" id="recipe-difficulty">
                <option value="easy">Łatwy</option>
                <option value="medium">Średni</option>
                <option value="hard">Trudny</option>
            </select>
          

        </div>

        <div class="input-control">
            <label for="recipe-ingredients">Składniki</label>
            <input class="ingredient-input" type="text" name="recipe-ingredients" id="recipe-ingredients" placeholder="Wpisz składnik">
            <input class="ingredient-input" type="number" name="recipe-quantity" id="recipe-quantity" placeholder="Podaj ilość" min="1" max="10000">
            <input class="ingredient-input" type="text" name="recipe-unit" id="recipe-unit" placeholder="Podaj jednostkę miary">



            <button class="ingredients-btn">
                Dodaj składnik
            </button>
            <div class="result">
            <span class="skladnik">
                Ogórek 50 gram
            </span>
            <span class="skladnik">
                Marchewka 2 szt
            </span>
            <span class="skladnik">
                Makaron 250 gram
            </span>
            <span class="skladnik">
                Makaron 250 gram
            </span>
            <span class="skladnik">
                Makaron 250 gram
            </span>

            
            </div>

        </div>
        
        <div class="input-control">
            <label for="recipe-description">Opis</label>
            <textarea name="recipe-description" class="ingredient-input-textarea" id="recipe-description" placeholder="Opisz przepis..." cols="30" rows="10"></textarea>
        </div>

        <div class="input-control">
            <label for="recipe-photo">Zdjęcie</label>
            <input type="file" id="recipe-photo" name="recipe-photo">
        </div>

            <button class="btn-container" name="add_recipe">
                Dodaj przepis
            </button>
</form>

<?php include '../src/inc/footer.php';?>

<script src="./js/input_range.js"></script>