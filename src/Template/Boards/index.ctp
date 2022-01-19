<h1><?=$this->RgbText->redString('掲示板') ?></h1>
<p><a href="/boards/add">
   <?=$this->RgbText->greenString('投稿する') ?></a></p>

  <div>
    <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>title</th>
      </tr>

      <?php foreach ($data as $obj): ?>
      <?=$this->Html->tableCells(
        [
          $obj['id'],
          $obj['person']['name'],
          $obj['title']
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