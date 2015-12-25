<?php

/**
 * This is the model base class for the table "follow".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Follow".
 *
 * Columns in table "follow" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $follow_id
 * @property integer $user_id_follow
 * @property integer $user_id_followed
 * @property integer $date
 *
 */
abstract class BaseFollow extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'follow';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Follow|Follows', $n);
	}

	public static function representingColumn() {
		return 'follow_id';
	}

	public function rules() {
		return array(
			array('follow_id, user_id_follow, user_id_followed, date', 'required'),
			array('user_id_follow, user_id_followed, date', 'numerical', 'integerOnly'=>true),
			array('follow_id', 'length', 'max'=>255),
			array('follow_id, user_id_follow, user_id_followed, date', 'safe', 'on'=>'search'),
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
			'follow_id' => Yii::t('app', 'Follow'),
			'user_id_follow' => Yii::t('app', 'User Id Follow'),
			'user_id_followed' => Yii::t('app', 'User Id Followed'),
			'date' => Yii::t('app', 'Date'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('follow_id', $this->follow_id, true);
		$criteria->compare('user_id_follow', $this->user_id_follow);
		$criteria->compare('user_id_followed', $this->user_id_followed);
		$criteria->compare('date', $this->date);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}