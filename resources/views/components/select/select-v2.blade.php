<div class="{{ $class }}">
    <div class="form-row">
        <label for="{{ $for }}"><b>{{ $title }}:</b></label>
        <select name="{{ $name }}" id="{{ $id }}" class="selectpicker form-control show-tick required" data-live-search="true" data-style="btn-info" width: 'auto' data-size="5">
            <option select value="">Seleccione un/a {{ $title }}</option>
            {{ $option ?? ''}}
        </select>
        {{ $slot }}

    </div>
</div>