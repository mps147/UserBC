<?php require_once '_inc/conf.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!--STYLE SHEETS-->
        <link href="css/plugins.css" type="text/css" rel="stylesheet"/>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <section class="container">
            <form id="fm_register" action="index.php" method="post">
                <span><?php echo $db->getMsg() ?></span><br/>
                <label>Nome:</label>
                <input type="text" name="registerName" required><br/>
                <label>Celular:</label>
                <input type="text" name="registerPhone1" required><br/>
                <label>Telefone:</label>
                <input type="text" name="registerPhone2" required><br />
                <label>Email:</label>
                <input type="text" name="registerEmail" required><br />
                <label>RG:</label>
                <input type="text" name="registerRG" required><br />
                <label>CPF:</label>
                <input type="text" name="registerCPF" required><br />
                <label>Senha:</label>
                <input type="password" name="registerPass" required/><br/>
                <label>Repita a Senha:</label>
                <input type="password" name="registerRepass" />
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </section>
    </body>
</html>
