import{listarBarriosTbl,listarCiudades}from"../lib/definiciones.js";document.addEventListener("DOMContentLoaded",(function(){const i=document.getElementById("id_ciudad");i.addEventListener("change",(()=>{listarBarriosTbl(i.value)}))}));const initForm=()=>{listarCiudades()};listarCiudades();