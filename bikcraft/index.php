<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bikcraft - Bicicletas Elétricas</title>
  <meta name="description" content="Bicicletas elétricas de alta precisão e qualidade, feitas sob medida para o cliente. Explore o mundo na sua velocidade com a Bikcraft.">

  <link rel="preload" href="./css/style.css" as="style">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header class="header-bg">
    <div class="header container">
      <a href="./">
        <img src="./img/bikcraft.svg" width="136" height="32" alt="Bikcraft">
      </a>

      <nav aria-label="primaria">
        <ul class="header-menu font-1-m cor-0">
          <li><a href="./bicicletas.html">Bicicletas</a></li>
          <li><a href="./seguros.html">Seguros</a></li>
          <li><a href="./contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="introducao-bg">
    <div class="introducao container">
      <div class="introducao-conteudo">
        <h1 class="font-1-xxl cor-0">Bicicletas feitas sob medida<span class="cor-p1">.</span></h1>
        <p class="font-2-l cor-5">Bicicletas elétricas de alta precisão e qualidade, feitas sob medida para você. Explore o mundo na sua velocidade com a Bikcraft.</p>
        <a class="botao" href="./bicicletas.html">Escolha a sua</a>
      </div>
      <picture>
        <source media="(max-width: 800px)" srcset="./img/bicicletas/nimbus.jpg">
        <img src="./img/fotos/introducao.jpg" width="1280" height="1600" alt="Bicicleta elétrica preta.">
      </picture>
    </div>
  </main>

  <article class="bicicletas-lista">
    <h2 class="container font-1-xxl">escolha a sua<span class="cor-p1">.</span></h2>

    <ul>


      <?php $resultado = [];
      foreach ($resultado as $item) { ?>
        <li>
          <a href="./bicicletas/<?= explode(" ", $item->getNome())[0] ?>.html">
          <img src="./img/bicicletas/<?= $item->getImagemName()?>" alt="Bicicleta preta">
          <h3 class="font-1-xl"><?= $item->getNome()?></h3>
          <span class="font-2-m cor-8">R$ <?= $item->getPreco()?></span>
          </a>
        </li>
      <?php }?>


      <li>
        <a href="./bicicletas/magic.html">
          <img src="./img/bicicletas/magic-home.jpg" alt="Bicicleta preta" width="920" height="1040">
          <h3 class="font-1-xl">Magic Might</h3>
          <span class="font-2-m cor-8">R$ 2499</span>
        </a>
      </li>
      <li>
        <a href="./bicicletas/nimbus.html">
          <img src="./img/bicicletas/nimbus-home.jpg" alt="Bicicleta preta" width="920" height="1040">
          <h3 class="font-1-xl">Nimbus Stark</h3>
          <span class="font-2-m cor-8">R$ 4999</span>
        </a>
      </li>
      <li>
        <a href="./bicicletas/nebula.html">
          <img src="./img/bicicletas/nebula-home.jpg" alt="Bicicleta preta" width="920" height="1040">
          <h3 class="font-1-xl">Nebula Cosmic</h3>
          <span class="font-2-m cor-8">R$ 3999</span>
        </a>
      </li>
    </ul>
  </article>

  <article class="tecnologia-bg">
    <div class="tecnologia container">
      <div class="tecnologia-conteudo">
        <span class="font-2-l-b cor-5">Tecnologia Avançada</span>
        <h2 class="font-1-xxl cor-0">você escolhe as suas cores e componentes<span class="cor-p1">.</span></h2>
        <p class="font-2-l cor-5">Cada Bikcraft é única e possui a sua identidade. As medidas serão exatas para o seu corpo e altura, garantindo maior conforto e ergonomia na sua pedalada. Você pode também personalizar completamente as suas cores.</p>
        <a class="link" href="./bicicletas.html">Escolha um modelo</a>
        <div class="tecnologia-vantagens">
          <div>
            <img src="./img/icones/eletrica.svg" width="24" height="24" alt="">
            <h3 class="font-1-m cor-0">Motor Elétrico</h3>
            <p class="font-2-s cor-5">Toda Bikcraft é equipada com um motor elétrico que possui duração de até 120h. A bateria é recarregada com a sua energia gasta ao pedalar.</p>
          </div>
          <div>
            <img src="./img/icones/rastreador.svg" width="24" height="24" alt="">
            <h3 class="font-1-m cor-0">Rastreador</h3>
            <p class="font-2-s cor-5">Sabemos o quão preciosa é a sua Bikcraft, por isso adicionamos rastreadores e sistemas anti-furto para garantir o seu sossego.</p>
          </div>
        </div>
      </div>
      <div class="tecnologia-imagem">
        <img src="./img/fotos/tecnologia.jpg" width="1200" height="1920" alt="">
      </div>
    </div>
  </article>

  <section class="parceiros" aria-label="Nossos Parceiros">
    <h2 class="container font-1-xxl">nossos parceiros<span class="cor-p1">.</span></h2>

    <ul>
      <li><img src="./img/parceiros/caravan.svg" alt="Caravan" width="140" height="38"></li>
      <li><img src="./img/parceiros/ranek.svg" alt="Ranek" width="149" height="36"></li>
      <li><img src="./img/parceiros/handel.svg" alt="Handel" width="140" height="50"></li>
      <li><img src="./img/parceiros/dogs.svg" alt="Dogs" width="152" height="39"></li>
      <li><img src="./img/parceiros/lescone.svg" alt="LeScone" width="208" height="41"></li>
      <li><img src="./img/parceiros/flexblog.svg" alt="FlexBlog" width="165" height="38"></li>
      <li><img src="./img/parceiros/wildbeast.svg" alt="Wildbeast" width="196" height="34"></li>
      <li><img src="./img/parceiros/surfbot.svg" alt="Surfbot" width="200" height="49"></li>
    </ul>
  </section>

  <section class="depoimento" aria-label="Depoimento">
    <div>
      <img src="./img/fotos/depoimento.jpg" width="1560" height="1360" alt="Pessoa pedalando uma bicicleta Bikcraft">
    </div>
    <div class="depoimento-conteudo">
      <blockquote class="font-1-xl cor-p5">
        <p>Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.</p>
      </blockquote>
      <span class="font-1-m-b cor-p4">Ana Júlia</span>
    </div>
  </section>

  <article class="seguros-bg">
    <div class="seguros container">
      <h2 class="font-1-xxl cor-0">seguros<span class="cor-p1">.</span></h2>
      <div class="seguros-item">
        <h3 class="font-1-xl cor-6">PRATA</h3>
        <span class="font-1-xl cor-0">R$ 199 <span class="font-1-xs cor-6">mensal</span></span>
        <ul class="font-2-m cor-0">
          <li>Duas trocas por ano</li>
          <li>Assistência técnica</li>
          <li>Suporte 08h às 18h</li>
          <li>Cobertura estadual</li>
        </ul>
        <a class="botao secundario" href="./orcamento.html">Inscreva-se</a>
      </div>

      <div class="seguros-item">
        <h3 class="font-1-xl cor-p1">OURO</h3>
        <span class="font-1-xl cor-0">R$ 299 <span class="font-1-xs cor-6">mensal</span></span>
        <ul class="font-2-m cor-0">
          <li>Cinco trocas por ano</li>
          <li>Assistência especial</li>
          <li>Suporte 24h</li>
          <li>Cobertura nacional</li>
          <li>Desconto em parceiros</li>
          <li>Acesso ao Clube Bikcraft</li>
        </ul>
        <a class="botao" href="./orcamento.html">Inscreva-se</a>
      </div>
    </div>
  </article>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="./img/bikcraft.svg" width="136" height="32" alt="Bikcraft">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
          <li><a href="mailto:contato@bikcraft.com">contato@bikcraft.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="./img/redes/instagram.svg" width="32" height="32" alt="Instagram">
          </a>
          <a href="./">
            <img src="./img/redes/facebook.svg" width="32" height="32" alt="Facebook">
          </a>
          <a href="./">
            <img src="./img/redes/youtube.svg" width="32" height="32" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./bicicletas.html">Bicicletas</a></li>
            <li><a href="./seguros.html">Seguros</a></li>
            <li><a href="./contato.html">Contato</a></li>
            <li><a href="./termos.html">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Bikcraft © Alguns direitos reservados.</p>
    </div>
  </footer>
</body>

</html>