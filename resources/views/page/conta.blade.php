@extends('layout.website')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="text-center">Crie sua Conta</h1>
                @if (Session('sucesso'))
                    {{-- <div>{{ Session('sucesso') }}</div> --}}
                    <div class="alert alert-success" role="alert">
                        {{ Session('sucesso') }}
                    </div>
                @endif
                @if (Session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session('error') }}
                    </div>
                @endif
                <form method="post" action="{{ url('salvar-conta') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nameId" class="form-label">Nome</label>
                        <input type="name" class="form-control" id="nameId" name="nome"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emailId" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="emailId" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="passwordId" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordId" name="senha"
                            aria-describedby="passwordHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Criar!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
