const guardarVideo = (nombre, codigo, plataforma ,ret) => {
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


const visualizarVideo = (nombre, codigo, plataforma) => {
    let input1 = document.getElementById("nombrefForm2");
    let input2 = document.getElementById("codigoForm2");
    let input3 = document.getElementById("plataformaForm2");
    let btn = document.getElementById("btnFantasma2");


    console.log("dio click en visualizar");
    input1.value = nombre;
    input2.value = codigo;
    input3.value = plataforma;
    btn.click();

}



const eliminarVideo = () =>{

}


