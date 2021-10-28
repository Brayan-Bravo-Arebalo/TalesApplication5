const string = document.querySelectorAll("div")[0].textContent;

const json = string;
const boton = document.getElementById("btnFantasma2");
const input = document.getElementById("objeto");
document.addEventListener("DOMContentLoaded", () => {
    
    input.value = json;
    daclick()
    
})

const daclick = () => {boton.click() }