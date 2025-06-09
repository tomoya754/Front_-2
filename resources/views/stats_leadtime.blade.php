<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客別リードタイム</title>
    <link rel="stylesheet" href="{{ asset('css/stats_leadtime.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="menu-btn" id="menuBtn">&#9776;</div>
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

    <div class="header">
        <span class="title">顧客別リードタイム</span>
    </div>

    <div class="search-bar-area">
        <input type="text" class="search-bar" placeholder="顧客名で検索">
        <span class="search-icon" onclick="openModal()">🔍</span>
        <button class="filter-btn" onclick="openModal()">⏷</button>
    </div>

    <div class="modal-bg" id="modalBg"></div>
    <div class="search-area-modal" id="searchModal">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <div>
            <label>リードタイム：</label>
            <input type="text"> 日 〜 <input type="text"> 日
        </div>
        <div style="margin-top:10px;">
            <label>顧客名：</label>
            <input type="text" style="width:180px;">
        </div>
        <button class="search-btn" style="margin-top:18px;">検索</button>
    </div>

    <div class="table-area">
        <table>
            <tr>
                <th>顧客名</th>
                <th>累計リードタイム（日）</th>
                <th>平均リードタイム（日）</th>
                <th>最短</th>
                <th>最長</th>
            </tr>
            <tr>
                <td class="customer-name">大阪情報専門学校</td>
                <td>30</td>
                <td>10</td>
                <td>8</td>
                <td>12</td>
            </tr>
            <tr>
                <td class="customer-name">北海道情報大学</td>
                <td>45</td>
                <td>15</td>
                <td>10</td>
                <td>20</td>
            </tr>
            <!-- 必要に応じて行を追加 -->
        </table>
    </div>

    <script>
        // サイドバー
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

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeSidebar();
            });
        });

        // モーダル
        function openModal() {
            document.getElementById('searchModal').style.display = 'block';
            document.getElementById('modalBg').style.display = 'block';
        }
        function closeModal() {
            document.getElementById('searchModal').style.display = 'none';
            document.getElementById('modalBg').style.display = 'none';
        }
    </script>
</body>
</html>