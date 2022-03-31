const form = document.getElementById("postulacion")
const nombre = document.getElementById("nombre")
const correo = document.getElementById("correo")
const telefono = document.getElementById("telefono")
const puesto_solicitado = document.getElementById("puesto_solicitado")
const localidad = document.getElementById("localidad")
const experiencia = document.getElementById("experiencia")
const cv = document.getElementById("cv")
const letras = new RegExp('^[a-zA-Z\s]{2,254}');
let regexEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

form.addEventListener("submit", e=>{
    if(nombre.value.length == 0){
        alert("Agrega tu nombre")
        e.preventDefault()
        return false;
    }
    if(correo.value.length == 0){
        alert("Agrega tu correo")
        e.preventDefault()
        return false;
    }
    if(telefono.value.length == 0){
        alert("Agrega tu telefono")
        e.preventDefault()
        return false;
    }
    if(puesto_solicitado.value.length == 0){
        alert("Agrega un puesto solicitado")
        e.preventDefault()
        return false;
    }
    if(localidad.value.length == 0){
        alert("Agrega tu localidad")
        e.preventDefault()
        return false;
    }
    if(experiencia.value.length == 0){
        alert("Agrega tu experiencia")
        e.preventDefault()
        return false;
    }
    if(cv.value.length == 0){
        alert("Agrega tu cv")
        e.preventDefault()
        return false;
    }
    if(!letras.test(nombre.value)){
        alert("El nombre solo debe contener letras")
        e.preventDefault()
        return false;
    }if(!regexEmail.test(correo.value)){
        alert("El correo es incorrecto")
        e.preventDefault()
        return false;
    } else{
            document.form.submit()     
    }
})

