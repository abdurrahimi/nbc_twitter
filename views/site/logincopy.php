<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-8 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            
              
              
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
					
					<hr>
					<h1 class="h4 text-gray-900 mb-4"></h1>
                  </div>
<<<<<<< HEAD
                  <?= \yii\helpers\Html::beginForm(Yii::$app->urlManager->createUrl(['site/login'])) ?>
=======
                  <?php
                 // use yii\bootstrap\ActiveForm;
                   $form = ActiveForm::begin([
								'id' => 'login-form',
								'layout' => 'horizontal',
								'fieldConfig' => [
									'template' => "<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
									//'labelOptions' => ['class' => 'form-control form-control-user'],
								],
							]); ?>
>>>>>>> 9a1b5891870b83525cf96415f6f084c0cc7141cd

                  
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                      Login
                    </a>
                    <hr>
                    <input type="submit" class="btn btn-submit btn-success" name="submit"/>
                  
				  <?= \yii\helpers\Html::endForm() ?>
                  
                  
                </div>
				
              </div>
          
          
        </div>

      </div>

    </div>

  </div>
</div>
