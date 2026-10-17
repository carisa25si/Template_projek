<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Colo Shop - toko fashion dan lifestyle online">
  <title>Colo Shop | Modern Shopping</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    :root{--ink:#20201f;--muted:#777873;--accent:#d94f43;--cream:#f7f4ef;--line:#e9e6e0;--white:#fff;--green:#526b55}
    *{box-sizing:border-box;margin:0;padding:0}
    html{scroll-behavior:smooth}
    body{font-family:"DM Sans",sans-serif;color:var(--ink);background:#fff;line-height:1.6}
    a{text-decoration:none;color:inherit}
    button,input{font:inherit}
    button{cursor:pointer}
    img{display:block;width:100%;object-fit:cover}
    .container{width:min(1180px,92%);margin:auto}
    .topbar{background:var(--ink);color:#fff;font-size:12px;letter-spacing:.4px;padding:8px 0}
    .topbar .container{display:flex;justify-content:space-between;gap:15px;flex-wrap:wrap}
    .topbar span{opacity:.9}
    header{background:#fff;position:sticky;top:0;z-index:20;border-bottom:1px solid #f0eee9}
    .nav-wrap{min-height:78px;display:flex;align-items:center;justify-content:space-between;gap:24px}
    .logo{font-size:28px;font-weight:700;letter-spacing:-1.5px}
    .logo span{color:var(--accent)}
    .nav-links{display:flex;gap:30px;list-style:none;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1px}
    .nav-links a{transition:color .2s}.nav-links a:hover{color:var(--accent)}
    .nav-actions{display:flex;align-items:center;gap:20px}
    .icon-btn{border:0;background:none;font-size:18px;position:relative;color:var(--ink)}
    .cart-count{position:absolute;top:-10px;right:-11px;background:var(--accent);color:#fff;border-radius:50%;width:18px;height:18px;font-size:10px;display:grid;place-items:center}
    .menu-toggle{display:none}
    .hero{background:var(--cream);overflow:hidden}
    .hero-inner{min-height:520px;display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:30px}
    .hero-copy{padding:55px 0}
    .eyebrow{font-size:11px;text-transform:uppercase;letter-spacing:3px;color:var(--accent);font-weight:700;margin-bottom:18px}
    h1,h2,h3{line-height:1.15}
    h1{font-family:"Playfair Display",serif;font-size:clamp(42px,5vw,68px);letter-spacing:-1.8px;max-width:580px;margin-bottom:22px}
    .hero-copy p{color:var(--muted);max-width:430px;margin-bottom:30px;font-size:15px}
    .btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;border:0;background:var(--accent);color:#fff;padding:14px 23px;font-size:12px;font-weight:700;letter-spacing:1px;text-transform:uppercase;transition:transform .2s,background .2s}
    .btn:hover{background:#b93d33;transform:translateY(-2px)}
    .hero-photo{height:450px;align-self:end;position:relative}
    .hero-photo img{height:100%;object-position:center 35%;border-radius:180px 180px 0 0}
    .hero-sticker{position:absolute;bottom:35px;left:-25px;background:#fff;border-radius:50%;width:105px;height:105px;display:grid;place-content:center;text-align:center;box-shadow:0 10px 35px #00000012;font-weight:700;font-size:13px;line-height:1.25}
    .hero-sticker strong{color:var(--accent);font-size:25px}
    .categories{padding:70px 0 25px}
    .section-head{display:flex;align-items:end;justify-content:space-between;gap:20px;margin-bottom:28px}
    .section-head h2{font-family:"Playfair Display",serif;font-size:34px}
    .section-head p{color:var(--muted);font-size:13px;margin-top:7px}
    .text-link{font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;border-bottom:1px solid var(--ink);padding-bottom:4px}
    .category-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .category-card{height:250px;position:relative;overflow:hidden;background:#eee}
    .category-card img{height:100%;transition:transform .5s}
    .category-card:hover img{transform:scale(1.06)}
    .category-card:after{content:"";position:absolute;inset:35% 0 0;background:linear-gradient(transparent,#0009)}
    .category-label{position:absolute;z-index:1;bottom:20px;left:22px;color:#fff}
    .category-label small{font-size:10px;text-transform:uppercase;letter-spacing:2px}
    .category-label h3{font-family:"Playfair Display",serif;font-size:27px}
    .products-section{padding:65px 0 80px}
    .filters{display:flex;gap:8px;flex-wrap:wrap}
    .filter-btn{background:#fff;border:1px solid var(--line);padding:9px 16px;font-size:11px;text-transform:uppercase;letter-spacing:.7px;font-weight:700;color:var(--muted)}
    .filter-btn.active,.filter-btn:hover{background:var(--ink);border-color:var(--ink);color:#fff}
    .product-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:28px 18px}
    .product-card{min-width:0;position:relative}
    .product-image{height:285px;background:#f5f3ef;position:relative;overflow:hidden}
    .product-image img{height:100%;transition:transform .4s}
    .product-card:hover .product-image img{transform:scale(1.04)}
    .tag{position:absolute;top:12px;left:12px;background:var(--accent);color:#fff;padding:5px 9px;font-size:10px;text-transform:uppercase;letter-spacing:.6px;font-weight:700}
    .tag.new{background:var(--green)}
    .heart{position:absolute;right:12px;top:12px;width:34px;height:34px;border:0;border-radius:50%;background:#ffffffdf;color:#333}
    .heart.active{color:var(--accent)}
    .product-info{padding:14px 2px 0}
    .product-type{font-size:10px;text-transform:uppercase;letter-spacing:1.3px;color:var(--muted)}
    .product-name{font-size:14px;font-weight:600;margin:5px 0 7px;line-height:1.4}
    .price{font-size:14px;font-weight:700}
    .old-price{font-size:12px;color:#999;text-decoration:line-through;margin-left:8px;font-weight:400}
    .add-btn{width:100%;margin-top:13px;padding:11px;border:1px solid var(--ink);background:#fff;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;transition:.2s}
    .add-btn:hover{background:var(--ink);color:#fff}
    .deal{background:#f1eee8;padding:58px 0}
    .deal-inner{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:45px}
    .deal-photo{height:340px}
    .deal-photo img{height:100%;object-position:center 40%}
    .deal-copy h2{font-family:"Playfair Display",serif;font-size:clamp(32px,4vw,46px);margin-bottom:15px}
    .deal-copy p{color:var(--muted);font-size:14px;margin-bottom:22px;max-width:430px}
    .countdown{display:flex;gap:10px;margin:0 0 27px}
    .time-box{background:#fff;min-width:68px;text-align:center;padding:11px 8px}
    .time-box strong{display:block;font-size:22px}
    .time-box span{font-size:9px;text-transform:uppercase;letter-spacing:1px;color:var(--muted)}
    .benefits{padding:35px 0;border-bottom:1px solid var(--line)}
    .benefit-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px}
    .benefit{display:flex;gap:14px;align-items:center}
    .benefit i{font-size:22px;color:var(--accent);width:28px;text-align:center}
    .benefit strong{display:block;font-size:12px;text-transform:uppercase;letter-spacing:.5px}
    .benefit span{display:block;color:var(--muted);font-size:11px;margin-top:3px}
    .newsletter{padding:55px 0;background:var(--ink);color:#fff}
    .newsletter-inner{display:flex;align-items:center;justify-content:space-between;gap:35px}
    .newsletter h2{font-family:"Playfair Display",serif;font-size:30px;margin-bottom:8px}
    .newsletter p{color:#c9c9c4;font-size:13px}
    .newsletter-form{display:flex;width:min(450px,100%);border-bottom:1px solid #8b8b85}
    .newsletter-form input{background:transparent;border:0;outline:0;color:#fff;padding:13px 4px;flex:1;min-width:0}
    .newsletter-form input::placeholder{color:#aaa}
    .newsletter-form button{background:transparent;color:#fff;border:0;text-transform:uppercase;font-size:11px;font-weight:700;letter-spacing:1px;padding:0 4px}
    footer{padding:32px 0}
    .footer-inner{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}
    .footer-copy{color:var(--muted);font-size:11px}
    .socials{display:flex;gap:16px;color:#555}
    .socials a:hover{color:var(--accent)}
    .toast{position:fixed;bottom:22px;right:22px;background:var(--ink);color:#fff;padding:13px 18px;font-size:13px;z-index:50;opacity:0;transform:translateY(10px);transition:.25s;pointer-events:none}
    .toast.show{opacity:1;transform:translateY(0)}
    @media(max-width:900px){
      .nav-links{gap:15px}.hero-inner{min-height:450px}.hero-photo{height:390px}
      .product-grid{grid-template-columns:repeat(3,1fr)}.product-image{height:260px}
      .benefit-grid{grid-template-columns:repeat(2,1fr)}
    }
    @media(max-width:680px){
      .topbar .container{justify-content:center;text-align:center}
      .nav-wrap{min-height:68px}.menu-toggle{display:block}.nav-links{display:none;position:absolute;top:68px;left:0;right:0;background:#fff;padding:20px 5%;border-bottom:1px solid var(--line);flex-direction:column;gap:17px}
      .nav-links.open{display:flex}.nav-actions{gap:15px}.logo{font-size:25px}
      .hero-inner{grid-template-columns:1fr;gap:0;padding-top:35px}.hero-copy{padding:10px 0 30px}
      h1{font-size:43px}.hero-photo{height:330px;width:85%;margin-left:auto}
      .hero-sticker{width:85px;height:85px;left:-20px;bottom:20px}.hero-sticker strong{font-size:21px}
      .categories{padding-top:48px}.section-head{align-items:flex-start;flex-direction:column}.section-head h2{font-size:30px}
      .category-grid{grid-template-columns:1fr;gap:13px}.category-card{height:220px}
      .products-section{padding:45px 0 55px}.product-grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:25px 12px}.product-image{height:clamp(170px,55vw,260px)}
      .product-name{font-size:12px}.price{font-size:13px}.add-btn{font-size:9px;padding:10px 5px}
      .deal-inner{grid-template-columns:1fr;gap:28px}.deal-photo{height:260px}.deal{padding:42px 0}
      .newsletter-inner{align-items:flex-start;flex-direction:column;gap:22px}.newsletter-form{width:100%}
      .benefit-grid{gap:20px 12px}.benefit{align-items:flex-start;gap:9px}.benefit i{font-size:18px;width:22px}.benefit strong{font-size:10px}.benefit span{font-size:10px}
      .footer-inner{justify-content:center;text-align:center;flex-direction:column}
    }
  </style>
</head>
<body>
  <div class="topbar"><div class="container"><span><i class="fa-solid fa-truck-fast"></i> Gratis ongkir untuk pesanan tertentu</span><span>Temukan bahan favoritmu di Joymaker</span></div></div>
  <header>
    <div class="container nav-wrap">
      <a href="#" class="logo"><a href="#" class="logo">
    <img src="guestassets/images/joymaker.png" style="height: 45px; width: 90px;">
</a><span></span></a>
      <button class="icon-btn menu-toggle" id="menuToggle" aria-label="Buka menu"><i class="fa-solid fa-bars"></i></button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li><li><a href="#categories">Kategori</a></li><li><a href="#products">Produk</a></li><li><a href="#deal">Promo</a></li><li><a href="#contact">Kontak</a></li>
      </ul>
      <div class="nav-actions">
        <button class="icon-btn" aria-label="Cari" onclick="document.getElementById('products').scrollIntoView({behavior:'smooth'})"><i class="fa-solid fa-magnifying-glass"></i></button>
        <button class="icon-btn" aria-label="Akun"><i class="fa-regular fa-user"></i></button>
        <button class="icon-btn" aria-label="Keranjang"><i class="fa-solid fa-bag-shopping"></i><span class="cart-count" id="cartCount">0</span></button>
      </div>
    </div>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container hero-inner">
        <div class="hero-copy">
          <div class="eyebrow">Koleksi pilihan · 2026</div>
          <h1>Temukan gaya yang bercerita tentangmu.</h1>
          <p>Pilihan fashion dan lifestyle yang dirancang untuk menemani setiap momen. Simpel, nyaman, dan selalu percaya diri.</p>
          <a href="#products" class="btn">Belanja sekarang <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="hero-photo">
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=900&q=85" alt="Koleksi fashion modern">
          <div class="hero-sticker">NEW<br><strong>30%</strong><br>OFF</div>
        </div>
      </div>
    </section>

    <section class="categories container" id="categories">
      <div class="section-head"><div><h2>Belanja berdasarkan kategori</h2><p>Pilih koleksi yang paling cocok dengan gayamu.</p></div><a href="#products" class="text-link">Lihat semua <i class="fa-solid fa-arrow-right"></i></a></div>
      <div class="category-grid">
        <a href="#products" class="category-card" data-category="women"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=700&q=80" alt="Fashion wanita"><div class="category-label"><small>Koleksi terbaru</small><h3>Women's</h3></div></a>
        <a href="#products" class="category-card" data-category="accessories"><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80" alt="Aksesori"><div class="category-label"><small>Detail yang berarti</small><h3>Accessories</h3></div></a>
        <a href="#products" class="category-card" data-category="men"><img src="https://images.unsplash.com/photo-1516257984-b1b4d707412e?auto=format&fit=crop&w=700&q=80" alt="Fashion pria"><div class="category-label"><small>Gaya sehari-hari</small><h3>Men's</h3></div></a>
      </div>
    </section>

    <section class="products-section container" id="products">
      <div class="section-head"><div><h2>Produk pilihan</h2><p>Favorit pelanggan, siap melengkapi penampilanmu.</p></div>
        <div class="filters" role="group" aria-label="Filter produk">
          <button class="filter-btn active" data-filter="all">Semua</button><button class="filter-btn" data-filter="women">Wanita</button><button class="filter-btn" data-filter="accessories">Aksesori</button><button class="filter-btn" data-filter="men">Pria</button>
        </div>
      </div>
      <div class="product-grid" id="productGrid">
        <article class="product-card" data-category="men"><div class="product-image"><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=650&q=80" alt="Jam tangan minimalis"><span class="tag">Sale</span><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Lifestyle</div><h3 class="product-name">Classic Minimal Watch</h3><div class="price">Rp349.000 <span class="old-price">Rp429.000</span></div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="women"><div class="product-image"><img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=650&q=80" alt="Tas wanita"><span class="tag new">Baru</span><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Tas</div><h3 class="product-name">Everyday Shoulder Bag</h3><div class="price">Rp279.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="accessories"><div class="product-image"><img src="https://images.unsplash.com/photo-1509319117193-57bab727e09d?auto=format&fit=crop&w=650&q=80" alt="Kacamata hitam"><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Aksesori</div><h3 class="product-name">Everyday Sunglasses</h3><div class="price">Rp159.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="women"><div class="product-image"><img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=650&q=80" alt="Pakaian wanita"><span class="tag">Best seller</span><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Fashion</div><h3 class="product-name">Soft Neutral Outfit</h3><div class="price">Rp299.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="men"><div class="product-image"><img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=650&q=80" alt="Jaket kasual"><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Fashion pria</div><h3 class="product-name">Casual Streetwear</h3><div class="price">Rp389.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="accessories"><div class="product-image"><img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=650&q=80" alt="Perhiasan minimalis"><span class="tag new">Baru</span><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Perhiasan</div><h3 class="product-name">Golden Simple Necklace</h3><div class="price">Rp129.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="women"><div class="product-image"><img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&w=650&q=80" alt="Sepatu wanita"><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Footwear</div><h3 class="product-name">Daily Comfort Shoes</h3><div class="price">Rp319.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
        <article class="product-card" data-category="men"><div class="product-image"><img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=650&q=80" alt="Kaos basic"><button class="heart" aria-label="Favorit"><i class="fa-regular fa-heart"></i></button></div><div class="product-info"><div class="product-type">Essentials</div><h3 class="product-name">Everyday Basic Tee</h3><div class="price">Rp119.000</div><button class="add-btn">Tambah ke keranjang</button></div></article>
      </div>
    </section>

    <section class="deal" id="deal"><div class="container deal-inner">
      <div class="deal-photo"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=900&q=85" alt="Promo koleksi fashion"></div>
      <div class="deal-copy"><div class="eyebrow">Penawaran spesial</div><h2>Deal of the week</h2><p>Waktunya memperbarui koleksi favoritmu. Nikmati penawaran pilihan sebelum waktunya berakhir.</p>
        <div class="countdown"><div class="time-box"><strong id="days">03</strong><span>Hari</span></div><div class="time-box"><strong id="hours">12</strong><span>Jam</span></div><div class="time-box"><strong id="minutes">45</strong><span>Menit</span></div><div class="time-box"><strong id="seconds">00</strong><span>Detik</span></div></div>
        <a href="#products" class="btn">Lihat promo <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div></section>

    <section class="benefits"><div class="container benefit-grid">
      <div class="benefit"><i class="fa-solid fa-truck-fast"></i><div><strong>Pengiriman cepat</strong><span>Pesanan sampai dengan aman</span></div></div>
      <div class="benefit"><i class="fa-solid fa-wallet"></i><div><strong>Pembayaran mudah</strong><span>Metode pembayaran praktis</span></div></div>
      <div class="benefit"><i class="fa-solid fa-rotate-left"></i><div><strong>Retur mudah</strong><span>Bantuan untuk produk bermasalah</span></div></div>
      <div class="benefit"><i class="fa-solid fa-headset"></i><div><strong>Layanan pelanggan</strong><span>Kami siap membantu kamu</span></div></div>
    </div></section>

    <section class="newsletter" id="contact"><div class="container newsletter-inner">
      <div><h2>Jangan lewatkan kabar terbaru.</h2><p>Daftar newsletter untuk info koleksi baru dan promo spesial.</p></div>
      <form class="newsletter-form" id="newsletterForm"><input type="email" id="email" placeholder="Masukkan email kamu" aria-label="Alamat email" required><button type="submit">Berlangganan <i class="fa-solid fa-arrow-right"></i></button></form>
    </div></section>
  </main>

  <footer><div class="container footer-inner"><a href="#" class="logo"><img src="images/joymaker.png" style="height: 45px; width: auto;"><span>Joymaker.</span></a><div class="footer-copy">© <span id="year"></span> Colo Shop. Dibuat untuk pengalaman belanja yang lebih nyaman.</div><div class="socials"><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a><a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a></div></div></footer>
  <div class="toast" id="toast" role="status" aria-live="polite"></div>

  <script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
    navLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => navLinks.classList.remove('open')));

    document.querySelectorAll('.filter-btn').forEach(button => {
      button.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        const filter = button.dataset.filter;
        document.querySelectorAll('.product-card').forEach(card => {
          card.style.display = filter === 'all' || card.dataset.category === filter ? '' : 'none';
        });
      });
    });
    document.querySelectorAll('.category-card').forEach(card => {
      card.addEventListener('click', () => {
        const filter = card.dataset.category;
        document.querySelectorAll('.filter-btn').forEach(btn => {
          btn.classList.toggle('active', btn.dataset.filter === filter);
        });
        document.querySelectorAll('.product-card').forEach(item => {
          item.style.display = item.dataset.category === filter ? '' : 'none';
        });
      });
    });

    let cart = 0;
    const cartCount = document.getElementById('cartCount');
    const toast = document.getElementById('toast');
    let toastTimer;
    function showToast(message) {
      toast.textContent = message;
      toast.classList.add('show');
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => toast.classList.remove('show'), 2300);
    }
    document.querySelectorAll('.add-btn').forEach(button => {
      button.addEventListener('click', () => {
        cart++;
        cartCount.textContent = cart;
        showToast('Produk berhasil ditambahkan ke keranjang!');
      });
    });
    document.querySelectorAll('.heart').forEach(button => {
      button.addEventListener('click', () => {
        button.classList.toggle('active');
        const icon = button.querySelector('i');
        icon.classList.toggle('fa-regular');
        icon.classList.toggle('fa-solid');
      });
    });
    document.getElementById('newsletterForm').addEventListener('submit', event => {
      event.preventDefault();
      showToast('Terima kasih! Email kamu sudah tercatat untuk demo ini.');
      event.target.reset();
    });
    document.getElementById('year').textContent = new Date().getFullYear();

    // Countdown demo: menghitung mundur selama 3 hari dari saat halaman dibuka.
    let endTime = Date.now() + 3 * 24 * 60 * 60 * 1000;
    function updateCountdown() {
      let remaining = Math.max(0, endTime - Date.now());
      const days = Math.floor(remaining / 86400000);
      const hours = Math.floor((remaining % 86400000) / 3600000);
      const minutes = Math.floor((remaining % 3600000) / 60000);
      const seconds = Math.floor((remaining % 60000) / 1000);
      document.getElementById('days').textContent = String(days).padStart(2, '0');
      document.getElementById('hours').textContent = String(hours).padStart(2, '0');
      document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
      document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
  </script>
</body>
</html>
