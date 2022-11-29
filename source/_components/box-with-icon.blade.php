<div class="card mb-5" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <i class="fad fa-{{ $icon }} fa-3x" style="{{ $iconStyle ?? '' }}"></i>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="{{ $titleStyle ?? '' }}">{{ $title }}</h5>
                <p class="card-text">{{ $slot }}</p>
            </div>
        </div>
    </div>
</div>