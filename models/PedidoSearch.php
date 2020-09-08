<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidos;

/**
 * PedidoSearch represents the model behind the search form of `app\models\Pedidos`.
 */
class PedidoSearch extends Pedidos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'formato', 'tipo', 'idioma'], 'integer'],
            [['categoria', 'paises', 'modalidad', 'nombre_proyecto', 'proposito', 'ext_palabras', 'seo', 'palabras_claves', 'palabras_secundarias', 'descripcion', 'archivo_adjunto', 'grabacion', 'publico', 'perspectiva', 'fecha_entrega'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pedidos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'formato' => $this->formato,
            'tipo' => $this->tipo,
            'categoria' => $this->categoria,
            'paises' => $this->paises,
            'idioma' => $this->idioma,
            'fecha_entrega' => $this->fecha_entrega,
        ]);

        $query->andFilterWhere(['like', 'modalidad', $this->modalidad])
            ->andFilterWhere(['like', 'nombre_proyecto', $this->nombre_proyecto])
            ->andFilterWhere(['like', 'proposito', $this->proposito])
            ->andFilterWhere(['like', 'ext_palabras', $this->ext_palabras])
            ->andFilterWhere(['like', 'seo', $this->seo])
            ->andFilterWhere(['like', 'palabras_claves', $this->palabras_claves])
            ->andFilterWhere(['like', 'palabras_secundarias', $this->palabras_secundarias])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'archivo_adjunto', $this->archivo_adjunto])
            ->andFilterWhere(['like', 'grabacion', $this->grabacion])
            ->andFilterWhere(['like', 'publico', $this->publico])
            ->andFilterWhere(['like', 'perspectiva', $this->perspectiva]);

        return $dataProvider;
    }
}
