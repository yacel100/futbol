<?php

/**
 * This is the model class for table "narracion".
 *
 * The followings are the available columns in table 'narracion':
 * @property integer $id_narracion
 * @property integer $cod_encuentro
 * @property integer $cod_evento
 * @property string $comentario
 * @property string $tiempo
 */
class Narracion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $image;
	
	public function tableName()
	{
		return 'narracion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_encuentro, cod_evento, comentario, tiempo', 'required'),
			array('cod_encuentro, cod_evento', 'numerical', 'integerOnly'=>true),
			array('comentario', 'length', 'max'=>900),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_narracion, cod_encuentro, cod_evento, comentario, tiempo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_narracion' => 'Id Narracion',
			'cod_encuentro' => 'Cod Encuentro',
			'cod_evento' => 'Cod Evento',
			'comentario' => 'Comentario',
			'tiempo' => 'Tiempo',
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

		$criteria->compare('id_narracion',$this->id_narracion);
		$criteria->compare('cod_encuentro',$this->cod_encuentro);
		$criteria->compare('cod_evento',$this->cod_evento);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('tiempo',$this->tiempo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Narracion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
