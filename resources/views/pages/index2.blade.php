@extends('layouts.main')
@section('content')
    <div class="square-2">
        <h1>Movimentações</h1>
    </div>

    <div class="container">
        @component('components.tabela')@endcomponent
        <div class="estabelecimentos-1">
            <div class="container">
                <div class="loja mb-3">
                    <div class="logo">
                        <a href="">
                            <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                            <p>Brigaderia Chic</p>
                        </a>
                        <div class="btn-vertudo">
                            <a href="" class="btn">VER TUDO</a>
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
                            <a href="" class="btn">VER TUDO</a>
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
                            <a href="" class="btn">VER TUDO</a>
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
                            <a href="" class="btn">VER TUDO</a>
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


            </div>
        </div>
        @component('components.footer')
        
        @endcomponent
    @endsection
