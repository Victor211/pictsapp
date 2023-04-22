const accionesIniciales=()=>{
    cargarTest();
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
                    n_checked: true,
                    /* n_elements: tipoev.es_ejercicio==1?[{ //aca validamos si es ejercicio si es asi podemos hacer el test
                        icon:'fa fa-edit',
                        title:'Iniciar Test',
                        onClick : (node) => {
                            console.log('Iniciamos el puto test con ID::: '+tipoev.id_tipo_evaluacion);

                            Swal.fire(
                                'Arrancando Test!',
                                'Queres hacer un test puto?!',
                                'success'
                              )
                        }
                    }]:[] // si es 0 hule vacio noma
                     */
                })
            });
            console.log(myData)
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
                        console.log(node);
                    },
                    dropCallback: (node) => {
                        //retuns node with new parent and old parent in 'old_parent' key!!
                        console.log(node);
                    },
                    nodeRemoveCallback:(node)=>{
                        //returns removed node
                        console.log(node);
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

accionesIniciales()