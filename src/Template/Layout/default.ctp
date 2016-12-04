<?php

use Cake\Mailer\Email;
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'Hospedaje La Casa del Cardenal';
?>
    

<!doctype html>
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
  
  
  
  <?= $this->Html->css('animate.css') ?>
  <?= $this->Html->css('bootstrap.min.css') ?>
  <?= $this->Html->css('bootstrap.css') ?>
  <?= $this->Html->css('main.css') ?>
  <?= $this->Html->css('prettyPhoto.css') ?>
  <?= $this->Html->css('font-awesome.min.css') ?>
  <?= $this->Html->css('font-awesome.css') ?>
  <?= $this->Html->css('galeria.css') ?>
  

  
  

  <?= $this->Html->script('jquery-3.1.0.min.js') ?>
  <?= $this->Html->script('jquery.js') ?>
  <?= $this->Html->script('npm.js') ?>
  <?= $this->Html->script('respond.min.js') ?>
  <?= $this->Html->script('jquery.prettyPhoto.js') ?>
  <?= $this->Html->script('main.js') ?>
  <?= $this->Html->script('jquery.isotope.min.js') ?>
  <?= $this->Html->script('html5shiv.js') ?>
  <?= $this->Html->script(['jquery-3.1.0.min.js', 'bootstrap.min.js']) ?>
   <?= $this->Html->script('galeria.js') ?>
   <?= $this->Html->script('jssor.slider.debug.js') ?>
   <?= $this->Html->script('admin.js') ?>
  <?= $this->Html->script('custom.min.js') ?>
<?= $this->Html->script('custom.js') ?>
  <?= $this->Html->script('bootstrap.min.js') ?>
  
</head>

  

  
<body>
  
  
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>                
    
    <?= $this->element('header') ?>
    <?= $this->element('footer') ?>
    
  
  
  
  
</body>

  
  
  
  
  
  
  
  
  
</html>