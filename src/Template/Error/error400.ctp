<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', $message);
?>
<h1><?= h($message) ?></h1>
<p><?= __d('cake', 'The requested URL {0} was not found on this server.', $url) ?></p>
<hr>
<address>CakePHP/<?= h(Configure::version()) ?> (Red Velvet) Server at <?= h(SERVER_NAME) ?> Port <?= h(SERVER_PORT) ?></address>

