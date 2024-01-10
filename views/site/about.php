<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
  <div class="row">
    <div class="column">
      <div class="card">
        
        <div class="container">
          <h2>Bohdan Mahas</h2>
          <p class="title">*who created this website*</p>
          
          <p>bohdanmahas.work@gmail.com</p>
          <p><button class="button"><a href="https://www.linkedin.com/in/bohdan-mahas-ba608a294/" target="_blank">Contact</a></button></p>
        </div>
      </div>
    </div>
  </div>

</div>
