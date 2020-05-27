<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;


/* @var $this yii\web\View */

$this->title = 'My shooting Application'; /* tytul z main.php*/
?>
<div class="site-index  ">
<?php 
    foreach (Yii::$app->params['languages'] as $key => $language) {
        echo '<span class="language" id="'.$key.'">'.$language.' | </span>';
    }
    
    
    
    ?>
    <div class="jumbotron block-1">
        <div class="sticky"><h1>Congratulations!</h1></div>
        
        
        <p class="lead"><?= Yii::t('app','Welcome') ?> to my project</p> 
        <p class="lead"><?=  Yii::$app->formatter->asDate('2015-09-28', 'long') ?></p>
        
        <p><?=  \Yii::t('app', 'There {n,plural,=0{are no cats} =1{is one cat} other{are # cats}}!', ['n' => 0]);?></p>
        <p><?=  \Yii::t('app', 'There {n,plural,=0{are no cats} =1{is one cat} other{are # cats}}!', ['n' => 1]);?></p>
        <p><?=  \Yii::t('app', 'There {n,plural,=0{are no cats} =1{is one cat} other{are # cats}}!', ['n' => 5]);?></p>
    
      <!--  <h1>Congratulations!</h1> -->
        <!-- <?= Html::script('alert("Hello!");') ?> -->

        <p class="lead">You have successfully created your Yii-powered application.</p>
        

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
        </div>
    <div class="body-content">
        

        <div class="row">
            <div class="col-lg-4">
                <h2><?= Yii::t('app','Heading') ?></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
    <div class="block-2"></div>
    <div class="block-3">
        <div class="sticky">Lobortis & nostrud</div>
        
    </div>
    </div>
    <!--<div class="block-1">
        <div class="sticky">Neu te ut dolore</div>
            
    </div>
    <div class="block-2"></div>
    <div class="block-3">
        <div class="sticky">Lobortis & nostrud</div>
        
    </div> -->

    
    
</div>
