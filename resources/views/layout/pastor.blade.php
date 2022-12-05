@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>

    <div class="responsive">
        <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="card" style="width: 50%;">
          <img class="card-img-top mt-5" src="/images/Sok Nev.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card_name">P. Sok Nev</h5>
            <p class="card_text mt-3">Thank you so much, Pater Nev for all that you have done for our church and community. I wanted to take a moment to write you a thank you letter expressing my gratitude. Your guidance and leadership have been instrumental in helping our church grow and serve the community. Thank you for your dedication, passion, and commitment to your calling as a pastor. You are an inspiration to us all.</p>
            <a href="/personal" class="card_btn mt-5">View More</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card" style="width: 50%;">
          <img class="card-img-top mt-5" src="/images/Hu Peter.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card_name">P. Hu Peter</h5>
            <p class="card_text mt-3">Thank you so much, Paster Peter for all that you have done for our church and community. I wanted to take a moment to write you a thank you letter expressing my gratitude. Your guidance and leadership have been instrumental in helping our church grow and serve the community. Thank you for your dedication, passion, and commitment to your calling as a pastor. You are an inspiration to us all.</p>
            <a href="#" class="card_btn mt-5">View More</a>
          </div>
        </div>
      </div>
    </div><br><br><br>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
            loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
</body>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .card{
      width: 50%;
      height: 120vh;
      border-radius: 30px;
    }
    .card-img-top{
      width: 10em;
      height: 10em;
      border-radius: 50%;
      border: 5px solid #9176ff;
      padding: 3px;
      margin: 0 auto; 
    }
    .swiper-slide{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .responsive{
        width: 100%;
        height: 150vh;
        background-color: rgb(182, 182, 210);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .swiper{
        width: 100%;
        height: fit-content;
    }
    .swiper-slide img{
        width: 60%;
        height: 50vh;
        opacity: 1;
    }
    .swiper .swiper-button-prev, .swiper .swiper-button-next{
        color: white;
    }
    .swiper .swiper-pagination-bullet-active{
        background-color: white;
    }
    .card_name{
      color: #9176ff;
      text-align: center;
    }
    .card_text{
      text-align: center;
      font-size: 1.1em;
      margin: 1em 0;
    }
    .card_btn{
      width: 50%;
      background-color: #9176ff;
      color: #fff;
      font-size: 1em;
      text-transform: uppercase;
      font-weight: 600;
      border: none;
      padding: .5em;
      border-radius: .5em;
      margin: 0px auto;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      text-decoration: none;
    }

</style>
<footer class="text-center text-white mt-5">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #dd4b39;"
          href="#!"
          role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
        <!-- Github -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #333333;"
          href="#!"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
  </footer>
</html>
@endsection