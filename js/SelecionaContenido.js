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

            let videoAguardar1 ="";
            let nombre1 ="";
            let codigo1 ="";
            let plataforma1 ="";

            let videoAguardar2 ="";
            let nombre2 ="";
            let codigo2 ="";
            let plataforma2 ="";

            let videoAguardar3 ="";
            let nombre3 ="";
            let codigo3 ="";
            let plataforma3 ="";

            let p = i+1
            let p1=i+2;
            let p2 = i+3;
            if (p < cantidad) {
                
                videoAguardar1 = document.getElementById(`iframe${p}`);
                nombre1 = document.getElementById(`nombre${p}`).textContent;
                codigo1 = videoAguardar1.src;
                plataforma1 = "youtube";
                

            } 

            if (p1 < cantidad) {
                
                videoAguardar2 = document.getElementById(`iframe${p1}`);
                nombre2 = document.getElementById(`nombre${p1}`).textContent;
                codigo2 = videoAguardar2.src;
                plataforma2 = "youtube";
                

            } 

            if (p2 < cantidad) {
                
                videoAguardar3 = document.getElementById(`iframe${p2}`);
                nombre3 = document.getElementById(`nombre${p2}`).textContent;
                codigo3 = videoAguardar3.src;
                plataforma3 = "youtube";
                

            }

            






            visualizarVideo(nombre, codigo, plataforma, nombre1, codigo1, plataforma1, nombre2, codigo2, plataforma2, nombre3, codigo3, plataforma3);


        }

        if (e.target.id == `btnEliminar${i}`) {
            let id = document.getElementById(`id${i}`).textContent;

            eliminarVideo(id)



        }

        if (e.target.id == `btnGuardarCancion${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "cancion";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }
        if (e.target.id == `btnGuardarAprendisaje${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "aprendizaje";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }
        if (e.target.id == `btnGuardarActividades${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "actividades";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }
        if (e.target.id == `btnGuardarCuentos${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "cuento";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }
        if (e.target.id == `btnGuardarIngles${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "ingles";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }
        if (e.target.id == `btnGuardarSeries${i}`) {
            let videoAguardar = document.getElementById(`iframe${i}`);
            let nombre = document.getElementById(`nombre${i}`).textContent;
            let codigo = videoAguardar.src;
            let plataforma = "youtube";
            let categoria = "serie";
            guardarVideo(nombre, codigo, plataforma, categoria)
        }



    };



})