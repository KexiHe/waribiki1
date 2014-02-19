<?php
/* @var $this WbPostController */
/* @var $data WbPost */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oldcode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oldcode), array('view', 'id'=>$data->oldcode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jiscode')); ?>:</b>
	<?php echo CHtml::encode($data->jiscode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newcode')); ?>:</b>
	<?php echo CHtml::encode($data->newcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pref_kana')); ?>:</b>
	<?php echo CHtml::encode($data->pref_kana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_kana')); ?>:</b>
	<?php echo CHtml::encode($data->city_kana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_kana')); ?>:</b>
	<?php echo CHtml::encode($data->street_kana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pref_kanji')); ?>:</b>
	<?php echo CHtml::encode($data->pref_kanji); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city_kanji')); ?>:</b>
	<?php echo CHtml::encode($data->city_kanji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_kanji')); ?>:</b>
	<?php echo CHtml::encode($data->street_kanji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg1')); ?>:</b>
	<?php echo CHtml::encode($data->flg1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg2')); ?>:</b>
	<?php echo CHtml::encode($data->flg2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg3')); ?>:</b>
	<?php echo CHtml::encode($data->flg3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg4')); ?>:</b>
	<?php echo CHtml::encode($data->flg4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg5')); ?>:</b>
	<?php echo CHtml::encode($data->flg5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg6')); ?>:</b>
	<?php echo CHtml::encode($data->flg6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg7')); ?>:</b>
	<?php echo CHtml::encode($data->flg7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg8')); ?>:</b>
	<?php echo CHtml::encode($data->flg8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg9')); ?>:</b>
	<?php echo CHtml::encode($data->flg9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flg10')); ?>:</b>
	<?php echo CHtml::encode($data->flg10); ?>
	<br />

	*/ ?>

</div>