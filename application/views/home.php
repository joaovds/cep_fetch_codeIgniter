<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/global.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/home.css') ?>" />
    <title>Home</title>
  </head>
  <body>
    <?php if($this->session->userdata('logado')) { ?>
    <header>
      <span class="day">Qui, 19 Agosto</span>

      <strong> Seja bem-vindo(a), <?= $_SESSION['logado']['name'] ?>! </strong>

      <a href="<?= base_url('logout') ?>"> Sair </a>
    </header>

    <section class="container">
      <header>
        <h1>Suas informações:</h1>
        <a href="index.php?action=edit" class="toggleActionButton">Editar</a>
      </header>

      <main>
        <div>
          <div class="input-group">
            <span>Estado</span>
            <select id="uf" name="uf">
              <option value="SP">São Paulo</option>
            </select>
          </div>

          <div class="input-group">
            <span>Bairro</span>
            <input type="text" value="Jardim dos girassóis" readonly>
          </div>
        </div>

        <div>
          <div class="input-group">
            <span>Cidade</span>
            <select id="city" name="city">
              <option value="Peruíbe">Peruíbe</option>
            </select>
          </div>

          <div class="input-group-2">
            <div class="input-group">
              <span>Rua</span>
              <input type="text" value="Jones Victor" readonly>
            </div>
            <div class="input-group">
              <span>Número</span>
              <input type="number" value="1207" readonly>
            </div>
          </div>
        </div>
      </main>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/pt-br.min.js"></script>
    <script type="module" src="<?= base_url('/assets/js/home.js') ?>"></script>
    <script type="module" src="<?= base_url('/assets/js/update.js') ?>"></script>

    <?php } else { redirect(base_url('login')); };  ?>
  </body>
</html>
