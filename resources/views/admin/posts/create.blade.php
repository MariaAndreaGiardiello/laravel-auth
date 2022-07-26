 @extends('layouts.app')

 @section('content')
     <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crea nuovo post</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Titolo</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                      @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                    </div>

                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="published" name="published">
                      <label class="form-check-label" for="published">Pubblica </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
            </div>
        </div>
     </div>
 @endsection

 <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
