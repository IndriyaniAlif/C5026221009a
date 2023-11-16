<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .button {
          border: none;
          color: white;
          width: 350px;
          height: 70px;
          text-align: center;
          text-decoration: none;
          background-color: #b6895b;
          display: inline-block;
          font-size: 20px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 10px;
        }
    </style>

    <title>Alsaf's Cookies</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--My Style-->
    <link rel="stylesheet" href="style2.css" />


    <script>
      feather.replace(); // Initialize Feather Icons

      function validateForm() {
          const nama = document.getElementById("nama").value;
          const email = document.getElementById("email").value;
          const no_hp = document.getElementById("no_hp").value;

          if (nama === "" || email === "" || no_hp === "") {
              alert("Semua field harus diisi");
              return false;
          }

          // Validasi email dengan regular expression
          const emailRegex = /^\S+@\S+\.\S+$/;
          if (!emailRegex.test(email)) {
              alert("Format email tidak valid");
              return false;
          }

          // Validasi nomor hp (misalnya, panjang harus lebih dari 6 karakter)
          if (no_hp.length < 6) {
              alert("Nomor hp harus memiliki setidaknya 6 karakter");
              return false;
          }

          // Tambahkan validasi lain sesuai kebutuhan

          // Jika semua validasi berhasil, form akan di-submit
          return true;
      }

    </script>

  </head>
  <body>
    <!--Navbar start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Alsaf's<span>Chocs</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#ulasan">Ulasan</a>
        <a href="#contact">Kontak</a>

      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!--Navbar end-->

    <!--Hero Section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Nikmati Kelezatan Cokelat hanya di <span>AlsafChocs.</span></h1>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!--Hero Section end-->

    <!--About Section start-->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/cocoa.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih cokelat kami? </h3>
          <p>
            Kami hanya menggunakan bahan-bahan cokelat berkualitas terbaik, yang memastikan bahwa setiap gigitan produk kami memberikan pengalaman cokelat yang luar biasa.
          </p>
          <p>
            Setiap gigitan menghadirkan rasa cokelat yang autentik, disajikan dalam kreasi lezat yang menciptakan momen manis tak terlupakan dalam hidup Anda."
          </p>
        </div>
      </div>
    </section>

    <!--About Section end-->

    <!--Menu Section start-->
    <section id="menu" class="menu">

      <h2><span>Menu</span> Kami</h2>
      <h4>
        "Kami menyediakan dessert cokelat yang tidak hanya memanjakan lidah Anda dengan rasa cokelat yang luar biasa, tetapi juga menghadirkan pengalaman yang tak terlupakan."
      </h4>
      <h5>
        by AlsafChocs.
      <h5>

      <div class="row">

        <div class="menu-card">
          <img src="img/craquelin.jpg" alt="Craquelin" class="menu-card-img" />
          <h3 class="menu-card-title">- Chocs Craquelin Choux -</h3>
          <h4 class="menu-card-price">IDR 12K</h4>
        </div>
        <div class="menu-card">
          <img src="img/choccupcakenew.jpg" alt="Chocolate Cupkace" class="menu-card-img" />
          <h3 class="menu-card-title">- Chocs Cupkace -</h3>
          <h4 class="menu-card-price">IDR 10K</h4>
        </div>
        <div class="menu-card">
          <img src="img/macaroonnew.jpg" alt="Macaroon" class="menu-card-img" />
          <h3 class="menu-card-title">- Chocs Macaroon -</h3>
          <h4 class="menu-card-price">IDR 8K</h4>
        </div>
        <div class="menu-card">
          <img src="img/choccakenew.jpg" alt="Chocolate Cake" class="menu-card-img" />
          <h3 class="menu-card-title">- Chocs Cake -</h3>
          <h4 class="menu-card-price">IDR 200K</h4>
        </div>
      </div>

      </div>
    </section>
    <!--Menu Section end-->

    <!--Ulasan-->
    <section id="ulasan" class="ulasan">

      <h2><span>Ulasan</span> Pelanggan</h2>

        <div class="box-container">
          <h3> Mark Lee </h3>
            <img src="img/mark.jpg" alt="" class="users">
            <p>"Chocs Craquelin Choux nya enak bangettt. Tekstur chouxnya garing dan filling coklatnya lumer banget di mulut. Saya sangat merekomendasikannya kepada semua pecinta coklat. Next time saya mau beli lagi untuk oleh-oleh." </p>

          <h3> Jisoo </h3>
        <div class="box-container">
            <img src="img/jisoo.jpg" alt="" class="users">
            <p> "Kemarin aku beli Chocs Cake untuk temanku yang ulang tahun. Dia seneng banget karena kue ini kue kesukaannya. Tampilannya begitu menggoda dengan lapisan coklat leleh yang merata di atasnya. Cake ini adalah kombinasi yang sempurna antara kelezatan coklat dan kelembutan tekstur cake." </p>

          <h3> Jaemin </h3>
        <div class="box-container">
            <img src="img/jaemin.jpg" alt="" class="users">
            <p> "Aku suka banget sama Chocs macaroon dan Chocs Cupkacenya. Rasanya bener-bener nyoklat karena dibuat dari bahan-bahan yang premium. Chocs macaroonya menghasilkan perpaduan sempurna antara renyah dan lembut. Chocs Cupkacenya sangat lembut dan berpadu dengan krim coklat yang melapisi permukaannya." </p>


    <!--Contact Section start-->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <h3>
        Hubungi kami untuk mendapatkan informasi lebih lanjut!
      </h3>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d856.3448633750313!2d112.81253569420875!3d-7.2951615169105715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1697784869081!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="" name="Formfill">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="nama" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" name="email" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="number" name="no hp" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>
    <!--Contact Section end-->




    <!--Footer start-->
<footer>
  <div class="socials">
  <a href="#"><i
    data-feather="instagram"></i></a>
  <a href="#"><i
    data-feather="twitter"></i></a>
  <a href="#"><i
    data-feather="facebook"></i></a>
  </div>

  <div class="links">
    <a href="#home">Home</a>
    <a href="#about">Tentang Kami</a>
    <a href="#menu">Menu</a>
    <a href="#ulasan">Ulasan</a>
    <a href="#contact">Kontak</a>

  </div>


  <div class="credit">
    <p>Created by <a href="">indriyanialsaf</a>. | &copy; 2023.</p>
</footer>

    <!--Footer end-->

    <!--Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!--My Javascript-->
    <script src="script.js"></script>

    <!--Catatan, Latihan, dan Tugas Pweb-->
    <h2 class="indri-judul">Catatan Materi & Tugas PWEB</h2>

    <a href="hello" target="_blank">
        <button class="button" >Pengenalan HTML</button>
    </a>
    <a href="linktree2" target="_blank">
        <button class="button" >Tugas Linktree</button>
    </a>
    <a href="bs4colors" target="_blank">
        <button class="button" >Tugas Kelompok Bootstrap</button>
    </a>
    <a href="js1" target="_blank">
        <button class="button" >Pengenalan Javascript 1</button>
    </a>
    <a href="js2" target="_blank">
        <button class="button" >Pengenalan Javascript 2</button>
    </a>
    <a href="weblayout" target="_blank">
        <button class="button" >Tugas Pembuatan Layout</button>
    </a>
    <a href="style" target="_blank">
        <button class="button" >Pengenalan CSS</button>
    </a>
    <a href="responsive1" target="_blank">
        <button class="button" >Pengenalan Responsive 1</button>
    </a>
    <a href="responsive2" target="_blank">
        <button class="button" >Pengenalan Responsive 2</button>
    </a>


  </body>
</html>


