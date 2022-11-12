<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: index.php");
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$pref = $_POST['pref'];
$contact_body = $_POST['contact_body'];

$reason = implode('/', $_POST['reason']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>確認画面</title>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
        <form action="complete.php" method="post">
            <h2>お問い合わせ内容確認</h2>
            <div class="input-area">
                <p>名前</p>
                <?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
            </div>
            <div class="input-area">
                <p>メール</p>
                <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
            </div>
            <div class="input-area">
                <p>性別</p>
                <?php echo $sex;?>
            </div>
            <div class="input-area">
                <p>お住まいの地域</p>
                <?php echo $pref;?>
            </div>
            <div class="input-area">
                <p>お問い合わせ理由</p>
                <?php echo $reason;?>
            </div>
            <div class="input-area">
                <p>お問い合わせ内容</p>
                <?php echo nl2br(htmlspecialchars($contact_body,ENT_QUOTES,'UTF-8'));?>
            </div>
            <div class="input-area">
                <input type='button' onclick='history.back()' value='戻る' class="btn-border">
                <input type="submit" name="submit" value="送信" class="btn-border">
                <input type="hidden" name="name" value="<?php echo $name;?>">
                <input type="hidden" name="email" value="<?php echo $sex;?>">
                <input type="hidden" name="sex" value="<?php echo $sex;?>">
                <input type="hidden" name="pref" value="<?php echo $pref;?>">
                <input type="hidden" name="reason" value="<?php echo $reason;?>">
                <input type="hidden" name="contact_body" value="<?php echo $contact_body;?>">
            </div>
        </form>
    </body>
</html>
