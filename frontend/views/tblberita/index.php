<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modelsTblBeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Beritas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-berita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->id_berita), ['view', 'id' => $model->id_berita]);
        },
    ]) ?>

</div>
