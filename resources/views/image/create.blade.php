
<form action="{{ route('images.create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="file">Image </label>
            <input type="file" id="file" name="file">
            @error('file')
              <div>{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="title">Title</label>
            <input type="text" id="title" name="title">
            @error('title')
              <div>{{ $message }}</div>
            @enderror
    </div>
    <div>
        <button type="submit">Upload</button>
       
    </div>


</form>