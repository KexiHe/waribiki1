<?php
/* @var $this WbPostController */
/* @var $model WbPost */

$this->breadcrumbs=array(
	'Wb Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WbPost', 'url'=>array('index')),
	array('label'=>'Create WbPost', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#wb-post-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Wb Posts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'wb-post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'jiscode',
		'oldcode',
		'newcode',
		'pref_kana',
		'city_kana',
		'street_kana',
		/*
		'pref_kanji',
		'city_kanji',
		'street_kanji',
		'flg1',
		'flg2',
		'flg3',
		'flg4',
		'flg5',
		'flg6',
		'flg7',
		'flg8',
		'flg9',
		'flg10',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
