<div class="table">
    <div class="todos">Todos</div>
    <div class="ganhos">Ganhos</div>
    <div class="gastos">Gastos</div>
</div>
<style>
    .table {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        height: 42px;
    }

    .todos {
        background: #290f57;
    }

    .ganhos {
        background: #d64b34;
    }

    .gastos {
        background: #ca1f72;
    }

    .todos,
    .ganhos,
    .gastos {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-style: normal;
        font-weight: 900;
        line-height: 17px;
        letter-spacing: 0em;
        color: #ccc;
        text-transform: uppercase;
    }
</style>
