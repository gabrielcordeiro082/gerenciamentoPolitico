<html lang="pt">

    <head>
        <title>Doações</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/css/styles.css">
    <head>
    
        <body >
    <div id="corpo-form">
            
        <h2> Doações Realizadas</h2>
        <br>
        <br/>
        <a href="menu"> <strong> <br> Retornar Menu <br/> </strong></a> 
        <img id="moverimagem" src="/img/SGP.png" alt="">

        <br>
        <br>
        <br/>


        <form action="{{url('botaodoacao')}}" method="POST">
            @csrf
            @if($errors->any())
                <div>
                    <strong>Erro! <br></strong>
                    @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                    @endforeach
                </div>
            @endif
            <br>
            
            <label for="campo-eleitor"><strong>Eleitor: </strong></label>
            <input type="Nome Eleitor" name="Eleitor" placeholder="Nome:">

            <label for="tipo-doacao"><strong>Tipo Doação: </strong></label>
            <input type="Nome" name="Doacao" placeholder="Nome doação">

            <label for="quantidade"><strong>Quantidade: </strong> </label>
            <input type="Quantidade" name="Quantidade"  placeholder="Quantidade">
            
            <button> <input type="submit"  value="Cadastrar" > </button>

        </form>

    

        