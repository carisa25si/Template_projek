!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Guest') - Joymaker</title>

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

           {{-- Start Main Content --}}
            @yield('content')
            {{-- End Main Content --}}

            {{-- Start Footer --}}
            @include('layouts.guest.footer')
            {{-- End Footer --}}
        </div>
    </main>

    {{-- Start JS --}}
    @include('layouts.guest.js')
    {{-- End JS --}}


</body>
</html>
