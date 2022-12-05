<x-layout title="free images">
    <div class="container-fluid mt-3">

    </div>

    <div class="container-fluid mt-4">
        @if ($message = session('message'))
            <x-alert type='info' dismissible='true'>
                {{ $component->icon() }}
                {{ $message }}
            </x-alert>
        @endif
        <div>
            Your Favorite Images
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            @foreach ($favorites as $favorite)
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <a href="{{ $favorite->image->link() }}">
                            <img src="{{ asset($favorite->image->fileUrl()) }}" alt="{{ $favorite->image->title }}"
                                class="card-img-top">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $favorites->links() }}
    </div>
</x-layout>
