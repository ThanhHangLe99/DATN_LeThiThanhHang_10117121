

@extends('masterpage')
@section('title','Chào mừng bạn đến với trang quản trị')
@section('main')
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
</script>

<div class="content">

    <!-- Main charts -->
    <!-- Quick stats boxes -->
    <div class="row">
        <div class="col-lg-4">

            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body">
                    <div class="heading-elements">
                        <span class="heading-text badge bg-teal-800"></span>
                    </div>

                    <h3 class="no-margin">{{DB::table('tintuc')->count()}}</h3>
                    Bản Tin
                    <!-- <div class="text-muted text-size-small">489 trung bình</div> -->
                </div>

                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->

        </div>

        <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-pink-400">
                <div class="panel-body">
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <h3 class="no-margin">{{DB::table('chuyenmuc')->count()}}</h3>
                    Chuyên mục
                    <!-- <div class="text-muted text-size-small">34.6% trung bình</div> -->
                </div>

                <div id="server-load"></div>
            </div>
            <!-- /current server load -->

        </div>

        <div class="col-lg-4">

            <!-- Today's revenue -->
            <div class="panel bg-blue-400">
                <div class="panel-body">
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>

                    <h3 class="no-margin">{{DB::table('users')->count()}} </h3>
                    Số tài khoản
                    <!-- <div class="text-muted text-size-small">$37,578 trung bình</div> -->
                </div>

                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

        </div>
        <!-- the calendar as a div element -->
<!-- <div class="calendar" style="float: right;">
  <em id="dayOfWeek"></em>
  <strong id="month"></strong>
  <span id="day"></span>
</div>
<style type="text/css">
    div.calendar
{
  font-size: 1em; /* change calendar size */
  display: block;
  position: relative;
  width: 7em;
  height: 7em;
  background-color: #fff;
  margin: 2em auto;
  border-radius: 0.6em;
  box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transform: rotate(0deg) skewY(0deg);
  -webkit-transform-origin: 50% 10%;
  transform-origin: 50% 10%;
}
 
div.calendar *
{
  display: block;
  width: 100%;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  text-align: center;
}
 
div.calendar strong
{
  position: absolute;
  top: 0;
  padding: 0.4em 0;
  color: #fff;
  background-color: #fd9f1b;
  border-bottom: 1px dashed #f37302;
  box-shadow: 0 2px 0 #fd9f1b;
}
 
div.calendar em
{
  position: absolute;
  bottom: 0.3em;
  color: #fd9f1b;
}
 
div.calendar span
{
  width: 100%;
  font-size: 2.8em;
  letter-spacing: -0.05em;
  padding-top: 0.8em;
  color: #2f2f2f;
}
 
div.calendar:hover, div.calendar:focus
{
  -webkit-animation: swing 0.6s ease-out;
  animation: swing 0.6s ease-out;
}
 
@-webkit-keyframes swing {
  0%   { -webkit-transform: rotate(0deg)  skewY(0deg); }
  20%  { -webkit-transform: rotate(12deg) skewY(4deg); }
  60%  { -webkit-transform: rotate(-9deg) skewY(-3deg); }
  80%  { -webkit-transform: rotate(6deg)  skewY(-2deg); }
  100% { -webkit-transform: rotate(0deg)  skewY(0deg); }
}
 
@keyframes swing {
  0%   { transform: rotate(0deg)  skewY(0deg); }
  20%  { transform: rotate(12deg) skewY(4deg); }
  60%  { transform: rotate(-9deg) skewY(-3deg); }
  80%  { transform: rotate(6deg)  skewY(-2deg); }
  100% { transform: rotate(0deg)  skewY(0deg); }
}
</style>

<script type="text/javascript"> function refrClock() {

var d=new Date();

var s=d.getSeconds();

var m=d.getMinutes();

var h=d.getHours();

var day=d.getDay();

var date=d.getDate();

var month=d.getMonth();

var year=d.getFullYear();

var days=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

var months=new Array("January","February","March","April","May","June","Junly","August","September","Octorber","November","December"); var am_pm;

if (s<10) {s="0" + s}

if (m<10) {m="0" + m}

if (h>12)

{h-=12;AM_PM = "PM"}

else {AM_PM="AM"}

if (h<10) {h="0" + h}
document.getElementById("dayOfWeek").innerHTML = days[day];
document.getElementById("day").innerHTML=date;
document.getElementById('month').innerHTML=months[month];
setdivout("refrClock()",1000); } 
refrClock();
 </script>

    </div> -->
    
    <!-- /quick stats boxes -->
    <!-- Support tickets -->
    <!-- Latest posts -->
   
    <!-- /latest posts -->
    

</div>
@stop