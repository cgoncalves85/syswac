<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light" id="sidebar-wrapper">
    <div class="sidebar-heading text-center"><?= Html::img('@web/img/icons/elipse.png') ?></div>
    <div class="list-group list-group-flush">

      <?= Html::a(Html::img('@web/img/icons/user.png', ['class' => 'img-icon-sidebar']).'Tu Panel', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>

      <?= Html::a(Html::img('@web/img/icons/bell.png', ['class' => 'img-icon-sidebar']).'Notificaciones', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>

      <?= Html::a(Html::img('@web/img/icons/book-open.png', ['class' => 'img-icon-sidebar']).'Pedidos', ['pedidos/create'], ['class' => 'list-group-item list-group-item-action bg-light active']) ?>        

      <?= Html::a(Html::img('@web/img/icons/count.png', ['class' => 'img-icon-sidebar']).'Cuenta', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>

      <?= Html::a(Html::img('@web/img/icons/calculator-alt.png', ['class' => 'img-icon-sidebar']).'Calculadora', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>      

      <?= Html::a(Html::img('@web/img/icons/wallet.png', ['class' => 'img-icon-sidebar']).'Créditos', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>

      <?= Html::a(Html::img('@web/img/icons/seo.png', ['class' => 'img-icon-sidebar']).'Análisis SEO', ['#'], ['class' => 'list-group-item list-group-item-action bg-light']) ?>       
    </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-content border-bottom">
      <button class="btn btn-default shadow-none" id="menu-toggle"><?= Html::img('@web/img/icons/chevron-right-7.png') ?></button>
      <div class="credit">Créditos Disponibles : <span class="text-bold">50</span></div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mt-m" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><?= Html::img('@web/img/icons/bell.png', ['class' => 'img-drop-down']) ?></a>
          </li>            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle drop-down" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user">
                <?= Html::img('@web/img/icons/image-user.png') ?>
              </div>
              <div class="user-name">Nombre Usuario</div>
              <div class="user-type">Cliente</div>

              <?= Html::img('@web/img/icons/chevron-right.png', ['class' => 'img-drop']) ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><?= Html::img('@web/img/icons/user.png', ['class' => 'img-icon-dropdown']) ?>Perfil de Usuario</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><?= Html::img('@web/img/icons/exit.png', ['class' => 'img-icon-dropdown']) ?>Salir</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-alert">
      <?= Alert::widget() ?>
    </div>
    <?= $content ?>
  </div>
  <!-- /#page-content-wrapper -->

  <footer class="footer">
    <div class="container-fluid container-footer">
      <div>Proceso de creación de proyecto:</div>
      <div class="text-verde text-bold">Valor proyecto: 50 créditos</div>
      <div class="line"><?= Html::img('@web/img/icons/line-button.png') ?></div>
      <button id="crea_pedido" type="button" class="btn btn-success btn-proceso">Crear pedido</button>
    </div>
  </footer>
</div>

<?php $this->endBody() ?>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      $("#menu-toggle").toggleClass("rota-img");
    });

    $("#crea_pedido").click(function(e) {
      e.preventDefault();
      $("#btn-pedido").click();
    });
  </script>


</body>
</html>
<?php $this->endPage() ?>
