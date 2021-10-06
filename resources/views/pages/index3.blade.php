@extends('layouts.main')
@section('content')
    <div class="square-3 ">
        <div class="container">
            <div class="titulo">
                <h1>Brigaderia Chic</h1>
            </div>

            <div class="seu-cash">
                <div class="btn-atras">
                    <a href="">
                        <img src="{{ url('assets/img/voltar.png') }}" alt="">
                    </a>
                </div>
                <div class="cash ">
                    <p>Seu cashback</p>
                    <span>
                        <span
                            style="font-family: Barlow; font-size: 21px; font-style: normal; font-weight: 400; line-height: 22px; letter-spacing: 0em;">R$
                        </span> 25,00
                    </span>
                </div>
            </div>
        </div>
        <div class="atalhos">
            <div class="atalho-item">
                <div>
                    <a href="#">
                        <img src="{{ url('assets/img/card.png') }}" alt="">
                    </a>
                    <p>PAGAR</p>
                </div>
            </div>
            <div class="atalho-item">
                <div>
                    <a href="#">
                        <img src="{{ url('assets/img/chat.png') }}" alt="">
                    </a>
                    <p>ENVIAR</p>
                </div>
            </div>
            <div class="atalho-item">
                <div>
                    <a href="#">
                        <img src="{{ url('assets/img/statics.png') }}" alt="">
                    </a>
                    <p>GANHAR</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @component('components.tabela')
        @endcomponent

        <div class="estabelecimentos-1">


            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                        <p>Brigaderia Chic</p>
                    </a>
                    <div class="btn-vertudo">
                        <a href="" class="btn">VER DETALHE</a>
                    </div>
                </div>

                <div class="sd">
                    <div class="cashback">
                        <p class="ganhou">GANHOU</p>
                        <p class="ganhou-1">R$ 2,50</p>
                    </div>
                    <div class="cashback">
                        <p class="ganhou">DATA</p>
                        <p class="data">12/10/2021</p>
                    </div>
                </div>

            </div>
            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                        <p>Brigaderia Chic</p>
                    </a>
                    <div class="btn-vertudo">
                        <a href="" class="btn">VER DETALHE</a>
                    </div>
                </div>

                <div class="sd">
                    <div class="cashback">
                        <p class="gastou">GASTOU</p>
                        <p class="gastou-1">R$ 2,50</p>
                    </div>
                    <div class="cashback">
                        <p class="ganhou">DATA</p>
                        <p class="data">12/10/2021</p>
                    </div>
                </div>
            </div>

            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                        <p>Brigaderia Chic</p>
                    </a>
                    <div class="btn-vertudo">
                        <a href="" class="btn">VER DETALHE</a>
                    </div>
                </div>
                <div class="sd">
                    <div class="cashback">
                        <p class="gastou">GASTOU</p>
                        <p class="gastou-1">R$ 4,50</p>
                    </div>
                    <div class="cashback">
                        <p class="ganhou">DATA</p>
                        <p class="data">12/10/2021</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @component('components.footer')

    @endcomponent
@endsection
