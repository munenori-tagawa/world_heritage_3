<?php

date_default_timezone_set('Asia/Tokyo');
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
$w = funcWeek()[date("w")];

echo '現在の日時<br>';
echo date("Y/m/d($w) G:i:s");

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>world-heritage</title>
    <link href="range.css" rel="stylesheet">
    <style>
        div {
            background-color: blue;
            color: white;
            padding: auto;
            font-size: 30px;
        }

        .navbar-brand{
            color:white;
        }

        .jumbotron{
            height: 615px;
        }

        .btn {
    background: #ff0000;
    color: #ffffff;
    width: 100px;
    height: 100px;
    border-radius: 30%;
    text-align: center;
    line-height: 100px;
    overflow: hidden;
    border-bottom: solid 5px #003399;
   }
    
   .btn:active {
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
    border-bottom: none;
   } 

   .btn2 {
    background: #3399FF;
    color: #ffffff;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    overflow: hidden;
    border-bottom: solid 5px #003399;
   }
    
   .btn:active {
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
    border-bottom: none;
   } 
    </style>
</head>
<body>
    <!-- Head[Start] -->
    <header>

    <!-- </header>
        <nav class="navbar navbar-default">
            
        </nav> -->
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <div class="navbar-header"><a class="navbar-brand" href="newlogin.php">ログイン</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
    <form method="post" action="insert.php">
        <div class="jumbotron">
        <div class="navbar-header">
            <fieldset>
                <legend>world-heritage</legend>
                <label>国名：<input type="text" name="countryname"></label><br>
                <label>名称：<input type="text" name="name"></label><br>
                <label>緯度：<input type="text" name="latitude"></label><br>
                <label>経度：<input type="text" name="longitude"></label><br>
                <label>登録年：<input type="text" name="years"></label><br>
                <label>説明：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="btn" >
                <input type="submit" value="覚えました！">
                </div>
                <div class="container-fluid">
                <!-- <button type="button" class="btn"><a class="navbar-brand" href="select.php" color: white;> 覚えました！</a></button></div> -->
                <button type="button" class="btn2"><a class="navbar-brand" href="geocode.php" color: white;> 飛べ～～～～！</a></button></div>
            </fieldset>
        </div>
    
 
</form>
    <!-- Main[End] -->
</body>
</html>

    <!-- <header>
        <nav class="navbar navbar-default"> -->
          <!-- <div class="button_solid012">
            <a href="#">ボタンのデザイン<i class="fas fa-angle-
            right fa-position-right"></i></a>
          </div> -->
            <!-- <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav> -->
    



<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
     Head[Start] -->
    <!-- <header> -->
        <!-- <nav class="navbar navbar-default"> -->
            <!-- <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header> -->
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <!-- <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label>年齢：<input type="text" name="age"></label><br>
                <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form> -->
    <!-- Main[End] -->
<!-- </body>

</html> -->
