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
            <form id="fm_register" action="index.php?registerUser=1" method="post">
                <span><?php echo $db->getMsg() ?></span><br/>
                <label>Nome:</label>
                <input type="text" name="registerName" required value="<?php echo (empty($_POST['registerName'])? '' : $_POST['registerName'])?>"><br/>
                <label>Celular:</label>
                <input type="text" name="registerPhone1" required value="<?php echo (empty($_POST['registerPhone1'])? '' : $_POST['registerPhone1'])?>"><br/>
                <label>Telefone:</label>
                <input type="text" name="registerPhone2" required value="<?php echo (empty($_POST['registerPhone2'])? '' : $_POST['registerPhone2'])?>"><br />
                <label>Email:</label>
                <input type="text" name="registerEmail" required value="<?php echo (empty($_POST['registerEmail'])? '' : $_POST['registerEmail'])?>"><br />
                <label>RG:</label>
                <input type="text" name="registerRG" required value="<?php echo (empty($_POST['registerRG'])? '' : $_POST['registerRG'])?>"><br />
                <label>CPF:</label>
                <input type="text" name="registerCPF" required value="<?php echo (empty($_POST['registerCPF'])? '' : $_POST['registerCPF'])?>"><br />
                <label>Senha:</label>
                <input type="password" name="registerPass" required/><br/>
                <label>Repita a Senha:</label>
                <input type="password" name="registerRepass" />
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </section>
    </body>
</html>
