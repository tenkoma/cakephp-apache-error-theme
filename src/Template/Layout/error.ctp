<?php
/**
 * @var \Cake\View\View $this
 */
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title><?= $this->fetch('title') ?></title>
</head><body>
<?= $this->Flash->render() ?>

<?= $this->fetch('content') ?>
</body></html>
