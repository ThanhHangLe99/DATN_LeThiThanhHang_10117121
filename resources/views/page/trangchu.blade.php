@extends('master')
@section('title','Trang chủ')
@section('content')

            <style type="text/css" media="screen">
             .header-search input {
    background-color: #fff;
    border: 1px solid #e6e6e6;
    border-color: rgba(255,255,255,.09);
    border-radius: 99px;
    color: #000;
    font-size: .9em;
    margin: 0;
    box-sizing: border-box;
    width: 300px;
}
.header-search {
    position: relative;
    margin: 0 auto;
    width: 435px;
    max-width: 50%;
    display: none;
}


            </style>
<div class="main-featured">
                  <div class="wrap cf">
                     <div class="slider-split ts-row">
                        <div class="col-8">
                           <ul class="main-slider as-primary alt" data-animation="fade" data-autoplay="1" data-autoplay-interval="5000">
                              
                              <li>
                                    <img width="740" height="357" src="wp-content/uploads/2020/04/blog-2-1-740x357.jpg" class="attachment-motive-alt-slider size-motive-alt-slider wp-post-image" alt="BOHEMIAN PHÓNG KHOÁNG KHỞI ĐỘNG MÙA HÈ" title="" srcset="https://blog.ferosh.vn/wp-content/uploads/2020/04/blog-2-1-740x357.jpg 740w, https://blog.ferosh.vn/wp-content/uploads/2020/04/blog-2-1-352x169.jpg 352w, https://blog.ferosh.vn/wp-content/uploads/2020/04/blog-2-1-740x357@2x.jpg 1480w, https://blog.ferosh.vn/wp-content/uploads/2020/04/blog-2-1-352x169@2x.jpg 704w" sizes="(max-width: 740px) 100vw, 740px" />                                              
                                 
                              </li>
                             
                             
                           </ul>
                           <!-- .main-slider -->
                        </div>
                        <div class="col-4 blocks">
                           @foreach($noibat as $nb)
                           <div class="block">
                              <a href="{{asset('chitiettintuc/'.$nb->ID)}}">
                                 <img width="352" height="169" src="source/image/{{$nb->Anh}}" class="attachment-motive-slider-alt-block size-motive-slider-alt-block wp-post-image" alt="{{$nb->TieuDeTin}}" title="" sizes="(max-width: 352px) 100vw, 352px" />             
                                 <div class="meta">
                                    <h3 class="heading-text">{{$nb->TieuDeTin}}</h3>
                                 </div>
                              </a>
                           </div>
                           @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--  .wrap  -->
               </div>
               <div class="main wrap">
                  <div class="ts-row cf">
                     <div class="col-8 main-content cf">
                        <div id="post-25" class="page-content post-25 page type-page status-publish has-post-thumbnail">
                           <div class="ts-row block cf wpb_row">
                              <div class="col-8 wpb_column vc_column_container">
                                 <div class="block-wrap term-wrap-2">
                                    <h4 class="section-head cf cat-border-2">
                                       <span class="title"><a href="#">THỜI TRANG</a></span>
                                    </h4>
                                    <div class="posts-list listing-blog ">
                                      @foreach($tintuc as $tt)
                                      @if($tt->chuyenmuc->id==1)

                                       <article class="cf post-6683 post type-post status-publish format-standard has-post-thumbnail category-thoi-trang tag-phong-cach tag-thoi-trang tag-xu-huong tag-xuan-he-2021" itemscope itemtype="http://schema.org/Article">
                                         <div class="post-thumb">
                                 <a href="{{asset('chitiettintuc/'.$tt->ID)}}" itemprop="url" class="image-link"><img width="359" height="201" src="source/image/{{$tt->Anh}}" class="attachment-motive-highlight-block size-motive-highlight-block wp-post-image" alt="125" title="{{$tt->TieuDeTin}}" itemprop="image" sizes="(max-width: 359px) 100vw, 359px" />           
                                 <span class="image-overlay"></span>
                                 <span class="meta-overlay">
                                 <span class="meta">
                                 <span class="post-format "><i class="fa fa-file-text-o"></i></span>
                                 </span>
                                 </span>
                                 </a>
                              </div>
                                          <div class="content">
                                             <span class="listing-meta"><a href="loaitin/{{$tt->id}}" class="category main-color cat-color-2">{{$tt->chuyenmuc->TenChuyenMuc}}</a></span>            
                                             <h2 itemprop="name" class="post-title"><a href="{{asset('chitiettintuc/'.$tt->ID)}}" itemprop="url" class="post-link">{{$tt->TieuDeTin}}</a></h2>
                                             <div class="excerpt text-font">
                                                <p>{!!$tt->TomTat!!}</p>
                                             </div>
                                          </div>
                                       </article>
                                       @endif
                                       @endforeach
                                    </div>
                                 </div>
                                 <div class="block-wrap term-wrap-1">
                                    <h4 class="section-head cf cat-border-1">
                                       <span class="title">THƯƠNG HIỆU</span>
                                    </h4>
                                    <div class="ts-row posts-grid listing-grid grid-3 ">
                                       @foreach($tintuc as $t)
                                       @if($t->chuyenmuc->id==4)
                                       <div class="column one-third">
                                          <article class="post-6545 post type-post status-publish format-standard has-post-thumbnail category-thuong-hieu tag-cong-so tag-gillee tag-so-mi tag-thoi-trang tag-thuong-hieu" itemscope itemtype="http://schema.org/Article">
                                             <a href="{{asset('chitiettintuc/'.$t->ID)}}" class="image-link">
                                             <img width="359" height="201" src="source/image/{{$t->Anh}}" class="image wp-post-image" alt="1200x900_Email" title="{{$t->TieuDeTin}}" itemprop="image" srcset="https://blog.ferosh.vn/wp-content/uploads/2020/11/1200x900_Email-359x201.jpg 359w, https://blog.ferosh.vn/wp-content/uploads/2020/11/1200x900_Email-359x201@2x.jpg 718w" sizes="(max-width: 359px) 100vw, 359px" />               
                                             <span class="image-overlay"></span>
                                             <span class="meta-overlay">
                                             <span class="meta">
                                             <span class="post-format "><i class="fa fa-file-text-o"></i></span>
                                             </span>
                                             </span>
                                             </a>
                                             <div class="meta">
                                                <span class="listing-meta"><a href="loaitin/{{$t->id}}" class="category main-color cat-color-1">{{$t->chuyenmuc->TenChuyenMuc}}</a></span>                
                                                
                                             </div>
                                             <h2 itemprop="name"><a href="{{asset('chitiettintuc/'.$t->ID)}}" itemprop="url" class="post-link">{{$t->TieuDeTin}}</a></h2>
                                             <div class="excerpt text-font">
                                                {!!$t->TomTat!!}
                                             </div>
                                          </article>
                                       </div>
                                       @endif
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                              <div class="col-4 wpb_column vc_column_container">
                                 
                                 <section class="multimedia block-wrap term-wrap-233">
                                    
                                    <h4 class="section-head cf cat-border-233">
                                       <span class="title">Video</span>
                                    </h4>
                                    
                                    <ul class="owl-carousel carousel" data-stage-pad="15" data-margin="15" data-items="3">
                                      @foreach($video as $vd)
                                     
                                       <li>
                                          <a href="#" title="" class="image-link">
                                          <span class="image"><iframe width="110" height="80" src="{{$vd->LinkVideo}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>                  </span>
                                          <span class="image-overlay"></span>
                                          <span class="meta-overlay">
                                          <span class="meta">
                                          <span class="post-format "><i class="fa fa-file-text-o"></i></span>
                                          </span>
                                          </span>
                                          </a>
                                          <p class="title"><a href="#">{{$vd->TenVideo}}</a></p>
                                       </li>
                                       
                                      @endforeach
                                    </ul>
                                    <div class="carousel-nav-bar">
                                       <span class="carousel-nav">
                                       <a href="#" class="prev fa fa-chevron-left" title="Previous"></a>
                                       <a href="#" class="next fa fa-chevron-right" title="Next"></a>
                                       </span>
                                    </div>
                                 </section>
                            
                                
                                 <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span></div>
                                 <section class="news-bar">
                                    <h4 class="section-head cf cat-border-">
                                       <span class="title">BÀI VIẾT VỀ NHÂN VẬT</span>
                                    </h4>
                                    <ul class="posts-list">
                                       @foreach($tintuc as $tin)
                                       @if($tin->chuyenmuc->id==3)
                                       <li class="post">
                                          <a href="{{asset('chitiettintuc/'.$tin->ID)}}" class="image-link small">
                                          <img width="72" height="60" src="source/image/{{$tin->Anh}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="125" title="{{$tin->TieuDeTin}}"sizes="(max-width: 72px) 100vw, 72px" />            
                                          <span class="image-overlay"></span>
                                          <span class="meta-overlay">
                                          <span class="meta">
                                          <span class="post-format "><i class="fa fa-file-text-o"></i></span>
                                          </span>
                                          </span>
                                          </a>
                                          <div class="content">
                                             <span class="listing-meta"></span>              <a href="{{asset('chitiettintuc/'.$tin->ID)}}" class="post-link">{{$tin->TieuDeTin}}</a>
                                          </div>
                                          <div class="excerpt text-font">
                                             {!!$tin->TomTat!!}
                                          </div>
                                       </li>
                                       @endif
                                      @endforeach
                                    </ul>
                                 </section>
                              </div>
                           </div>
                          
                           </div>
                           <p></p>
                        </div>
                     </div>
                  </div>
                  <!-- .ts-row -->
               </div>
@endsection