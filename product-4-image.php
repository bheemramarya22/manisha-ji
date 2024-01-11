<?php
    include_once('header.php');
    include_once('connection.php');

    @$id=$_GET['product_id'];

$sq=mysqli_query($con,"select * from product_tbl where product_id='$id'");

$res=mysqli_fetch_array($sq);
$cat=$res['category'];
{
?>


    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Product Detail</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active"><?php echo  $res['product_name'];?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-6">
                    <div class="product-left-box">
                        <div class="row g-sm-4 g-2">
                            <div class="col-6 col-grid-box wow fadeInUp">
                                <div class="slider-image">
                                <img width="100%" src="../back-end/assets/images/product/<?=$res['product_img'];?>">

                                </div>
                            </div>

                            <div class="col-6 col-grid-box wow fadeInUp" data-wow-delay="0.05s">
                                <div class="slider-image">
                                                            <img width="100%" src="../back-end/assets/images/product/<?=$res['product_image'];?>">
</div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="right-box-contain p-sticky wow fadeInUp">
                        <!-- <h6 class="offer-top">30% Off</h6> -->
                        <h2 class="name"><?php echo  $res['product_name'];?></h2>
                        <div class="price-rating">
                            <h3 class="theme-color price"><?php echo $res['sale_price'];?><del class="text-content"><?php echo $res['m_r_p'];?></del> 
                            <span
                                    class="offer theme-color">(8% off)</span>
                                </h3>
                            <div class="product-rating custom-rate">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="procuct-contain">
                            <p><?php echo $res['short_description'];?>
                            </p>
                        </div>


                        <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1" data-hours="1"
                            data-minutes="2" data-seconds="3">
                            <div class="product-title">
                                <h4>Hurry up! Sales Ends In</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="counter d-block">
                                        <div class="days d-block">
                                            <h5></h5>
                                        </div>
                                        <h6>Days</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter d-block">
                                        <div class="hours d-block">
                                            <h5></h5>
                                        </div>
                                        <h6>Hours</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter d-block">
                                        <div class="minutes d-block">
                                            <h5></h5>
                                        </div>
                                        <h6>Min</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter d-block">
                                        <div class="seconds d-block">
                                            <h5></h5>
                                        </div>
                                        <h6>Sec</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>



                        <div class="note-box product-packege">
                            <div class="cart_qty qty-box product-qty">
                                <div class="input-group">
                                    <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                    <input class="form-control input-number qty-input" type="text" name="quantity"
                                        value="0">
                                    <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            <button onclick="location.href = 'cart.php';"
                                class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</button>
                        </div>

                        <div class="buy-box">
                            <a href="wishlist.html">
                                <i data-feather="heart"></i>
                                <span>Add To Wishlist</span>
                            </a>

                            
                        </div>


                        <div class="paymnet-option">
                            <div class="product-title">
                                <h4>Guaranteed Safe Checkout</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg" class="blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="product-section-box">
                        <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>

            
                        </ul>

                        <div class="tab-content custom-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="product-description">
                                    <div class="nav-desh">
                                        <p><?php echo $res['long_description'];?></p>
                                    </div>

                                    
                                    <div class="banner-contain nav-desh">
                                        <img src="assets/images/vegetable/banner/14.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                        <div class="banner-details p-center banner-b-space w-100 text-center">
                                            <div>
                                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                                                <h2>VEGETABLE</h2>
                                                <p class="mx-auto mt-1">Save up to 5% OFF</p>
                                            </div>
                                        </div>
                                    </div>

                               
                                </div>
                            </div>

                      

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <!-- Releted Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Related Products</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">
                        <div>
                            <div class="product-box-3 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-2.html">
                                            <img src="assets/images/cake/product/11.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Cake</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Chocolate Chip Cookies 250 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(5.0)</span>
                                        </div>
                                        <h6 class="unit">500 G</h6>
                                        <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.57</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
           }
        ?>
    </section>
    <!-- Releted Product Section End -->

    <?php
      include_once('footer.php');
    ?>