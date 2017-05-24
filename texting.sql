-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basicLanguage`
--

DROP TABLE IF EXISTS `basicLanguage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basicLanguage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `lecture` text NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pascal_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=cp1251 COMMENT='Лекции по Паскаль';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basicLanguage`
--

LOCK TABLES `basicLanguage` WRITE;
/*!40000 ALTER TABLE `basicLanguage` DISABLE KEYS */;
INSERT INTO `basicLanguage` VALUES (0,'Вводная информация','Это информация написана для тех, кто не знаком с языком программирования «Паскаль», или людей которые, хотят повысить свои знания «Паскаля»\nПочему-же всё таки «Паскаль»?\nЕго плюсы:\n<ul><li>Изучается в школах, колледжах, институтах</li>\n<li>Легко изучаем(идеален для новичков)</li>\n<li>Отличный старт для изучения Основ программирования</li>\n</ul>\nМинусы:\n<ul><li>Не актуален</li>\n<li>Разработан в 60ых годах</li>\n</ul>\nКакую среду выбирать?\n<ul><li><a href=“#“>Турбо Паскаль</a></li>\n<li><a href=“#“>Pascal ABC</a> — Тяжело будет найти установочный файл</li>\n<li><a href=“#“>PascalABC.NET</a> — На данный момент актуальная версия для разработки</li>\n<li><a href=“#“>Delphi</a>(<a href=“#“>Lazarus</a> — бесплатный аналог) — Среда разработки, которая уже считается отдельным языком программированием, «Примечание!» - стоит использовать только со знанием <a href=“#“> ООП</a></li>\n</ul>',1,'pascal'),(1,'Изучение Алгоритмов','<strong>Программа</strong> — это определенный алгоритм, который выполняет ваша программа<br>\n	Что такое Алгоритм?!<br>\n	<strong>Алгоритм</strong> — это понятное, точное пошаговое предписание исполнителю, которое он должен выполнить. Не будем изобретать велосипед, вот свойства Алгоритма:<ul><li>\n<strong>Конечность(результативность)</strong> алгоритма означает, что за конечное число шагов должен быть получен результат;</li><li>\n<strong>Дискретность</strong> алгоритма означает, что алгоритм должен быть разбит на последовательность выполняемых шагов;</li><li>\n<strong>Понятность</strong> алгоритма означает, что алгоритм должен содержать только те команды, которые входят в набор команд, который может выполнить конкретный исполнитель;</li><li>\n<strong>Точность</strong> алгоритма означает, что каждая команда должна пониматься однозначно;</li><li>\n<strong>Массовость</strong> алгоритма означает, что однажды составленный алгоритм должен подходить для решения подобных задач с разными исходными данными.</li><li>\n<strong>Детерминированность (определенность)</strong>. Алгоритм обладает свойством детерминированности, если для одних и тех же наборов исходных данных он будет выдавать один и тот же результат, т.е. результат однозначно определяется исходными данными.</li><ul>\nЭти Свойства не меняются на протяжение многих лет.<br>',1,'pascal'),(2,'Разбор алгоритмов','Чтоб лучше понять, что такое алгоритм, попытайтесь описать по-шагам, как «Порезать на дольки апельсин»<br>\nПолучиться:<br>\nначало<br>\nвзять апельсин<br>\nвзять нож<br>\nразрезать апельсин<br>\nконец<br>\nЭто и есть представление алгоритма, но это легкий алгоритм, а вдруг у вас нет апельсина? Значит вам надо сходить в магазин, и т. д. Но как это записать?<br>\nДля этого есть несколько видов алгоритмов:<br>\n1. <strong>Линейный</strong>(Последовательно, без повторов, и переходов(условий))<br>\nначало<br>\nдостань нож<br>\nрезать на дольки апельсин(Именно апельсин, а не любой другой фрукт. За это отвечает <strong>ТОЧНОСТЬ</strong>)<br>\nконец<br>\n2.<strong>Циклический</strong>(Повторяются по условию)<br>\nначало<br>\nвзять нож<br>\nПОКА апельсины не закончились<br>\nрезать на дольки апельсин<br>\n конец<br>\n3.<strong>Разветвляющийся</strong>(действие выполняется по условию)<br>\nначало<br>\nвзять нож<br>\nЕСЛИ апельсины закончились<br>\nТО сходить в магазин за апельсинами<br>\nпорезать апельсин<br>\nконец<br>',1,'pascal'),(3,'Basic - что это?','<h2>Basic - это?</h2><br>В последнее время возрос интерес к программированию. Это свя-\nзано с развитием и внедрением в повседневную жизнь информа-\nционно-коммуникационных технологий. Если кто-то имеет дело\nс компьютером, то рано или поздно у него возникает желание,\nа иногда и необходимость, программировать.<br>\nСреди пользователей персональных компьютеров в настоящее\nвремя наиболее популярна операционная система Windows, и ес-\nтественно, что тот, кто хочет программировать, стремится писать\nпрограммы \"под Windows\".<br>\nИ здесь возникает проблема: современные системы программи-\nрования, такие как Microsoft Visual Basic, Delphi и, тем более,\nMicrosoft Visual C++, ориентированы на профессиональную раз-\nработку и предполагают наличие у пользователя знаний и на-\nчального опыта в области программирования. Другими словами,\nони не подходят для целей обучения программированию. Как\nбыть? Конечно, можно освоить базовые концепции, изучив язык\nпрограммирования Pascal. Однако в этом случае придется выпол-\nнять упражнения и решать задачи в явно устаревшей, ориентиро-\nванной на работу в операционной системе DOS среде разработки\nTurbo Pascal, столкнуться с массой проблем при ее использова-\nнии в современных операционных системах семейства Windows\n(начиная с проблемы переключения на русский алфавит при на-\nборе текста программы).<br>',1,'basic'),(4,'Зачем программировать?','<h2>Зачем нужно программирование?</h2> <br>\nИногда создается впечатление, что все существующие задачи могут быть решены с помощью готовых программ для компьютеров. Во многом это действительно так, но опыт показывает, что всегда находятся задачи, которые не решаются (или плохо решаются) стандартными средствами. <br>\nВ этих случаях приходится писать собственную программу, которая делает все так, как вы этого хотите (или нанимать за большие деньги умного дядю, который способен это сделать).<br>\n<h2>Два этапа создания программ Программа на языке Си</h2>\nТак же как и на большинстве современных языков программирования, создается в два этапа:<br>\n1) <strong>трансляция</strong> – перевод текста программы в машинные коды;<br>\n2) <strong>компоновка</strong> – сборка частей программы и подключение стандартных функций.<br>\nПочему же не сделать все за один шаг? Для простейших программ это действительно было бы проще, но для сложных проектов двухступенчатый процесс имеет явные преимущества: <br><ul>\nобычно сложная программа разбивается на несколько отдельных частей (модулей), которые отлаживаются отдельно и зачастую разными людьми; поэтому в завершении остается лишь собрать готовые модули в единый проект; <br>\nПри исправлении в одном модуле не надо снова транслировать (переводить в машинные ко- ды) все остальные (это могут быть десятки тысяч строк);</ul>\nПри компоновке во многих системах можно подключать модули, написанные на других языках, например, на Ассемблере (в машинных кодах). <br>\nТрансляторы языка Си называются <strong>компиляторами</strong>: они переводят (транслируют) сразу всю программу в машинный код, а не транслируют строчка за строчкой во время выполнения, как это делают интерпретаторы. Это позволяет значительно ускорить выполнение программы и не ставить интерпретатор на каждый компьютер, где программа будет выполняться. транслятор Исполняемый файл: <br>\nfirst.exe Объектный файл: first.o Исходный файл: first.cpp<br>\nИсходный файл программы на языке Си имеет расширение *.с или *.cpp (расширение *.cpp говорит о том, что в программе могут быть использованы возможности языка Си++). Это обычный текстовый файл, в который записывают текст программы в любом текстовом ре- дакторе, например, в Блокноте. Транслятор переводит исходный файл (вернее, записанную в нём программу) в машин- ные коды и строит так называемый объектный файл с тем же именем и расширением *.o. Хо- тя в нем уже записан машинный код, объектный файл еще нельзя запускать на компьютере, потому что в нем не хватает стандартных функций (например, для ввода и вывода данных). Компоновщик подключает стандартные функции, хранящиеся в библиотеках (они имеют расширение *.a). В результате получается один файл с расширением *.exe, который и пред- ставляет собой готовую программу. ',1,'c');
/*!40000 ALTER TABLE `basicLanguage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1491974178),('m130524_201442_init',1491974184);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `comment_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `data` datetime DEFAULT NULL,
  `visibility` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=cp1251 COMMENT='Новости в Главном меню';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (4,'Открытие проекта!','Мы открылись','123','2017-04-16 18:49:55',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliderNews`
--

DROP TABLE IF EXISTS `sliderNews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliderNews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `img` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sliderNews_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=cp1251 COMMENT='Новости которые будут в Слайдере на главной странице';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliderNews`
--

LOCK TABLES `sliderNews` WRITE;
/*!40000 ALTER TABLE `sliderNews` DISABLE KEYS */;
INSERT INTO `sliderNews` VALUES (4,'Welcome!',1,'2.jpg','Добро пожаловать Программист++!!!'),(8,'Привет)',1,'1.jpg',NULL);
/*!40000 ALTER TABLE `sliderNews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','Trb_o3FtZZGnnaGkLhKGEqUEVRjVAQR7','$2y$13$U4Vqn8v10zw9mYJhOd9IROM/Crz7ng9AC3B9jEbaAy7F2cKoIhMdq',NULL,'admin@example.ru',10,1491974445,1491974445);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-24 10:05:36
