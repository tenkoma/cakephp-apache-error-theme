<?php
/**
 * @var \Cake\View\View $this
 */
$this->layout('CakeApacheErrorTheme.error');

$this->assign('title', $message);
?>
<h1><?= h($message) ?></h1>
<p><?= __d('cake', 'The requested URL {0} was not found on this server.', $url) ?></p>
<hr>
<?= $this->element('signature') ?>
