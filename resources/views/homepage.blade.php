@extends('layout.main')

@section('homepage-style')
    <link rel="stylesheet" href="css/style-homepage.css">
@endsection

@section('main-container')
    <div class="content">
        <img src="img/main_banner.png" alt="main banner" class="main-banner">

        {{-- ------CATEGORY------ --}}
        <div class="category">
            <a href="/category/seafood">
                <div class="category-list">
                    <img src="img/category_seafood.png" alt="category seafood">
                    <h3>Seafood</h3>
                </div>
            </a>
            
            <a href="/category/meat">
                <div class="category-list">
                    <img src="img/category_meat.png" alt="category meat">
                    <h3>Meat</h3>
                </div>
            </a>
        
            <a href="/category/traditional">
                <div class="category-list">
                    <img src="img/category_traditional.png" alt="category traditional">
                    <h3>Traditional</h3>
                </div>
            </a>
        
            <a href="/category/snack">
                <div class="category-list">
                    <img src="img/category_snack.png" alt="category snack">
                    <h3>Snack</h3>
                </div>
            </a>
        </div>        

        {{-- ------CONTENT RECOMMENDATION TOURIST ATTRACTION------ --}}
        <div class="rec-attraction">
            <div class="rec-title">
                <h2>Lagi cari tempat makan di destinasi wisata?</h2>
                <a href="#">see more</a>
            </div>

            <div class="card-container">
                <div class="card">
                    <a href="/">
                        <div class="rec-content">
                            <img src="img/candi_borobudur.png" alt="candi borobudur" class="mmm">
                            <h3>Candi Burobudur</h3>
        
                            <div class="category-that-avaiable">
                                <div class="category-avaiable">
                                    <img src="img/seafood_icon.png" alt="seafood icon">
                                    <p>0</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/meat_icon.png" alt="seafood icon">
                                    <p>1</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/traditional_icon.png" alt="seafood icon">
                                    <p>2</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/snack_icon.png" alt="seafood icon">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="card">
                    <a href="/">
                        <div class="rec-content">
                            <img src="img/labuan_bajo.png" alt="labuan_bajo" class="mmm">
                            <h3>Labuan Bajo</h3>
        
                            <div class="category-that-avaiable">
                                <div class="category-avaiable">
                                    <img src="img/seafood_icon.png" alt="seafood icon">
                                    <p>0</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/meat_icon.png" alt="seafood icon">
                                    <p>1</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/traditional_icon.png" alt="seafood icon">
                                    <p>2</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/snack_icon.png" alt="seafood icon">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="card">
                    <a href="/">
                        <div class="rec-content">
                            <img src="img/pantai_mandalika.png" alt="pantai mandalika" class="mmm">
                            <h3>Pantai Mandalika</h3>
        
                            <div class="category-that-avaiable">
                                <div class="category-avaiable">
                                    <img src="img/seafood_icon.png" alt="seafood icon">
                                    <p>0</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/meat_icon.png" alt="seafood icon">
                                    <p>1</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/traditional_icon.png" alt="seafood icon">
                                    <p>2</p>
                                </div>
                                <div class="category-avaiable">
                                    <img src="img/snack_icon.png" alt="seafood icon">
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        {{-- ------CONTENT RECOMMENDATION FOOD------ --}}
        <div class="rec-food">
            <div class="rec-title">
                <h2>Tempat jajanan di Ancol</h2>
                <a href="#">see more</a>
            </div>

            <div class="card-container">
                <div class="card">
                    <a href="/vendorDetail/Vendor Pak Satya">
                        <div class="rec-content">
                            <img src="img/vendor_pak_satya.png" alt="vendor pak satya" class="mmm">
                            
                            <div class="title-rating-container">
                                <h3>Vendor Pak Satya</h3>
                                <div class="rating">
                                    <img src="img/rating_icon.png" alt="icon rating">
                                    <h5>4.5</h5>
                                </div>
                            </div>
                            
                            <p class="desc">Berlokasi di jalan xxx Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate?</p>
                        </div>
                    </a>
                </div>
                
                <div class="card">
                    <a href="/vendorDetail/Bakso Moro Seneng">
                        <div class="rec-content">
                            <img src="img/bakso_moro_seneng.png" alt="bakso moro seneng" class="mmm">
                            
                            <div class="title-rating-container">
                                <h3>Bakso Moro Seneng</h3>
                                <div class="rating">
                                    <img src="img/rating_icon.png" alt="icon rating">
                                    <h5>4.5</h5>
                                </div>
                            </div>
                            
                            <p class="desc">Berlokasi di jalan xxx Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate?</p>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="/vendorDetail/Gado-Gado kenangan">
                        <div class="rec-content">
                            <img src="img/gado_gado_kenangan.png" alt="gado-gado kenangan" class="mmm">
                            
                            <div class="title-rating-container">
                                <h3>Gado-Gado Kenangan</h3>
                                <div class="rating">
                                    <img src="img/rating_icon.png" alt="icon rating">
                                    <h5>4.5</h5>
                                </div>
                            </div>
                            
                            <p class="desc">Berlokasi di jalan xxx Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cupiditate?</p>
                        </div>
                    </a>
                </div>
                
            </div>

        </div>
    </div>
@endsection