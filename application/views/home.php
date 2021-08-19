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
    <header>
      <span>Qui, 19 Agosto</span>

      <strong> Seja bem-vindo(a), João! </strong>

      <a href="#"> Sair </a>
    </header>

    <section class="container">
      <header>
        <h1>Suas informações:</h1>
        <a href="#">Editar</a>
      </header>

      <main>
        <div>
          <div class="input-group">
            <span>Estado</span>
            <input type="text" readonly>
          </div>

          <div class="input-group">
            <span>Bairro</span>
            <input type="text" readonly>
          </div>
        </div>

        <div>
          <div class="input-group">
            <span>Cidade</span>
            <input type="text" readonly>
          </div>

          <div class="input-group-2">
            <div class="input-group">
              <span>Rua</span>
              <input type="text" readonly>
            </div>
            <div class="input-group">
              <span>Número</span>
              <input type="number" readonly>
            </div>
          </div>
        </div>
      </main>
    </section>
  </body>
</html>
