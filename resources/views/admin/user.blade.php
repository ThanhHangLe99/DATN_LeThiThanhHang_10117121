@extends('masterpage')
@section('title','Quản lý người dùng')
@section('main')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
    </div>
    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="{{asset('home')}}"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
            <li>Quản lý người dùng</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title" style="font-size: 30px;font-weight: bold">Danh sách người dùng</h5>
            <h5></h5>
            <div class="heading-elements">
                
                <a href="{{asset('user/add')}}" class="btn btn-primary" ><i class="icon-pencil3"></i>Thêm người dùng</a>
                
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
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Quyền</th>
                    <th style="padding-left: 49px">Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>

            <tbody>
                 <?php $stt=0; ?>
        
        @foreach($user as $key => $u)
        <?php $stt++ ?>
                
                <tr id="tr1">
                    <td>{{$stt}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        @if($u->quyen==1)
                        {{"Admin"}}
                        @else
                        {{"Thường"}}
                        @endif
                    </td>
                    <td ><a href="{{asset('user/edit/'.$u->id)}}" style="padding-left: 42px" ><img src="source/image/sua.png" alt="" id="sua"></a></td>
                    <td><a href="{{asset('user/delete/'.$u->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><img src="source/image/icon.png" style="width:20px;height:20px" /></a></td>
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