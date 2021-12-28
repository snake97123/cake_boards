<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>TITLE</th>
    <th>CONTENT</th>
  </tr>
<?php 
$arr = $data->toArray();
for($i = 0;$i < count($arr); $i++){
  echo $this->Html->tableCells(
    $arr[$i]->toArray(),
    ['style'=>'background-color:#f0f0f0'],
    ['style'=>'font-weight:bold'],
    true);
}
?>
</table>

<button  class="flat_button" onclick="{location.href='<?= $this->Url->build(['controller'=>'Boards', 'action'=>'index']); ?>';}">戻る</button>
