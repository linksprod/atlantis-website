@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1>{{ $action }} un blog</h1>
            <br>
            @if ($action === 'Ajouter')
                <form action="{{ route('blogs.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                @else
                    <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
            @endif
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    @if( $action === 'Modifier')
                    <img src="{{asset('images')}}/{{$blog->image}}" alt="Pas de photo" class="image-blog" width="100" height="100" >
                    @endif
                    <input type="file" class="form-control" id="image" name="image" placeholder="Choisire une image"
                    {{ $action === 'Modifier' ? $blog->image : 'ajouter une texte' }}>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Titer</label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="titer" name="titer" value="{{ $action === 'Modifier' ? $blog->titer : 'ajouter un titre' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Texte</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="texte" name="texte"  rows="3">
                        {{ $action === 'Modifier' ? $blog->texte : 'ajouter une texte' }}
                    </textarea>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary">{{ $action }} </button>
            <a type="button" class="btn btn-warning" href="{{ route('blogs.index') }}">Annuler</a>
            </form>
        </div>
    </div>
@endsection
