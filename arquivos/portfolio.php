<?php
$dadosJson = file_get_contents("dados.json");
$usuario = json_decode($dadosJson, true);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfólios</title>
  <link rel="stylesheet" href="portfolio.css" />
  <link rel="shortcut icon" href="../imagens/icon_portfolio.svg" />
</head>

<body>
  <header>
    <div class="nome">
      <h2><?= $usuario['nome'] ?></h2>
      <p>
      <a href="#contato">Contatos</a>
      </p>
    </div>
    <div class="uscs">
      <div class="uscs_logo">
        <img
          src="../imagens/uscs_logo.png"
          alt="Universidade de São Caetano do Sul"
          width="90px" />
      </div>
    </div>
    <div class="senai">
      <div class="senai_logo">
        <img src="../imagens/senai_logo.png" alt="SENAI" width="170px" />
      </div>
    </div>
    <div class="navbar">
      <nav>
        <ul class="navUl">
          <li class="navLi">
            <a href="curriculo.php">
              <h2>Currículo</h2>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="accordion-container">
      <button class="accordion-button" onclick="toggleAccordion(this)">
        1° projeto - Site HTML com tema do Corinthians
        <span class="arrow">▶</span>
      </button>
      <div class="accordion-content">
        <p>
          Este foi meu primeiro projeto, desenvolvido utilizando apenas HTML.
          Ele surgiu após as primeiras aulas do curso do SENAI, com o objetivo
          de praticar a estruturação de páginas e o uso das principais tags
          aprendidas. A linguagem CSS não foi aplicada, pois até então não
          havia sido abordada pelo professor. O foco era entender e exercitar
          a base da marcação em HTML.
          <br />
          <br />
          O projeto pode ser visuzalizado no GitHub:
          <a
            class="link_vizu"
            target="_blank"
            href="https://github.com/gabriel-dezerto/primeiro-site.git">
            https://github.com/gabriel-dezerto/primeiro-site.git
          </a>
        </p>
      </div>
    </div>
    <!--Slider do 1° projeto-->
    <div class="container-slider">
      <button id="prev-button" onclick="prevSlider()">
        <img src="../imagens/seta_sliders.png" alt="prev-button" />
      </button>
      <div class="container-images">
        <img src="../imagens/projeto1_home.png" class="slider on" />
        <img src="../imagens/projeto1_tela2.png" class="slider" />
        <img src="../imagens/projeto1_tela3.png" class="slider" />
        <img src="../imagens/projeto1_ft.png" class="slider" />
      </div>
      <button id="next-button" onclick="nextSlider()">
        <img src="../imagens/seta_sliders.png" alt="next-button" />
      </button>
    </div>
    <!---------------------------------------------------------------->
    <div class="accordion-container">
      <button class="accordion-button" onclick="toggleAccordion(this)">
        2° projeto - Site em trio com tema de loja de carros
        <span class="arrow">▶</span>
      </button>
      <div class="accordion-content">
        <p>
          O segundo projeto foi desenvolvido em trio durante as aulas do
          SENAI, com foco em cooperação e trabalho em equipe. Criamos um site
          voltado para uma loja de carros de luxo, destacando veículos das
          marcas Mercedes, Ferrari, Porsche e Lamborghini — cada uma com três
          modelos selecionados pelos integrantes do grupo. O nome do site,
          GCM, faz referência às iniciais dos integrantes: Gabriel, Cauã e
          Mateus. Neste projeto, utilizamos recursos mais avançados de HTML e
          incluímos o uso do CSS, o que possibilitou uma estrutura mais
          organizada e uma personalização visual mais impactante, com o
          objetivo de valorizar a apresentação dos veículos.
          <br />
          <br />
          O projeto pode ser visuzalizado no GitHub:
          <a
            class="link_vizu"
            target="_blank"
            href="https://github.com/gabriel-dezerto/gcm-automobilistica.git">
            https://github.com/gabriel-dezerto/gcm-automobilistica.git
          </a>
        </p>
      </div>
    </div>
    <!--Slider do 2° projeto-->
    <div class="container-slider2">
      <button id="prev-button2" onclick="prevSlider2()">
        <img src="../imagens/seta_sliders.png" alt="prev-button" />
      </button>
      <div class="container-images2">
        <img
          src="../imagens/projeto2_home1.png"
          
          class="slider2 on" />
        <img src="../imagens/projeto2_home2.png" class="slider2" />
        <img src="../imagens/projeto2_home3.png" class="slider2" />
        <img src="../imagens/projeto2_sobre1.png" class="slider2" />
        <img src="../imagens/projeto2_sobre2.png" class="slider2" />
        <img
          src="../imagens/projeto2_contato1.png"
          
          class="slider2" />
        <img
          src="../imagens/projeto2_contato2.png"
          
          class="slider2" />
      </div>
      <button id="next-button2" onclick="nextSlider2()">
        <img src="../imagens/seta_sliders.png" alt="next-button" />
      </button>
    </div>
    <!---------------------------------------------------------------->
    <div class="accordion-container">
      <button class="accordion-button" onclick="toggleAccordion(this)">
        3° projeto - Projeto integrador do curso do SENAI
        <span class="arrow">▶</span>
      </button>
      <div class="accordion-content">
        <p>
          Este projeto foi desenvolvido em trio e integrou diversas
          disciplinas em um único trabalho. A proposta era criar um site para
          uma locadora de veículos com um diferencial: trabalhar
          exclusivamente com carros de marcas japonesas. O nome do site, HCG,
          foi formado a partir das iniciais dos fundadores — Henrique, Cauã e
          Gabriel. O site foi construído utilizando HTML, CSS, JavaScript e
          PHP, e incorporou diversas funcionalidades, como um slider
          automático de imagens que exibia os carros disponíveis, um sistema
          de tema claro/escuro que reconhecia automaticamente a preferência do
          usuário no navegador, e uma barra de pesquisa que permitia buscar
          por marcas e exibir os respectivos veículos. Também foi implementado
          um marquee na parte inferior da página inicial para destacar as
          marcas disponíveis, além de uma página individual para cada carro,
          onde era possível fazer a reserva do veículo. Por fim, foi
          desenvolvido um sistema de login e criação de conta, com validação
          de credenciais, permitindo o acesso apenas com os dados corretos. O
          projeto foi apresentado no final do semestre para professores e
          alunos de outras turmas, recebendo destaque pela sua qualidade e
          pelas funcionalidades implementadas.
          <br />
          <br />
          O projeto pode ser visuzalizado no GitHub:
          <a
            class="link_vizu"
            target="_blank"
            href="https://github.com/gabriel-dezerto/hcg-auto.git">
            https://github.com/gabriel-dezerto/hcg-auto.git
          </a>
        </p>
      </div>
    </div>
    <!--Slider do 3° projeto-->
    <div class="container-slider3">
      <button id="prev-button3" onclick="prevSlider3()">
        <img src="../imagens/seta_sliders.png" alt="prev-button" />
      </button>
      <div class="container-images3">
        <img
          src="../imagens/projeto3_home1.png"
          class="slider3 on" />
        <img
          src="../imagens/projeto3_homeEscuro.png"
          class="slider3" />
        <img
          src="../imagens/projeto3_homeClaro.png"
          class="slider3" />
        <img src="../imagens/projeto3_home2.png"  class="slider3" />
        <img
          src="../imagens/projeto3_pesquisa.png"
          class="slider3" />
        <img src="../imagens/projeto3_home3.png" class="slider3" />
        <img src="../imagens/projeto3_home4.png" class="slider3" />
        <img
          src="../imagens/projeto3_carros1.png"
          class="slider3" />
        <img
          src="../imagens/projeto3_carros2.png"
          class="slider3" />
        <img
          src="../imagens/projeto3_carros3.png"
          class="slider3" />
        <img
          src="../imagens/projeto3_carroReserva.png"
          class="slider3" />
        <img src="../imagens/projeto3_conta.png"  class="slider3" />
        <img
          src="../imagens/projeto3_criarConta.png"
          
          class="slider3" />
        <img src="../imagens/projeto3_sobre1.png"  class="slider3" />
        <img src="../imagens/projeto3_sobre2.png"  class="slider3" />
        <img src="../imagens/projeto3_sobre3.png"  class="slider3" />
        <img
          src="../imagens/projeto3_contato1.png"
          
          class="slider3" />
        <img
          src="../imagens/projeto3_contato2.png"
          
          class="slider3" />
      </div>
      <button id="next-button3" onclick="nextSlider3()">
        <img src="../imagens/seta_sliders.png" alt="next-button" />
      </button>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="accordion-container">
      <button class="accordion-button" onclick="toggleAccordion(this)">
        4° projeto - Jogo da Velha em linguagem C
        <span class="arrow">▶</span>
      </button>
      <div class="accordion-content">
        <p>
          Este projeto foi desenvolvido em trio como parte da disciplina de Algoritmos e Estruturas de Dados I, na Universidade de São Caetano do Sul. O objetivo era implementar um jogo da velha em linguagem C, utilizando os principais conceitos aprendidos em sala de aula, como funções, matrizes, vetores, estruturas condicionais (if/else), comandos básicos (printf e scanf) e estruturas de repetição (while e for). O jogo conta com funcionalidades como alternância entre jogadores, verificação de vitória e empate, checagem de espaços já ocupados e exibição do vencedor ao final da partida. O trabalho foi concluído com sucesso e passou por todos os testes propostos, funcionando corretamente em todas as situações avaliadas. 
          <br />
            <br />
            O projeto pode ser visuzalizado no GitHub:
            <a
              class="link_vizu"
              target="_blank"
              href="https://github.com/gabriel-dezerto/jogo-da-velha-em-C.git"
            >
              https://github.com/gabriel-dezerto/jogo-da-velha-em-C.git
            </a>
        </p>
      </div>
    </div>
    <!--Slider do 4° projeto-->
    <div class="container-slider4">
      <button id="prev-button4" onclick="prevSlider4()">
        <img src="../imagens/seta_sliders.png" alt="prev-button" />
      </button>
      <div class="container-images4">
        <img src="../imagens/jogodavelha1.png"  class="slider4 on" />
        <img src="../imagens/jogodavelha2.png"  class="slider4" />
        <img src="../imagens/jogodavelha3.png"  class="slider4" />
        <img src="../imagens/jogodavelha4.png"  class="slider4" />
      </div>
      <button id="next-button4" onclick="nextSlider4()">
        <img src="../imagens/seta_sliders.png" alt="next-button" />
      </button>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="accordion-container">
      <button class="accordion-button" onclick="toggleAccordion(this)">
        5° projeto - Arquitetura de redes
        <span class="arrow">▶</span>
      </button>
      <div class="accordion-content">
        <p>
        No curso do SENAI, participei da disciplina de Arquitetura de Redes,
            que combinou teoria e prática para aprofundar o entendimento sobre o
            funcionamento de redes de computadores. Durante as aulas, trabalhei
            com conceitos como IP e máscara de sub-rede, configuração de
            switches, criação e gerenciamento de VLANs, utilização do VTP
            Server, implementação do STP para prevenção de loops, configuração
            de EtherChannel e uso do DHCP para atribuição automática de
            endereços. Também configurei roteadores com rotas estáticas e
            dinâmicas, além de protocolos de roteamento como OSPF e recursos de
            redundância como o HSRP. Todas essas atividades foram aplicadas em
            laboratórios e simulações, permitindo vivenciar cenários reais de
            configuração e manutenção de redes.
          </p>
        </div>
      </div>
      <!--Slider do 5° projeto-->
      <div class="container-slider5">
        <button id="prev-button5" onclick="prevSlider5()">
          <img src="../imagens/seta_sliders.png" alt="prev-button" />
        </button>
        <div class="container-images5">
          <img src="../imagens/ARI_SWITCH.png" class="slider5 on" />
          <img src="../imagens/ARI_RIP.png" class="slider5" />
          <img src="../imagens/ARI_3routers.png" class="slider5" />
          <img src="../imagens/ARI_OSPF.png" class="slider5" />
          <img src="../imagens/ARI_HSRP.png" class="slider5" />
      </div>
      <button id="next-button5" onclick="nextSlider5()">
        <img src="../imagens/seta_sliders.png" alt="next-button" />
      </button>
    </div>

  </main>
  <footer>
      <div class="div_h1_footer">
        <h1 class="h1_footer" id="contato">Contatos</h1>
      </div>
      <div class="footer_A">

        <a href="mailto:<?= $usuario['email'] ?>" style="text-decoration: none;" target="_blank">
          <div class="footer_B">
            <img src="../imagens/envelope-email.svg" class="email">
            <p><?= $usuario['email'] ?></p>
          </div>
        </a>

        <a href="<?= $usuario['linkedin']?>" style="text-decoration: none;" target="_blank">
          <div class="footer_B">
            <img src="../imagens/linkedin-icon.svg" class="linkedin">
            <p style="margin-top: -10px;"><?= $usuario['nome_linkedin'] ?></p>
          </div>
        </a>

        <a href="<?= $usuario['github']?>" style="text-decoration: none;" target="_blank">
          <div class="footer_B">
            <img src="../imagens/github-icon.svg" class="github">
            <p><?= $usuario['nome_git'] ?></p>
          </div>
        </a>

        <a href="<?= $usuario['maps']?>" style="text-decoration: none;" target="_blank">
          <div class="footer_B">
            <img src="../imagens/maps-icon.svg" class="telefone">
            <p><?= $usuario['nome_maps'] ?></p>
          </div>
        </a>

      </div>
    </footer>
  <script src="portfolio.js" defer></script>
</body>


</html>
