<html>

<body>
    <table border="1">
<!--        --><?php
//            for ($i = 0; $i <=100; $i++){
//                echo "<tr>" . "</tr>";
//            }
//        ?><!-- -->

        <?php for ($i = 1; $i <= 9; $i++):?>
            <tr>
                <?php for ($j = 1; $j<=$i; $j++):?>
                    <td>
                        <?php echo $i . "*" . $j . "=" . $i*$j ?>
                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<h2>
    <?php
//        echo "hello world";
//        定义变量
////    $a;
//    $b=1;
////    访问变量
//    echo '<hr/>',$b;
////    删除变量
//    unset($a);
////    预定义变量
//$_GET:获取所有表单一GET方式提交数据
//$_POST：POST提交的数据都会保存在此
//$_Request：GET和POST提交的都会保存
//$GLOBALS：PHP中所有的全局变量
//$_Server：服务器信息
//$_Session：seesion会话数据
//$_cookie：cookie会话数据
//$_Env：环境信息
//$_Files：用户上传的文件信息
//     可变变量
//    $a='b';
//    $b='bb';
//
//    echo $a;
//    echo '<hr/>',$$a;
//    引用传递
//    $a='b';
//    $b=&$a;
//
//    echo $b;
//
////    值传递
//    $c=10;
//    $d=$c;
//
//    echo $d
//    define('-_-','smile');
//    echo constant('-_-');

//    __dir__
//    __file__
//    __line__
//    __namespace__
//    __class__
//    __method__
//
//    $a='flew';
//    $b=null;
//
//    echo (int)$a;
//
//    var_dump(is_int($a));
//    echo '<br/>';
//
//
//    //
//    echo gettype($a);
//    echo '<br/>';
//
//    var_dump(gettype($a));
//    echo '<br/>';
//   echo settype($b,"int");
//    echo '<br/>';
//
//    var_dump(settype($b,"int"));
//    echo '<br/>';
//
//
//    $ss=1.23e10;
//    var_dump($ss);
//    var_dump($ss==$a);
//
//    var_dump(settype($ss,"int"));
//    var_dump(settype($ss,"string"));
//    echo '<br/>';
//
//
//    $c=2;
//    switch($c){
//        default:
//            echo "匹配失败";//若所有的条件都没有匹配成功则执行defult
//        case 1:
//            echo 1;
//            break;//跳出switch分支执行下面的语句
//        case 2:
//            echo 2;
//    }


//    $i=1;
//    while($i <=100){
//        if($i % 5 != 0){
//            $i++;
//            //重新循环
//            continue;//系统重新跳到循环开始处
//        }
//        echo  $i;
//}

//    打印99乘法表  table标签
//
    echo date("Y-m-d H:i:s");
    echo "<br />";
    echo microtime();
    echo "<br />";
    echo time();
    echo "<br />";


echo '<hr /><pre>';
    function test($a,$b){
//        获取指定参数
        var_dump(func_get_arg(1));
//        获取所有参数
        echo "<br />";
        var_dump(func_get_args());
//        获得所有参数数量
        echo "<br />";
        var_dump(func_num_args());
    }

//    test(1,2);
    function_exists('test' && test(1,2));

    function nums($aa,$bb){
        echo $aa+$bb;
        return 0;
    }

    $aa1=10;
    nums($aa1,20);
    ?>





</h2>


</body>

</html>
