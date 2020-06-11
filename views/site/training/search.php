<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CrawlData */
/* @var $form ActiveForm */
?>
<div class="site-twitter-search">
<?php
 $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => Yii::$app->urlManager->createUrl(['twitter/training'])]);
?>
    <?= $form->field($model, 'keyword')->textInput([ 'placeholder' => 'Masukkan Keyword...'
    												]) ?> 
    <?= $form->field($model, 'total') ->textInput([
                                 'type' => 'number',
                                 'placeholder' => 'Masukkan jumlah'
                            ])->label(false)?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div><!-- site-twitter-search -->
