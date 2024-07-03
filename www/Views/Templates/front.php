<?php
use App\Models\Config;

$configModel = new Config();
$config = null;
if ($configModel->hasConfig()) {
    $config = $configModel->getConfig();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ceci est mon front</title>
  <meta name="description" content="cms">
  <link rel="stylesheet" href="/css/front.css">
  <style>
    :root {
    <?php if ($config): ?>
      --background-color: <?= htmlspecialchars($config->getBackgroundColor()) ?>;
      --font-color: <?= htmlspecialchars($config->getFontColor()) ?>;
      --font-size: <?= htmlspecialchars($config->getFontSize()) ?>;
      --font-style: <?= htmlspecialchars($config->getFontStyle()) ?>;
    <?php else: ?>
      --background-color: #ffffff;
      --font-color: #000000;
      --font-size: 16px;
      --font-style: normal;
    <?php endif; ?>
    }

    body {
      background-color: var(--background-color);
      color: var(--font-color);
      font-size: var(--font-size);
      font-style: var(--font-style);
    }
  </style>
</head>
<body>

<!-- include view -->
<?php include "../Views/".$this->view.".php";?>

</body>
</html>
