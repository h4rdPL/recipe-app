<?php
    echo ' <div class="ingredient">
    <input class="recipe-input" type="text" name="recipe-ingredient[]" id="recipe-ingredient" placeholder="Wpisz składnik">
    
    <input class="recipe-input" type="number" name="recipe-quantity[]" id="recipe-quantity" placeholder="Podaj ilość" min="1" max="10000">
    
    <input class="recipe-input" type="text" name="recipe-unit[]" id="recipe-unit" placeholder="Podaj jednostkę miary">
    </div>';
?>