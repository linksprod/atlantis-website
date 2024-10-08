@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1>E-mails</h1>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>E-mail</th>
                            <th>Date</th>
                            <th class="text-center">Afficher</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mailings as $mailing)
                            <tr>
                                @if ($mailing->etat == 0)
                                    <td class="font-weight-bold">
                                    @else
                                    <td>
                                @endif
                                {{ $mailing->email }}</td>
                                @if ($mailing->etat == 0)
                                    <td class="font-weight-bold">
                                    @else
                                    <td>
                                @endif{{ $mailing->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    @if ($mailing->etat == 0)
                                        <a class="btn btn-danger btn-circle"
                                            href="{{ route('mailings.show', ['mailing' => $mailing->id]) }}">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-info btn-circle"
                                            href="{{ route('mailings.show', ['mailing' => $mailing->id]) }}">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
