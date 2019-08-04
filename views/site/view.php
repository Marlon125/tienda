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
        <?= Html::a(Yii::t('app', 'Pay {icon}', ['icon' => '<i class="glyphicon glyphicon-credit-card"></i>']), ['create'], ['class' => 'btn btn-success', 'style' => $model->status == 'PAYED' ? "display:none" : '']) ?>
        <?= Html::a('Back to List', ['list'], ['class' => 'btn btn-warning']) ?>
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