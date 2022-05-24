<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    // use HasFactory;
    private static $problems=[
        [
        'title'=>'Judul Problem Pertama',
        'slug'=>'judul-problem-pertama',
        'video1'=>'<iframe class="col-md-12 lg-12" src="https://www.youtube.com/embed/3NL8u8Ff4a4"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'video2'=>'<iframe class="col-md-12" src="https://www.youtube.com/embed/9wncO5AYgw8"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'video3' => '<iframe class="col-md-12" src="https://www.youtube.com/embed/KtUNSjXMK1U"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'penulis'=>'Akbar Tri Prakoso',
        'deskripsi'=>'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, facilis nulla voluptate mollitia iure doloribus assumenda incidunt. Nobis eos, ea quibusdam doloribus quidem, distinctio facilis at cum commodi, itaque debitis?</p>',
        'pdf'=>'<iframe src="http://eprints.ums.ac.id/31912/2/BAB%20I.pdf" class="col-md-12 lg-12" style="height:300px;">
            </iframe>',
        'sound1'=>'Dari Mata.mp3',
        'sound2'=>'Kembali Berdansa .mp3',
        'sound3'=>'lagu Rindu .mp3',
        'body'=>'<p>1
        BAB 1
        PENDAHULUAN
        A. Latar Belakang Masalah
        Perkembangan teknologi informasi dari tahun ke tahun selalu
        mengalami perkembangan yang sangat pesat. Banyaknya fasilitas
        kemudahan-kemudahan yang ditimbulkan oleh perkembangan teknologi
        informasi secara langsung berdampak kepada kegiatan organisasi.
        Dampak dari perkembangan teknologi informasi yang terjadi memacu
        organisasi-organisasi untuk tetap exist serta dapat meningkatkan prestasi
        yang dijalankannya. Peran teknologi informasi menitikberatkan pada
        pengaturan sistem informasi, selain itu teknologi informasi dapat
        memenuhi kebutuhan organisasi dengan sangat cepat, tepat waktu,
        relevan, dan akurat (Ismanto, 2010).
        Perkembangan teknologi informasi saat ini sudah mulai merambah
        ke berbagai bidang kehidupan dan tidak dapat dipungkiri bahwa teknologi
        informasi dapat meningkatkan efektivitas dan efisiensi kerja suatu
        organisasi. Oleh karena itu, sebelum mengimplementasikannya, sebaiknya
        pengembang sistem memiliki pemahaman mengenai faktor-faktor yang
        dapat mempengaruhi perilaku pemakai dalam memanfaatkan TI (Darmini,
        2009).
        2
        Di Indonesia penelitian tentang faktor-faktor yang mempengaruhi
        pemanfaatan TI telah banyak dilakukan. Tjhai (2003) meneliti faktorfaktor yang mempengaruhi
        pemanfaatan teknologi informasi dan pengaruh
        pemanfaatan teknologi informasi terhadap kinerja Akuntan Publik yang
        termasuk dalam BIG FIVE di Indonesia. Hasil penelitiannya menunjukkan
        bahwa terdapat hubungan yang positif dan signifikan antara faktor sosial
        dengan pemanfaatan teknologi informasi, sedangkan faktor affect
        memiliki hubungan positif dan tidak signifikan dengan pemanfaatan
        teknologi informasi. Hasil penelitiannya juga menunjukkan hubungan
        yang negatif dan signifikan antara faktor konsekuensi jangka panjang
        dengan pemanfaatan teknologi informasi. Sebaliknya, faktor kompleksitas,
        kesesuaian tugas dan kondisi yang memfasilitasi mempunyai hubungan
        negatif dan tidak signifikan dengan pemanfaatan teknologi informasi.
        Teknologi informasi meliputi teknologi komputer (computing
        technology) dan teknologi jaringan yang digunakan untuk memproses dan
        menyebarkan informasi baik itu yang bersifat finansial atau non finansial
        (Bodnar dan Hopwood, 2006). Teknologi informasi khususnya teknologi
        komputer sangat berpotensi untuk memperbaiki performa individu dan
        organisasi, karenanya banyak pengambil keputusan menginvestasikan
        dana untuk teknologi informasi. Tetapi harus disadari bahwa investasi di
        bidang teknologi informasi membutuhkan dana yang besar (Diana dkk,
        2010).
        3
        Teknologi informasi memiliki peran yang strategis dan signifikan
        dalam organisasi, selain itu bagi organisasi merupakan suatu keharusan
        untuk mampu menguasai secara teknis. Teknis kinerja dari sebuah sistem
        informasi adalah menangkap, mentransmisikan, menyimpan, mengambil,
        memanipulasi, dan menampilakan informasi guna meningkatkan kualitas
        yang diperlukan dalam proses pengambilan keputusan (Ismanto, 2010).
        Pemanfaatan teknologi informasi merupakan sarana
        penunjang/pendorong bagi organisasi dalam mencapai tujuan organisasi.
        Pemanfaatan teknologi informasi dapat dilakukan secara efektif jika
        anggota dalam organisasi dapat menggunakan teknologi tersebut dengan
        baik. Pemanfaatan teknologi yang efektif dapat meningkatkan kinerja
        (Diana dkk, 2010). Kinerja berhubungan dengan pencapaian serangkaian
        tugas-tugas yang dilaksanakan oleh individu-individu didalam organisasi
        (Tjhai, 2003). Sehingga semakin tinggi kinerja individu semakin
        meningkat pula efektifitas, produktivitas dan kualitas pelayanan individu
        tersebut.
        Penelitian ini merupakan replikasi dari penelitian sebelumnya
        dengan perbedaan waktu dan tempat yang diteliti. Sebelumnya, Retriana
        (2013) telah meneliti pengaruh pemanfaatana teknologi informasi terhadap
        kinerja individual pada Kantor Dinas Kependudukan dan Pencatatan Sipil
        Kabupaten Wonogiri. Hasil penelitian Retriana (2013) menunjukkan faktor
        sosial, affect (perasaan individu), kompleksitas, kesesuaian tugas, kondisi
        yang memfasilitasi berpengaruh signifikan sedangkan konsekuensi jangka
        4
        panjang tidak berpengaruh signifikan terhadap pemanfaatan teknologi
        informasi. Berdasarkan hasil penelitian di atas, terdapat beberapa hasil
        yang berbeda antara peneliti satu dengan lainnya. Oleh karena itu, penulis
        ingin meneliti kembali pengaruh pemanfaatan teknologi informasi
        terhadap kinerja individual pada KPP Pratama Sukoharjo.
        Berdasarkan uraian tersebut, maka peneliti tertarik untuk
        melakukan penelitian yang berjudul:
        “PENGARUH PEMANFAATAN TEKNOLOGI INFORMASI
        TERHADAP KINERJA INDIVIDUAL (Studi Kasus pada KPP
        Pratama Sukoharjo)”.
        B. Perumusan Masalah
        Berdasarkan latar belakang tersebut, permasalahan yang akan
        diteliti dalam penelitian ini adalah sebagai berikut:
        1. Apakah faktor sosial berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        2. Apakah affect (perasaan individu) berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        3. Apakah kompleksitas berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        4. Apakah kesesuaian tugas berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        5
        5. Apakah konsekuensi jangka panjang berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        6. Apakah kondisi yang memfasilitasi berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        C. Tujuan Penelitian
        Sesuai dengan perumusan masalah yang dipaparkan, tujuan utama
        yang ingin dicapai dalam penelitian ini adalah sebagai berikut:
        1. Untuk menguji pengaruh faktor sosial terhadap kinerja individual pada
        KPP Pratama Sukoharjo.
        2. Untuk menguji pengaruh affect (perasaan individu) terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        3. Untuk menguji pengaruh kompleksitas terhadap kinerja individual
        pada KPP Pratama Sukoharjo.
        4. Untuk menguji pengaruh kesesuaian tugas terhadap kinerja individual
        pada KPP Pratama Sukoharjo.
        5. Untuk menguji pengaruh konsekuensi jangka panjang terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        6. Untuk menguji pengaruh kondisi yang memfasilitasi terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        6
        D. Manfaat Penelitian
        Dengan dilakukanya penelitian ini diharapkan dapat memberikan
        manfaat sebagai berikut :
        1. Manfaat Teoritis
        Hasil penelitian ini diharapkan dapat memperkaya wawasan
        pengetahuan yang berhubungan dengan pemanfaatan sistem teknologi
        pada suatu organisasi atau institusi.
        2. Manfaat Praktis
        a. Bagi objek penelitian
        Dari penelitian ini diharapkan dapat memberikan informasi bagi
        karyawan Kantor Pelayanan Pajak Pratama Sukoharjo serta sebagai
        bahan pertimbangan dalam menentukan kebijakan untuk
        meningkatkan kinerja individual.
        b. Bagi peneliti lain
        Hasil penelitian ini juga diharapkan dapat memberikan informasi
        tambahan atau pembanding bagi peneliti lain yang penelitiannya
        sejenis.
        E. Sistematika Penulisan
        Sistematika penulisan yang diajukan dalam penyusunan skripsi ini
        untuk memberikan gambaran dari permasalahan pokok yang dicakup
        dalam uraian ringkas pada masing-masing bab. Adapun sistematika
        penulisan ini sebagai berikut:
        7
        BAB I PENDAHULUAN
        Bab ini menguraikan latar belakang, perumusan masalah,
        tujuan penelitian, manfaat penelitian, dan sistematika
        penulisan skripsi.
        BAB II TINJAUAN PUSTAKA
        Bab ini berisi tentang landasan teori yang mendasari
        pembahasan secara detail dan digunakan sebagai dasar
        untuk menganalisis, turunan hasil-hasil penelitian
        terdahulu, dan informasi lain yang membentuk kerangka
        teori yang berguna dalam penyusunan penelitian ini.
        BAB III METODE PENELITIAN
        Bab ini berisi metode yang dipilih untuk memperoleh
        jawaban atas permasalahan yang ada, populasi dan sampel,
        data, teknik pengumpulan data, variabel penelitian, dan
        pengukurannya, analisis data, dan pengujian hipotesis.
        BAB IV ANALISIS DATA DAN PEMBAHASAN
        Pada intinya bab ini berisi penyajian dan analisis data. Pada
        bab ini peneliti menyajikan hasil pengumpulan serta
        analisis data, sekaligus menemukan jawaban atas hipotesis
        yang telah dikemukakan pada bab sebelumnya.
        8
        BAB V PENUTUP
        Bab ini merupakan bagian akhir dari laporan penelitian
        yang berisi simpulan, keterbatasan penelitian, dan saransaran. </p>',
        ],
        [
        'title'=>'Judul Problem Kedua',
        'slug'=>'judul-problem-kedua',
        'video1'=>'<iframe class="col-md-12 lg-12" src="https://www.youtube.com/embed/3NL8u8Ff4a4"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'video2'=>'<iframe class="col-md-12" src="https://www.youtube.com/embed/9wncO5AYgw8"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'video3' => '<iframe class="col-md-12" src="https://www.youtube.com/embed/KtUNSjXMK1U"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>',
        'penulis'=>'Huda Dziky Prasetyo',
        'deskripsi'=>'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, facilis nulla voluptate mollitia iure doloribus assumenda incidunt. Nobis eos, ea quibusdam doloribus quidem, distinctio facilis at cum commodi, itaque debitis?</p>',
        'pdf'=>'<iframe src="http://eprints.ums.ac.id/31912/2/BAB%20I.pdf" class="col-md-12 lg-12" style="height:300px;">
            </iframe>',
        'sound1'=>'Dari Mata.mp3',
        'sound2'=>'Kembali Berdansa .mp3',
        'sound3'=>'lagu Rindu .mp3',
        'body'=>'<p>1
        BAB 1
        PENDAHULUAN
        A. Latar Belakang Masalah
        Perkembangan teknologi informasi dari tahun ke tahun selalu
        mengalami perkembangan yang sangat pesat. Banyaknya fasilitas
        kemudahan-kemudahan yang ditimbulkan oleh perkembangan teknologi
        informasi secara langsung berdampak kepada kegiatan organisasi.
        Dampak dari perkembangan teknologi informasi yang terjadi memacu
        organisasi-organisasi untuk tetap exist serta dapat meningkatkan prestasi
        yang dijalankannya. Peran teknologi informasi menitikberatkan pada
        pengaturan sistem informasi, selain itu teknologi informasi dapat
        memenuhi kebutuhan organisasi dengan sangat cepat, tepat waktu,
        relevan, dan akurat (Ismanto, 2010).
        Perkembangan teknologi informasi saat ini sudah mulai merambah
        ke berbagai bidang kehidupan dan tidak dapat dipungkiri bahwa teknologi
        informasi dapat meningkatkan efektivitas dan efisiensi kerja suatu
        organisasi. Oleh karena itu, sebelum mengimplementasikannya, sebaiknya
        pengembang sistem memiliki pemahaman mengenai faktor-faktor yang
        dapat mempengaruhi perilaku pemakai dalam memanfaatkan TI (Darmini,
        2009).
        2
        Di Indonesia penelitian tentang faktor-faktor yang mempengaruhi
        pemanfaatan TI telah banyak dilakukan. Tjhai (2003) meneliti faktorfaktor yang mempengaruhi
        pemanfaatan teknologi informasi dan pengaruh
        pemanfaatan teknologi informasi terhadap kinerja Akuntan Publik yang
        termasuk dalam BIG FIVE di Indonesia. Hasil penelitiannya menunjukkan
        bahwa terdapat hubungan yang positif dan signifikan antara faktor sosial
        dengan pemanfaatan teknologi informasi, sedangkan faktor affect
        memiliki hubungan positif dan tidak signifikan dengan pemanfaatan
        teknologi informasi. Hasil penelitiannya juga menunjukkan hubungan
        yang negatif dan signifikan antara faktor konsekuensi jangka panjang
        dengan pemanfaatan teknologi informasi. Sebaliknya, faktor kompleksitas,
        kesesuaian tugas dan kondisi yang memfasilitasi mempunyai hubungan
        negatif dan tidak signifikan dengan pemanfaatan teknologi informasi.
        Teknologi informasi meliputi teknologi komputer (computing
        technology) dan teknologi jaringan yang digunakan untuk memproses dan
        menyebarkan informasi baik itu yang bersifat finansial atau non finansial
        (Bodnar dan Hopwood, 2006). Teknologi informasi khususnya teknologi
        komputer sangat berpotensi untuk memperbaiki performa individu dan
        organisasi, karenanya banyak pengambil keputusan menginvestasikan
        dana untuk teknologi informasi. Tetapi harus disadari bahwa investasi di
        bidang teknologi informasi membutuhkan dana yang besar (Diana dkk,
        2010).
        3
        Teknologi informasi memiliki peran yang strategis dan signifikan
        dalam organisasi, selain itu bagi organisasi merupakan suatu keharusan
        untuk mampu menguasai secara teknis. Teknis kinerja dari sebuah sistem
        informasi adalah menangkap, mentransmisikan, menyimpan, mengambil,
        memanipulasi, dan menampilakan informasi guna meningkatkan kualitas
        yang diperlukan dalam proses pengambilan keputusan (Ismanto, 2010).
        Pemanfaatan teknologi informasi merupakan sarana
        penunjang/pendorong bagi organisasi dalam mencapai tujuan organisasi.
        Pemanfaatan teknologi informasi dapat dilakukan secara efektif jika
        anggota dalam organisasi dapat menggunakan teknologi tersebut dengan
        baik. Pemanfaatan teknologi yang efektif dapat meningkatkan kinerja
        (Diana dkk, 2010). Kinerja berhubungan dengan pencapaian serangkaian
        tugas-tugas yang dilaksanakan oleh individu-individu didalam organisasi
        (Tjhai, 2003). Sehingga semakin tinggi kinerja individu semakin
        meningkat pula efektifitas, produktivitas dan kualitas pelayanan individu
        tersebut.
        Penelitian ini merupakan replikasi dari penelitian sebelumnya
        dengan perbedaan waktu dan tempat yang diteliti. Sebelumnya, Retriana
        (2013) telah meneliti pengaruh pemanfaatana teknologi informasi terhadap
        kinerja individual pada Kantor Dinas Kependudukan dan Pencatatan Sipil
        Kabupaten Wonogiri. Hasil penelitian Retriana (2013) menunjukkan faktor
        sosial, affect (perasaan individu), kompleksitas, kesesuaian tugas, kondisi
        yang memfasilitasi berpengaruh signifikan sedangkan konsekuensi jangka
        4
        panjang tidak berpengaruh signifikan terhadap pemanfaatan teknologi
        informasi. Berdasarkan hasil penelitian di atas, terdapat beberapa hasil
        yang berbeda antara peneliti satu dengan lainnya. Oleh karena itu, penulis
        ingin meneliti kembali pengaruh pemanfaatan teknologi informasi
        terhadap kinerja individual pada KPP Pratama Sukoharjo.
        Berdasarkan uraian tersebut, maka peneliti tertarik untuk
        melakukan penelitian yang berjudul:
        “PENGARUH PEMANFAATAN TEKNOLOGI INFORMASI
        TERHADAP KINERJA INDIVIDUAL (Studi Kasus pada KPP
        Pratama Sukoharjo)”.
        B. Perumusan Masalah
        Berdasarkan latar belakang tersebut, permasalahan yang akan
        diteliti dalam penelitian ini adalah sebagai berikut:
        1. Apakah faktor sosial berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        2. Apakah affect (perasaan individu) berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        3. Apakah kompleksitas berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        4. Apakah kesesuaian tugas berpengaruh terhadap kinerja individual pada
        KPP Pratama Sukoharjo?
        5
        5. Apakah konsekuensi jangka panjang berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        6. Apakah kondisi yang memfasilitasi berpengaruh terhadap kinerja
        individual pada KPP Pratama Sukoharjo?
        C. Tujuan Penelitian
        Sesuai dengan perumusan masalah yang dipaparkan, tujuan utama
        yang ingin dicapai dalam penelitian ini adalah sebagai berikut:
        1. Untuk menguji pengaruh faktor sosial terhadap kinerja individual pada
        KPP Pratama Sukoharjo.
        2. Untuk menguji pengaruh affect (perasaan individu) terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        3. Untuk menguji pengaruh kompleksitas terhadap kinerja individual
        pada KPP Pratama Sukoharjo.
        4. Untuk menguji pengaruh kesesuaian tugas terhadap kinerja individual
        pada KPP Pratama Sukoharjo.
        5. Untuk menguji pengaruh konsekuensi jangka panjang terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        6. Untuk menguji pengaruh kondisi yang memfasilitasi terhadap kinerja
        individual pada KPP Pratama Sukoharjo.
        6
        D. Manfaat Penelitian
        Dengan dilakukanya penelitian ini diharapkan dapat memberikan
        manfaat sebagai berikut :
        1. Manfaat Teoritis
        Hasil penelitian ini diharapkan dapat memperkaya wawasan
        pengetahuan yang berhubungan dengan pemanfaatan sistem teknologi
        pada suatu organisasi atau institusi.
        2. Manfaat Praktis
        a. Bagi objek penelitian
        Dari penelitian ini diharapkan dapat memberikan informasi bagi
        karyawan Kantor Pelayanan Pajak Pratama Sukoharjo serta sebagai
        bahan pertimbangan dalam menentukan kebijakan untuk
        meningkatkan kinerja individual.
        b. Bagi peneliti lain
        Hasil penelitian ini juga diharapkan dapat memberikan informasi
        tambahan atau pembanding bagi peneliti lain yang penelitiannya
        sejenis.
        E. Sistematika Penulisan
        Sistematika penulisan yang diajukan dalam penyusunan skripsi ini
        untuk memberikan gambaran dari permasalahan pokok yang dicakup
        dalam uraian ringkas pada masing-masing bab. Adapun sistematika
        penulisan ini sebagai berikut:
        7
        BAB I PENDAHULUAN
        Bab ini menguraikan latar belakang, perumusan masalah,
        tujuan penelitian, manfaat penelitian, dan sistematika
        penulisan skripsi.
        BAB II TINJAUAN PUSTAKA
        Bab ini berisi tentang landasan teori yang mendasari
        pembahasan secara detail dan digunakan sebagai dasar
        untuk menganalisis, turunan hasil-hasil penelitian
        terdahulu, dan informasi lain yang membentuk kerangka
        teori yang berguna dalam penyusunan penelitian ini.
        BAB III METODE PENELITIAN
        Bab ini berisi metode yang dipilih untuk memperoleh
        jawaban atas permasalahan yang ada, populasi dan sampel,
        data, teknik pengumpulan data, variabel penelitian, dan
        pengukurannya, analisis data, dan pengujian hipotesis.
        BAB IV ANALISIS DATA DAN PEMBAHASAN
        Pada intinya bab ini berisi penyajian dan analisis data. Pada
        bab ini peneliti menyajikan hasil pengumpulan serta
        analisis data, sekaligus menemukan jawaban atas hipotesis
        yang telah dikemukakan pada bab sebelumnya.
        8
        BAB V PENUTUP
        Bab ini merupakan bagian akhir dari laporan penelitian
        yang berisi simpulan, keterbatasan penelitian, dan saransaran. </p>',
        ],
    ];

    public static function show(){
        return collect(self::$problems);
    }

    public static function find($slug){
        $post = static::show();

        // $probpostlem = [];

        // foreach($posts as $p)
        // {
        //     if($p['slug']===$slug){
        //         $post=$p;
        //     }
        // }

        return $post->firstWhere('slug', $slug);
    }
}
