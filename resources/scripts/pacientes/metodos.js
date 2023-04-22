

let formulario = $("#formulario")
let principal = $("#principal")

document.getElementById("BtnMostrarFormulario").onclick = function () {
    principal.hide()
    formulario.show()
    $("#btnGuardarRegistro").show();
    $("#btnActualizarRegistro").hide();
}

const guardarRegistro=()=>{
    if(es_paciente.value==''){
        Swal.fire(
            'Error',
            'Debe definir si la Persona es un Paciente o un Tutor!',
            'error'
        )
    }else{
        if (controlFormulario() == true) {
          Swal.fire(
            'Error',
            'En proceso de desarrollo!',
            'warning'
          )

            /* parametros = {
            }
            axios.post('guardarpacientestutores', parametros)
            .then(function (response) {
                console.log(response.data)
    
            })
            .catch(function (error) {
                console.log(error);
            }) */
        } else {
            Swal.fire(
                "Error",
                "Existen campos obligatorios para poder registrar correctamente",
                "error"
            );
        }
    }
}

const editarRegistro=()=>{
  Swal.fire(
    'Error',
    'En proceso de desarrollo!',
    'warning'
  )
  
    /* parametros = { }
    axios.put('actualizarpacientestutores', parametros)
    .then(function (response) {
        console.log(response.data)
    })
    .catch(function (error) {
        console.log(error);
    }) */

}

const limpiarFormulario=()=>{
    principal.show();
    formulario.hide();

    
    $("#tutores").hide();
    $("#vinculo").hide();

    $("#paciente").hide();
    $("#tutor").hide();

    $("#btnGuardarRegistro").show();
    $("#btnActualizarRegistro").hide();

    nombres_apellidos.value=''
    $("#id_ciudad").val("");
    $("#id_ciudad").selectpicker("render");
    $("#id_barrio").val("");
    $("#id_barrio").selectpicker("render");
    $("#id_tutor").val("");
    $("#id_tutor").selectpicker("render");
    ci_persona.value=''

    edad.value=''
    $("#vinculo_tutor").val("");
    $("#vinculo_tutor").selectpicker("render");

    direccion.value=''
    telefono.value=''

    es_paciente.value = '';
    es_paciente.checked = false;
}

const editar=(id_persona)=>{
     principal.hide()
     formulario.show()
     $("#btnGuardarRegistro").hide();
     $("#btnActualizarRegistro").show();
    
     //         listarpacientestutoresxid/2
     axios.get('listarpacientestutoresxid/'+ id_persona)
     .then(function (response) {
         let pacientestutores= response.data[0] //entramos en cero
         console.log(pacientestutores)

         nombres_apellidos.value=pacientestutores.nombres_apellidos
         $("#id_ciudad").val(pacientestutores.id_ciudad);
         $("#id_ciudad").selectpicker("render");

         cargarBarrios(pacientestutores.id_ciudad)

         setTimeout(function(){
          $("#id_barrio").val(pacientestutores.id_barrio);
          $("#id_barrio").selectpicker("render");
          }, 700);


        if (pacientestutores.id_tutor==null || pacientestutores.id_tutor=='') {
          $("#tutores").hide();
          $("#vinculo").hide();
          
          $("#paciente").hide();
          $("#tutor").show();
        }else{
          $("#tutores").show();
          $("#vinculo").show();

          $("#paciente").show();
          $("#tutor").hide();
              
           $("#id_tutor").val(pacientestutores.id_tutor);
           $("#id_tutor").selectpicker("render");

           $("#vinculo_tutor").val(pacientestutores.id_vinculo);
            $("#vinculo_tutor").selectpicker("render");
         
         }

         ci_persona.value=pacientestutores.ci_persona
         edad.value=pacientestutores.edad

         //vinculo_tutor.value=pacientestutores.vinculo_tutor
         direccion.value=pacientestutores.direccion
         telefono.value=pacientestutores.telefono
     
         if (pacientestutores.es_paciente == 1) {
          es_paciente.checked = true;
        } else {
          es_paciente.checked = false;
        }
  

     })
     .catch(function (error) {
         console.log(error);
     })
 
}

