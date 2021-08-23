<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/myStyle.css">
        <link rel="stylesheet" href="../CSS/cards.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&family=Heebo:wght@800&family=Martel+Sans:wght@900&display=swap" rel="stylesheet">

        <title>Produtos - Doce de Leite</title>
    </head>

    <body>

        <?php include '../Dados/dados.php' ?>

        <div id="logo">
            <img src="../Images/Logo.png" alt="Logotipo">
        </div>

        <nav class="nav">
            <ul>
                <li>
                   <a href="../index.php">HOME</a>
                </li>
                <li>
                   <a href="../index.php#quemsomos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="../index.php#contato">CONTATO</a>
                </li>
                <li>
                    <a href="../index.php#local">LOCALIZAÇÃO</a>
                </li>
            </ul>
        </nav>

        <div class="productCard">
            <?php echo $images['doceleite'] ?>
            <p class="nome">Doce de Leite</p>
            <p class="preco">R$
                <?php echo $price['doceleite'] ?>
                /un
            </p>
            <p class="descr">
            O doce de leite é um produto típico da América Latina, e o Brasil e a Argentina são os maiores produtores mundiais.
            Muito apreciado como sobremesa e também muito utilizado como ingrediente em produtos de confeitaria.
            </p>
            <button class="buy">COMPRAR</button>
        </div>

        <!-- INFO -->

        <div class="info">
            <p>Embalagens Disponíveis</p>
            <ul>
                <li>15 unidades</li>
                <li>30 unidades</li>
            </ul>
        </div>

        <!-- FIM INFO -->

        <!-- SUGESTÕES -->

        <h3>Experimente Também</h3>
        <div class="suggests">
            <div class="opt">
                <?php echo $images['brigadeiro'] ?>
                <a href="brigadeiro.php">Saiba Mais</a>
            </div>
            <div class="opt">
                <?php echo $images['churros'] ?>
                <a href="churros.php">Saiba Mais</a>
            </div>
            <div class="opt">
                <?php echo $images['doceleite'] ?>
                <a href="doce-leite.php">Saiba Mais</a>
            </div>
        </div>

        <!-- FIM SUGESTÕES -->

        <footer>

            <ul class="footerUL">
                <li>
                <a href="../index.php">HOME</a>
                </li>
                <li>
                <a href="../index.php#produtos">PRODUTOS</a>
                </li>
                <li>
                <a href="../index.php#quemsomos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="../index.php#contato">CONTATO</a>
                </li>
                <li>
                    <a href="../index.php#local">LOCALIZAÇÃO</a>
                </li>
            </ul>

            <p>Nome: Patrick de  Oliveira</p>
            <p>RA:20038167-5</p>

            </footer>


            </body>


</html>    