<?php

/**
 * This is the model class for table "equipo".
 *
 * The followings are the available columns in table 'equipo':
 * @property integer $id_equipo
 * @property string $nombre
 * @property integer $estrellas
 * @property integer $fundacion
 * @property string $imagen
 * @property string $comentario
 *
 * The followings are the available model relations:
 * @property Anotacion[] $anotacions
 * @property Encuentro[] $encuentros
 * @property Encuentro[] $encuentros1
 * @property Exl[] $exls
 */
class Equipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estrellas, fundacion, imagen', 'required'),
			array('estrellas, fundacion', 'numerical', 'integerOnly'=>true),
			array('nombre, imagen', 'length', 'max'=>100),
			array('comentario', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_equipo, nombre, estrellas, fundacion, imagen, comentario', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'anotacions' => array(self::HAS_MANY, 'Anotacion', 'id_equipo'),
			'encuentros' => array(self::HAS_MANY, 'Encuentro', 'id_equipo_local'),
			'encuentros1' => array(self::HAS_MANY, 'Encuentro', 'id_equipo_visitante'),
			'exls' => array(self::HAS_MANY, 'Exl', 'id_equipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_equipo' => 'Id Equipo',
			'nombre' => 'Nombre',
			'estrellas' => 'Estrellas',
			'fundacion' => 'Fundacion',
			'imagen' => 'Imagen',
			'comentario' => 'Comentario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_equipo',$this->id_equipo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estrellas',$this->estrellas);
		$criteria->compare('fundacion',$this->fundacion);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('comentario',$this->comentario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
