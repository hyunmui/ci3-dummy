<?php
defined('BASEPATH') || exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>코드이그나이터에 오신 것을 환영합니다</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
            text-decoration: none;
        }

        a:hover {
            color: #97310e;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
            min-height: 96px;
        }

        p {
            margin: 0 0 10px;
            padding: 0;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <div id="container">
        <h1>CodeIgniter에 오신 것을 환영합니다!</h1>

        <div id="body">
            <p>당신이 보고 있는 페이지는 CodeIgniter에 의해 동적으로 생성되고 있습니다.</p>

            <p>이 페이지를 편집하려면 다음 위치에서 찾을 수 있습니다.</p>
            <code>application/views/welcome_message.php</code>

            <p>이 페이지에 해당하는 컨트롤러는 다음 위치에서 찾을 수 있습니다.</p>
            <code>application/controllers/WelcomeController.php</code>

            <p>CodeIgniter를 처음으로 탐색하는 경우 <a href="http://www.ciboard.co.kr/user_guide/kr/">사용자 가이드</a>를 먼저 읽어야 합니다.</p>
        </div>

        <p class="footer"><strong>{elapsed_time}</strong>초 만에 페이지가 렌더링되었습니다. CodeIgniter 버전 <strong><?= CI_VERSION ?><strong></p>
    </div>

</body>

</html>