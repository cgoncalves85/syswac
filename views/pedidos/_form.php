<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container container-proyecto">
  <div class="row">
    <div class="col d-none d-sm-block"></div>
    <div class="col-md-12 col-lg-8 mt-4">
      <h4 class="mt-4 text-bold"><b>Creación de pedido</b></h4>    
      <?php $form = ActiveForm::begin(['options' => ['class' => 'form-create-order']]); ?>
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <?= $form->field($model, 'formato')->dropDownList($formatos, ['class' => 'form-control form-control-lg select-custom']) ?>
        </div>
        <div class="col-md-6 col-lg-5">
          <?= $form->field($model, 'tipo')->dropDownList($tipos, ['class' => 'form-control form-control-lg select-custom']) ?>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10">
          <label for="categorias">Categoria</label>
          <?= Select2::widget([
              'bsVersion' => '4.x',
              'name' => 'Pedidos[categoria]',
              'data' => $categorias,
              'size' => Select2::LARGE,

              
              'theme' => Select2::THEME_KRAJEE, // this is the default if theme is not set
              'options' => ['multiple' => true],
              'pluginOptions' => [
                  'allowClear' => true
              ],
          ]) ?>
          <small id="categoriaHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</small>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10">
          <label class="mt-4">Modalidad deseada para tu pedido</label>
        </div>
        <div class="col-md-12 col-lg-5 mt-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="modalidad-1" value="Concurso" name="Pedidos[modalidad]" class="custom-control-input" checked="true">
            <label class="custom-control-label" for="modalidad-1">Concurso</label>
          </div>
          <small id="modalidadHelp" class="form-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</small>
        </div>
        <div class="col-md-12 col-lg-5 mt-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="modalidad-2" value="Proveedor preferido" name="Pedidos[modalidad]" class="custom-control-input">
            <label class="custom-control-label" for="modalidad-2">Proveedor preferido</label>
          </div>
          <small id="modalidadHelp" class="form-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</small>
        </div>
      </div> 

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <div class="mt-4">
            <?= $form->field($model, 'nombre_proyecto')->textInput(['maxlength' => true, 'placeholder' => 'Prueba', 'class' => 'form-control form-control-lg']) ?>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10">
          <label class="mt-4">Propósito del texto</label>
        </div>
        <div class="col-md-12 col-lg-5 mt-4 mb-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="proposito-1" value="Contenido de Blog" name="Pedidos[proposito]" class="custom-control-input" checked="true">
            <label class="custom-control-label" for="proposito-1">Contenido de Blog</label>
          </div>
          <small id="emailHelp" class="form-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
        <div class="col-md-12 col-lg-5 mt-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="proposito-2" value="Guiones" name="Pedidos[proposito]" class="custom-control-input">
            <label class="custom-control-label" for="proposito-2">Guiones</label>
          </div>
          <small id="propositoHelp" class="form-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>                  
        </div>
      </div> 

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <label>Extensión máxima de palabras</label>
        </div>
        <div class="col-md-12 col-lg-5">
          <?= $form->field($model, 'ext_palabras')->dropDownList(['250 a 499' => '250 a 499', '500 a 999' => '500 a 999'], ['class' => 'form-control form-control-lg'])->label(false) ?>
        </div>
        <div class="col-md-12 col-lg-10">
          <small id="ext_palabrasHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</small>
        </div>
      </div>

      <div class="row"><br><br><br></div>

      <div class="row mt-4 mb-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <label>Países a los que está dirigido</label>
        </div>
        <div class="col-md-12 col-lg-5">
          <?= Select2::widget([
              'bsVersion' => '4.x',
              'name' => 'Pedidos[paises]',
              'data' => $paises,
              'size' => Select2::LARGE,
              'theme' => Select2::THEME_KRAJEE, // this is the default if theme is not set
              'options' => ['multiple' => true],
              'pluginOptions' => [
                  'allowClear' => true
              ],
          ]) ?>
          <small id="paisesHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <br>
          <label>Idioma de tu pedido</label>
        </div>
        <div class="col-md-12 col-lg-5">
          <?= $form->field($model, 'idioma')->dropDownList($idiomas, ['class' => 'form-control form-control-lg'])->label(false) ?>
          <small id="idiomasHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4"><br>
          <label>Optimización SEO</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-2">
          <?= $form->field($model, 'seo')->dropDownList(['Si' => 'Si', 'No' => 'No'], ['class' => 'form-control form-control-lg'])->label(false) ?>
        </div>
      </div>  
      <div class="row">
        <div class="col-md-12 col-lg-10">
          <small id="seoHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</small>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <div class="form-group mt-4">
            <label for="palabra_clave">Palabra clave principal</label>
            <?= $form->field($model, 'palabras_claves')->textInput(['maxlength' => true, 'autocomplete' => 'off', 'class' => 'form-control form-control-lg'])->label(false) ?>
            <small id="palabraClaveHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <div class="form-group mt-4">
            <label for="palabra_clave">Palabra(s) semántica(s) o secundaria(s)</label>
            <?= $form->field($model, 'palabras_secundarias')->textInput(['maxlength' => true, 'autocomplete' => 'off', 'class' => 'form-control form-control-lg'])->label(false) ?>
            <small id="palabraSecundariaHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <div class="form-group mt-4">
            <label for="palabra_clave">Descripción del pedido</label>
            <small id="DescripcionHelp" class="form-text text-muted mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
            <?= $form->field($model, 'descripcion')->textarea(['rows' => 4])->label(false) ?>
          </div>
          <div class="mt-4">
            <input type="file" style="display:none;" id="file" name="Pedidos[archivo_adjunto]"/>
            <button type="button" onclick="document.getElementById('file').click();" class="btn btn-outline-success btn-lg btn-outline-wac"><?= Html::img('@web/img/icons/upload.png') ?>Adjunta archivo</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-success btn-lg btn-outline-wac"><?= Html::img('@web/img/icons/microphone.png') ?>Grabar instrucciones</button>
          </div>
        </div>
      </div> 

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <div class="form-group mt-4">
            <label for="publico">Público objetivo</label>
            <small id="publicoHelp" class="form-text text-muted mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
            <?= $form->field($model, 'publico')->textarea(['rows' => 4])->label(false) ?>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10">
          <label class="mt-4">Perspectiva del texto</label>
        </div>
        <div class="col-md-12 col-lg-10 mt-3">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="perspectiva-1" value="Primera persona del singular (yo, mí, mi)" name="Pedidos[perspectiva]" class="custom-control-input" checked="true">
            <label class="custom-control-label" for="perspectiva-1">Primera persona del singular (yo, mí, mi)</label>
          </div>
        </div>
        <div class="col-md-12 col-lg-10 mt-3">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="perspectiva-2" value="Primera persona del plural (nosotros, nuestro(s), nuestra(s))" name="Pedidos[perspectiva]" class="custom-control-input">
            <label class="custom-control-label" for="perspectiva-2">Primera persona del plural (nosotros, nuestro(s), nuestra(s))</label>
          </div>                 
        </div>
        <div class="col-md-12 col-lg-10 mt-3">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="perspectiva-3" value="Segunda persona, formal o informal" name="Pedidos[perspectiva]" class="custom-control-input">
            <label class="custom-control-label" for="perspectiva-3">Segunda persona, formal o informal</label>
          </div>                 
        </div> 

        <div class="col-md-12 col-lg-10 mt-3 ml-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="opcion-1" value="Usted, su, sus" name="Pedidos[opcion_perspectiva]" class="custom-control-input">
            <label class="custom-control-label" for="opcion-1">Usted, su, sus</label>
          </div> 
        </div>

        <div class="col-md-12 col-lg-10 mt-3 ml-4">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="opcion-2" value="Tú, tu, tus" name="Pedidos[opcion_perspectiva]" class="custom-control-input">
            <label class="custom-control-label" for="opcion-2">Tú, tu, tus</label>
          </div>                                   
        </div>  

        <div class="col-md-12 col-lg-10 mt-3">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="perspectiva-4" value="Segunda persona, formal o informal" name="Pedidos[perspectiva]" class="custom-control-input">
            <label class="custom-control-label" for="perspectiva-4">Segunda persona, formal o informal</label>
          </div>                 
        </div> 
      </div>

      <div class="row mt-4">
        <div class="col-md-12 col-lg-10 mt-4">
          <br>
          <label>Fecha de Entrega</label>
        </div>
        <div class="col-md-12 col-lg-5">
          <input type="date" name="Pedidos[fecha_entrega]" class="form-control form-control-lg  "value="2020-09-08">
          <small id="fechaHelp" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
      </div>
    </div>
    <div class="col d-none d-sm-block"></div>
  </div>

  <div class="form-group">
    <?= Html::submitButton('Crear Pedido', ['class' => 'btn btn-success d-none', 'id' => 'btn-pedido']) ?>
  </div>

  <?php ActiveForm::end(); ?>
</div>

    


    <script>

        //alert('Submiteo');
    
    </script>
