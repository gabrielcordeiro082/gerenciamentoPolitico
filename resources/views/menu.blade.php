<html>
    <head>
        <title>Menu SGP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/styles.css">
        
        <style type="text/css">

            body{
                background-image: url("img/SGP.png");
                background-size: 50%;
                background-position: center;
                background-repeat: no-repeat;
            }

            .menu ul li{
                background-color: #6da3f9;
                background-position: center;
                color: white;
                float: left;
                padding: 0px;
                margin: 0px;
                font-size: 20px;
                text-align: center;
                width: 200px;
                height: 40px;
                display: inline-block;
                text-align: center;
                line-height: 40px;
                font-size: 25px;
            }
            .menu ul li:hover{
                background-color: #2c69cc;
            }
            .menu ul{
                padding: 0px;
            }
            .menu ul ul {
                display: none;
            }
            .menu ul li:hover > ul{
                display: block;
            }
            .menu ul ul li:hover{
                background-color: #144aa0;
            }
           
            #barra{
                background-position: center;
                display: flex;
                flex-direction: row;
                position: relative;
                left: 10%;
                width: 80%;
            }

        </style>
    </head>
    <body>
        <nav class="Menu">
            <ul>
                <li>Eleitor
                    <ul>
                        <li>Cadastrar</li>
                        <li>Alterar</li>
                        <li>Pesquisar</li>
                        <li>Excluir</li>
                    </li>
                    </ul>

                <li> Doação
                    <ul>
                        <form action="{{url('doacao')}}"> 
                            <button type="submit">  <li> Cadastrar </li> </button> 
                        </form>
                        <li>Alterar</li>
                        <li>Pesquisar</li>
                        <li>Excluir</li>
                    </li>
                    </ul>

                <li> Documentos
                    <ul>
                        <li>Adicionar</li>
                        <li>Alterar</li>
                        <li>Pesquisar</li>
                        <li>Excluir</li>
                    </li>
                    </ul>

                <li> Agenda
                    <ul>
                        <li>Cadastrar</li>
                        <li>Alterar</li>
                        <li>Pesquisar</li>
                        <li>Excluir</li>
                    </li>
                    </ul>
                <li>Campanha
                    <ul>
                        <form action="{{url('grafico')}}"> 
                            <button type="submit">  <li> Gráfico </li> </button> 
                        </form>

                        <form action="{{url('bairros')}}"> 
                            <button type="submit">  <li> Bairros </li> </button> 
                        </form>
                    </ul>
                </li>
                <li> Configurações
                    <ul>
                        <li>Dados Pessoais</li>

                        <form action="{{url('login')}}"> 
                            <button type="submit">  <li> Sair </li> </button> 
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
            
</html>