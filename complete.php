<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: index.php");
    exit();
}

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = $_POST['email'];
$subject = "お問い合わせありがとうございます";
$message = <<< EOM
お問い合わせありがとうございます

以下の内容で承りました
ーーーーーーーーーーーーーーーーーーーーーーーー
【お名前】
{$_POST["name"]}

【メール】
{$_POST["email"]}

【性別】
{$_POST["sex"]}

【お住まいの地域】
{$_POST["pref"]}

【お問い合わせ理由】
{$_POST["reason"]}

【お問い合わせ内容】
{$_POST["contact_body"]}

ーーーーーーーーーーーーーーーーーーーーーーーー
EOM;
$headers = "From:support@example.com";
mb_send_mail($to,$subject,$message,$headers);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>お問い合わせ完了</title>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
        <h2>お問い合わせ完了</h2>
        <p>お問い合わせありがとうございました。</p>
        <p>今後とも当サイトをよろしくお願いいたします。</p>
        <p><a href="index.php">お問い合わせトップへ</a></p>
    </body>
</html>
