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
    <title><?= $data['title']=$this->lang->line('title') ?></title>
  </head>
  <body>
    <div class="container">
      <form action="<?= base_url('logar') ?>" method="post">
        <h1><?= $data['title']=$this->lang->line('title') ?></h1>

        <div class="input-group">
          <span><?= $data['labelEmail']=$this->lang->line('labelEmail') ?></span>
          <input type="email" name="email">
        </div>
        <div class="input-group">
          <span><?= $data['labelPassword']=$this->lang->line('labelPassword') ?></span>
          <input type="password" name="password">
        </div>

        <button type="submit">
          <?= $data['button']=$this->lang->line('button') ?>
        </button>

        <span>
          <?= $data['span']=$this->lang->line('span') ?>
          <a href="register">
            <?= $data['link']=$this->lang->line('link') ?>
          </a>
        </span>
        <span style="display: flex; justify-content: space-around; margin-top: 40px;">
          <a href="login">PT-BR</a>
          <a href="login2">EN-US</a>
        </span>
      </form>
    </div>
  </body>
</html>
