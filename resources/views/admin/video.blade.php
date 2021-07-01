@extends('masterpage')
@section('title','Quản lý video')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý video</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold;">Danh sách video</h5>
            <div class="heading-elements">
                <!-- <button class="btn btn-success dropdown-toggle" data-toggle="modal" data-target="#myModal" data-hover="dropdown" class="add-row"><i class="icon-pencil3"></i>Thêm mới<span class="caret"></span></button> -->
                <a href="{{asset('video/add')}}" class="btn btn-primary"><i class="icon-pencil3"></i>Thêm video</a>
                <!-- <a href="{{asset('sanpham/xuat')}}" class="btn btn-success">Export</a>
                <a href="{{asset('sanpham/import')}}" class="btn btn-success" data-toggle="modal" data-target="#myModal">Import</a> -->
                <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog" style="">
                    <div class="modal-content" style="margin-top: 265px">
                <form method="post" action="{{asset('sanpham/import')}}" style="background-color: white;text-align: center;width:300px;height: 100px">
                    {{csrf_field()}}
                    <div class="form-group">     
                        <input type="file" name="select_file" style="text-align: center;margin-top: 80px;margin-left: 102px" >
                                
                        <input type="submit" name="upload" class="btn btn-success" value="Upload" style="float: right;margin-top: -26px;right: -134px;" >        
                        
                    </div>
                </form>
            </div>
            </div>
        </div>

            </div>
        </div>

        <table class="table datatable-basic" id="bsp" style="font-size: 15px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên video</th>
                    <th>Mô tả video</th>
					<th>Nội dung video</th>
                    <th>Xoá</th>
                    
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($dsvd as $key => $vd)
        <?php $stt++ ?>
                
                <tr id="tr1">
                    <td>{{$stt}}</td>
                    <td>{{$vd->TenVideo}}</td>
                    <td>{{$vd->MoTaVideo}}</td>
                    <td><iframe width="300" height="200" src="{{$vd->LinkVideo}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe></td>
					<td><a href="{{asset('video/delete/'.$vd->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <!-- /basic datatable -->
</div>
<!-- /main content -->

@stop