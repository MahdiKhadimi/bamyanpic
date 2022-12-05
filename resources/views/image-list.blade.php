<x-layout title="free images">


    <div class="container-fluid mt-4">

        @if ($message = session('message'))
            <x-alert type='info' dismissible='true'>
                {{ $component->icon() }}
                {{ $message }}
            </x-alert>
        @endif
        <div class="row mb-4">
            <div class='col-md-6'>
                All Images
            </div>
            <div class="col-md-6 text-right">
                <form class="search-form" action="{{ url('/') }}">
                    <input type="search" name="q" placeholder="Search images by title" aria-label="Search..."
                        autocomplete="off">
                </form>
            </div>
        </div>

        <div class="row" data-masonry='{"percentPosition": true }'>

            @foreach ($images as $image)
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <a href="{{ $image->link() }}">
                            <img src="{{ asset($image->fileUrl()) }}" alt="{{ $image->title }}" class="card-img-top">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $images->links() }}
    </div>
</x-layout>
