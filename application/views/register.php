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
      <form>
        <h1>Register</h1>

        <main>
          <div>
            <div class="input-group">
              <span>Nome</span>
              <input type="text">
            </div>

            <div class="input-group">
              <span>Senha</span>
              <input type="password">
            </div>

            <div class="input-group">
              <span>Estado</span>
              <input type="text">
            </div>

            <div class="input-group">
              <span>Rua</span>
              <input type="text">
            </div>
          </div>

          <div>
            <div class="input-group">
              <span>Email</span>
              <input type="text">
            </div>

            <div class="input-group">
              <span>Cidade</span>
              <input type="text">
            </div>

            <div class="input-group">
              <span>Bairro</span>
              <input type="text">
            </div>

            <div class="input-group">
              <span>Número</span>
              <input type="number">
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
  </body>
</html>
