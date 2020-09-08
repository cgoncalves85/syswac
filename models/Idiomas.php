<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idiomas".
 *
 * @property int $id
 * @property string $idioma
 *
 * @property Pedidos[] $pedidos
 */
class Idiomas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'idiomas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idioma'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idioma' => 'Idioma',
        ];
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['idioma' => 'id']);
    }
}
