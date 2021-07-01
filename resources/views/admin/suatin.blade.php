@extends('masterpage')
@section('title','Sửa tin tức');
@section('main')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa Tin Tức</h1>
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
									<div class="form-group">
										<label>Chuyên mục</label>
										<select required="" name="cate" class="form-control">
											@foreach($listcate as $type)
											<option value="{{$type->id}}" @if($tintuc->Id_ChuyenMuc==$type->id) selected @endif>{{$type->TenChuyenMuc}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tiêu đề tin</label>
										<input required type="text" name="name" class="form-control" value="{{$tintuc->TieuDeTin}}">
									</div>
									<div class="form-group" >
											
										<label class="form-label control-label ng-binding" style="font-weight: bold;">Ảnh SP</label>
                                            <div class="form-wrap">

                                             <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                             <img id="avatar" class="thumbnail" style="margin-left: 75px;    margin-top: -33px;" width="150px" src="{{asset('source/image/'.$tintuc->Anh)}}">
									</div>
									<div class="form-group" >
										<label>Tóm tắt</label>
										<textarea class="ckeditor" required name="tomtat">{{$tintuc->TomTat}}</textarea>
										<script type="text/javascript">
											var editor=CKEDITOR.replace('description',{
												language:'vi',
												filebrowserImageBrowseUrl: 'backend/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl:'backend/ckfinder/ckfinder.html?=Type=Flash',
												filebrowserImageUploadUrl:'backend/ckfinder/core/connector/php/.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl:'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

											});
										</script>
									</div>
									<div class="form-group" >
										<label>Nội dung</label>
										<textarea class="ckeditor" required name="noidung">{{$tintuc->NoiDung}}</textarea>
										<script type="text/javascript">
											var editor=CKEDITOR.replace('description',{
												language:'vi',
												filebrowserImageBrowseUrl: 'backend/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl:'backend/ckfinder/ckfinder.html?=Type=Flash',
												filebrowserImageUploadUrl:'backend/ckfinder/core/connector/php/.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl:'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

											});
										</script>
									</div>
									

									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
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
                $('#img').click();
            });

        });
        
  </script>
		<script type="text/javascript" src="{{asset('../public/backend/ckfinder/ckfinder.js')}}"></script>
		@stop