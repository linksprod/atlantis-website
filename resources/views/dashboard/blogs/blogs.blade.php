@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div  class="d-flex flex-row justify-content-between align-items-center">
                <h1>Liste des blogs</h1>
                <a type="button" class="btn btn-info" href="{{ route('blogs.create') }}">Ajouter</a>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Texte</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <img src="{{ asset('images') }}/{{ $blog->image }}" alt="Pas de photo"
                                        class="image-blog" width="100" height="100">
                                </td>
                                <td>{{ $blog->titer }}</td>
                                <td>{{ $blog->texte }}</td>
                                <td>
                                    <a type="button" class="btn btn-warning"
                                        href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">Modifier</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submite" class="btn btn-danger">Supprier</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
