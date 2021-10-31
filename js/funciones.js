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


const visualizarVideo = (nombre, codigo, plataforma, nombre1, codigo1, plataforma1, nombre2, codigo2, plataforma2, nombre3, codigo3, plataforma3) => {
    let input1 = document.getElementById("nombrefForm2");
    let input2 = document.getElementById("codigoForm2");
    let input3 = document.getElementById("plataformaForm2");
    console.log(nombre1,codigo1,plataforma1)

    let input4 = document.getElementById("nombrefForm3");
    let input5 = document.getElementById("codigoForm3");
    let input6 = document.getElementById("plataformaForm3");

    let input7 = document.getElementById("nombrefForm4");
    let input8 = document.getElementById("codigoForm4");
    let input9 = document.getElementById("plataformaForm4");

    let input10 = document.getElementById("nombrefForm5");
    let input11 = document.getElementById("codigoForm5");
    let input12 = document.getElementById("plataformaForm5");


    let btn = document.getElementById("btnFantasma2");


    input1.value = nombre;
    input2.value = codigo;
    input3.value = plataforma;

    input4.value = nombre1;
    input5.value = codigo1;
    input6.value = plataforma1;
    input7.value = nombre2;
    input8.value = codigo2;
    input9.value = plataforma2;
    input10.value = nombre3;
    input11.value = codigo3;
    input12.value = plataforma3;

    console.log(codigo1,codigo2,codigo3)
    btn.click();
    

}



const eliminarVideo = (id) =>{
    let input1 = document.getElementById("idEliminar");
    let btnEliminar = document.getElementById("btnEliminarForm");
    input1.value = id;
    btnEliminar.click();

}


