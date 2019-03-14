$(function () {
    /*渲染业务*/
    var render = function(data){
        /*筛选项*/
        $('nav a[data-tag="'+data.tag+'"]').addClass('now').siblings().removeClass('now');
        /*商品列表*/
        var html = '';
        data.list.forEach(function (item,i) {
            html += '<li>';
            html += '<p>名称：'+item.name+'</p>';
            html += '<p>价格：'+item.price+'</p>';
            html += '</li>';
        });
        $('ul').html(html);
    };
    $('nav a').on('click',function () {
        var _this = this;
        /*业务*/
        var tag = this.dataset.tag;
        /*异步*/
        $.ajax({
            type:'get',
            url:'api/query.php',
            data:{tag:tag},
            //dataType:'json',//强制转换后台数据为json
            success:function (data) {
                render(data);
                //追加历史
                history.pushState(null,null,$(_this).attr('href'));
            }
        });
        return false;
    });
    /*切换历史重新异步渲染页面*/
    window.onpopstate = function (ev) {
        var tag = 'thinkPad';
        var search = location.search;//获取的是地址栏传参
        if(search){
            tag = search.substring(1,search.length).split('=')[1];
        }
        $.ajax({
            type:'get',
            url:'api/query.php',
            data:{tag:tag},
            //dataType:'json',//强制转换后台数据为json
            success:function (data) {
                render(data);
            }
        });
    }
});