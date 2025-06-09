<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客別リードタイム</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        .header {
            display: flex;
            align-items: center;
            margin: 20px 0 0 20px;
        }
        .menu-btn {
            font-size: 36px;
            cursor: pointer;
            margin-right: 20px;
        }
        .title {
            font-size: 2rem;
            font-weight: bold;
        }
        .search-bar-area {
            display: flex;
            align-items: center;
            margin: 30px 0 0 40px;
        }
        .search-bar {
            width: 300px;
            height: 36px;
            font-size: 1.2rem;
            padding-left: 10px;
            border: 1px solid #888;
            border-radius: 4px;
        }
        .search-icon {
            font-size: 1.6rem;
            margin-left: -35px;
            margin-right: 20px;
            cursor: pointer;
        }
        .filter-btn {
            margin-left: 10px;
            width: 40px;
            height: 40px;
            background: #eee;
            border: 1px solid #888;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .search-area-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 420px;
            background: #fff;
            border: 3px double #222;
            padding: 30px 30px 20px 30px;
            box-sizing: border-box;
            z-index: 1000;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        .search-area-modal label {
            font-size: 1.1rem;
            margin-right: 8px;
        }
        .search-area-modal input {
            width: 60px;
            font-size: 1.1rem;
            margin-right: 4px;
        }
        .search-area-modal .search-btn {
            width: 120px;
            height: 40px;
            font-size: 1.3rem;
            margin-top: 10px;
            background: #eee;
            border: 1px solid #888;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal-close {
            position: absolute;
            top: 8px;
            right: 12px;
            font-size: 1.5rem;
            color: #888;
            cursor: pointer;
        }
        .modal-bg {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.2);
            z-index: 900;
        }
        .table-area {
            margin: 40px 0 0 40px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            min-width: 800px;
            background: #fff;
        }
        th, td {
            border: 1px solid #222;
            padding: 8px 10px;
            text-align: center;
            font-size: 1.1rem;
        }
        th {
            background: #f8f8f8;
        }
        .customer-name {
            text-align: left;
        }
        @media (max-width: 900px) {
            .table-area, table { min-width: 400px; width: 98%; }
            .search-area-modal { width: 95vw; }
        }
    </style>
    <style>
    .sidebar {
        position: fixed;
        top: 0;
        left: -220px;
        width: 200px;
        height: 100%;
        background: #222;
        color: #fff;
        z-index: 2000;
        transition: left 0.3s;
        padding-top: 60px;
        box-sizing: border-box;
    }
    .sidebar.open {
        left: 0;
    }
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sidebar ul li {
        padding: 16px 24px;
        border-bottom: 1px solid #444;
        cursor: pointer;
    }
    .sidebar ul li:hover {
        background: #333;
    }
    .sidebar-close {
        position: absolute;
        top: 12px;
        right: 16px;
        font-size: 2rem;
        cursor: pointer;
        color: #fff;
    }
</style>

</head>
<body>
<div class="sidebar" id="sidebar">
    <span class="sidebar-close" onclick="toggleSidebar()">&times;</span>
    <ul>
        <li><a href="{{ url('/home') }}"><span style="font-size:1.2em;">&#8962;</span> <b>HOME</b></a></li>
        <li><a href="{{ url('/orders') }}">・注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">・顧客納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">・統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">・ゴミ箱</a></li>
    </ul>
</div>

    <div class="header">
        <div class="menu-btn" onclick="toggleSidebar()">&#9776;</div>
        <span class="title">顧客別リードタイム</span>
    </div>
    <div class="search-bar-area">
        <input type="text" class="search-bar" placeholder="顧客名">
        <span class="search-icon">&#128269;</span>
        <button type="button" class="filter-btn" onclick="openModal()" title="絞り込み">
            &#128722;
        </button>
    </div>
    <div class="modal-bg" id="modalBg" onclick="closeModal()"></div>
    <div class="search-area-modal" id="searchModal">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <form>
            <div>
                <label>平均リードタイム</label>
                <input type="text" name="leadtime_min">日 ～ 
                <input type="text" name="leadtime_max">日
            </div>
            <div style="margin-top:10px;">
                <label>最終購入日</label>
                <input type="text" name="last_year" style="width:40px;">年
                <input type="text" name="last_month" style="width:30px;">月
                <input type="text" name="last_day" style="width:30px;">日
            </div>
            <div style="margin-top:10px;">
                <span style="margin-left:60px;">～</span>
                <input type="text" name="last_year2" style="width:40px;">年
                <input type="text" name="last_month2" style="width:30px;">月
                <input type="text" name="last_day2" style="width:30px;">日
            </div>
            <button type="submit" class="search-btn">検索</button>
        </form>
    </div>
    <div class="table-area">
        <table>
            <tr>
                <th>顧客名</th>
                <th>平均リードタイム</th>
                <th>最終購入日</th>
                <th>備考欄</th>
            </tr>
            <tr>
                <td class="customer-name">大阪情報専門学校様</td>
                <td>7日</td>
                <td>2025/1/14</td>
                <td></td>
            </tr>
            <tr>
                <td class="customer-name"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="customer-name"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <script>
        function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
        } else {
            sidebar.classList.add('open');
        }
    }
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