<x-layout title="image-{{ $image->title }}">

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-9">
                <div class="image-container">
                    <img src="{{ asset($image->fileUrl()) }}" title="{{ $image->title }}" class="img-fluid" />
                </div>

                {{--  @include('image._related-image');  --}}

                @include('image._comments')

            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('icons/user.png') }}" alt="Author" class="rounded-circle mr-3 "
                        style="width: 60px;">
                    <div class="ms-3">
                        <h5><a href="#" class="text-decoration-none">{{ $image->user->name }}</a></h5>
                        <p class="text-muted mb-0">{{ $image->user->getImagesNumber() }}</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-3 border-top border-bottom">
                    @if (auth::check())
                        <div class="col-md-3">
                            <form action="{{ route('likes.update', $image->id) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-primary">

                                    @if ($image->checkLike($image->id))
                                        <span class="fa fa-thumbs-down" id="likes-count" title="Like mage">
                                            {{ $image->likesCount($image->id) }}
                                        </span>
                                        <input type="hidden" value="0" name="is_like">
                                    @else
                                        <span class="fa fa-thumbs-up"
                                            id="likes-count">{{ $image->likesCount($image->id) }}
                                        </span>
                                        <input type="hidden" value="1" name="is_like">
                                    @endif
                                </button>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('favorites.update', $image->id) }}" method="post">
                                @csrf
                                @method('put')
                                @if ($image->checkFavorite($image->id))
                                    <button type="submit" title="Unfavorite" class="btn "
                                        style="background-color: rgba(138, 101, 110, 0.936)">

                                        <x-icon src="heart.svg" alt="favorite" width="18" height="18" />
                                    </button>
                                    <input type="hidden" value="0" name="is_favorite">
                                @else
                                    <button type="submit" title=" favorite" class="btn "
                                        style="background-color: rgba(205, 15, 63, 0.936)">

                                        <x-icon src="heart.svg" alt="favorite" width="18" height="18" />
                                    </button>
                                    <input type="hidden" value="1" name="is_favorite">
                                @endif

                            </form>

                        </div>
                    @endif
                    <div class="col-md-5">
                        <a href="{{ route('images.download', $image->id) }}"
                            onclick="downloadsCount({{ $image->id }})" title="Download"
                            class="btn btn-success d-flex align-items-center" id="download">
                            <input type="hidden" id="input-download" value="{{ $image->id }}">
                            <x-icon src="download.svg" alt="" class="align-text-top" width="18"
                                height="18" />
                            <span class="display-block ms-2">Download</span>
                        </a>
                    </div>
                </div>

                <div class="bg-light mt-3 p-3 border">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <th>Uploaded</th>
                                <td>{{ $image->uploadDate() }}</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>{{ $image->dimention }}</td>
                            </tr>
                            <tr>
                                <th>Views</th>
                                <td>{{ $image->views_count }}</td>
                            </tr>
                            <div>
                                <strong>Downloads</strong>
                                <span style="margin-left: 60px" id="downloads-count">
                                    {{ $image->downloads_count }}
                                </span>
                            </div>
                        </tbody>
                    </table>
                </div>
                {{--  
                <div class="tagcloud mt-3">
                    <ul>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Mountain</a></li>
                        <li><a href="#">Blue</a></li>
                        <li><a href="#">Forest</a></li>
                        <li><a href="#">Animal</a></li>
                    </ul>
                </div>  --}}
            </div>
        </div>
    </div>
</x-layout>
