<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- single-product31:30-->
    @include("layout.head");
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->

        <div class="body-wrapper">
            <!-- Begin Header Area -->
            @include("layout.header");
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="{{url('product_images/' . $data[0]->product_image)}}" data-gall="myGallery">
                                            <img src="{{url('product_images/' . $data[0]->product_image)}}" alt="product image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>


                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>{{$data[0]->product_name}}</h2>
                                    <span class="product-details-ref">{{$data[0]->supplier_name}}</span>
                                    <div class="rating-box pt-20">
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">{{$data[0]->product_price}} L.E</span>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form method="post" action="{{url('/product/done')}}" class="cart-quantity">
                                            @csrf
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input name="quantity" class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="product_id" value="{{$data[0]->id}}">
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                       
                                    </div>
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Security policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Delivery policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p> Return policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Footer Area -->
            @include("layout.footer");
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/1.jpg')}}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/2.jpg')}}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/3.jpg')}}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/4.jpg')}}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/5.jpg')}}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{url('images/product/large-size/6.jpg')}}" alt="product image">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">
                                            <div class="sm-image"><img src="{{url('images/product/small-size/1.jpg')}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{url('images/product/small-size/2.jpg')}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{url('images/product/small-size/3.jpg')}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{url('images/product/small-size/4.jpg')}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{url('images/product/small-size/5.jpg')}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{url('images/product/small-size/6.jpg')}}" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        @include("layout.script");
    </body>

<!-- single-product31:32-->
</html>
