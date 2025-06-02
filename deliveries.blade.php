<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客納品書一覧</title>
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
        h1 { font-size: 2.5rem; margin-left: 60px; }
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
        .search-bar {
            margin: 30px 0 10px 60px;
        }
        .search-bar input {
            font-size: 1.2rem;
            padding: 5px 10px;
            width: 300px;
        }
        .search-bar button {
            font-size: 1.2rem;
            padding: 5px 20px;
            margin-left: 10px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background: #fff;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 4px;
            text-align: center;
        }
        th {
            background: #eee;
        }
        .btn {
            padding: 10px 30px;
            margin: 20px 10px;
            font-size: 1.1rem;
            border-radius: 6px;
            border: 2px solid #333;
            background: #fff;
            cursor: pointer;
        }
        .btn.delete {
            background: #e53935;
            color: #fff;
            border: none;
        }
        .btn.create {
            background: #fff;
            color: #333;
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
    <h1>顧客納品書一覧</h1>
    <div class="search-bar">
        <input type="text" placeholder="納品書No.,顧客,納品内容,合計金額,電話番号,納品日,納品状態,リードタイム,備考">
        <button>検索</button>
    </div>
    <table>
        <tr>
            <th></th>
            <th>納品書No.</th>
            <th>顧客</th>
            <th>納品内容</th>
            <th>合計金額</th>
            <th>電話番号</th>
            <th>納品日</th>
            <th>納品状態</th>
            <th>リードタイム</th>
            <th>備考</th>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>1001</td>
            <td>商品B</td>
            <td>佐藤花子</td>
            <td>080-xxxx-xxxx</td>
            <td>2025/05/21</td>
            <th>納品日</th>
            <th>納品状態</th>
            <th>リードタイム</th>
            <th>備考</th>
        </tr>
        <!-- サンプルデータ行を追加可能 -->
    </table>
    <div style="text-align:center;">
        <a href="{{ url('/delivery') }}" class="btn create">新規納品書作成</a>
        <button class="btn delete">納品書削除</button>
    </div>
</div>
<div class="notification">
    <a href="{{ url('/notifications') }}">
        <div class="bell">
            🔔
            <div class="red-dot">1</div>
        </div>
    </a>
</div>
<script type="text/javascript">
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('main');
        sidebar.classList.toggle('show');
        main.classList.toggle('shift');
    }
</script>
</body>
</html>