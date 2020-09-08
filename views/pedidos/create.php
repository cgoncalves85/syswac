<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidos */

$this->title = 'We Are Content - Nuevo Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-create">

	
	    <?= $this->render('_form', [
	        'model' => $model,
	        'formatos' => $formatos,
            'tipos' => $tipos,
            'categorias' => $categorias,
            'paises' => $paises,
            'idiomas' => $idiomas,
	    ]) ?>
	
</div>
