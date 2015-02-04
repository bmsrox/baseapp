<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
 	Yii::t('app','$label')=>array('index'),
	Yii::t('app','Manage'),
);\n";
?>

$this->pageTitle = Yii::t('app','Manage') . ' ' . Yii::t('app','<?php echo $label; ?>');

$this->menu=array(
	array('label'=>'<i class="fa fa-plus"></i>' . Yii::t('app','Create'), 'url'=>array('create'), 'active'=>true,  'linkOptions'=>array('class'=>'btn btn-app'))
);

?>
<div class="row pull-left">

<div class="col-lg-8">
<?php echo "<?php \$this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'nav nav-pills'),
			'firstItemCssClass'=>'btn-first',
			'encodeLabel'=>false,
			'itemTemplate' => '<div>{menu}</div>',
			'items'=>\$this->menu,
		)); ?>\n"; ?>
</div>
		<div class="col-lg-4">
			<?php echo "<?php \$this->renderPartial('_search',array(
				'model'=>\$model,
			)); ?>\n"; ?>
		</div>
</div>


<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered table-hover',
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	if($column->name !== 'password')
		echo "\t\t'".$column->name."',\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {update} {delete}',
			'buttons'=>array(
				'view'=>array(
					'label'=>'',
					'imageUrl'=>false,
					'options'=>array('class'=>'glyphicon glyphicon-eye-open')
				),
				'update'=>array(
					'label'=>'',
					'imageUrl'=>false,
					'options'=>array('class'=>'glyphicon glyphicon-edit')
				),
				'delete'=>array(
					'label'=>'',
					'imageUrl'=>false,
					'options'=>array('class'=>'glyphicon glyphicon-trash')
				),
			)
		),
	),
)); ?>
