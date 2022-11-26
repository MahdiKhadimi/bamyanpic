
<form action="{{ route('images.update',$image->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div style="width:400px">
        <img src="{{ asset($image->fileUrl()) }}" alt="$image->title">
    </div>
    <div>
        <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title',$image->title) }}">
            @error('title')
              <div>{{ $message }}</div>
            @enderror
    </div>
    <div>
        <button type="submit">Edit</button>
       
    </div>


</form>