<?php
use yii\helpers\Html;
use yii\widgets\Linkpager;
?>
<h1>Countries</h1>
<ul>
	<?php foreach ($countries as $country):?>
	<li>
		<?= Html::encode("{$country->name}({$country->code})")?>:
		<?= $country->population ?>
	</li>
<?php endforeach;?>
</ul>
<?= Linkpager::widget(['pagination'=>$pagination]) ?>