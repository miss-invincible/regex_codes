<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$lines = array();
for($i=0;$i<$n;$i++){
    $lines[] = trim(fgets($_fp));
   
}
$pattern1 = "/(?<=<)(\w)+[^>]*(?=>)/";

$result=array();
$res = array();
foreach($lines as $line){
    if(preg_match_all($pattern1,$line, $result)){
        $item=$result[0];
            foreach($item as $i){
                $answer=array();
                $answer = explode(" ",$i);
                $res[]=$answer[0];
            }
    }
}
$res2 = array();
$res2 = array_unique($res);
sort($res2);
 $ans = implode(";",$res2);
 print $ans."\n";

?>