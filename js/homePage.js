const btnBusqueda = document.getElementById("buscadorContenido")
const link = document.getElementById("link")
btnBusqueda.addEventListener("click", (e) =>{
    e.preventDefault()
    let reproductor = document.getElementById("recomendacion1");
    let iframe1 = document.getElementById("iframe1")
    let iframe2 = document.getElementById("iframe2")
    let iframe3 = document.getElementById("iframe3")
    let iframe4 = document.getElementById("iframe4")
    iframe1.src = link.value
    iframe2.src = link.value
    iframe3.src = link.value
    iframe4.src = link.value


})


document.addEventListener("DOMContentLoaded", () => {
    console.log("remplazar en caso de que lo nesecite");
    
})


