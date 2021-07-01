<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /globalbackend stylesheets -->
    <!-- Core JS files -->
    <!-- /theme JS files -->
    <!-- Core JS files -->
    <script type="text/javascript" src="backend/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
     <!-- Theme JS files -->
    <script type="text/javascript" src="backend/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="backend/assets/js/core/app.js"></script>
    <script type="text/javascript" src="backend/assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="backend/ckeditor/ckeditor.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>

<body>

    <!-- Main navbar -->
    <!-- Main navbar -->
    <div class="navbar navbar-default header-highlight" style="background-color: #3c8dbc;">
        <div class="navbar-header" style="background-color: #367fa9">
            <a class="navbar-brand" href="index.html" style="color: white;font-size: 20px">Quản lý tin tức</a>


        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


            </ul>


            
        </div>
    </div>
    <!-- /main navbar -->
    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container" style="min-height:479px">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    
                    <!-- /user menu -->
                    <!-- Main navigation -->
                    <div class="sidebar sidebar-main">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <!-- /user menu -->
                            <!-- Main navigation -->
                            <div class="sidebar-category sidebar-category-visible">
                                <div class="category-content no-padding">
                                    <ul class="navigation navigation-main navigation-accordion">

                                        <!-- Main -->
                                        <li class="navigation-header"><span>Chức năng chính</span> <i class="icon-menu" title="Main pages"></i></li>
                                        <li class="active"><a href="{{asset('index')}}"><i class="icon-home4"></i> <span>Trang chủ</span></a></li>
                                        <li >
                                            <a href="{{asset('chuyenmuc')}}"><i class="icon-stack2"></i> <span>Quản lý chuyên mục</span></a>
                                        </li>
                                        
                                        <li >
                                            <a href="{{asset('tintuc')}}"><i class="icon-stack2"></i> <span>Quản lý tin tức</span></a>
                                        </li>
										<li >
                                            <a href="{{asset('video')}}"><i class="icon-stack2"></i> <span>Quản lý video</span></a>
                                        </li>
                                        <li >
                                            <a href="{{asset('comment')}}"><i class="icon-stack2"></i> <span>Quản lý comment</span></a>
                                        </li>
                                        <li >
                                            <a href="{{asset('user')}}"><i class="icon-stack2"></i> <span>Quản lý người dùng</span></a>
                                        </li>
                                        <li><a href="{{asset('logout')}}"><i class="icon-list-unordered"></i> <span>Đăng xuất </span></a></li>

                                        <!-- /main -->

                                    </ul>
                                </div>
                            </div>
                            <!-- /main navigation -->

                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->
            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
               
                @yield('main')
            </div>
            <!-- /dashboard content -->
            <!-- Footer -->
            <!-- <div class="footer text-muted">
                &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div> -->
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
    
    <!-- /page content -->
    
    <!-- /page container -->
    <!-- <script src="backend/js/jquery-1.11.1.min.js"></script>
	<script src="backend/js/chart.min.js"></script>
	<script src="backend/js/chart-data.js"></script>
	<script src="backend/js/easypiechart.js"></script>
	<script src="backend/js/easypiechart-data.js"></script>
	<script src="backend/js/bootstrap-datepicker.js"></script> -->
	<script type="text/javascript" src="backend/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script type="text/javascript" src="backend/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="backend/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="backend/assets/js/core/app.js"></script>
    <script type="text/javascript" src="backend/assets/js/pages/datatables_basic.js"></script>
    <script src="backend/js/chart.min.js"></script>
	<script src="backend/js/chart-data.js"></script>
	<script src="backend/js/easypiechart.js"></script>
	<script src="backend/js/easypiechart-data.js"></script>
	<script src="backend/js/bootstrap-datepicker.js"></script>
    <script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>	
</body>
</html>
