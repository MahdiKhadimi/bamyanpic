<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Images</title>
</head>
<body>

    @if ($message = session('message'))
    <div>
      {{ $message }}
    </div>
        
    @endif

      <div>
        <a href="{{ route('images.create') }}">Create Image</a>
      </div>
        @foreach ($images as $image)
        <div>
        <a href="{{ $image->link() }}" >
          <img src="{{asset($image->fileUrl())}}" alt="{{ $image->title }}" width="250"></a>
        </div>
        <div>
          <a href="{{ route('images.edit',$image->id) }}">Edit</a>
          <form action="{{ route('images.destroy',$image->id) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>

          </form>
        </div>
            
        @endforeach
    
    
</body>
</html>