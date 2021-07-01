@extends('master')
@section('title','THỜI TRANG Archives - Ferosh Blog | Thời trang thiết kế');
@section('content')

<div class="main wrap">
                  <div class="ts-row cf">
                     <div class="col-8 main-content cf">
                        <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="{{asset('home')}}"><span itemprop="title">Home</span></a></span><span class="delim"><i class="fa fa-angle-right"></i></span><span class="current">{{$chuyenmuc->TenChuyenMuc}}</span></div>
                        <h2 class="archive-heading">
                           <span class="prefix">Browsing:</span>
                           <span class="main-color cat-color-2">{{$chuyenmuc->TenChuyenMuc}}</span>
                        </h2>
                        <div class="main-slider as-primary" data-animation="fade" data-autoplay="1" data-autoplay-interval="5000">
                           @foreach($tintuc as $t2)
                           <div>
                              <a href="#">
                                 <img width="740" height="357" src="source/image/{{$t2->Anh}}" class="attachment-motive-alt-slider size-motive-alt-slider wp-post-image" alt="{{$t2->TieuDeTin}}" title=""sizes="(max-width: 740px) 100vw, 740px" style="height: 400px" />             
                                 <div class="meta">
                                  
                                    <h3 class="heading-text">{{$t2->TieuDeTin}}</h3>
                                 </div>
                              </a>
                              <a href="../6683-2/index.html#respond"><span class="comment-count">0</span></a>
                           </div>
                           @endforeach
                           
                        </div>
                        <!-- .main-slider -->
                        <div class="posts-list listing-blog term-wrap-2">
                           @foreach($tintuc as $tt)
                          
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
                                 <span class="listing-meta"><a href="index.html" class="category main-color cat-color-2">{{$tt->TenChuyenMuc}}</a></span>           
                                 <h2 itemprop="name" class="post-title"><a href="{{asset('chitiettintuc/'.$tt->ID)}}" itemprop="url" class="post-link">{{$tt->TieuDeTin}}</a></h2>
                                 <div class="excerpt text-font">
                                    {!!$tt->TomTat!!}
                                 </div>
                              </div>
                           </article>
                           
                           @endforeach
                           
                           
                        </div>
                       
                     </div>
                    
                  </div>
                  <!-- .ts-row -->
               </div>
               <!-- .main -->
@endsection