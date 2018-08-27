<?php
	
	//宣告一個 link 變數，並執行連結資料庫函式，連結結果會帶入 link 當中
	
	$link = mysqli_connect("localhost", "root", "", "pp_db");
	
	
	if (mysqli_connect_errno())
	{
		//有錯誤就代表連線失敗
		echo '無法連線資料庫 :<br/>' . mysqli_connect_errno();
	}
	else
	{
		//設定連線編碼為UTF-8
		mysqli_query($link, "SET NAMES utf8");
		
  }
    
	
	$sql = "SELECT * FROM `learn`";
	$result = mysqli_query($link, $sql);
	$datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
  }
  
  if(isset($_GET["q"])) {
    $q = $_GET["q"];
  } else {
    $q = "none";
  }
?>

<div class="dropdown pt-3 pb-3 d-flex justify-content-end">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    選擇程式語言
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="?p=learn">全部</a>
    <a class="dropdown-item" href="?p=learn&q=c">c</a>
    <a class="dropdown-item" href="?p=learn&q=c++">c++</a>
    <a class="dropdown-item" href="?p=learn&q=c#">c#</a>
    <a class="dropdown-item" href="?p=learn&q=java">java</a>
    <a class="dropdown-item" href="?p=learn&q=python">python</a>
    <a class="dropdown-item" href="?p=learn&q=html">html</a>
    <a class="dropdown-item" href="?p=learn&q=css">css</a>
    <a class="dropdown-item" href="?p=learn&q=js">js</a>
    <a class="dropdown-item" href="?p=learn&q=php">php</a>
  </div>
</div>

<?php if(!empty($datas)):?>
		<?php foreach($datas as $user):?>
      <?php if($q == "none" || $user[$q]):?>
        <div class="card mx-auto mb-5">
        <h5 class="card-header text-light bg-secondary"><?php echo "{$user['title']}"?>
        <footer class="blockquote-footer float-right text-light"><?php echo "{$user['publish_date']}"?></footer>
        </h5>
        <div class="card-body">
          <!--h5 class="card-title"></h5-->
          <p class="card-text"><?php echo "{$user['article']}"?></p>
          <?php 
            $hashlist = array("c","c++","c#","java","python","html","css","js","php");
            foreach($hashlist as $hashindex) {
              if($user[$hashindex]) {
                echo "<span class='text-primary'>#{$hashindex} <span>";
              }
            }
          ?>
          
          <a href="<?php echo "{$user['link']}"?>" target="_blank" class="btn btn-secondary float-right ">前往教學網頁</a>
        </div>
      </div>
      <?php endif?>
		<?php endforeach;?>
  <?php endif?>