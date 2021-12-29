-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_prints`
--

CREATE TABLE `category_prints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_prints`
--

INSERT INTO `category_prints` (`id`, `title_ar`, `title_en`, `subtitle_ar`, `subtitle_en`, `describe_ar`, `describe_en`, `design`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'طباعة مج', 'Mug Printing', 'طباعة مج بافضل واجود الخامات', 'Mug printing with the best and finest materials', 'المج من اهم عناصر هدايا الشركات التى يمكن ان تقدمها لعملاؤهم لانها تدوم معهم و تكون امامهم طول الوقت و دائما تذكرهم بالعلامة التجارية الخاصة بكم. نوفر هذه المنتجات لعملاؤنا باستخدام افضل ماكينات الطباعة على افضل انواع المج لانى جودة هذه المنتجات و قيمتها من قيمة الشركة.', 'The mug is one of the most important elements of corporate gifts that you can offer to their customers because it lasts with them and is in front of them all the time and always reminds them of your brand. We provide these products to our customers by using the best printing machines on the best types of magazines because the quality and value of these products is the value of the company.', 0, 7, '2021-11-17 14:00:08', '2021-11-17 14:00:08'),
(2, 'طباعة تيشيرت', 'T-shirt printing', 'طباعة تيشيرت بافضل واجود الخامات', 'T-shirt printing with the best quality materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 7, '2021-11-17 14:15:57', '2021-11-17 17:14:34'),
(3, 'طباعة ID', 'ID Printing', 'خدمات الطباعة على الكروت البلاستيك ID Cards والطباعة على كروت البصمة', 'Printing services on plastic ID cards and printing on fingerprint cards', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, NULL, '2021-11-17 16:09:33', '2021-11-17 16:09:33'),
(4, 'اندور اوت دور', 'Indor && outdor', 'اندور اوت دور', 'Indor && outdor', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, NULL, '2021-11-17 16:24:13', '2021-11-17 16:24:13'),
(5, 'طباعة بانر', 'Panner Printing', 'طباعة بانر باجود الخامات', 'Panner printing', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 4, '2021-11-17 16:27:09', '2021-11-17 16:27:09'),
(6, 'جلوسي لامع', 'Jlocy Shiny', 'طباعة جلوسي لامع باجود الخامات', 'Glossy glossy print with the finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 4, '2021-11-17 16:31:26', '2021-11-17 16:31:26'),
(7, 'طباعة تشيرتات ومجات', 'Print T-shirts and mugs', 'طباعة تشيرتات ومجات  بافضل جودة', 'Print T-shirts and mugs with the best quality', 'المج والتشيرتات من اهم عناصر هدايا الشركات التى يمكن ان تقدمها لعملاؤهم لانها تدوم معهم و تكون امامهم طول الوقت و دائما تذكرهم بالعلامة التجارية الخاصة بكم. نوفر هذه المنتجات لعملاؤنا باستخدام افضل ماكينات الطباعة على افضل انواع المج والتشيرتات لانى جودة هذه المنتجات و قيمتها من قيمة الشركة.', 'Mugs and T-shirts are one of the most important corporate gifts that you can offer to their customers because they last with them and are in front of them all the time and always remind them of your brand. We provide these products to our customers using the best printing machines on the best types of mugs and t-shirts because the quality and value of these products are part of the company\'s value.', 0, NULL, '2021-11-18 04:02:18', '2021-11-18 04:02:18'),
(8, 'طباعة ديجيتال', 'Digital Printing', 'طباعة ديجيتال', 'Digital Printing', 'Digital PrintingDigital PrintingDigital PrintingDigital Printing', 'Digital PrintingDigital PrintingDigital PrintingDigital Printing', 0, NULL, '2021-11-18 12:02:57', '2021-11-18 12:02:57'),
(9, 'اظرف', 'envelope', 'طباعة اظرف بافضل واجود الخامات', 'Envelope printing with the best and finest materials', 'المج من اهم عناصر هدايا الشركات التى يمكن ان تقدمها لعملاؤهم لانها تدوم معهم و تكون امامهم طول الوقت و دائما تذكرهم بالعلامة التجارية الخاصة بكم. نوفر هذه المنتجات لعملاؤنا باستخدام افضل ماكينات الطباعة على افضل انواع المج لانى جودة هذه المنتجات و قيمتها من قيمة الشركة.', 'The mug is one of the most important elements of corporate gifts that you can offer to their customers because it lasts with them and is in front of them all the time and always reminds them of your brand. We provide these products to our customers by using the best printing machines on the best types of magazines because the quality and value of these products is the value of the company.', 0, 8, '2021-11-18 12:12:43', '2021-11-18 12:12:43'),
(10, 'جلوسي كوشيه لامع', 'Glossy kochi glossy', 'طباعة جلوسي كوشيه لامع بافضل واجود الخامات', 'Glossy kochi print with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 0, 8, '2021-11-18 12:42:44', '2021-11-18 12:42:44'),
(11, 'جلوسي كوشيه مط', 'Glossy kochi  stretch', 'طباعة جلوسي كوشيه مط بافضل واجود الخامات', 'Glossy kochi stretch print with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 0, 8, '2021-11-18 12:45:06', '2021-11-18 12:45:06'),
(12, 'فلاير وبرشور', 'Flyer and brochure', 'طباعة فلاير وبرشور بافضل واجود الخامات', 'Print flyer and brochure with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 1, 8, '2021-11-18 12:47:10', '2021-11-18 12:47:10'),
(13, 'فولدر', 'Folder', 'طباعة فولدر بافضل واجود الخامات', 'Folder printing with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 0, 8, '2021-11-18 13:02:18', '2021-11-18 13:02:18'),
(14, 'كروت شخصية', 'Personal Cards', 'طباعة كروت شخصية بافضل واجود الخامات', 'Printing personal cards with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 1, 8, '2021-11-18 13:06:23', '2021-11-18 13:06:23'),
(15, 'نوت بوك', 'Note book', 'طباعة نوت بوك بافضل واجود الخامات', 'Notebook printing with the best and finest materials', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'This text is an example of a text that can be replaced in the same space. This text was generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters generated by the application.\r\nIf you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain language errors, the Arabic text generator is useful for web designers in particular, where the customer often needs to see a real picture for site design.', 0, 8, '2021-11-18 14:09:23', '2021-11-18 14:09:23'),
(16, 'تصميم لوجو', 'Design Logo', 'تصميم لوجو بجوة عاليه ومتطورة', 'High quality and sophisticated logo design', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 17, '2021-11-26 21:30:11', '2021-11-26 21:54:19'),
(17, 'التصميم', 'Design', 'اطلب تصميمك الأن', 'Request your design', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, NULL, '2021-11-26 21:53:32', '2021-11-26 21:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `title_ar`, `title_en`, `image`, `subtitle_ar`, `subtitle_en`, `describe_ar`, `describe_en`, `price`, `created_at`, `updated_at`) VALUES
(1, 'انجليزي', 'English', '1637204629-category.png', 'ترجمة اللغة الانجليزية', 'English Language Translate', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1.00, '2021-11-17 14:23:13', '2021-11-18 03:03:49'),
(2, 'اللغة الفرنسيه', 'French Language', '1637205269-category.png', 'ترجمة اللغة الفرنسية', 'French Language translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 2.00, '2021-11-18 03:14:29', '2021-11-18 03:14:29'),
(3, 'اللغة الالمانية', 'German language', '1637205430-category.png', 'ترجمة اللغة الالمانية', 'German Language translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 3.00, '2021-11-18 03:17:10', '2021-11-18 03:17:10'),
(4, 'اللغة الايطالية', 'Italian Language', '1637205553-category.png', 'ترجمة اللغة الايطالية', 'Italian Language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 4.00, '2021-11-18 03:19:13', '2021-11-18 03:19:13'),
(5, 'اللغة الروسية', 'Russian language', '1637205704-category.png', 'ترجمة اللغة الروسية', 'Russian language translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 1.00, '2021-11-18 03:21:44', '2021-11-18 03:21:44'),
(6, 'اللغة الصينية', 'Chinese Language', '1637205816-category.png', 'ترجمة اللغة الصينية', 'Chinese Language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 2.00, '2021-11-18 03:23:36', '2021-11-18 03:23:36'),
(7, 'اللغة اليبانية', 'Japanese language', '1637205956-category.png', 'ترجمة اللغة اليبانية', 'Japanese language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 3.00, '2021-11-18 03:25:56', '2021-11-18 03:25:56'),
(8, 'اللغة التركية', 'Turkish language', '1637206064-category.png', 'ترجمة اللغة التركية', 'Turkish language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 2.00, '2021-11-18 03:27:44', '2021-11-18 03:27:44'),
(9, 'اللغة البرتغالية', 'Portuguese Language', '1637206288-category.png', 'ترحمة اللغة البرتغالية', 'Portuguese Language', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 1.00, '2021-11-18 03:31:28', '2021-11-18 03:31:28'),
(10, 'اللغة الفارسية', 'Persian Language', '1637206528-category.png', 'ترجمة اللغة الفارسية', 'Persian Language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 5.00, '2021-11-18 03:35:28', '2021-11-18 03:35:28'),
(11, 'اللغة الهولندية', 'Holanda Language', '1637206877-category.png', 'ترجمة اللغة الهولندية', 'Holanda Language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 1.00, '2021-11-18 03:41:17', '2021-11-18 03:41:17'),
(12, 'اللغة الفليبينية', 'Filipino language', '1637207088-category.png', 'ترجمة اللغة الفليبينية', 'Filipino language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 4.00, '2021-11-18 03:44:48', '2021-11-18 03:44:48'),
(13, 'اللغة االاندونيسية', 'Indonesian Language', '1637207237-category.png', 'ترجمة اللغة الاندونيسية', 'Indonesian Language Translate', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 3.00, '2021-11-18 03:47:17', '2021-11-18 03:47:17'),
(14, 'اللغة الاوكرانية', 'Ukrainian language', '1637209719-category.png', 'ترجمة اللغة الاوكرانية', 'Ukrainian language translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 2.00, '2021-11-18 04:28:39', '2021-11-18 04:28:39'),
(15, 'اللغة التشيكية', 'Czech Language', '1637209959-category.png', 'ترجمة اللغة التشيكية', 'Czech Language Translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 3.00, '2021-11-18 04:32:39', '2021-11-18 04:32:39'),
(16, 'اللغة السولفاكية', 'Slovak language', '1637210075-category.png', 'ترجمة اللغة السولفاكية', 'Slovak language Translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ متميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية نتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation Distinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers We deal with most embassies and consulates', 3.00, '2021-11-18 04:34:35', '2021-11-18 04:34:35'),
(17, 'اللغة الكورية', 'Korean Language', '1637210214-category.png', 'ترجمة اللغة الكورية', 'Korean Language Translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 4.00, '2021-11-18 04:36:54', '2021-11-18 04:36:54'),
(18, 'اللغة التايلاندية', 'Thailand Language', '1637210390-category.png', 'ترجمة اللغة التايلاندية', 'Thailand Language Translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 2.00, '2021-11-18 04:39:50', '2021-11-18 04:39:50'),
(19, 'اللغة السويدية', 'Swedish language', '1637210492-category.png', 'ترجمة اللغة السويدية', 'Swedish language Translation', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 4.00, '2021-11-18 04:41:32', '2021-11-18 04:41:32'),
(20, 'اللغة البلغارية', 'Bulgarian Language', '1637210594-category.png', 'ترجمة اللغة البلغارية', 'Bulgarian Language Transaltion', 'مستعدون للتنفيذ مشاريع الترجمة الكبري وترجمة الأبحاث والمواقع الإلكترونية بأسعار ممتازة وسرعة ودقة في التنفيذ\r\nمتميزون في ترجمة جميع المجالات القانونية و الطبية والعامة والتجارية والتاريخية والإقتصادية والسياسية والمستندات والأوراق الرسمية\r\nنتعامل مع اغلب السفارات والقنصليات', 'We are ready to implement major translation projects and translate research papers and websites at excellent prices, speed and accuracy in implementation\r\nDistinguished in translating all legal, medical, public, commercial, historical, economic and political fields, documents and official papers\r\nWe deal with most embassies and consulates', 5.00, '2021-11-18 04:43:14', '2021-11-18 04:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(11, 'Emily Sawyer', '+1 (463) 302-2738', 'porywur@mailinator.com', 'Magna maiores nesciu', '2021-11-26 15:47:50', '2021-11-26 15:47:50'),
(13, 'Ryder Ware', '+1 (227) 188-3509', 'habi@mailinator.com', 'Non obcaecati eu eni', '2021-11-26 20:25:26', '2021-11-26 20:25:26'),
(14, 'Emerald Alvarez', '+1 (405) 611-5329', 'zozipycefe@mailinator.com', 'Facilis molestiae od', '2021-11-26 20:41:54', '2021-11-26 20:41:54'),
(15, 'ahmed nour', 'hv', 'ahmedsallah005@gmail.com', 'hjv', '2021-11-26 20:42:17', '2021-11-26 20:42:17'),
(16, 'ahmed nour', 'يبى', NULL, 'تىريسب', '2021-11-26 21:06:06', '2021-11-26 21:06:06'),
(17, 'Cecilia Fowler', '+1 (619) 771-2014', 'xyru@mailinator.com', 'Autem non id natus e', '2021-11-26 21:08:09', '2021-11-26 21:08:09'),
(18, 'f', '0', NULL, 'd', '2021-11-26 21:14:31', '2021-11-26 21:14:31'),
(19, 'sd', '5', NULL, '1ds', '2021-11-26 21:15:03', '2021-11-26 21:15:03'),
(20, 'sdfsd`', '34324', NULL, 'dfdgf', '2021-11-26 21:57:27', '2021-11-26 21:57:27'),
(21, 'Brady Ortega', '+1 (886) 366-1379', 'pejoqokoka@mailinator.com', 'Voluptates aute vero', '2021-12-11 08:40:58', '2021-12-11 08:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `image_category_prints`
--

CREATE TABLE `image_category_prints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_print_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_category_prints`
--

INSERT INTO `image_category_prints` (`id`, `image`, `category_print_id`, `created_at`, `updated_at`) VALUES
(25, '2021-11-17-16-09-33vertical-id-cards-mockup_1332-2449.jpg', 3, '2021-11-17 16:09:33', '2021-11-17 16:09:33'),
(26, '2021-11-17-16-24-13free-outdoor-banner-mockup-psd-template.jpg', 4, '2021-11-17 16:24:13', '2021-11-17 16:24:13'),
(27, '2021-11-17-16-27-09free-outdoor-banner-mockup-psd-template.jpg', 5, '2021-11-17 16:27:09', '2021-11-17 16:27:09'),
(28, '2021-11-17-16-31-26marketing-business-banner-template_23-2148990534.jpg', 6, '2021-11-17 16:31:26', '2021-11-17 16:31:26'),
(29, '2021-11-17-16-31-26medical-healthcare-poster-template_23-2148940481.jpg', 6, '2021-11-17 16:31:26', '2021-11-17 16:31:26'),
(30, '2021-11-17-16-33-20post1.png', 1, '2021-11-17 16:33:20', '2021-11-17 16:33:20'),
(31, '2021-11-17-16-33-20post2.png', 1, '2021-11-17 16:33:20', '2021-11-17 16:33:20'),
(32, '2021-11-17-16-33-20post3.png', 1, '2021-11-17 16:33:20', '2021-11-17 16:33:20'),
(33, '2021-11-17-16-33-20post44.png', 1, '2021-11-17 16:33:20', '2021-11-17 16:33:20'),
(34, '2021-11-17-17-14-3401.jpg', 2, '2021-11-17 17:14:34', '2021-11-17 17:14:34'),
(35, '2021-11-17-17-14-3402.jpg', 2, '2021-11-17 17:14:34', '2021-11-17 17:14:34'),
(36, '2021-11-17-17-14-3403.jpg', 2, '2021-11-17 17:14:34', '2021-11-17 17:14:34'),
(37, '2021-11-17-17-14-3407.jpg', 2, '2021-11-17 17:14:34', '2021-11-17 17:14:34'),
(38, '2021-11-18-04-02-182021-11-17-17-14-3401.jpg', 7, '2021-11-18 04:02:18', '2021-11-18 04:02:18'),
(39, '2021-11-18-12-02-57download.jpg', 8, '2021-11-18 12:02:57', '2021-11-18 12:02:57'),
(40, '2021-11-18-12-12-43HTB1t3_0KhSYBuNjSsphq6zGvVXao.jpg', 9, '2021-11-18 12:12:43', '2021-11-18 12:12:43'),
(41, '2021-11-18-12-42-44A3-Poster-Mockup-2-1600x1036.jpg', 10, '2021-11-18 12:42:44', '2021-11-18 12:42:44'),
(42, '2021-11-18-12-45-06A3-Poster-Mockup-2-1600x1036.jpg', 11, '2021-11-18 12:45:06', '2021-11-18 12:45:06'),
(43, '2021-11-18-12-47-10trifold-brochure-mockup_1332-418.jpg', 12, '2021-11-18 12:47:10', '2021-11-18 12:47:10'),
(44, '2021-11-18-13-02-18brochure-mockup-two_23-2147933681.jpg', 13, '2021-11-18 13:02:18', '2021-11-18 13:02:18'),
(45, '2021-11-18-13-06-2301.jpg', 14, '2021-11-18 13:06:23', '2021-11-18 13:06:23'),
(46, '2021-11-18-13-06-2302.jpg', 14, '2021-11-18 13:06:23', '2021-11-18 13:06:23'),
(47, '2021-11-18-13-06-2303.jpg', 14, '2021-11-18 13:06:24', '2021-11-18 13:06:24'),
(48, '2021-11-18-13-06-2404.jpg', 14, '2021-11-18 13:06:25', '2021-11-18 13:06:25'),
(49, '2021-11-18-13-06-2506.jpg', 14, '2021-11-18 13:06:25', '2021-11-18 13:06:25'),
(50, '2021-11-18-13-06-2507.jpg', 14, '2021-11-18 13:06:25', '2021-11-18 13:06:25'),
(51, '2021-11-18-13-06-2508.jpg', 14, '2021-11-18 13:06:25', '2021-11-18 13:06:25'),
(52, '2021-11-18-13-06-2509.jpg', 14, '2021-11-18 13:06:26', '2021-11-18 13:06:26'),
(53, '2021-11-18-14-09-23notepad-template-spring-with-flowers_23-2148068157.jpg', 15, '2021-11-18 14:09:23', '2021-11-18 14:09:23'),
(55, '2021-11-26-23-53-33Logo_Mockup_79.jpg', 17, '2021-11-26 21:53:33', '2021-11-26 21:53:33'),
(56, '2021-11-26-23-54-19Logo_Mockup_79.jpg', 16, '2021-11-26 21:54:19', '2021-11-26 21:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_03_222158_create_category_prints_table', 1),
(6, '2021_11_04_113207_create_category_translations_table', 1),
(7, '2021_11_05_203105_create_settings_table', 1),
(8, '2021_11_07_005321_create_contacts_table', 1),
(9, '2021_11_07_014648_create_testmonials_table', 1),
(10, '2021_11_16_173112_create_image_category_prints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'blueblue6666@gmail.com', '14 شارع سوريا المنهدسين', '01001573337', NULL, '2021-11-16 23:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `testmonials`
--

CREATE TABLE `testmonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'hesham@gmail.com', NULL, '$2y$10$nsQG7gvEqenJ6ij7IDyrIOFHHJK9ch9vIhnfzWFuyZydtr8fSmJRW', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_prints`
--
ALTER TABLE `category_prints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_prints_title_ar_unique` (`title_ar`),
  ADD UNIQUE KEY `category_prints_title_en_unique` (`title_en`),
  ADD KEY `category_prints_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_title_ar_unique` (`title_ar`),
  ADD UNIQUE KEY `category_translations_title_en_unique` (`title_en`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_category_prints`
--
ALTER TABLE `image_category_prints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_category_prints_category_print_id_foreign` (`category_print_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testmonials`
--
ALTER TABLE `testmonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_prints`
--
ALTER TABLE `category_prints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_category_prints`
--
ALTER TABLE `image_category_prints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testmonials`
--
ALTER TABLE `testmonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_prints`
--
ALTER TABLE `category_prints`
  ADD CONSTRAINT `category_prints_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category_prints` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image_category_prints`
--
ALTER TABLE `image_category_prints`
  ADD CONSTRAINT `image_category_prints_category_print_id_foreign` FOREIGN KEY (`category_print_id`) REFERENCES `category_prints` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
