

    <?php
        //echo print_r($posts->content());
        //echo "<br> 738296147812963";
        //echo var_dump($posts);
        //foreach ($posts as $post){
            //$aaa = json_decode($post->data,true);
            //echo print_r($aaa);
        //}
        //$posts = json_decode($posts->content(),true);
        //$blogsinfo = $posts->getData(true);
        //$blogsinfo = json_decode($posts->content(),true);
        //echo print_r($blogsinfo["current_page"]);
        //echo var_dump($blogsinfo['posts']);
        //echo print_r($blogsinfo->current_page);
        //echo var_dump($posts->getData(true));
        //echo print_r($posts->getData(true));
        //echo "<br />";
//        echo print_r($posts->content());
        //echo print_r($blogsinfo['current_page']);
    ?>


    <style>
        *{
            margin: 0;
            padding:0;
            -webkit-tap-highlight-color:rgba(0,0,0,0);
            -webkit-text-size-adjust:none;
        }
        html{
            font-size:10px;
        }
        body{
            background-color: #f5f5f5;
            font-size: 1.2em;
        }
        .header{
            height: 44px;
            line-height: 44px;
            border-bottom: 1px solid #ccc;
            background-color: #eee;
        }
        .header h1{
            text-align: center;
            font-size: 2rem;
            font-weight: normal;
        }
        .content{
            background-color: #fff;
        }
        .content .item{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align:center;
            -webkit-box-align:center;
            box-align:center;
            -webkit-align-items:center;
            align-items:center;
            padding:3.125%;
            border-bottom: 1px solid #ddd;
            color: #333;
            text-decoration: none;
        }
        .content .item img{
            display: block;
            width: 40px;
            height: 40px;
            border:1px solid #ddd;
        }
        .content .item h3{
            display: block;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            width: 100%;
            max-height: 40px;
            overflow: hidden;
            line-height: 20px;
            margin: 0 10px;
            font-size: 1.2rem;
        }
        .content .item .date{
            display: block;
            height: 20px;
            line-height: 20px;
            color: #999;
        }
        .opacity{
            -webkit-animation: opacity 0.3s linear;
            animation: opacity 0.3s linear;
        }
        @-webkit-keyframes opacity {
            0% {
                opacity:0;
            }
            100% {
                opacity:1;
            }
        }
        @keyframes opacity {
            0% {
                opacity:0;
            }
            100% {
                opacity:1;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset("css/dropload.css") }}">
    </head>
    <body>
    <div class="header">
        <h1>就当我是新闻页吧</h1>
    </div>
    <div class="content">
        <div class="lists"></div>
    </div>
    <!-- jQuery1.7以上 或者 Zepto 二选一，不要同时都引用 -->
    <script src="{{ asset("js/vendor.js") }}"></script>
    <script src="{{ asset("js/dropload.min.js") }}"></script>
    <script type="text/javascript">
        //var obj = <?php //echo json_encode($posts);?>;
        str = JSON.stringify(<?php echo json_encode($posts);?>);
//        document.write(obj);
        document.write(str);
        //document.write(console.log(<?php //echo json_encode($posts);?>));

//            $.getJSON("http://homestead.app/blog",
//                    function (blog) {
//                        alert(blog);
//                    }
//            );
//        $('.content').dropload({
//            scrollArea : window,
//            loadDownFn : function(me){
//                $.ajax({
//                    type: 'GET',
//                    url: 'json/more.json',
//                    dataType: 'json',
//                    success: function(data){
//                        document.write(data);
//                        // 每次数据加载完，必须重置
//                        me.resetload();
//                    },
//                    error: function(xhr, type){
//                        alert('Ajax error!');
//                        // 即使加载出错，也得重置
//                        me.resetload();
//                    }
//                });
//            }
//        });
//        $(function(){
//            var counter = 0;
//            // 每页展示4个
//            var num = 4;
//            var pageStart = 0,pageEnd = 0;
//
//            // dropload
//            $('.content').dropload({
//                scrollArea : window,
//                loadDownFn : function(me){
//                    $.ajax({
//                        type: 'GET',
//                        url: 'json/more.json',
//                        dataType: 'json',
//                        success: function(data){
//                            var result = '';
//                            counter++;
//                            pageEnd = num * counter;
//                            pageStart = pageEnd - num;
//
//                            for(var i = pageStart; i < pageEnd; i++){
//                                result +=   '<a class="item opacity" href="'+data.lists[i].link+'">'
//                                        +'<img src="'+data.lists[i].pic+'" alt="">'
//                                        +'<h3>'+data.lists[i].title+'</h3>'
//                                        +'<span class="date">'+data.lists[i].date+'</span>'
//                                        +'</a>';
//                                if((i + 1) >= data.lists.length){
//                                    // 锁定
//                                    me.lock();
//                                    // 无数据
//                                    me.noData();
//                                    break;
//                                }
//                            }
//                            // 为了测试，延迟1秒加载
//                            setTimeout(function(){
//                                $('.lists').append(result);
//                                // 每次数据加载完，必须重置
//                                me.resetload();
//                            },1000);
//                        },
//                        error: function(xhr, type){
//                            // alert('Ajax error!');
//                            // 即使加载出错，也得重置
//                            me.resetload();
//                        }
//                    });
//                }
//            });
//        });
    </script>


{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12 topic-list">--}}
            {{--<form method="get">--}}
                {{--name: <input type="text" name="name" />--}}
                {{--<input type="submit" value="Submit" />--}}
            {{--</form>--}}
            {{--<h1>Hello, {{ $name }}</h1>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
