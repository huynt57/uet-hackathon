<?php

/**
 * This is the model base class for the table "friends".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Friends".
 *
 * Columns in table "friends" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $friend_id
 * @property integer $user_id_2
 * @property integer $user_id_1
 * @property integer $date
 *
 */
abstract class BaseFriends extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'friends';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Friends|Friends', $n);
	}

	public static function representingColumn() {
		return 'friend_id';
	}

	public function rules() {
		return array(
			array('friend_id, user_id_2, user_id_1, date', 'required'),
			array('friend_id, user_id_2, user_id_1, date', 'numerical', 'integerOnly'=>true),
			array('friend_id, user_id_2, user_id_1, date', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'friend_id' => Yii::t('app', 'Friend'),
			'user_id_2' => Yii::t('app', 'User Id 2'),
			'user_id_1' => Yii::t('app', 'User Id 1'),
			'date' => Yii::t('app', 'Date'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('friend_id', $this->friend_id);
		$criteria->compare('user_id_2', $this->user_id_2);
		$criteria->compare('user_id_1', $this->user_id_1);
		$criteria->compare('date', $this->date);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}