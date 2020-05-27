<?php

/* @var $this yii\web\View */
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::style('.danger { color: #f00; }', ['media' => 'print']) ?>
    <div><?= Html::radio('agree', false, ['label' => 'I agree']) ?>
    <?= Html::radio('agree', false, ['label' => 'I do not agree']) ?>
    </div>
    <?= Html::checkbox('agree', true, ['label' => 'I agree']) ?>
    
    <?= Html::button('Press me!', ['class' => 'teaser']) ?>
    <!--<?= Html::img('@web/images/zdjecie1.jpg', ['alt' => 'My logo']) ?>-->
    <?= Html::mailto('Contact us', 'admin@example.com') ?>


    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <p>
      <?= Html::encode("<script>alert('alert!');</script><h1>ENCODE EXAMPLE</h1>>") ?>
   </p>
   <?= $this->render("_part1") ?>
   <?= $this->render("_part2") ?>
    <p>
        <p>
      <b>email:</b> <?= $email ?>
   </p>
   <p>
      <b>phone:</b> <?= $phone ?>
   </p>
      <?= HtmlPurifier::process("<script>alert('alert!');</script><h1> HtmlPurifier EXAMPLE</h1>") ?>
   </p>
   <?php
      echo DateTimePicker::widget([
         'name' => 'dp_1',
         'type' => DateTimePicker::TYPE_INPUT,
         'value' => '23-Feb-1982 10:10',
         'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd-M-yyyy hh:ii'
         ]
      ]);
   ?>

    <code><?= __FILE__ ?></code>
</div>
