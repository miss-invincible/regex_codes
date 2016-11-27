<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$lines = array();
for($i=0;$i<$n;$i++){
    $lines[] = trim(fgets($_fp));
   
}
$pattern1 = "/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/";
$pattern2 = "/^[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}:[\da-f]{1,4}$/";

$result=array();

foreach($lines as $line){
    if(preg_match($pattern1,$line, $result)){
        foreach($result as $item){
            $data = array();
            $test=0;
            $data = explode(".",$item);
            foreach($data as $d){
                if(intval($d)>255){
                    print "Neither\n";
                    $test=1;
                    break;
                }
            }
            
            if($test==0){
                print "IPv4\n"; 
            }
   
        }
    }
    elseif(preg_match_all($pattern2, $line, $result))
    {
        print "IPv6\n";
    }
    else
    {
        print "Neither\n";
    }
}

?>