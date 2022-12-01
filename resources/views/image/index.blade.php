<x-layout title="free images">
  <div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <a href="{{ route('image.create') }}" class="btn btn-primary">
                <x-icon src="upload.svg" alt="Upload" class="me-2"/>
                <span>Upload</span>
            </a>
        </div>
        <div class="col"></div>
        <div class="col text-right">
            <form class="search-form">
                <input type="search" name="q" placeholder="Search..." aria-label="Search..." autocomplete="off">
            </form>
        </div>
    </div>
</div>

  <div class="container-fluid mt-4">   
  @if ($message = session('message'))
  <x-alert type='info' dismissible='true'>
    {{ $component->icon() }}
    {{ $message }}
  </x-alert>
  @endif
    <div class="row" data-masonry='{"percentPosition": true }'>
      @foreach ($images as $image)
          <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
              <div class="card">
                <a href="{{ $image->link() }}" >
                  <img src="{{asset($image->fileUrl())}}" alt="{{ $image->title }}"  class="card-img-top">
                </a>
                  @if (Auth::check()&&Auth::user()->can('update',$image))
                  <div class="photo-buttons">
                    <div>
                       <a href="{{ route('images.edit',$image->id) }}" class="btn btn-sm btn-info me-2">Edit </a>
      
                      <x-form action="{{ route('images.destroy',$image->id) }}" method="DELETE" style="display: inline">
          
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
              
                      </x-form>
                  </div>
                

                </div>
                @endif
               </div>
          </div>
      @endforeach  
        
    </div>
    {{ $images->links() }}
</div>          
</x-layout>