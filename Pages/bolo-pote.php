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

        <title>Produtos - Bolo de Pote</title>
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

        <!-- SESSÂO DO PRODUTO -->

        <div class="productCard">
            <?php echo $images['bolo'] ?>
            <p class="nome">Bolo de Pote</p>
            <p class="preco">R$
                <?php echo $price['bolo'] ?>
                /un
            </p>
            <p class="descr">
            Acredita-se que a confecção de bolos exista desde o Egito Antigo na forma de pães adoçados com xarope de frutas, tâmaras e passas.
            Os antigos gregos e romanos o aperfeiçoaram.
            A real diferença entre pães e bolos só veio a ser caracterizada durante o Renascimento.
            A denominação teria vindo de "bola", e os bolos teriam formas associadas a lua, e cone.
            <br>
            Mas eles nem se comparam com os nossos. Se surpreenda, venha experimentar nossas receitas.
            </p>
            <button class="buy">COMPRAR</button>
        </div>

        <!-- FIM SESSÂO DO PRODUTO -->

        <!-- INFO -->

        <div class="info">
            <p>Tamanhos Disponíveis</p>
            <ul>
                <li>200ml</li>
                <li>500ml</li>
            </ul>
            <p>Sabores Disponíveis</p>
            <ul>
                <li>Chocolate</li>
                <li>Morango</li>
                <li>Ninho</li>
                <li>Baunilha</li>
                <li>Prestígio</li>
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
                <?php echo $images['pedemoca'] ?>
                <a href="pe-de-moca.php">Saiba Mais</a>
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