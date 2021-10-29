const clave = document.getElementById("password");
const btnLogin = document.getElementById("btnLogin");
const login = () => {

    let clave2 = document.getElementById("password2")
    clave2.value = md5(clave.value)
    
    
}