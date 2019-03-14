<?php 
    header('Content-Type:text/html;charset=utf-8');
    /*根据地址栏传参 tag 分别渲染三个不同的页面*/
    /*1. 获取数据库数据  模拟数据*/
    require 'data/db.php';
    /*2. 获取地址栏传参 tag */
    $tag = 'thinkPad';
    if(array_key_exists('tag',$_GET)){
        $tag = $_GET['tag'];
    }
    /*3. 根据tag去获取对应的数据*/
    $returnData = getData($tag);
    /*4. 根据数据去渲染页面*/
    //var_dump($returnData);
    include 'index.html';
?>

