<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            // 1 - INSTANCIAR PDO
            try{//IRA TENTAR ESTABELECER UMA CONEXÃO CASO AO CONTRÁRIO IRÁ APRESENTAR UMA MENSAGEM
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=generate_passBC', 'root', NULL);
            } catch (PDOException $ex) { //SE NÃO OCORRER A CONEXÃO EXIBIRÁ UMA MENSAGEM DE ERRO
                $ex->getMessage();
            }
            
            //2 - CONSULTA PDO
            $query = $pdo->query("SELECT * FROM users"); // CONSULTA EM PDO
            
            //2.1 - PREPARANDO UMA QUERY SEGURA CONTRA SQL INJECTION
            $querySegura = $pdo->prepare("SELECT * FROM `users` WHERE name = :nome AND cod = :codigo");//PREPARANDO UMA CONSULTA UTILIZANDO PSEUDONOMES
            $querySegura2 = $pdo->prepare("SELECT * FROM `users` WHERE name = ? AND cod = ?");//PREPARANDO UMA CONSULTA UTILIZANDO ?
            
            $querySegura->bindValue(":nome", "Máh"); //PODE SER USADO O ? AO INVES DO PSEUDONOME
            $querySegura->bindValue(":codigo", 1);
            
            $querySegura->execute(); //MÉTODO QUE É RESPONSAVEL POR EXECUTAR A CONSULTA!
            
            //2.2 - PREPARANDO UMA INSERÇÃO DE DADOS NO DB
            $insert = $pdo->query("INSERT INTO `userS` (nome, email, telefone) VALUES(:nome, :email, :telefone)");
            
            //3 - EXIBINDO RESULTADOS
            $bscUser = $pdo->query("SELECT * FROM users"); // CONSULTA EM PDO
            $bscUser->execute();
            
            while($resultado = $bscUser->fetch(PDO::FETCH_OBJ)){ //A ASSINATURA DENTRO DO FETCH(RETORNA SOMETE UM VALOR) É QUEM DEFIVINE O TIPO DE RETORNO DA CONSULTA SINTAXE: (PDO::TIPO_DE_RETORNO)
                echo $resultado->name;
            }
            
            $resultado = $bscUser->fetchAll(PDO::FETCH_OBJ);//FECTHALL RETORNA UM ARRAY COM CADA VALOR DA CONSULTA DENTRO DE INDICES SEPARADOS ASSIM SENDO NECESSARIO FOREACH PARA PERCORRER A MATRIZ;     
            foreach ($resultado as $lista){
                echo $lista->name;
            }
            
        ?>
        </pre>
    </body>
</html>
