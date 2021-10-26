const btn = document.getElementById("volver")

btn.addEventListener("click", () =>{
    let clave = prompt("ingrese su clave");
    if(clave == "12345"){
        window.location.href="../pages/homePage.php"

    }else{
        alert("clave incorrecta");
    }
})