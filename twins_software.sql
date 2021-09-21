-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Eyl 2021, 19:24:58
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `twins_software`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayars`
--

CREATE TABLE `ayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SiteUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gsm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Il` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ilce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmtpHost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmtpUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmtpPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmtpPort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmtpSecure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Instgram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Recaptha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Analystic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ayars`
--

INSERT INTO `ayars` (`id`, `SiteUrl`, `Title`, `Description`, `Keywords`, `Author`, `Tel`, `Gsm`, `Fax`, `Mail`, `Adres`, `Il`, `Ilce`, `Mesai`, `SmtpHost`, `SmtpUser`, `SmtpPassword`, `SmtpPort`, `SmtpSecure`, `Facebook`, `Twitter`, `Instgram`, `Youtube`, `Google`, `Recaptha`, `Map`, `Analystic`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/', 'twins software', 'twins', 'twins', 'Copyright 2021 © Twins Software', NULL, '5061700376', NULL, 'info@twins.software', 'Ceyhan Mahallesi, Gürbüz İş Merkezi No:11/7, Dulkadiroğlu Cd., 46300 Elbistan/Kahramanmaraş', 'Kahramanmaraş', 'Elbistan', '08.00-18.00', 'smtp.gmail.com', 'ynskrc82@gmail.com', 'Karaca220', '587', 'tls', 'Diyetisyen Ayşe Davdav', 'dytaysedavdav', 'dyt_aysedavdav', NULL, 'dytaysedavdav@gmail.com', NULL, NULL, NULL, NULL, '2021-08-22 14:25:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icerikBaslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerikLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerikDetay` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerikKeyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerikGorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerikSira` int(11) NOT NULL,
  `icerikDurum` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`id`, `icerikBaslik`, `icerikLink`, `icerikDetay`, `icerikKeyword`, `icerikGorsel`, `icerikSira`, `icerikDurum`, `created_at`, `updated_at`) VALUES
