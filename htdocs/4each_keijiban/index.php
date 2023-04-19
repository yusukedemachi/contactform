<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");




?>

<header>
  <img src="4eachblog_logo.jpg" alt="logo_image" class="logo_image">
  <nav>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </nav>
</header>

  <div class="main">
    <div class="main_left">
      <h1>プログラミングに役立つ掲示板</h1>
      <div class="main_left_form">
        <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
          <div>
            <label for="">ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>

          <div>
            <label for="">タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>

          <div>
            <label for="">コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
          </div>

          <div>
            <input type="submit" class="submit" value="送信する">
          </div>
        </form>

        <?php
        while ($row = $stmt->fetch()){

echo "<div class='kiji'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
}

?>


      </div>
    </div>
    <div class="main_right">
      <div>
        <h2>人気の記事</h2>
        <ul>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
        </ul>
      </div>
      <div>
        <h2>オススメリンク</h2>
        <ul>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
        </ul>
      </div>
      <div>
        <h2>カテゴリ</h2>
        <ul>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
          <li>人気の記事です。</li>
        </ul>
      </div>
    </div>
    
  </div>

  <footer>
  <div class="footer_main">
    <div>copyright &copy; internous</div>
    <div class="footer_border"></div>
    <div>4each blog the which provides A to Z about programing.</div>
  </div>
</footer>
    
</body>
</html>