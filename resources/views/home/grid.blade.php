<div class="row my-4">
    @for ($i = 0; $i < 4; $i++)
        <div class="col-12 col-md-6 col-lg-3 mb-2">
            <div class="card">
                <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                    <a href="javascript:;" class="d-block">
                        <img src="../assets/img/thumbnail.jpeg" class="img-fluid border-radius-lg">
                    </a>
                </div>

                <div class="card-body pt-2">
                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">House</span>
                    <a href="javascript:;" class="card-title h5 d-block text-darker">
                        Shared Coworking
                    </a>
                    <p class="card-description mb-4">
                        Use border utilities to quickly style the border and border-radius of an element. Great for
                        images, buttons.
                    </p>
                    <div class="author align-items-center">
                        <a href="{{ route('search.detail', ['property_id' => 1]) }}"
                            class="btn bg-gradient-primary w-100 mt-4 mb-0">Ver
                            detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
