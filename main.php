<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>検索ホームページ</title>
<link href="priceSearch.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="main" id="main">

  <div class="searchForm" id="searchForm">
    <form id="form1" name="form1" method="post">
      <p><img src="価額検索２.jpg" width="300" height="180" alt=""/>
        <input type="text" name="textfield" id="textfield">
        <input type="button" name="button" id="button" value="検索" onClick="location.href='./detail.php'">
      　</p></form>
  </div>
  <div class="ranking" id="ranking">
  <label>其他人在搜什么？</label>
  <a href="http://www.amazon.co.jp/s/ref=nb_sb_noss_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=iPhone5S" target="new">iPhone5S</a>
  <a href="http://www.amazon.co.jp/s/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=%E8%8B%8D%E4%BA%95%E7%A9%BA&rh=i%3Aaps%2Ck%3A%E8%8B%8D%E4%BA%95%E7%A9%BA" target="new">苍井空</a>
  <a href="http://www.amazon.co.jp/s/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=%E5%85%85%E6%B0%94%E5%A8%83%E5%A8%83&rh=i%3Aaps%2Ck%3A%E5%85%85%E6%B0%94%E5%A8%83%E5%A8%83" target="new">陈斌</a>
  </div>
  
<hr>
<div class="rate" id="rate">
<label>今日汇率： 人民币对日币是5.96</label></div>
<?php
	echo "Hello PHP!";
?>
</div>
</body>
</html>
