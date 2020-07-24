<p><code><?= __FILE__ ?></code></p>
<?php //$this->title = 'Test Page' ?>
<?php
//    $this->registerMetaTag(['name' => 'description', 'content' => 'мета теги...1'], 'description');
//    $this->registerMetaTag(['name' => 'description', 'content' => 'мета теги...2'], 'description');
//?>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php
$js = <<<JS
alert('Hello');
JS;
$this->registerJs($js, yii\web\View::POS_LOAD);
?>