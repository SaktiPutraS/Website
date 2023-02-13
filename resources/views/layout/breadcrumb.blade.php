<?php
$currentUrl = URL::current();
$segments = explode('/', $currentUrl);
$baseUrl = $segments[0] . '//' . $segments[2];
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">HOME</a></li>
    <?php if(isset($segments[3]) && $segments[3] != ''): ?>
      <li class="breadcrumb-item"><a href="<?php echo $baseUrl . '/' . $segments[3]; ?>">{{strtoupper($segments[3])}}</a></li>
    <?php endif; ?>
    <?php if(isset($segments[4]) && $segments[4] != ''): ?>
      <li class="breadcrumb-item"><a href="<?php echo $baseUrl . '/' . $segments[3] . '/' . $segments[4]; ?>">{{strtoupper($segments[4])}}</a></li>
    <?php endif; ?>
    <li class="breadcrumb-item active" aria-current="page">CURRENT</li>
  </ol>
</nav>
