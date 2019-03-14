<?php 
    /*header('Content-Type:text/html;charset=utf-8');*/
    /*模拟数据库数据*/
    $data = array(
        'thinkPad'=>array(
            'tag'=>'thinkPad',
            'list'=>array(
                array('name'=>'ThinkPad T480S超薄i7处理器','price'=>'10010'),
                array('name'=>'ThinkPad T480S超薄i5处理器','price'=>'10001'),
                array('name'=>'ThinkPad T480S超薄i3处理器','price'=>'10001'),
                array('name'=>'ThinkPad T480S超薄i1处理器','price'=>'10000')
            )
        ),
        'apple'=>array(
            'tag'=>'apple',
            'list'=>array(
                array('name'=>'apple T480S超薄i7处理器','price'=>'10010'),
                array('name'=>'apple T480S超薄i5处理器','price'=>'10001'),
                array('name'=>'apple T480S超薄i3处理器','price'=>'10001')
            )
        ),
        'dell'=>array(
            'tag'=>'dell',
            'list'=>array(
                array('name'=>'dell T480S超薄i7处理器','price'=>'10010'),
                array('name'=>'dell T480S超薄i5处理器','price'=>'10001'),
                array('name'=>'dell T480S超薄i3处理器','price'=>'10001'),
                array('name'=>'dell T480S超薄i1处理器','price'=>'10000')
            )
        ),
    );
    /*获取数据的方法 根据tag*/
    function getData($tag='thinkPad'){
        global $data;
        return $data[$tag];
    }
?>