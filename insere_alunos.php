<html>
    <style type="text/css">
        html{
            background-color:rgb(0, 19, 37);
        }
        button{
            color: #000000;
            margin-top: 30px;
            width: 400px;
            border-radius: 30px;
            text-align: center;
            font-size: 18px;
            background-color: #8aa7d3;
        }
        fieldset{
            color:#000000;
            font-size: 1.5em;
            text-align:center;
            border-radius: 30px;
            width: 60em;
            padding: 80px;
            width: 50%; margin: 5px auto;
            background-color:rgb(213, 211, 218);
        }
    </style>
    <fieldset>
        <?php
            @$server = "localhost";
            @$user = "root";
            @$senha = ''; 
            @$dbname = "escola";
        
            $con = mysqli_connect($server, $user, $senha, $dbname);

        

            if (!$con){
                die("Falha na Conexão". mysqli_connect_error());
            }
            else
                echo "A Conexão foi Concluida com Êxito <br> ";

            
            @$nome = $_POST['nome'];
            @$nota1 = $_POST['nota1'];
            @$nota2 = $_POST['nota2'];
            @$curso = $_POST['curso']; 

            $query = "INSERT INTO tb_alunos(nome, nota1, nota2, curso)      
            VALUES('$nome','$nota1','$nota2','$curso')";

            $result = mysqli_query($con, $query);

            mysqli_close($con);
        ?>
        <a href="index.php">
        <button>Pagina Inicial</button>
        </a>
        <a href="lista_aluno.php">
            <button>Lista</button>
        </a>
    </fieldset>    
    

</html>