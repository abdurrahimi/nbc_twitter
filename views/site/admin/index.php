<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admins';
$this->params['breadcrumbs'][] = $this->title;
?>




<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>

             
            <div class="card-body">
              <?= Html::a('Create Admin', ['create'], ['class' => 'btn btn-success pull-left']) ?>
              <div class="table-responsive">
                
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                      ['label' => 'Username', 'attribute'=>'username'],
                      ['label' => 'Nama Admin', 'attribute'=>'nama_admin'],
                      ['label' => 'Telepon', 'attribute'=>'telepon'],
                      ['label' => 'Email', 'attribute'=>'email'],
                      ['label' => 'Status', 'attribute'=>'status'],
                      ['label' => 'Tanggal', 'attribute'=>'tanggal'],
                            ['class' => 'yii\grid\ActionColumn','template' => '{update} {delete}'],
                        ],
                    ]); ?>
                  
              </div>
            </div>
          </div>


   
</div>