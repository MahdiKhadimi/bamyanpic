<div class="mt-5">
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="d-flex mt-4">
            <div class="flex-grow-1 ms-3">
                <textarea rows="3" placeholder="Write comment here" class="form-control mb-1" name="title"></textarea>
                <input type="hidden" value="{{ $image->id }}" name="image_id">
                <input class="btn btn-primary mt-1" type="submit" value="Send" />
            </div>
        </div>
    </form>

    @foreach ($image->comments as $comment)
        <div class="d-flex mt-4">

            <div class="flex-grow-1 ms-3">
                <h5 class="">{{ $comment->getUserName() }} <small
                        class="text-muted pl-2">{{ $comment->commentDate() }}</small></h5>
                <div>
                    {{ $comment->title }}
                </div>
            </div>
        </div>
    @endforeach

</div>
