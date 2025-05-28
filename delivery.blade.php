納品書

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>納品書</title>
    <style>
        body { font-family: 'Meiryo', sans-serif; margin: 0; background: #fafafa; }
        .menu-btn { font-size: 36px; cursor: pointer; position: absolute; top: 20px; left: 20px; }
        .sidebar {
            width: 220px; background: black; color: white; padding: 30px 0 0 0;
            position: fixed; top: 0; left: -220px; height: 100%; transition: left 0.3s; z-index: 100;
        }
        .sidebar.show { left: 0; }
        .sidebar ul { list-style: disc inside; padding: 0 0 0 30px; }
        .sidebar li { margin: 30px 0; font-size: 1.3rem; }
        .sidebar a { color: white; text-decoration: underline; }
        .main { margin-left: 0; transition: margin-left 0.3s; }
        .main.shift { margin-left: 220px; }
        .center { text-align: center; }
        .delivery-title { font-size: 2rem; letter-spacing: 0.5em; margin: 30px 0 10px 0; }
        .delivery-header, .delivery-footer { width: 90%; margin: 0 auto; }
        .delivery-header { display: flex; justify-content: space-between; margin-top: 30px; }
        .delivery-header .left, .delivery-header .right { width: 45%; }
        .delivery-header .right { text-align: right; }
        .delivery-header .right .box { border: 1px solid #888; width: 40px; height: 30px; display: inline-block; vertical-align: middle; }
        .delivery-table { width: 90%; margin: 30px auto 0 auto; border-collapse: collapse; }
        .delivery-table th, .delivery-table td { border: 1px solid #bbb; padding: 6px 8px; text-align: center; }
        .delivery-table th { background: #ccc; }
        .delivery-table tr:nth-child(even) { background: #f5f5f5; }
        .total-area { width: 90%; margin: 0 auto; text-align: right; }
        .total-area span { margin-left: 10px; }
        .note-area { width: 90%; margin: 30px auto 0 auto; }
        .note-area textarea { width: 100%; height: 60px; font-size: 1rem; }
        .btn-area { width: 90%; margin: 40px auto 0 auto; display: flex; justify-content: center; gap: 60px; }
        .btn { font-size: 2.5rem; padding: 20px 60px; border-radius: 16px; border: 2px solid #333; background: #fff; cursor: pointer; }
        .red { color: red; font-size: 0.95em; }
        .label { color: #d00; font-size: 1rem; margin-right: 10px; }
        .explain { color: #d00; font-size: 1rem; position: absolute; left: 60px; }
        @media print {
            .menu-btn, .sidebar, .btn-area { display: none !important; }
            .main, .main.shift { margin-left: 0 !important; }
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
    <div class="center delivery-title">納 品 書</div>
    <div class="delivery-header">
        <div class="left">
            <div>〇〇〇〇〇〇〇〇〇〇　御中</div>
            <div>〒537-0022<br>大阪府大阪市東成区中本１丁目５－２１</div>
            <div class="label">表現の仕方</div>
            <div style="margin-top: 20px;">下記の通り、納品致します。</div>
        </div>
        <div class="right">
            <div>納品No. XXXXXXXXXX</div>
            <div>発注日　2025年1月1日</div>
            <div>
                <span class="box"></span>
            </div>
            <div style="margin-top: 10px;">
                <b>納品者</b><br>
                〒537-0022<br>
                大阪府大阪市東成区中本１丁目５－２１<br>
                TEL：00-0000-0000<br>
                FAX：00-0000-0000<br>
                E-Mail：xxxxxxxxxxxxxxxxxxxxxx<br>
                担当者：〇〇〇〇〇〇
            </div>
        </div>
    </div>
    <div class="total-area" style="margin-top: 20px;">
        合計金額：<span>￥0</span>（税込）
        <span class="red">※数式が入っています。</span>
    </div>
    <table class="delivery-table">
        <tr>
            <th>No.</th>
            <th>品目</th>
            <th>数量</th>
            <th>単価</th>
            <th>金額</th>
        </tr>
        @for($i=1;$i<=12;$i++)
        <tr>
            <td>{{ $i }}</td>
            <td>〇〇〇〇〇〇</td>
            <td>仮</td>
            <td></td>
            <td></td>
        </tr>
        @endfor
        <tr>
            <td colspan="4" style="text-align:right;">小計</td>
            <td>￥0 <span class="red">※数式が入っています。</span></td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:right;">消費税</td>
            <td>￥0 <span class="red">※数式が入っています。</span></td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:right;">合計金額</td>
            <td>￥0 <span class="red">※数式が入っています。</span></td>
        </tr>
    </table>
    <div class="note-area">
        <label>備考</label>
        <textarea></textarea>
    </div>
    <div class="btn-area">
        <button class="btn">保存</button>
        <button class="btn" onclick="window.print()">印刷</button>
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
