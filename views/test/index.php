<h2>Hello World!</h2>
<?= $this->render('inc')?>
<?= $this->render('//inc/test.html')?>
<p><?= $name ?></p>
<p><?= $age ?></p>
<p><?= $this->context->my_var; ?></p>
<p><?= $this->params['t1']; ?></p>
<?php $this->params['t2'] = 'T2 params 123'; ?>
<p><?= $this->params['t2']; ?></p>
<?php //debug($this->params['t2']); ?>

<?php $this->beginBlock('block1'); ?>

    <p>...содержимоежимое1...</p>
    <p><?= $this->params['t2']; ?></p>

<?php $this->endBlock(); ?>