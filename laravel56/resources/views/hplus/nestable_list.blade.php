<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/nestable_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:59 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 嵌套列表</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-4">
                <div id="nestable-menu">
                    <button type="button" data-action="expand-all" class="btn btn-white btn-sm">展开所有</button>
                    <button type="button" data-action="collapse-all" class="btn btn-white btn-sm">收起所有</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>基本嵌套列表</h5>
                    </div>
                    <div class="ibox-content">

                        <p class="m-b-lg">
                            <strong>Nestable</strong> 支持拖动排序和触摸屏。
                        </p>

                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">1 - 列表</div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">2 - 列表</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">3 - 列表</div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">4 - 列表</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">5 - 列表</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle">6 - 列表</div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle">7 - 列表</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="8">
                                    <div class="dd-handle">8 - 列表</div>
                                </li>
                                <li class="dd-item" data-id="9">
                                    <div class="dd-handle">9 - 列表</div>
                                </li>
                            </ol>
                        </div>
                        <div class="m-t-md">
                            <h5>数据：</h5>
                        </div>
                        <textarea id="nestable-output" class="form-control"></textarea>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>自定义主题</h5>
                    </div>
                    <div class="ibox-content">

                        <p class="m-b-lg">
                            每个列表可以自定义标准的CSS样式。每个单元响应所以你可以给它添加其他元素来改善功能列表。
                        </p>

                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="label label-info"><i class="fa fa-users"></i></span> 群组
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 12:00 </span>
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> 设置
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 </span>
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> 筛选
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 </span>
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> 电脑
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">
                                        <span class="label label-warning"><i class="fa fa-users"></i></span> 用户
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 15:00 </span>
                                                <span class="label label-warning"><i class="fa fa-users"></i></span> 列用户表
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 16:00 </span>
                                                <span class="label label-warning"><i class="fa fa-bomb"></i></span> 炸弹
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="8">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 21:00 </span>
                                                <span class="label label-warning"><i class="fa fa-child"></i></span> 子元素
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="m-t-md">
                            <h5>数据：</h5>
                        </div>
                        <textarea id="nestable2-output" class="form-control"></textarea>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/content.min.js?v=1.0.0"></script>
    <script src="js/plugins/nestable/jquery.nestable.js"></script>
    <script>
        $(document).ready(function(){var updateOutput=function(e){var list=e.length?e:$(e.target),output=list.data("output");if(window.JSON){output.val(window.JSON.stringify(list.nestable("serialize")))}else{output.val("浏览器不支持")}};$("#nestable").nestable({group:1}).on("change",updateOutput);$("#nestable2").nestable({group:1}).on("change",updateOutput);updateOutput($("#nestable").data("output",$("#nestable-output")));updateOutput($("#nestable2").data("output",$("#nestable2-output")));$("#nestable-menu").on("click",function(e){var target=$(e.target),action=target.data("action");if(action==="expand-all"){$(".dd").nestable("expandAll")}if(action==="collapse-all"){$(".dd").nestable("collapseAll")}})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/nestable_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:59 GMT -->
</html>
