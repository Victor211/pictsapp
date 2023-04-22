
<div class="modal fade bd-example-modal-xl" id="{{ $id }}" {{-- data-backdrop="static" data-keyboard="false" --}} tabindex="-1" role="dialog" aria-hidden="true">
    <div {{ $attributes->merge(['class' => 'modal-dialog modal-'.$tamanho]) }}>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel"> {{ $titulo }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                    {{ $footer }}
            </div>
        </div>
    </div>
</div> 