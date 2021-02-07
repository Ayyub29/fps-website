@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/tim-artistik.css')}}" rel="stylesheet">
@endsection
@section('title', 'Dewan Artistik | FPS ITB 2021');

@section('isi')
<div class="card">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="avip-priatna">
                <div class="card-headers">
                    <h5 class="title-card"> Dewan Artistik </h5>
                </div>
                <div class="image">
                    <img src="{{asset('img/avip-priatna.png')}}" style="width:100%; height:auto;" alt="...">
                </div>
                <div class="card-body">
                    <div class="bio-desc card">
                        <h5 class="judul-bio">Biodata</h5>
                        <h5 class="judul-kategori">NAMA</h5>
                        <p class="desc-bio">Avip Priatna</p>

                        <h5 class="judul-kategori">TANGGAL LAHIR</h5>
                        <p class="desc-bio">29 Desember 1962</p>

                        <h5 class="judul-kategori">TEMPAT LAHIR</h5>
                        <p class="desc-bio">Bogor</p>

                        <h5 class="judul-kategori">PENDIDIKAN</h5>
                        <p class="desc-bio">
                            Universitas Parahyangan, Bandung <br><br>
                            Hochschule fur Muzick und Darstellende Kunst di Vienna, Austria.
                        </p>

                        <h5 class="judul-kategori">KARIR</h5>
                        <p class="desc-bio-left"> 
                            Konduktor Orchestra Ensemble Kanazawa (OEK), Jepang.
                            <br><br>
                            Konduktor Macau Orchestra di konser Jakarta dan Macau.
                            <br><br>
                            Konser seri Simfoni untuk Bangsa bersama Jakarta Concert Orchestra.
                            <br><br>
                            Founder dan direktur musik Jakarta Concert Orchestra (JCO), Batavia Madrigal Singers (BMS), The Resonanz Children’s Choir dan The Resonanz Music Studio (TRMS).
                            <br><br>
                            Mengajar vocal dan conducting di Ther Resonanz Music Studio.
                        </p>
                        <h5 class="judul-kategori">PENGHARGAAN</h5>
                        <p class="desc-bio-left">
                            2015, Penghargaan Kebudayaan oleh Kementrian Pendidikan dan Kebudayaan, kategori Pencipta, Pelopor, dan Pembaru.
                            <br><br>
                            2013 dan 2017, finalis European Grand Prix for Choral Singing (EGP.
                            <br><br>
                            2018, Grand Champion European Grand Prix for Choral Singing.
                            <br><br>
                            2019, The Best Mixed Choir; The Best Stage Performer; dan Audience Choice Award pada Kompetisi Florilege Vocal de Tours di Kota Tours,  Perancis bersama Batavia Madrigal Singers. 
                            <br><br>
                            2019, Juara I kategori Polyphony, Juara I kategori Basque and Popular Music, dan Audience Choice Award yang menjadikan BMS meraih Grand Prize ( Juara Umum ) di kompetisi 51st Tolosa Choral Contest di Tolosa, Spanyol. 
                        </p>
                    </div>
                    <div class="text-desc">
                        <h5 class="nama-dewan"> Avip Priatna </h5>
                        <div class="desc-title">Siapakah Avip?</div>
                        <p class="desc"> 
                            Avip Priatna Mag Art. adalah salah satu konduktor Indonesia yang paling berhasil saat ini. Setelah menyelesaikan studinya di Teknik Arsitektur, Universitas Katolik Parahyangan, Bandung, Avip melanjutkan pendidikannya di University of Music and Performing Arts di Wina, Austria, dengan bantuan dari Pemerintah Austria serta beasiswa dari Rotary Club. Konduktor kelahiran Bogor ini belajar orchestral conducting dari dirigen terkenal, Leopold Hager serta choral conducting dari Prof. Gunther Theuring dan tahun 1998 ia menyelesaikan Magister Artium dengan beasiswa dari Universitas Katolik Parahyangan.
                            <br><br><br>
                            Avip adalah pendiri sekaligus direktur musik dari Jakarta Concert Orchestra (JCO), Batavia Madrigal Singers (BMS), The Resonanz Children’s Choir dan The Resonanz Music Studio (TRMS). Avip juga aktif sebagai pengajar vokal dan conducting di The Resonanz Music Studio yang secara resmi didirikannya tahun 2007.
                        </p>
                        <div class="desc-title">Karir Avip</div>
                        <p class="desc"> 
                        Tahun 2006, Avip diundang menjadi konduktor Orchestra Ensemble Kanazawa (OEK), Jepang. Sebuah kebanggaan bagi Indonesia memiliki putra terbaik dalam bidang "conducting" sekaligus menjadi pencapaian yang tinggi saat itu untuk dapat menjadi konduktor sebuah orkestra besar dan ternama di Jepang. 
                        <br><br><br>
                        Bersama Orchestra Ensemble Kanazawa, Avip menggelar konser di Jepang, Singapura dan Macau. Di tahun 2007, Avip bersama Orchestra Ensemble Kanazawa meluncurkan album dengan label Warner Classic Japan, dengan membawakan karya Carl Maria von Weber: Freischütz Overture, Clarinet Concerto nr. 1 dan Mass nr.1 in E flat Major. 
                        <br><br><br>
                        Ditahun yang sama, Avip juga menjadi konduktor Macau Orchestra dengan konser di Jakarta dan Macau membawakan Gloria and Carols karya John Rutter, serta Carol Hutchinson’s Symphony dan Christmas Carols.
                        <br><br><br>
                        Kemampuan Avip dalam mengaba mencakup hampir seluruh literatur musik klasik dari simfoni sampai opera, dari musik abad 17 hingga Queen, Beatles dan Michael Jackson. Semenjak 2010, Avip bersama Jakarta Concert Orchestra menggelar konser seri Simfoni Untuk Bangsa yang selalu membawakan karya-karya komposer anak bangsa dengan aransemen yang baru dan segar.
                        <br><br><br>
                        Avip tiada hentinya mengajak kelompok2 yang dipimpinnya untuk terus berlatih dan membiasakan mereka tampil dalam konser2 yang rutin diadakannya setiap tahun selain untuk mengasah dan meningkatkan kemampuan bermusik mereka, sekaligus memberikan sajian berkualitas kepada masyarakat Indonesia sehingga perhatian dan apresiasi terhadap musik klasik dan Paduan Suara semakin meningkat. Salah satu kekuatan dari Avip adalah kemampuannya dalam memilih repertoire dan menyusun program serta keahliannya dalam menginterpretasi sebuah mahakarya musik sehingga semua konser yang digelarnya selalu menarik, tidak membosankan dan mengundang decak kagum penonton dan media. 

                        </p>
                        <div class="desc-title">Penghargaan</div>
                        <p class="desc"> 
                            Di tahun 2015, Avip Priatna mendapatkan Penghargaan Kebudayaan oleh Kementrian Pendidikan dan Kebudayaan, kategori Pencipta, Pelopor, dan Pembaru.
                            <br><br><br>
                            Selain dikenal sebagai pengaba orkestra, Avip juga boleh dikatakan adalah pengaba paduan suara terbaik di Indonesia sekaligus merupakan putra bangsa yang merawat, melatih dan memiliki kemampuan yang mumpuni sebagai pengaba orkestra dan paduan suara secara bersamaan. Bersama Batavia Madrigal Singers yang dipimpinnya, Avip telah berulang kali memenangkan kompetisi paduan suara di dunia, antara lain sebagai finalis European Grand Prix for Choral Singing (EGP) tahun 2013 dan 2017 dan bersama The Resonanz Children’s Choir berhasil menjadi Grand Champion European Grand Prix for Choral Singing 2018 (sebuah kompetisi paduan suara tertua dan tersulit di dunia)
                            <br><br><br>
                            Tahun 2019, Avip kembali membawa Batavia Madrigal Singers meraih kemenangan di kompetisi Paduan Suara “Florilege Vocal de Tours” di kota Tours, Perancis yang merupakan bagian dari rangkaian kompetisi European Grand Prix dengan 3 penghargaan yaitu : The Best Mixed Choir; The Best Stage Performer; dan Audience Choice Award, dan baru-baru ini ia juga sukses menggetarkan panggung 51st Tolosa Choral Contest di Tolosa, Spanyol bersama Batavia Madrigal Singers dengan memenangkan Juara I kategori Polyphony, Juara I kategori Basque and Popular Music, dan Audience Choice Award yang menjadikan BMS meraih Grand Prize ( Juara Umum ) dan berhak tampil untuk ketiga kalinya berlaga di babak Grand Final European Grand Prix for Choral Singing yang kali ini diada di Debrecen, Hongaria bulan Juli tahun 2020.
                            <br><br><br>
                            Selengkapnya tentang Avip Priatna dapat dilihat di <a href="https://www.avippriatna.com" style="text-decoration:none;"> www.avippriatna.com. </a>

                        </p>
                    </div>
                </div>
                <div class="slide-control d-flex justify-content-between">
                    <a class="carousel-control-prevs" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="desc-icon">Adi Nugroho</span>
                    </a>
                    <a class="carousel-control-nexts" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="desc-icon">Aning Katamsih</span>    
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="carousel-item" id="aning-katamsih">
                <div class="card-headers">
                    <h5 class="title-card"> Dewan Artistik </h5>
                </div>
                <div class="image">
                    <img src="{{asset('img/aning-katamsih.png')}}" style="width:40%; height:auto; margin-left:40%; margin-right:50%;" alt="...">
                </div>
                <div class="card-body">
                    <div class="bio-desc card">
                        <h5 class="judul-bio">Biodata</h5>
                        <h5 class="judul-kategori">NAMA</h5>
                        <p class="desc-bio">Aning Katamsih</p>

                        <h5 class="judul-kategori">TANGGAL LAHIR</h5>
                        <p class="desc-bio">3 Juni 1969</p>

                        <h5 class="judul-kategori">TEMPAT LAHIR</h5>
                        <p class="desc-bio">Cilacap</p>

                        <h5 class="judul-kategori">PENDIDIKAN</h5>
                        <p class="desc-bio">
                            Sekolah Musik Yayasan Pendidikan Musik
                        </p>

                        <h5 class="judul-kategori">KARIR</h5>
                        <p class="desc-bio-left"> 
                            Pengajar piano dan vokal di Sekolah Musik YPM.
                            <br><br>
                            Pengajar di The Resonanz Music Studio.
                            <br><br>
                            Principal Conductor Paduan Suara Mahasiswa Universitas Indonesia Paragita.
                            <br><br>
                            Menerbitkan buku Klasik Indonesia tahun 2008.
                            <br><br>
                            Editor buku Panduan Pelafalan Seriosa Indonesia (2011).
                            <br><br>
                            Editor buku Antologi Musik Klasik Indonesia (2013).
                        </p>
                        <h5 class="judul-kategori">PENGHARGAAN</h5>
                        <p class="desc-bio-left">
                            2017, 2nd Prize Mixed Choir Category dan 3rd Prize Folksong Category pada 35 Festival Internacional De Musiica de Cantonigros, Spanyol.
                        </p>
                    </div>
                    <div class="text-desc">
                        <h5 class="nama-dewan"> Aning Katamsih </h5>
                        <div class="desc-title">Siapakah Aning?</div>
                        <p class="desc"> 
                            Aning mendapat pelajaran vokal pertama dari ibunya sendiri yaitu soprano Pranawengrum Katamsi, sebelum melanjutkan pendidikan vokal di Sekolah Musik Yayasan Pendidikan Musik di bawah bimbingan Catharina W. Leimena dan Lee Alison Sibley. Ia pun pernah mengikuti masterclass vokal dari Ruth Drucker, Andrea Ehrenreich, Lee Alison Sibley, Adib Fazah, dan Rudolf Jansen.
                            <br><br><br>
                            Selain vokal, Aning juga menekuni bidang piano di bawah bimbingan Susiana A. Wibowo dan Iravati M. Sudiarso di Sekolah Musik YPM. Saat ini Aning menjadi pengajar piano dan vokal di Sekolah Musik YPM dan The Resonanz Music Studio. Selain karir solonya, Aning Katamsi adalah Principal Conductor Paduan Suara Mahasiswa Universitas Indonesia Paragita.
                            <br><br><br>
                            Berbagai buku pun sudah diterbitkan oleh Aning, diantaranya buku Klasik Indonesia yang diterbitkan pada tahun 2008 yang berisi kumpulan lagu Seriosa Indonesia karya Binsar Sitompul, F.X Sutopo, dan Mochtar Embut. Kemudian ia bekerjasama dengan Dewan Kesenian Jakarta menjadi salah satu editor pada buku: Panduan Pelafalan Seriosa Indonesia (2011) dan Antologi Musik Klasik Indonesia (2013).
                        </p>
                        
                        <div class="desc-title">Prestasi</div>
                        <p class="desc"> 
                            Prestasi terakhir yang diraih bersama Paragita adalah meraih 2nd Prize Mixed Choir Category dan 3rd Prize Folksong Category pada 35 Festival Internacional De Música de Cantonigròs, Spanyol pada tahun 2017.
                        </p>
                    </div>
                </div>
                <div class="slide-control d-flex justify-content-between">
                    <a class="carousel-control-prevs" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="desc-icon">Avip Priatna</span>
                    </a>
                    <a class="carousel-control-nexts" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="desc-icon">Adi Nugroho</span>    
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="carousel-item" id="adi-nugroho">
                <div class="card-headers">
                    <h5 class="title-card"> Dewan Artistik</h5>
                </div>
                <div class="image">
                    <img src="{{asset('img/gambar-sejuta-umat.png')}}" style="width:100%; height:450px;" alt="...">
                </div>
                <div class="card-body">
                    <div class="bio-desc card bcard">
                    </div>
                    <div class="text-desc">
                        <h5 class="nama-dewan"> Adi Nugroho </h5>
                        <p class="desc"> 
                            Festival Grup Vokal merupakan pra acara dari Festival Paduan Suara yang berupa perlombaan antar grup vokal dalam lingkup Institut Teknologi Bandung yang mengajak Himpunan Mahasiswa Jurusan dan Mahasiswa Tahap Persiapan Bersama sebagai peserta. 
                            Acara ini bersifat internal di dalam Institut Teknologi Bandung dan bertujuan untuk menambah musikalitas para mahasiswa/i Institut Teknologi Bandung.
                            Adapun pemenang dari Festival Grup Vokal 2017 adalah sebagai berikut :
                        </p>
                    </div>
                </div>
                <div class="slide-control d-flex justify-content-between">
                    <a class="carousel-control-prevs" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="desc-icon">Aning Katamsih</span>
                    </a>
                    <a class="carousel-control-nexts" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="desc-icon">Avip Priatna</span>    
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection