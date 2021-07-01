@extends('masterpage')
@section('title','Thêm video');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm video</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">

						<form method="post" enctype="multipart/form-data" action="{{asset('video/add')}}">
							<fieldset>
							
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Tên video</label>
										<input required type="text" name="txtTen" class="form-control">
									</div>
									<div class="form-group" >
										<label>Mô tả video</label>
										<input required type="text" name="txtMoTa" class="form-control">
									</div>
									<div class="form-group" >
											
										<label class="form-label control-label ng-binding" style="font-weight: bold;">Nội dung </label>
                                            <div class="form-wrap">

                                             <input id="video" type="file" name="video" class="form-control hidden" onchange="changeImg(this)">
                                             <img id="avatar" class="thumbnail" style="margin-left: 75px;    margin-top: -33px;" width="150px" src="source/image/new_seo-10-512.png">									
										<!-- <input required id="image" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="source/image/new_seo-10-512.png"> -->
									</div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('tintuc')}}" class="btn btn-danger">Hủy bỏ</a>
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
	<script type="text/javascript">
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
        $(document).ready(function(){
            $('#avatar').click(function(){
                $('#video').click();
            });

        });
        
  </script>
  <script type="text/javascript" src="{{asset('../public/backend/ckfinder/ckfinder.js')}}"></script>

@stop