<div class="{{ $class }}"> {{-- col-md-6 --}}
    <div class="form-group row">
        <label for="{{ $for }}" class="col-lg-3 col-form-label">{{ $title }}</label>

        {{-- @if ($id=='selectCargoLaboral'|| $id=='selectProfesiones' || $id=='cargoConyugue')
        @else
            <div class="col-lg-6">
        @endif --}}
            <div class="col-lg-7">
            <select name="{{ $name }}" id="{{ $id }}"  class="selectpicker form-control show-tick required" data-live-search="true" data-style="btn-info" width: 'auto' data-size="5">
                <option select value="">Seleccione una {{ $title }}</option>
            </select>
            {{ $feedback }}
        </div>
        {{ $slot }}
    </div>
</div>