@extends("layouts.app")

@section("content-main")

<main>
    <section class="bg-dark position-relative">
        <div class="container">
            <div class="row">
                <div class="series blu p-1 text-center">
                    <h2 class="text-white">CURRENT SERIES</h2>
                </div>
                @foreach($comics as $comic)
                <div class="col-2 my-5">
                    <img class="" src=" {{$comic['thumb']}} " alt="">
                    <p class="text-white m-0 mt-2 fw-bold">{{$comic["series"]}}</p>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <a href="#" class="btn btn-primary">LOAD MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="blu">
        <div class="container">
            <div class="row py-5 px-3">
                <div class="col-12">
                    <ul class="list-unstyled d-flex align-items-center">
                        <li class="me-3">
                            <img class="w-25" src="{{Vite::asset('resources/assets/images/buy-comics-digital-comics.png')}}" alt="">
                            <p class="text-white m-0 d-inline-block">DIGITAL COMIC</p>
                        </li>
                        <li class="me-3">
                            <img class="w-25" src="{{Vite::asset('resources/assets/images/buy-comics-merchandise.png')}}" alt="">
                            <p class="text-white m-0 d-inline-block">DC MERCHANDISE</p>
                        </li>
                        <li class="me-3">
                            <img class="w-25" src="{{Vite::asset('resources/assets/images/buy-comics-subscriptions.png')}}" alt="">
                            <p class="text-white m-0 d-inline-block">SUBSCRIPTIONS</p>
                        </li>
                        <li class="me-3">
                            <img class="w-25" src="{{Vite::asset('resources/assets/images/buy-comics-shop-locator.png')}}" alt="">
                            <p class="text-white m-0 d-inline-block">COMIC SHOP LOCATOR</p>
                        </li>
                        <li class="me-3">
                            <img class="w-25" src="{{Vite::asset('resources/assets/images/buy-dc-power-visa.svg')}}" alt="">
                            <p class="text-white m-0 d-inline-block">DC POWER VISA</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection