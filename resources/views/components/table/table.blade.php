<h5 class="card-title" align="center"> </h5>
<div style="text-align:center;">
    <table id="{{ $id }}" class="table table-striped table-bordered dt-responsive nowrap {{-- display row-border hover order-column --}}" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            {{ $slot }}
        </thead>
        <tbody>
            {{ $body ?? '' }}
        </tbody>

        <tfoot>
            {{ $footer ?? '' }}
        </tfoot>
    </table>
</div>