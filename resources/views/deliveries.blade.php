<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客納品書一覧</title>
    <link rel="stylesheet" href="{{ asset('css/deliveries.css') }}">

</head>
<body>
<div class="menu-btn" onclick="toggleSidebar()">☰</div>
<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="{{ url('/home') }}"><span style="font-size:1.2em;">&#8962;</span> <b>HOME</b></a></li>
        <li><a href="{{ url('/orders') }}">・注文書一覧</a></li>
        <li><a href="{{ url('/deliveries') }}">・購入納品書一覧</a></li>
        <li><a href="{{ url('/stats') }}">・統計情報一覧</a></li>
        <li><a href="{{ url('/trash') }}">・ゴミ箱</a></li>
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