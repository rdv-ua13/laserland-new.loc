<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .pl-header {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 0 15px 20px;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }

            .ready {
                color: forestgreen;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
    <div class="pl-header">
        <div class="logo">
            <img src="img/logo.png" width="115" height="73" alt="Логотип компании">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">00 + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">00 + ui (всего страниц в макете)</span>
        </span>
    </div>

    <div>
        <ul>
            <!--class="ready"-->
            <li><a href="index.php" target="_blank">Главная</a></li>

            <br>
            <li><a href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>