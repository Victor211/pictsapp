
import { listarBarriosTbl, listarCiudades } from '../lib/definiciones.js';

document.addEventListener('DOMContentLoaded', function() {

    const id_ciudad=document.getElementById("id_ciudad")
    id_ciudad.addEventListener('change', ()=>{
        //console.log(id_ciudad.value)
        listarBarriosTbl(id_ciudad.value)
    });
});

const initForm=()=>{
    listarCiudades()
}

initForm()