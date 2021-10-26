const btnBusqueda = document.getElementById("buscadorContenido")
const link = document.getElementById("link")
btnBusqueda.addEventListener("click", (e) =>{
    e.preventDefault()
    let reproductor = document.getElementById("iframeBusqueda");
    let valorurl = link.value
    reproductor.src = youtube_parser(valorurl);

})

function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}

document.addEventListener("DOMContentLoaded", () => {
    console.log("remplazar en caso de que lo nesecite");
    
})


const busquedaYoutube = document.getElementById("busquedaYoutube");

busquedaYoutube.addEventListener("click", (e) => {
    e.target
    if(e.target.id === "guardar1"){
        let videoAguardar = document.getElementById("iframe1");
        let nombre = document.getElementById("nombre1").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        guardarVideo(nombre,codigo,plataforma);
    }

    if(e.target.id === "guardar2"){
        let videoAguardar = document.getElementById("iframe2");
        let nombre = document.getElementById("nombre2").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        guardarVideo(nombre,codigo,plataforma);
    }

    if(e.target.id === "guardar3"){
        let videoAguardar = document.getElementById("iframe3");
        let nombre = document.getElementById("nombre3").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        guardarVideo(nombre,codigo,plataforma);
    }
    if(e.target.id === "guardar4"){
        let videoAguardar = document.getElementById("iframe4");
        let nombre = document.getElementById("nombre4").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        guardarVideo(nombre,codigo,plataforma);
    }
    if(e.target.id === "guardar5"){
        let videoAguardar = document.getElementById("iframe5");
        let nombre = document.getElementById("nombre5").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        guardarVideo(nombre,codigo,plataforma);
    }
    

    if(e.target.id === "visualizar1"){
        let videoAguardar = document.getElementById("iframe1");
        let nombre = document.getElementById("nombre1").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        visualizarVideo(nombre,codigo,plataforma);
    }

    if(e.target.id === "visualizar2"){
        let videoAguardar = document.getElementById("iframe2");
        let nombre = document.getElementById("nombre2").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        visualizarVideo(nombre,codigo,plataforma);
    }

    if(e.target.id === "visualizar3"){
        let videoAguardar = document.getElementById("iframe3");
        let nombre = document.getElementById("nombre3").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        visualizarVideo(nombre,codigo,plataforma);
    }
    if(e.target.id === "visualizar4"){
        let videoAguardar = document.getElementById("iframe4");
        let nombre = document.getElementById("nombre4").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        visualizarVideo(nombre,codigo,plataforma);
    }
    if(e.target.id === "visualizar5"){
        let videoAguardar = document.getElementById("iframe5");
        let nombre = document.getElementById("nombre5").textContent;
        let codigo = videoAguardar.src;
        let plataforma = "youtube";
        visualizarVideo(nombre,codigo,plataforma);
    }
    

    
})


const guardarVideo = (nombre,codigo,plataforma) =>{
    let input1 = document.getElementById("nombrefForm");
    let input2 = document.getElementById("codigoForm");
    let input3 = document.getElementById("plataformaForm");
    let btn = document.getElementById("btnFantasma");

    input1.value=nombre;
    input2.value=codigo;
    input3.value=plataforma;
    btn.click();
    

}


const visualizarVideo = (nombre,codigo,plataforma) =>{
    let input1 = document.getElementById("nombrefForm2");
    let input2 = document.getElementById("codigoForm2");
    let input3 = document.getElementById("plataformaForm2");
    let btn = document.getElementById("btnFantasma2");

    console.log("dio click en visualizar");
    input1.value=nombre;
    input2.value=codigo;
    input3.value=plataforma;
    btn.click();

}