(2, 'deneme', '#deneme', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>', 'twins, software, elbistan, yazilim, elbistan', 'uploads/content/deneme.jpg', 1, 1, '2021-08-24 15:08:46', '2021-08-24 15:08:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsals`
--

CREATE TABLE `kurumsals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kurumsalBaslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurumsalGorsel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurumsalIcerik` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kurumsals`
--

INSERT INTO `kurumsals` (`id`, `kurumsalBaslik`, `kurumsalGorsel`, `kurumsalIcerik`, `created_at`, `updated_at`) VALUES
(1, 'Kurumsal', 'uploads/kurumsall.jpg', '<p>Lorem Ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet lobortis arcu, sit amet congue augue. Proin vehicula, magna nec malesuada vestibulum, lorem erat euismod ex, vel vehicula ex lorem id lectus. Cras malesuada interdum dapibus. Phasellus tristique risus nec tortor suscipit rutrum. Praesent faucibus, sem vestibulum sagittis pretium, ligula metus commodo dui, eget egestas velit lacus ut urna. Quisque quis sollicitudin nunc. Curabitur dapibus lacus enim, vel varius mauris lobortis et. Aenean ac ipsum gravida, facilisis lorem quis, interdum mauris. Nulla rutrum lacinia augue. Duis pretium eget tellus ac placerat. Sed sed lacinia quam. Mauris imperdiet augue ullamcorper nisi interdum, ac suscipit sem volutpat. Nullam felis purus, convallis a luctus sit amet, ultricies vel nibh. Nunc sed consectetur lectus. Phasellus nec nulla efficitur, rutrum orci at, volutpat sem. Nullam rutrum ullamcorper sem, eget elementum risus facilisis eu. Mauris consequat sem et tortor rutrum pulvinar. Etiam pulvinar dolor est, ultricies egestas ligula faucibus eu. Etiam congue urna consectetur quam viverra suscipit. Sed suscipit odio eget ornare blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer aliquam tempor est. Nulla imperdiet rutrum erat, non porta metus tincidunt in. Proin bibendum magna nec diam pretium, aliquam volutpat leo viverra. Vivamus placerat ac lorem eu finibus. Integer aliquet mattis imperdiet. Sed ac molestie diam. Nulla facilisi. Quisque pellentesque varius felis. Aenean lacinia nulla a enim porttitor ultrices. Nullam fermentum semper tellus. Fusce ac purus a felis consectetur imperdiet in et eros. Donec fringilla rhoncus lacus, sit amet maximus orci lacinia a. Sed quis euismod elit. Curabitur cursus felis id quam maximus gravida. Sed venenatis ultrices dui a tincidunt. Vivamus tincidunt, felis sit amet elementum dignissim, ex nulla lobortis nisl, sed interdum nisi nunc nec nibh. Pellentesque ultricies orci sed lorem convallis feugiat. Mauris lectus felis, aliquam sed elit a, pretium molestie nunc. In in finibus neque. Phasellus eros sem, sagittis ut pellentesque vitae, condimentum non nibh. Cras a aliquet augue, eget ultrices neque. Vivamus gravida, arcu lacinia tristique volutpat, orci lacus sollicitudin justo, a tincidunt sem odio quis turpis. Nam vel leo gravida velit aliquet auctor vel dapibus urna. Cras ultrices eleifend sapien, at elementum magna suscipit ac. Proin pulvinar tempor diam, id auctor erat ornare et. Suspendisse potenti. Nunc interdum metus ut rutrum consectetur. Praesent arcu tellus, aliquet eu ligula sit amet, sollicitudin interdum velit. Praesent egestas nisl orci, et bibendum justo laoreet placerat. Vivamus id ultricies nisl.</p>', NULL, '2021-08-23 10:37:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menuBaslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuIcon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuAltId` int(11) NOT NULL,
  `menuDurum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_19_072824_create_sessions_table', 1),
(7, '2021_08_19_210754_ayarlar_migration', 2),
(8, '2021_08_19_211456_icerik_migration', 3),
(9, '2021_08_19_211748_kurumsal_migration', 3),
(10, '2021_08_19_212057_slider_migration', 3),
(11, '2021_08_19_212343_menu_migration', 3),
(12, '2021_08_21_154912_ayars_migration', 4),
(13, '2021_08_21_160920_add__smtp_port_to_ayars_table', 5),
(14, '2021_08_21_162819_ayarlars_migration', 6),
(15, '2021_08_21_163128_ayars_migration', 7),
(16, '2021_08_23_111651_kurumsal_migration', 8),
(17, '2021_08_24_102514_slider_migration', 9),
(18, '2021_08_24_165147_icerik_migration', 10),
(19, '2021_08_24_170902_contents_migration', 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6caZfIo5BxTcMkvelJMd3Ku17IQfHxSVDmIkLmLS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUFY5eHFkakQyWkFoWnVhWWdNdHNYNFo5MU9NN2NvcEFDcWNxTUh4bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSk1zR0FOL3FBZjhsMmF1LlBmcVp2ZTRiNkEvdlFVRmxuTVJ4bndKSU9PemJVb1BWSVFFYUsiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEpNc0dBTi9xQWY4bDJhdS5QZnFadmU0YjZBL3ZRVUZsbk1SeG53SklPT3piVW9QVklRRWFLIjtzOjU6ImFsZXJ0IjthOjA6e319', 1630878574),
('DcaOC4Tuw83cM0MwwJOx8zmbi8iqJRgLDSwF3fPS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoieVR1UXR6UGRzeVNHdGZPUDJ1bmlxZWRvZWM5Uko5VWZyOEJ0SnBoYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9heWFybGFyLW1haWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSk1zR0FOL3FBZjhsMmF1LlBmcVp2ZTRiNkEvdlFVRmxuTVJ4bndKSU9PemJVb1BWSVFFYUsiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEpNc0dBTi9xQWY4bDJhdS5QZnFadmU0YjZBL3ZRVUZsbk1SeG53SklPT3piVW9QVklRRWFLIjtzOjU6ImFsZXJ0IjthOjA6e319', 1630509017);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SliderBaslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SliderLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SliderLinkYazi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SliderGorsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SliderSira` int(11) NOT NULL,
  `SliderDurum` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `SliderBaslik`, `SliderLink`, `SliderLinkYazi`, `SliderGorsel`, `SliderSira`, `SliderDurum`, `created_at`, `updated_at`) VALUES
(16, 'Hacker-Profil', '#hacker', 'Hacker', 'uploads/slider/hacker-profil.jpg', 1, 1, '2021-09-01 09:59:06', '2021-09-01 09:59:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Twins Soft', 'twins@gmail.com', NULL, '$2y$10$JMsGAN/qAf8l2au.PfqZve4b6A/vQUFlnMRxnwJIOOzbUoPVIQEaK', NULL, NULL, NULL, NULL, 'profile-photos/bdHdtCT6whXT5idiENO5DUgctgdUnMi3G6tguHHS.jpg', '2021-08-19 17:58:25', '2021-09-01 11:41:14');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayars`
--
ALTER TABLE `ayars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `kurumsals`
--
ALTER TABLE `kurumsals`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayars`
--
ALTER TABLE `ayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kurumsals`
--
ALTER TABLE `kurumsals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
