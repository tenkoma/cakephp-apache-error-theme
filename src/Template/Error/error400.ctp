<?php
/**
 * @var \Cake\View\View $this
 */
use Cake\Core\Configure;

$this->assign('title', $message);
?>
<h1><?= h($message) ?></h1>
<p><?= __d('cake', 'The requested URL {0} was not found on this server.', $url) ?></p>
<hr>
<address>CakePHP/<?= h(Configure::version()) ?> (Red Velvet) Server at <?= h(env('SERVER_NAME')) ?> Port <?= h(env('SERVER_PORT')) ?></address>

