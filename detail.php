<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>详细搜索结果</title>
<style type="text/css">

body {
	font: 100%/1.4 "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS P Gothic", sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}
/* ~~ エレメント / タグセレクター ~~ */
ul, ol, dl { /* ブラウザー間の相違により、リストの余白とマージンをゼロにすることをお勧めします。一貫性を保つために、量をここで指定するか、リストに含まれるリスト項目 (LI、DT、DD) で指定できます。より詳細なセレクターを記述しない限り、ここで指定する内容が .nav リストにも適用されることに注意してください。 */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* 上マージンを削除すると、マージンを含む block からマージンがはみ出す場合があるという問題を回避できます。残った下マージンにより、後続のエレメントからは離されます。 */
	padding-right: 15px;
	padding-left: 15px; /* block 自体ではなく block 内でエレメントの両側に余白を追加すると、ボックスモデル計算が不要になります。代わりに、両側に余白を指定した block をネストして使用することもできます。 */
}
a img { /* このセレクターは、一部のブラウザーでイメージをリンクで囲んだ場合にイメージの周囲に表示される初期設定の青いボーダーを削除します。 */
	border: none;
}
/* ~~ サイトのリンクのスタイル付けは、ホバー効果を作成するセレクターグループも含め、この順序にする必要があります。~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* 非常に特殊な表示方法でリンクをスタイル付けする場合を除き、一目で見分けられるように下線を指定することをお勧めします。 */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* このセレクターグループは、キーボードを使用するユーザーに対し、マウスを使用するユーザーと同じホバー効果を提供します。 */
	text-decoration: none;
}
/* ~~ この固定幅コンテナが他のすべての block を囲みます。~~ */
.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; /* 幅に加え、両側を自動値とすることで、レイアウトが中央に揃います。 */
}
/* ~~ ヘッダーには幅は指定されません。ヘッダーはレイアウトの幅全体まで広がります。~~ */
header {
	background-color: #ADB96E;
	
}

.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 200px;
	float: left;
}
aside {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
}

/* ~~ このセレクターグループは、.content 内のリストに領域間隔を指定します。~~ */
.content ul, .content ol {
	padding: 0 15px 15px 40px; /* この余白は、上述の見出しと段落ルールの右の余白を表します。下の余白はリスト内の他のエレメントとの間隔用に配置され、左の余白はインデント作成用に配置されています。これは必要に応じて調整できます。 */
}

/* ~~ ナビゲーションリストのスタイル付け (Spry などの事前作成済みのフライアウトメニューを使用する場合は削除できます) ~~ */
ul.nav {
	list-style: none; /* リストのマーカーを削除します。 */
	border-top: 1px solid #666; /* リンク用の上部のボーダーを作成します。他のすべてのものは LI 上で下部のボーダーを使用して配置されます。 */
	margin-bottom: 15px; /* 下のコンテンツのナビゲーション間の間隔を作成します。 */
}
ul.nav li {
	border-bottom: 1px solid #666; /* ボタンの区切り線を作成します。 */
}
ul.nav a, ul.nav a:visited { /* これらのセレクターをグループ化することで、リンクのボタン表示が訪問後も確実に保持されます。 */
	padding: 5px 5px 5px 15px;
	display: block; /* リンクにブロックプロパティを指定し、リンクが含まれる LI 全体がリンクになるようにします。これにより、領域全体がマウスのクリックに反応するようになります。 */
	width: 160px;  /*この幅により、IE6 でボタン全体をクリックできるようになります。IE6 をサポートする必要がない場合は削除できます。適切な幅を計算するには、サイドバーコンテナの幅からそのリンクの余白を減算します。 */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* マウスを使用する場合もキーボードを使用する場合も、背景色とテキストカラーを変更します。 */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ フッター ~~ */
footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* IE6 に、適切にクリアするための hasLayout を指定します。 */
	clear: both; /* この clear プロパティにより .container は、カラムの範囲がどこまでかを認識してその範囲を含めるようになります。 */
}



/*HTML5 サポート - 新しい HTML5 タグを display:block に設定します。これにより、ブラウザーでタグが適切にレンダリングされます。 */

body,td,th {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS P Gothic", sans-serif;
}
.c-both { clear: both; }

ul.category {
	list-style: none; 
}
.fenlei {
	padding: 25px 5px 5px 25px;
}

.searchButtonDetail {
	padding: 25px 5px 5px 5px;
}

