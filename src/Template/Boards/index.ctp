
<h1><?=$this->RgbText->redString('掲示板') ?></h1>
<p><?=$this->RgbText->greenLink('投稿する', '/boards/add') ?></p>

  <div>
    <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>title</th>
        <th>content</th>
      </tr>

      <?php foreach ($data as $arr): ?>
      <?=$this->Html->tableCells(
        [
          $arr['id'],
          $arr['person']['name'],
          $arr['title']
        ],
        ['style'=>'color:#000066; background-color: #CCCCFF'],
        ['style'=>'color:#006600: background-color: #EEFFEE'],
        false, true
      ) ?>
      <?php endforeach; ?>
    </table>
  </div>

  <a href="/">
    <?php echo $this->RgbText->blueString('トップに戻る'); ?>
  </a>

<?php echo $this->element('SampleBanner'); ?>