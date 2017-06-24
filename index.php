<?php require_once '_inc/conf.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Binary Code - Cadastro de Usuários</title>

        <!--STYLE SHEETS-->
        <link href="css/plugins.css" type="text/css" rel="stylesheet"/>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <section class="container">
            <fieldset id="fm_login">
                <legend>Login</legend>

                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label>Email/RG:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input class="form-control" type="text" name="loginUser" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Senha</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                            <input class="form-control" type="text" name="loginPass" required>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary pull-right" type="submit">Entrar <i class="glyphicon glyphicon-log-in"></i></button>
                </form>
                <pre>
                <?php
                try{
                    $instancia = new PDO("mysql:host=127.0.0.1; dbname=generate_passBC", "root", NULL);
                } catch (PDOException $ex) {
                    $ex->getMessage();
                }
                    
                ?>
                </pre>
            </fieldset>
            
            <fieldset id="fm_register">
                <legend>Cadastro</legend>
                <form action="index.php" method="post">
                    <div class="<?= $db->getClass(); ?>">
                        <p><?= $db->getMsg(); ?></p>
                    </div>

                    <div class="form-group">
                        <label>Nome:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input class="form-control" type="text" name="registerName" required value="<?php echo (empty($_POST['registerName']) ? '' : $_POST['registerName']) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Celular:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                            <input class="form-control" type="text" name="registerPhone1" required value="<?php echo (empty($_POST['registerPhone1']) ? '' : $_POST['registerPhone1']) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Telefone:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></div>
                            <input class="form-control" type="text" name="registerPhone2" required value="<?php echo (empty($_POST['registerPhone2']) ? '' : $_POST['registerPhone2']) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                            <input class="form-control" type="text" name="registerEmail" required value="<?php echo (empty($_POST['registerEmail']) ? '' : $_POST['registerEmail']) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>RG:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input class="form-control" type="text" name="registerRG" required value="<?php echo (empty($_POST['registerRG']) ? '' : $_POST['registerRG']) ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-pass form-group">
                            <label>Senha:</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                <input class="form-control" type="password" name="registerPass" required/>
                            </div>
                        </div>

                        <div class="form-pass form-group">
                            <label>Repita a Senha:</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                <input class="form-control" type="password" name="registerRepass" required/>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary pull-right" type="submit">Enviar <i class="glyphicon glyphicon-send"></i></button>
                </form>
            </fieldset>
        </section>
    </body>
</html>
