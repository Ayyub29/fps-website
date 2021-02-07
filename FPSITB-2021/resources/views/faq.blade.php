@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/faq.css')}}" rel="stylesheet">
@endsection
@section('title', 'Frequently Asked Question | FPS ITB 2021');

@section('isi')
    <div class="main-background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-headers">
                            <h1 class="title-card">Frequently Asked Question </h5>
                        </div>
                        <div class="card-body">
                            <h2 class="category-title" >Umum </h4>
                            <h5 class="Question"> Kapan FPS ITB akan diadakan? </h5>
                            <p class="Answer"> FPS ITB akan diadakan pada tanggal 1-6 September 2020. </p>
                            <!-- PENDAFTARAN -->
                            <h2 class="category-title" >Pendaftaran </h4>
                            <h5 class="Question"> 1.	Bagaimana cara mendaftar untuk menjadi peserta FPS ITB? </h5>
                            <p class="Answer"> Panduan lengkap mengenai pendaftaran dapat dilihat di Buku Panduan Peserta yang dapat diunduh di situs resmi FPS ITB.</p>
                            <h5 class="Question"> 2.	Kapan pendaftaran lomba terakhir dibuka?</h5>
                            <p class="Answer"> Pendaftaran online dibuka pada tanggal 9 Desember 2019 - 14 Maret 2020. Panduan lengkap dapat dilihat di Buku Panduan Peserta yang dapat diunduh dari situs resmi FPS XXVI ITB 2020</p>
                            <h5 class="Question"> 3.	Jika mendaftar lebih dari 1 kategori, berapa rekaman yang harus dikirim? </h5>
                            <p class="Answer"> Jumlah rekaman yang harus dikirim sesuai dengan jumlah kategori yang didaftar.</p>
                            <h5 class="Question"> 4.	Kapan babak kualifikasi diumumkan? </h5>
                            <p class="Answer"> Babak kualifikasi akan diadakan pada bulan April, yaitu setelah pendaftaran ditutup.</p>
                            <h5 class="Question"> 5.	Apakah daftar peserta dapat dilihat sebelum lomba dimulai? </h5>
                            <p class="Answer"> Daftar peserta dan urutan penampilan dalam tiap kategori akan ditentukan oleh Panitia FPS XXVI ITB 2020 dan diumumkan secara online paling lambat 1 Agustus 2020.</p>
                            <h5 class="Question"> 6.	Apakah ada batasan maksimum dan minimum durasi rekaman? </h5>
                            <p class="Answer"> Durasi rekaman tidak dibatas</p>
                            <!-- PERLOMBAAN -->
                            <h2 class="category-title" >Perlombaan </h4>
                            <h5 class="Question"> 1.	Apakah peserta yang lolos babak kualifikasi harus berada di Bandung tanggal 1-6 September 2020? </h5>
                            <p class="Answer"> Ya. Panitia juga menyediakan paket akomodasi berupa penginapa dan transportasi dari penginapa ke venue perlombaan yang dapat.</p>
                            <h5 class="Question"> 2.	Apa boleh membawa lagu yang sama untuk dua kategori?</h5>
                            <p class="Answer"> Jika peserta berpartisipasi dalam beberapa kategori, lagu yang dibawakan dalam suatu kategori harus berbeda dengan lagu yang dibawakan dalam kategori lainnya.</p>
                            <h5 class="Question"> 3.	Apakah diizinkan dokumentasi selama acara berlangsung? </h5>
                            <p class="Answer"> Dokumentasi dalam bentuk apapun tidak diizinkan selama acara berlangsung, adapun dokumentasi berupa foto dan video akan dilakukan oleh panitia dan hasil dokumentasi dapat dibeli oleh peserta dan umum setelah acara berlangsung.</p>
                            <h5 class="Question"> 4.	Apakah bisa ditonton umum? </h5>
                            <p class="Answer"> Perlombaan yang diadakan pada tanggal 1-6 September 2020 dapat ditonton umum.</p>
                            <h5 class="Question">5.	Bagaimana cara membeli tiket untuk menonton perlombaan? </h5>
                            <p class="Answer"> Tiket akan dijual ketika mendekati hari perlombaan. Tiket bisa didapatkan secara online dengan pembelian melalui situs resmi FPS XXVI ITB 2020 dan secara offline dengan pembelian di booth yang tersedia di wilayah sekitar venue perlombaan.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection