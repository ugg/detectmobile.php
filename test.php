<?php
include "detectmobile.php";
$file = fopen("uadata.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$mobile = 0;
$pc = 0;
$allnum = 0;
$data = array();
while(!feof($file))
{
    ++$allnum;
    $ua = fgets($file);

    $data[] = $ua;

    $result = isMobile($ua);
    if(!$result){
        ++$pc;
        echo $allnum." PC ".$ua."";
    }else{
        ++$mobile;
    }


}
fclose($file);

echo "allnum:".$allnum." ,PC:".$pc." ,Mobile:".$mobile."\r\n";

$t1 = microtime(true)*1000;
echo $t1."\n";

foreach($data as $value){
    $result = isMobile($ua);
}

$t2 = microtime(true)*1000;

echo $t2."\n";

echo "all time:".($t2-$t1)."ms, veryone:".(($t2-$t1)/$allnum)."ms\n";

?>
