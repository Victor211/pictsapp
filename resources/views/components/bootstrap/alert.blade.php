
<div {{ $attributes->merge(['class' => 'alert alert-'.$color]) }} role="alert" id="{{ $id }}" style="{{ $display ?? ''}}">
    <i class="{{ $icon }}"></i> {{ $texto }}
    {{ $slot }}
</div>