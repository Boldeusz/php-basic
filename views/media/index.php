<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;


$this->title = "Our Guns";
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?php echo Html::encode($this->title) ?></h1>


<p>
    <?php echo Html::a('Upload file',['upload'],['class'=>'btn btn-primary']) ?>
    
</p>

<!--<div class="row">
    <?php 
    foreach ($medias as $media){
    ?>
    <div class="col-md-3">
        <div class="card">
            <img src="<?php echo Yii::getAlias('@web').'/'.$media->filepath; ?>" class="card-mg-top" width="100%">
            <div class="card-body">
                <h5 class="card-title"><?php echo $media->title; ?></h5>
        </div>
        </div>
    </div>
    <?php 
    }
    ?>
</div>-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    
<!--<div class="container">
 <div class="row justify-content-center">
     <div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
            <img class="card-img-top img-responsive" src="/images/handGun/beretta-m9.png"  alt="beretta-m9">
            <div class="card-body text-center">
                <h5 class="card-title">Beretta-m9</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
     </div>
     <div class="col-md-4">
         <div class="card shadow" style="width: 20rem;">
             <div class="inner">
                 <img class="card-img-top img-responsive img-thumbnail" src="/images/handGun/beretta-m9.png"  alt="beretta-m9">
             </div>
            <div class="card-body text-center">
                <h5 class="card-title" style="font-weight: 900;">Beretta-m9</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
     </div>
     <div class="col-md-4">
         <div class="card shadow" style="width: 20rem;">
            <img class="card-img-top img-responsive img-thumbnail" src="/images/handGun/beretta-m9.png"  alt="beretta-m9">
            <div class="card-body text-center">
                <h5 class="card-title">Beretta-m9</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
     </div>
 </div>

 </div>-->
<!--<div class="row">
    <?php 
    foreach ($medias as $media){
    ?>
    <div class="col-md-3">
        <div class="card">
            <img src="<?php echo Yii::getAlias('@web').'/'.$media->filepath; ?>" class="card-mg-top" width="100%">
            <div class="card-body">
                <h5 class="card-title"><?php echo $media->filename; ?></h5>
        </div>
        </div>
    </div>
    <?php 
    }
    ?>
</div>-->
<div>
    <h2 align="center">Our guns</h2>
   <br />
   <ul class="nav nav-tabs">
       <li>
                    <a class="navbar-brand current active" href="/">ALL</a>
                </li>
                <li>
                    <a href="/" class="current">Hand Guns</a>
                </li>
                <li>
                    <a href="#1" class="current">Rifles</a>
                </li>
                <li>
                    <a href="#1" class="current">Submachines</a>
                </li>
   </ul>
   <div class="tab-content">
   <br />
   
   </div>
</div>
<div class="container py-5">
    <div class="row mt-4">
        <?php 
            foreach ($medias as $media){
        ?>
         <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="inner">
                        <a href="http://localhost/index.php/exit/greet"><img src="<?php echo Yii::getAlias('@web').'/'.$media->filepath; ?>" class="card-img-top" width="60%" alt="Image"></a>
                    </div>
                <!--   <a href="http://localhost/index.php/exit/greet"> -->
                    
                    </div>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>
        <div style="clear:both"></div>
</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  <!--  <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a> -->
    <div id="carousel-example-generic" class="carousel slide" data-interval="false">
  <!-- Indicators -->
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner"   role="listbox">
    <div class="item active" >
        <img src="/images/handGun/beretta-m9.png" style="display: initial" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="/images/handGun/beretta-m9.png" style="display: initial" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    
    <div class="item">
      <img src="/images/handGun/beretta-m9.png" style="display: initial" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>


<!--<nav class="navbar navbar-nav" role="navigation">
    <div class="container">
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" aria-expanded="true">
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-brand current active" href="/">ALL</a>
                </li>
                <li>
                    <a href="/" class="current">Hand Guns</a>
                </li>
                <li>
                    <a href="#1" class="current">Rifles</a>
                </li>
                <li>
                    <a href="#1" class="current">Submachines</a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>-->



