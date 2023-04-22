document.addEventListener('DOMContentLoaded', function() {

    $('#tblEjecutandoEjercicios tbody').on('dblclick', 'tr', function () {

        let data = tblEjecutandoEjercicios.row( this ).data();
        let data_filas = tblEjecutandoEjercicios.rows().data();

        let fila = tblEjecutandoEjercicios.row( this ).index();
        //let respuestas = data[6]

        console.log(data)
       // console.log(respuestas)

        $('#ejerciciosmodal').modal('show')


        $('#ejerciciosmodal').on('hidden.bs.modal', function (e) {
        })
    });

    $('#ejerciciosmodal').on('hidden.bs.modal', function (e) {

    })
    const id_persona=document.getElementById("id_persona")
    id_persona.addEventListener('change', ()=>{
        if (id_persona.value=='') {
            Swal.fire(
                'Usuario!',
                'Debe seleccionar un paciente!',
                'warning'
              )
        } else {
            cargarEdad(id_persona.value)
        }
    });
    
});

let tblEjercicios = $("#tblEjercicios").DataTable({
    aProcessing: true,
    aServerSide: true,
    bFilter: true,
    scrollX: false,
    language: {
        //"url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    dom: "Bfrtip",
    buttons: [{
        extend: 'pdf',
        title: 'Listado de Ejercicios',
        filename: 'listado_ejercicios',
        text: 'Exportar a PDF <i class="fa fa-file-pdf"></i>'
    },
    {
        extend: 'excelHtml5',
        title: 'Listado de Ejercicios',
        filename: 'listado_ejercicios',
        text: 'Exportar a Excel <i class="fa fa-file-excel"></i>'
    }
    ],
    lengthChange: false,
    bDestroy: true,
    iDisplayLength: 10,
    order: [
        [0, "desc"]
    ]
});

let tblEjecutandoEjercicios = $("#tblEjecutandoEjercicios").DataTable({
    select: {
        //style: 'multi'
        style:    'os',
        selector: 'td:first-child'
    },
    aProcessing: true,
    aServerSide: true,
    bFilter: false,
    scrollX: false,
    paging: false,
    bInfo : false,
    language: {
        //"url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    dom: "Bfrtip",
    buttons: [],
    lengthChange: false,
    bDestroy: true,
    iDisplayLength: 10,
    order: [
        [0, "desc"]
    ],   
    columnDefs: [
        {
            visible: false,
            targets: 3,
        },{
            visible: false,
            targets: 4,
        },{
            visible: false,
            targets: 5,
        },{
            visible: false,
            targets: 6,
        }
    ],
});

const init=()=>{
    cargarPacientes()
    cargarTest()
}

let formulario = $("#formulario")
let principal = $("#principal")

document.getElementById("BtnMostrarFormulario").onclick = function () {
    principal.hide()
    formulario.show()
    $("#btnGuardarRegistro").show();
    $("#btnActualizarRegistro").hide();
    
}

const cargarTest=()=>{
    axios.get('listartiposevaluaciones')
    .then((response)=>{
            let tiposevaulaciones = response.data
            const myData = [
                {
                    n_id: -1,
                    n_title: 'PictsApp Tests',
                    n_parentid: 0,
                    n_checkStatus: false,
                }
            ]
            tiposevaulaciones.forEach((tipoev)=>{
                myData.push({
                    n_id: tipoev.id_tipo_evaluacion,
                    n_title: tipoev.tipo_evaluacion,
                    n_parentid: tipoev.padre,
                    n_checkStatus: false,
                    n_elements: tipoev.es_ejercicio==1?[{
                        
                        icon:tipoev.es_practica==1?'fas fa-broom':'far fa-check-circle',
                        title:tipoev.es_practica==1?'Iniciar Practica':'Es Evaluación',
                        onClick : (node) => {
                            let id_tipo_evaluacion=tipoev.id_tipo_evaluacion
                            console.log(id_tipo_evaluacion)
                            
                            switch (tipoev.nivel) {
                                case 1:
                                    if (id_persona.value=='') {
                                        Swal.fire(
                                            'Usuario!',
                                            'Debe seleccionar un paciente!',
                                            'warning'
                                          )
                                    } else {
                                        if (edad.value >=3 && edad.value<=4) {
                                            //console.log('Corresponde')
                                            cargarEjercicio(tipoev.id_tipo_evaluacion)
                                        } else {
                                            Swal.fire(
                                                'Usuario!',
                                                'Este nivel no corresponde a la edad del niño!',
                                                'error'
                                            )
                                        }
                                    }
                                break;

                                case 2:
                                    if (id_persona.value=='') {
                                        Swal.fire(
                                            'Usuario!',
                                            'Debe seleccionar un paciente!',
                                            'warning'
                                        )
                                    } else {
                                        if (edad.value >=5 && edad.value<=6) {
                                            //console.log('Corresponde')
                                            cargarEjercicio(tipoev.id_tipo_evaluacion)
                                        } else {
                                            Swal.fire(
                                                'Usuario!',
                                                'Este nivel no corresponde a la edad del niño!',
                                                'error'
                                            )
                                        } 
                                    }
                                break;

                                case 3:
                                    if (id_persona.value=='') {
                                        Swal.fire(
                                            'Usuario!',
                                            'Debe seleccionar un paciente!',
                                            'warning'
                                          )
                                    } else {
                                        if (edad.value >=7 && edad.value<=8) {
                                            //console.log('Corresponde')
                                            cargarEjercicio(tipoev.id_tipo_evaluacion)
                                        } else {
                                            Swal.fire(
                                                'Usuario!',
                                                'Este nivel no corresponde a la edad del niño!',
                                                'error'
                                            )
                                        }
                                    }
                                break;

                                default:
                                    if (id_persona.value=='') {
                                        Swal.fire(
                                            'Usuario!',
                                            'Debe seleccionar un paciente!',
                                            'warning'
                                          )
                                    } else {
                                        //console.log('case default')
                                        cargarEjercicio(tipoev.id_tipo_evaluacion)
                                    }
                                break;
                            }
                        }
                    }]:[]
                    
                })
            });
            //console.log(myData)
            setTimeout(function(){
                const tree = new PickleTree({
                    c_target: 'div_tree',
                    rowCreateCallback: (node) => {
                        //console.log(node)
                    },
                    switchCallback: (node) => {
                        //console.log(node)
                    },
                    drawCallback: () => {
                        //console.log('tree drawed ..');
                    },
                    dragCallback: (node) => {
                        //console.log(node);
                    },
                    dropCallback: (node) => {
                        //retuns node with new parent and old parent in 'old_parent' key!!
                        //console.log(node);
                    },
                    nodeRemoveCallback:(node)=>{
                        //returns removed node
                        //console.log(node);
                    },
                    c_config: {
                        //Comience como doblada o desplegada
                        foldedStatus: true,
                        //for logging
                        logMode: false,
                        //for switch element
                        switchMode: false,
                        //for automaticly select childs
                        autoChild: true,
                        //for automaticly select parents
                        autoParent: true,
                        //for drag / drop
                        drag: false,
                        //for ordering
                        order: false
                    },
                    c_data: myData
                });
            }, 1500);
    })
    .catch((err)=>{
        console.log(err);
        Swal.fire("Error", "Se ha Producido un Error:"+err, "error");
    });
}

const cargarPacientes=()=>{
    axios.get('listarpacientes')
    .then(function (response) {
        let personas=response.data
        console.log(personas)
        personas.forEach(persona=>{
            document.getElementById("id_persona").innerHTML += "<option value='"+persona.id_persona+"'>"+persona.denominacion+"</option>";           
        })
        $('#id_persona').selectpicker('refresh')
        $('#id_persona').val('');
        $('#id_persona').selectpicker('render');
    })
    .catch(function (error) {
      console.log(error);
    })
  }

const cargarEdad=(id_persona)=>{
    axios.get('listarpacientestutoresxid/'+ id_persona)
    .then(function (response) {
        let pacientestutores= response.data[0] //entramos en cero
        console.log(pacientestutores)
        edad.value=pacientestutores.edad
    })
    .catch(function (error) {
        console.log(error);
    })

}
  
const cargarEjercicio=(id_tipo_evaluacion)=>{
    tblEjecutandoEjercicios.clear().draw();

      axios.get('api/ejecutarevaluaciones/'+id_tipo_evaluacion)
        .then(function (response) {
            console.log(response.data);
            let ejercitario=response.data
           // $('#ejerciciosmodal').modal('show')

            Array.from(ejercitario).forEach(function (ejercicio) {
                /* let respuestas = []
                respuestas.push(ejercicio.respuestas) */
                tblEjecutandoEjercicios.row.add([
                    ejercicio.id_pregunta,
                    ejercicio.titulo,
                    ejercicio.descripcion,

                    ejercicio.descripcion,
                    ejercicio.cuerpo,
                    ejercicio.imagen,
                    ejercicio.respuestas,
                    ''
                ]).draw(false);
            })
        })
        .catch(function (error) {
            console.log(error);
        }) 
}

const limpiarFormulario=()=>{
    principal.show();
    formulario.hide();


    $("#id_persona").val("");
    $("#id_persona").selectpicker("render");
    edad.value=''
    tblEjecutandoEjercicios.clear().draw();


}

init()