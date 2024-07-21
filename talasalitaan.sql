-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2024 at 05:15 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22212647_talasalitaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `id` int(100) NOT NULL,
  `Word` varchar(100) NOT NULL,
  `Meaning` varchar(255) NOT NULL,
  `English_Word` varchar(255) NOT NULL,
  `Audio_File` varchar(255) NOT NULL,
  `Sentence` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`id`, `Word`, `Meaning`, `English_Word`, `Audio_File`, `Sentence`) VALUES
(89, 'Dalangin', 'Pag-asam na mangyari o matupad mula sa Diyos.\r\n', 'Prayer', 'audio_uploads/Dalangin.mp3', 'Ang dalangin ay nagbibigay ng lakas at pag-asa sa mga taong nananampalataya sa gitna ng mga pagsubok at hamon ng buhay.'),
(93, 'Kapitbahay', 'Katabing bahay na kabilang sa komunidad.\r\n', 'Neighbor', 'audio_uploads/kapitbahay.mp3', 'Ang kapitbahay namin ay may magandang halimbawa ng pagiging masipag at mapagkumbaba.'),
(94, 'Sinulid', 'Hibla na gamit sa pagtatahi at madalas na nakarolyo. ', 'Thread', 'audio_uploads/sinulid.mp3', 'Ang sinulid ay isang pangunahing kagamitan sa pagtatahi ng tela.'),
(95, 'Karayom', 'Gawa sa metal kung saan isinusuot ang sinulid sa butas at gamit sa pagtatahi.\r\n', 'Needle', 'audio_uploads/karayom.mp3', 'Ang karayom ay may maliit at matulis na uka na ginagamit upang tahiin o magdikit ng mga bahagi ng tela.'),
(96, 'Pumayag', 'Nagbigay ng pahintulot.', 'Agreed', 'audio_uploads/pumayag.mp3', 'Pumayag ang kanyang magulang na magkaroon siya ng panibagong alagang aso.'),
(97, 'Kuwaderno', 'Gawa at pinagsama-samang papel na ginagamit sa pagsusulat; notebook\r\n', 'Notebook', 'audio_uploads/kuwaderno.mp3', 'Mahalaga ang pagkakaroon ng malinis at organisadong kuwaderno sa eskwela.'),
(98, 'Pasada', 'Biyaheng ginagawa ng isang tyuper ng dyip sa buong maghapon upang kumita ng pera mula sa bayad ng mga pasahero.', '', 'audio_uploads/pasada.mp3', 'Mahalaga ang maayos na pagmamaneho sa mga pasada upang maiwasan ang aksidente at sakuna sa kalsada.'),
(99, 'Trahedya', 'Aksidente o pangyayaring hindi inaasahan.', 'Tragedy', 'audio_uploads/trahedya.mp3', 'Ang nangyaring trahedya noong nakaraang buwan ay nagdulot ng kalungkutan sa mga mahal sa buhay ng biktima.'),
(100, 'Kabuhayan', 'Kayamanan/Pinanggalingan ng kita at paggastos sa mga pangangailangan.\r\n', 'Livelihood', 'audio_uploads/kabuhayan.mp3', 'Ang negosyo ng pagtitinda ng gulay sa palengke ang nagsilbing kabuhayan ng kanilang pamilya. '),
(101, 'Sambit', 'Bulalas ng bibig o usal ng bibig.\r\n', 'Saying', 'audio_uploads/sambit.mp3\r\n', 'Ang pag sambit niya ng mahalagang impormasyon ay kanyang ikinagulat. '),
(102, 'Nalalabi', 'Natitira', 'Remaining', 'audio_uploads/nalalabi.mp3', 'Binilang niya ang nalalabi pang oras bago matapos ang kanyang klase.'),
(103, 'Maleta', 'Malaking bag na puno ng gamit tulad ng mga damit at madalas dala kapag bumibiyahe sa ibang bansa o malalayong lugar.', 'Suitcase', 'audio_uploads/maleta.mp3', 'Nilalaman ng kanyang maleta ang mga gamit na kakailanganin niya sa kanyang bakasyon sa Japan. '),
(104, 'Impormasyon', 'Ito ay mga kaalaman o ideyang nakukuha sa panonood,  pagbabasa, pakikinig at pakikipag-usap.\r\n', 'Information', 'audio_uploads/impormasyon.mp3', 'Ang impormasyon ay mahalaga sa pagpapalaganap ng kaalaman at pagpapalawak ng pang-unawa ng mga tao.'),
(105, 'Teknolohiya', 'Mga makabagong kagamitan, imbensyon na nakatutulong upang mapabilis ang gawain ng mga tao.', 'Technology', 'audio_uploads/teknolohiya.mp3', 'Ang teknolohiya ay nagbibigay ng mga bagong oportunidad sa edukasyon, negosyo, at paglikha ng trabaho sa digital na ekonomiya.'),
(106, 'Lipunan', 'Lugar na ginagalawan ng tao, may namumuno, may alintuntuning sinusunod ang mga tao.', 'Society', 'audio_uploads/lipunan.mp3', 'Ang pagkakaroon ng maayos at patas na lipunan ay mahalaga upang mapanatili ang kapayapaan at kaayusan sa ating bansa.'),
(107, 'Piko', 'Uri ng larong pambata na ginagamitan ng pamato at ang sementong may disenyo na maaaring tapakan o lundagan ng manlalaro.', 'Hopscotch', 'audio_uploads/piko.mp3', 'Pagsapit ng hapon, ang mga bata ay madalas nakikita ng naglalaro ng piko sa kalsada.'),
(108, 'Luksong-tinik', 'Uri ng larong pambata na ginagamitan ng mga daliri ng kamay o paa bilang panukat ng hangganan ng tatalunin.', '', 'audio_uploads/luksong tinik.mp3', 'Ang luksong-tinik ay hindi lamang isang laro kundi isang tradisyon na nagpapakita ng pagkakaisa at kasiyahan sa mga batang Pilipino.'),
(109, 'Kaharian', 'Istruktura o gusaling tinatawag ding palasyo kung saan ang hari o reyna ang namumuno.', 'Kingdom', 'audio_uploads/kaharian.mp3', 'Ang mga kaharian ay may sariling sistema ng pamamahala, kultura, at tradisyon na nagbibigay ng identidad sa kanilang mga mamamayan.'),
(110, 'Mangangaso', 'Mga taong nanghuhuli ng mga aso sa kabundukan.', 'Hunter', 'audio_uploads/Mangangaso.mp3', 'Sa ilang kultura, ang mangangaso ay itinuturing na bayani dahil sa kanilang kakayahan sa pagtustos ng pagkain para sa kanilang tribu o komunidad.'),
(111, 'Mahika', 'Salamangka o kapangyarihang baguhin ang isang bagay batay sa kakayahan at imahinasyon ng tao.', 'Magic', 'audio_uploads/Mahika.mp3', 'Ang mahika ay isang misteryosong kapangyarihan na umuugnay sa mga kakaibang kakayahan at kapangyarihan.'),
(112, 'Kagubatan', 'Napapalibutan ng mga matatayog na puno at may mga mababangis na hayop.', 'Forest', 'audio_uploads/Kagubatan.mp3', 'Ang kagubatan ay tahanan ng iba\'t ibang uri ng halaman, hayop, at iba pang organismo na nagbibigay ng natural na ekosistema.'),
(113, 'Sumangguni', 'Paghingi ng kaalaman, kasagutan o ideya sa isang eksperto.', 'Consult', 'audio_uploads/Sumangguni.mp3', 'Sa mga suliranin sa espirituwalidad, maraming tao ang sumasangguni sa kanilang mga relihiyon o paniniwala upang mahanap ang kasagutan at kapanatagan ng loob.'),
(114, 'Matabunan', 'Nalagyan ng takip upang hindi mapansin o hindi makita.', 'Cover', 'audio_uploads/Matabunan.mp3', 'Minadali nilang matabunan ang nasirang butas upang hindi sila mapagalitan. '),
(115, 'Ligtas', 'Malayo sa panganib o malayo sa mga taong mapagsamantala.', 'Safe', 'audio_uploads/Ligtas.mp3', 'Dahil sa pagtutulungan ng bawat isa naging ligtas ang lahat sa nangyaring sunog. '),
(116, 'Liham', 'Sulat na naglalaman ng impormasyon o kuwento sa mga taong tatanggap.', 'Letter', 'audio_uploads/Liham.mp3', 'Ang liham ay maaaring gamitin upang magpahayag ng damdamin, magbigay ng impormasyon, o magpadala ng mensahe sa isang tao o grupo ng mga tao.'),
(117, 'Paliparan', 'Lugar para sa pagdating at pag-alis ng eroplano.\r\n', 'Airport', 'audio_uploads/Paliparan.mp3', 'Ang mga empleyado sa paliparan ay madalas na sumasailalim sa pagsasanay upang masiguro ang kaligtasan ng mga biyahero. '),
(118, 'Bagahe', 'Mga gamit/kagamitan na ibabyahe.', 'Luggage', 'audio_uploads/Bagahe.mp3', 'Dahil sa mabigat na bagahe, nahihirapan siya sa pag akyat ng hagdan patungo sa kanyang silid. '),
(119, 'Pasahero', 'Taong sumasakay ng pampublikong sasakyan.		', 'Passenger', 'audio_uploads/Pasahero.mp3', 'Ang mga pasahero sa tren ay nag-aabang sa mga istasyon upang makasakay o makababa depende sa kanilang destinasyon. '),
(120, 'Maybahay', 'Katawagan sa asawa o kabiyak ng lalaki.', 'Housewife', 'audio_uploads/Maybahay.mp3', 'Ang maybahay ay ang babaeng responsable sa pagpapatakbo ng tahanan at pag-aalaga sa pamilya.'),
(121, 'Hapag-kainan', 'Mesa kung nagsasalo-salo sa pagkain ang buong pamilya.\r\n', 'Dining table', 'audio_uploads/Hapag kainan.mp3', 'Sa tuwing araw ng linggo, sinisigurado ng kanyang pamilya na sabay-sabay na kumain sa hapag-kainan.'),
(122, 'Pasaporte', 'Dokumentong pinaglalagyan ng bisa gamit papunta sa ibang bansa.', 'Passport', 'audio_uploads/Pasaporte.mp3', 'Ang pasaporte ay isang opisyal na dokumento na nagbibigay ng karapatan sa isang indibidwal na maglakbay sa ibang bansa.'),
(123, 'Nagpasya', 'Nagdesisyon', 'Decided', 'audio_uploads/nagpasya.mp3', 'Sa kabila ng mga pagsubok, nagpasya siyang ipagpatuloy ang kanyang pangarap na maglakbay sa ibang bansa.'),
(124, 'Kaakit-akit', 'Maganda at naka-eenganyo sa pangingin.', 'Attractive', 'audio_uploads/kaakit akit.mp3', ' Ang makukulay na bulaklak na makikita sa hardin ay kaakit-akit. '),
(125, 'Telebisyon ', 'Kagamitang may palabas na pinanonooran ng tao.', 'Television ', 'audio_uploads/telebisyon.mp3', 'Tiyak na natutuwa ang mga bata sa tuwing pinapanood nila ang mga paboritong palabas sa telebisyon. '),
(126, 'Mapanlinlang ', 'Mandaraya at walang katotohanan ang sinasabi.', 'Deceptive ', 'audio_uploads/mapanlinlang.mp3', 'Sa pamamagitan ng mapanlinlang na pamamaraan, maaaring mabiktima ang mga tao at mawalan ng kanilang mga ari-arian o salapi.'),
(127, 'Anunsyo', 'Patalastas/nagbibigay impormasyon.', 'Announcement', 'audio_uploads/anunsyo.mp3', 'Nag anunsyo ang mga paaralan sa Cavite na suspendido ang mga klase dahil sa lakas ng ulan.'),
(128, 'Saglit', 'Panandalian lamang at hindi nagtatagal.', 'Instant', 'audio_uploads/saglit.mp3', 'Dumaan siya saglit sa palengke upang makabili ng kulang na sangkap sa kanyang lulutuin na sinigang. '),
(129, 'Soda', 'Matamis na inumin, karaniwang malamig.', 'Soda', 'audio_uploads/soda.mp3', 'Nang dahil sa sobrang init, maraming tao ang pinipiling uminom ng soda kesa sa tubig.'),
(130, 'Sinusuyo', 'Nilalambing', 'Courting', 'audio_uploads/sinusuyo.mp3', 'Ang binata ay patuloy na sinusuyo ang kanyang minamahal sa pamamagitan ng mga bulaklak at mensahe ng pagmamahal.'),
(131, 'Pera', 'Gamit sa pagbili ng produkto na maaring papel o barya.', 'Money', 'audio_uploads/pera.mp3', 'Sinisigurado niya na sapat ang kanyang dalang pera sa tuwing mamimili siya sa palengke. '),
(132, 'Produkto', 'Ani ng pagtratrabaho o pagtatanim.', 'Product', 'audio_uploads/produkto.mp3', 'Ang kalidad ng isang produkto ay mahalaga upang mapanatili ang tiwala ng mga mamimili.'),
(133, 'Sanga', 'Bahagi ng puno.', 'Branch', 'audio_uploads/Sanga.mp3', 'Ang puno ay may maraming sanga na nagpapahayag ng kanyang ganda sa buong paligid.'),
(134, 'Baryo', 'Maliit na komunidad na tinitirhan ng mga tao.', 'Village', 'audio_uploads/Baryo.mp3', 'Ang mga tao sa kabilang baryo ay kilala sa pagiging masayahin at mapagbigay. '),
(135, 'Abala', 'Maraming gawain o pinagtutuunan ng pansin.', 'Preoccupied', 'audio_uploads/Abala.mp3', 'Ang mga mag-aaral ay abala sa pag-aaral at paghahanda para sa nalalapit nilang pagsusulit. '),
(136, 'Matanaw', 'Makita o masulyapan ang isang bagay o lugar.', 'Sight', 'audio_uploads/Matanaw.mp3', 'Sa malawak na taniman, napakagandang matanaw ang mga sariwang halaman at bulaklak.'),
(137, 'Sinampay', 'Mga damit na nakasabit sa sampayan sapagkat pinatutuyo.', 'Hanged', 'audio_uploads/Sinampay.mp3', 'Pagkatapos masiguro na tuyo na ang mga labada, aking inalis ang mga ito sa sinampay upang maayos na itong iayos sa loob ng aparador.'),
(138, 'Paglalakbay', 'Pamamasyal o pagpunta sa iba’t ibang lugar.', 'Voyage', 'audio_uploads/Paglalakbay.mp3', 'Ang paglalakbay ay maaaring magdulot ng mga hindi malilimutang alaala at karanasan na magiging bahagi ng kwento at pagpapahalaga sa buhay.'),
(139, 'Pagbabakasakali', 'Paggawa ng isang bagay na hindi alam ang resulta o kalalabasan.\r\n', 'Perhance', 'audio_uploads/Pagbabakasakali.mp3', 'Sa kabila ng kawalan ng katiyakan, nagpasya siya na magpagawa ng bahay sa probinsya bilang isang pagbabakasakali sa mas magandang buhay.'),
(140, 'Himala', 'Milagro o pangyayaring hindi mapaliwanag.', 'Miracle', 'audio_uploads/Himala.mp3', 'Ang pag galing ng may sakit na walang gamot ang isa sa mga halimbawa ng himala na madalas nating marinig.'),
(141, 'Makapangyarihan', 'May kontrol sa lahat.', 'Powerful', 'audio_uploads/Makapangyarihan.mp3', 'Ang mga diyos at diyosa sa mitolohiya ay itinuturing na mga makapangyarihang nilalang na may kontrol sa mga pangyayari sa kalikasan at sa buhay ng tao.'),
(142, 'Siyudad', 'Lugar na tinatawag ding lungsod o kabisera.', 'City', 'audio_uploads/Siyudad.mp3', 'Ang siyudad ay puno ng magagandang gusali at modernong imprastraktura.'),
(143, 'Sangkatauhan', 'Tao sa mundo/nilalang na may kakayahang mag-isip at makaramdam.', 'Mankind', 'audio_uploads/Sangkatauhan.mp3', 'Ang pagtutulungan at pagmamalasakit sa kapwa ay mahalaga sa pagpapalaganap ng kapayapaan at pagkakaisa sa buong sangkatauhan.'),
(144, 'Kahihinatnan', 'Naging resulta ng isang gawain o desisyon.', 'Outcome', 'audio_uploads/Kahihinatnan.mp3', 'Ipinalahanan siya ng kanyang mga kaibigan sa maaaring kahihinatnan ng kanyang desisyon. '),
(145, 'Payabungin', 'Kakayahang paunlarin at palaguin ang isang bagay.', 'Propagate', 'audio_uploads/Payabungin.mp3', 'Ang mga magsasaka ay patuloy na nagsisikap upang payabungin ang kanilang ani sa pamamagitan ng paggamit ng organikong pataba.'),
(146, 'Hamog', 'Mamasa-masang kapaligiran sa umaga.', 'Dew', 'audio_uploads/Hamog.mp3', 'Ang hamog ay nagdadala ng malamig na simoy sa mga tanawin sa bukang-liwayway.'),
(147, 'Kahusayan', 'Magaling', 'Excellence', 'audio_uploads/Kahusayan.mp3', 'Nang dahil sa kahusayan niya sa pagkanta, hinirang siyang kampeon sa kompetisyon. '),
(148, 'Kalagayan', 'Sitwasyon sa buhay ng tao.', 'Condition', 'audio_uploads/Kalagayan.mp3', 'Sa kasalukuyang kalagayan ng mundo, mahalaga ang pagtutulungan at pagkakaisa.'),
(149, 'Trato', 'Pagtingin o turing sa isang taong nagtatrabaho.', 'Treatment', 'audio_uploads/Trato.mp3', 'Mahalaga ang patas na trato sa lahat ng mga empleyado upang mapanatili ang magandang samahan sa opisina.'),
(150, 'Panandalian', 'Pansamantala o hindi pangmatagalan.', 'Ephemeral', 'audio_uploads/Panandalian.mp3', 'Napag desisyunan niyang manghiram na lamang ng damit sa kanyang kapatid kesa bumili dahil panandalian lamang niya ito magagamit. '),
(151, 'Barko', 'Sasakyang pandagat na kalimitan ay napakalaki.', 'Ship', 'audio_uploads/Barko.mp3', 'Ang malaking barko ay naglalayag sa karagatan upang maghatid ng mga kalakal sa iba\'t ibang bansa.'),
(152, 'Amo', 'Taong namamahala sa kaniyang mga trabahador.', 'Employer', 'audio_uploads/Amo.mp3', 'Ang tamang pagtugon sa mga utos ng amo ay nagpapakita ng dedikasyon at propesyonalismo ng mga empleyado.'),
(153, 'Pangarap', 'Ninanais sa buhay sa pagdating ng panahon.', 'Dream', 'audio_uploads/Pangarap.mp3', 'Ang pagtupad sa mga pangarap ay nagbibigay inspirasyon sa mga tao upang magpatuloy sa buhay.'),
(154, 'Trabahador', 'Manggagawa, karaniwang manggagawa sa isang tindahan, pamilihan, at namamasukan sa kanilang amo.', 'Worker', 'audio_uploads/Trabahador.mp3', 'Ang kinikita ng isang trabahador ay hindi sapat lalo na sa panahon ngayon.'),
(155, 'Panadero', 'Taong nagluluto ng tinapay.', 'Baker', 'audio_uploads/Panadero.mp3', 'Ang amoy ng ginagawang tinapay ng mga panadero ay nagbibigay bango sa buong lugar.'),
(156, 'Pandesal', 'Uri ng tinapay na madalas ibinebenta sa mga tao sa umaga.', 'Salt bread', 'audio_uploads/Pandesal.mp3', 'Ang pagkain ng pandesal sa umaga ay kinaugalian na ng mga Pilipino.'),
(157, 'Madaling-araw', 'Oras kung saan umaga na ngunit madilim pa ang paligid; halimbawa ay alas-3 hanggang alas-5.', 'Dawn', 'audio_uploads/Madaling-araw.mp3', 'Madalas akong gumising sa madaling-araw upang mag-ehersisyo at simulan ang araw ng may positibong enerhiya.'),
(158, 'Panaderya', 'Lugar ginagawa at itinitinda ang tinapay.', 'Bakery', 'audio_uploads/Panaderya.mp3', 'Ang panaderya sa aming lugar ay kilala sa kanilang masarap na tinapay na laging mainit at bago.'),
(159, 'Agahan', 'Almusal/agahan', 'Breakfast', 'audio_uploads/Agahan.mp3', 'Ang agahan ay ang unang pagkain na kinakain sa umaga upang magkaroon ng lakas at enerhiya para sa araw.'),
(160, 'Abalang-abala', 'Walang tigil sa paggawa.', 'Busy', 'audio_uploads/Abalang-abala.mp3', 'Ang mga mag-aaral sa high school ay abalang-abala sa paghahanda para sa nalalapit nilang kompetisyon.'),
(161, 'Poong maykapal', 'Diyos na dakila at manlilikha ng mundo.', 'Almighty', 'audio_uploads/Poong-maykapal.mp3', 'Sa tuwing may malaking hamon sa buhay, nananalangin si Maria sa Poong Maykapal upang gabayan siya.'),
(162, 'Batas', 'Mga alituntunin na dapat sundin ng tao at upang maging ligtas.', 'Law', 'audio_uploads/Batas.mp3', 'Ang bawat bansa ay may kani-kanilang mga batas na dapat sundin ng kanilang mamamayan.'),
(163, 'Kawangis', 'Kahawig/kamukha', 'Similar', 'audio_uploads/Kawangis.mp3', 'Ang lumang tahanan sa bayan ay kawangis ng mga istrakturang makikita sa mga lumang pelikula.'),
(164, 'Pagsubok', 'Mga pangyayaring hindi inaasahang dumarating.', 'Test', 'audio_uploads/Pagsubok.mp3', 'Ang buhay ay puno ng mga pagsubok na nagtuturo sa atin ng mga mahahalagang aral sa buhay.'),
(165, 'Pamantayan', 'Pinagbasehan o pinagbatayan.', 'Standard', 'audio_uploads/Pamantayan.mp3', 'Sa pagpili ng kandidato, ang pamantayan ay batay sa kanilang kakayahan at integridad'),
(166, 'Pinagpala', 'Binibigyan ng biyaya at umuunlad.', 'Blessed', 'audio_uploads/Pinagpala.mp3', 'Sa kabila ng aming mga pagkukulang, kami\'y pinagpala sapagkat patuloy na binibigyan ng pag-asa at lakas ng loob.'),
(167, 'Ani', 'Maaaring prutas, gulay, o anumang pagkain na nakukuha ng tao mula sa pagtatanim.', 'Crop', 'audio_uploads/Ani.mp3', 'Masayang pinamigay ni Jose sa kanyang mga kapamilya ang mga ani niya sa kanyang tanim. '),
(168, 'Mang-uumit', 'Mga taong kumukuha ng mga bagay na hindi sa kanila.', 'Thief', 'audio_uploads/Mang-uumit.mp3', 'Dahil sa hirap ng buhay, madalas mang-uumit si Miguel tuwing gabi.'),
(169, 'Bodega', 'Lugar kung saan itinatago o iniimbak ang mga gamit o pagkain.', 'Warehouse', 'audio_uploads/Bodega.mp3', 'Sa likod ng tindahan, matatagpuan ang malawak na bodega na puno ng mga kahon at kagamitan.'),
(170, 'Kabundukan', 'Mataas na anyong lupa na kakikitaan ng mga halaman at punong kahoy.', 'Mountains', 'audio_uploads/Kabundukan.mp3', 'Sa likod ng aming bakuran, matatanaw ang magandang tanawin ng mga kabundukan.'),
(171, 'Kusina', 'Bahagi ng bahay kung saan inihahanda at iniluluto ang pagkain.', 'Kitchen', 'audio_uploads/Kusina.mp3', 'Sa kusina, nagluluto si Lola ng kanyang paboritong adobong manok tuwing Linggo.'),
(172, 'Sako', 'Lalagyan yari sa plastik, karaniwang pinag-aalisan ng bigas o asukal. ', 'Sack', 'audio_uploads/Sako.mp3', 'Ang mga mangingisda ay nagdadala ng sako para sa isda mula sa bangka upang ipagbili sa palengke.'),
(173, 'Uso', 'Mga kilos o bagay na napapanahon at kinawiwilihan ng tao.', 'Trend', 'audio_uploads/Uso.mp3', 'Sa karamihan, ang mga Korean dramas at K-pop ay tila laging nasa uso.'),
(174, 'Natatanaw', 'Nakikita o napagmamasdan sa kalayuan.', 'Visible', 'audio_uploads/Natatanaw.mp3', 'Mula sa tuktok ng bundok, natatanaw ang malawak na kapatagan.'),
(175, 'Malungkot', 'Damdaming hindi masaya dala ng suliranin.', 'Sad', 'audio_uploads/Malungkot.mp3', 'Matapos mawalan ng alagang aso, si Sofia ay malungkot at nangungulila sa kanyang mahal na alaga.'),
(176, 'Ilog', 'Uri ng anyong tubig.', 'River', 'audio_uploads/Ilog.mp3', 'Nang dahil sa init ng panahon, marami kang makikitang mga kabataan na masayang naliligo sa malinis na ilog. '),
(177, 'Munti', 'Maliit na bagay.', 'Little', 'audio_uploads/Munti.mp3', 'Ang munting bulaklak sa hardin ay nagbibigay liwanag at saya sa buong bakuran.'),
(178, 'Makinang', 'Makislap o nakasisilaw sa mata mula sa sinag ng araw.', 'Sparkling', 'audio_uploads/Makinang.mp3', 'Tuwing lunes sinisigurado ko na ang aking sapatos ay makinang bago umalis ng bahay.'),
(179, 'Tangayin', 'Madala dahil sa lakas ng hangin o tubig.', 'Sweep away', 'audio_uploads/Tangayin.mp3', 'Kapag may malakas na hangin, maaaring tangayin nito ang mga bubong ng mga bahay.'),
(180, 'Tiyak', 'Eksakto, sigurado o tamang pahayag o desisyon.', 'Certain', 'audio_uploads/Tiyak.mp3', 'Masaya niyang ipinasa ang kanyang proyekto dahil tiyak siyang mataas ang kanyang makukuhang marka. '),
(181, 'Nakamit', 'Natanggap o nakuha ng isang tao.', 'Attained', 'audio_uploads/Nakamit.mp3', 'Pagkatapos ilang beses niyang pagkatalo sa kompetisyon, nakamit din ni Pedro ang kanyang pangarap na tagumpay.'),
(182, 'Sumapit', 'Dumating o pangyayari sa kasalukuyan.', 'Arrive', 'audio_uploads/Sumapit.mp3', 'Nang sumapit ang gabi, nagsimula na ang mga tala na magpakita sa kalangitan.'),
(183, 'Umaalipin', ' Mga taong nagpapahirap o kumukontrol sa kapwa nila.', 'Servant', 'audio_uploads/Umaalipin.mp3', 'Sa ilang kultura, ang mga tao ay dating umaalipin sa kanilang mga pinuno, sumusunod sa kanilang mga utos at kagustuhan.'),
(184, 'Tuwina', 'Palagi o madalas na pangyayari.', 'Always', 'audio_uploads/Tuwina.mp3', 'Sa tuwina na umuuwi siya galing sa ibang bansa, sinisigurado niyang may pasalubong ang kanyang magulang.'),
(185, 'Sawa', 'Uri ng hayop na tulad ng ahas.', 'Python', 'audio_uploads/Sawa.mp3', 'Nagulat si Juan na makitang may malaking sawa sa kanilang kubo.'),
(186, 'Yumuyuko', 'Ang ulo ay ibinababa tanda ng pagkilala sa tao at paggalang.', 'Bowing', 'audio_uploads/Yumuyuko.mp3', 'Nakasanayan na ni Carlos nasa tuwing may nakakasalubong na matanda ay yumuyuko ito bilang magbigay respeto.'),
(187, 'Nangangalay', 'Namamanhid o napapagod', 'Numb', 'audio_uploads/Nangangalay.mp3', 'Pagkatapos ng mahabang biyahe, naramdaman niya ang pagkakaroon ng nangangalay sa kanyang mga binti.'),
(188, 'Kompanya', 'Lugar o opisina ng isang pagawaan na pagmamay-ari ng isa o maraming tao.', 'Company', 'audio_uploads/Kompanya.mp3', 'Ang mga empleyado ay nagkakaisa sa kanilang layunin na palakasin ang kompanya at mapaunlad ang kanilang serbisyo.'),
(189, 'Tagumpay', 'Wagi/panalo', 'Success', 'audio_uploads/Tagumpay.mp3', 'Matapos ang matinding pagpupursige at sakripisyo, sa huli ay nakamit niya pa din ang tagumpay. '),
(190, 'Kargador', 'Taong nagbubuhat ng gamit o produkto sa isang pabrika.', 'Porter', 'audio_uploads/Kargador.mp3', 'Bakas sa mga mukha ng mga kargador ang hirap ng kanilang trabaho. '),
(191, 'Manibela', 'Bahagi ng sasakyang ginagamit sa pagpapatakbo ng sasakyan.', 'Steering wheel ', 'audio_uploads/Manibela.mp3', 'Ang manibela ay isang bahagi ng sasakyan na ginagamit upang kontrolin ang direksyon ng pagtakbo nito.'),
(192, 'Pumasada', 'Uri ng trabaho kung saan kumikita ang isang drayber mula sa bayad ng mga pasahero ng dyip.', '', 'audio_uploads/Pumasada.mp3', 'Kapag umuulan ng malakas, hirap pumasada ang mga tricycle.'),
(193, 'Lungsod', 'Siyudad, sentro ng negosyo, at kalakaran ng bansa.', 'City', 'audio_uploads/Lungsod.mp3', 'Ang lungsod ay isang pook na puno ng buhay at aktibidad ng mga tao.'),
(194, 'Dyip', 'Uri ng pampasaherong sasakyan na ginagamit sa lungsod.', 'Jeep', 'audio_uploads/Dyip.mp3', 'Dyip ang pangunahing ginagamit na transportasyon ng mga estudyante.'),
(195, 'Nanghina', 'Napagal/nawalan ng lakas at hindi makakilos.', 'Weakend', 'audio_uploads/Nanghina.mp3', 'Nang dahil sa kanyang malubhang sakit, unti-unting ng nanghina ang kanyang katawan.'),
(196, 'Matulin', 'Mabilis na kilos.', 'Swift', 'audio_uploads/Matulin.mp3', 'Matulin na pinatakbo ni Carlos ang kanyang sasakyan upang makaiwas sa trapiko.'),
(197, 'Nilinlang', 'Niloko', 'Deceived', 'audio_uploads/Nilinlang.mp3', 'Siya ay lubos na nasaktan dahil nilinlang siya ng kaniyang kaibigan.'),
(198, 'Kakahuyan', 'Lugar kung saan maraming puno o kahoy sa paligid.', 'Woodland', 'audio_uploads/Kakahuyan.mp3', 'Sa loob ng kakahuyan, maaari kang makakita ng iba’t ibang uri ng halaman’t puno.'),
(199, 'Naligaw', 'Nabiling/hindi alam ang pupuntahan o daraanan', 'Strayed', 'audio_uploads/Naligaw.mp3', 'Habang naglalakad sa siyudad, naligaw ako sa mga eskinita at natagpuan ang sarili ko sa hindi pamilyar na lugar.'),
(200, 'Palaso', 'Bala sa pana.', 'Arrow', 'audio_uploads/Palaso.mp3', 'Ang palaso ay isang uri ng sandata na karaniwang ginagamit sa pangingisda at pangangaso.'),
(201, 'Galak', 'Matinding saya/tuwa', 'Delight', 'audio_uploads/Galak.mp3', 'Ang mga bata ay sumisigaw sa galak nang makita nila ang pagdating ng kanilang mga magulang. '),
(202, 'Talinghaga', 'Mga salitang malalim ang kahulugan ngunit kapupulutan ng aral.', 'Parable', 'audio_uploads/Talinghaga.mp3', 'Ang talinghaga ay isang uri ng pahayag o salita na gumagamit ng mga simbolismo o pambalot na kahulugan upang magbigay ng mas malalim na mensahe.'),
(203, 'Isinalaysay', 'Ikinuwento o ibinahagi sa ibang tao.', 'Narrated', 'audio_uploads/Isinalaysay.mp3', 'Ang guro ay isinalaysay sa klase ang mahahalagang pangyayari sa kasaysayan ng bansa.'),
(204, 'Binhi', 'Butil na buto na itinatanim sa lupa upang tumubo.', 'Seed', 'audio_uploads/Binhi.mp3', 'Sa bawat binhi ay taglay ang potensyal na maging malaking puno, halaman, o iba pang uri ng halamang kinabibilangan nito.'),
(205, 'Himpapawid', 'Lugar kung saan lumilipad ang mga ibon o eroplano.', 'Sky', 'audio_uploads/Himpapawid.mp3', 'Makikita sa himpapawid ang mga iba’t ibang ibon. '),
(206, 'Pag-ibig', 'Damdaming naghahayag o nagpapakita ng pagmamahal.', 'Love', 'audio_uploads/Pag-ibig.mp3', 'Ang pag-ibig ay isang napakahalagang emosyon na nagbibigay kulay at kahulugan sa ating buhay.'),
(207, 'Kapwa', 'Nilalang/mga taong maaasahan o binibigyang tulong sa oras ng pangangailangan.\r\n', 'Fellowman', 'audio_uploads/Kapwa.mp3', 'Tinuruan siya ng kanyang magulang na maging matulungin sa kapwa.'),
(208, 'Bisita', 'Taong tumutuloy sa ating mga tahanan.', 'Visitor', 'audio_uploads/Bisita.mp3', 'Sa tuwing may dumadating na bisita, karaniwang ipinapakita sa paghahanda ng mga pagkain at palamuti. '),
(209, 'Nais', 'Gusto/ibig', 'Desire', 'audio_uploads/Nais.mp3', 'Nais malaman ng kanilang guro ang dahilan ng pagliban niya ng klase kahapon.'),
(210, 'Mensahero', 'Tagapaghatid ng sulat o liham para sa tatanggap nito.', 'Messenger', 'audio_uploads/Mensahero.mp3', 'Bihira na lamang akong makakita ng mensahero simula nang mauso ang internet.'),
(211, 'Kasunduan', 'Napagsang-ayunan ng dalawa o pangkat ng tao sa isang bagay o pangyayari.', 'Agreement', 'audio_uploads/Kasunduan.mp3', 'Ipinagtibay ng dalawang panig ang kanilang kasunduan sa pamamagitan ng pagpirma sa opisyal na dokumento.'),
(212, 'Lagda', 'Ito ay pirma o tatak ng pagsang-ayon ng tao sa nakasulat sa papel o kasunduan.', 'Signature', 'audio_uploads/Lagda.mp3', 'Mahalaga ang lagda sa bawat kasulatan upang maprotektahan ang mga karapatan at obligasyon ng bawat partido.'),
(213, 'Tag-ulan', 'Uri ng klima o panahong maulan.', 'Rainy season', 'audio_uploads/Tag-ulan.mp3', 'Sa pagsapit ng tag-ulan, sinisigurado niyang maging handa sa mga posibleng mangyari.'),
(214, 'Kolorete', 'Gamit na pampaganda/make-up ng babae', 'Paint rouge', 'audio_uploads/Kolorete.mp3', 'Ang paggamit ng kolorete ay nagbibigay ng kalakasang loob sa mga kababaihan.'),
(215, 'Kapampangan', 'Wikang ginagamit sa Pampanga.', '', 'audio_uploads/Kapampangan.mp3', 'Ang pangunahing wika na ginagamit sa pampanga ay kapampangan.'),
(216, 'Bitso-bitso', 'Kakanin na gawa sa harina.', '', 'audio_uploads/Bitso-bitso.mp3', 'Tuwing Piyesta ng Bayan, maraming tao ang pumipila para bumili ng masarap na bitso-bitso.'),
(217, 'Nilalako', 'Itinitinda habang naglalakad.', 'Peddling', 'audio_uploads/Nilalako.mp3', 'Tuwing umaga, nilalako ng magkakapatid ang kanilang mga paninda sa palengke.'),
(218, 'Pahayagan', 'Babasahin na naglalaman ng balita; dyaryo', 'Newspaper', 'audio_uploads/Pahayagan.mp3', 'Nakasanayan na ng kanyang ama na magbasa ng pahayagan sa umaga.'),
(219, 'Umpukan', 'Grupo ng mga taong nag-uusap.', 'Crowd', 'audio_uploads/Umpukan.mp3', 'Sa pagsapit ng hapon, makikita ang umpukan ng mga tao na naghihintay ng kanilang masasakyan. '),
(220, 'Nagkandarapa', 'Nagmamadali/halos madapa sa pagkataranta.', 'Stumbled', 'audio_uploads/Nagkandarapa.mp3', 'Nabigla siya nang biglang sumulpot ang aso, kaya\'t nagkandarapa siya sa pagtakbo palayo.'),
(221, 'Kasaysayan', 'Pag-aaral sa nakaraan upang maintindihan ang kasalukuyan', 'History', 'audio_uploads/Kasaysayan.mp3', 'Ang kasaysayan ng bansa ay puno ng mga tagumpay at pagsubok na nagpapakita ng yaman ng kultura at identidad ng bansa.'),
(222, 'Prinsa', 'Istruktura na ginawa upang harangan ang tubig sa ilog.', 'Dam', 'audio_uploads/Prinsa.mp3', 'Itinayo ng mga inhenyero ang isang malaking prinsa sa ilog upang mapigilan ang pag-apaw ng tubig papunta sa mga bayan.'),
(223, 'Irigasyon', 'Pagpapadaloy ng tubig sa mga palayan.', 'Irrigation', 'audio_uploads/Irigasyon.mp3', 'Ang irigasyon ay mahalagang sistema sa agrikultura upang mapanatili ang sapat na supply ng tubig sa mga sakahan.'),
(224, 'Imbakan', 'Lugar ng pinag-iipunan.', 'Storehouse', 'audio_uploads/Imbakan.mp3', 'Sa likod ng bahay namin ay may malaking imbakan ng kahoy na ginagamit namin panggatong sa pagluluto.'),
(225, 'Tagtuyot', 'Panahon na kulang na kulang ang ulan at hindi makapagtanim.', 'Drought', 'audio_uploads/Tagtuyot.mp3', 'Sa gitna ng matinding tagtuyot, ang mga magsasaka ay naghihirap at nagkaroon ng kakulangan sa pagkain.'),
(226, 'Museo', 'Lugar na nagpapakita ng mga mahahalagang gamit ng nakaraan.', 'Museum', 'audio_uploads/Museo.mp3', 'Sa loob ng museo, makikita mo ang mga likhang-sining na nagpapahayag ng kultura at tradisyon ng ating bansa.'),
(227, 'Pwersa', 'Lakas ng galaw.', 'Force', 'audio_uploads/Pwersa.mp3', 'Ang pagkakaisa ng mga mamamayan ay isang napakalaking pwersa laban sa katiwalian.'),
(228, 'Taimtim', 'Seryoso, taos-puso', 'Earnestly', 'audio_uploads/Taimtim.mp3', 'Sa loob ng simbahan, nagdarasal sila nang taimtim para sa kaligtasan ng kanilang pamilya.'),
(229, 'Maligalig', 'Malikot, aktibo', 'Restless', 'audio_uploads/Maligalig.mp3', 'Napansin ko ang maligalig na kilos ng aking kaibigan, na tila mayroong hindi magandang balita na gustong sabihin.'),
(230, 'Malumanay', 'Mahinahon/mabini', 'Gentle', 'audio_uploads/Malumanay.mp3', 'Malumanay niyang ipinaintindi sa kanyang anak ang kamalian nitong nagawa.'),
(231, 'Parang', 'Malawak na kapatagang lupa.', 'Field meadow', 'audio_uploads/Parang.mp3', 'Sa ganda ng tanawin sa malawak na parang, tila naglalakbay ang isip sa kalangitan.'),
(232, 'Butil', 'Maliit na buto ng halaman.', 'Grain', 'audio_uploads/Butil.mp3', 'Sa bukirin, makikita ang mga butil ng palay na nagsisilbing sustansya sa mga magsasaka.'),
(233, 'Sisidlan', 'Lalagyanan', 'Vessel', 'audio_uploads/Sisidlan.mp3', 'Naghahanap siya ng sisidlan ng kanyang mga alahas upang itago ang mga ito nang maayos.'),
(234, 'Inahin', 'Babaeng manok.', 'Hen', 'audio_uploads/Inahin.mp3', 'Sinisigurado niyang tignan ang kalagayan ng kanyang mga inahin.'),
(235, 'Kinupkop', 'Inalagaan', 'Adopted', 'audio_uploads/Kinupkop.mp3', 'Ang pamilya namin ay kinupkop ang isang batang ulila upang bigyan siya ng mas mabuting kinabukasan.'),
(236, 'Kampay', 'Taas-babang paggalaw ng pakpak.', 'Swing', 'audio_uploads/Kampay.mp3', 'Matapos ang matagumpay na proyekto, kampay ang lahat sa kagalakan at tagumpay.'),
(237, 'Malabay', 'Malapad', 'Spacious', 'audio_uploads/Malabay.mp3', 'Sa paglipas ng panahon, ang kanyang pagmumukha ay naging malabay dahil sa pagtaas ng kaniyang timbang.'),
(238, 'Napisa', 'Nadurog, nabuksan', 'Crushed', 'audio_uploads/Napisa.mp3', 'Dahil sa matinding init ng araw, napisa ang mga dahon ng mga halaman sa hardin.'),
(239, 'Malawak', 'Maluwang/malaki', 'Wide', 'audio_uploads/Malawak.mp3', 'Malawak ang iniwan na lupain ng kanilang mga magulang.'),
(240, 'Mabangis', 'Malupit, hindi maamo', 'Wild', 'audio_uploads/Mabangis.mp3', 'Ang mabangis na bagyo ay nagdulot ng pinsala sa mga gusali at sakahan sa bayan.'),
(241, 'Likas', 'Natural, nakasanayan na', 'Natural', 'audio_uploads/Likas.mp3', 'Ang likas na yaman ng bansa ay dapat pangalagaan at alagaan para sa susunod na henerasyon.'),
(242, 'Kinagigiliwan', 'Gustong-gusto, kinahihiligan.', 'Admired', 'audio_uploads/Kinagigiliwan.mp3', 'Ang panonood ng larong volleyball ay aking kinagigiliwan.'),
(243, 'Katutubo', 'Sinauna, orihinal sa isang lahi.', 'Indigenous', 'audio_uploads/Katutubo.mp3', 'Ang mga katutubo ay nagpapakita ng kanilang kultura at tradisyon sa pamamagitan ng sayaw at musika.'),
(244, 'Patintero', 'Larong kalye ng mga Pilipino.', '', 'audio_uploads/Patintero.mp3', 'Ang patintero ay isang tradisyunal na laro sa Pilipinas na kung saan kailangan mong umiwas sa mga tagabantay habang tumatakbo ka sa loob ng espasyo.'),
(245, 'Patakaran', 'Gabay na sinusunod.', 'Policy', 'audio_uploads/Patakaran.mp3', 'Ang patakaran sa paaralan ay mahalaga upang mapanatili ang kaayusan at disiplina ng mga mag-aaral.'),
(246, 'Tinagurian', 'Tinawag, pinangalanan', 'Addressed', 'audio_uploads/Tinagurian.mp3', 'Si Jose Rizal ay tinaguriang \"Pambansang Bayani\" ng Pilipinas dahil sa kanyang mga kontribusyon sa kalayaan ng bansa'),
(247, 'Pamato', 'Ang pangunahing piyesa o tinitira sa laro.', 'Checkers', 'audio_uploads/Pamato.mp3', 'Ang tsinelas niya ang madalas niyang gamitin bilang pamato sa larong tumbang preso.'),
(248, 'Lambat', 'Hinabing lubid na gamit sa panghuli.', 'Net', 'audio_uploads/Lambat.mp3', 'Gumagamit ng lambat ang mga mangingisda upang mapadali ang kanilang trabaho.'),
(249, 'Popularidad', 'Kasikatan, katanyagan', 'Popularity', 'audio_uploads/Popularidad.mp3', 'Ang popularidad ng isang artista ay maaaring magbago batay sa kanyang mga proyektong pantelebisyon at pelikula.'),
(250, 'Magkahawig', 'Magkamukha/magkatulad', 'Resemble', 'audio_uploads/Magkahawig.mp3', 'Sa kanilang pagkakaiba-iba, mayroon pa ring mga aspeto na magkahawig sa kanilang mga pananaw.'),
(251, 'Bukirin', 'Malawak na taniman.', 'Farm', 'audio_uploads/Bukirin.mp3', 'Sa bukirin, makikita ang masaganang ani ng palay tuwing tag-ani.'),
(252, 'Kamalig', 'Malaking imbakan ng ani.', 'Barn', 'audio_uploads/Kamalig.mp3', 'Ang kamalig ay isang gusaling ginagamit para sa pag-imbak ng bigas at iba pang ani ng magsasaka.'),
(253, 'Kaluluwa', 'Espiritu sa loob ng ating katawan.', 'Soul', 'audio_uploads/Kaluluwa.mp3', 'Sa tradisyon ng mga Pilipino, ang Undas ay panahon ng pag-alala sa mga kaluluwa ng mga yumao.'),
(254, 'Hangal', 'Taong hindi nag-iisip ng tama.', 'Idiotic', 'audio_uploads/Hangal.mp3', 'Ang hangal na kabataan ay madalas mapaglaro at hindi nagpapakabuti sa kanilang pag-aaral.'),
(255, 'Nag-iimpok', 'Nag-iipon', 'Saving', 'audio_uploads/Nag-iimpok.mp3', 'Sa panahon ng krisis, mahalaga ang taong nag-iimpok upang may mapagkukunan sa mga hindi inaasahang pangyayari.'),
(256, 'Sagana', 'Maraming-marami', 'Abundant', 'audio_uploads/Sagana.mp3', 'Sa lugar na iyon, ang lupa ay sagana sa likas na yaman tulad ng ginto at pilak.'),
(257, 'Bawiin', 'Kunin muli ang naibigay na.', 'Retreive', 'audio_uploads/Bawiin.mp3', 'Desidido ang kampo na bawiin ang nasabing lupa mula sa mga ilegal na nagmamay-ari.'),
(258, 'Kalmado', 'Mahinahon, hindi maligalig', 'Calmed', 'audio_uploads/Kalmado.mp3', 'Kahit may mga problemang dumating, nananatili siyang kalmado at hindi nagpapakita ng pagkabalisa.'),
(259, 'Payapa', 'Maaliwalas, walang gulo', 'Peaceful', 'audio_uploads/Payapa.mp3', 'Ang payapa at tahimik na kapaligiran ay nagbibigay ng kaligtasan at kapanatagan sa mga mamamayan.'),
(260, 'Napakatikas', 'Maganda ang tindig ng katawan.', 'Firm', 'audio_uploads/Napakatikas.mp3', 'Napakatikas tignan ng kanyang katawan.'),
(261, 'Postura', 'Pagdadala ng tao sa kaniyang katawan.', 'Posture', 'audio_uploads/Postura.mp3', 'Ang pagkakaroon ng tamang postura ay mahalaga upang maiwasan ang sakit sa likod at iba pang isyu sa kalusugan.'),
(262, 'Kalat', 'Dumi, basura', 'Litter', 'audio_uploads/Kalat.mp3', 'Pagkatapos ng kainan, hindi namin pinapayagan ang pag-iwan ng kalat sa mesa upang mapanatili ang kalinisan sa bahay.'),
(263, 'Nabuhol', 'Itinali/hindi maghiwahiwalay', 'Entrapped', 'audio_uploads/Nabuhol.mp3', 'Nagulat ako nang biglang nabuhol ang tali ng aking sapatos habang naglalakad ako sa kalsada.'),
(264, 'Pagsirko', 'Pagikot-ikot sa ere/pagbaliktad', 'Circling', 'audio_uploads/Pagsirko.mp3', 'Ang pagsirko ng bola ay tiyak na napakataas.'),
(265, 'Hinigit', 'Hinila o hinatak nang malakas.', 'Dragged', 'audio_uploads/Hinigit.mp3', 'Hinigit niya ang tali ng kanyang aso upang hindi ito mataman ng bola.'),
(266, 'Dagitin', 'Dakmain o kunin', 'Snatch', 'audio_uploads/Dagitin.mp3', 'Minadali niyang dagitin ang lobong nabitawan ng bata.'),
(267, 'Gumagabay', 'Umaalalay, nagbibigay patnubay', 'Guide', 'audio_uploads/Gumagabay.mp3', 'Ang mga guro ay ang gumagabay sa mga estudyante upang matuto ng mga bagong kaalaman at kasanayan.'),
(268, 'Kumbinsido', 'Napaniwala, sigurado', 'Convinced', 'audio_uploads/Kumbinsido.mp3', 'Sa pamamagitan ng malalim na pagsusuri ng datos, ang mga manggagawa ay kumbinsido na mayroong pangangailangan para sa pagbabago sa kanilang mga kondisyon sa trabaho.'),
(269, 'Nakapalibot', 'Napaliligiran', 'Surrounded', 'audio_uploads/Nakapalibot.mp3', 'Ang kagubatan ay puno ng mga hayop at halaman na nakapalibot sa malikhaing likas na kapaligiran.'),
(270, 'Paraiso', 'Payapa at perpektong lugar.', 'Paradise', 'audio_uploads/Paraiso.mp3', 'Ang Boracay ay isang kilalang destinasyon na tinatawag na paraiso dahil sa kanyang magandang mga puting buhangin at malinaw na dagat.'),
(271, 'Napadpad', 'Nadala/natangay', 'Landed', 'audio_uploads/Napadpad.mp3', 'Dahil sa lakas ng bagyo, ang mga dahon at basura ay napadpad sa harap ng aming bahay.'),
(272, 'Pampang', 'Lupa sa gilid ng dagat.', 'River bank', 'audio_uploads/Pampang.mp3', 'Sa baybayin ng dagat, matatagpuan ang mga mangingisda na naglalayag papunta sa pampang.'),
(273, 'Nagmamalasakit', 'Nag-aaalala, nagpapakita ng halaga.', 'Cares', 'audio_uploads/Nagmamalasakit.mp3', 'Nagmamalasakit siya sa nangyari sa kanyang kaibigan.'),
(274, 'Abandonado', 'Iniwan, walang nakatira.', 'Abandoned', 'audio_uploads/Abandonado.mp3', 'Isang malaking abandonado na lugar ang bumungad sa kanila.'),
(275, 'Latian', 'Mababang anyo ng lupa na pinupuno ng tubig.', 'Marsh', 'audio_uploads/Latian.mp3', 'Ang mga magsasaka ay bumibisita sa latian upang magsagawa ng pagtatanim sa kanilang mga taniman.'),
(276, 'Nahagip', 'Naabot o natamaan', 'Caught', 'audio_uploads/Nahagip.mp3', 'Laking tuwa ng may-ari ng tindahan ng malaman niya na nahagip ng kanyang cctv ang nangyaring pagnanakaw.'),
(277, 'Daluyong', 'Mataas na alon na sanhi ng hangin sa karagatan.', 'Surge', 'audio_uploads/Daluyong.mp3', 'Ang malakas na daluyong ng alon ay nagdulot ng pangamba sa mga mangingisda sa dagat.'),
(278, 'Pananaliksik', 'Malalimang paghahanap ng impormasyon.', 'Research', 'audio_uploads/Pananaliksik.mp3', 'Sa paaralan, ipinatutupad ang pananaliksik upang matuto ang mga mag-aaral ng wastong pamamaraan sa pag-aaral at pagtuklas ng bagong impormasyon.'),
(279, 'Nakatoka', 'Binigyan ng gawain.', 'Assigned', 'audio_uploads/Nakatoka.mp3', 'Ang mga empleyado sa opisina ay nakatoka sa pagtatapos ng kanilang mga takdang gawain bago mag-uwian.'),
(280, 'Proseso', 'Hakbang sa paggawa.', 'Process', 'audio_uploads/Proseso.mp3', 'Hindi inakala ni Jose na mahabang proseso ang pagkuha ng kinakailagan na dokumento para sa kanyang trabaho. '),
(281, 'Naghahabi', 'Paggawa ng tela gamit ang kamay.', 'Weaver', 'audio_uploads/Naghahabi.mp3', 'Si Ana na masaya na naghahabi ng kanyang sariling tela para sa kanyang munting negosyo.'),
(282, 'Inspirasyon', 'Pinaghanguan ng gawa.', 'Inspiration', 'audio_uploads/Inspirasyon.mp3', 'Ginawa niyang inspirasyon ang kanyang pamilya upang makapagtapos ng pag-aaral.'),
(283, 'Disenyo', 'Marka o hitsura ng produkto.', 'Design', 'audio_uploads/Disenyo.mp3', 'Ang disenyo ay isang mahalagang bahagi ng pagbuo ng anumang produkto o proyekto.'),
(284, 'Kalikasan', 'Kapaligiran/bagay na hindi gawa ng tao.', 'Nature', 'audio_uploads/Kalikasan.mp3', 'Ang kalikasan ay mayaman sa kagandahan at kapaligiran.'),
(285, 'Tiyaga', 'Katangian na marunong maghintay/hindi mainipin.', 'Patience', 'audio_uploads/Tiyaga.mp3', 'Ang tiyaga ay mahalagang katangian sa pagtamo ng mga pangarap sa buhay.'),
(286, 'Nakakahanga', 'Nakakabilib/nakakamangha', 'Impressive', 'audio_uploads/Nakakahanga.mp3', 'Ang kanyang husay sa larangan ng sining ay talagang nakahahanga.'),
(287, 'Buwis', 'Ibinabayad sa pamahalaan.', 'Tax', 'audio_uploads/Buwis.mp3', 'Sa Pilipinas, ang buwis ay isang obligasyon na dapat gawin ng mga mamamayan.'),
(288, 'Hinahangad', 'Inaasam/ninanais na makuha', 'Intended', 'audio_uploads/Hinahangad.mp3', 'Hinahangad niyang makuha ang posisyon na kanyang inaplyan sa pangarap niya ng kompanya. '),
(289, 'Sikamoro', 'Uri ng puno.', 'Sycamore', 'audio_uploads/Sikamoro.mp3', 'Ang sikamoro ay isang uri ng puno na napakagandang tignan.'),
(290, 'Maniningil', 'Kumukuha ng bayad.', 'Bill collector', 'audio_uploads/Maniningil.mp3', 'Ang maniningil ay nagtatakda ng tamang halaga para sa kanilang serbisyo'),
(291, 'Dako', 'Lugar', 'Lokasyon', 'audio_uploads/Dako.mp3', 'Sa dako roon makikita ang pinaka magandang tanawin sa lugar.'),
(292, 'Manunuluyan', 'Makikituloy', 'Guest', 'audio_uploads/Manunuluyan.mp3', 'Ang mga manunuluyan ay mga taong naglalakbay nang walang tiyak na tahanan.'),
(293, 'Tinatangkilik', 'Tinatanggap o sinusuportahan.', 'Support', 'audio_uploads/Tinatangkilik.mp3', 'Ang mga lokal na negosyo ay mas pinipili ng mga mamimili dahil sa kanilang mataas na kalidad at serbisyong tinatangkilik.'),
(294, 'Perya', 'Maliit na pasyalan na maraming laruan o sasakyan na pinagagana ng makina.', 'Carnival', 'audio_uploads/Perya.mp3', 'Nag-enjoy ang buong pamilya sa perya kahapon.'),
(295, 'Tambak', 'Patong-patong na kalat.', 'Pile', 'audio_uploads/Tambak.mp3', 'Napansin ni Ana ang mga damit ay tambak na at kailangan ng labahan.'),
(296, 'Pinagkaguluhan', 'Pinaligiran ng mga tao.', 'Mobbed', 'audio_uploads/Pinagkaguluhan.mp3', 'Ang artista ay pinagkaguluhan ng kanyang mga tagahanga sa labas ng entablado.'),
(297, 'Bilin', 'Paalala', 'Message', 'audio_uploads/Bilin.mp3', 'Hindi dapat kalimutan ang mga bilin ng mga nakatatanda upang ipakita ang respeto at paggalang sa kanilang karunungan.'),
(298, 'Sakali', 'Hindi sigurado/baka', 'Perchance', 'audio_uploads/Sakali.mp3', 'Sakali mang mawala ang liwanag, patuloy kong hahanapin ang landas.'),
(299, 'Inaabangan', 'Hinihintay', 'Wait', 'audio_uploads/Inaabangan.mp3', 'Inaabanagan niya ang pagdating ng kanyang kaibigan sa tuwing pagkatapos ng klase.'),
(300, 'Magtungo', 'Magpunta', 'To go to', 'audio_uploads/Magtungo.mp3', 'Ngayon, magtungo tayo sa bayan upang mamili ng mga pangangailangan.'),
(301, 'Komunidad', 'Grupo ng mga taong naninirahan nang magkakasama o lugar na tinitirahan ng mga tao.', 'Community', 'audio_uploads/Komunidad.mp3', 'Ang komunidad ay binubuo ng mga taong nagkakaisa at nagtutulungan para sa ikauunlad ng kanilang lugar.'),
(302, 'Matindi', 'Malubha', 'Severe', 'audio_uploads/Matindi.mp3', 'Ang bagyong dumaan sa aming lugar ay nagdulot ng matinding pinsala sa mga tahanan at sakahan.'),
(303, 'Gastusin', 'Bayarin', 'Expenses', 'audio_uploads/Gastusin.mp3', 'Ang pag-iimpok ay mahalaga upang mapababa ang mga gastusin sa pang-araw-araw na buhay.'),
(304, 'Taga-patag', 'Mga naninirahan sa bayan.', 'Plainsman', 'audio_uploads/Taga-patag.mp3', 'Ang taga-patag ay isang uri ng tao na mas gustong manirahan sa mga patag na lugar kaysa sa mga bundok.'),
(305, 'Kapakanan', 'Magandang kalagayan.', 'Welfare', 'audio_uploads/Kapakanan.mp3', 'Ang kapakanan ng bawat mamamayan ay mahalaga sa pagpapabuti ng lipunan.'),
(306, 'Pagpapanatili', 'Hindi pagkawala.', 'Retain', 'audio_uploads/Pagpapanatili.mp3', 'Sa pagpapanatili ng magandang kalusugan, mahalaga ang regular na ehersisyo at wastong nutrisyon.'),
(307, 'Oportunidad', 'Pagkakataon', 'Opportunity', 'audio_uploads/Oportunidad.mp3', 'Ang oportunidad ay isang pagkakataon na dapat sana\'y hindi pinapalampas.'),
(308, 'Isakatuparan', 'Gawing totoo.', 'Fulfill', 'audio_uploads/Isakatuparan.mp3', 'Isang mahalagang bahagi ng pagiging matagumpay ay ang kakayahan na isakatuparan ang mga pangarap nang may determinasyon at tiyaga.'),
(309, 'Patas', 'Pantay na trato.', 'Fair', 'audio_uploads/Patas.mp3', 'Isang mahalagang bahagi ng pagiging matagumpay ay ang kakayahan na isakatuparan ang mga pangarap nang may determinasyon at tiyaga.'),
(310, 'Niyebe', 'Namuong yelo na bumabagsak mula sa ulap.', 'Snow', 'audio_uploads/Niyebe.mp3', 'Pagdating ng malamig na panahon, umaasang mararanasan ang patak ng niyebe mula sa langit.'),
(311, 'Naibsan', 'Naginhawaan, nabawasan ang sakit.', 'Relieved', 'audio_uploads/Naibsan.mp3', 'Sa wakas, naibsan na ang kanyang mga alalahanin matapos makipag-usap sa kanyang mga kaibigan.'),
(312, 'Maalinsangan', 'Mainit na paligid/mabanas', 'Sultry', 'audio_uploads/Maalinsangan.mp3', 'Ang maalinsangan na panahon ay madalas na nangyayari sa tanghali sa Pilipinas.'),
(313, 'Ermitanyo', 'Matandang naninirahan mag-isa sa kagubatan na maraming kaalamanan.', 'Hermit', 'audio_uploads/Ermitanyo.mp3', 'Sa kabundukan matatagpuan ang ermitanyo na naninirahan sa isang maliit na silong o kubo, layo sa kaguluhan ng bayan.'),
(314, 'Tungkod', 'Kahoy na gabay sa paglalakad.', 'Cane', 'audio_uploads/Tungkod.mp3', 'Ang matanda ay umaasa sa kanyang tungkod upang maglakad nang maayos.'),
(315, 'Daing', 'Binilad na isda, pinatuyo sa pamamagitan ng sikat ng araw.', 'Dried fish', 'audio_uploads/Daing.mp3', 'Ang daing ay isang uri ng pagkaing gawa sa isda na karaniwang tinutuyo sa araw-araw.'),
(316, 'Nangangamba', 'Natakot', 'Feared', 'audio_uploads/Nangangamba.mp3', 'Nangamba ako nang biglang pumutok ang malakas na kidlat.'),
(317, 'Pumanaw', 'Namatay, sumakabilang buhay.', 'Deceased', 'audio_uploads/Pumanaw.mp3', 'Ang aking lolo ay pumanaw noong nakaraang taon, ngunit ang kanyang alaala ay patuloy na bumabalik sa aking isipan.'),
(318, 'Hapo', 'Pagod', 'Fatigued', 'audio_uploads/Hapo.mp3', 'Kapag hapo na ang isang tao, maaring ito ay dahil sa maraming nagawang pisikal na gawain.'),
(319, 'Inakay', 'Inalalayan', 'Guide', 'audio_uploads/Inakay.mp3', 'Inakay niya ako sa madilim na daan nang may kumpiyansa at lakas ng loob.'),
(320, 'Ipa', 'Balat ng palay.', 'Chaff', 'audio_uploads/Ipa.mp3', 'Ang ipa ay isang bahagi ng palay na ginagamit sa paggawa ng iba\'t ibang produkto tulad ng alak at suka.'),
(321, 'Nangungulila', 'Nalulungkot/naghahanap ng makakasama.', 'Longing', 'audio_uploads/Nangungulila.m4a', 'Ang paglisan mo ay nag-iwan ng bakas ng pagkawalang-kumpleto, kaya\'t nangungulila ako sa iyong presensya.'),
(322, 'Lusong', 'Malaking sisidlan yari sa kahoy kung saan binabayo ang palay.', 'Mortar', 'audio_uploads/Lusong.mp3', 'Gumagamit ng lusong ang mga nagtatanim ng palay.'),
(323, 'Dinakot', 'Kinuha gamit ang mga daliri at palad.', 'Grabbed', 'audio_uploads/Dinakot.mp3', 'Ang mga magnanakaw ay dinakot ang mga importanteng gamit sa loob ng tindahan at agad na tumakas.'),
(324, 'Gobernadorsilyo', 'Namumuno sa probinsya noong panahon ng Kastila.', 'Gobernadorcillo', 'audio_uploads/gobernadorsilyo.mp3', 'Noong unang panahon ang mga tao ay talagang nagbibigay ng respeto sa gobernadorsilyo.'),
(325, 'Karpintero', 'Gumagawa ng bahay/panilay ng bahay.', 'Carpenter', 'audio_uploads/karpintero.mp3', 'Ang karpintero ay isang bihasang manggagawa sa paggawa ng mga estruktura at kagamitan mula sa kahoy.'),
(326, 'Rebolusyon', 'ag-aalsa, pagbabago.', 'Revolution', 'audio_uploads/rebolusyon.mp3', 'Sa kasaysayan, maraming bansa ang nagkaroon ng rebolusyon upang ipaglaban ang kanilang kalayaan at karapatan.'),
(327, 'Patimpalak', 'Paligsahan', 'Contest', 'audio_uploads/patimpalak.mp3', 'Ang patimpalak sa paaralan ay nagbibigay ng pagkakataon sa mga mag-aaral na ipamalas ang kanilang galing at talento.'),
(328, 'Pinakamasugid', 'Pinakamatiyaga', 'Passionate', 'audio_uploads/pinakamasugid.mp3', 'Ang patimpalak sa paaralan ay nagbibigay ng pagkakataon sa mga mag-aaral na ipamalas ang kanilang galing at talento.'),
(329, 'Ambag', 'Kontribusyon', 'Contribution', 'audio_uploads/ambag.mp3', 'Ang bawat mamamayan ay may responsibilidad na magbahagi ng kanilang ambag sa lipunan.'),
(330, 'Sumiklab', 'Nagsimula; umapoy', 'Flare', 'audio_uploads/sumiklab.mp3', 'Sa pagbubukas ng pintuan, sumiklab ang liwanag ng araw na nagdala ng bagong pag-asa sa buhay ko.'),
(331, 'Sinilip', 'Tinitingnan/sinisipat', 'Peep', 'audio_uploads/sinilip.mp3', 'Sinilip niya ang kaniyang alagang aso bago umakyat sa kanyang kwarto.'),
(332, 'Direksiyon', 'Gabay sa pupuntahan.', 'Direction', 'audio_uploads/direksiyon.mp3', 'Sa kagustuhang matutuhan ang tamang direksiyon, nag-aral ako ng mga batas trapiko at mga senyales sa kalsada.'),
(333, 'Pinapantayan', 'Pinaparehas', 'Matched', 'audio_uploads/pinapantayan.mp3', 'Ang kanyang husay at dedikasyon sa trabaho ay pinapantayan ng kanyang matinding determinasyon.'),
(334, 'Nagmamadali', 'Binibilisan', 'Rushing', 'audio_uploads/nagmamadali.mp3', 'Nagmamadali siyang magmaneho upang makarating ng maaga sa kanyang trabaho.'),
(335, 'Arko', 'Malaking barko.', 'Arc', 'audio_uploads/arko.mp3', 'Sa ilalim ng maalamat na arko, naglakad ang mga turista upang masilayan ang kagandahan ng sinaunang lungsod.'),
(336, 'Takda', 'Itinalaga', 'Given', 'audio_uploads/takda.mp3', 'Inihanda ko ang aking sarili para sa takda ng pagsusulit sa susunod na linggo.'),
(337, 'Premyo', 'Gantimpala', 'Prize', 'audio_uploads/premyo.mp3', 'Ang premyo sa paligsahan ay nagbibigay inspirasyon sa mga manlalaro.'),
(338, 'Pamilyar', 'Kilala, sanay na', 'Familiar', 'audio_uploads/pamilyar.mp3', 'Dahil sa kanyang matagal nang pagtira sa lugar, siya ay naging pamilyar na sa mga tao at kalye.'),
(339, 'Pagkakataon', 'Tsansa, oportunidad', 'Chance', 'audio_uploads/pagkakataon.mp3', 'Ang pagkakataon ay isang mahalagang bahagi ng buhay na nagbibigay sa atin ng mga bagong posibilidad.'),
(340, 'Pagsakop', 'Pag-aangkin sa ibang lugar.', 'Occupation', 'audio_uploads/pagsakop.mp3', 'Ang pagsakop sa bansa ay nagresulta sa pagbabago ng pamamahala at sistema ng lipunan.'),
(341, 'Lumikas', 'Umalis sa isang lugar.', 'Evacuate', 'audio_uploads/lumikas.mp3', 'Sa gitna ng digmaan, ang mga tao ay lumikas patungo sa ligtas na lugar.'),
(342, 'Pinatawan', 'Hinatulan, pinarusahan', 'Imposed', 'audio_uploads/pinatawan.mp3', 'Pinatawan ng multa ang drayber ng dyip dahil nagbaba ito sas maling babaan ng pasahero.'),
(343, 'Dakila', 'Walang kahalintulad.', 'Great', 'audio_uploads/Dakila.mp3', 'Ang pagiging dakila ay hindi nasusukat sa yaman, kundi sa kabutihan ng puso at pagmamahal sa kapwa.'),
(344, 'Marangal', 'Malinis ang konsensya.', 'Honorable', 'audio_uploads/marangal.mp3', 'Ang pagiging marangal ay nagpapakita ng matatag na prinsipyo at integridad sa lahat ng gawain.'),
(345, 'Karamay', 'Taong kasama sa hirap man o ginhawa.', 'Sympathetic', 'audio_uploads/Karamay.mp3', 'Sa gitna ng kagipitan, ang pamilya ang ating pinakamatatag na karamay sa buhay.');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `quiz` text NOT NULL,
  `level` text NOT NULL,
  `access` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `user_id`, `quiz`, `level`, `access`) VALUES
