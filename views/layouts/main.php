<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\SbadminAsset;


SbadminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">

    <!-- Sidebar -->
   
    <!-- End of Sidebar -->
 <?php include "left.php"?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "header.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">
        
        <?= Alert::widget() ?>
        <?= $content ?>
		
    </div>
        <!-- /.container-fluid -->
<?php include "foot.php" ?>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
	  
     
	 
      <!-- End of Footer -->

    </div>
	
	 
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
