<html lang="pt">

    <head>
        <title>Tela de Login</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/styles.css" >
        
       
    <head>
    
        <body >
    <div id="corpo-form">
            
        <h2> SISTEMA DE GERENCIAMENTO POLÍTICO</h2>
            <h1> ENTRAR </h1>
            

            
                @if(session('!ERRO!'))
                <div class="alert alert-danger">
                    <strong>ERRO!</strong> {{session('!ERRO!')}}
                </div>
                @endif

            <form action="{{url("acessar")}}" method="POST">
                
                @csrf
                
                <img src="/img/SGP.png" alt="">

                <input type="email" name="email" placeholder="Usuário">
                <input type="password" name="senha"  placeholder="Senha">
                
                <input type="submit"  value="acessar" >

                <a href="esquecisenha"> <strong> Esqueci a Senha </strong></a> 
               
                <a href ="cadastro"> Ainda não possui Login ? <strong>CADASTRE-SE!</strong></a>
                
                

            </form>
    </div>

        </body>
</html>