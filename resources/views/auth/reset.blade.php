@extends('layouts.public.base')

@section('content')
    <main class="main-content">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card card-plain w-50">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Alterar Senha</h3>
                            <p class="mb-0">Informe sua nova senha</p>
                        </div>
                        <div class="card-body">
                            <form role="form">
                                <label>Senha</label>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Informe sua senha"
                                        aria-label="Informe sua senha" aria-describedby="password-addon">
                                    @error('password')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <label>Confirmar Senha</label>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Confirme a sua senha"
                                        aria-label="Confirme a sua senha" aria-describedby="password_confirmation-addon">
                                    @error('password_confirmation')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Alterar
                                        Senha</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                Já tem uma conta?
                                <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Ir para o
                                    login</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 bg-image"
                    style="background-image: url(../assets/img/curved-images/curved14.jpg)">
                </div>
            </div>
        </div>
    </main>
@endsection
