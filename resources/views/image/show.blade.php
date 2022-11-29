<x-layout title="image-{{ $image->id }}">
    <h1>{{ $image->title }}</h1>
        <div>
            <img src="{{asset($image->fileUrl())}}" alt="{{ $image->title }}" width="100%">
        </div>
    
    
</x-layout>