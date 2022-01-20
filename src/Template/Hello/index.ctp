<h1>サンプル見出し</h1>
<p>これはサンプルです</p>

<?=$this->Form->create(null,
    ['type'=>'post', 'url' => ['action'=>'index']]) ?>
    <!-- <fieldset> -->
      <?=$this->Form->text("name") ?>
      <?=$this->Form->password("password") ?>
    <!-- </fieldset> -->
    <?=$this->Form->submit("送信") ?>
  <?=$this->Form->end() ?>


<!-- <h1>サンプルの見出し</h1>
<p>こんにちはこれはCakePHPの練習です</p>
<form method="get" action="/hello/sendForm">
  <input type="hidden" name="check1" value="off">
  <input type="hidden" name="radio1" value="off">
  <input type="checkbox" name="check1" id="c1" />
    <label for="c1">チェック</label><br />
  <input type="radio" name="radio1" id="r1" value="No.1" />
    <label for="r1">ラジオ1</label><br />
  <input type="radio" name="radio1" id="r2" value="No.2" />
    <label for="r2">ラジオ２</label><br />
  <select name="select1">
    <option value="Windows">Windows</option>
    <option value="Linux">Linux</option>
    <option value="MacOSX">MacOSX</option>
  </select>
  <input type="submit">
</form> -->

<!-- チェックボタンの生成 -->

<!-- <?=$this->Form->create(null,
    ['type'=>'post', 'url' => ['action'=>'index']]) ?>
  <?=$this->Form->checkbox("HelloForm.check1",
    ['checked'=>true]) ?>
  <?=$this->Form->label("HelloForm.check1") ?>
  <?=$this->Form->submit("送信") ?>
<?=$this->Form->end(); ?> -->

<!-- <?= $this->Form->create(null,
    ['type' => 'post', 'url' => ['action' => 'index']]) ?>
  <?=$this->Form->radio("HelloForm.radio1",
  [
    ['text' => 'ウインドウズ', 'value' => 'Windows'],
    ['text' => 'リナックス', 'value' => 'Linux'],
    ['text' => 'マックOS', 'value' => 'macOS']
  ],
  ['label'=>true, 'value'=>'Linux']) ?>
  <?=$this->Form->submit('送信') ?>
<?=$this->Form->end(); ?>
  -->

<!-- <?=$this->Form->create(null,
    ['type' =>'post', 'url' => ['action' => 'index']]) ?>
  <?php echo $this->Form->select('HelloForm.select1',
      ['ウインドウズ'=>'Windows', 'リナックス'=>'Linux', 'マックOS'=>'MacOS'],
      ['empty' => '項目を選んでください', 'multiple' =>true, 'size'=> 5, 'value'=>['Windows', 'Linux']]); ?>
  <?=$this->Form->submit('送信')?>
<?=$this->Form->end();?> -->

<!-- <?=$this->Form->create(null,
    ['type' => 'post', ['action' => 'index']]) ?>
  <?= $this->Form->select('HelloForm.select1',
  [
    'PC' => [
      'ウインドウズ' => 'Windows',
      'リナックス'=> 'Linux',
      'マックOS'=>'macOS'
    ],
    'mobile'=>[
      'アンドロイド' => 'Android',
      'アイフォン' => 'iPHone',
      'ガラケー' => 'cellphone'
    ]
    ],
    [
      'size' => 10, 'empty'=>'項目を選んでください', 'multiple'=>true
    ]) ?>
    <?=$this->Form->submit('送信') ?>
  <?=$this->Form->end(); ?> -->

  <!-- <?php echo $this->Form->create(null,
    ['type' => 'post', 'url'=>['action'=>'index']]);
    echo $this->Form->dateTime('HelloForm.date');
    echo $this->Form->submit('送信');
    echo $this->Form->end();
    ?> -->

