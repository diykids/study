<?php

echo "1+1="; //string字符串
echo 1+1; // 数字  整数（整型）integer  int
echo "<br>"; //换行
echo "1.1+1.1="; //string字符串
echo 1.1+1.1; //小数（浮点型）float

echo "<br>"; //换行

echo 1+2+3+4+5+6+7+8+9;

echo "<br>"; //换行

// 变量

$a = 999;
$b = 1;
$c = 2;

echo $a+$b+$c; //加法

echo "<br>"; //换行
// 加减乘除

$a = 100;
$b = 5;

echo $a-$b; //减法

echo "<br>"; //换行

echo $a * $b; //乘法

echo "<br>"; //换行

echo $a/$b;  //除法

$c = 10;

echo "<br>"; //换行

// a加b乘以c
echo $a + $b * $c; // 这是错的这代表b乘以c加上a

echo "<br>"; //换行

echo ($a + $b) * $c; // 括号优先级，和数学里面的概念是一样的

//----------课堂作业
/**
 * 新建一个1homework.php文件，编写一段代码，定义四个变量，四个数的公式如下(2*5)+4-1，输出结果
 */