(43, 16, 'identification', 'easy', 0),
(44, 16, 'identification', 'normal', 0),
(45, 16, 'identification', 'hard', 0),
(46, 16, 'tama_mali', 'easy', 0),
(47, 16, 'tama_mali', 'normal', 0),
(48, 16, 'tama_mali', 'hard', 0),
(49, 17, 'identification', 'easy', 0),
(50, 17, 'identification', 'normal', 0),
(51, 17, 'identification', 'hard', 0),
(52, 17, 'tama_mali', 'easy', 0),
(53, 17, 'tama_mali', 'normal', 0),
(54, 17, 'tama_mali', 'hard', 0),
(67, 20, 'identification', 'easy', 0),
(68, 20, 'identification', 'normal', 0),
(69, 20, 'identification', 'hard', 0),
(70, 20, 'tama_mali', 'easy', 0),
(71, 20, 'tama_mali', 'normal', 0),
(72, 20, 'tama_mali', 'hard', 0),
(73, 21, 'identification', 'easy', 1),
(74, 21, 'identification', 'normal', 1),
(75, 21, 'identification', 'hard', 0),
(76, 21, 'tama_mali', 'easy', 1),
(77, 21, 'tama_mali', 'normal', 1),
(78, 21, 'tama_mali', 'hard', 1),
(97, 25, 'identification', 'easy', 1),
(98, 25, 'identification', 'normal', 0),
(99, 25, 'identification', 'hard', 0),
(100, 25, 'tama_mali', 'easy', 1),
(101, 25, 'tama_mali', 'normal', 1),
(102, 25, 'tama_mali', 'hard', 1),
(127, 30, 'identification', 'easy', 1),
(128, 30, 'identification', 'normal', 1),
(129, 30, 'identification', 'hard', 1),
(130, 30, 'tama_mali', 'easy', 1),
(131, 30, 'tama_mali', 'normal', 1),
(132, 30, 'tama_mali', 'hard', 1),
(139, 32, 'identification', 'easy', 0),
(140, 32, 'identification', 'normal', 1),
(141, 32, 'identification', 'hard', 0),
(142, 32, 'tama_mali', 'easy', 1),
(143, 32, 'tama_mali', 'normal', 0),
(144, 32, 'tama_mali', 'hard', 0),
(151, 34, 'identification', 'easy', 0),
(152, 34, 'identification', 'normal', 0),
(153, 34, 'identification', 'hard', 0),
(154, 34, 'tama_mali', 'easy', 0),
(155, 34, 'tama_mali', 'normal', 0),
(156, 34, 'tama_mali', 'hard', 0),
(157, 35, 'identification', 'easy', 0),
(158, 35, 'identification', 'normal', 0),
(159, 35, 'identification', 'hard', 0),
(160, 35, 'tama_mali', 'easy', 0),
(161, 35, 'tama_mali', 'normal', 0),
(162, 35, 'tama_mali', 'hard', 0),
(169, 37, 'identification', 'easy', 1),
(170, 37, 'identification', 'normal', 1),
(171, 37, 'identification', 'hard', 0),
(172, 37, 'tama_mali', 'easy', 0),
(173, 37, 'tama_mali', 'normal', 0),
(174, 37, 'tama_mali', 'hard', 0),
(175, 38, 'identification', 'easy', 0),
(176, 38, 'identification', 'normal', 0),
(177, 38, 'identification', 'hard', 0),
(178, 38, 'tama_mali', 'easy', 0),
(179, 38, 'tama_mali', 'normal', 0),
(180, 38, 'tama_mali', 'hard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`) VALUES
(16, 'SuperUser', 'admin', '$2y$10$V3Hr4BsHdyCSOKKR/Qe0M.PuRUN6Htu12lAdkETzU.XIyCVL//yeO', 'admin'),
(17, 'Sushi', 'sushi', '$2y$10$u3EhWkEbrlIyViFYyXJdu.SbHVst2IQXDklW.DXG2Qz5sKUtwfbJi', 'user'),
(20, 'TestUser', 'user', '$2y$10$HSJxAxgsiFrKD9LZMGy9oepoFKpwdaYPBpAu0/Y8SyjxbQSGxJ5ja', 'user'),
(21, 'claire', 'clairecomends', '$2y$10$AalZTl1Msyabeo5Fj1q42eE/qJJtddOwnHixa5OK/icV3/MbsBdAa', 'user'),
(25, 'Patricia', 'Patriciaanne', '$2y$10$wIYWyEN/9ZtDrygSIfTvP.JYEtQOEGppAxa4imGbER6e39ZzkEtym', 'user'),
(30, 'anne', 'anne1', '$2y$10$HGFIRodqWZJ1f2qnVR3Afu9.aoXAPPr9OmbfT8jyocA9cFcAg9zrq', 'user'),
(32, 'Cedric', 'Ced651', '$2y$10$PWmyGxIizXl5WCPhxAXjjucmxp9nARW1MykoWoitoMsglvv7vAu/m', 'user'),
(33, 'Talasalitaan', 'Talasalitaan1', '$2y$10$EtjNB.3hcBX8/CjmIGoVMOJ0vMlAVA6YA1vacTzKeXVJxi0DRVI42', 'user'),
(34, 'claire', 'clairecomends', '$2y$10$Qj4ECPNf1GbKDLMc0s0bS.eOAV0hqGI9l845DEzNj.5/57S0OKoU6', 'user'),
(35, 'Patricia', 'anne1', '$2y$10$6cGIGkJ0z7ztlfHcuwoh9OdeuWHAQUYvInSc9iXMCog51EwXp9K4K', 'user'),
(36, 'Talasalitaan', 'Talasalitaan', '$2y$10$FyniDlNKotKL3wyZXgWqnupN5d2utT3hSXUy3G9C65LFHISga9IcW', 'user'),
(37, 'test', 'test123', '$2y$10$ed1DyLkeWB.mA.N2NB9Ynei1r2qrOgErhtjUwhnvUHZGc/dlbtMFq', 'user'),
(38, 'myacc', 'myacc', '$2y$10$qbctO43iX8OSHFg4h60J6eFJk7dKxnKhSpatO.o0irYJoqvVWDszu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
