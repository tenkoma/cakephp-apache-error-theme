<?php
/**
 * @var \Cake\View\View $this
 */
use Cake\Core\Configure;

$this->layout('CakeApacheErrorTheme.error');
if (!is_null(Configure::read('CakeApacheErrorTheme.email'))) {
    $email = Configure::read('CakeApacheErrorTheme.email');
} else {
    $email = 'webmaster@localhost';
}

$this->assign('title', $message);
?>
<h1><?= h($message) ?></h1>
<p>The server encountered an internal error or
    misconfiguration and was unable to complete
    your request.</p>
<p>Please contact the server administrator at
    <?= h($email) ?> to inform them of the time this error occurred,
    and the actions you performed just before this error.</p>
<p>More information about this error may be available
    in the server error log.</p>
<hr>
<?= $this->element('signature') ?>