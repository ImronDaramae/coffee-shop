<!DOCTYPE html>
<html>
<head>
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" />

    <link rel="stylesheet"href="{{asset('assets/lib/aos-2.3.1/aos.min.css')}}">

    <link rel="stylesheet"href="{{asset('assets/app/css/input.css')}}">
    <link rel="stylesheet"href="{{asset('assets/app/css/output.css')}}">
    <link rel="stylesheet"href="{{asset('assets/app/css/style.css')}}">
    <link rel="stylesheet"href="{{asset('assets/app/css/nav.css')}}">
    <link rel="stylesheet"href="{{asset('assets/app/css/blocks.css')}}">
    <link rel="stylesheet"href="{{asset('assets/app/css/color.css')}}">

    <link rel="stylesheet" href="{{asset('assets/app/js/jquery-3.7.1.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/aos-2.3.1/aos.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/app/js/swiper.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/app/js/script.js')}}">

</head>
<body>
    @include('home.topnav')

    <div class="container">
        @yield('content')
    </div>

    @include('home.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script>
      gsap.registerPlugin(ScrollTrigger);
      $(document).ready(function() {
        gsap.timeline({
          scrollTrigger: {
            trigger: "#section01",
            start: "top",
            end: "bottom",
            scrub: true
        }}).to(".fade-down", { y: -100, opacity: 0 })

        gsap.timeline({
          scrollTrigger: {
            trigger: "#section02",
            start: "top",
            end: "bottom",
            scrub: true
        }}).to(".card-down-03", { y: 50 })

        gsap.fromTo(".img-width", 1,{ width: '0' }, { width: '100%' })

        gsap.timeline({
          scrollTrigger: {
            trigger: "#root03",
            start: "top",
            end: "bottom",
            scrub: true
        }})
        .to(".card-down", { y: 50 })
        .to(".fade-up", { y: -70, opacity: 1 })

        gsap.timeline({
          scrollTrigger: {
            trigger: "#root04",
            start: "top",
            end: "bottom",
            scrub: true
        }})
        .to(".card-down-02", { y: 50 })

        gsap.timeline({
        scrollTrigger: {
          trigger: "#root05",
          start: "top",
          end: "top",
          scrub: true
        }})
        .to(".card-down-04", { y: 50 })

        gsap.timeline({
        scrollTrigger: {
          trigger: "#root06",
          start: "top",
          end: "bottom",
          scrub: true
        }})
        .to(".text-intro", { translateX: -250 })
      });
    </script>
</body>
</html>
