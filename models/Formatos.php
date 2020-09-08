<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formatos".
 *
 * @property int $id
 * @property string $formato
 *
 * @property Pedidos[] $pedidos
 */
class Formatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['formato'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'formato' => 'Formato',
        ];
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['formato' => 'id']);
    }
}
