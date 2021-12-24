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

<h1>サンプル</h1>
<p>フォームの送信</p>
<form method="post" action="/hello/sendForm">
<input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
  <input type="text" name="text1" />
  <input type="submit" />
</form>