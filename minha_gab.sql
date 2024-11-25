-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: minha_gab
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint unsigned NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_comment_id_foreign` (`comment_id`),
  CONSTRAINT `answers_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint unsigned NOT NULL,
  `status` enum('respondido','aguardando') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_patient_id_foreign` (`patient_id`),
  CONSTRAINT `comments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Nulla ut repudiandae rem similique rem molestiae corporis.',21,'aguardando','2024-11-01 13:42:07','2024-11-01 13:42:07'),(2,'Quia qui praesentium quaerat quia voluptatibus est nam veniam.',22,'aguardando','2024-11-01 13:42:07','2024-11-01 13:42:07'),(3,'Voluptatum non et quia qui.',23,'aguardando','2024-11-01 13:42:07','2024-11-01 13:42:07'),(4,'Necessitatibus ut molestiae quia aut sapiente eius.',24,'aguardando','2024-11-01 13:42:07','2024-11-01 13:42:07'),(5,'Fuga et rem sunt eaque ipsum.',25,'aguardando','2024-11-01 13:42:07','2024-11-01 13:42:07'),(6,'Quia harum consequatur eligendi dolorum.',26,'aguardando','2024-11-01 13:42:08','2024-11-01 13:42:08'),(7,'Corrupti aut reprehenderit debitis eius.',27,'aguardando','2024-11-01 13:42:08','2024-11-01 13:42:08'),(8,'Impedit temporibus vel odit perferendis.',28,'aguardando','2024-11-01 13:42:08','2024-11-01 13:42:08'),(9,'Perferendis non quas et adipisci veritatis.',29,'aguardando','2024-11-01 13:42:08','2024-11-01 13:42:08'),(10,'Beatae saepe nemo iusto culpa ut.',30,'aguardando','2024-11-01 13:42:08','2024-11-01 13:42:08');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gabs`
--

DROP TABLE IF EXISTS `gabs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gabs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `request_id` bigint unsigned NOT NULL,
  `path` longblob,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pendente','emitida','negada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gabs_request_id_foreign` (`request_id`),
  CONSTRAINT `gabs_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `gabs_requests` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gabs`
--

