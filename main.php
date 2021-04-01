<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メインページ</title>
</head>
<body>
    <div>
        <!-- タイトルと日数 -->
         <div>
             <h1></h1>
             <h2>4月は、あと20日</h2>
         </div>
        <!-- タイトルと日数 -->


         <!-- 支出計算 -->
         <div>
             <p>支出額合計 - 支出予定額 = 残支出額</p>
             <p>¥95,000 - ¥155,000 = ¥60,000</p>
         </div>
         <!-- 支出計算 -->


         <!-- 支出入力 -->
         <div>
             <input type="number" placeholder="支出額を入力" />
             <select name="category" size="1">
                 <option value="rent">家賃</option>
                 <option value="utility">光熱費</option>
                 <option value="food">食費</option>
                 <option value="leisure">娯楽費</option>
             </select>
             <button>支出</button>
         </div>
        <!-- 支出入力 -->


        <!-- 支出一覧 -->
        <div>
            <div>
                <h3>家賃</h3>
                <h4>¥73,000</h4>
                <button>編集</button>
                <button>削除</button>
            </div>

            <div>
                <h3>食費</h3>
                <h4>¥13,000</h4>
                <button>編集</button>
                <button>削除</button>
            </div>
        </div>
        <!-- 支出一覧 -->


    </div>
</body>
</html>