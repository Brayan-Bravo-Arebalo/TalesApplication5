const contenido = document.getElementById("contenido");
const contarIframe = contenido.querySelectorAll("iframe");
contenido.addEventListener("click", (e) => {
    let cantidad = contarIframe.length;
    for (let i = 0; i < cantidad; i++) {

        if (e.target.id == `btnVisualizar${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            visualizarVideo(nombre, codigo, plataforma);


        }

        if (e.target.id == `btnEliminar${i}`) {
            alert("dio click en eliminar")



        }

        if (e.target.id == `btnGuardar${i}`) {
            let input1 = document.getElementById("nombrefForm");
            let input2 = document.getElementById("codigoForm");
            let input3 = document.getElementById("plataformaForm");
            let input4 = document.getElementById("clasificacion");
            let btn = document.getElementById("btnFantasma");


            input1.value = nombre;
            input2.value = codigo;
            input3.value = plataforma;
            input4.value = ret;
            btn.click();


        }


    };



})
