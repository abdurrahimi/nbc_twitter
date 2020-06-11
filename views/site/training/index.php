<?php
/* @var $this yii\web\View */
$this->params['training'] = "active";
use yii\grid\GridView;
use yii\helpers\Html;

?>
<h1>Training Data Twitter</h1>

<p>
<button onclick="fungsiSaya()" class="btn btn-success">Tambah Data Training</button>
 
<div id="target" style="display:none">
   <?php
   include 'search.php';   
   ?>
  </div>
   <?php
   	if(isset($data)){ ?>
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
                      <?= \yii\helpers\Html::beginForm(Yii::$app->urlManager->createUrl(['twitter/save'])) ?>
                      
                      <?php 
                      $i = 0;
                      foreach ($data as $key => $value) { 
                        ?>
                        <tr>
                          <td><?= $value['user']['name'] ?></td>
                          <td><?= $value['text'] ?></td>
                          <td>
                            <p><label><input type='radio' name=kategori[<?php print $i; ?>] value='positif' />Positif</label></p>
                            <p><label><input type='radio' name=kategori[<?php print $i; ?>] value='negatif' />Negatif</label></p>
                            <p><label><input type='radio' name=kategori[<?php print $i; ?>] value='netral' />Netral</label></p>
                                <input type='text' name=nama[<?php print $i; ?>] value='<?= $value['user']['name'] ?>' hidden/>
                              <input type='text' name=tweet[<?php print $i; ?>] value='<?= $value['text'] ?>' hidden/>
                          </td>
                        </tr>
                     <?php 
                     $i++;
                      } 
                      ?>
                     
                      <input type='submit' name='submit' class="btn btn-primary btn-lg" value='Simpan'>
                      <?= \yii\helpers\Html::endForm() ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
			<?php } ?>
</p>

<?php 
if (isset($dataProvider)){
?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Training</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                      ['label' => 'Tweet', 'attribute'=>'text'],
                      ['label' => 'Kategori', 'attribute'=>'flag'],
                        ],
                    ]); ?>
                  
              </div>
            </div>
          </div>


   
</div>
<?php 
}
?>

<script>
function fungsiSaya() {
  var x = document.getElementById("target");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>