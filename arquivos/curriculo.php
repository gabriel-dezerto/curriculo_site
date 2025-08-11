<?php
$dadosJson = file_get_contents("dados.json");
$usuario = json_decode($dadosJson, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Currículo Online</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="shortcut icon"
      type="imagex/png"
      href="../imagens/shortcut_icon.svg"
    />
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
            width="90px"
          />
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
              <a href="portfolio.php"><h2>Portfólios</h2></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="apresentacao">
        <div class="objetivo">
          <h1 class="h1_topicos">Objetivos</h1>
          <hr class="hr_formac" />
          <p class="text_obj">
          <?= $usuario['objetivo'] ?>
          </p>
        </div>
        <div class="formacao">
          <h1 class="h1_topicos">Formação</h1>
          <hr class="hr_formac" />
          <ul>
            <li class="li_formac">
            <?= $usuario['formacao']['formacao1'] ?>
            </li>
            <li class="li_formac">
            <?= $usuario['formacao']['formacao2'] ?>
            </li>
            <li class="li_formac">
            <?= $usuario['formacao']['formacao3'] ?>
            </li>
            <li class="li_formac">
            <?= $usuario['formacao']['formacao4'] ?>
            </li>
          </ul>
        </div>
      </div>
      <div class="dip">
        <h1 class="h1_topicos">Diplomas</h1>
        <hr class="hr_formac" />
        <ul>
          <li class="li_dip">
          <?= $usuario['diplomas']['diploma1'] ?>
          </li>
          <li class="li_dip"><?= $usuario['diplomas']['diploma2'] ?></li>
          <li class="li_dip">
          <?= $usuario['diplomas']['diploma3'] ?>
          </li>
          <li class="li_dip">
          <?= $usuario['diplomas']['diploma4'] ?>
          </li>
        </ul>
      </div>
      <div class="caracteristicas">
        <div class="hab_tec">
          <h1 class="h1_topicos">Habilidades Técnicas</h1>
          <hr class="hr_formac" />
          <ul>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec1'] ?></li>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec2'] ?></li>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec3'] ?></li>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec4'] ?></li>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec5'] ?></li>
            <li class="li_hab_tec"><?= $usuario['hab_tec']['hab_tec6'] ?></li>
          </ul>
        </div>
        <div class="hab_int">
          <h1 class="h1_topicos">Habilidades Interpessoais</h1>
          <hr class="hr_formac" />
          <ul>
            <li class="li_hab_int"><?= $usuario['hab_int']['hab_int1'] ?></li>
            <li class="li_hab_int"><?= $usuario['hab_int']['hab_int2'] ?></li>
            <li class="li_hab_int"><?= $usuario['hab_int']['hab_int3'] ?></li>
            <li class="li_hab_int"><?= $usuario['hab_int']['hab_int4'] ?></li>
            <li class="li_hab_int"><?= $usuario['hab_int']['hab_int5'] ?></li>
            <li class="li_hab_int">
            <?= $usuario['hab_int']['hab_int6'] ?>
            </li>
          </ul>
        </div>
        <div class="inf_add">
          <h1 class="h1_topicos">Informações adicionais</h1>
          <hr class="hr_formac" />
          <ul>
            <li class="li_inf_add">
            <?= $usuario['inf_add']['inf_add1'] ?>
            </li>
            <li class="li_inf_add">
            <?= $usuario['inf_add']['inf_add2'] ?>
            </li>
            <li class="li_inf_add">
            <?= $usuario['inf_add']['inf_add3'] ?>
            </li>
          </ul>
        </div>
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
  </body>
</html>
