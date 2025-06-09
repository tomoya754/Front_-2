<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>統計情報管理</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stats.css') }}">
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