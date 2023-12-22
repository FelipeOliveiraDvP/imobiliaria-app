@extends('layouts.public.base')

@section('content')
    <main class="main-content">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card card-plain w-50">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Bem vindo</h3>
                            <p class="mb-0">Informe seu e-mail e senha para acessar a sua conta</p>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('login.submit') }}" method="POST">
                                @csrf
                                <label>E-mail</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Informe seu e-mail" aria-label="Informe seu e-mail"
                                        aria-describedby="email-addon">
                                    @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <label>Senha</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Informe sua senha" aria-label="Informe sua senha"
                                        aria-describedby="password-addon">
                                    @error('password')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="remember_me" checked="">
                                    <label class="form-check-label" for="remember_me">Lembrar de mim</label>
                                </div>
                                <a href="{{ route('forgot') }}" class="text-info">Esqueci
                                    minha senha</a>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Entrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                Ainda não tem uma conta?
                                <a href="{{ route('register') }}"
                                    class="text-info text-gradient font-weight-bold">Cadastre-se aqui</a>
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
