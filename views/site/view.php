<?php
 
 use yii\helpers\Html;
 use yii\widgets\DetailView;
 
 
/* @var $this yiiwebView */
/* @var $model appmodelsOrders */
 
$this->title = 'Detail';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">
 
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'customer_name',
            'customer_email',
            'customer_mobile',
            'created_at',
            'status'
        ],
    ]) ?>
 
</div>