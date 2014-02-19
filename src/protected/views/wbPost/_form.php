<?php
/* @var $this WbPostController */
/* @var $model WbPost */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wb-post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jiscode'); ?>
		<?php echo $form->textField($model,'jiscode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'jiscode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oldcode'); ?>
		<?php echo $form->textField($model,'oldcode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'oldcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newcode'); ?>
		<?php echo $form->textField($model,'newcode',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'newcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pref_kana'); ?>
		<?php echo $form->textField($model,'pref_kana',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pref_kana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_kana'); ?>
		<?php echo $form->textField($model,'city_kana',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'city_kana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_kana'); ?>
		<?php echo $form->textField($model,'street_kana',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'street_kana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pref_kanji'); ?>
		<?php echo $form->textField($model,'pref_kanji',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pref_kanji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_kanji'); ?>
		<?php echo $form->textField($model,'city_kanji',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city_kanji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_kanji'); ?>
		<?php echo $form->textField($model,'street_kanji',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'street_kanji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg1'); ?>
		<?php echo $form->textField($model,'flg1',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg2'); ?>
		<?php echo $form->textField($model,'flg2',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg3'); ?>
		<?php echo $form->textField($model,'flg3',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg4'); ?>
		<?php echo $form->textField($model,'flg4',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg5'); ?>
		<?php echo $form->textField($model,'flg5',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg6'); ?>
		<?php echo $form->textField($model,'flg6',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg7'); ?>
		<?php echo $form->textField($model,'flg7',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg8'); ?>
		<?php echo $form->textField($model,'flg8',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg9'); ?>
		<?php echo $form->textField($model,'flg9',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flg10'); ?>
		<?php echo $form->textField($model,'flg10',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flg10'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->