<?php // If you need to use PHP, start with this tag. Remove this line if not using PHP. ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>通知一覧</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #fff; }
        .container {
            width: 600px;
            margin: 40px auto;
            border: 2px solid #222;
            border-radius: 60px;
            padding: 40px 0 60px 0;
            position: relative;
        }
        .back-arrow {
            position: absolute;
            top: 30px;
            left: 30px;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            color: #222;
            filter: drop-shadow(2px 2px 2px #888);
        }
        .notification-list {
            margin: 40px auto 0 auto;
            width: 80%;
        }
        .notification-item {
            border: 2px solid #345;
            border-radius: 16px;
            padding: 18px 0;
            margin-bottom: 30px;
            font-size: 1.3rem;
            font-weight: bold;
            text-align: center;
        }
        .dot {
            color: red;
            font-size: 1.2em;
            margin-right: 10px;
        }
        .no-more {
            margin-top: 60px;
            font-size: 2rem;
            text-align: center;
            color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/home') }}" class="back-arrow">←</a>
        <div class="notification-list">
            <div class="notification-item">
                <span class="dot">◎</span>メンテナンスのお知らせ
            </div>
            <!-- ここに通知が増える場合は追加 -->
            <div style="text-align:center; font-size:2rem; margin: 40px 0;">・<br>・<br>・</div>
            <div class="no-more">これ以上の通知はありません</div>
        </div>
    </div>
</body>
</html>