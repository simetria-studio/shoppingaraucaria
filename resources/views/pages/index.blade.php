@extends('layouts.main')
@section('content')
    <div class="square-1">
        <div class="usuario">
            <div class="saudacao">
                <span>
                    <img src="{{ url('assets/img/emoji.png') }}" alt="">
                </span>
                <div>
                    <p>Olá, Ana</p>
                </div>
            </div>
            <div class="avatar">
                <img src="{{ url('assets/img/avatar.png') }}" alt="">
            </div>
        </div>
        <div class="extrato text-center">
            <button class="btn">Ver extrato</button>
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
    <div class="estabelecimentos">
        <div class="container">
            <div class="titulo">
                <p>Estabelecimentos</p>
            </div>

            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                        <p>Brigaderia Chic</p>
                    </a>
                </div>
                <div class="sd">
                    <div class="cashback">
                        <p>10%</p>
                    </div>
                    <div class="carteira">
                        <div class="saldo">
                            <p>SALDO:</p>
                        </div>
                        <div class="valor">
                            <p> R$ 50,00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/nitti.png') }}" alt="">
                        <p>Nitti Grill</p>
                    </a>
                </div>
                <div class="sd">
                    <div class="cashback">
                        <p>10%</p>
                    </div>
                    <div class="carteira">
                        <div class="saldo">
                            <p>SALDO:</p>
                        </div>
                        <div class="valor">
                            <p> R$ 50,00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/wanda.png') }}" alt="">
                        <p>Wanda Grill</p>
                    </a>
                </div>
                <div class="sd">
                    <div class="cashback">
                        <p>10%</p>
                    </div>
                    <div class="carteira">
                        <div class="saldo">
                            <p>SALDO:</p>
                        </div>
                        <div class="valor">
                            <p> R$ 50,00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loja mb-3">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/img/oboticario.png') }}" alt="">
                        <p>O Boticário</p>
                    </a>
                </div>
                <div class="sd">
                    <div class="cashback">
                        <p>10%</p>
                    </div>
                    <div class="carteira">
                        <div class="saldo">
                            <p>SALDO:</p>
                        </div>
                        <div class="valor">
                            <p> R$ 50,00</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @component('components.footer')

    @endcomponent
@endsection
