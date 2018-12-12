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
        <link rel="stylesheet" href="<?php echo $this->getThemesUrl(); ?>/js/pagination/pagination.css" />
		<script src="<?php echo $this->getThemesUrl(); ?>/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $this->getThemesUrl(); ?>/js/app.js"></script>
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
					<h1 class="title">OUR SHOP</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">首页</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /.header-section -->
		
		<!-- .menu-section.fullscreen-menu -->
		<?php @include_once $this->getThemesPath().'/view/common/menu.php'; ?>
		<!-- /.menu-section.fullscreen-menu -->
		
        <!-- .result-view-options -->
		<div class="result-view-options">
			<div class="container">
				<form class="pull-left">
					<div class="form-group">
						<label for="sort-by">Sort <strong>by</strong></label>
						<select class="input-select">
							<option value="1">Product name</option>
							<option value="2">Product price</option>
						</select>
					</div>
					
					<div class="form-group hidden-xs">
						<label for="show-page">Show <strong>page</strong></label>
						<select class="input-select">
							<option value="12">12 Items</option>
							<option value="24">24 Items</option>
						</select>
					</div>
					
					<div class="form-group hidden-xs">
						<label for="filter-by-category">Filter by <strong>category</strong></label>
						<select class="input-select">
							<option value="1">Any</option>
							<option value="2">Woman</option>
							<option value="3">Man</option>
						</select>
					</div>
				</form>
				
				<div class="pull-right">
					<form class="buttons clearfix item-view-chooser">
						<button class="button" data-view="items-horizontal"><i class="fi flaticon-menu"></i></button>
						<button class="button active" data-view="items-vertical"><i class="fi flaticon-phone-keyboard-nine-black-buttons-squares"></i></button>
					</form>
				</div>
			</div>
		</div>
		<!-- /.result-view-options -->

		<!-- .section.bg-secondary -->
		<section class="section bg-secondary">
            <div class="container">
				<div class="text-center text-uppercase bottom-space-2 secondary-text">
					<p>Your search returned 125 results</p>
				</div>
				
				<div class="row">
					
					<!-- .sidebar -->
					<aside class="col-md-3 col-sm-4 sidebar">
						<!-- .sb-block -->
						<article class="sb-block">
							<h3 class="sb-title">Category <strong>product</strong></h3>
							<div class="sb-content">
								<ul class="nav-list has-arrow text-uppercase">
									<li class="active"><a href="#">Electronic <span class="count">15</span></a></li>
									<li><a href="#">Men fashion <span class="count">16</span></a></li>
									<li><a href="#">Women fashion <span class="count">23</span></a></li>
									<li><a href="#">Accessories <span class="count">19</span></a></li>
									<li><a href="#">Health &amp; Beauty <span class="count">22</span></a></li>
									<li><a href="#">Other <span class="count">10</span></a></li>
								</ul>
							</div>
						</article>
						<!-- /.sb-block -->
						
						<!-- .sb-block -->
						<form class="sb-block sb-filter">
							<h3 class="sb-title">Filter <strong>by price</strong></h3>
							<div class="sb-content">
								<div class="rangle-slider-value">
									<div class="range-slider" data-min="25" data-max="1500" data-before="$"></div>
								</div>
							</div>
							
							<button class="button" type="submit">Update <strong>search result</strong></button>
						</form>
						<!-- /.sb-block -->
						
						<!-- .sb-block -->
						<article class="hidden-xs sb-block">
							<h3 class="sb-title transparent">Hot <strong>sale</strong></h3>
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-1.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>dress</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-2.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>costume</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-3.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>jeans</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-4.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>watch</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-5.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>cloth</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
							<!-- .item-box.box-small.horizontal -->
							<div class="item-box box-small horizontal clearfix">
								<a href="shop-detail.html" class="figure">
									<img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-2-1.jpg" alt="" />
									<span class="text"><i class="fi flaticon-paper-bag"></i> + Add to cart</span>
								</a>

								<div class="content">
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>

									<h5 class="title"><a href="shop-detail.html">Wedding <strong>jacket</strong></a></h5>

									<div class="price">Price: $99.15</div>
								</div>
							</div>
							<!-- /.item-box.box-small.horizontal -->
							
						</article>
						<!-- /.sb-block -->
						
					</aside>
					<!-- /.sidebar -->
					
					<article class="col-md-9 col-sm-8">
					
						<div id="item-view-container">

							<!-- .container-fluid -->
							<div class="container-fluid">
								<!-- .filter-section.portfolio -->
								<div id="goods" class="row filter-section">
									
								</div>
								<center><div id="Pagination" class="pagination"></div></center>
								<!-- /.filter-section.portfolio -->
							</div>
							<!-- /.container-fluid -->
                        </div>
						
					</article>
				</div>
				<!-- /.row -->
			</div>
		</section>
		<!-- /.section.bg-secondary -->
		
		<!-- .footer -->
		<?php @include_once $this->getThemesPath().'/view/common/footer.php'; ?>
		<!-- /.footer -->
		
		<!-- JS library -->
		<!-- HTML/CSS/JS framework -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/bootstrap.min.js"></script>
        <!-- Viewport checker -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.viewportchecker.min.js"></script>
        <!-- Custom select -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/jquery.selectric.min.js"></script>
        <!-- Range slider -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/nouislider.min.js"></script>
        <!-- Number formatting -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/wNumb.js"></script>
		<!-- Images loaded -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/imagesloaded.pkgd.min.js"></script>
		<!-- pagination -->
        <script src="<?php echo $this->getThemesUrl(); ?>/js/pagination/jquery.pagination.js"></script>
		<!-- Masonry -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/masonry.pkgd.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/vendors/slick.min.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo $this->getThemesUrl(); ?>/js/script.js"></script>
        <script>
            //range-slider
            var rangeSlider = $('.range-slider');
			for ( var i = 0; i < rangeSlider.length; i++ ) {
				var slider = rangeSlider[i],
					min = parseInt(slider.getAttribute('data-min')),
					max = parseInt(slider.getAttribute('data-max'));
				if(slider.getAttribute('data-before')) {
					var before = slider.getAttribute('data-before');
				}
				if(slider.getAttribute('data-after')) {
					var after = slider.getAttribute('data-after');
				}
				noUiSlider.create(slider, {
					start: [ min, max ],
					step: 1,
					tooltips: true,
					connect: true,
					range: {
						'min': [ min ],
						'max': [ max ]
					},
					format: wNumb({
						decimals: 0,
						thousand: ' ',
						prefix: before,
						postfix: after
					})
				});
			};
			
            //pagination
            function goods_data(status,p){
                if(typeof status== 'undefined') status=0;//获取值
                if(typeof p== 'undefined') p=1; //获取当前页数
                $.post('/Index/test_ajax_data',{"status":status,"p":p},function(e){
                    $('#goods').empty();//清空所有数据
                    var e = JSON.parse(e);
                    if(e.data){
                        var str='';						
                        $.each(e.data,function(i,d){
                            str += '<div class="col-lg-up-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							str += '<article data-animate class="media-box dark">';
							str += '<div class="box-content">';
							str += '<div class="figure item-slider" data-slider-nav="item-slider-nav-1" data-slider-arrows>';
							str += '<a href="shop-detail.html"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-5-1.jpg" alt="" /></a>';
							str += '<a href="shop-detail.html"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-5-2.jpg" alt="" /></a>';
							str += '<a href="shop-detail.html"><img src="<?php echo $this->getThemesUrl(); ?>/images/pictures/items/item-5-3.jpg" alt="" /></a>';
							str += '</div>';
							str += '<div class="description">Go to details</div>';
							str += '</div>';
							str += '<div class="box-options clearfix">';
							str += '<div class="pull-left">';
							str += '<a class="option button" href="#" rel="tooltip" data-placement="top" title="Like"><span class="sr-only">Like</span> <i class="fa fa-heart-o"></i></a>';
							str += '</div>';
							str += '<div class="pull-right has-separator">';
							str += '<a class="option button bg-selected" data-remodal-target="add-to-cart" href="#">+ ADD <i class="fi flaticon-paper-bag"></i></a>';
							str += '</div>';
							str += '</div>';
							str += '<div class="box-info">';
							str += '<h4 class="name" title="Black Denim Dress"><a href="Index/good?id='+d.id+'">'+d.goods_name+'</a></h4>';
							str += '<div class="price"><ins>$'+d.id+'</ins> <del>$20.00</del></div>';
							str += '</div>';
							str += '</article>';
							str += '</div>';
                        });
                        $("#goods").html(str);   //把数据填到ID中
						// Item box  商品展示样式
						$('.item-slider').each(function() {
							var $this			= $(this),
								$itemSliderNav	= $this.data('slider-nav'),
								$showArrows		= (typeof $this.data('slider-arrows') !== 'undefined') ? true : false;
							$this.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
								var i = (currentSlide ? currentSlide : 0) + 1;
								$('#' + $itemSliderNav).attr('data-slide-count', (i + '/' + slick.slideCount + ' '));
							});
							$this.slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: $showArrows,
								dots: true,
								//autoplay: true,
								//autoplaySpeed: (15 + Math.floor(Math.random() * 26)) * 500,
								appendDots: $('#' + $itemSliderNav)
							});
						});
                        if(status!=1){
                            initPagination(e.entries);//总页数
                        }
                    }else{
                        // $("#user").text('暂无数据!');
                        if(status!=1){
                            initPagination('0');
                        }
                    }
                });		
		    }
            function search_goods_data(){
                goods_data();
            }		
            //固定Pagination 分页
            function pageselectCallback(page_index, jq){
                var p = page_index+1;			//当前页码数
                goods_data(1,p);
            }
            function initPagination(page) {
                var num_entries = page;
                var _pag_text='';
                if(num_entries!='0'){
                    _pag_text=true;
                }else{
                    _pag_text=false;
                }
                // 创建分页
                $("#Pagination").pagination(num_entries, {
                    num_edge_entries: 1, //边缘页数
                    num_display_entries: 4, //主体页数
                    callback: pageselectCallback,
                    items_per_page:1, //每页显示1项
                    prev_text: "上一页",
                    next_text: "下一页",
                    prev_show_always:_pag_text,
                    next_show_always:_pag_text,
                    link_to:"javascript:void(0);"
                });
            };	
            $(function(){ //执行这个方法
                goods_data();
                // console.log($('#goods'));
                // console.log($('#goods').get(0).offsetHeight);
            });
        </script>
	</body>
</html>