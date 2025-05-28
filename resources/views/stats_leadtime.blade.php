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
        .search-area {
            position: absolute;
            top: 30px;
            right: 40px;
            width: 500px;
            background: #fff;
            border: 5px double #222;
            padding: 20px 30px;
            box-sizing: border-box;
        }
        .search-area label {
            font-size: 1.2rem;
            margin-right: 8px;
        }
        .search-area input {
            width: 60px;
            font-size: 1.1rem;
            margin-right: 4px;
        }
        .search-area .search-btn {
            width: 120px;
            height: 40px;
            font-size: 1.3rem;
            margin-top: 10px;
            background: #eee;
            border: 1px solid #888;
            border-radius: 4px;
            cursor: pointer;
        }
        .table-area {
            margin: 80px 0 0 40px;
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
    </style>
</head>
<body>
    <div class="header">
        <div class="menu-btn" onclick="toggleSidebar()">&#9776;</div>
        <span class="title">顧客別</span>
    </div>
    <div class="search-area">
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
            // サイドバー表示用（必要に応じて実装）
        }
    </script>
</body>
</html>