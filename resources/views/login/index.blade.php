@extends('layouts.main')
@section('content')

    <div class="square">
        <div class="logo">
            <img src="{{ url('assets/img/logo-shop.png') }}" alt="">
        </div>
    </div>
    <div class="login">

        <div class="container">
            <div class="mt-3 mb-3">
                <label class="form-label mb-3" for="email">E-mail</label>
                <div class="d-flex">
                    <span class="mail">
                        <img src="{{ url('assets/img/mail.png') }}" alt="">
                    </span>
                    <input placeholder="ana@email.com" type="email" name="" id="email">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label mb-3" for="email">Password</label>
                <div class="d-flex">
                    <span class="mail">
                        <img src="{{ url('assets/img/password.png') }}" alt="">
                    </span>
                    <input placeholder="************" type="password" name="" id="email">
                </div>
            </div>
            <div class="mb-3">
                <a href="#">Esqueceu a sua senha?</a>
            </div>
            <div class="mb-3 btn-entrar">
                <button class="btn">Entrar</button>
            </div>
            <div class="line mb-3">
                <img src="{{ url('assets/img/line.png') }}" alt="">
            </div>
            <div class="d-flex justify-content-between">
                <div class="google">
                    <button class="btn">
                        <img src="{{ url("assets/img/google.png") }}" alt="">
                    </button>
                </div>
                <div class="facebook">
                    <button class="btn btn-primary">
                        <img src="{{ url("assets/img/facebook.png") }}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
