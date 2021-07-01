@extends('master')
@section('title','THỜI TRANG Archives - Ferosh Blog | Thời trang thiết kế');
@section('content')
<div class="main wrap">
   <div class="ts-row cf">
      <div class="col-8 main-content cf">
         <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="{{asset('home')}}"><span itemprop="title">Home</span></a></span><span class="delim"><i class="fa fa-angle-right"></i></span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="../thoi-trang/index.html"><span itemprop="title">{{$chuyenmuc->TenChuyenMuc}}</span></a></span></div>
         <article id="post-6683" class="post-6683 post type-post status-publish format-standard has-post-thumbnail category-thoi-trang tag-phong-cach tag-thoi-trang tag-xu-huong tag-xuan-he-2021" itemscope="" itemtype="http://schema.org/Article">
            <header class="post-header cf">
               <div class="featured">
                  <a href="#" itemprop="image" class="image-link"><img width="100%" height="200px" src="{{$tintuc->Anh}}" class="attachment-motive-alt-slider size-motive-alt-slider wp-post-image" alt="125" title="XU HƯỚNG THỜI TRANG XUÂN – HÈ 2021: CUỘC “ĐỔ BỘ” CỦA NHỮNG KIỂU DÁNG BẤT QUY TẮC" srcset="https://blog.ferosh.vn/wp-content/uploads/2021/01/125-740x357.jpg 740w, https://blog.ferosh.vn/wp-content/uploads/2021/01/125-352x169.jpg 352w, https://blog.ferosh.vn/wp-content/uploads/2021/01/125-352x169@2x.jpg 704w" sizes="(max-width: 740px) 100vw, 740px" >					
                  </a>
               </div>
               <h1 class="post-title item fn" itemprop="name">
                  {{$tintuc->TieuDeTin}}		
               </h1>
            </header>
            <!-- .post-header -->
           <div class="post-meta">
      <span class="posted-by">{{$chuyenmuc->TenChuyenMuc}}</span>
       
   </div>
            <div class="post-container cf">
               <div class="post-content text-font description" itemprop="articleBody">
                  {!!$tintuc->NoiDung!!}
                  <p></p>
               </div>
               <!-- .post-content -->		
            </div>
            <div id="comments" class="comments-area">

	

	
	
		<div id="comments" class="comments-area">
   <div id="respond" class="comment-respond">
      @if(session('thongbao'))
      {{session('thongbao')}}
      @endif
      <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/giay-cong-nam/#respond" style="display:none;">Cancel reply</a></small></h3>
      <form action="{{asset('comment/'.$tintuc->ID)}}" method="post" id="commentform" class="comment-form" novalidate="">
         <input type="hidden" name="_token" value="{{csrf_token()}}">
         <textarea id="NoiDung" name="NoiDung" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea>
         <div class="row" style="margin-left: -11px; margin-top: 20px;">
            <div class="col-sm-4"><input id="author" name="Name" type="text" value="" size="30" required aria-required="true" placeholder="Name"></div>
            <div class="col-sm-4"><input id="email" name="Email" type="text" value="" size="30" aria-required="true" placeholder="Email"></div>
         </div>
         <button type="submit" class="btn btn-default" style="width: 150px;height: 30px; border: 1px solid #e6e6e6; margin-top: 20px; border-radius: 5px">Gửi</button>
      </form>
   </div>
   <!-- #respond -->
</div>
	
</div>
         </article>
         <section class="related-posts" style="margin-top: 69px;">
            <h3 class="section-head cf"><span class="title">BÀI LIÊN QUAN</span></h3>
            <ul class="ts-row">
               @foreach($lienquan as $lq)
               <li class="column posts-grid one-third">
                  <article>
                     <a href="#" title="{{$lq->TieuDeTin}}" class="image-link">
                     <img width="252" height="167" src="source/image/{{$lq->Anh}}" class="image wp-post-image" alt="1" title="{{$lq->TieuDeTin}}" sizes="(max-width: 252px) 100vw, 252px">						
                     <span class="image-overlay"></span>
                     <span class="meta-overlay">
                     <span class="meta">
                     <span class="post-format "><i class="fa fa-file-text-o"></i></span>
                     </span>
                     </span>
                     </a>
                     <h3><a href="../mau-cong-tri-cuoc-choi-cua-ban-nga-va-hy-vong/index.html" class="post-link">{{$lq->TieuDeTin}}</a></h3>
                  </article>
               </li>
               @endforeach
            </ul>
         </section>
        
      </div>
     
   </div>
   <!-- .ts-row -->
</div>
@endsection