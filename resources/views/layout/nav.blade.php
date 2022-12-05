
<!--header, navigation-->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <div>
        <img src="/images/Church Logo.jpg" alt="" style="width: 50px; height:50px; margin-right: 20px; border-radius: 50px;">
      </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="link nav-item">
          <a class="nav-link active bg-light" aria-current="page" href="/home">Home</a>
        </li>
        <li class="link nav-item">
          <a class="nav-link" href="/listing">Pages</a>
        </li>
        <li class="link nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="link nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="link nav-item">
          <a class="nav-link" href="/pastor">Pastors</a>
        </li>
        <li class="link nav-item">
          <a class="nav-link" href="/developer">Developer</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="link nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            {{ Auth::user()? 'Hi! ' .Auth::user()->name : 'Account' }}
          
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

           @auth

           <li><a class="dropdown-item" href="/my-post">My Post</a></li>
           <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>

           @else

            <li><a class="dropdown-item" href="{{ route('login')}} ">Login</a></li>
            <li><a class="dropdown-item" href="/register">Register</a></li>

           @endauth

          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <style>
      .link{
    width: 90%; 
    height: 100%;
    display: flex;
    align-items: center;
    overflow: hidden;
}
.navbar{
  background-color: rgb(138, 190, 214);
}
.link a{
    font-size: 12pt;
    text-decoration: none;
    padding: 10px;
    width: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Verdana,sans-serif;
}
.link a:hover{
    background-color: rgb(222, 7, 125);
    opacity: 0.6;
    border-radius: 25px;
    transition: 1s;

}
    </style>
  </nav>
  <div class="marquee">
    <marquee class="" behavior="" direction="left">
      <i class="fa-solid fa-cross"></i>&nbsp;យើងជឿថា ព្រះយេស៊ូវគ្រីស្ទជាព្រះអាទិករបង្កើតផ្ទៃមេឃនិងផែនដី។ ព្រះយេស៊ូវគឺជាផ្លូវ សេចក្តីពិត និងជីវិត ដែលជួយសង្រ្គោះយើងឱ្យរួចផុតពីអំពើបាបនាំទៅរកជីវិតដ៏នៅអស់កល្បជានិច្ច។ 
      We believe Jesus Christ created the heaven and the earth. Jesus is the way, the truth and the life who redeems our sin to the eternal life.          
      <i class="fa-solid fa-cross"></i>&nbsp;យើងជឿថា ព្រះយេស៊ូវគ្រីស្ទជាព្រះ ១០០% និងមនុស្ស ១០០% ។
      We believe Jesus Christ is 100 % God and 100 % man.
      <i class="fa-solid fa-cross"></i>&nbsp;យើងជឿថា ព្រះគម្ពីរ ប៊ីប ឬព្រះគម្ពីរបរិសុទ្ធទាំង ៦៦ កណ្ឌ គឺជាការបើកសំដែងដែលមកពីអំពីព្រះអម្ចាស់យ៉ាងពិតប្រាកដ។ យើងជឿថា ព្រះវិញ្ញាណបរិសុទ្ធជាអ្នកបណ្តាលឱ្យតែងសរសេរចូលក្នុងព្រះគម្ពីរបរិសុទ្ធនេះ (២ ធីម៉ូថេ ៣:១៦)។           
      We believe Bible contains 66 books is the revelation of God truly. The Holy Spirit inspired to write down into the Holy Bible (2 Timothy 3:16).          
      <i class="fa-solid fa-cross"></i>&nbsp;យើងសូត្រតាមលំនាំនៃគោលជំនឿពួកសាវក។ 
      We recited according to the apostle’s creed.
      <i class="fa-solid fa-cross"></i>&nbsp;យើងធ្វើតាមបណ្តាំមហាបេសកកម្មរបស់ព្រះយេស៊ូវ គឺចេញទៅបង្កើតសិស្សនៅគ្រប់ទាំងសាសន៍ដែលនៅលើផែនដីនេះ ព្រមទាំងធ្វើបុណ្យជ្រមុជទឹកឱ្យគេដោយនូវព្រះនាមព្រះវរបិតា ព្រះរាជបុត្រា និង
      ព្រះវិញ្ញាណបរិសុទ្ធ ថែមទាំងបង្រៀនពួកគេឱ្យកាន់តាមការបង្រៀនរបស់ព្រះអម្ចាស់ទៀតផង។           
      We obey Jesus’ commission is to go and make disciples in all nations on earth and baptized them in the name of God the Father, God the Son and God the Holy Spirit and teaching them to obey God’s teaching.    
      <i class="fa-solid fa-cross"></i>&nbsp;យើងសូត្រតាមលំនាំសេចក្តីអធិស្ឋានរបស់ព្រះអម្ចាស់។ 
      We recite according to the Lord’s prayer.
    </marquee>
    <style>
      marquee{
        width: 100%;
        padding: 20px;
        background-color: darkcyan;
        color: white;
        font-family: "Hanuman","Titillium Web";
        font-size: 15pt;
      }
    </style>
  </div>