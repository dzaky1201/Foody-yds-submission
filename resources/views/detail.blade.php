<x-detailcomp>
    <section class="back">
        <a href="/home">back</a>
    </section>

    <section class="left">
        <img src="{{$food['picture_url']}}" alt="img">
        <h1>{{ $food['title'] }}</h1>
        <p>{{$food['description']}}</p>
        @foreach ($food['categories'] as $item)
        <a class="category" href="#">{{$item}}</a>
        @endforeach

    </section>
</x-detailcomp>