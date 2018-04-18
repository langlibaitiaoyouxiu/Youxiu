<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr style=""><font color="blue" style="">最新攻略</font></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr><button style="height:60px; width: 190px">最新攻略</button></tr><br/>
        <tr>
            <?php foreach  ($data as $k=>$v):?>
                <td><?=$v['game_id']?></td>
                <td><?=$v['game_name']?></td>
                <td><?=$v['game_price']?></td>
                <td><?=$v['desc_ribe']?></td>
            <?php endforeach ?>
        </tr>

    </table>
</body>
</html>







