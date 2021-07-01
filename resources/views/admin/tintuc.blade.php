@extends('masterpage')
@section('title','Quản lý tin tức')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý tin tức</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold">Danh sách tin tức</h5>
            <h5></h5>
            <div class="heading-elements">
                <!-- <button class="btn btn-success dropdown-toggle" data-toggle="modal" data-target="#myModal" data-hover="dropdown" class="add-row"><i class="icon-pencil3"></i>Thêm mới<span class="caret"></span></button> -->
                <a href="{{asset('tintuc/add')}}" class="btn btn-primary" ><i class="icon-pencil3"></i>Thêm tin tức</a>
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
                    <th>Chuyên mục</th>
                   <th>Tiêu đề tin</th>
                    <th>Ảnh</th>
                    <th>Tóm tắt</th>
                    <!-- <th>Nội dung</th> -->
                    <th style="padding-left: 49px">Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($tintuc as $key => $tt)
        <?php $stt++ ?>
                
                <tr id="tr1">
                    <td>{{$stt}}</td>
                    <td>{{$tt->chuyenmuc->TenChuyenMuc}}</td>
                    <td>{{$tt->TieuDeTin}}</td>
                    <td><img src="source/image/{{$tt->Anh}}" alt="Ảnh SP" style="width: 80px;height: 80px"></td>
                    <td>{{$tt->TomTat}}</td>
                    <!-- <td>{{$tt->NoiDung}}</td> -->
                    <td ><a href="{{asset('tintuc/edit/'.$tt->ID)}}" style="padding-left: 42px" ><img src="source/image/sua.png" alt="" id="sua"></a></td>
                    <td><a href="{{asset('tintuc/delete/'.$tt->ID)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <!-- /basic datatable -->
    
    </div>
</div>
<!-- /main content -->

@stop