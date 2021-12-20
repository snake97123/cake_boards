<!DOCTYPE html>
<html lang="ja">
<head>
  <?=$this->Html->charset(); ?>
  <title>
    <?= $this->fetch('title') ?>
  </title>
  <?php 
  echo $this->Html->css('cake.hello');
  echo $this->Html->script('cake.hello');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
  ?>
</head>

<body>
  <div>
    <div id="header">** Header **</div>
    <div id="content">
      <?= $this->fetch('content') ?>
    </div>
    <div id="footer">** this is footer **</div>
  </div>
  
</body>
</html>