@extends('layout\website')

@section('conteudo')
    <div class="container my-5">
        {{-- <div class="p-5 text-center bg-body-tertiary rounded-3"> --}}
        <div class="p-5 text-center  rounded-3">
            <h1 class="text-body-emphasis">Bem vindo ao CredBank</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                Conta Digital 100% no seu controle.
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <a class="btn btn-primary" href="{{ url('/page/conta') }}" role="button">Crie agora!</a>
                {{-- <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button" >
                    Crie agora!
                </button> --}}
            </div>
        </div>
    </div>
@endsection
