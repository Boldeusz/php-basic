<?php
use yii\bootstrap\Progress;
use app\components\FirstWidget;
?>
<?= Progress::widget(['percent' => 60, 'label' => 'Progress 60%']) ?>
<?php echo $message;
?>
<?= FirstWidget::widget() ?>


<?php FirstWidget::begin(); ?>
   First Widget in H1
<?php FirstWidget::end();

 