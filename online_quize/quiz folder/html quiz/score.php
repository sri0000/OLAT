<?php

$percentage = 85; // Assuming percentage is calculated elsewhere

if ($percentage > 80) {
  header('Location: next-page.php');
  exit;
} else {
  $pageButtonVisible = false;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
</head>
<body>
  <?php if ($pageButtonVisible): ?>
    <button>Next Page</button>
  <?php endif; ?>
</body>
</html>
