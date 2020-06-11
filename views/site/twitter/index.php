<?php
/* @var $this yii\web\View */
$this->params['twitter'] = "active";
use yii\grid\GridView;
use yii\helpers\Html;

?>
<h1>twitter/index</h1>

<p>
   <?php
   include 'search.php';   
   ?>

   <?php
   	if(isset($dataProvider)){ ?>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Tweet</th>
                        <th>Kategori</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($dataProvider as $value) { ?>                     
                        <tr>
                          <td><?= $value['user']['name'] ?></td>
                          <td><?= $value['text'] ?></td>
                          <td><?= $result[$value['id_str']] ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
            </div>
          </div>
			<?php }
    ?>
</p>
