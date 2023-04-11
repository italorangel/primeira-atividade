<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostrausuario-css.css">
    
    <title>mostrar</title>
</head>
<body>

    <div class="gestao">

        <div class="primeiro">Dados de cadastro</div>
        <div class="segundo">


        </div>

    </div>

    <div class="centro">

        <div class="detalhes">
         

        </div>

        <div class="caixa">

            <div class="c1">

                <div class="uni">Nome</div>
                <div class="far"> <?php echo $_POST["nome"]; ?></div>

            </div>

            <div class="c2">

                <div class="pre">RG</div>
                <div class="aug"><?php echo $_POST["rg"]; ?></div>

            </div>

            <div class="c3">

                <div class="tel">Telefone</div>
                <div class="num"><?php echo $_POST["telefone"]; ?></div>

            </div>

            <div class="c4">

                <div class="end">Endereço</div>
                <div class="rua"><?php echo $_POST["endereco"]; ?></div>

            </div>

            <div class="c5">

                <div class="perio">
                    CEP
                </div>

            </div>

            <div class="c6">

                <div class="ini">

                CPF

                </div>

                <div class="data"><?php echo $_POST["cpf"]; ?></div>

            </div>

            <div class="c7">

            <div class="fim">Bairro</div>
            <div class="date"><?php echo $_POST["bairro"]; ?></div>

            </div>

            <div class="c8">

                <div class="ciplina">
                   Municipio
                </div>

                <div class="logia">
                <?php echo $_POST["municipio"]; ?>
                </div>

            </div>

            <div class="c9">

                <div class="supervi">
                    Matricula
                </div>

                <div class="fabio"><?php echo $_POST["matricula"]; ?></div>

            </div>

            <div class="c10">

                <div class="tivo">
                    Complemento
                </div>

                <div class="ano"><?php echo $_POST["complemento"]; ?></div>

            </div>

        </div>

        <div class="bo">
            <a href="cadastro.php"><button>Editar</button></a>
        </div>


</body>
</html>