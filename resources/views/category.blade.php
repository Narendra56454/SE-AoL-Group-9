@extends('layout.main')

@section('category-style')
    <link rel="stylesheet" href="{{ asset('css/style-category.css') }}">
@endsection

@section('main-container')
    <div class="container">
        <h1>{{ $category }}</h1>

        <div class="content-container">
            @include('partial.filter')

            <div class="searched-content">
                @foreach ($vendors as $vendor)
                    <a href="/vendorDetail/{{ $vendor->name }}">
                        <div class="content-wrapper vendor-{{ $vendor->id }}" data-rating="{{ $vendor->rating }}">
                            <img src="{{ asset('img/bookmark_icon.png') }}" alt="icon bookmark" class="bookmark">
                            <img src="{{ asset('img/' . $vendor->food_img) }}" alt="{{ $vendor->name }}" class="content-img">
            
                            <div class="content-detail">
                                <h2>{{ $vendor->name }}</h2>
            
                                <div class="content-category">
                                    <img src="{{ asset('img/snack_icon.png') }}" alt="icon snack">
                                    <h4>{{ $vendor->category }}</h4>
                                </div>
                                <div class="content-location">
                                    <img src="{{ asset('img/map_icon.png') }}" alt="icon map">
                                    <h4>{{ $vendor->location }}</h4>
                                </div>
            
                                <p>{{ $vendor->description }}</p>
            
                                <div class="rating">
                                    <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                                    <h4>{{ $vendor->rating }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    // Function to filter vendors based on rating
    function filterVendors() {
        var selectedRatings = $('input[name^="rating"]:checked').map(function () {
            return $(this).data('rating');
        }).get();

        $('.content-wrapper').each(function () {
            var vendorRating = $(this).data('rating').toString();
            if (selectedRatings.length === 0 || selectedRatings.includes(vendorRating)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    // Event listener for checkbox changes
    $('input[name^="rating"]').on('change', function () {
        filterVendors();
    });

    // Initial filter (show all vendors)
    filterVendors();
});

</script>
@endsection
