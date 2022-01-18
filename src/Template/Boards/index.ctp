<p><?=__('{0} post',$count) ?></p>
<h1><?=__('Boards') ?></h1>
<?php $t = time(); ?>
<p><?=$this->Time->fromString($t) ?></p>
<p><?=$this->Time->toUnix($t) ?></p>
<p><?=$this->Time->gmt($t) ?></p>

<?php $t = '2016-10-24 12:34:56'; ?>
<p><?=$this->Time->format($t, 'yyyy年MM月dd日 HH時mm分ss秒') ?></p>
<p><?=$this->Time->nice($t) ?></p>
<p><?=$this->Time->toAtom($t) ?></p>
<p><?=$this->Time->toRSS($t) ?></p>

<pre>
  <?php
  $t = time();
  print_r($this->Time->toQuarter($t, false))
  ?>
</pre>

<p><?=$this->Time->timeAgoInWords(
  '1999-12-24',
  [
    'format'=>'Y-m-d',
    'end'=>'40 year'
  ]
) ?></p>
<p>
  <a href="/boards/add"><?=__('post') ?></a>
</p>
<div>
  <table>
  <tr>
    <th><?=$this->Paginator->sort('id', '投稿順') ?></th>
    <th><?=$this->Paginator->sort('Person.name', '名前') ?></th>
    <th><?=$this->Paginator->sort('title','タイトル') ?></th>
  </tr>

  <?php foreach ($data as $obj): ?>
    <?=$this->Html->tableCells(
      [
        $obj['id'],
        $obj['person']['name'],
        $obj['title']
      ],
      ['style' => 'color:#000066; background-color: #CCCCFF'],
      ['style' => 'color:#006600; background-color: #EEFFEE'],
      false, true
    ) ?>
    <?php endforeach ?>
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
  <div class="paginator">
    <ul class="pagination">
       <?=$this->Paginator->numbers([
         'before'=>$this->Paginator->hasPrev() ?
            $this->Paginator->first('<<') . '・' : '',
         'after'=>$this->Paginator->hasNext() ?
         '・' . $this->Paginator->last('>>') : '',
         'modulus' =>4,
         'separator' =>'・'
       ]) ?>
    </ul>
</div>
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

