<div class="{{ $class }}">
    <div class="form-group row">
        <label for="{{ $for }}" class="col-lg-3 col-form-label">{{ $title }}</label>
        <div class="col-lg-9">
            <select id="{{ $id }}" name="{{ $name }}" class="form-control">
                {{ $slot }}
            </select>
            
            {{ $feedback }}
        </div>
    </div>
</div>