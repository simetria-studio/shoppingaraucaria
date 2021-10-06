@extends('layouts.main')
@section('content')
    <div class="top">
        <div class="voltar">
            <a href="">
                <img src="{{ url('assets/img/voltar.png') }}" alt="">
            </a>
        </div>
        <div class="titulo">
            <div>
                <h3>Brigaderia Chic</h3>
            </div>
            <div>
                <h4>Seu cashback</h4>
            </div>
            <div class="d-flex carteira">
                <h4> R$ </h4>
                <h3> 25,00</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center mt-2 realizar">
            <h1>Realizar pagamento <br> com seu saldo </h1>
        </div>
        <div class="mt-5 text-center">
            <p class="id">ID do Estabelescimento</p>
            <div class="search-id">
                <input type="search" name="" id="" value="  #911855585">
                <button>
                    <img src="{{ url('assets/img/lupa.png') }}" alt="">
                </button>
            </div>
        </div>
        <div class="text-center mt-3 local">
            <div class="logo-loja">
                <img src="{{ 'assets/img/brigaderia.png' }}" alt="">
            </div>
            <div class="nome-loja mt-2 mb-4">
                <p>Brigaderia Chic</p>
            </div>
        </div>
        <div class="text-center pagamento mb-5">
            <h5>R$</h5>
            <h3>11,50</h3>

        </div>
        <div class="borda mt-5"></div>
        <div class="cashback-total text-center mb-3">
            <p>Cashback nesta Transação</p>
            <div class="cash">
                <div class="porcento">
                    <p>10%</p>
                </div>
                <div class="reais">
                    <p>R$ 11,50</p>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-pagar">
        <button class="btn btn-primary">PAGAR</button>
    </div>
@endsection
