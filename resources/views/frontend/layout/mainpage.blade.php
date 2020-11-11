@extends('frontend/layout/femain')
@section('maincon')
<!--slider-->
<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						<!-- {{$banner[0]->banner_path}} -->

						<div class="carousel-inner">
						@php
							$i=1;
						@endphp	
						@foreach($banner as $bn)
						  @if($i==1)
							<div class="item active">
							<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								
								<div class="col-sm-6">
									<img src="{{asset('admin/banner_img/'.$bn->banner_path) }}" class="girl img-responsive" alt="" />
									<img src="{{asset('frontend/image/pricing.png')}}"  class="pricing" alt="" />
								</div>
								@php 
								 $i++;
								@endphp
							@else	
								<div class="item ">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								
								<div class="col-sm-6">
									<img src="{{asset('admin/banner_img/'.$bn->banner_path) }}" class="girl img-responsive" alt="" />
									<img src="{{asset('frontend/image/pricing.png')}}"  class="pricing" alt="" />
								</div>
								@php 
								 $i++;
								@endphp
							@endif	
							</div>	
							@endforeach
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
    </section>
    <!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							<!-- @php
							$i=1;
							@endphp				 -->
							@foreach($category as $key => $value)
								<div class="panel-heading ">
									<h4 class="panel-title">
										<a class="products_id" data-parentid='1' data-productid= "{{$value['id']}}" data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$key}}">
											@if(!empty($value['child']))
											<span id="" class="badge pull-right"><i class="fa fa-plus"></i></span>
											@endif
											{{$value['name']}}
										</a>										
									</h4>
								</div>
								@if(!empty($value['child']))
								<div id="sportswear{{$key}}" class="panel-collapse collapse ">
									<div class="panel-body ">
										<ul>
										@foreach($value['child'] as $k => $v)
											<li><a class="fetchproductid products_id" data-parentid='0' data-productid= "{{$v['id']}}"  href="javascript:void(0)">{{$v['name']}}</a></li>
										@endforeach
										</ul>
									</div>
								</div>
								@endif
							@endforeach
							</div>				
	
						</div><!--/category-products-->
					
					<!--brands_products-->
						<!-- <div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div> -->
						<!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('frontend/image/shipping.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
							<!-- append the code of image of  -->
							<div class="productdetailsvalue">

							</div>						
					</div><!--features_items-->					
					
				</div>
			</div>
		</div>
	</section>
@endsection

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<script>
	$(document).ready(function(){
			// console.log('hidjhsa');
			var product_id = null;
			var parent_product_id = null;
			ajax(product_id,parent_product_id);
		

	})
	$(document).on('click','.products_id ',function(){  
        var product_id = $(this).attr("data-productid");
        var parent_product_id = $(this).attr("data-parentid");
				//  console.log(parent_product_id);
				ajax(product_id,parent_product_id);
		
		
	})
	function ajax(product_id,parent_product_id)
	{
		$.ajax({
			type:'POST',
			url:'{{url("/mainpage/get-product-details") }}',
			datatype:'json',
			data:{
				"_token" : "{{ csrf_token() }}",
				"id" : product_id,
				"parent_id": parent_product_id,
			},
			success:function(data){
				// display_product(data);		
		
		// $productdetils = data;
				// console.log($productdetils.product_details);
				var html ='';
				$.each(data.product_details,function(val,text){
				if(text.get_product_image.length>0)
				{	
				// console.log(text.get_product_image);
				// console.log(text);
				html +='<div class="col-sm-4 ">';
				html +='<div class="product-image-wrapper">';		
				html +='<div class="single-products">';				
				html +='<div class="productinfo text-center">';		
				html +=`<img src="{{asset('admin/product_image/${text.get_product_image[0].image_name}')}}" width="100" height="200" />`
				html +='<h2>$'+text.price+' </h2>';						
				html +='<p>'+text.name+'</p>';						
				html +='@if(Auth::check()) <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>@endif';						
				html +='</div>';					
				html +='<div class="product-overlay">';					
				html +='<div class="overlay-content">';						
				html +='<h2>$'+text.price+'</h2>';							
				html +='<p>'+text.name+'</p>';							
				html +='@if(Auth::check())<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>@endif';							
				html +='</div>';						
				html +='</div>';					
				html +='</div>';				
				html +='<div class="choose">';				
				html +='<ul class="nav nav-pills nav-justified">';					
				html +='@if(Auth::check())<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>@endif';						
				// html +='<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>';						
				html +='</ul>';					
				html +='</div>';				
				html +='</div>';
				html +='</div>';
				}
			});
				$('.productdetailsvalue').html(html)
			}
			
		});				
	}
</script>