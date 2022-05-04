@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Painel</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nome</th>
                                <th scope="col">codigo</th>
                                <th scope="col">portao</th>
                                <th scope="col">horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($voos as $voo)  
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $voo->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection