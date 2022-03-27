<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <h1>Fatec</h1>
    <style type="text/css">
    input{
        width: 500px;
        padding: 20px 3%;
        border-radius: 17px;
        background-color: #8aa7d3;  
        color: #000000;
        font-size: 1em
        
        
    }
    #botao{
        color: rgb(0, 0, 0);
        margin-top: 50px;
        width: 300px;
        text-align: center;
        font-size: 25px;
    }
    form{
        text-align: center;
    }
    fieldset{
        width: 70em;
        padding: 70px;
        border-radius: 40px;
        width: 40%; margin: 50px auto;
        background-color: rgb(213, 211, 218);
        }
    h1{
        text-align: center;
        font-family: "Glamor";
        font-size: 7em;
        text-shadow: 4px 4px #ffffff;
        color: rgb(72, 54, 138);
    }
    p{
        font-size: 50px;
        color: #000000;
        font-family: "Glamor";
        filter: brightness(120%);
    }
    body, html{
        background-color:rgb(0, 19, 37);
        background-size: auto;
  
    }
    input::placeholder{
        color: rgb(0, 0, 0);
        font-size: 18px
    }
    
    </style>
</head>
<body>
    <fieldset>
        <div>
            <form action="insere_alunos.php" method="post">
                <label>
                    <p>Nome:</p>
                </label>
                <br>
                <br>
                <input id="nome" name="nome" type="text" placeholder="Digite Seu Nome: "> 

                <Label>
                    <p>Nota 1º</p>
                </Label>
                <input id="nota1" name="nota1" type="text" placeholder="Digite a Primeira Nota: "> 

                <label>
                    <p>Nota 2º</p>
                </label>
                <input id="nota2" name="nota2" type="text" placeholder="Digite a Segunda Nota: "> 
                <br>
                <br>
                <label>
                    <p>Nome do Curso</p>
                </label>
                <input id="curso" name="curso" type="text" placeholder="Digite o Nome do Curso: "> 
                <br>
                <br>
                <label>
                    <input id="botao" type="submit" value="Cadastrar"/>
                </label>
                </form>
        </div>

    </fieldset>
    <a href="lista_aluno.php">Listagem de Alunos</a>
</body>
</html>