LOCK TABLES `gabs` WRITE;
/*!40000 ALTER TABLE `gabs` DISABLE KEYS */;
/*!40000 ALTER TABLE `gabs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gabs_requests`
--

DROP TABLE IF EXISTS `gabs_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gabs_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` bigint unsigned NOT NULL,
  `clinic_id` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gab_quant` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gabs_requests_patient_id_foreign` (`patient_id`),
  KEY `gabs_requests_clinic_id_foreign` (`clinic_id`),
  CONSTRAINT `gabs_requests_clinic_id_foreign` FOREIGN KEY (`clinic_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `gabs_requests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gabs_requests`
--

LOCK TABLES `gabs_requests` WRITE;
/*!40000 ALTER TABLE `gabs_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `gabs_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_11_12_000000_gab_request',1),(3,'2019_12_14_000001_create_personal_access_tokens_table',1),(4,'2024_08_30_211251_create_gabs_table',1),(5,'2024_08_30_211701_create_comments_table',1),(6,'2024_08_30_211832_create_answer_table',1),(7,'2024_08_30_214133_create_test_table',1),(8,'2024_10_18_040856_alter_path_column_gabs',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('patient','clinic','financial') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  UNIQUE KEY `users_cpf_cnpj_unique` (`cpf_cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ms. Adela Terry II','lorena45@example.org','816.617.9255','348.928.776-70','$2y$12$pA5otBqp.nj8U.dLO7PqW.RqydxuEsh4N1gX/ecj/rnmD/TLj4UPm','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(2,'Celestino Murphy I','mstracke@example.org','+1-972-930-2136','544.191.453-24','$2y$12$YqAjsnNBl2kVSk5FTv1sAe4zRpBYZfd.SGmB5V0y2pJ432EBOd3DS','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(3,'Prof. Kelsi Dickinson DVM','alfonso.murazik@example.net','970.639.0385','171.253.071-50','$2y$12$GraplJJTYkrwOUaSK42uouOR0OtLJaclHZeEsZRC8z5SnvgeOhWZC','patient','2024-11-01 13:42:07','2024-11-01 13:42:07'),(4,'Kelli Hayes','jaskolski.kody@example.com','774.266.6619','125.315.388-88','$2y$12$mHHr3zmxLyH/Vpr1EIupy.93rHuFn62QCMYn3fpSY5nuURZLQQyhG','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(5,'Marie Dare','arielle.mosciski@example.org','283.391.7000','243.709.657-32','$2y$12$UHFhyAJ3lHbGZwsM63bmPeU8UUtGYoUtT9zne0uWZRpteDn8YfpDO','patient','2024-11-01 13:42:07','2024-11-01 13:42:07'),(6,'Nick Bruen','paucek.janiya@example.com','(701) 771-5230','688.213.017-08','$2y$12$YC.FqtJAH.1s.X8bZ3Wc4ebqMYljaSOpMnq0xwCS7LaUOMEo2RCOm','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(7,'Dr. Myrtice Langosh DVM','fkreiger@example.com','+19073063818','831.749.498-95','$2y$12$tpwKZ09bfk8KkDV0QHjQTeZb2Zb40Ami12LWGUloPryNYtDpnpNra','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(8,'Suzanne Quigley Jr.','fritsch.jaunita@example.org','725.424.3736','108.313.728-90','$2y$12$lJ1g1Hcy0EI22g.Uhq3zrOVTtFJHOvGdbtJqjjK1VD/HGLCaoQHly','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(9,'Grace Lynch I','kenna88@example.com','1-972-615-8006','736.643.092-96','$2y$12$f55w6hqD3WgaaM7To3TrkeXiv9pxBffmOoHuDlSRFpjGGCz8CIlia','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(10,'Catherine Kutch','kuvalis.dusty@example.org','678.959.4759','638.463.635-09','$2y$12$/SnVBvzJKadw0kz782s/EOs1JEXRxUA6YyeJx3DiIgZQyCBn.dzvi','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(11,'Maximus Walker','walter.reichel@example.net','(918) 846-9638','785.713.846-91','$2y$12$ygxvG4ljfaSrFxQDaRrYa.fU8UwwNGbeKG.H4z9vrroukGayYheGq','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(12,'Ransom Hills','edietrich@example.com','+1 (971) 219-9052','036.533.123-02','$2y$12$8cvgLTVDxC9d7bfiZDX/oudOnY0R1h2HI6fKES.QVBtdT12gnkAO6','patient','2024-11-01 13:42:07','2024-11-01 13:42:07'),(13,'Prof. Velda Gleichner','lillie06@example.net','901-600-1928','254.569.552-81','$2y$12$cpekL63v.CHJtLUTc0ZXdOpMdMPr9JvbGtBxO5vyM.vTUoqPLetIi','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(14,'Prof. Geoffrey Schaden PhD','luettgen.aylin@example.com','864-461-9627','670.465.710-31','$2y$12$x0ICU5H53q06gZKza7gKFeVN19Pxwzojntp.0mpfLpLMx1a66moom','patient','2024-11-01 13:42:07','2024-11-01 13:42:07'),(15,'Rae Graham','streich.jody@example.org','(402) 736-2920','939.841.638-82','$2y$12$GH16qVpAuUZP1y6EG7vuNugepc/f7X5vMKKPgWCoth7tbvnoKufqe','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(16,'Marjorie Russel DDS','judson.durgan@example.net','+1.973.556.8236','071.644.816-19','$2y$12$qBz864VSWglpM98PtK6x/eVBn7mmzRBwD3MY4qy/n/zqjjEDSEGxK','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(17,'Amelie Stokes','marianna99@example.net','+1.281.303.9240','631.008.908-52','$2y$12$vTKl19BWx4i.EDJx/qVvCe1tpDklOxg9AnY7FodI9df.ic8iSvf8m','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(18,'Maybell Muller','arno.pfannerstill@example.org','360-444-8461','005.989.335-23','$2y$12$ti8YNai/ceFd9PfohyXVz.HNgeTHSzmRDoZY8Fk25buPKDuvKEQb2','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(19,'Dr. Alisa Hegmann V','lavonne18@example.net','+1 (619) 957-5862','499.857.186-28','$2y$12$PYLePWovlxAVQL5QzLnOqeUp7HnaSnazgV2Ukhr1XpgAAUXOUDMoG','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(20,'Milton Tremblay','runolfsson.charlotte@example.net','(820) 507-4244','192.044.163-60','$2y$12$5t9M4yBfZCDJ1xCKf1Vo9.1CvQS8bU1i58tIe8AKfheVrKJ27Iet6','patient','2024-11-01 13:42:07','2024-11-01 13:42:07'),(21,'Tyshawn Bechtelar','lynch.billy@example.com','+1-712-361-2551','117.533.470-83','$2y$12$PlTjHK/OrYWA1yCDFZ5orOp4RFfdmPRSrZDUqPwBqGqVIPiu4ktMu','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(22,'Dr. Myrtle Howell','mohamed.dickinson@example.org','+1 (484) 654-9809','409.175.918-67','$2y$12$6e5V69ESODqn2JrzX56xQuieLIIKCCTba1.myyJHuJMUQgaMZ6bJW','financial','2024-11-01 13:42:07','2024-11-01 13:42:07'),(23,'Jessy Wisozk','durgan.kelli@example.net','+1 (820) 854-6413','542.841.292-59','$2y$12$k9RSh1DNVhF/.HHSAolreOUHrM.A2ewOj7xiIDdkB.t4dE7Wcg3i.','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(24,'Dina Hilpert','pstreich@example.org','(310) 832-3904','133.771.962-86','$2y$12$cV/g4DPf1lsQAO/XTflps.EX725QTGFO1L3kvL7aOhJ72riNTXDK2','clinic','2024-11-01 13:42:07','2024-11-01 13:42:07'),(25,'Mrs. Dulce Torphy','harvey.alejandrin@example.com','929-508-5199','677.799.970-76','$2y$12$u8h44KxPo2JJoiaQLLR61e1ogyoVOmi5hfr2XMy5sjT/uYZZoE6lG','clinic','2024-11-01 13:42:08','2024-11-01 13:42:08'),(26,'Jarred Mante DVM','vondricka@example.net','(458) 725-1220','449.934.472-91','$2y$12$sh2xPl0Kl3PkEsASzuKzPOAkc76p5Rn8JYxeqhKV7seW8bTGzkE3e','clinic','2024-11-01 13:42:08','2024-11-01 13:42:08'),(27,'Alfonzo Bergnaum','huel.emely@example.net','442.462.7570','055.287.756-82','$2y$12$pnGGE2LywWCKM4aJBfanIOJoBHheuuTm0KclLMv.9ZrNOSMwk9Awa','financial','2024-11-01 13:42:08','2024-11-01 13:42:08'),(28,'Zack Wunsch','aohara@example.com','820.418.0157','553.605.926-13','$2y$12$FCuct6H3jbEO.mAyTqCAx.Df75Y4GNgNxEQKzo8/7pSbQEp3L1ucS','patient','2024-11-01 13:42:08','2024-11-01 13:42:08'),(29,'Durward Dibbert','watsica.gardner@example.org','(408) 967-7346','604.912.505-94','$2y$12$qjiAamY8wyhh.RcMI2/KreT9U0yjfj2.cCTuejR4A3CMTZc0Qti6K','clinic','2024-11-01 13:42:08','2024-11-01 13:42:08'),(30,'Dale Dickens','citlalli43@example.net','480-413-7927','567.149.773-61','$2y$12$50wussnIcHuXdvLfbE5AV.XXGxCj0aEVS5/KVvX/LJlmY87zWIbfq','patient','2024-11-01 13:42:09','2024-11-01 13:42:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-01  7:42:18
