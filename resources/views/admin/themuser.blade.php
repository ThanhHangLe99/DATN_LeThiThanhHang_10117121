@extends('masterpage')
@section('title','Thêm mới người dùng');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm người dùng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">

						<form method="post" enctype="multipart/form-data" action="{{asset('user/add')}}" >
							<fieldset>
							
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Tên người dùng</label>
										<input required type="text" name="name" class="form-control" placeholder="Nhập tên người dùng">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="text" name="email" class="form-control" placeholder="Nhập địa chỉ email">
									</div>
									<div class="form-group" >
										<label>Password</label>
										<input required type="password" name="vip" class="form-control" placeholder="Nhập password">
									</div>
									<div class="form-group" >
										<label>Nhập lại Password</label>
										<input required type="password" name="gold" class="form-control" placeholder="Nhập lại password">
									</div>
									<div class="form-group">
										<label>Quyền người dùng</label>
										<lable class="radio-inline">
											<input name="quyen" value="0" checked="" type="radio">Thường
										</lable>
										<lable class="radio-inline">
											<input name="quyen" value="1" checked="" type="radio">Admin
										</lable>
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
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
@stop