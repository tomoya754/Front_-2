<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
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
        .sidebar a {
            color: white;
            text-decoration: underline;
        }
        .main {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .main.shift { margin-left: 300px; }
        .menu-btn {
            font-size: 36px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 200;
        }
        .btn {
            display: block;
            width: 320px;
            padding: 20px;
            margin: 40px auto;
            text-align: center;
            border: 2px solid black;
            border-radius: 8px;
            text-decoration: none;
            color: black;
            font-size: 1.5rem;
            font-weight: bold;
            background: white;
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
        h1 {
            text-align: center;
            font-size: 3rem;
            margin-top: 60px;
        }
    </style>
</head>
<body>
<div class="menu-btn" onclick="toggleSidebar()">☰</div>
<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="{{ url('/home') }}">◇HOME</a></li>
        <li><a href="{{ url('/orders') }}">注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">購入納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">ゴミ箱</a></li>
    </ul>
</div>
<div class="main" id="main">
    <h1>HOME</h1>
    <a class="btn" href="{{ url('/orders') }}">注文書一覧</a>
    <a class="btn" href="{{ url('/deliveries') }}">顧客納品書一覧</a>
    <a class="btn" href="{{ url('/stats') }}">統計情報一覧</a>
</div>
<div class="notification">
    <a href="{{ url('/notifications') }}">
        <div class="bell">
            🔔
            <div class="red-dot">1</div>
        </div>
    </a>
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