.detailRate{
	padding: 40px 5px 5px 50px;
}

.snsfild {
	background-color: #CCC49F;
}

</style>
</head>

<body>

<div class="container">
  <header>
    <div class="mainLogo" style="float: left;">
    <a href="./index.html">
    <img src="価額検索２.jpg" alt="ロゴを挿入" width="181" height="101" id="Insert_logo" style="background-color: #C6D580; display:block;" /> 
    </a>
    </div>
    
    <div class="fenlei" style="float: left;">
    <ul class="category">
      <li><label for="select">　　分类</label>
      <select name="select" id="select">
        <option value="0">电器</option>
        <option value="1">化妆品</option>
        <option value="2">衣类</option>
      </select></li>
      
      <li><label for="select2">搜索方法</label>
      <select name="select2" id="select2">
        <option value="0">最便宜</option>
        <option value="1">最贵</option>
        <option value="2">随机</option>
      </select></li>
      </ul>
    </div>
	
	<div class="searchButtonDetail" style="float: left;">
		<button type="button" name="searchButton">
		<font size="5" color="#333399">詳細検索</font>
		</button>
	</div>
	
	<div class="detailRate" style="float: left;">
		今日汇率： 8.5
	</div>
    
<div class="c-both"></div>
  </header>
  
  <div class="sidebar1">
    <h4>　　推荐！</h4>
	<label>　　　　最低价！200JPY(10RMB)</label><br>
	<label>商城：日本亚马逊</label><br>
	<a href="#">进入亚马逊</a><br>
	<label>平均价格：500JPY(25RMB)</label><br>
	<br>
	<label>　　　最专业商家</label><br>
	<label>商城：乐天</label><br>
	<a href="#">进入乐天</a><br>
	<label>该产品出荷数最多30000件</label><br>
	<label>价格：550JPY(27RMB)</label><br>
	<hr>
    <div class="snsfild">
  	  <a href="#">人人网点赞</a><br>
  	  <a href="#">微信点赞</a><br>
	  <a href="#">微博点赞</a><br>
    </div>
	
  </div>
  <div class="content">
      <h4>日本亚马逊結果一览</h4>
      <div class="searchResult" id="searchResult"> 
      <form>
      <label>おむつ</label><br>
      价格：3000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：2000円（150RMB）<br>
	  型号：XX001<br>
	  <a href="#">进入亚马逊</a>
	  <a href="#">联系代购</a>
      <hr>
      <label>おむつ</label><br>
      价格：4000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：5000円（150RMB）<br>
      <hr>
      </form>

      </div>
  </div>
  
  <div class="content">
      <h4>雅虎购物結果一览</h4>
      <div class="searchResult" id="searchResult"> 
      <form>
      <label>おむつ</label><br>
      价格：3000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：2000円（150RMB）<br>
	  型号：XX001<br>
	  <a href="#">进入雅虎</a>
	  <a href="#">联系代购</a>
      <hr>
      <label>おむつ</label><br>
      价格：4000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：5000円（150RMB）<br>
      <hr>
      </form>

      </div>
  </div>
  
  <div class="content">
      <h4>乐天市场結果一览</h4>
      <div class="searchResult" id="searchResult"> 
      <form>
      <label>おむつ</label><br>
      价格：3000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：2000円（150RMB）<br>
	  型号：XX001<br>
	  <a href="#">进入乐天市场</a>
	  <a href="#">联系代购</a>
      <hr>
      <label>おむつ</label><br>
      价格：4000円（150RMB）<br>
      <hr>
      <label>おむつ</label><br>
      价格：5000円（150RMB）<br>
      <hr>
      </form>

      </div>
  </div>
  
  <aside>
    <h4>推荐代购</h4>
    <div class="buyerlist" id="buyerlist"> 
    <form>
    <label>代购1</label><br>
    微信号：9398432<br>
    领域：化妆品
    <hr>
        <label>代购2</label><br>
    微信号：9398432<br>
    领域：电器
    <hr>
        <label>代购3</label><br>
    微信号：9398432<br>
    领域：户外
    <hr>
        <label>代购4</label><br>
    微信号：9398432<br>
    领域：品牌
    <hr>
    </form>

    </div>
  </aside>

  <footer>
    <p>Copyright@ xxxxxxx</p>
  </footer>
  <!-- end .container --></div>
</body>
</html>
