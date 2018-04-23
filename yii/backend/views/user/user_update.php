<?php
use common\services\UrlServices;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?= UrlServices::AdminUrl('saveuser') ?>">


    <table>      <input type="hidden" name="user_id" value="<?=$one['user_id']?>"><br>
        <tr>
            <td>  用户名：</td>
            <td><input type="text" name="user_name" value="<?=$one['user_name']?>"></td>
        </tr>
        <tr>
            <td> 密码：</td>
            <td><input type="password" name="user_pwd" value="<?=$one['user_pwd']?>"></td>
        </tr>
        <tr>
            <td> 手机号</td>
            <td><input type="text" name="user_mobile" value="<?=$one['user_mobile']?>"></td>
        </tr>
        <tr>
            <td>昵称</td>
            <td><input type="text" name="nick_name" value="<?=$one['nick_name']?>"></td>
        </tr>
        <tr>
            <td>身份证号</td>
            <td><input type="text" name="card_id"value="<?=$one['card_id']?>"></td>
        </tr>
        <tr>
<!--            <td>是否代练：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>-->
<!--            <td><input type="radio" name="is_leveling" onealue="--><?//=$one['is_leveling']?><!--">是-->
<!--                <input type="radio" name="is_leveling" >否-->
<!--            </td>-->
        </tr>
        <tr>
            <td>确认修改</td>
            <td>  <input type="submit" value="提交"</td>
        </tr>
    </table>



</form>
</body>
</html>