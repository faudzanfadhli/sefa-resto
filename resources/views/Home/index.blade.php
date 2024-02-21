<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SefaResto</title>

  <script src="https://unpkg.com/feather-icons"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/home.css">
</head>
<body>
  <nav class="navbar">
    <a href="#" class="navbar-logo">Sefa<span>Resto</span></a>
    <div class="navbar-nav">
      <a href="#home"><i data-feather="home"></i></a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
    </div>
    <div class="navbar-extra">
      <a href="#" id="searchBtn"><i data-feather="search"></i></a>
      @auth
        <a href="#" id="cartBtn"><i data-feather="shopping-cart"></i></a>
        <a href="#"><i data-feather="user"></i></a>
      @endauth
      @guest
        <a href="login"><i data-feather="log-in"></i></a>
      @endguest
      <a href="#" id="sideMenuButton"><i data-feather="menu"></i></a>
    </div>
    <div class="search-form">
      <input type="search" id="searchBox" name="searchBox" placeholder="Ketik pencarian disini...">
      <label for="searchBox"><i data-feather="search"></i></label>
    </div>
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/thumbnails/1.png" alt="">
        <div class="item-detail">
          <h3>Coffe Beans 1</h3>
          <div class="item-price">Rp15.000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/thumbnails/2.png" alt="">
        <div class="item-detail">
          <h3>Coffe Beans 2</h3>
          <div class="item-price">Rp15.000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/thumbnails/3.png" alt="">
        <div class="item-detail">
          <h3>Coffe Beans 3</h3>
          <div class="item-price">Rp15.000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
  </nav>

  <section id="home" class="hero">
    <main class="content">
      <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, voluptatum!</p>
      <a href="#" class="cta">Ngopi Sekarang</a>
    </main>
  </section>
  
  <section id="about" class="about">
    <h2>Tentang <span>Kami</span></h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa Memilih Kopi Kami</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero veniam asperiores consequatur. Nisi, dignissimos veritatis.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias rerum ab, doloribus id corporis assumenda nulla aliquid quod libero dolore.</p>
      </div>
    </div>
  </section>

  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim porro quibusdam, rerum doloremque nulla reprehenderit.</p>

    <div class="row">
      @foreach ($menus as $m)
        <div class="menu-card">
          <img class="menu-card-img" src="img/menu/{{ $m->menu_img }}" alt="{{ $m->menu_name }}">
          <h3 class="menu-card-title">{{ $m->menu_name }}</h3>
          <p class="menu-card-price">Rp{{ number_format($m->menu_price, 0, ',', '.') }}</p>
        </div>
      @endforeach
    </div>
  </section>

  <section id="products" class="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error illo veritatis, corrupti inventore dicta officia?</p>
    <div class="row">
      @foreach ($products as $p)
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="info"></i></a>
          </div>
          <div class="product-img">
            <img src="img/products/thumbnails/{{ $p->product_img }}" alt="{{ $p->product_name }}">
          </div>
          <div class="product-content">
            <h3>{{ $p->product_name }}</h3>
            <div class="product-stars">
              @for ($i = 1; $i <= 5; $i++)
                @if ($i <= intval($p->product_rating))
                  <i data-feather="star" class="star-full"></i>
                @else
                  <i data-feather="star"></i>
                @endif
              @endfor
            </div>
            <div class="product-price">
              <span>Rp{{ number_format($p->prev_price, 0, ',', '.') }}</span>
              Rp{{ number_format($p->current_price, 0, ',', '.') }}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Kontak <span>Kami</span></h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, praesentium.</p>

    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d262.62317662735535!2d106.94896898603899!3d-6.246323608611615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJalan%20Bintara%20Jaya%203%20No.20%2C%20RT.13%2FRW.3%2C%20Bintara%20Jaya%2C%20Kota%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1707534925458!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <form action="" method="post">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" id="" name="nickname" placeholder="Nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="email" id="" name="email" placeholder="E-mail">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="tel" id="" name="phone" placeholder="No. HP">
        </div>
        <button type="submit" class="btn-submit"><i data-feather="send"></i> Kirim Pesan</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>
    <div class="credit">
      <p>Created by <a href="#">Fauzan Fadli</a>. | &copy <span id="currentYear"></span>.</p>
    </div>
  </footer>

  <!-- Modal Item Detail -->
  <div id="itemDetailModal" class="modal">
    <div class="modal-container">
      <a href="#"><i data-feather="x-circle"></i></a>
      <div class="modal-content">
        <img id="productImg" src="" alt="">
        <div class="product-content">
          <h3 id="productName"></h3>
          <p id="productDesc"></p>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">
            <span>Rp55.000</span>
            Rp30.000
          </div>
          <a href="">
            <i data-feather="shopping-cart"></i>
            <span>Tambahkan ke Keranjang</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End modal Item Detail -->

  <script>
    feather.replace();
  </script>

  <script src="js/home.js"></script>
  <script>
    const curDate = new Date();
    document.getElementById('currentYear').innerText = curDate.getFullYear();
  </script>
</body>
</html>
