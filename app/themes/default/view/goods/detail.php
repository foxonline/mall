<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf-token" content="<?php echo $this->session->token(); ?>">
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>mall</title>
		<link rel="shortcut icon" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/favicon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->getThemesUrl(); ?>/images/favicons/apple-touch-icon-144x144.png" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/css/style.css" />
		<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $this->getThemesUrl(); ?>/js/app.js"></script>
		<style type="text/css">
			.series {
				border-style: solid;
				border-width: 2px;
				border-color: #CCCCCC;
				padding-top: 3px;
				padding-bottom: 3px;
				font-weight: bold;
				margin: 2px;
				cursor:pointer;
			}
			.series a {
				color: #000;
				
			}
		</style>
		<!--[if lt IE 9]>
			<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="preloader"></div>
		<!--header-->
		<?php @include_once $this->getThemesPath().'/view/common/header.php'; ?>
		<!--end header-->
		<!-- .header-section -->
		<section class="header-section height-small middle-wrapper has-bg-layer layer-black bg-img-shop">
			<div class="middle-content">
				<div class="container">
					<h1 class="title">Our shop</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Shop</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
		<!-- .section.bg-secondary -->
		<section class="section bg-secondary">
			<div class="container" id="goods">
			
				<!-- .product-section -->
				<div class="product-section" itemscope>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<figure class="product-carousel-image">
										<a :href="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + goods_img" data-lightbox="product">
											<img style="width:400px;height:400px;" itemprop="image" data-gallery-id="product-gallery" :src="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + goods_img" :data-zoom-image="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + goods_img" alt="" />
										</a>
									</figure>
									
									<div id="product-gallery" class="product-carousel-nav bottom-space">
										<a v-for="key in images" class="active" href="#" :data-image="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + key" :data-zoom-image="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + key">
											<img style="width:70px;height:70px;" :src="'<?php echo SellerConfig::UPLOAD_GOODS; ?>' + store_id + '/' + key" alt="" />
										</a>
									</div>
								</div>
								
								<div class="col-lg-8 col-md-8 col-sm-8">
									<!-- <h3 class="category-title text-uppercase secondary-text">Elegant watches</h3> -->
									
									<!-- <h1 class="product-title" itemprop="name"> <strong><?php echo $goods['goods_name']; ?></strong></h1> -->
									
									<!-- .content -->
									<div class="content">
									
										<div class="row small-gap">
											<div class="col-sm-12">
												<!-- .product-panel -->
												<div class="panel" id="sku" style="height: 500px;padding:20px 20px 10px 30px;">
													<h2 class="product-title" itemprop="name"> <strong><?php echo $goods['goods_name']; ?></strong></h2>
													<meta itemprop="priceCurrency" content="USD" />
													<div class="price"><h2><strong><span class="currency">$</span><span itemprop="price">{{money}}</span></strong></h2></div>
												
													<p class="btn-list">
														<a href="#" class="btn btn-sm btn-icon-left btn-radius btn-tertiary-to-secondary"><i class="fa fa-heart-o"></i> 收藏</a>
														<span class="pull-right">库存: {{choosed.stock}}</span>
													</p>
													<div id="add-to-cart">
														<!-- <div class="form-group">
															<div v-for="(item,index) in attr_list">
																<label class="secondary-text" for="item-color">{{item.attrs_key_name}}</label>
																<div class="select-sm select-radius">
																	<select class="form-control" v-model="attr[index]">
																		<option v-for="key in item.attr_value" v-bind:value="key.attrs_value_id">{{key.attrs_value}}</option>
																	</select>
																</div>
															</div>

														</div> -->
														<div class="form-group" style="margin-bottom: 0px" v-for="(item,index) in attr_list">
															<div class=" input-one form-list" style="display:inline-flex;">
																<label class="required" style="margin-top:8px">
																	{{item.attrs_key_name}}
																</label>
																<ul class="list-inline" style="margin-left:15px;" :value = "item.attrs_key_id">
																	<li v-for="key in item.attr_value" :value="key.attrs_value_id" class="series" @click="select" @mouseleave="conceal" @mouseenter="display">
																		<!-- <a @click="select_a" :value="key.attrs_value_id" id="">{{key.attrs_value}}</a> -->
																		{{key.attrs_value}}
																	</li>
																</ul> 
															</div>
														</div>
											
														<div class="form-group row" style="margin-bottom:30px;">
															<div class="col-lg-3">
																<div class="input-group input-group-radius count-input">
																	<input type="text" class="form-control input-sm" v-model="count" value="1" />
																	<div class="input-group-btn">
																		<button class="btn btn-sm btn-input" @click.prevent="countCut" data-value="minus"><i class="fa fa-minus"></i></button>
																		<button class="btn btn-sm btn-input" @click.prevent="countAdd" data-value="plus"><i class="fa fa-plus"></i></button>
																	</div>
																</div>
															</div>	
															<div class="col-lg-1"></div>
															<div class="col-lg-5">	
																<button data-remodal-target="add-to-cart" id="add_to_cart" class="btn btn-radius btn-simple-to-border btn-primary">添加购物车</button>
															</div>
														</div>
													</div>
												</div>
												<!-- /.product-panel -->
											</div>
										</div>
									</div>
									<!-- /.content -->
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				<!-- /.product-section -->
				
				<div class="row" data-animate style="visibility:visible">
					
					<div class="col-md-3 col-sm-4">
						<article class="sb-block">
							<h3 class="sb-title"><strong>XXX</strong>的店铺</h3>
							<div class="sb-content">
								店铺介绍/信用等等
							</div>
						</article>
						<!-- .sb-block -->
						<article class="sb-block">
							<h3 class="sb-title">关于 <strong>商品</strong></h3>
							<div class="sb-content">
								<ul class="nav-list text-uppercase" role="tablist">
									<li role="presentation" class="active"><a href="#product-desc" aria-controls="product-desc" role="tab" data-toggle="tab">商品描述</a></li>
									<li role="presentation"><a href="#product-info" aria-controls="product-info" role="tab" data-toggle="tab">商品详情</a></li>
									<li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">商品评论</a></li>
								</ul>
							</div>
						</article>
						<!-- /.sb-block -->
					</div>
					
					<!-- .tab-content -->
					<div class="col-md-9 col-sm-8">
						<div class="tab-content content-section">
							<!-- #product-desc -->
							<div role="tabpanel" class="tab-pane fade in active" id="product-desc">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>详细描述</strong></h4>
								</div>
								<br>
								<p><?php echo $goods['goods_desc']; ?></p>

								
							</div>
							<!-- /#product-desc -->

							<!-- #product-info -->
							<div role="tabpanel" class="tab-pane fade" id="product-info">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>详细参数</strong></h4>
								</div>
								<br>
								<div class="row small-gap">
									<div class="col-sm-2"></div>
									<div class="col-sm-10">
										<ul class="list-icon text-uppercase">
										<?php foreach ($tmp as $key => $value):?>
											<li class="clearfix">
												<div class="row">
													<div class="col-sm-3">
														<strong class="pull-right"><?php echo $value['tmp_key']; ?></strong>
													</div>
													<div class="col-sm-8">
														<span class="pull-left"><?php echo $value['value']; ?></span>
													</div>
												</div>
											</li>
										<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
							<!-- /#product-info -->

							<!-- #product-review -->
							<div role="tabpanel" class="tab-pane fade" id="product-review">
								<div class="row small-gap">
									<h4 class="maintitle">商品 <strong>买家评价</strong></h4>
								</div>
								<br>
								<p>买家评价.</p>
							</div>
							<!-- /#product-review -->
						</div>
					</div>
					<!-- .tab-content -->
					
				</div>
				<!-- /.row -->
			</div>
		</section>
		<!-- /.section.bg-secondary -->
		
		<!-- .section -->
		<section class="section">
			<div class="container">
				<div class="section-header text-center bottom-space-2">
					<h3 class="subtitle">Latest Product View</h3>
					<h2 class="maintitle">Related <strong>products</strong></h2>
					
					<div class="divider type-2"></div>
				</div>
				
				<!-- .row -->
				<div class="row">
					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-1.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-2.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-3.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>

					<div class="col-md-3 col-sm-4" data-animate>
						<!-- .item-box -->
						<div class="item-box">
							<a href="#" class="figure">
								<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-1-4.jpg" alt="" />
							</a>

							<div class="content">
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>

								<h5 class="title"><a href="shop-detail.html">Casual <strong>women dress</strong></a></h5>

								<div class="price">Price: $99.15</div>
							</div>
						</div>
						<!-- .item-box -->
					</div>
				</div>
				
			</div>
		</section>
		<!-- /.section -->
		
		<!-- .footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
		<!-- /.footer -->
		
		<!-- JS library -->
		<!-- HTML/CSS/JS framework -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/bootstrap.min.js"></script>
		<!-- Viewport checker -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.viewportchecker.min.js"></script>
		<!-- Image zoom -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
		<!-- Lightbox -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/lightbox.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/slick.min.js"></script>
		
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vue.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
		<script>
			var data = <?php echo $sku; ?>;
			// tmp = 
		//[{attrs_key_id:1,attrs_key_name:"颜色",attr_value:[{attrs_value_id:1,attrs_value:"银色"},{attrs_value_id:2,attrs_value:"黑色"}]},
		//{attrs_key_id:2,attrs_key_name:"内存",attr_value:[{attrs_value_id:5,attrs_value:"32G"},{attrs_value_id:6,attrs_value:"64G"}]}]
			var tmp = [];
			var img_arr_tmp = [];
			var img_arr = [];
			if(data){
				for(var x in data){
					img_arr_tmp.push(data[x].goods_img);
					var qq = {};
					if(JSON.stringify(tmp).indexOf(JSON.stringify(data[x].attrs_key_name))==-1){
						qq.attrs_key_id = data[x].attrs_key_id;
						qq.attrs_key_name = data[x].attrs_key_name;
						qq.attr_value = [];
						var aa = {};
						aa.attrs_value_id = data[x].attrs_value_id;
						aa.attrs_value = data[x].attrs_value;
						qq.attr_value.push(aa);
						tmp.push(qq);
					}else{
						for(var y in tmp){
							var ww = {};
							if(tmp[y].attrs_key_name == data[x].attrs_key_name){
								if(JSON.stringify(tmp[y].attr_value).indexOf(JSON.stringify(data[x].attrs_value))==-1){
									ww.attrs_value_id = data[x].attrs_value_id;
									ww.attrs_value = data[x].attrs_value;
									tmp[y].attr_value.push(ww);
								}
							}
						}
					}
				}
			}
			img_arr = unique(img_arr_tmp);
			console.log(JSON.stringify(tmp));
			// console.log(img_arr);
			var vm = new Vue({
				el: '#goods',
				data: {
					list: data,
					attr_list: tmp,
					attr: {},
					count: '1',
					choosed: {}, //{"store_id":"1","goods_id":"48","stock":"120","sku_id":"56"}
					price: '',
					store_id: '1',
					images: img_arr,
					goods_img: "<?php echo $goods['goods_img']; ?>",
				},
				created: function(){
					// $.ajax({
					// 	url: "<?php echo $this->config->app_url_root.'/Index/ajax_data'; ?>",
					// 	type: "POST",
					// 	dataType:"json",
					// 	cache: false,
					// 	contentType: false,
					// 	processData: false,
					// 	success:function(e){
					// 		// e = JSON.parse(e);
					// 		// console.log(e);
					// 	}
					// });
					// this.getChoosed();
				},
				// updated: function(){
				// 	this.getChoosed();
				// 	var ss = '<?php echo SellerConfig::UPLOAD_GOODS; ?>'+ this.store_id + '/' + this.goods_img;
				// 	var asd = $('#product-gallery').find('img[src="'+ss+'"]');
				// 	asd.click();
				// },
				methods: {
					//数量减少按钮点击操作
					countCut(){
						if(parseInt(this.count)>1){
							this.count = parseInt(this.count) - 1;
						}
					},
					//数量添加按钮点击操作
					countAdd(){
						if(parseInt(this.choosed.stock)>parseInt(this.count)){
							this.count = parseInt(this.count) + 1;
						}
					},
					//鼠标经过
					display(d){	
						var el_d = d.target;
						$(el_d).css('border-width','2px').css('border-color','#ff7e00');
						$(el_d).css('color','#ff7e00');
					},
					//鼠标移开
					conceal(c){
						var el_c = c.target;
						if($(el_c).attr('checked')!='checked'){
							$(el_c).css('border-width','2px').css('border-color','#CCCCCC');
							$(el_c).css('color','#000');
						}else{
							$(el_c).css('border-width','2px').css('border-color','#ff7e00').attr('checked','');
							$(el_c).css('color','#ff7e00');
						}
					},
					//鼠标点击li
					select(s){
						var el_s = s.target;
						var v = $(el_s).val();
						var v_p = $(el_s).parent('ul').attr('value');
						$(el_s).parent().children('li').removeAttr('checked').css('border-width','2px').css('border-color','#CCCCCC');
						$(el_s).parent().children('li').css('color','#000');
						$(el_s).css('border-width','2px').css('border-color','#ff7e00').attr('checked','checked');
						$(el_s).children().css('color','#ff7e00');
						var attr_arr_tmp = []; //所有商品规格的排列组合未去重版 
						var checked_attr_arr = []; //选中商品规格值的数组   array(2) [19,24]
						var attr_arr = [];		//所有商品规格的排列组合去重版 array(7) ["19,24", "21,24", "21,25", "22,24", "22,25", "23,24", "23,25"]
						$('#add-to-cart li[checked=checked]').each(function(i,d){
							checked_attr_arr.push($(d).val());
						});
						
						for(var i in this.list){
							var avi = this.list[i]['attr_value_id'].split(',');
							attr_arr_tmp.push(avi.sort().toString());
						}
						attr_arr = unique(attr_arr_tmp);
						console.log(attr_arr);
						for(var i in this.list){
							var avi = this.list[i]['attr_value_id'].split(',');
							if(attr_arr.sort().toString().indexOf(checked_attr_arr.sort().toString())==-1){
								console.log("没有该属性");
								$('#add_to_cart').text("不存在的规格组合").css('cursor','not-allowed');
								return false;
							}else{
								console.log("存在该属性");
								$('#add_to_cart').text("添加购物车").css('cursor','pointer');
								if(checked_attr_arr.sort().toString()==avi.sort().toString()){
									this.store_id = this.list[i].store_id;
									this.choosed.goods_id = this.list[i].goods_id;
									this.price = this.list[i].price;
									this.choosed.stock = this.list[i].stock;
									this.goods_img = this.list[i].goods_img;
									this.choosed.sku_id = this.list[i].sku_id;
								}
							}
						}
					},
				},
				watch: {
					count: function (val, oldVal) {
      					if(parseInt(this.count)>parseInt(this.choosed.stock)){
							this.count = this.choosed.stock;
						}else{
							this.count = val;
						}
    				},
				},
				computed: {
					money: function(){
						return this.price*this.count;
					}
				}
			});

			//数组去重
			function unique(arr){
				var hash=[];
				for (var i = 0; i < arr.length; i++) {
					if(hash.indexOf(arr[i])==-1){
					hash.push(arr[i]);
					}
				}
				return hash;
			}
			
			// Gallery with zoom
			var galleryImage = $('[data-gallery-id]');
			galleryImage.each(function() {
				var $this = $(this),
				galleryId = $this.data('gallery-id');
				$this.elevateZoom({
					zoomType: 'lens',
					easing: 'zoom',
					cursor: 'pointer',
					responsive: true,
					gallery: galleryId,
					galleryActiveClass: 'active',
				});
			});
			galleryImage.closest('a').on('click', function() {
				var $this = $(this),
				galleryId = $this.find('img').data('gallery-id'),
				currentImg	= $('#' + galleryId).find('.active').data('zoom-image');
				$this.attr('href', currentImg);
			});
			// Product thumbnails
			$('.product-carousel-nav').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				responsive: [{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
					}
				}]
			});
		</script>
	</body>
</html>