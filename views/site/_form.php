<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    $this->title = Yii::t('app', 'Create New Cliente');
?>

<div id="create-client">
    <?php $form = ActiveForm::begin(['class' => 'form-horizontal']);?>
    
    <h1><?= Html::encode($this->title) ?></h1>
    <?=$form->field($model, 'customer_name')->textInput()?>
    <?=$form->field($model, 'customer_email')->textInput(['type' => 'email'])?>
    <?=$form->field($model, 'customer_mobile')->textInput(['type' => 'email'])?>

    <?=Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success',
    'data-confirm' => Yii::t('app', 'Do you want to create the new record ?'),
    'data-method' => 'post'
])?>


    

    <?php ActiveForm::end();?>
</div>