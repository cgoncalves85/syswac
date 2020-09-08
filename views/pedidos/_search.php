<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'formato') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'modalidad') ?>

    <?php // echo $form->field($model, 'nombre_proyecto') ?>

    <?php // echo $form->field($model, 'proposito') ?>

    <?php // echo $form->field($model, 'ext_palabras') ?>

    <?php // echo $form->field($model, 'paises') ?>

    <?php // echo $form->field($model, 'idioma') ?>

    <?php // echo $form->field($model, 'seo') ?>

    <?php // echo $form->field($model, 'palabras_claves') ?>

    <?php // echo $form->field($model, 'palabras_secundarias') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'archivo_adjunto') ?>

    <?php // echo $form->field($model, 'grabacion') ?>

    <?php // echo $form->field($model, 'publico') ?>

    <?php // echo $form->field($model, 'perspectiva') ?>

    <?php // echo $form->field($model, 'fecha_entrega') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
