@extends('home.layout')

<?php
// print_r($products);
$swiper01 = [
  ['imgBg' => 'assets/app/img/content/17.png'],
  ['imgBg' => 'assets/app/img/content/21.png'],
  ['imgBg' => 'assets/app/img/content/22.png'],
  ['imgBg' => 'assets/app/img/content/23.png'],
  ['imgBg' => 'assets/app/img/content/24.png'],
  ['imgBg' => 'assets/app/img/content/25.png'],
];

$tabs = [
    ['title' => 'BRANCH SHOP 1'],
    ['title' => 'BRANCH SHOP 2'],
    ['title' => 'BRANCH SHOP 3']
];
?>

@section('content')

    {{-- <section class="bg-black section-padding section-01" id="section01">
        <div class="container max-w-full">
            <div class="grid flex-row-reverse grid-cols-12">
                <div class="col-span-12 md:col-span-5 sm:col-span-8">
                    <div class="relative">
                        <div class="ss-card ss-card-01">
                            <div class="ss-img no-hover vertical img-height">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/01.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-10 flex flex-col h-full col-span-12 md:col-span-7 sm:col-span-12">
                    <div class="flex">
                        <div>
                            <h1 class="font-semibold uppercase fade-down small color-white whitespace-nowrap">
                                Coffee Makes<br />
                            </h1>
                            <p class="font-semibold uppercase fade-down h1 font-bebas color-white">
                                Severe, And Grave
                            </p>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="detail-items">
                            <div class="detail-item">
                                <div class="icon">
                                    <famapmarked>
                                    </famapmarked>
                                </div>
                                <div class="text">
                                    <p class="font-light tracking-wider uppercase color-white">
                                        No. 84/52 Soi Pongnaresorn Village, <br />
                                        Hua Hin Subdistrict, Hua Hin District 77110
                                    </p>
                                </div>
                            </div>
                            <div class="detail-item mt-9">
                                <div class="icon">
                                    <faclock>
                                    </faclock>
                                </div>
                                <div class="text">
                                    <p class="font-light tracking-wider uppercase color-white">
                                        Sun-Thu: 12PM - 6PM<br />
                                        Fri-Sat: 12PM - 8PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black section-padding" id="section02">
        <div class="container max-w-full">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-5 sm:col-span-6">
                    <div class="flex items-center justify-center h-full">
                        <div class="text-center ss-text">
                            <p class="h4 font-oswald title">
                                SERVING TASTY<br /> COFFEE SINCE 2024
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 sm:col-span-6">
                    <div class="relative">
                        <div class="ss-card ss-card-02 img-width card-down-03">
                            <div class="ss-img no-hover">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/14.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black section-padding section-02" id="root03">
        <div class="container max-w-full">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7 md:col-span-12">
                    <div class="relative h-full card-down">
                        <div class="ss-card ss-card-03 ">
                            <div class="ss-img no-hover vertical-02">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/03.jpg') }}')"></div>
                            </div>
                        </div>
                        <div class="ss-card ss-card-04">
                            <div class="ss-img no-hover vertical-02">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/04.jpg') }}')"></div>
                            </div>
                        </div>
                        <div class="title-intro fade-up">
                            <h1 class="font-bold uppercase color-white whitespace-nowrap">Makes Us<br />Serve</h1>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 md:col-span-12">
                    <div class="text-container">
                        <div class="wrapper">
                            <h4 class="font-semibold uppercase color-p lg-no-br ss-title-line-left">
                                Coffee is the best thing<br />
                                to douse the sunrise with
                            </h4>
                            <p class="leading-8 color-01 mt-7">
                                Exercitation photo booth stumptown tote bag Banksy,
                                elit small batch freegan sed. Craft beer elit seitan exercitation,
                                photo booth et 8-bit kale chips proident chillwave deep v laborum.
                                Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade
                                swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown
                                yr pop-up artisan.
                            </p>
                            <p class="leading-8 color-01 mt-7">
                                Meh synth Schlitz, tempor duis single-origin coffee ea next
                                level ethnic fingerstache fanny pack nostrud. Photo booth anim
                                8-bit hella, PBR 3 wolf moon beard Helvetica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black section-padding section-03" id="root04">
        <div class="container max-w-full">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6 md:col-span-5">
                    <div class="mt-32">
                        <div class="ss-title-line-right">
                            <h4 class="font-semibold uppercase color-p">
                                Menus
                            </h4>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="pattern">
                            <div class="wrapper">
                                <img src="{{ asset('assets/app/img//pattern/01.png') }}" />
                            </div>
                        </div>
                        <div class="ss-card ss-card-05 card-down-02">
                            <div class="ss-img no-hover vertical">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/05.jpg') }}')"></div>
                            </div>
                        </div>
                        <div class="ss-card ss-card-06 card-down-02">
                            <div class="ss-img no-hover vertical-02">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/06.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 md:col-span-7">
                    <div class="mt-32 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-01.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cafe Americano
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿125</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-02.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cappuccino
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-titile">
                        <p class="font-semibold uppercase color-white">Classic</p>
                    </div>
                    <div class="food-menu-container active">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-03.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Espresso
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-04.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Caramel Macchiato
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-05.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cafe Mocha
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-black section-padding section-03">
        <div class="container max-w-full">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-6 md:col-span-6">
                    @foreach($products as $value)
                        <div class="food-menu-container">
                            <div class="wrapper">
                                <div class="food-menu-img">
                                    <img src="{{ asset('storage/'.$value->image) }}" alt="CUP IMAGE" />
                                </div>
                                <div class="food-menu-content">
                                    <div class="wrapper">
                                        <div class="title">
                                            <h5 class="font-medium uppercase color-white">
                                                {{ $value->name }}
                                            </h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="price">
                                            <h6 class="font-semibold color-p">฿{{ number_format($value->price, 0) }}</h6>
                                        </div>
                                    </div>
                                    <p class="color-white">{{ $value->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-02.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cappuccino
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-titile">
                        <p class="font-semibold uppercase color-white">Classic</p>
                    </div>
                    <div class="food-menu-container active">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-03.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Espresso
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-04.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Caramel Macchiato
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-05.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cafe Mocha
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="col-span-12 lg:col-span-6 md:col-span-6">
                    <div class="food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-01.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cafe Americano
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿125</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-02.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cappuccino
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-03.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Espresso
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-container">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-04.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Caramel Macchiato
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 food-menu-titile">
                        <p class="font-semibold uppercase color-white">Classic</p>
                    </div>
                    <div class="food-menu-container active">
                        <div class="wrapper">
                            <div class="food-menu-img">
                                <img src="{{ asset('assets/app/img/content/cup-05.jpg') }}" alt="CUP IMAGE" />
                            </div>
                            <div class="food-menu-content">
                                <div class="wrapper">
                                    <div class="title">
                                        <h5 class="font-medium uppercase color-white">
                                            Cafe Mocha
                                        </h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="price">
                                        <h6 class="font-semibold color-p">฿99</h6>
                                    </div>
                                </div>
                                <p class="color-white">Espresso shots topped with hot water</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <section class="section-padding section-04">
        <div class="container max-w-full">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7 md:col-span-12">
                    <div class="relative">
                        <div class="ss-card ss-card-07 ">
                            <div class="ss-img no-hover card-down-04">
                                <div class="img-bg"
                                    style="background-image:url('{{ asset('assets/app/img/content/07.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 md:col-span-12">
                    <div class="logo">
                        <img src="{{asset('assets/app/img/logo/01.png')}}" />
                    </div>
                    <h4 class="mt-6 font-semibold uppercase color-p lg-no-br ss-title-line-left">
                        Intro
                    </h4>
                    <p class="mt-5 leading-8 color-01">
                        Exercitation photo booth stumptown tote bag Banksy,
                        elit small batch freegan sed. Craft beer elit seitan exercitation,
                        photo booth et 8-bit kale chips proident chillwave deep v laborum.
                        Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade
                        swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown
                        yr pop-up artisan.
                    </p>
                    <p class="leading-8 color-01 mt-7">
                        Meh synth Schlitz, tempor duis single-origin coffee ea next
                        level ethnic fingerstache fanny pack nostrud. Photo booth anim
                        8-bit hella, PBR 3 wolf moon beard Helvetica.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
          <div class="mt-5 jc-start ss-title-line-right">
            <h4 class="font-semibold uppercase color-p">
              Gallery
            </h4>
            <div class="line"></div>
          </div>
        </div>
        <div class="swiper-01">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php foreach($swiper01 as $d) {?>
                <div class="swiper-slide">
                  <div class="ss-img square">
                    <div class="img-bg" style="background-image:url('{{ asset('<?= $d['imgBg'] ?>') }}')"></div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
    </section>

    <section class="section-padding section-07 tab-container" id="root06">
        <div class="tab-container">
          <div class="text-intro">CONTACT US</div>
          <div class="container max-w-full">
            <div class="grid grid-cols-12">
              <div class="col-span-12 lg:col-span-4 md:col-span-6">
                <div class="tabs tabs-01">
                  <?php foreach($tabs as $i=>$d) {?>
                    <div class="tab <?= $i == 0 ? 'active' : '' ?>" data-tab="content_<?= $i ?>">
                      <?= $d['title'] ?>
                    </div>
                  <?php } ?>
                </div>
                <form class="form-container">
                  <div class="mt-5 jc-start ss-title-line-right">
                    <h4 class="font-semibold uppercase color-p">
                      Contact
                    </h4>
                    <div class="line"></div>
                  </div>
                  <div class="tab-contents">
                    <?php foreach($tabs as $i=>$d) {?>
                      <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                        <div class="mt-4 contact-list">
                            <div class="contact-item">
                              <div class="icon">

                              </div>
                              <div class="text">
                                <p class="leading-8">
                                  No. 84/52 Soi Pongnaresorn Village, Hua Hin
                                  Subdistrict, Hua Hin District 77110
                                </p>
                              </div>
                            </div>
                            <div class="contact-item">
                              <div class="icon">
                                <faphonealt>
                                </faphonealt></div>
                              <div class="text">
                                <p>
                                  095 629 2916
                                </p>
                              </div>
                            </div>
                          </div>
                      </div>
                    <?php } ?>
                  </div>
                </form>
              </div>
              <div class="col-span-12 lg:col-span-8 md:col-span-6">
                <div class="tab-contents">
                  <?php foreach($tabs as $i=>$d) {?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <?php if($i === 0) {?>
                        <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3893.413906442111!2d99.938316!3d12.6208296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fd0183dca2fc41%3A0x9d5d60ff5a8d079f!2z4LiB4Lij4Liw4Lib4Li44LiB4Lii4LiyIOC4hOC4suC5gOC4n-C5iA!5e0!3m2!1sth!2sth!4v1690641950338!5m2!1sth!2sth"
                          width="100%" height="450px" style="border:0;" allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade">
                        </iframe>
                      <?php } else if($i === 1) { ?>
                        <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3894.2601476427726!2d99.881306!3d12.5650904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fdab8effacf68f%3A0x671fe13cb29c6afa!2z4LiB4Lij4Liw4Lib4Li44LiB4Lii4Liy4LiE4Liy4LmA4Lif4LmIIHgg4Lij4LmI4Lih4Lij4Li34LmI4LiZ4LmB4LiE4Lih4Lib4LmM!5e0!3m2!1sth!2sth!4v1690701592803!5m2!1sth!2sth"
                          width="100%" height="450px" style="border:0;" allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade">
                        </iframe>
                      <?php } else { ?>
                        <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486.78047343011343!2d99.958326!3d12.5661703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fdabb1c0ee8ae9%3A0x60cab20222ff4918!2z4LiB4Liy4LiZ4LiV4LmM4LmA4Lib4LmH4LiU4LiV4Li44LmL4LiZIOC4q-C4seC4p-C4q-C4tOC4mQ!5e0!3m2!1sth!2sth!4v1690701700610!5m2!1sth!2sth"
                          width="100%" height="450px" style="border:0;" allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade">
                        </iframe>
                      <?php } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section-05" id="root05">
        <div class="since card-down-04" >
          <div class="wrapper">
            <p class="h5 color-white fw-200">since</p>
            <h4 class="color-white fw-600">2024</h4>
            <div class="cup-container">
                <svg width="182" height="182" viewBox="0 0 182 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M47.502 153.123C78.5633 174.872 112.734 152.508 134.483 121.447C156.232 90.3933 165.552 50.6339 134.498 28.8849C103.437 7.13585 69.2662 29.4915 47.5172 60.5529C25.7682 91.6142 16.4407 131.374 47.502 153.123Z" stroke="white"  stroke-width="15.1667"/>
                    <path d="M125.8 41.3063C115.236 43.1718 85.4111 59.3167 84.7893 86.6547C84.1599 113.985 63.6545 136.659 56.2001 140.693C69.8729 141.012 96.589 122.683 97.2108 95.3452C97.8402 68.0148 118.338 45.3407 125.8 41.3063Z" fill="white" />
                </svg>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12">
          <div class="h-full col-span-12 md:col-span-6">
            <div class="content-left">
              <h4 class="font-semibold uppercase">History</h4>
              <p class="mt-6">
                Craft beer elit seitan exercitation, photo booth et 8-bit
                kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                Marfa eiusmod Pinterest in do umami readymade swag.
              </p>
              <div class="signature">
                <img src="{{ asset('assets/app/img/content/signature.png') }}" alt="CUP IMAGE" />
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6">
            <div class="content-right">
              <div class="img-bg" style="background-image:url('{{ asset('assets/app/img/content/13.jpg') }}')"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding section-06">
        <div class="container max-w-full">
          <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-4 md:col-span-6">
              <div class="content">
                <div class="wrapper">
                  <div class="icon">
                    <img src="{{ asset('assets/app/img/icon/vintage_phone.png') }}" alt="VINTAGE PHONE"/>
                  </div>
                  <div class="text">
                    <p>Opening Hours</p>
                    <p>11.30AM - 2.30PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-4 md:col-span-6">
              <div class="content">
                <div class="wrapper">
                  <div class="icon">
                    <img src="{{ asset('assets/app/img/icon/vintage_compass.png') }}" alt="VINTAGE COMPASS"/>
                  </div>
                  <div class="text">
                    <p>Location Lake House, 13 Hanway</p>
                    <p>Square, London, England</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-4 md:col-span-12">
              <div class="content">
                <div class="wrapper">
                  <div class="social-list">
                    <a href="https://www.facebook.com/KrapookyaCafe?mibextid=LQQJ4d" target="_blank" class="social-item">
                      <img src="./public/assets/app/img/icon/svg/facebook.svg" alt="Fackbook"/>
                    </a>
                    <a href="https://www.instagram.com/krapookyacafe?" target="_blank" class="social-item">
                      <img src="./public/assets/app/img/icon/svg/instagram.svg" alt="Instagram"/>
                    </a>
                    <a href="https://lin.ee/Op1AQK8" target="_blank" class="social-item line">
                      <img src="./public/assets/app/img/icon/svg/line.svg" alt="Twitter"/>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section> --}}
@endsection
