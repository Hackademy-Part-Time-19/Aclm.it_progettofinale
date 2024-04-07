<x-layout>
    <div class="container-fluid p-5 shadow mb-2" style="margin-bottom: 0">
        
            <div class="row">
                <h1 class="display-5" style="color:#1E3A3A; text-align:center"> {{ $ad->title }}</h1>
            </div>
        
    </div>
    <div class="container">
        <div class="row" >
            <div class="col-10">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-inner" >
                        <div class="carousel-item active ">
                            <img src="data:image/jpeg;base64,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"
                                class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="data:image/jpeg;base64,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"
                                class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="data:image/jpeg;base64,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"
                                class="img-fluid p-3 rounded" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h5 class="card-title">{{ $ad->title }}</h5>
                <p class="card-text">{{ $ad->description }}</p>
                <p class="card-text">€ {{ $ad->price }}</p>

                <a href="{{ route('categoryShow', ['category' => $ad->category]) }}"
                    class="my-2 border-top pt-2 border-dark card-link shadow btn btn-start">
                    {{ __('messages.Categoria') }}:
                    {{ __('messages.categoria_' . $ad->category->id) }}</a>
                <p class='card-footer'>{{ __('messages.Pubblicato') }} {{ $ad->created_at->format('d/m/Y') }}
            </div>
        </div>
    </div>
</x-layout>
