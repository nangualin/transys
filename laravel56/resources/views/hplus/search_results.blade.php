<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:47 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 搜索</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>
                                为您找到相关结果约100,000,000个： <span class="text-navy">“后台主题”</span>
                            </h2>
                        <small>搜索用时  (0.23秒)</small>

                        <div class="search-form">
                            <form action="http://www.zi-han.net/theme/hplus/index.html" method="get">
                                <div class="input-group">
                                    <input type="text" placeholder="后台主题" name="search" class="form-control input-lg">
                                    <div class="input-group-btn">
                                        <button class="btn btn-lg btn-primary" type="submit">
                                            搜索
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        @foreach( $aData as $aDatum)
                        <div class="hr-line-dashed"></div>
                        <div class="search-result">
                            <h3><a href="#">{{ date("Y-m-d H:i:s",$aDatum['iPublishTime'])  }}</a></h3>
                            <p>
                                {{ $aDatum['sNews'] }}
                            </p>
                        </div>
                        @endforeach
                        <div class="hr-line-dashed"></div>
                        <div class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-white">1</button>
                                <button class="btn btn-white  active">2</button>
                                <button class="btn btn-white">3</button>
                                <button class="btn btn-white">4</button>
                                <button class="btn btn-white">5</button>
                                <button class="btn btn-white">6</button>
                                <button class="btn btn-white">7</button>
                                <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/content.min.js?v=1.0.0"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:47 GMT -->
</html>
