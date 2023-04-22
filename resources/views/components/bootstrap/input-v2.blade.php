<div class="{{$class }}"> {{-- col-md-6 --}}
    <div class="form-group row">
    <label for="{{$for}}" class="col-lg-3 col-form-label">{{$title}}</label>

        @if ($id=='lugarTrabajo' || $id=='nroSocioConyugue' || $id=='lugarTrabajoConyugue')
            <div class="col-lg-7">
        @else
            <div class="col-lg-9">
        @endif
        
                {{$hidden ?? ''}}
                <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control" {{ $disabled ?? ''}}>

                {{ $slot }}
            </div>
        {{$button ?? ''}}
    </div>
</div>