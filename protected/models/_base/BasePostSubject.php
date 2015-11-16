<?php

/**
 * This is the model base class for the table "post_subject".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PostSubject".
 *
 * Columns in table "post_subject" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $post_id
 * @property integer $subject_id
 *
 */
abstract class BasePostSubject extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'post_subject';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PostSubject|PostSubjects', $n);
	}

	public static function representingColumn() {
		return array(
			'post_id',
			'subject_id',
		);
	}

	public function rules() {
		return array(
			array('post_id, subject_id', 'required'),
			array('post_id, subject_id', 'numerical', 'integerOnly'=>true),
			array('post_id, subject_id', 'safe', 'on'=>'search'),
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
			'post_id' => null,
			'subject_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('subject_id', $this->subject_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}