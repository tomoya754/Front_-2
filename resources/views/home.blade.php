<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    
</head>
<body>
    <div class="menu-btn" id="menuBtn">☰</div>
<div class="sidebar-bg" id="sidebarBg"></div>
<div class="sidebar" id="sidebar">
    <span class="sidebar-close" id="sidebarClose">&times;</span>
    <ul>
        <li><a href="{{ url('/home') }}"><span style="font-size:1.2em;">&#8962;</span> <b>HOME</b></a></li>
        <li><a href="{{ url('/orders') }}">・注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">・顧客納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">・統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">・ゴミ箱</a></li>
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
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('sidebar');
        const menuBtn = document.getElementById('menuBtn');
        const sidebarClose = document.getElementById('sidebarClose');
        const sidebarBg = document.getElementById('sidebarBg');

        function openSidebar() {
            sidebar.classList.add('open');
            sidebarBg.classList.add('show');
        }
        function closeSidebar() {
            sidebar.classList.remove('open');
            sidebarBg.classList.remove('show');
        }

        menuBtn.addEventListener('click', function (e) {
            openSidebar();
            e.stopPropagation();
        });
        sidebarClose.addEventListener('click', closeSidebar);
        sidebarBg.addEventListener('click', closeSidebar);

        // ESCキーで閉じる
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeSidebar();
        });
    });
    </script>
</body>
</html>