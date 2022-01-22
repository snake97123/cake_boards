<h1>掲示板</h1>
<p><?=$this->Html->link(
  '投稿する',
  ['action' => 'add']
) ?></p>

<div>
  <table>
    <?php $flg = true; ?>
    <?php foreach ($marged as $arr): ?>
    <?php if ($flg){ ?>
      <tr>
        <?php foreach ($arr as $key=>$item): ?>
          <th><?=$key ?></th>
        <?php endforeach; ?>
      </tr>
      <?php $flg = false; } ?>
      <tr>
        <?php foreach ($arr as $item): ?>
          <td><?=$item ?></td>
          <?php endforeach; ?>
      </tr>

      <?php endforeach; ?>
  </table>
</div>

<p><?=$this->Html->link(
  '一覧に戻る',
  ['action' => 'index']
) ?></p>