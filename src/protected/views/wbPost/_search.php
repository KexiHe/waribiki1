<?php
/* @var $this WbPostController */
/* @var $model WbPost */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jiscode'); ?>
		<?php echo $form->textField($model,'jiscode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oldcode'); ?>
		<?php echo $form->textField($model,'oldcode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'newcode'); ?>
		<?php echo $form->textField($model,'newcode',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pref_kana'); ?>
		<?php echo $form->textField($model,'pref_kana',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_kana'); ?>
		<?php echo $form->textField($model,'city_kana',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_kana'); ?>
		<?php echo $form->textField($model,'street_kana',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pref_kanji'); ?>
		<?php echo $form->textField($model,'pref_kanji',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_kanji'); ?>
		<?php echo $form->textField($model,'city_kanji',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_kanji'); ?>
		<?php echo $form->textField($model,'street_kanji',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg1'); ?>
		<?php echo $form->textField($model,'flg1',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg2'); ?>
		<?php echo $form->textField($model,'flg2',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg3'); ?>
		<?php echo $form->textField($model,'flg3',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg4'); ?>
		<?php echo $form->textField($model,'flg4',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg5'); ?>
		<?php echo $form->textField($model,'flg5',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg6'); ?>
		<?php echo $form->textField($model,'flg6',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg7'); ?>
		<?php echo $form->textField($model,'flg7',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg8'); ?>
		<?php echo $form->textField($model,'flg8',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg9'); ?>
		<?php echo $form->textField($model,'flg9',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flg10'); ?>
		<?php echo $form->textField($model,'flg10',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->