<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property int $id
 * @property int $formato
 * @property int $tipo
 * @property int $categoria
 * @property string $modalidad
 * @property string $nombre_proyecto
 * @property string $proposito
 * @property string $ext_palabras
 * @property int $paises
 * @property int $idioma
 * @property string $seo
 * @property string $palabras_claves
 * @property string $palabras_secundarias
 * @property string $descripcion
 * @property string|null $archivo_adjunto
 * @property string|null $grabacion
 * @property string $publico
 * @property string $perspectiva
 * @property string|null $fecha_entrega
 *
 * @property Formatos $formato0
 * @property Tipos $tipo0
 * @property Categorias $categoria0
 * @property Paises $paises0
 * @property Idiomas $idioma0
 */
class Pedidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['formato', 'tipo', 'idioma'], 'integer'],
            [['nombre_proyecto', 'palabras_claves', 'palabras_secundarias', 'descripcion', 'publico'], 'required'],
            [['categoria', 'paises', 'descripcion', 'publico'], 'string'],
            [['fecha_entrega'], 'safe'],
            [['modalidad', 'nombre_proyecto', 'proposito', 'ext_palabras', 'palabras_claves', 'palabras_secundarias', 'archivo_adjunto', 'grabacion', 'perspectiva', 'opcion_perspectiva'], 'string', 'max' => 255],
            [['seo'], 'string', 'max' => 2],
            [['formato'], 'exist', 'skipOnError' => true, 'targetClass' => Formatos::className(), 'targetAttribute' => ['formato' => 'id']],
            [['tipo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tipo' => 'id']],
            [['idioma'], 'exist', 'skipOnError' => true, 'targetClass' => Idiomas::className(), 'targetAttribute' => ['idioma' => 'id']],
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
            'tipo' => 'Tipo',
            'categoria' => 'Categoria',
            'modalidad' => 'Modalidad',
            'nombre_proyecto' => 'Nombre de tu proyecto',
            'proposito' => 'Propósito del Texto',
            'ext_palabras' => 'Ext Palabras',
            'paises' => 'Paises',
            'idioma' => 'Idioma',
            'seo' => 'Seo',
            'palabras_claves' => 'Palabra clave principal',
            'palabras_secundarias' => 'Palabra(s) semántica(s) o secundaria(s)',
            'descripcion' => 'Descripción del pedido',
            'archivo_adjunto' => 'Archivo Adjunto',
            'grabacion' => 'Grabación',
            'publico' => 'Público objetivo',
            'perspectiva' => 'Perspectiva del Texto',
            'fecha_entrega' => 'Fecha de Entrega',
        ];
    }

    /**
     * Gets query for [[Formato0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormato0()
    {
        return $this->hasOne(Formatos::className(), ['id' => 'formato']);
    }

    /**
     * Gets query for [[Tipo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipo0()
    {
        return $this->hasOne(Tipos::className(), ['id' => 'tipo']);
    }

    /**
     * Gets query for [[Idioma0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdioma0()
    {
        return $this->hasOne(Idiomas::className(), ['id' => 'idioma']);
    }
}
