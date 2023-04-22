<div class="card">
    <div class="card-body">
        <div class="card-header-tab card-header">
            <div class="card-header-title"></div>
            <ul class="nav">
                {{ $navli }}
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>