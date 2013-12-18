<?php 
$arr=array(
   "name"=>"zhang",
   "age",
   array(
      "sex"=>"nan",
      "age"=>"30"
   	),
   array(
      "name"=>"lisi",
      array(
         "school"=>"HOUdun",
         "age"=>8
      	)
   	)
);
//控制键值的大小写
function change_value($arr,$t=0){
   $_fn=$t?"strtolower":"strtoupper";
   foreach ($arr as $k => $v) {
      if(is_array($v)){
      	$arr[$k]=change_value($v,$t);
      }else{
      	$arr[$k]=$_fn($v);
      }
  }
  return $arr;
}
//0是表示键值全部小写  1表示键值全部大写
echo "<pre>";
$a=change_value($arr,0);
print_r($a);

echo "<hr>";

//控制键名的大小写
function change_key($arr,$p=0){
   $_fun=$p?"strtolower":"strtoupper";
   foreach ($arr as $k => $v) {
   	 if(is_array($v)){
   	 	$a=$_fun($k);
   	 	$new[$a]=change_key($v,$p);
   	 }else{
   	 	$a=$_fun($k);
   	 	$new[$a]=$v;
   	 }
   }
   return $new;
}
echo "<pre>";
$b=change_key($arr,0);
print_r($b);

?>