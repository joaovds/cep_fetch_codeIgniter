<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/global.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/register.css') ?>">
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <form action="<?= base_url('create') ?>" method="post">
        <h1>Register</h1>

        <main>
          <div>
            <div class="input-group">
              <span>Nome</span>
              <input type="text" name="name">
            </div>

            <div class="input-group">
              <span>Senha</span>
              <input type="password" name="password">
            </div>

            <div class="input-group">
              <span>Cidade</span>
              <select id="city" name="city">
                <option value="0">Selecione uma Cidade</option>
              </select>
            </div>

            <div class="input-group">
              <span>Rua</span>
              <input type="text" name="street">
            </div>
          </div>

          <div>
            <div class="input-group">
              <span>Email</span>
              <input type="text" name="email">
            </div>

            <div class="input-group">
              <span>Estado</span>
              <select id="uf" name="uf">
                <option value="0">Selecione uma UF</option>
              </select>
            </div>

            <div class="input-group">
              <span>Bairro</span>
              <input type="text" name="district">
            </div>

            <div class="input-group">
              <span>Número</span>
              <input type="number" name="number">
            </div>
          </div>
        </main>

        <button type="submit">
          Entrar
        </button>

        <span>
          Já possui uma conta? <a href="login">Faça login</a>
        </span>
      </form>
    </div>

    <script type="module" src="<?= base_url('/assets/js/register.js') ?>"></script>
  </body>
</html>
