<?php
error_reporting(E_ALL); 
//echo"123";
$base64 =$_POST["base64"];
//echo strlen($base64);
 $base64=str_replace('-', '+', $base64 );
 //echo $base64;
//echo strlen($base64);
//echo $base64;
//$base64 = "data:image/bmp;base64,Qk22EgAAAAAAADYAAAAoAAAAIAAAACUAAAABACAAAAAAAIASAAASCwAAEgsAAAAAAAAAAAAA/wAA//4AAP/5AAD/9QAA//EAAP/sAAD/5wAA/+MAAP/fAAD/2gAA/9YAAP/RAAD/zQAA/8gAAP/EAAD/wAAA/7sAAP+3AAD/sgAA/64AAP+pAAD/pQAA/6EAAP+cAAD/lwAA/5MAAP+OAAD/igAA/4YAAP+BAAD/fQAA/3gAAP//AAD//gAA//kAAP/0AAD/8QAA/+wAAP/oAAD/4wAA/98AAP/aAAD/1gAA/9IAAP/NAAD/yAAA/8QAAP/AAAD/uwAA/7YAAP+yAAD/rgAA/6kAAP+lAAD/oAAA/5wAAP+XAAD/kwAA/44AAP+KAAD/hQAA/4EAAP99AAD/eAAA//8AAP/+AAD/+QAA//UAAP/wAAD/7AAA/+gAAP/jAAD/3gAA/9oAAP/WAAD/0QAA/80AAP/IAAD/xAAA/8AAAP+7AAD/twAA/7MAAP+uAAD/qQAA/6UAAP+hAAD/nAAA/5cAAP+TAAD/jwAA/4oAAP+GAAD/ggAA/30AAP94AAD//wAA//0AAP/6AAD/9QAA//AAAP/sAAD/5wAA/+MAAP/fAAD/2gAA/9UAAP/RAAD/zQAA/8gAAP/EAAD/vwAA/7sAAP+3AAD/sgAA/64AAP+pAAD/pQAA/6AAAP+cAAD/mAAA/5MAAP+PAAD/igAA/4YAAP+BAAD/fQAA/3gAAP//AAD//gAA//kAAP/0AAD/8QAA/+wAAP/nAAD/4wAA/94AAP/aAAD/1gAA/9IAAP/NAAD/yAAA/8QAAP+/AAD/uwAA/7cAAP+yAAD/rgAA/6kAAP+lAAD/oQAA/5wAAP+YAAD/kwAA/44AAP+KAAD/hgAA/4EAAP99AAD/eAAA//8AAP/+AAD/+gAA//UAAP/wAAD/7AAA/+gAAP/jAAD/3gAA/9oAAP/WAAD/0gAA/80AAP/JAAD/xAAA/8AAAP+7AAD/twAA/7IAAP+uAAD/qQAA/6UAAP+hAAD/nAAA/5gAAP+TAAD/jgAA/4oAAP+GAAD/ggAA/3wAAP94AAD//wAA//0AAP/5AAD/9QAA//AAAP/sAAD/5wAA/+MAAP/NAED/sQCf/6EA3/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mwDP/5wAj/+cACD/mAAA/5MAAP+PAAD/igAA/4YAAP+CAAD/fQAA/3gAAP//AAD//gAA//kAAP/1AAD/8QAA/+wAAP/iABD/rAC//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+YAI//kwAQ/48AAP+KAAD/hgAA/4EAAP98AAD/eAAA//8AAP/+AAD/+QAA//UAAP/wAAD/3AAw/54A7/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+YAM//kAAw/4oAAP+FAAD/gQAA/30AAP94AAD//wAA//4AAP/6AAD/9QAA/+sAEP+jAN//mQD//5kA//+ZAP//mQD//5kA//+ZAP//oADf/6UAv/+kAL//owC//6IAv/+gAL//nwC//5wA3/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+YAO//iwAQ/4UAAP+BAAD/fAAA/3gAAP//AAD//gAA//oAAP/0AAD/ugCf/5kA//+ZAP//mQD//5kA//+hAN//vwBg/80AEP/MAAD/yQAA/8QAAP+/AAD/uwAA/7cAAP+yAAD/rQAA/6kAEP+gAGD/mgDf/5kA//+ZAP//mQD//5kA//+VAL//hgAA/4EAAP99AAD/eAAA//8AAP/+AAD/+gAA/+kAIP+ZAP//mQD//5kA//+ZAP//swCf/9YAEP/VAAD/vABg/7MAgP+wAID/sQBw/7sAIP+4ACD/qACA/6UAgP+jAID/owBg/6UAAP+gABD/mgCf/5kA//+ZAP//mQD//5kA//+LAED/gQAA/30AAP94AAD//wAA//0AAP/6AAD/wQCP/5kA//+ZAP//mQD//6IA3//aABD/zgAw/6EA3/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mwDP/6AAEP+cABD/mQDf/5kA//+ZAP//mQD//5EAn/+BAAD/fQAA/3gAAP//AAD//gAA//kAAP+qAM//mQD//5kA//+ZAP//xwBg/94AAP+lAM//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mwC//5wAAP+YAGD/mQD//5kA//+ZAP//lwDf/4EAAP99AAD/eAAA//8AAP/+AAD/+QAA/5kA//+ZAP//mQD//5kA///eABD/yQBQ/5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mwBQ/5gAEP+ZAP//mQD//5kA//+ZAP//ggAA/30AAP95AAD//wAA//4AAP/5AAD/mQD//5kA//+ZAP//owDf/+MAAP+7AID/mQD//5kA//+ZAP//owDP/64Aj/+ZAP//mQD//5kA//+ZAP//pACP/50Az/+ZAP//mQD//5kA//+aAID/mAAA/5gA3/+ZAP//mQD//5kA//+CAAD/fAAA/3gAAP//AAD//gAA//oAAP+ZAP//mQD//5kA//+tAL//4wAA/7wAgP+ZAP//mQD//5kA//+zAID/yAAA/5kA//+ZAP//mQD//5kA//+yAAD/owCA/5kA//+ZAP//mQD//5oAgP+YAAD/lwC//5kA//+ZAP//mQD//4EAAP99AAD/eAAA//8AAP/9AAD/+QAA/5kA//+ZAP//mQD//60Av//jAAD/vACA/5kA//+ZAP//mQD//7IAgP/IAAD/mQD//5kA//+ZAP//mQD//7IAAP+jAID/mQD//5kA//+ZAP//mgCA/5cAAP+XAL//mQD//5kA//+ZAP//gQAA/30AAP95AAD//wAA//0AAP/5AAD/3gBA/9oAQP/XAED/2AAw/+MAAP+7AID/mQD//5kA//+ZAP//swCA/8gAAP+ZAP//mQD//5kA//+ZAP//sgAA/6MAgP+ZAP//mQD//5kA//+aAID/lwAA/5QAMP+SAED/jwBA/4sAQP+BAAD/fQAA/3kAAP//AAD//gAA//oAAP/dAED/2gBA/9cAQP/ZADD/4wAA/7wAgP+ZAP//mQD//5kA//+zAID/yAAA/5kA//+ZAP//mQD//5kA//+zAAD/owCA/5kA//+ZAP//mQD//5oAgP+YAAD/lAAw/5IAQP+OAED/iwBA/4EAAP98AAD/eQAA//8AAP/+AAD/+gAA/5kA//+ZAP//mQD//60Av//kAAD/vACA/5kA//+ZAP//mQD//7MAgP/JAAD/xAAA/78AAP+7AAD/twAA/7IAAP+jAID/mQD//5kA//+ZAP//mgCA/5cAAP+XAL//mQD//5kA//+ZAP//gQAA/3wAAP94AAD//wAA//4AAP/5AAD/mQD//5kA//+ZAP//rQC//+MAAP+8AID/mQD//5kA//+ZAP//swCA/8gAAP/EAAD/wAAA/7sAAP+2AAD/sgAA/6MAgP+ZAP//mQD//5kA//+aAID/lwAA/5cAv/+ZAP//mQD//5kA//+BAAD/fQAA/3gAAP//AAD//gAA//kAAP+ZAP//mQD//5kA//+jAN//4wAA/7wAgP+ZAP//mQD//5kA//+zAID/yAAA/8QAAP/AAAD/uwAA/7YAAP+yAAD/owCA/5kA//+ZAP//mQD//5oAgP+XAAD/mADf/5kA//+ZAP//mQD//4EAAP99AAD/eQAA//8AAP/9AAD/+QAA/5kA//+ZAP//mQD//5kA///eABD/yQBQ/5kA//+ZAP//mQD//7MAgP/IAAD/xAAA/78AAP+7AAD/twAA/7IAAP+jAID/mQD//5kA//+ZAP//mwBA/5cAEP+ZAP//mQD//5kA//+ZAP//gQAA/30AAP94AAD//wAA//4AAP/5AAD/qgDP/5kA//+ZAP//mQD//8cAYP/fAAD/pQDP/5kA//+ZAP//swCA/8kAAP/EAAD/vwAA/7sAAP+2AAD/swAA/6MAgP+ZAP//mQD//5sAv/+bAAD/mABg/5kA//+ZAP//mQD//5cA3/+BAAD/fQAA/3kAAP//AAD//gAA//kAAP/BAI//mQD//5kA//+ZAP//ogDf/9sAEP/WABD/pADP/5kA//+yAID/yAAA/8QAAP/AAAD/uwAA/7YAAP+yAAD/owCA/5kA//+bAM//oAAQ/5wAEP+ZAN//mQD//5kA//+ZAP//kgCf/4EAAP99AAD/eQAA//8AAP/+AAD/+gAA/+kAIP+ZAP//mQD//5kA//+ZAP//swCf/9YAEP/VAAD/wABQ/8AAQP/IAAD/xAAA/78AAP+7AAD/tgAA/7IAAP+pAED/pABQ/6QAAP+gABD/mgDP/5kA//+ZAP//mQD//5kA//+LAED/gQAA/30AAP94AAD//wAA//4AAP/5AAD/9QAA/7oAn/+ZAP//mQD//5kA//+ZAP//oQDf/78AYP/RAAD/zQAA/8kAAP/EAAD/wAAA/7sAAP+2AAD/sgAA/64AAP+oABD/oABg/5oA3/+ZAP//mQD//5kA//+ZAP//lQC//4UAAP+BAAD/fQAA/3kAAP//AAD//gAA//kAAP/1AAD/6wAQ/6MA3/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+gAN//pQC//6QAv/+jAL//ogC//6AAv/+gAL//nADf/5kA//+ZAP//mQD//5kA//+ZAP//mQD//5gA7/+LABD/hgAA/4IAAP99AAD/eAAA//8AAP/+AAD/+gAA//UAAP/xAAD/3AAw/54A7/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+YAM//kQAw/4oAAP+GAAD/gQAA/30AAP95AAD//wAA//4AAP/5AAD/9QAA//EAAP/sAAD/3QAg/6wAv/+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mACP/5MAEP+OAAD/igAA/4YAAP+BAAD/fAAA/3gAAP//AAD//QAA//kAAP/1AAD/8AAA/+wAAP/nAAD/4wAA/80AQP+xAJ//oQDf/5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+ZAP//mQD//5kA//+bAM//nQCP/5sAIP+XAAD/kwAA/44AAP+KAAD/hgAA/4IAAP98AAD/eAAA//8AAP/+AAD/+QAA//UAAP/wAAD/7AAA/+gAAP/kAAD/3wAA/9oAAP/VAAD/0gAA/80AAP/IAAD/xAAA/78AAP+7AAD/twAA/7IAAP+uAAD/qQAA/6UAAP+gAAD/nAAA/5cAAP+TAAD/jgAA/4oAAP+GAAD/gQAA/30AAP95AAD//wAA//4AAP/6AAD/9QAA//EAAP/sAAD/6AAA/+MAAP/eAAD/2wAA/9UAAP/RAAD/zQAA/8gAAP/EAAD/vwAA/7sAAP+2AAD/sgAA/64AAP+pAAD/pAAA/6AAAP+cAAD/mAAA/5MAAP+OAAD/igAA/4YAAP+BAAD/fQAA/3gAAP//AAD//gAA//kAAP/1AAD/8AAA/+wAAP/oAAD/4wAA/98AAP/aAAD/1QAA/9EAAP/MAAD/yAAA/8QAAP/AAAD/uwAA/7YAAP+zAAD/rgAA/6kAAP+lAAD/oAAA/5wAAP+XAAD/kwAA/44AAP+KAAD/hQAA/4EAAP99AAD/eAAA//8AAP/+AAD/+QAA//UAAP/xAAD/7AAA/+gAAP/jAAD/3wAA/9oAAP/WAAD/0QAA/8wAAP/JAAD/xAAA/78AAP+7AAD/tgAA/7MAAP+uAAD/qQAA/6UAAP+hAAD/mwAA/5cAAP+TAAD/jwAA/4oAAP+GAAD/gQAA/30AAP94AAD//wAA//4AAP/5AAD/9QAA//EAAP/sAAD/5wAA/+MAAP/fAAD/2gAA/9YAAP/RAAD/zQAA/8kAAP/DAAD/wAAA/7sAAP+2AAD/sgAA/64AAP+pAAD/pQAA/6AAAP+cAAD/lwAA/5MAAP+OAAD/igAA/4YAAP+CAAD/fQAA/3gAAP8=";
//$base64="123"
//$url = explode(",", $base64);
//echo  base64_decode($url[1]);
//$a = file_put_contents('./test.bmp', base64_decode($base64));

//print_r($a);


$base64_image_content =$base64;
//匹配出图片的格式


if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){

$type = $result[2];
//$new_file = "upload/".date('Ymd',time())."/";

$new_file = "upload/camera/";
/*
if(!file_exists($new_file))
{
//检查是否有该文件夹，如果没有就创建，并给予最高权限
mkdir($new_file, 0700);
}
*/
//$new_file = $new_file.time().".{$type}";
$new_file = $new_file."6.{$type}";
//echo $base64_image_content;
if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
echo '新文件保存成功：', $new_file;
}else{
echo '新文件保存失败';
}
}

?>