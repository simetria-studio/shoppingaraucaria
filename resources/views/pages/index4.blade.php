@extends('layouts.main')
@section('content')
    <div class="espacamento">
        <div class="container">
            <div class="detalhes-produtos">
                <div class="voltar">
                    <a href="" class="btn btn-primary">VOLTAR</a>
                </div>
                <div class="data-detalhe">
                    <h6>DATA</h6>
                    <h4>12/10/2021</h4>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Brigaderia Chic </h3>
                </div>
                <div class="precos">
                    <div class="gastou">
                        <h6>GASTOU</h6>
                        <h3>R$ 150,50</h3>
                    </div>
                    <div class="ganhou">
                        <h6>GANHOU</h6>
                        <h3>R$ 15,50</h3>
                    </div>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo</h3>
                </div>
                <div class="precos">
                    <div class="gastou">
                        <h6>GASTOU</h6>
                        <h3>R$ 150,50</h3>
                    </div>
                    <div class="ganhou">
                        <h6>GANHOU</h6>
                        <h3>R$ 15,50</h3>
                    </div>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo</h3>
                </div>
                <div class="precos">
                    <div class="gastou">
                        <h6>GASTOU</h6>
                        <h3>R$ 150,50</h3>
                    </div>
                    <div class="ganhou">
                        <h6>GANHOU</h6>
                        <h3>R$ 15,50</h3>
                    </div>
                </div>
            </div>
            <div class="produto">
                <div class="logo">
                    <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                </div>
                <div class="nome">
                    <h3> Produto Teste
                        Exemplo</h3>
                </div>
                <div class="precos">
                    <div class="gastou">
                        <h6>GASTOU</h6>
                        <h3>R$ 150,50</h3>
                    </div>
                    <div class="ganhou">
                        <h6>GANHOU</h6>
                        <h3>R$ 15,50</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
@endsection
