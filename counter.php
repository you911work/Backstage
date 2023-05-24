<?php require "header.php"?>
<?php
$maxlength = 6;  // 設定最大位數
// 檢查計數檔案是否存在
if (!file_exists("counter.txt")) {
   $counter = 0;
   $file = fopen("counter.txt","w"); // 開啟檔案   
   fputs($file, $counter); // 將計數寫入檔案
   fclose($file); // 關閉檔案
} else {   // 開啟檔案
   $file = fopen('counter.txt','r+');
   // 以位元組的方式讀取檔案
   $counter = fread($file, filesize("counter.txt"));
   fclose($file); // 關閉檔案
}
$counter += 1;  // 增加計數
// 以寫入模式開啟檔案，並將新計數寫入檔案
$file = fopen("counter.txt","w+");
fputs($file, $counter);
fclose($file);

// 顥示網站的訪客計數, 在計數前填入0
$str = str_repeat("0", $maxlength-strlen($counter));
$str .= $counter;
echo "<h1>瀏覽人次:   ".$str."  人次</h1>";
// 使用HTML圖片標籤顯示數字的GIF圖片
// for ( $i = 0; $i < $maxlength; $i++ )
   // echo "<img src='images\\".substr($str,$i,1).".gif'>";
?>
<?php require "footer.php"?>