const desactivar=(id_persona)=>{
     console.log(id_persona)
     Swal.fire(
         'Usuario!',
         'Por el momento no se puede desactivar la Persona!',
         'warning'
     )
}

const activar=(id_persona)=>{
     console.log(id_persona)
     Swal.fire(
         'Usuario!',
         'Por el momento no se puede activar la Persona!',
         'warning'
     )
}

const controlFormulario = () => {
    error = 0;
    if (nombres_apellidos.value == "") {
      error = 1;
      document.getElementById("nombres_apellidos_ck").style.visibility = "visible";
      nombres_apellidos.style.border = "0.1px solid #f1646c";
    } else {
      nombres_apellidos.style = "";
      document.getElementById("nombres_apellidos_ck").style.visibility = "hidden";
      error = 0;
    }
  
    if (id_ciudad.value == "") {
      error = 1;
      document.getElementById("id_ciudad_ck").style.visibility = "visible";
      sele = document.querySelectorAll(".dropdown-toggle");
      sele.forEach(function (selectt) {
        if (selectt.dataset.id == "id_ciudad") {
          selectt.style.border = "0.1px solid #f1646c";
        }
      });
    } else {
      sele = document.querySelectorAll(".dropdown-toggle");
      sele.forEach(function (selectt) {
        if (selectt.dataset.id == "id_ciudad") {
          selectt.style = "";
        }
      });
      document.getElementById("id_ciudad_ck").style.visibility = "hidden";
      error = 0;
    }
  
    if (id_barrio.value == "") {
        error = 1;
        document.getElementById("id_barrio_ck").style.visibility = "visible";
        sele = document.querySelectorAll(".dropdown-toggle");
        sele.forEach(function (selectt) {
          if (selectt.dataset.id == "id_barrio") {
            selectt.style.border = "0.1px solid #f1646c";
          }
        });
      } else {
        sele = document.querySelectorAll(".dropdown-toggle");
        sele.forEach(function (selectt) {
          if (selectt.dataset.id == "id_barrio") {
            selectt.style = "";
          }
        });
        document.getElementById("id_barrio_ck").style.visibility = "hidden";
        error = 0;
      }

    if (ci_persona.value == "") {
      error = 1;
      document.getElementById("ci_persona_ck").style.visibility = "visible";
      ci_persona.style.border = "0.1px solid #f1646c";
    } else {
      ci_persona.style = "";
      document.getElementById("ci_persona_ck").style.visibility = "hidden";
      error = 0;
    }
  

    if (edad.value == "") {
      error = 1;
      document.getElementById("edad_ck").style.visibility = "visible";
      edad.style.border = "0.1px solid #f1646c";
    } else {
      edad.style = "";
      document.getElementById("edad_ck").style.visibility = "hidden";
      error = 0;
    }
  
    if (direccion.value == "") {
      error = 1;
      document.getElementById("direccion_ck").style.visibility = "visible";
      direccion.style.border = "0.1px solid #f1646c";
    } else {
      direccion.style = "";
      //ocultar errores de controles en campos
      document.getElementById("direccion_ck").style.visibility = "hidden";
      error = 0;
    }

    if (telefono.value == "") {
        error = 1;
        document.getElementById("telefono_ck").style.visibility = "visible";
        telefono.style.border = "0.1px solid #f1646c";
      } else {
        telefono.style = "";
        //ocultar errores de controles en campos
        document.getElementById("telefono_ck").style.visibility = "hidden";
        error = 0;
    }

    if (error == 0) {
      return true;
    } else {
      alertify.error("FALTA DATOS PARA REGISTRO!");
      return false;
    }
};

//REVISAR ERROR DEL IMPORT, METODO REDUNDANTE
const cargarBarrios=(id_ciudad)=>{
  axios.get('listarbarriosxidciudad/'+id_ciudad)
  .then(function (response) {
      let barrios=response.data
      barrios.forEach(barrio=>{
          document.getElementById("id_barrio").innerHTML += "<option value='"+barrio.id_barrio+"'>"+barrio.nombre+"</option>";           
      })
      $('#id_barrio').selectpicker('refresh')
      $('#id_barrio').val('');
      $('#id_barrio').selectpicker('render');
  })
  .catch(function (error) {
    console.log(error);
  })
}
