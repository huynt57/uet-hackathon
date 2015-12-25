<?php

/**
 * This is the model base class for the table "subject".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Subject".
 *
 * Columns in table "subject" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $subject_id
 * @property integer $subject_group_id
 * @property string $title
 * @property string $description
 *
 */
abstract class BaseSubject extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'subject';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Subject|Subjects', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('subject_id, subject_group_id, title, description', 'required'),
			array('subject_id, subject_group_id', 'numerical', 'integerOnly'=>true),
			array('title, description', 'length', 'max'=>255),
			array('subject_id, subject_group_id, title, description', 'safe', 'on'=>'search'),
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
			'subject_id' => Yii::t('app', 'Subject'),
			'subject_group_id' => Yii::t('app', 'Subject Group'),
			'title' => Yii::t('app', 'Title'),
			'description' => Yii::t('app', 'Description'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('subject_id', $this->subject_id);
		$criteria->compare('subject_group_id', $this->subject_group_id);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}