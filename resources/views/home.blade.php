<x-main>
    <section class="section-header">
        <img class="logo" src="img/logo.png" alt="logo">
        <a href="#">Contact</a>
        <a href="#">Category</a>
        <a href="#">Home</a>
    </section>

    <section class="main">
        <img class="main-img" src="img/img-food.png" alt="food">
        <p class="main-box">Find Your Favorite Food</p>
    </section>

    <section class="title-main">
        <h1>Trendy Food</h1>
    </section>

    <section class="catalog" id="catalog">
        <div class="wrap">
            @foreach ($foodData as $item)
            <div class="card" onclick="location.href='{{route('detail_food', $item['id'])}}';">
                <img src="{{$item['picture_url']}}" alt="food">
                <div class="desc">
                    <h3>{{$item['title']}}</h3>
                    <h3 class="harga">Rp.{{$item['base_price']}}</h3>
                </div>
            </div>
            @endforeach

        </div>
        </div>
</x-main>