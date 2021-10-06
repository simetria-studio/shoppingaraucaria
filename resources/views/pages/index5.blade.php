@extends('layouts.main')
@section('content')
    <div class="espacamento">
        <div class="top">
            <div class="titulo">
                <h3>Brigaderia Chic</h3>
            </div>
        </div>
        <div class="btn-voltar">
            <a class="btn btn-primary" href="#">Voltar</a>
        </div>
        <div class="container">
            @component('components.tabela')
            @endcomponent
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo </h3>
                </div>
                <div class="precos">
                    <div class="ganhou">
                        <h6>VALOR</h6>
                        <h3>R$ 8,00</h3>
                    </div>
                    <div class="ganhou">
                        <h6>CASHBACK</h6>
                        <h3>5%</h3>
                    </div>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo </h3>
                </div>
                <div class="precos">
                    <div class="ganhou">
                        <h6>VALOR</h6>
                        <h3>R$ 8,00</h3>
                    </div>
                    <div class="ganhou">
                        <h6>CASHBACK</h6>
                        <h3>5%</h3>
                    </div>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo </h3>
                </div>
                <div class="precos">
                    <div class="ganhou">
                        <h6>VALOR</h6>
                        <h3>R$ 8,00</h3>
                    </div>
                    <div class="ganhou">
                        <h6>CASHBACK</h6>
                        <h3>5%</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
        
    @endcomponent
@endsection
