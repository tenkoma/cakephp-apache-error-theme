<?php
use Cake\Core\Configure;
$signatureType = Configure::read('CakeApacheErrorTheme.signature');
if ($signatureType === 'cake') {
    $signature = sprintf('CakePHP/%s (Red Velvet)', h(Configure::version()));
} else {
    $signature = 'Apache/2.4.10 (Debian)';
}
?>
<address><?= $signature ?> Server at <?= h(env('SERVER_NAME')) ?> Port <?= h(env('SERVER_PORT')) ?></address>
