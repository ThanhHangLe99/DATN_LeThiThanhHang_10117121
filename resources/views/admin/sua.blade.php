@extends('masterpage')
@section('title','Sửa tin tức');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa Thông Tin User</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" >
							<fieldset>
							<input type="hidden" name="_token" >
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<!--  -->
									
									<div class="form-group" >
										<label>Họ tên</label>
										<input required type="text" name="name" class="form-control" value="{{$user->name}}">
									</div>
									
									<div class="form-group" >
										<label>Email</label>
										<input required type="text" name="email" class="form-control" placeholder="Nhập địa chỉ email" value="{{$user->email}}">
									</div>
									<div class="form-group" >
										<input type="checkbox" name="changePassword" value="" id="changePassword">
										<label>Đổi mật khẩu</label>
										<input required type="password" name="password" class="form-control password" placeholder="Nhập password" disabled="">
									</div>
									<div class="form-group" >
										<label>Nhập lại mật khẩu</label>
										<input required type="password" name="passwordAgain" class="form-control password" placeholder="Nhập lại password" disabled="">
									</div>
									<div class="form-group">
										<label>Quyền người dùng</label>
										<lable class="radio-inline">
											<input name="quyen" value="0" type="radio"
											 @if($user->quyen==0)
											 {{"checked"}}
											 @endif>Thường
											 
										</lable>
										<lable class="radio-inline">
											<input name="quyen" value="1" type="radio" 
											  @if($user->quyen==1)
											  {{"checked"}}
											  @endif> Admin
										

										</lable>
									</div>
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{asset('user')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							</fieldset>
						{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

  <script>
  	$(document).ready(function(){
  		$("#changePassword").change(function(){
  			if($(this).is(":checked"))
  			{
  				$(".password").removeAttr('disabled');
  			}
  			else
  			{
  				$(".password").attr('disabled','');
  			}
  		});

  	});
  </script>
@stop