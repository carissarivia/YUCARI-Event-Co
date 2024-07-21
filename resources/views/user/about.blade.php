@extends('user.layouts.app')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section id="about-header">
        <h1>Tentang Kami</h1>
    </section>
    <section id="about">
        <div class="container">
            <h2>Apa yang bisa kami lakukan?</h2>
            <div class="content">
                <img src="{{ asset('images/logo1.png') }}" alt="About Image">
                <div class="text">
                    <p>Di YUCARI Event & Co, kami menjunjung tinggi nilai-nilai inovasi, kepercayaan, dan profesionalisme. Kami terus berinovasi untuk menghadirkan ide-ide segar dan solusi yang efektif, memastikan bahwa setiap acara yang kami kelola menjadi lebih dari sekadar pertemuan, tetapi sebuah perayaan yang luar biasa. Dengan pelayanan yang ramah dan personal, kami berupaya untuk menjadi mitra terpercaya bagi klien kami, membantu mereka mewujudkan visi mereka menjadi kenyataan</p>
                    <h3>Visi Kami : </h3>
                    <p>Menjadi pemimpin dalam industri manajemen acara dengan menghadirkan pengalaman acara yang tak terlupakan, dikenal karena kualitas, inovasi, dan kepuasan pelanggan yang luar biasa.</p>
                    <h3>Misi Kami :</h3>
                    <p>1. Menghadirkan pengalaman acara yang unik dan tak terlupakan dengan kreativitas dan perhatian terhadap detail yang tinggi.</p>
                    <p>2. Menjadi mitra terpercaya bagi setiap klien dalam mewujudkan visi mereka untuk acara yang sempurna.</p>
                    <p>3. Terus berinovasi dan mengembangkan ide-ide segar serta solusi yang efektif untuk memenuhi kebutuhan acara yang beragam.</p>
                    <p>4. Memastikan setiap acara dijalankan dengan profesionalisme tinggi, memenuhi atau melampaui harapan klien dalam setiap tahap pelaksanaan.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <div class="container">
            <h2>Alamat Kami:</h2>
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.462830556676!2d101.4322864740661!3d0.5660347988917498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aa28b34923e7%3A0xc42009c2d8a2a7d8!2sJl.%20Umban%20Sari%20No.1%2C%20Umban%20Sari%2C%20Kec.%20Rumbai%2C%20Kota%20Pekanbaru%2C%20Riau%2028265!5e0!3m2!1sen!2sid!4v1689802852136!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section id="faq">
        <div class="container">
            <h2>FAQ tentang Layanan Penyelenggaraan Acara Kami</h2>
            <div class="faq-item">
                <button class="accordion">Layanan apa yang Anda tawarkan sebagai penyelenggara acara?</button>
                <div class="panel">
                    <p>Kami menawarkan serangkaian layanan komprehensif termasuk pemilihan tempat, koordinasi vendor, desain acara, dan manajemen di lokasi untuk memastikan acara Anda berjalan lancar dari awal hingga selesai.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">Seberapa jauh sebelumnya saya harus memesan layanan Anda?</button>
                <div class="panel">
                    <p>Kami menyarankan untuk memesan layanan kami setidaknya 6-12 bulan sebelumnya untuk memastikan cukup waktu untuk merencanakan dan mengamankan vendor dan tempat pilihan Anda.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">Bisakah Anda mengakomodasi permintaan atau tema khusus untuk acara?</button>
                <div class="panel">
                    <p>Ya, kami berspesialisasi dalam membuat acara yang dipersonalisasi dan bertema yang disesuaikan dengan preferensi dan visi unik Anda. Kami bekerja sama dengan Anda untuk mewujudkan ide Anda.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">Apa struktur harga Anda?</button>
                <div class="panel">
                    <p>Harga kami disesuaikan berdasarkan cakupan dan kompleksitas acara Anda. Kami menawarkan berbagai paket dan akan bekerja sama dengan Anda untuk mengembangkan rencana yang sesuai dengan anggaran Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="destination-wedding">
        <div class="container">
            <h2>Merencanakan sebuah acara?</h2>
            <p>Sebagai event organizer berpengalaman, kami berjanji untuk merencanakan setiap detail di setiap tahap, sesuai dengan cara profesional yang Anda inginkan.</p>
            <div class="gallery">
                <img src="{{ asset('images/project1.jpg') }}" alt="Gallery Image 1">
                <img src="{{ asset('images/project2.jpg') }}" alt="Gallery Image 2">
                <img src="{{ asset('images/project3.jpg') }}" alt="Gallery Image 3">
                <img src="{{ asset('images/project4.jpg') }}" alt="Gallery Image 4">
                <img src="{{ asset('images/project5.jpg') }}" alt="Gallery Image 5">
                <img src="{{ asset('images/project6.jpg') }}" alt="Gallery Image 6">
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container">
            <h2>Tim yang Luar Biasa</h2>
            <p>Kami memiliki tim profesional berpengalaman dan berdedikasi yang siap menjadikan hari acara Anda tak terlupakan.</p>
            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('images/yuda.jpg') }}" alt="Team Member 1">
                    <h3>M Prayuda Rahma Putra</h3>
                    <p>Koordinator Acara Formal</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/carissa.jpg') }}" alt="Team Member 2">
                    <h3>Carissa Arivia</h3>
                    <p>Koordinator Acara Non-Formal</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/repa.jpg') }}" alt="Team Member 3">
                    <h3>Reiva Try Aksary</h3>
                    <p>Staff Acara Formal</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/awa.jpg') }}" alt="Team Member 4">
                    <h3>Aurelia Zahwa Permata Hati</h3>
                    <p>Staff Acara Non-Formal</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <div class="container">
            <h2>Testimonial</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <p>"Layanan hebat dan perhatian terhadap detail. Sangat dianjurkan!"</p>
                    <h3>Louis Ederson</h3>
                    <p>Klien</p>
                </div>
                <div class="testimonial">
                    <p>"Jadikan hari pernikahan kami bebas stres dan berkesan."</p>
                    <h3>Teresha Clawn</h3>
                    <p>Klien</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var acc = document.getElementsByClassName("accordion");
        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    });
</script>
@endpush
