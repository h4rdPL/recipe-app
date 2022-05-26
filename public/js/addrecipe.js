const range_input = document.getElementById("recipe-preptime");
let range_input_result = document.getElementById("recipe-preptime-value");

console.log(range_input.value);
range_input.addEventListener("change", (e) => {
    range_input_result.innerHTML = `${e.target.value} min`;
   
});


$(document).ready(function() {
           
    $("#ingredients").on('click', 'button', function(e){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'ingredientsinput.php',
            success: function(response) {
                $(".ingredients").append(response);
            }
        })
    })           
})  