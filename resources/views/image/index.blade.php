<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Images</title>
</head>
<body>
      
        @foreach ($images as $image)
        <div>
        <a href="" ><img src="storage/{{ $image->file}}" alt="{{ $image->title }}" width="250"></a>
        </div>
            
        @endforeach
    
    
</body>
</html>