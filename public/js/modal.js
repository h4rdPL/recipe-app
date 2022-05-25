const btn = document.getElementById("edit_password");
const close_btn = document.getElementById("close");
const modal = document.getElementById("modal");

btn.addEventListener("click", () => {
   modal.style.display = "block"; 
});

close_btn.addEventListener("click", () => {
    modal.style.display = "none";
})



