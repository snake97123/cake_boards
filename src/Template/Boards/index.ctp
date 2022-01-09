<p><?=__('{0} post',$count) ?></p>
<h1><?=__('Boards') ?></h1>
<p>
  <a href="/boards/add"><?=__('post') ?></a>
</p>
<div>
  <table>
    <tr>
      <th width="25%"><?=__('user') ?></th><th><?=__('title') ?></th>
    </tr>
    <?php foreach ($data as $obj): ?>
      <tr>
        <td><?=$this->Html->link(
          $obj['person']['name'],
          ['action' => 'show2', $obj['person_id']]
        ) ?></td>
        <td><?=$this->Html->link(
          $obj['title'],
          ['action' => 'show',$obj['id']]
        ) ?></td>
      </tr>
      <?php endforeach;?>
  </table>
  <!-- <table>
    <?=$this->Html->tableHeaders(
      ['投稿者', 'タイトル'],
      ['style'=>'color:#000066; background-color: #AAAAFF'],
      ['style'=>'color:#000066; background-color: #EEEEFF']
    ); ?>
    <?php foreach ($data as $obj): ?>
    <?=$this->Html->tableCells(
      [$obj['person']['name'], $obj['title']],
      ['style' => 'color:#000099; background-color: #CCCCFF'],
      ['style' => 'color:#006600; background-color: #EEFFEE'],
      false, true) ?>
      <?php endforeach; ?>
  </table> -->
</div>
<!-- <span style='font-size: 18pt; font-weight: 700;'>
<?=$this->Html->nestedList(
  ['階層化されたリスト' =>
      ['最初の項目',
         '次の項目' =>
            ['サブ項目１','サブ項目２'],
            '最後の項目' =>
            ['サブ項目A','サブ項目B']]],
  ['style'=>'font-size: smaller; font-weight: lighter','tag' => 'ol'],
  ['style'=>'color: #006600']
); ?>
</span>
<p>
  <?php
    $this->Html->addCrumb('First', 'one');
    $this->Html->addCrumb('Second', 'two');
    $this->Html->addCrumb('Last', 'end');
  ?>
  <?=$this->Html->getCrumbs(' | ','TOP') ?>
</p>

<?=$this->Html->tag('span',
    h('これはHTMLヘルパーによる<span>タグの出力です。'),
    ['style'=>'color: #006600; font-weight: bold'],
    true) ?> -->
