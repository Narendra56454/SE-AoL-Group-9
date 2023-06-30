@extends('layout.main')

@section('vendorDetail-style')
    <link rel="stylesheet" href="{{ asset('css/style-vendorDetail.css') }}">
@endsection


@section('main-container')

    <div class="content-container">
        <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" class="main-img">

        <h1>{{ $vendor->name }}</h1>
        <div class="content-detail">
            <div class="detail-container">
                <img src="{{ asset('img/map_icon.png') }}" alt="icon location">
                <h4>{{ $vendor->location }}</h4>
            </div>
            <div class="detail-container">
                <div class="detail-container">
                    <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                    <h4 class="rating">{{ $vendor->rating }}</h4>
                </div>
                <h4 class="total-review">15 Reviews</h4>
            </div>
        </div>


        <div class="tab-location-wrapper">
            {{-- ----------TAB----------- --}}
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab1">Deskripsi</a></li>
                    <li><a href="#tab2">Menu</a></li>
                    <li><a href="#tab3">Galeri</a></li>
                    <li><a href="#tab4">Ulasan</a></li>
                </ul>
            
                <div class="tab-content">
                <div id="tab1" class="tab active">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod obcaecati enim ipsa omnis, iste saepe temporibus esse tempora exercitationem ex ipsam. Excepturi tenetur earum quos, inventore deserunt, cupiditate omnis repellat quibusdam aut tempora amet unde, laboriosam consequatur voluptatum ullam consectetur? Saepe nobis natus similique omnis, ducimus dicta nemo excepturi doloribus, cupiditate id quaerat quis eveniet perspiciatis quam modi distinctio, nam consequuntur odio repellat cumque in porro sit ad. Dolore repellendus neque vel? Commodi est molestias doloribus aliquid ipsa, incidunt consequuntur dignissimos possimus atque facere sint eveniet asperiores laboriosam similique nobis quos! Velit labore eaque ipsum non ad earum, in porro.</p>
                </div>

                <div id="tab2" class="tab">
                    <div class="menu-container">
                        <img src="{{ asset('img/cicak_goreng.png') }}" alt="cicak goreng">
                        <h3>Cicak Goreng</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia itaque optio cupiditate, beatae odio ex!</p>
                        <h4>Rp 99.000</h4>
                    </div>
                    <div class="menu-container">
                        <img src="{{ asset('img/gudeg.png') }}" alt="gudeg">
                        <h3>Gudeg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia itaque optio cupiditate, beatae odio ex!</p>
                        <h4>Rp 20.000</h4>
                    </div>
                </div>

                <div id="tab3" class="tab">
                    <div class="gallery-container">
                        <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" id="thumbnail" class="thumbnail">

                        <div class="wrapper">
                            <i id="left" class="fa-solid fa-angle-left"><img src="{{ asset('img/left_icon.png') }}" alt="icon left" class="arrow"></i>
                            <div class="carousel">
                                <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" draggable="false">
                                <img src="{{ asset('img/cicak_goreng.png') }}" alt="cicak goreng" draggable="false">
                                <img src="{{ asset('img/gudeg.png') }}" alt="gudeg" draggable="false">
                                <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" draggable="false">
                                <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" draggable="false">
                            </div>
                            <i id="right" class="fa-solid fa-angle-right"><img src="{{ asset('img/right_icon.png') }}" alt="icon right" class="arrow"></i>
                        </div>
                    </div>
                </div>

                <div id="tab4" class="tab">
                    <div class="review-container">

                        <div class="review">
                            <div class="profil-wrapper">
                                <img src="{{ asset('img/default_profile_image.png') }}" alt="profile image" class="review-profile-img">
                                <div class="name-rating-wrapper">
                                    <h4>Laper Cuy</h4>
                                    <div class="review-rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, mollitia, doloribus nisi totam illum delectus reiciendis, iure incidunt nobis laboriosam omnis provident rem. Ab, iure in autem, modi optio quibusdam nisi delectus eligendi animi, quae inventore esse aut consequatur sunt!</p>
                        </div>

                        <div class="review">
                            <div class="profil-wrapper">
                                <img src="{{ asset('img/default_profile_image.png') }}" alt="profile image" class="review-profile-img">
                                <div class="name-rating-wrapper">
                                    <h4>Laper Cuy</h4>
                                    <div class="review-rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, mollitia, doloribus nisi totam illum delectus reiciendis, iure incidunt nobis laboriosam omnis provident rem. Ab, iure in autem, modi optio quibusdam nisi delectus eligendi animi, quae inventore esse aut consequatur sunt!</p>
                        </div>

                        <div class="review">
                            <div class="profil-wrapper">
                                <img src="{{ asset('img/default_profile_image.png') }}" alt="profile image" class="review-profile-img">
                                <div class="name-rating-wrapper">
                                    <h4>Laper Cuy</h4>
                                    <div class="review-rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                        <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, mollitia, doloribus nisi totam illum delectus reiciendis, iure incidunt nobis laboriosam omnis provident rem. Ab, iure in autem, modi optio quibusdam nisi delectus eligendi animi, quae inventore esse aut consequatur sunt!</p>
                        </div>

                        <button class="see-all-btn">lihat selengkapnya</button>
                    </div>
                </div>
                </div>
            </div>

            {{-- ----------LOCATION---------- --}}
            <div class="location">
                <h2>Lokasi</h2>
                <img src="{{ asset('img/lokasi_vendor.png') }}" alt="lokasi vendor">
                <h2>Jam Operasi</h2>
                <div class="hari-container">
                    <div class="hari">
                        <p class="h">Senin</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Selasa</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Rabu</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Kamis</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Jumat</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Sabtu</p>
                        <p>08.00 - 17.00</p>
                    </div>
                    <div class="hari">
                        <p class="h">Minggu</p>
                        <p>08.00 - 17.00</p>
                    </div>
                </div>
                <h2>Nomor Telepon</h2>
                <p>(+62) 1234567890</p>
            </div>
        </div>
    </div>

    {{-- ------ SCRIPT ------ --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tab-links a').on('click', function(e) {
                var currentTab = $(this).attr('href');

                // Show the clicked tab and hide the rest
                $('.tab').removeClass('active');
                $(currentTab).addClass('active');

                // Update active state for the tab links
                $('.tab-links li').removeClass('active');
                $(this).parent('li').addClass('active');

                // Prevent the default link behavior
                e.preventDefault();
            });
        });
    </script>
    <script>
        // CHANGE THE THUMBNAIL WHEN THE CAROUSEL CLICKED
        const carousel = document.querySelector(".carousel");
        const thumbnail = document.getElementById("thumbnail");

        const carouselImages = carousel.querySelectorAll("img");
        carouselImages.forEach(image => {
        image.addEventListener("click", () => {
            thumbnail.src = image.src;
            thumbnail.alt = image.alt;
        });
        });


        // FOR CAROUSEL
        firstImg = carousel.querySelectorAll("img")[0],
        arrowIcons = document.querySelectorAll(".wrapper i");

        let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

        const showHideIcons = () => {
            // showing and hiding prev/next icon according to carousel scroll left value
            let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
            arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
            arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
        }

        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
                // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
            });
        });

        const autoSlide = () => {
            // if there is no image left to scroll then return from here
            if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

            positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
            let firstImgWidth = firstImg.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiff;

            if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
                return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
            }
            // if user is scrolling to the left
            carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        }

        const dragStart = (e) => {
            // updatating global variables value on mouse down event
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = carousel.scrollLeft;
        }

        const dragging = (e) => {
            //DRAGABLE CAROUSEL
            if(!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
            showHideIcons();
        }

        const dragStop = () => {
            isDragStart = false;
            carousel.classList.remove("dragging");

            if(!isDragging) return;
            isDragging = false;
            autoSlide();
        }

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("touchstart", dragStart);

        document.addEventListener("mousemove", dragging);
        carousel.addEventListener("touchmove", dragging);

        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("touchend", dragStop);
    </script>
@endsection