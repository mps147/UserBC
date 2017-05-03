<?php require_once '_inc/conf.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>Nome:</label>
            <input type="text" name="registerName"><br/>
            <label>Celular:</label>
            <input type="text" name="registerPhone1"><br/>
            <label>Telefone:</label>
            <input type="text" name="registerPhone2"><br />
            <label>Email:</label>
            <input type="text" name="registerEmail"><br />
            <label>RG:</label>
            <input type="text" name="registerRG"><br />
            <label>CPF:</label>
            <input type="text" name="registerCPF"><br />
            <label>Senha:</label>
            <input type="password" name="registerPass" /><br/>
            <label>Repita a Senha:</label>
            <input type="password" name="registerRepass" />
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
