-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 12:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('15s7p3pd3nfumkbhvhp85s5flj2ugbre', '::1', 1547459248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435393234383b),
('6gp2tt3pbdh03mp59svq716tnbrsf9mq', '::1', 1547460723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373436303732333b),
('fgjesr3ungv1eelt92njrk5824hdmc0s', '::1', 1547460419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373436303430343b),
('flofk791btglspg40vlherccbhi610l7', '::1', 1547456636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435363530323b),
('ha1319d6er1r32ikif73k8svhfanc0te', '::1', 1547459900, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435393831373b),
('l0t2ch2ooertbbn3dckk4jr4ku48gtn2', '::1', 1547457984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435373735303b),
('pgvv3s8ucc3bjhudommtlivl5rnpppj4', '::1', 1547458137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435383133373b),
('t2ebqgc8iarkgfups0b40aafc24ic6md', '::1', 1547457383, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435373331343b),
('uletni19kgvme3fds5s1d12dr5c9i82e', '::1', 1547456964, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435363639373b);

-- --------------------------------------------------------

--
-- Table structure for table `cms_article`
--

CREATE TABLE `cms_article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_link` varchar(255) DEFAULT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '1',
  `site_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `is_jumbotron` tinyint(1) DEFAULT '0',
  `is_featured` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_article`
--

