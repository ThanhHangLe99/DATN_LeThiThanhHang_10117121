@extends('masterpage')
@section('title','Sửa chuyên mục');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa chuyên mục</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<fieldset>
							<input type="hidden" name="_token" >
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<!--  -->
									<div class="form-group" >
										<label>Tên chuyên mục</label>
										<input required type="text" name="txtTen" class="form-control" value="{{$chuyenmuc->TenChuyenMuc}}">
									</div>
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{asset('chuyenmuc')}}" class="btn btn-danger">Hủy bỏ</a>
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