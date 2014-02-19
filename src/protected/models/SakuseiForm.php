<?php

/**
 * SakuseiForm class.
 * SakuseiForm is the data structure for keeping
 * user sakusei form data. It is used by the 'sakusei' action of 'SiteController'.
 */
class SakuseiForm extends CFormModel
{
	public $csvFileName;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('csvFileName', 'required'),

		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
// 		return array(
// 			'rememberMe'=>'Remember me next time',
// 		);
	}
}
