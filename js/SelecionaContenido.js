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

        if (e.target.id == `btnGuardarCancion${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "cancion";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        if (e.target.id == `btnGuardarAprendisaje${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "aprendizaje";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        if (e.target.id == `btnGuardarActividades${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "actividades";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        if (e.target.id == `btnGuardarCuentos${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "cuento";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        if (e.target.id == `btnGuardarIngles${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "ingles";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        if (e.target.id == `btnGuardarSeries${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "serie";
            guardarVideo(nombre, codigo, plataforma ,categoria)
        }
        


    };



})
