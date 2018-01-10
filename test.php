<?php


$hello = "Hello ";

echo $hello . $info->getWorld();

for ($x=0; $x<=10; $x++) { // 循环
  echo "数字是：$x <br>";
}

function writeMsg() {
  echo "Hello world!<br>";
}

writeMsg(); // 调用函数

$cars=array("生活","就算","给了我"); // 数组
echo "我热爱" . $cars[0] . ", " . $cars[1] . "生活" . $cars[2] . "无尽的折磨。";