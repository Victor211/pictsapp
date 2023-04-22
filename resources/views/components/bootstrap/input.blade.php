<div class="{{ $class }}"> {{-- col-md-2 --}}
    <div class="form-row">
        <label for="{{ $for }}"><b>{{ $title }}</b></label>
        {{$hidden ?? ''}}
        <input type="{{ $type }}" class="form-control" name="{{$name}}" id="{{$id}}" {{ $disabled ?? ''}}>
        {{ $slot }}

    </div>
</div>