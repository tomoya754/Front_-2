<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .sidebar {
            width: 200px;
            background: black;
            color: white;
            padding: 10px;
            position: fixed;
            top: 0;
            left: -200px;
            height: 100%;
            transition: left 0.3s;
        }
        .sidebar.show {
            left: 0;
        }
        .main {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .main.shift {
            margin-left: 200px;
        }
        .menu-btn {
            font-size: 24px;
            cursor: pointer;
        }
        .btn {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 15px auto;
            text-align: center;
            border: 2px solid black;
            border-radius: 5px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .notification {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
        }
        .bell {
            font-size: 24px;
            position: relative;
        }
        .red-dot {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            text-align: center;
            font-size: 12px;
            line-height: 18px;
        }
    </style>
</head>
<body>

<div class="menu-btn" onclick="toggleSidebar()">☰</div>

<div class="sidebar" id="sidebar">
    <p>・◇HOME</p>
    <p>・注文書一覧</p>
    <p>・購入納品書一覧</p>
    <p>・統計情報一覧</p>
    <p>・ゴミ箱</p>
</div>

<div class="main" id="main">
    <li><a href="{{ url('/home') }}"><span style="font-size:1.2em;">&#8962;</span> <b>HOME</b></a></li>
        <li><a href="{{ url('/orders') }}">・注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">・顧客納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">・統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">・ゴミ箱</a></li>
</div>


</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('main');
        sidebar.classList.toggle('show');
        main.classList.toggle('shift');
    }
</script>

</body>
</html>