<?php

namespace app\controllers;

use Yii;
use app\models\Pedidos;
use app\models\PedidoSearch;
use app\models\Formatos;
use app\models\Tipos;
use app\models\Categorias;
use app\models\Paises;
use app\models\Idiomas;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * PedidosController implements the CRUD actions for Pedidos model.
 */
class PedidosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pedidos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PedidoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pedidos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pedidos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'pedido';
        
        $model = new Pedidos();    

        $formatos = ArrayHelper::map(Formatos::find()->all(), 'id', 'formato');
        $tipos = ArrayHelper::map(Tipos::find()->all(), 'id', 'descripcion');
        $categorias = ArrayHelper::map(Categorias::find()->all(), 'categoria', 'categoria');
        $paises = ArrayHelper::map(Paises::find()->all(), 'pais', 'pais');
        $idiomas = ArrayHelper::map(Idiomas::find()->all(), 'id', 'idioma');

        if ($model->load(Yii::$app->request->post()) ) {

            $cat = $model->categoria;
            $cat = implode('|', $cat);

            $pais = $model->paises;
            $pais = implode('|', $pais);
            
            $model->categoria = $cat;
            $model->paises = $pais;
            
            $model->save();
            
            Yii::$app->session->setFlash('success', 'Su pedido se ha creado de manera exitosa.');
            return $this->redirect(['pedidos/create']);            
        }

        return $this->render('create', [
            'model' => $model,
            'formatos' => $formatos,
            'tipos' => $tipos,
            'categorias' => $categorias,
            'paises' => $paises,
            'idiomas' => $idiomas,
        ]);
    }

    /**
     * Updates an existing Pedidos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pedidos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pedidos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pedidos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pedidos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
