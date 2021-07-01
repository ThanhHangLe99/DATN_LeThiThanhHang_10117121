@extends('masterpage')
@section('title','Quản lý comment')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý comment</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold;">Danh sách comment</h5>
        </div>

        <table class="table datatable-basic" id="bsp" style="font-size: 15px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người bình luận</th>
                    <th>Email</th>
                    <th>Nội dung</th>
                    
                    <th>Xoá</th>
                    
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($dsbl as $bl)
       
                <tr id="tr1">
                    <td>{{$bl->id}}</td>
                    
                    <td>{{$bl->Name}}</td>
                    <td>{{$bl->Email}}</td>
                    <td>{{$bl->NoiDung}}</td>
                    <td><a href="{{asset('comment/delete/'.$bl->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
                    
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <!-- /basic datatable -->
</div>
<!-- /main content -->

@stop