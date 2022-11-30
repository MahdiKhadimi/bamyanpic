
    
<x-layout title="Update image">
    <div class="container-fluid mt-4">
         <div class="row">
             <div class="col-md-6 offset-md-3">
                 <div class="card">
                     <div class="card-header">Update image</div>
                     <div class="card-body">
                        <x-form action="{{ route('images.update',$image->id) }}" method="PUT">

                        <div>
                            <img src="{{ asset($image->fileUrl()) }}" class="img-fluid" alt="$image->title">
                        </div>
                             <div class="mb-3">
                                 <label class="form-label" for="title">Photo Title</label>
                                 <input type="text" name="title" class="form-control @error('title')is-invalid @enderror" value="{{ old('title',$image->title) }}">
                                 @error('title')
                                 <div class="invalid-feedback">
                                     {{ $message }}}
                                 </div>
                                 @enderror
                             </div>
                             
                             <div class="mb-3">
                                 <button type="submit" class="btn btn-primary">Save Changes</button>
                                 <a href="{{ route('images.index') }}" class="btn btn-outline-secondary">Cancel</a>
                             </div>
                       </x-form>
                     </div>
                 </div>
 
             </div>
         </div>
     </div>
 </x-layout>
 