<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
#fscanf($_fp,"%d",$n);
$line = fgets($_fp);
    
$res=true;
while(!feof($_fp)){

$pattern1 = "#^(//)(\S\s)*#";
$pattern2 = "#(?<!(//))(//)[\S\s]*#";
$pattern3 = "#(?<!(/\*))(/\*)[\S\s]*#";
$pattern4 = "#[(\s\S)]*(?=(\*/))#";
$result=array();
if($res==false)
    {
    print $line;
    if(preg_match($pattern4,$line,$result))
            {
            
            $res=!$res;
        }
}
else{
        if(preg_match($pattern1,$line, $result))
        {
            print $line;
        }
        else if(preg_match($pattern2,$line,$result))
            {

            print $result[0];

            }
        else if(preg_match($pattern3,$line,$result))
            {
            print $result[0];
            $res=!$res;
            if(preg_match($pattern4,$line,$result))
            {
            
                $res=!$res;
             }
        }  
        else if(preg_match($pattern4,$line,$result))
            {
             print $result[0];
            $res=!$res;
        }
    }
    $line = fgets($_fp); 
}
   


?>