@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Practica 03 - Nuevas Técnicas de Programación </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Los porcentajes son los siguientes

                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
