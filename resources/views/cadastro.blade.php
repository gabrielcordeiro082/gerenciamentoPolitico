<html>
    <head>
        <title> Cadastre-se </title>
        <meta charset="utf-8"/>
       <link rel="stylesheet" href="/css/styles.css">
    </head>

    <body>

        <!--Escorpo-->
        <table width="100%">
            <tr>
            <td>
            <div id="escorpo-cad">
                <br>
                <br>
                <h1 class="titulo"> Sistema de Gerenciamento Político </h1>
                <h2 class="subtitulo"> SEJA MUITO BEM VINDO AO SGP! </h2> 
                <h3 class="sub"> ESSE É O SISTEMA QUE VAI TE AJUDAR A GERENCIAR A SUA CAMPANHA!</h3>    
                <img src="/img/SGP.png" alt="">
            <div>
            </td>
            </tr>

        </table>

    <div id="corpo-form-cad">
        <hr>
        <br>
        <h1> Cadastrar Candidato</h1>
        <br>
        <hr>
        
    <form action="{{url('cadastrado')}}" method="POST">
            @csrf
            <br>
            <fieldset>
            <legend> Dados Pessoais: </legend>
            <br>
            Nome: <input type="text" name="Nome Completo:" placeholder="Digite o seu nome e sobrenome" /><br/>
            E-mail: <input type="email" name="E-mail:" placeholder="Digite o seu e-mail" /><br/>
            Senha: <input type="password" name="Senha" placeholder="Digite uma Senha" /><br/>
            Confirmar Senha: <input type="password" name="Confirmar Senha" placeholder="Confirme a sua Senha" /><br/>
            Data de Nascimento: <input type="date" name="Data_Nascimento" /><br/>
            Telefone: <input type="tel" name="Telefone" placeholder="Ex.: (00) 0.0000-0000" maxlength="15"/><br/>
            Cidade: <input type="text" name="Cidade de Nascimento" placeholder="Cidade Natal" /><br/>
            Estado: <input type="text" name="Estado de Nascimento" placeholder="Estado Natal" /><br/>
            CPF: <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" maxlength="14"/><br/>
            <input type="radio" name="Genero" value="Masculino" /> Masculino<br/>
            <input type="radio" name="Genero" value="Feminino" /> Feminino<br/>
            <input type="radio" name="Genero" value="Outro" /> Outro<br/>
            
        
        <br>
    
        <br/>
        
    
        <hr>
        <br>
            <legend> Dados Residêncial: </legend>
        <br>
        <hr>
        <br>
            CEP: <input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000" maxlength="9"/><br/>
            Bairro: <input type="text" name="Bairro onde Mora" placeholder="Bairro" /><br/>
            Endereço: <input type="text" name="Endereço onde Mora" placeholder="Endereço" /><br/>
            Cidade: <input type="text" name="Cidade onde Mora" placeholder="Cidade" /><br/>
            Estado: <input type="text" name="Estado onde Mora" placeholder="Estado " /><br/>

        <br>

        <hr>
        <br>
            <legend> Dados Candidato: </legend>
        <br>    
        <hr>
        <br>
            Numero Político: <input type="number" name="Numero do Candidato" /> <br/>
            Selecione o seu Partido: 
            <select name="Partido Político">

                <option value="0"> Partido </option>
                <option value="1"> Patriota </option>
                <option value="2"> Brasil </option>
                <option value="3"> PSB </option>
                <option value="4"> PSDB </option>
                <option value="5"> PT </option>
                <option value="6"> PSOL </option>

            </select><br/>

            <br>
    
            <br>
            

            Selecione o Cargo Político: 
            <select name="Cargo Político">
                
                <option value="0"> Cargo </option>
                <option value="1"> Presidente </option>
                <option value="2"> Governador </option>
                <option value="3"> Prefeito </option>
                <option value="4"> Senador </option>
                <option value="5"> Dep. Estadual </option>
                <option value="6"> Dep. Federal </option>
                <option value="7"> Vereador </option>

            </select>
            <br/>

    <input type="submit"  value="CADASTRAR" >
    <form action="{{url('voltarlogin')}}" method="POST">
        <input type="submit"  value="VOLTAR" >
</fieldset>
            <br clear="both"/>
        </form>

        </fieldset>
    </div>

    </body>

</html>