const range_input = document.getElementById("recipe-preptime");
let range_input_result = document.getElementById("recipe-preptime-value");


range_input.addEventListener("change", (e) => {
    range_input_result.innerHTML = `${e.target.value} min`;
   
});
