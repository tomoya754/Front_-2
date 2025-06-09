<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>統計情報管理</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        .sidebar {
            width: 300px;
            background: black;
            color: white;
            padding: 30px 0 0 0;
            position: fixed;
            top: 0;
            left: -320px;
            height: 100%;
            transition: left 0.3s;
            z-index: 100;
        }
        .sidebar.show { left: 0; }
        .sidebar ul { list-style: disc inside; padding: 0 0 0 30px; }
        .sidebar li { margin: 40px 0; font-size: 2.2rem; }
        .sidebar a { color: white; text-decoration: underline; }
        .main { margin-left: 0; padding: 20px; transition: margin-left 0.3s; }
        .main.shift { margin-left: 300px; }
        .menu-btn {
            font-size: 36px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 200;
        }
        h1 { font-size: 3rem; text-align: center; margin-top: 60px; }
        .btn-stat {
            display: block;
            width: 400px;
            padding: 40px;
            margin: 40px auto;
            text-align: center;
            border: 2px solid #222;
            border-radius: 32px;
            text-decoration: none;
            color: #222;
            font-size: 2rem;
            background: #fff;
            transition: background 0.2s;
        }
        .btn-stat:hover {
            background: #f0f0f0;
        }
        .notification {
            position: absolute;
            right: 40px;
            top: 30px;
            cursor: pointer;
        }
        .bell {
            font-size: 36px;
            position: relative;
        }
        .red-dot {
            position: absolute;
            top: -8px;
            right: -8px;
            background: red;
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            text-align: center;
            font-size: 14px;
            line-height: 22px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="menu-btn" onclick="toggleSidebar()">☰</div>
<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="{{ url('/home') }}"><span style="font-size:1.2em;">&#8962;</span> <b>HOME</b></a></li>
        <li><a href="{{ url('/orders') }}">注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">顧客納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">ゴミ箱</a></li>
    </ul>
</div>
<div class="main" id="main">
    <h1>統計情報管理</h1>
    <a class="btn-stat" href="{{ url('/stats/sales') }}">顧客別累計売上</a>
    <a class="btn-stat" href="{{ url('/stats/leadtime') }}">顧客別リードタイム</a>
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