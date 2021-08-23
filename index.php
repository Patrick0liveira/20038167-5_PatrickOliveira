<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS\myStyle.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&family=Heebo:wght@800&family=Martel+Sans:wght@900&display=swap" rel="stylesheet">

        <title>Mais Doce</title>
    </head>

    <body>

        <?php include 'Dados/dados.php' ?>

        <div id="logo">
            <img src="Images/Logo.png" alt="Logotipo">
        </div>

        <nav class="nav">
            <ul>
                <li>
                   <a href="#topo">HOME</a>
                </li>
                <li>
                   <a href="#quemsomos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="#contato">CONTATO</a>
                </li>
                <li>
                    <a href="#local">LOCALIZAÇÃO</a>
                </li>
            </ul>
        </nav>

        <div id="produtos">

            <div class="produto">
                <img class="img" src="Images/brigadeiro.jpg" height="150px">
                <p class="nome">Brigadeiro</p>
                <a href="Pages/brigadeiro.php">Mais Informações</a>
            </div>
            <div class="produto">
                <img class="img" src="Images/doce-de-leite.jpg" height="150px">
                <p class="nome">Doce de Leite</p>
                <a href="Pages/doce-leite.php">Mais Informações</a>
            </div>
            <div class="produto">
                <img class="img" src="Images/pacoca.jpg" height="150px">
                <p class="nome">Paçoca</p>
                <a href="Pages/pacoca.php">Mais Informações</a>
            </div>
            <div class="produto">
                <img class="img" src="Images/pé-de-moça.jpg" height="150px">
                <p class="nome">Pé de Moça</p>
                <a href="Pages/pe-de-moca.php">Mais Informações</a>
            </div>
            <div class="produto">
                <img class="img" src="Images/churros.jpg" height="150px">
                <p class="nome">Churros</p>
                <a href="Pages/churros.php">Mais Informações</a>
            </div>
            <div class="produto">
                <img class="img" src="Images/bolo-pote.jpeg" height="150px">
                <p class="nome">Bolo de Pote</p>
                <a href="Pages/bolo-pote.php">Mais Informações</a>
            </div>
            
        </div>

        <div id="quemsomos">

            <h2>Quem Somos</h2><br>
            <p class="desc">
            Somos uma empresa voltada para a fabricação de doces caseiros de todos os tipos, para todos os gostos.<br>
            Nossos produtos são totalmente originais, desenvolvidos e criados por nós.<br>
            Surgimos há 15 anos atrás com o objetivo de sermos os melhores no ramo.<br>
            Estamos aqui para estar com você nos melhores momentos da vida.<br><br>
            <b>MISSÃO</b><br><br>Produzir, fornecer e distribuir doces com elevado padrão de qualidade, prezando pela excelência no atendimento e respeito pelos seus clientes.<br>
            Crescimento e Desenvolvimento Pleno na área alimentícia, mantendo  a qualidade, sabor, e tradição dos verdadeiros Doces Caseiros.<br><br>
            <b>VISÃO</b><br><br>Pretendemos estar entre as melhores, mais lembradas e respeitadas empresas do ramo.<br><br>
            <b>VALORES</b><br><br>Busca constante da melhoria e qualidade de seus produtos, na logística e no atendimento às necessidades de seus clientes<br>
            Comprometimento ético e valorização dos colaboradores, distribuidores e fornecedores.<br>
            Ética, Empreendedorismo, Transparência, Responsabilidade Social e ambiental, Credibilidade nos serviços, e Total higiene com os produtos fabricados.<br><br>
            </p>
        </div>

        <div id="contato">
            <h2>Entre em Contato Com  a Gente!!</h2>
            <div>
                <img src="Images/facebook.png" alt="Facebook Link">
                <p>@facebook/maisdoce</p>
            </div>
            <div>
                <img src="Images/instagram.png" alt="instagram link">
                <p>@maisdoce</p>
            </div>
            <div>
                <img src="Images/whatsapp.png" alt="whatsapp link">
                <p>(99)98765-4321</p>
            </div>

        </div>

        <div id="local">
            <h2>Estamos Aqui!!</h2>
            <img src="Images/map.png" height="600">
        </div>

        <footer>

            <ul class="footerUL">
                <li>
                   <a href="#topo">HOME</a>
                </li>
                <li>
                   <a href="#produtos">PRODUTOS</a>
                </li>
                <li>
                   <a href="#quemsomos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="#contato">CONTATO</a>
                </li>
                <li>
                    <a href="#local">LOCALIZAÇÃO</a>
                </li>
            </ul>

            <p>Nome: Patrick de  Oliveira</p>
            <p>RA:20038167-5</p>

        </footer>


    </body>


</html>    