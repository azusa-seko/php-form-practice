<?php
// フォームから送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 ｰ 確認</title>
</head>

<body>
    <h1>ユーザー登録（２/３）確認</h1>

    <h2>以下の内容で登録します。よろしいですか？</h2>
    <p>お名前：
        <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <p>メールアドレス：
        <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <p>年齢：
        <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>

    <form action="complete.php" method="post">
        <!-- hidden属性で、データを隠して送信 -->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

        <p>
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">登録する</button>
        </p>
    </form>
</body>

</html>