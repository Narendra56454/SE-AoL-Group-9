<div id="filter">
    <h2>Filter</h2>

    <section class="filter-section">
        <h3>Harga</h3>
        <div class="checkbox-group">
            <label>
                <input type="checkbox" name="harga-maksimum"> Harga Maksimum
            </label>
            <label>
                <input type="checkbox" name="harga-minimum"> Harga Minimum
            </label>
            <label>
                <input type="checkbox" name="10.000-30.000"> 10.000 - 30.000
            </label>
            <label>
                <input type="checkbox" name="30.000-70.000"> 30.000 - 70.000
            </label>
            <label>
                <input type="checkbox" name="70.000+"> 70.000+ 
            </label>
        </div>
    </section>
    <section class="filter-section">
        <h3>Skor</h3>
        <div class="checkbox-group">
            <label>
                <input type="checkbox" name="semua-rating" data-rating="all">
                <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating"> Semua Rating
            </label>
            <label>
                <input type="checkbox" name="rating-4" data-rating="4">
                <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating"> 4
            </label>
            <label>
                <input type="checkbox" name="rating-5" data-rating="5">
                <img src="{{ asset('img/rating_icon.png') }}" alt="icon rating"> 5
            </label>
            
        </div>
    </section>
</div>
