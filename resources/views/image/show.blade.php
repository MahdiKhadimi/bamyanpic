
<body>
      
        <h1>{{ $image->title }}</h1>
        <div>
            <img src="{{asset($image->file)}}" alt="{{ $image->title }}" width="100%">
        </div>
    
    
</body>
