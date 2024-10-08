@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="{{ route('mailings.index') }}"><i class="fas fa-backward"></i></a>
                <p>{{ $mailing->created_at->format('Y-m-d') }}</p>
            </div>
            <h4><strong>{{ $mailing->nom }}</strong></h4>
            <h6><strong>{{ $mailing->email }}</strong></h6>
            <br>
            <p>{{ $mailing->contenue }}</p>
        </div>
    </div>
@endsection