INSERT INTO `cms_article` (`article_id`, `article_title`, `article_content`, `article_link`, `article_img`, `is_publish`, `site_id`, `created_by`, `created_on`, `updated_by`, `updated_on`, `counter`, `is_jumbotron`, `is_featured`) VALUES
(1, 'Pengenalan game', '<p>Pemrograman Web&nbsp;terdiri dari 2 kata yaitu Pemrograman yang mempunyai arti proses,cara pembuatan program.<br />\r\nsedangkan Web sendiri yaitu jaringan komputer dari situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui protokol transfer hypertext.<br />\r\nMungkin semuah orang yang tahu tentang website tapi tidak mengenal lebih detailnya,website dengan sebutan WWW(world wide web) ini adalah layanan internet yang sangat pupoler untuk saat ini.<br />\r\nPengertian WWW sendiri di artikan sebagai halaman-halaman website yang terkoneksi dengan yang lain atau hyperlink.<br />\r\nWWW juga berjalan dengan protokol HTTP(hypertext transfer protokol).untuk isi dari web sendiri berisi murni dari sintaks-sintaks html.<br />\r\nSebelum kita melanjutakan tentang pemrograman web disini saya terangkan tentang beberapah pemrograman yang ada di dalam web.</p>\r\n\r\n<ol>\r\n  <li>pemrograman html</li>\r\n</ol>\r\n\r\n<p>&nbsp;html singkatan dari hypertText markup language adalah sebuah bahasa markup yang di gunakan untuk sebuah halaman web dan menampilkan berbagai informasi di dalam sebuah browser intertnet.<br />\r\npada waktu ini html merpuakan standart internet yang artikan dan di kendalikan oleh W3C(world wide web consurtion).<br />\r\nSebuah file yang merupakan file HTML dapat dibuka dengan menggunakan browser web seperti mozila firefox atau microsoft internet explorer.<br />\r\ncontoh HTML editor:<br />\r\n-microsoft frontpage<br />\r\n-macromedia dreamweaver<br />\r\n-netscape navigator gold<br />\r\n-netscape composer<br />\r\n-hotdog<br />\r\n-cu-html,dll<br />\r\n<br />\r\n2.pemrograman php<br />\r\nPHP di buat oleh rasmus lerdrof pada tahun 1995,pada waktu itu PHP masih bernama FI(form interpreted),yang isinya berupa sekumpulan script yang digunakan untuk mengola data dari web.<br />\r\nsedangkan PHP sendiri mempunyai arti pemrograman yang sering di pakai untuk membuat web yang dinamis,walapun tidak tertutup.<br />\r\nselain itu PHP juga biasa&#39;nya berjalan pada operasi linux dan untuk windows sebagai hostingannya.<br />\r\n<br />\r\n3.pemrograman css<br />\r\ncascading style sheets(CSS)adalah suatu bahasa stylesheet yang digunakan untuk mengatur tampilan untuk mengatur tampilan suatu dokumen yang ditulis dalam bahasa markup.<br />\r\ntugas dari CSS sendiri untuk memformat halaman web yang di tulis dengan HTML dan XHTML.<br />\r\nSpesifikasi CSS diatur oleh World Wide consortiunC(W3C).<br />\r\nbahasnya sendiri dapat digunakan untuk semuah jenis dokumen XML termasuk SVG dan XUL.<br />\r\n<br />\r\n4.pemrograman java script<br />\r\njava script adalah bahasa scripting yang handal berjalan pada sisi client.<br />\r\njavascript merupakan bahasa scripting yang di kembangan oleh netscape.<br />\r\ncara pengguna&#39;annya,script yang di tulis dengan javascript kita membutuhkan javascript enabled browser yaitu browser yang mampu menjalankan javascript.</p>', 'Pengenalan-game', NULL, 1, 11, 40, '2018-07-22 11:49:21', 40, '2018-07-22 11:49:21', 0, 0, 0),
(2, 'WEB', '<p>Rekayasa Web (Web Engineering)<br />\r\nDalam jangka waktu yang relatif singkat, Internet dan World Wide Web (biasa disebut dengan web) telah berkembang dengan sangat pesat sehingga dapat melampaui kecepatan perkembangan teknologi lainnya di dunia. Internet dan web juga berkembang pesat dalam hal jangkauan dan luas bidang kegunaan yang secara nyata mempengaruhi beberapa aspek kehidupan. Industri, seperti manufaktur, biro perjalanan, rumah sakit, perbankan, pendidikan dan pemerintahan menggunakan web untuk meningkatkan efisiensi operasional mereka.<br />\r\nSaat ini banyak diantara kita bergantung pada sistem dan aplikasi yang menggunakan antarmuka web yang harus berjalan dengan baik dan terpercaya. Oleh karena itu para pengembang web membutuhkan suatu metoda, suatu bidang keilmuan dan proses yang dapat diduplikasi, alat-alat pengembang web yang baik dan panduan-panduan dalam proses pengembangan web yang baik.<br />\r\nWeb engineering (rekayasa web) adalah suatu proses yang digunakan untuk menciptakan suatu sistem aplikasi berbasis web dengan menggunakan ilmu rekayasa, prinsip-prinsip manajemen dan pendekatan sistematis sehingga dapat diperoleh sistem dan aplikasi web dengan kualitas tinggi. Tujuannya untuk mengendalikan pengembangan, minimalisasi resiko dan meningkatkan kualitas sistem berbasis web. [2]</p>\r\n\r\n<p>Kualitas Sistem dan Aplikasi berbasis Web<br />\r\nAda beberapa parameter yang dapat digunakan untuk mengukur aplikasi berbasis web.</p>\r\n\r\n<p>Gambar II 1 Parameter Kualitas Aplikasi pada Sistem Berbasis Web</p>\r\n\r\n<p>Alur Kerja Rekayasa Web</p>\r\n\r\n<p>Bertolak belakang dengan persepsi dari beberapa pengembang perangkat lunak dan ahli-ahli dalam bidang rekayasa perangkat lunak (software engineering professional), rekayasa web tidaklah sama dengan rekayasa perangkat lunak walaupun keduanya melibatkan pemrograman dan pengembangan perangkat lunak.<br />\r\nWalaupun rekayasa web banyak mengadopsi prinsip-prinsip rekayasa perangkat lunak, rekayasa web memiliki banyak pendekatan, metoda, alat bantu, teknik dan panduan yang memenuhi persyaratan pembuatan sistem berbasis web.<br />\r\nPengembangan sistem berbasis web berbeda dengan pengembangan perangkat lunak konvensional, dimana pengembangan sistem berbasis web lebih banyak menghadapi tantangan. Pengembangan web adalah gabungan dari print publishing dan pengambangan perangkat lunak, diantara marketing dan perhitungan dan diantara seni dan teknologi.</p>\r\n\r\n<p><br />\r\nFormulasi (formulation)<br />\r\nKegiatan yang berfungsi untuk merumuskan tujuan dan ukuran dari aplikasi berbasis web serta menentukan batasannya sistem.<br />\r\nTujuan yang ingin dicapai bisa dibedakan menjadi dua kategori, yaitu :<br />\r\nTujuan yang bersifat informatif<br />\r\nMenyediakan suatu informasi tertentu kepada pengguna, berupa teks, grafik, audio, dan video.<br />\r\nTujuan yang bersifat fungsional<br />\r\nKemampuan untuk melakukan suatu fungsi yang dibutuhkan pengguna, misal dengan menggunakan aplikasi tersebut seorang dosen dapat memperoleh nilai akhir dan statistik nilai mahasiswa dari data-data ujian, tugas, kuis yang ia input ke dalam aplikasi.</p>\r\n\r\n<p>Perencanaan (planning)<br />\r\nKegiatan yang digunakan untuk menghitung estimasi biaya proyek pembuatan aplikasi berbasis web ini, estimasi jumlah pengembang, estimasi waktu pengembangan, evaluasi resiko pengembangan proyek, dan mendefinisikan jadwal pengembangan untuk versi selanjutnya (jika diperlukan).</p>\r\n\r\n<p>Analisis (analysis)<br />\r\nKegiatan untuk menentukan persyaratan ? persyaratan teknik dan mengidentifikasi informasi yang akan ditampilkan pada aplikasi berbasis web. Analisis yang digunakan pada rekayasa web dilakukan dari empat sisi, yaitu :<br />\r\nAnalisis isi informasi<br />\r\nMengidentifikasi isi yang akan ditampilkan pada aplikasi berbasis web ini. Isi informasi dapat berupa teks, grafik, audio, maupun video.<br />\r\n&nbsp;Analisis interaksi<br />\r\nAnalisis yang menunjukkan hubungan antara web dengan pengguna.<br />\r\nAnalisis fungsional<br />\r\nAnalisis tentang proses bagaimana aplikasi berbasis web ini akan menampilkan informasi kepada pengguna.<br />\r\nAnalisis konfigurasi<br />\r\nKonfigurasi yang digunakan pada aplikasi berbasis web, internet, intranet, atau extranet. Selain itu, analisis ini juga meliputi relasi database dengan web jika diperlukan.</p>\r\n\r\n<p>Rekayasa (engineering)<br />\r\nTerdapat dua pekerjaan yang dilakukan secara paralel, yaitu desain isi informasi dan desain arsitektur web.</p>\r\n\r\n<p>Implementasi (page generation) &amp; pengujian (testing)<br />\r\nSuatu kegiatan untuk mewujudkan desain menjadi suatu web site. Teknologi yang digunakan tergantung dengan kebutuhan yang telah dirumuskan pada tahap analisis.<br />\r\nPengujian dilakukan setelah implementasi selesai dilaksanakan. Pengujian meliputi beberapa parameter yang akan menentukan standar aplikasi berbasis web yang telah dibuat. Tahap pengujian adalah suatu proses untuk menguji aplikasi berbasis web yang telah selesai dibuat. Hal ini bertujuan untuk menemukan kesalahan dan kemudian memperbaikinya. Pengembang suatu aplikasi berbasis web mendapat tantangan besar untuk melakukan pengujian karena karakter aplikasi ini yang beroperasi pada jaringan dengan berbagai macam pengguna, berbagai macam sistem operasi, perangkat keras, browser, protokol komunikasi, dll.<br />\r\nAda beberapa pendekatan yang digunakan untuk melakukan pengujian, yaitu :<br />\r\nPengujian fungsional dan operasional (fungsional and operational testing)<br />\r\nBertujuan untuk menguji masukan dan keluaran dari aplikasi ini.<br />\r\nHasil keluaran aplikasi bergantung dari teknologi yang digunakan, baik itu bahasa pemrograman maupun bahasa skrip yang digunakan.<br />\r\nUntuk menguji code HTML dan CSS yang digunakan dapat menggunakan alat bantu W3C HTML Validation Service di&nbsp;<a href=\"http://validator.w3.org/\" rel=\"nofollow\">http://validator.w3.org/</a>&nbsp;dan W3C CSS Validation Service di&nbsp;<a href=\"http://jigsaw.w3.org/css-validator/\" rel=\"nofollow\">http://jigsaw.w3.org/css-validator/</a><br />\r\n2. Pengujian navigasi (navigation testing)<br />\r\nHal ini digunakan untuk melihat kesesuaian antara desain navigasi dengan navigasi yang ada di aplikasi. Navigasi berhubungan dengan link-link yang terdapat didalam aplikasi.<br />\r\nUntuk menguji link dapat digunakan alat bantu W3C Link Checker Service di&nbsp;<a href=\"http://validator.w3.org/checklink\" rel=\"nofollow\">http://validator.w3.org/checklink</a><br />\r\n3. Pengujian konfigurasi (configuration testing)<br />\r\nPengujian ini dilakukan pada sistem operasi, browser, sistem perangkat keras dan perangkat lunak pendukung. Pengujian ini dilakukan untuk menentukan batas toleransi kebutuhan aplikasi akan perangkat lunak dan perangkat keras pendukungnya.<br />\r\n4. Pengujian keamanan dan performansi (security and performance testing)<br />\r\nPengujian ini dilakukan untuk melihat tingkat keamanan aplikasi dengan cara menguji aspek-aspek yang dapat menimbulkan gangguan keamanan aplikasi maupun server. Keamanan aplikasi sangat bergantung pada teknologi pengembangan website, konfigurasi server yang digunakan dan kelakuan sistem. Pengujian performansi dapat dilakukan bersamaan dengan pengujian keamanan aplikasi, karena keamanan aplikasi berbasis web juga tergantung dari performansi server dan aplikasi tersebut.</p>\r\n\r\n<p>Evaluasi oleh konsumen (customer evaluation)<br />\r\nSuatu kegiatan akhir dari siklus proses rekayasa web, akan menentukan apakah web yang telah selesai dibuat tersebut sesuai dengan yang mereka inginkan. Apabila aplikasi berbasis web ini belum sesuai dengan kehendak mereka, maka proses rekayasa web akan terus dilakukan dan dimulai lagi dari tahap formulasi untuk versi berikutnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Web 3.0</strong>&nbsp;adalah generasi ketiga dari layanan&nbsp;<a href=\"http://id.wikipedia.org/wiki/Internet\" title=\"Internet\">internet</a>&nbsp;berbasis&nbsp;<a href=\"http://id.wikipedia.org/wiki/Web\" title=\"Web\">web</a>. Konsep Web 3.0 pertama kali diperkenalkan pada tahun 2001, saat&nbsp;<a href=\"http://id.wikipedia.org/wiki/Tim_Berners-Lee\" title=\"Tim Berners-Lee\">Tim Berners-Lee</a>, penemu&nbsp;<a href=\"http://id.wikipedia.org/wiki/World_Wide_Web\" title=\"World Wide Web\">World Wide Web</a>, menulis sebuah artikel ilmiah yang menggambarkan Web 3.0 sebagai sebuah sarana bagi&nbsp;<a href=\"http://id.wikipedia.org/wiki/Mesin\" title=\"Mesin\">mesin</a>&nbsp;untuk membaca halaman-halaman Web. Hal ini berarti bahwa mesin akan memiliki kemampuan membaca Web sama seperti yang manusia dapat lakukan sekarang ini.</p>\r\n\r\n<p>Web 3.0 berhubungan dengan konsep Web Semantik, yang memungkinkan isi web dinikmati tidak hanya dalam bahasa asli pengguna, tapi juga dalam bentuk format yang bisa diakses oleh agen-agen&nbsp;<a href=\"http://id.wikipedia.org/wiki/Software\" title=\"Software\">software</a>. Beberapa ahli bahkan menamai Web 3.0 sebagai Web Semantik itu sendiri.</p>\r\n\r\n<p>Keunikan dari Web 3.0 adalah konsep dimana manusia dapat berkomunikasi dengan mesin pencari. Kita bisa meminta Web untuk mencari suatu data spesifik tanpa bersusah-susah mencari satu per satu dalam&nbsp;<a href=\"http://id.wikipedia.org/wiki/Situs\" title=\"Situs\">situs</a>-situs Web. Web 3.0 juga mampu menyediakan keterangan-keterangan yang relevan tentang&nbsp;<a href=\"http://id.wikipedia.org/wiki/Informasi\" title=\"Informasi\">informasi</a>&nbsp;yang ingin kita cari, bahkan tanpa kita minta.</p>\r\n\r\n<p>Web 3.0 terdiri dari:</p>\r\n\r\n<ul>\r\n  <li>Web semantik</li>\r\n <li>Format mikro</li>\r\n <li>Pencarian dalam bahasa pengguna</li>\r\n  <li>Penyimpanan data dalam jumlah besar</li>\r\n  <li>Pembelajaran lewat mesin</li>\r\n <li>Agen rekomendasi, yang merujuk pada&nbsp;<a href=\"http://id.wikipedia.org/wiki/Kecerdasan_buatan\" title=\"Kecerdasan buatan\">kecerdasan buatan</a>&nbsp;Web</li>\r\n</ul>\r\n\r\n<p>Web 3.0 menawarkan metode yang efisien dalam membantu&nbsp;<a href=\"http://id.wikipedia.org/wiki/Komputer\" title=\"Komputer\">komputer</a>&nbsp;mengorganisasi dan menarik kesimpulan dari data online. Web 3.0 juga memungkinkan fitur Web menjadi sebuah sarana penyimpanan&nbsp;<a href=\"http://id.wikipedia.org/wiki/Data\" title=\"Data\">data</a>dengan kapasitas yang luar biasa besar.</p>\r\n\r\n<p>Walaupun masih belum sepenuhnya direalisasikan, Web 3.0 telah memiliki beberapa standar operasional untuk bisa menjalankan fungsinya dalam menampung metadata, misalnya Resource Description Framework (RDF) dan the Web Ontology Language (OWL). Konsep Web Semantik metadata juga telah dijalankan pada Yahoo&rsquo;s Food Site, Spivack&rsquo;s Radar Networks, dan sebuah development platform, Jena, di&nbsp;<a href=\"http://id.wikipedia.org/wiki/Hewlett-Packard\" title=\"Hewlett-Packard\">Hewlett-Packard</a>.</p>\r\n\r\n<p>Bahasa pemrograman merupakan suatu teknik komando/instruksi standar untuk memerintah komputer.<br />\r\nBerikut adalah penjelasan tentang bahasa pemrograman apa saja yang biasa digunakan untuk membuat suatu website :</p>\r\n\r\n<p>HyperText Markup Language (HTML) adalah sebuah bahasa markup yang digunakan untuk membuat sebuah halaman web dan menampilkan berbagai informasi di dalam sebuah browser Internet.<br />\r\nHTML saat ini merupakan standar Internet yang didefinisikan dan dikendalikan penggunaannya oleh World Wide Web Consortium (W3C).<br />\r\nHTML berupa kode-kode tag yang menginstruksikan browser untuk menghasilkan tampilan sesuai dengan yang diinginkan.<br />\r\nSebuah file yang merupakan file HTML dapat dibuka dengan menggunakan browser web seperti Mozilla Firefox atau Microsoft Internet Explorer.</p>\r\n\r\n<p>PHP adalah bahasa pemrograman script yang paling banyak dipakai saat ini.<br />\r\nPHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995. Pada waktu itu PHP masih bernama FI (Form Interpreted), yang wujudnya berupa sekumpulan script yang digunakan untuk mengolah data form dari web.<br />\r\nPHP banyak dipakai untuk membuat situs web yang dinamis, walaupun tidak tertutup kemungkinan digunakan untuk pemakaian lain.<br />\r\nPHP biasanya berjalan pada sistem operasi linux (PHP juga bisa dijalankan dengan hosting windows).</p>\r\n\r\n<p><strong>3. Bahasa Pemrograman ASP</strong><br />\r\nASP adalah singkatan dari Active Server Pages yang merupakan salah satu bahasa pemograman web untuk menciptakan halaman web yang dinamis.<br />\r\nASP merupakan salah satu produk teknologi yang disediakan oleh Microsoft.<br />\r\nASP bekerja pada web server dan merupakan server side scripting.</p>\r\n\r\n<p><strong>4. Bahasa Pemrograman XML</strong><br />\r\nExtensible Markup Language (XML) adalah bahasa markup serbaguna yang direkomendasikan W3C untuk mendeskripsikan berbagai macam data.<br />\r\nXML menggunakan markup tags seperti halnya HTML namun penggunaannya tidak terbatas pada tampilan halaman web saja.<br />\r\nXML merupakan suatu metode dalam membuat penanda/markup pada sebuah dokumen.</p>\r\n\r\n<p><strong>5. Bahasa Pemrograman WML</strong><br />\r\nWML adalah kepanjangan dari Wireless Markup Language, yaitu bahasa pemrograman yang digunakan dalam aplikasi berbasis XML (eXtensible Markup Langauge).<br />\r\nWML ini adalah bahasa pemrograman yang digunakan dalam aplikasi wireless.<br />\r\nWML merupakan analogi dari HTML yang berjalan pada protocol nirkabel.</p>\r\n\r\n<p><strong>6. Bahasa Pemrograman PERL</strong><br />\r\nPerl adalah bahasa pemrograman untuk mesin dengan sistem operasi Unix (SunOS, Linux, BSD, HP-UX), juga tersedia untuk sistem operasi seperti DOS, Windows, PowerPC, BeOS, VMS, EBCDIC, dan PocketPC.<br />\r\nPERL merupakan bahasa pemograman yang mirip bahasa pemograman C.</p>\r\n\r\n<p><strong>7. Bahasa Pemrograman CFM</strong><br />\r\nCfm dibuat menggunakan tag ColdFusion dengan software Adobe ColdFusion / BlueDragon / Coldfusion Studio.<br />\r\nSyntax coldfusion berbasis html.</p>\r\n\r\n<p><strong>8. Bahasa Pemrograman Javascript</strong><br />\r\nJavascript adalah bahasa scripting yang handal yang berjalan pada sisi client.<br />\r\nJavaScript merupakan sebuah bahasa scripting yang dikembangkan oleh Netscape.<br />\r\nUntuk menjalankan script yang ditulis dengan JavaScript kita membutuhkan JavaScript-enabled browser yaitu browser yang mampu menjalankan JavaScript.</p>\r\n\r\n<p><strong>9. Bahasa Pemrograman CSS</strong><br />\r\nCascading Style Sheets (CSS) adalah suatu bahasa stylesheet yang digunakan untuk mengatur tampilan suatu dokumen yang ditulis dalam bahasa markup.<br />\r\nPenggunaan yang paling umum dari CSS adalah untuk memformat halaman web yang ditulis dengan HTML dan XHTML.<br />\r\nWalaupun demikian, bahasanya sendiri dapat dipergunakan untuk semua jenis dokumen XML termasuk SVG dan XUL.<br />\r\nSpesifikasi CSS diatur oleh World Wide Web Consortium (W3C).</p>', 'web', '37754059_666350350380352_2895385845353676800_n.jpg', 1, 11, 40, '2018-07-22 11:59:39', 40, '2018-07-22 11:59:39', 0, 0, 0),
(3, 'JENIS KOMPUTER', '<p>qwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiop</p>', 'jenis-komputer', NULL, 1, 11, 40, '2018-08-05 11:17:49', 40, '2018-08-05 11:17:49', 0, 0, 0),
(4, 'JARINGAN 5G', '<p>qwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiop</p>', 'JARINGAN-5G', NULL, 1, 11, 40, '2018-08-05 11:18:04', 40, '2018-08-05 11:18:04', 0, 0, 0),
(5, 'DOWNLOAD SOFTWARE', '<p>qwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiop</p>', 'DOWNLOAD-SOFTWARE', NULL, 1, 11, 40, '2018-08-05 11:18:19', 40, '2018-08-05 11:18:19', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_articlecategory`
--

CREATE TABLE `cms_articlecategory` (
  `articlecategory_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `article_category_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CMS';

--
-- Dumping data for table `cms_articlecategory`
--

INSERT INTO `cms_articlecategory` (`articlecategory_id`, `article_id`, `article_category_id`, `site_id`) VALUES
(1, 2, 1, 11),
(2, 2, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_articletags`
--

CREATE TABLE `cms_articletags` (
  `articletags_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `tags_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_articletags`
--

INSERT INTO `cms_articletags` (`articletags_id`, `article_id`, `tags_id`, `site_id`) VALUES
(1, 2, 2, 11),
(2, 2, 3, 11),
(3, 2, 5, 11),
(4, 2, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_article_category`
--

CREATE TABLE `cms_article_category` (
  `article_category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `parent_category_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `link` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CMS';

--
-- Dumping data for table `cms_article_category`
--

INSERT INTO `cms_article_category` (`article_category_id`, `category_name`, `img`, `description`, `parent_category_id`, `site_id`, `is_active`, `link`, `caption`) VALUES
(1, 'Pemrograman PHP', NULL, NULL, NULL, 11, 1, NULL, NULL),
(2, 'Web Development', NULL, NULL, NULL, 11, 1, NULL, NULL),
(3, 'Uncategorized', NULL, NULL, NULL, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_author`
--

CREATE TABLE `cms_author` (
  `author_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(35) NOT NULL,
  `level` enum('user','author','admin','superuser') NOT NULL DEFAULT 'user',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `site_id` int(11) DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_code` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms_comment`
--

CREATE TABLE `cms_comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `content` text,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '0',
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_comment`
--

INSERT INTO `cms_comment` (`comment_id`, `user_id`, `article_id`, `name`, `email`, `website`, `parent_comment_id`, `content`, `created_on`, `created_by`, `updated_on`, `updated_by`, `is_publish`, `site_id`) VALUES
(9, NULL, 2, 'BEST', 'nurdiansyah.kaf@gmail.com', 'nurdiansyahh.co.id', NULL, 'percobaan', '2018-08-05 14:59:32', NULL, NULL, NULL, 1, 11),
(11, NULL, 2, 'KRS', 'nurdiansyah.kaf@gmail.com', 'bfn', NULL, 'fghfghjngh', '2018-08-05 15:59:20', NULL, NULL, NULL, 1, 11),
(12, NULL, 2, 'nurdiansyah', 'nurdiansyah.ps@gmail.com', 'wdefw', NULL, 'defwdfsd', '2018-08-05 16:02:23', NULL, NULL, NULL, 1, 11),
(13, NULL, 2, 'nurdiansyah', 'nurdiansyah.ps@gmail.com', 'ddddd', 11, 'qwdqwdqdqd', '2018-08-05 16:04:45', NULL, NULL, NULL, 1, 11),
(14, NULL, 2, 'reply percobaan', 'nu@gmail.com', 'uiui.com', 9, 'jsdjsd', '2018-08-14 16:53:36', NULL, NULL, NULL, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_gallery`
--

CREATE TABLE `cms_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'default.png',
  `created_by` int(11) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_gallery`
--

INSERT INTO `cms_gallery` (`gallery_id`, `gallery_name`, `description`, `caption`, `img`, `created_by`, `created_on`, `updated_by`, `updated_on`, `site_id`, `is_publish`, `link`) VALUES
(4, 'AABC', 'TEST 1', NULL, 'project-3.jpg', 40, '2018-08-26 11:22:42', 40, '2018-08-26 11:22:42', 11, 1, NULL),
(5, 'POSTTEST', 'ETST2', NULL, 'POSTTEST.PNG', 40, '2018-08-26 12:22:07', 40, '2018-08-26 12:22:07', 11, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_gallery_detail`
--

CREATE TABLE `cms_gallery_detail` (
  `gallery_detail_id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'default.png',
  `caption` varchar(255) DEFAULT NULL,
  `description` text,
  `site_id` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CMS';

-- --------------------------------------------------------

--
-- Table structure for table `cms_guestbook`
--

CREATE TABLE `cms_guestbook` (
  `guestbook_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `read_on` datetime DEFAULT NULL,
  `read_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

CREATE TABLE `cms_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `menu_type` enum('page','article','link','other') NOT NULL DEFAULT 'link',
  `menu_link` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(200) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `menu_index` int(5) NOT NULL DEFAULT '10',
  `site_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT '1',
  `description` varchar(255) DEFAULT NULL,
  `menu_group_id` int(11) DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`menu_id`, `menu_name`, `menu_type`, `menu_link`, `menu_icon`, `menu_title`, `menu_index`, `site_id`, `is_active`, `description`, `menu_group_id`, `parent_menu_id`, `article_id`, `page_id`) VALUES
(10, 'Home', 'link', 'single', NULL, 'Home', 10, 11, 1, NULL, NULL, NULL, NULL, NULL),
(11, 'Pages', 'link', '#', NULL, NULL, 20, 11, 1, NULL, NULL, NULL, NULL, NULL),
(12, 'Category', 'link', '#', NULL, NULL, 10, 11, 1, NULL, NULL, 11, NULL, NULL),
(13, 'Gallery', 'link', 'gallery', NULL, NULL, 30, 11, 1, NULL, NULL, NULL, NULL, NULL),
(14, 'Gallery Vidio', 'link', 'galleryvidio', NULL, NULL, 40, 11, 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Single Blog', 'link', '#', NULL, NULL, 20, 11, 1, NULL, NULL, 11, NULL, NULL),
(16, 'Category 1', 'link', '#', NULL, NULL, 10, 11, 1, NULL, NULL, 12, NULL, NULL),
(17, 'Category 2', 'link', '#', NULL, NULL, 20, 11, 1, NULL, NULL, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu_group`
--

CREATE TABLE `cms_menu_group` (
  `menu_group_id` int(11) NOT NULL,
  `menu_group_name` varchar(150) NOT NULL,
  `position` enum('top','bottom','right','left') DEFAULT 'top',
  `is_active` tinyint(1) DEFAULT '1',
  `description` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_menu_group`
--

INSERT INTO `cms_menu_group` (`menu_group_id`, `menu_group_name`, `position`, `is_active`, `description`, `site_id`) VALUES
(1, 'Main Menu (Top Menu)', 'top', 1, 'Menu Utama Website', 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'default.png',
  `caption` varchar(255) DEFAULT NULL,
  `content` text,
  `site_id` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CMS';

-- --------------------------------------------------------

--
-- Table structure for table `cms_setting`
--

CREATE TABLE `cms_setting` (
  `setting_id` int(11) NOT NULL,
  `var_set` varchar(200) NOT NULL,
  `val_set` text,
  `file_set` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_file` tinyint(1) NOT NULL DEFAULT '0',
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_setting`
--

INSERT INTO `cms_setting` (`setting_id`, `var_set`, `val_set`, `file_set`, `description`, `is_active`, `is_file`, `site_id`) VALUES
(1, 'WEB_NAME', 'OFFICIAL WEB AABC', '', 'Nama Website', 1, 0, 11),
(2, 'WEB_LOGO', NULL, 'logo-aabc-software.png', NULL, 1, 1, 11),
(3, 'ABOUT_WEB', 'AABC Software, adalah tim developer software yang melayani masyarakat di bidang teknologi informasi, khususnya dalam website dan aplikasi desktop. Keberadaan AABC Software adalah solusi yang tepat bagi masyarakat dalam menghadapi era teknologi informasi di dunia global, baik melalui teknologi informasi website maupun custom software.', '0', NULL, 1, 0, 11),
(4, 'ICON_LOGO', NULL, 'logo.ico', NULL, 1, 1, 11),
(5, 'TAG_WEB', 'IT solutions - Website & Aplikasi Desktop', NULL, NULL, 1, 0, 11),
(6, 'JML_SLIDE_ARTIKEL', '4', NULL, NULL, 1, 0, 11),
(7, 'HEADER_GALERY', NULL, 'gallery1.png', 'Keterangan Galery AABC.', 1, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_slide`
--

CREATE TABLE `cms_slide` (
  `slide_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `position` enum('top','bottom','left','right') NOT NULL DEFAULT 'top',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `site_id` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_slide`
--

INSERT INTO `cms_slide` (`slide_id`, `img`, `caption`, `description`, `position`, `is_active`, `site_id`, `link`) VALUES
(5, '0bb42109ae4bfb86409cfd7d4a9292f3_large.jpeg', NULL, NULL, 'top', 1, 11, NULL),
(6, 'Anonymous-Hacker-Wallpaper-Pictures-HD-646822.jpg', NULL, NULL, 'top', 1, 11, NULL),
(7, 'gambar-wallpaper-hd-keren-19-hd-wallpaper-gambar-hacker-anonymous-keren-of-gambar-wallpaper-hd-keren.jpg', NULL, NULL, 'top', 1, 11, NULL),
(9, '37754059_666350350380352_2895385845353676800_n1.jpg', NULL, NULL, 'bottom', 1, 11, NULL),
(10, '30623742_618329735226187_8390414249482270124_n3.jpg', NULL, NULL, 'bottom', 1, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_tags`
--

CREATE TABLE `cms_tags` (
  `tags_id` int(11) NOT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CMS';

--
-- Dumping data for table `cms_tags`
--

INSERT INTO `cms_tags` (`tags_id`, `tags`, `description`, `img`, `site_id`, `is_active`) VALUES
(1, 'Tips Trik', NULL, NULL, 11, 1),
(2, 'PHP', NULL, NULL, 11, 1),
(3, 'Web Programming', NULL, NULL, 11, 1),
(4, 'JQuery', NULL, NULL, 11, 1),
(5, 'Web Development', NULL, NULL, 11, 1),
(6, 'Otodidak', NULL, NULL, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_var`
--

CREATE TABLE `cms_var` (
  `var_id` int(11) NOT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_logo_icon` varchar(255) DEFAULT NULL,
  `web_tag` varchar(255) DEFAULT NULL,
  `web_title` varchar(255) DEFAULT NULL,
  `is_slide` tinyint(1) NOT NULL DEFAULT '0',
  `slide_source` text,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `featured_source` text,
  `is_jumbotron` tinyint(1) NOT NULL DEFAULT '0',
  `jumbotron_source` text,
  `is_testimonial` tinyint(1) NOT NULL DEFAULT '0',
  `testimonial_source` text,
  `is_cta` tinyint(1) NOT NULL DEFAULT '0',
  `cta_source` text,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `popular_source` text,
  `site_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_address_2` varchar(255) DEFAULT NULL,
  `company_phone` varchar(50) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_map_location` varchar(255) DEFAULT NULL,
  `company_fax` varchar(50) DEFAULT NULL,
  `account_facebook` varchar(150) DEFAULT NULL,
  `account_twitter` varchar(150) DEFAULT NULL,
  `account_google` varchar(150) DEFAULT NULL,
  `account_instagram` varchar(150) DEFAULT NULL,
  `account_github` varchar(150) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms_widget`
--

CREATE TABLE `cms_widget` (
  `widget_id` int(11) NOT NULL,
  `widget_name` varchar(200) NOT NULL,
  `widget_icon` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `description` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `site_id` int(11) DEFAULT NULL,
  `widget_type` enum('general') NOT NULL DEFAULT 'general',
  `widget_index` int(5) NOT NULL DEFAULT '10',
  `position` enum('top','bottom','left','right') NOT NULL DEFAULT 'top',
  `is_system` tinyint(1) NOT NULL DEFAULT '0',
  `widget_script` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_widget`
--

INSERT INTO `cms_widget` (`widget_id`, `widget_name`, `widget_icon`, `caption`, `description`, `is_active`, `site_id`, `widget_type`, `widget_index`, `position`, `is_system`, `widget_script`) VALUES
(1, 'LIVE CHAT', NULL, NULL, NULL, 1, 11, 'general', 10, 'top', 1, NULL),
(2, 'SHARE ARTICLE', NULL, NULL, NULL, 1, 11, 'general', 20, 'top', 1, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_archive_post`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_archive_post` (
`site_id` int(11)
,`archive_month` int(2)
,`archive_year` int(4)
,`count_post` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_article`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_article` (
`article_id` int(11)
,`article_title` varchar(255)
,`article_content` text
,`article_link` varchar(255)
,`article_img` varchar(255)
,`is_publish` tinyint(1)
,`site_id` int(11)
,`site_name` varchar(255)
,`created_on` datetime
,`created_by` int(11)
,`created_by_name` varchar(200)
,`updated_on` datetime
,`updated_by` int(11)
,`updated_by_name` varchar(200)
,`counter` int(11)
,`is_featured` tinyint(1)
,`is_jumbotron` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_articlecategory`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_articlecategory` (
`articlecategory_id` int(11)
,`article_id` int(11)
,`article_title` varchar(255)
,`article_link` varchar(255)
,`article_category_id` int(11)
,`category_name` varchar(200)
,`is_publish` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_articletags`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_articletags` (
`articletags_id` int(11)
,`article_id` int(11)
,`article_title` varchar(255)
,`article_link` varchar(255)
,`tags_id` int(11)
,`tags` varchar(200)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_article_category`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_article_category` (
`article_category_id` int(11)
,`category_name` varchar(200)
,`img` varchar(255)
,`description` text
,`parent_category_id` int(11)
,`parent_category_name` varchar(200)
,`site_id` int(11)
,`is_active` int(1)
,`link` varchar(255)
,`caption` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_comment`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_comment` (
`comment_id` int(11)
,`user_id` int(11)
,`article_id` int(11)
,`name` varchar(150)
,`email` varchar(100)
,`website` varchar(100)
,`parent_comment_id` int(11)
,`content` text
,`created_on` datetime
,`created_by` int(11)
,`created_by_name` varchar(200)
,`updated_on` datetime
,`updated_by` int(11)
,`updated_by_name` varchar(200)
,`is_publish` tinyint(1)
,`site_id` int(11)
,`site_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_gallery`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_gallery` (
`gallery_id` int(11)
,`gallery_name` varchar(200)
,`description` text
,`caption` varchar(255)
,`img` varchar(255)
,`created_on` datetime
,`created_by` int(11)
,`created_by_name` varchar(200)
,`updated_on` datetime
,`updated_by` int(11)
,`updated_by_name` varchar(200)
,`is_publish` tinyint(1)
,`site_id` int(11)
,`site_name` varchar(255)
,`link` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_gallery_detail`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_gallery_detail` (
`gallery_detail_id` int(11)
,`gallery_id` int(11)
,`gallery_name` varchar(200)
,`description` text
,`caption` varchar(255)
,`img` varchar(255)
,`created_on` datetime
,`created_by` int(11)
,`created_by_name` varchar(200)
,`is_publish` tinyint(1)
,`site_id` int(11)
,`site_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_guestbook`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_guestbook` (
`guestbook_id` int(11)
,`name` varchar(150)
,`title` varchar(255)
,`content` text
,`email` varchar(255)
,`company` varchar(255)
,`created_on` datetime
,`is_read` tinyint(1)
,`publish` tinyint(1)
,`read_on` datetime
,`read_by` int(11)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_menu`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_menu` (
`menu_id` int(11)
,`menu_name` varchar(200)
,`menu_type` enum('page','article','link','other')
,`menu_link` varchar(255)
,`menu_icon` varchar(200)
,`menu_index` int(5)
,`menu_title` varchar(255)
,`description` varchar(255)
,`menu_group_id` int(11)
,`menu_group_name` varchar(200)
,`parent_menu_id` int(11)
,`parent_menu_name` varchar(200)
,`article_id` int(11)
,`article_title` varchar(255)
,`page_id` int(11)
,`is_active` int(1)
,`site_id` int(11)
,`jml_child` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_menu_group`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_menu_group` (
`menu_group_id` int(11)
,`menu_group_name` varchar(150)
,`position` enum('top','bottom','right','left')
,`description` varchar(255)
,`is_active` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_page`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_page` (
`page_id` int(11)
,`page_title` varchar(255)
,`img` varchar(255)
,`caption` varchar(255)
,`content` text
,`created_on` datetime
,`created_by` int(11)
,`created_by_name` varchar(200)
,`updated_on` datetime
,`updated_by` int(11)
,`updated_by_name` varchar(200)
,`is_publish` tinyint(1)
,`site_id` int(11)
,`site_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_setting`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_setting` (
`setting_id` int(11)
,`var_set` varchar(200)
,`val_set` text
,`file_set` varchar(255)
,`description` varchar(255)
,`is_file` tinyint(1)
,`is_active` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_sllide`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_sllide` (
`slide_id` int(11)
,`img` varchar(255)
,`caption` varchar(200)
,`description` varchar(255)
,`position` enum('top','bottom','left','right')
,`link` varchar(255)
,`is_active` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_tags`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_tags` (
`tags_id` int(11)
,`tags` varchar(200)
,`description` varchar(255)
,`img` varchar(255)
,`is_active` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cms_widget`
-- (See below for the actual view)
--
CREATE TABLE `v_cms_widget` (
`widget_id` int(11)
,`widget_name` varchar(200)
,`widget_icon` varchar(255)
,`caption` varchar(255)
,`description` text
,`widget_type` enum('general')
,`widget_index` int(5)
,`position` enum('top','bottom','left','right')
,`is_system` tinyint(1)
,`widget_script` text
,`is_active` tinyint(1)
,`site_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_cms_archive_post`
--
DROP TABLE IF EXISTS `v_cms_archive_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_archive_post`  AS  select `cms_article`.`site_id` AS `site_id`,month(`cms_article`.`created_on`) AS `archive_month`,year(`cms_article`.`created_on`) AS `archive_year`,count(`cms_article`.`article_id`) AS `count_post` from `cms_article` where (`cms_article`.`is_publish` = 1) group by `cms_article`.`site_id`,month(`cms_article`.`created_on`),year(`cms_article`.`created_on`) order by year(`cms_article`.`created_on`),month(`cms_article`.`created_on`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_article`
--
DROP TABLE IF EXISTS `v_cms_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_article`  AS  select `a`.`article_id` AS `article_id`,`a`.`article_title` AS `article_title`,`a`.`article_content` AS `article_content`,`a`.`article_link` AS `article_link`,`a`.`article_img` AS `article_img`,`a`.`is_publish` AS `is_publish`,`a`.`site_id` AS `site_id`,`s`.`site_name` AS `site_name`,`a`.`created_on` AS `created_on`,`a`.`created_by` AS `created_by`,`u`.`name` AS `created_by_name`,`a`.`updated_on` AS `updated_on`,`a`.`updated_by` AS `updated_by`,`u1`.`name` AS `updated_by_name`,`a`.`counter` AS `counter`,`a`.`is_featured` AS `is_featured`,`a`.`is_jumbotron` AS `is_jumbotron` from (((`cms_article` `a` left join `erp_system`.`s_site` `s` on((`a`.`site_id` = `s`.`site_id`))) left join `erp_system`.`s_user` `u` on((`a`.`created_by` = `u`.`user_id`))) left join `erp_system`.`s_user` `u1` on((`a`.`updated_by` = `u1`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_articlecategory`
--
DROP TABLE IF EXISTS `v_cms_articlecategory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_articlecategory`  AS  select `ac`.`articlecategory_id` AS `articlecategory_id`,`ac`.`article_id` AS `article_id`,`ca`.`article_title` AS `article_title`,`ca`.`article_link` AS `article_link`,`ac`.`article_category_id` AS `article_category_id`,`ct`.`category_name` AS `category_name`,`ca`.`is_publish` AS `is_publish`,`ac`.`site_id` AS `site_id` from ((`cms_articlecategory` `ac` left join `cms_article` `ca` on((`ac`.`article_id` = `ca`.`article_id`))) left join `cms_article_category` `ct` on((`ac`.`article_category_id` = `ct`.`article_category_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_articletags`
--
DROP TABLE IF EXISTS `v_cms_articletags`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_articletags`  AS  select `ar`.`articletags_id` AS `articletags_id`,`ar`.`article_id` AS `article_id`,`ca`.`article_title` AS `article_title`,`ca`.`article_link` AS `article_link`,`ar`.`tags_id` AS `tags_id`,`ct`.`tags` AS `tags`,`ar`.`site_id` AS `site_id` from ((`cms_articletags` `ar` left join `cms_article` `ca` on((`ar`.`article_id` = `ca`.`article_id`))) left join `cms_tags` `ct` on((`ar`.`tags_id` = `ct`.`tags_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_article_category`
--
DROP TABLE IF EXISTS `v_cms_article_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_article_category`  AS  select `ac`.`article_category_id` AS `article_category_id`,`ac`.`category_name` AS `category_name`,`ac`.`img` AS `img`,`ac`.`description` AS `description`,`ac`.`parent_category_id` AS `parent_category_id`,`cac`.`category_name` AS `parent_category_name`,`ac`.`site_id` AS `site_id`,`ac`.`is_active` AS `is_active`,`ac`.`link` AS `link`,`ac`.`caption` AS `caption` from (`cms_article_category` `ac` left join `cms_article_category` `cac` on((`ac`.`parent_category_id` = `cac`.`article_category_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_comment`
--
DROP TABLE IF EXISTS `v_cms_comment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_comment`  AS  select `cc`.`comment_id` AS `comment_id`,`cc`.`user_id` AS `user_id`,`cc`.`article_id` AS `article_id`,`cc`.`name` AS `name`,`cc`.`email` AS `email`,`cc`.`website` AS `website`,`cc`.`parent_comment_id` AS `parent_comment_id`,`cc`.`content` AS `content`,`cc`.`created_on` AS `created_on`,`cc`.`created_by` AS `created_by`,`u`.`name` AS `created_by_name`,`cc`.`updated_on` AS `updated_on`,`cc`.`updated_by` AS `updated_by`,`u1`.`name` AS `updated_by_name`,`cc`.`is_publish` AS `is_publish`,`cc`.`site_id` AS `site_id`,`s`.`site_name` AS `site_name` from (((`cms_comment` `cc` left join `erp_system`.`s_site` `s` on((`cc`.`site_id` = `s`.`site_id`))) left join `erp_system`.`s_user` `u` on((`cc`.`created_by` = `u`.`user_id`))) left join `erp_system`.`s_user` `u1` on((`cc`.`updated_by` = `u1`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_gallery`
--
DROP TABLE IF EXISTS `v_cms_gallery`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_gallery`  AS  select `cg`.`gallery_id` AS `gallery_id`,`cg`.`gallery_name` AS `gallery_name`,`cg`.`description` AS `description`,`cg`.`caption` AS `caption`,`cg`.`img` AS `img`,`cg`.`created_on` AS `created_on`,`cg`.`created_by` AS `created_by`,`u`.`name` AS `created_by_name`,`cg`.`updated_on` AS `updated_on`,`cg`.`updated_by` AS `updated_by`,`u1`.`name` AS `updated_by_name`,`cg`.`is_publish` AS `is_publish`,`cg`.`site_id` AS `site_id`,`s`.`site_name` AS `site_name`,`cg`.`link` AS `link` from (((`cms_gallery` `cg` left join `erp_system`.`s_site` `s` on((`cg`.`site_id` = `s`.`site_id`))) left join `erp_system`.`s_user` `u` on((`cg`.`created_by` = `u`.`user_id`))) left join `erp_system`.`s_user` `u1` on((`cg`.`updated_by` = `u1`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_gallery_detail`
--
DROP TABLE IF EXISTS `v_cms_gallery_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_gallery_detail`  AS  select `gd`.`gallery_detail_id` AS `gallery_detail_id`,`gd`.`gallery_id` AS `gallery_id`,`cg`.`gallery_name` AS `gallery_name`,`gd`.`description` AS `description`,`gd`.`caption` AS `caption`,`gd`.`img` AS `img`,`gd`.`created_on` AS `created_on`,`gd`.`created_by` AS `created_by`,`u`.`name` AS `created_by_name`,`gd`.`is_publish` AS `is_publish`,`gd`.`site_id` AS `site_id`,`s`.`site_name` AS `site_name` from (((`cms_gallery_detail` `gd` left join `cms_gallery` `cg` on((`gd`.`gallery_id` = `cg`.`gallery_id`))) left join `erp_system`.`s_site` `s` on((`gd`.`site_id` = `s`.`site_id`))) left join `erp_system`.`s_user` `u` on((`gd`.`created_by` = `u`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_guestbook`
--
DROP TABLE IF EXISTS `v_cms_guestbook`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_guestbook`  AS  select `gb`.`guestbook_id` AS `guestbook_id`,`gb`.`name` AS `name`,`gb`.`title` AS `title`,`gb`.`content` AS `content`,`gb`.`email` AS `email`,`gb`.`company` AS `company`,`gb`.`created_on` AS `created_on`,`gb`.`is_read` AS `is_read`,`gb`.`is_publish` AS `publish`,`gb`.`read_on` AS `read_on`,`gb`.`read_by` AS `read_by`,`gb`.`site_id` AS `site_id` from `cms_guestbook` `gb` ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_menu`
--
DROP TABLE IF EXISTS `v_cms_menu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_menu`  AS  select `m`.`menu_id` AS `menu_id`,`m`.`menu_name` AS `menu_name`,`m`.`menu_type` AS `menu_type`,`m`.`menu_link` AS `menu_link`,`m`.`menu_icon` AS `menu_icon`,`m`.`menu_index` AS `menu_index`,`m`.`menu_title` AS `menu_title`,`m`.`description` AS `description`,`m`.`menu_group_id` AS `menu_group_id`,`cm`.`menu_name` AS `menu_group_name`,`m`.`parent_menu_id` AS `parent_menu_id`,`mn`.`menu_name` AS `parent_menu_name`,`m`.`article_id` AS `article_id`,`ca`.`article_title` AS `article_title`,`m`.`page_id` AS `page_id`,`m`.`is_active` AS `is_active`,`m`.`site_id` AS `site_id`,(select count(`x`.`menu_id`) from `cms_menu` `x` where ((`x`.`parent_menu_id` = `m`.`menu_id`) and (`x`.`is_active` = 1))) AS `jml_child` from ((((`cms_menu` `m` left join `cms_menu` `cm` on((`m`.`menu_group_id` = `cm`.`menu_id`))) left join `cms_menu` `mn` on((`m`.`parent_menu_id` = `mn`.`menu_id`))) left join `cms_article` `ca` on((`m`.`article_id` = `ca`.`article_id`))) left join `cms_page` `cp` on((`m`.`page_id` = `cp`.`page_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_menu_group`
--
DROP TABLE IF EXISTS `v_cms_menu_group`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_menu_group`  AS  select `mg`.`menu_group_id` AS `menu_group_id`,`mg`.`menu_group_name` AS `menu_group_name`,`mg`.`position` AS `position`,`mg`.`description` AS `description`,`mg`.`is_active` AS `is_active`,`mg`.`site_id` AS `site_id` from `cms_menu_group` `mg` ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_page`
--
DROP TABLE IF EXISTS `v_cms_page`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_page`  AS  select `p`.`page_id` AS `page_id`,`p`.`page_title` AS `page_title`,`p`.`img` AS `img`,`p`.`caption` AS `caption`,`p`.`content` AS `content`,`p`.`created_on` AS `created_on`,`p`.`created_by` AS `created_by`,`u`.`name` AS `created_by_name`,`p`.`updated_on` AS `updated_on`,`p`.`updated_by` AS `updated_by`,`u1`.`name` AS `updated_by_name`,`p`.`is_publish` AS `is_publish`,`p`.`site_id` AS `site_id`,`s`.`site_name` AS `site_name` from (((`cms_page` `p` left join `erp_system`.`s_site` `s` on((`p`.`site_id` = `s`.`site_id`))) left join `erp_system`.`s_user` `u` on((`p`.`created_by` = `u`.`user_id`))) left join `erp_system`.`s_user` `u1` on((`p`.`updated_by` = `u1`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_setting`
--
DROP TABLE IF EXISTS `v_cms_setting`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_setting`  AS  select `st`.`setting_id` AS `setting_id`,`st`.`var_set` AS `var_set`,`st`.`val_set` AS `val_set`,`st`.`file_set` AS `file_set`,`st`.`description` AS `description`,`st`.`is_file` AS `is_file`,`st`.`is_active` AS `is_active`,`st`.`site_id` AS `site_id` from `cms_setting` `st` ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_sllide`
--
DROP TABLE IF EXISTS `v_cms_sllide`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_sllide`  AS  select `sl`.`slide_id` AS `slide_id`,`sl`.`img` AS `img`,`sl`.`caption` AS `caption`,`sl`.`description` AS `description`,`sl`.`position` AS `position`,`sl`.`link` AS `link`,`sl`.`is_active` AS `is_active`,`sl`.`site_id` AS `site_id` from `cms_slide` `sl` ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_tags`
--
DROP TABLE IF EXISTS `v_cms_tags`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_tags`  AS  select `t`.`tags_id` AS `tags_id`,`t`.`tags` AS `tags`,`t`.`description` AS `description`,`t`.`img` AS `img`,`t`.`is_active` AS `is_active`,`t`.`site_id` AS `site_id` from `cms_tags` `t` ;

-- --------------------------------------------------------

--
-- Structure for view `v_cms_widget`
--
DROP TABLE IF EXISTS `v_cms_widget`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cms_widget`  AS  select `w`.`widget_id` AS `widget_id`,`w`.`widget_name` AS `widget_name`,`w`.`widget_icon` AS `widget_icon`,`w`.`caption` AS `caption`,`w`.`description` AS `description`,`w`.`widget_type` AS `widget_type`,`w`.`widget_index` AS `widget_index`,`w`.`position` AS `position`,`w`.`is_system` AS `is_system`,`w`.`widget_script` AS `widget_script`,`w`.`is_active` AS `is_active`,`w`.`site_id` AS `site_id` from `cms_widget` `w` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `cms_article`
--
ALTER TABLE `cms_article`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `article_link` (`article_link`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `cms_articlecategory`
--
ALTER TABLE `cms_articlecategory`
  ADD PRIMARY KEY (`articlecategory_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `article_category_id` (`article_category_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_articletags`
--
ALTER TABLE `cms_articletags`
  ADD PRIMARY KEY (`articletags_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `tags_id` (`tags_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_article_category`
--
ALTER TABLE `cms_article_category`
  ADD PRIMARY KEY (`article_category_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `parent_category_id` (`parent_category_id`);

--
-- Indexes for table `cms_author`
--
ALTER TABLE `cms_author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_comment`
--
ALTER TABLE `cms_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `parent_comment_id` (`parent_comment_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_gallery`
--
ALTER TABLE `cms_gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `cms_gallery_detail`
--
ALTER TABLE `cms_gallery_detail`
  ADD PRIMARY KEY (`gallery_detail_id`),
  ADD UNIQUE KEY `gallery_id` (`gallery_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `cms_guestbook`
--
ALTER TABLE `cms_guestbook`
  ADD PRIMARY KEY (`guestbook_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `menu_group_id` (`menu_group_id`),
  ADD KEY `parent_menu_id` (`parent_menu_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `cms_menu_group`
--
ALTER TABLE `cms_menu_group`
  ADD PRIMARY KEY (`menu_group_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `cms_setting`
--
ALTER TABLE `cms_setting`
  ADD PRIMARY KEY (`setting_id`),
  ADD UNIQUE KEY `var_set` (`var_set`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_slide`
--
ALTER TABLE `cms_slide`
  ADD PRIMARY KEY (`slide_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_tags`
--
ALTER TABLE `cms_tags`
  ADD PRIMARY KEY (`tags_id`),
  ADD UNIQUE KEY `tags` (`tags`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_var`
--
ALTER TABLE `cms_var`
  ADD PRIMARY KEY (`var_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `cms_widget`
--
ALTER TABLE `cms_widget`
  ADD PRIMARY KEY (`widget_id`),
  ADD KEY `site_id` (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_article`
--
ALTER TABLE `cms_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_articlecategory`
--
ALTER TABLE `cms_articlecategory`
  MODIFY `articlecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_articletags`
--
ALTER TABLE `cms_articletags`
  MODIFY `articletags_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_article_category`
--
ALTER TABLE `cms_article_category`
  MODIFY `article_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms_author`
--
ALTER TABLE `cms_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_comment`
--
ALTER TABLE `cms_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cms_gallery`
--
ALTER TABLE `cms_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_gallery_detail`
--
ALTER TABLE `cms_gallery_detail`
  MODIFY `gallery_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_guestbook`
--
ALTER TABLE `cms_guestbook`
  MODIFY `guestbook_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cms_menu_group`
--
ALTER TABLE `cms_menu_group`
  MODIFY `menu_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_setting`
--
ALTER TABLE `cms_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms_slide`
--
ALTER TABLE `cms_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cms_tags`
--
ALTER TABLE `cms_tags`
  MODIFY `tags_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms_var`
--
ALTER TABLE `cms_var`
  MODIFY `var_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_widget`
--
ALTER TABLE `cms_widget`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms_articlecategory`
--
ALTER TABLE `cms_articlecategory`
  ADD CONSTRAINT `cms_articlecategory_ibfk_1` FOREIGN KEY (`article_category_id`) REFERENCES `cms_article_category` (`article_category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_articlecategory_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `cms_article` (`article_id`) ON UPDATE CASCADE;

--
-- Constraints for table `cms_articletags`
--
ALTER TABLE `cms_articletags`
  ADD CONSTRAINT `cms_articletags_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `cms_article` (`article_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_articletags_ibfk_3` FOREIGN KEY (`tags_id`) REFERENCES `cms_tags` (`tags_id`) ON UPDATE CASCADE;

--
-- Constraints for table `cms_article_category`
--
ALTER TABLE `cms_article_category`
  ADD CONSTRAINT `cms_article_category_ibfk_1` FOREIGN KEY (`parent_category_id`) REFERENCES `cms_article_category` (`article_category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `cms_comment`
--
ALTER TABLE `cms_comment`
  ADD CONSTRAINT `cms_comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `cms_article` (`article_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_comment_ibfk_3` FOREIGN KEY (`parent_comment_id`) REFERENCES `cms_comment` (`comment_id`) ON UPDATE CASCADE;

--
-- Constraints for table `cms_gallery_detail`
--
ALTER TABLE `cms_gallery_detail`
  ADD CONSTRAINT `cms_gallery_detail_ibfk_2` FOREIGN KEY (`gallery_id`) REFERENCES `cms_gallery` (`gallery_id`) ON UPDATE CASCADE;

--
-- Constraints for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD CONSTRAINT `cms_menu_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `cms_article` (`article_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_menu_ibfk_2` FOREIGN KEY (`menu_group_id`) REFERENCES `cms_menu_group` (`menu_group_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_menu_ibfk_3` FOREIGN KEY (`page_id`) REFERENCES `cms_page` (`page_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cms_menu_ibfk_4` FOREIGN KEY (`parent_menu_id`) REFERENCES `cms_menu` (`menu_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
