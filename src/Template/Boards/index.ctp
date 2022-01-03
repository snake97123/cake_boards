<style>
  .error { color:red; font-size:smaller; font-weight:bold;}
</style>
<h1>Databaseサンプル</h1>
<?=$this->Form->create($entity, ['url'=>['action'=>'addRecord']]) ?>
<fieldset>
  <div class="error"><?=$this->Form->error('name') ?></div>
  <?=$this->Form->input('name', ['type'=>'text']) ?>
  <div class="error"><?=$this->Form->error('title') ?></div>
  <?=$this->Form->input('title', ['type'=>'text']) ?>
  <div class="error"><?=$this->Form->error('content') ?></div>
  <?=$this->Form->input("content") ?>
  
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>

<table>
  <?php foreach ($data as $obj): ?>
  <tr>
    <td>
      <?=$obj ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
