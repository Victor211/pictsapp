<button {{ $attributes->merge(['class' => 'btn btn-gradient-'.$color.' px-4 float-right mt-0 mb-3 btn-xs']) }} 
    
    data-animation="bounce" id="{{$id ?? 'BtnMostrarFormulario'}}">
    <i class="mdi mdi-plus-circle-outline mr-2"></i>{{ $titulo ?? 'Nuevo Registro' }}
</button>