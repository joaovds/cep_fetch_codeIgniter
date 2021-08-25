<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/global.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/login.css') ?>">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <form action="<?= base_url('logar') ?>" method="post">
        <h1>Login</h1>

        <div class="input-group">
          <span>Email</span>
          <input type="email" name="email">
        </div>
        <div class="input-group">
          <span>Senha</span>
          <input type="password" name="password">
        </div>

        <button type="submit">
          Entrar
        </button>

        <span>
          Ainda não tem conta? <a href="register">Crie uma agora</a>
        </span>
      </form>
    </div>
  </body>
</html>
