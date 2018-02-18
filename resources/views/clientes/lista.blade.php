@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                 Lista
                    
                  <a class="pull-right" href="{{url('clientes/novo')}}"> Novo cliente</a>

                </div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Eu estou logado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
