@extends('layout.main')

@section('search-style')
    <link rel="stylesheet" href="{{ asset('css/style-search.css') }}">
@endsection

@section('main-container')
    <div class="wrapper">
        {{-- -------------- FILTER --------------- --}}
        @include('partial.filter')

        {{-- -------------SEARCH CONTENT---------- --}}
        <div class="searched-content">
            <h3>menampilkan pencarian untuk..</h3>

            @foreach ($results as $result)
            <a href="/vendorDetail/{{ $result->name }}">
                <div class="content-wrapper">
                    <img src="{{ asset('img/bookmark_icon.png') }}" alt="icon bookmark" class="bookmark">
                    <img src="{{ asset('img/' . $result->food_img) }}" alt="{{ $result->name }}" class="content-img">
    
                    <div class="content-detail">
                        <h2>{{ $result->name }}</h2>
    
                        <div class="content-category">
                            <img src="{{ asset('img/snack_icon.png') }}" alt="icon snack">
                            <h4>{{ $result->category }}</h4>
                        </div>
                        <div class="content-location">
                            <img src="{{ asset('img/map_icon.png') }}" alt="icon map">
                            <h4>{{ $result->location }}</h4>
                        </div>
    
                        <p>{{ $result->description }}</p>
    
                        <div class="rating">
                            <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating">
                            <h4>{{ $result->rating }}</h4>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle bookmark click event
            $('.bookmark-icon').click(function(event) {
                event.stopPropagation(); // Prevent event propagation to parent elements
                // Toggle the image source between bookmark_icon.png and favorited_icon.svg
                $(this).attr('src', function(index, attr) {
                    return attr === '{{ asset('img/bookmark_icon.png') }}'
                        ? '{{ asset('img/favorited_icon.svg') }}'
                        : '{{ asset('img/bookmark_icon.png') }}';
                });
            });
        });
    </script>
@endsection