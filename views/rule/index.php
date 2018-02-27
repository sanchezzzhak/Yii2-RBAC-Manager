<?php
use yii\helpers\Html;

?>
<?php kak\widgets\panel\Panel::begin(['heading' => false ]);?>

<?=Html::a('Create Rule',['create'],['class' => 'btn btn-info']);?><hr>
<?php
\yii\widgets\Pjax::begin([
    'enablePushState'=>false,
]);
?>
<?=\kak\widgets\grid\GridView::widget([
    'dataProvider' => $provider,
    'filterModel' => $model,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn'
        ],
        'name',
        [
            'class' => 'yii\grid\ActionColumn',
            'buttonOptions' => ['class' => 'btn btn-small']
        ],
    ],
])?>
<?php  \yii\widgets\Pjax::end();?>

<?php kak\widgets\panel\Panel::end();?>