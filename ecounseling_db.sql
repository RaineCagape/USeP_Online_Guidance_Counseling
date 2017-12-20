-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 05:37 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecounseling_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(300) NOT NULL,
  `blog_content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`article_id`, `Title`, `blog_content`, `author`, `featured`) VALUES
(9, 'Welcome to UGTO\'s E-Counceling!', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at accumsan enim, et convallis justo. Donec sed nunc nec dolor ornare interdum quis sed sapien. Nunc ut elit a eros sagittis egestas. Suspendisse fringilla, arcu vel scelerisque auctor, urna mauris sollicitudin libero, eu feugiat erat nulla a metus. Vivamus volutpat massa eu mollis accumsan. Ut semper vestibulum volutpat. Vivamus mollis dui ante, vel aliquam mauris consequat eu. Quisque tristique, est non tristique lacinia, metus nisi lacinia ex, sit amet tempor magna metus ac massa. Morbi tristique facilisis arcu, vel molestie tellus ornare id. Maecenas sodales sit amet neque id dignissim.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Cras nec lectus hendrerit, sagittis lacus non, tempus magna. Curabitur lorem nisl, iaculis non justo quis, mattis mattis ante. Mauris varius, leo vitae maximus fringilla, mauris enim malesuada magna, bibendum facilisis massa est sit amet urna. Aenean tristique dolor non risus rhoncus rutrum. Aliquam vel nulla ac augue pellentesque consectetur. Pellentesque rhoncus condimentum fermentum. Praesent maximus justo sit amet scelerisque dignissim. Nam varius lectus mi, nec eleifend erat varius sed. Quisque accumsan metus et ullamcorper tempor. Vestibulum elementum, dolor id pellentesque fringilla, urna dui porttitor sem, at accumsan felis mi sit amet nibh. Nam tempor malesuada nunc vitae tempor. Duis quis bibendum sem.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vivamus ante arcu, pharetra sit amet auctor non, pretium et velit. Nulla et sollicitudin nunc. Aliquam eget nulla nec nibh gravida blandit non sed felis. Aliquam aliquet, lorem non efficitur ornare, lectus ex dignissim elit, ullamcorper faucibus ex risus eu ligula. Etiam nunc nulla, venenatis vel purus eu, viverra ullamcorper elit. Etiam nibh dui, hendrerit ac sapien non, pulvinar volutpat magna. Maecenas feugiat augue nunc, a elementum eros elementum eget. Fusce vestibulum magna interdum felis volutpat, hendrerit ornare mauris consectetur. Donec vel risus nisl. Cras id elementum nibh. Nunc lectus turpis, egestas eget tempus a, posuere sed nisi.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam semper accumsan dignissim. Vestibulum sit amet dolor et tellus efficitur suscipit et ut dolor. Aenean fringilla nibh non quam vestibulum mattis. Pellentesque efficitur neque non consequat blandit. Donec congue vulputate velit vitae venenatis. Pellentesque commodo condimentum augue, vel ultrices ipsum consequat a. Phasellus lobortis porta dui eget volutpat. Suspendisse vel pellentesque purus. Pellentesque sed ex justo. Aenean lobortis lobortis lectus, id blandit magna bibendum eu. Etiam a semper metus, nec tristique magna. Vestibulum consectetur tristique lorem tincidunt gravida. Aenean elit ex, finibus eu lorem vel, suscipit interdum ipsum. Cras non porta sem. Vivamus sit amet nunc non ex eleifend bibendum.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Maecenas venenatis maximus eros a luctus. Suspendisse iaculis orci quis dolor rhoncus malesuada. Etiam vulputate est at mauris tempus tristique. In accumsan dignissim erat, at iaculis lectus sollicitudin et. Donec ipsum nisi, dapibus id dolor rhoncus, dignissim fringilla dolor. Praesent ornare a quam quis mattis. In suscipit leo a velit dignissim blandit eu a nunc. In dapibus enim in semper fringilla. Suspendisse sapien est, blandit ac quam eu, placerat pretium mi. Curabitur quis ipsum turpis. Proin quis enim bibendum, euismod nulla non, pulvinar lorem. Phasellus rutrum, elit eu vulputate dignissim, turpis purus dictum justo, id porta dolor est eu ex.</p>       					\r\n					', 'Jean Valjean', 0),
(15, 'We care for you', '<div style="text-align: center;"><img src="https://i.pinimg.com/564x/08/19/13/081913c99a89a7b57d6ccad36ef91467--pet-loss-grief-grief-support.jpg" alt="Image result"><br></div><div style="text-align: center;"><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet maximus purus, et accumsan mauris. Donec sapien ex, imperdiet id luctus ut, convallis nec est. Pellentesque eleifend placerat ante, vel pretium nisl. Nullam volutpat, leo sit amet imperdiet viverra, mi dui hendrerit quam, et pulvinar dolor neque quis leo. Nullam lacus dolor, accumsan et metus in, sodales suscipit dui. Donec hendrerit neque nec mauris fermentum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam faucibus consequat sollicitudin. Aliquam convallis egestas arcu, id lacinia lorem congue ut. Quisque a metus a leo ornare lobortis sit amet vel augue. Fusce suscipit eu dui vel malesuada. Quisque porta tincidunt libero in hendrerit.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nunc in ante a lectus facilisis volutpat. Vivamus dignissim magna velit, vitae placerat neque rutrum nec. Vivamus a feugiat diam. Proin sed scelerisque sapien, at aliquet est. Pellentesque egestas ullamcorper pharetra. Nam aliquet felis risus, eget porta tortor volutpat eget. Aenean ut velit rutrum, mattis tortor sed, volutpat metus. Mauris aliquam molestie ante at venenatis. Ut cursus id justo eget vehicula. Phasellus laoreet scelerisque felis, eget auctor magna tincidunt id. Sed non ipsum aliquam orci gravida fermentum.</p></div>', 'Jean Valjean', 0),
(25, 'UGTO\'s Launches Mental Health Awareness', '<div style="text-align: center;"><img src="https://i.imgur.com/SQOSyfS.jpg" width="500"><br></div><div style="text-align: center;"><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at congue lectus. Sed sodales luctus eros, sit amet pulvinar urna volutpat ut. Nulla vitae placerat risus, ut tempus est. Morbi at sagittis lectus. Pellentesque placerat est nec justo imperdiet varius. Maecenas quis lacus sed velit sollicitudin placerat ut quis arcu. Proin cursus metus nisi, et tristique elit maximus in.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nunc a velit at augue euismod sagittis. Nullam tellus libero, tristique at condimentum eget, porttitor vel ex. Donec ultricies sodales erat, quis interdum mauris pharetra scelerisque. Curabitur consequat auctor lacus vitae facilisis. Integer est arcu, efficitur id nibh nec, volutpat tristique velit. Aenean rutrum ante id enim faucibus elementum. Etiam cursus neque nunc, in tempus felis varius eget. Duis ornare ex quis nisi consectetur tristique. Aliquam accumsan turpis sit amet enim placerat ultricies.</p></div><div style="text-align: center;"><br></div>       					\r\n					', 'Jean Valjean', 1),
(26, 'Feeling Down?', '<div style="text-align: center;"><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum auctor quam ex, id ullamcorper dolor porta a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut at mi a nibh facilisis consectetur at eget felis. Mauris sed sapien consequat, blandit lectus id, vestibulum tortor. Integer faucibus pharetra ante, at auctor mauris ultrices at. Aliquam semper hendrerit nunc. Nullam at dictum metus. Donec rhoncus tortor eu turpis efficitur mollis.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Suspendisse potenti. Vestibulum sodales magna varius arcu euismod dignissim. Donec quis metus mattis odio maximus sodales. Nam lacinia vestibulum congue. Nam vel nunc neque. Sed mauris nunc, aliquam mollis enim nec, pulvinar tempus odio. Suspendisse sit amet ligula diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet purus eu augue blandit dapibus. Nam pellentesque ligula in ipsum efficitur efficitur.</p><p style="text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><img src="http://g.cz/sites/default/files/field/primary-images/oo.png" alt="Image result"><br></p><p style="text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;"><span style="text-align: justify;">Phasellus tincidunt, mi ac euismod euismod, metus ligula accumsan dui, sit amet sagittis libero augue ut nisl. Mauris nec lorem tellus. Aliquam faucibus ullamcorper placerat. Morbi ac pulvinar orci. Donec at mollis enim, id molestie ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec nibh ac urna placerat iaculis eget vel odio.</span><br></p></div>       					\r\n					', 'Jean Valjean', 0),
(37, 'How can I focus?', '<div style="text-align: center;"><img src="http://bunow.com/wp-content/uploads/2013/11/Classes-Every-College-Student-Dreads.jpg" alt="Image result for frustrated student"></div><div style="text-align: center;"><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit rutrum venenatis. Integer finibus bibendum ante, sed suscipit lectus tincidunt eget. Nam tellus leo, facilisis ut tempor et, aliquet nec ligula. Duis imperdiet leo at bibendum finibus. In efficitur neque tortor, at posuere arcu finibus a. Proin erat diam, viverra vitae metus nec, fermentum euismod urna. Morbi sed diam sed sem tristique aliquet sit amet nec lorem. Aenean faucibus pretium nisl, a dignissim elit auctor a. Cras rhoncus eu nibh nec iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris pellentesque urna nec porta auctor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Proin ex purus, fermentum vel cursus id, varius et libero. Donec finibus mattis tempor. Aenean ultricies nisi in mauris venenatis molestie. Nullam est libero, commodo vel orci non, placerat iaculis nisl. Maecenas fringilla orci nunc, id tempus ligula pharetra in. Integer vel cursus erat. Nulla efficitur elit eget magna sollicitudin pellentesque.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Maecenas luctus vel felis et vehicula. Donec iaculis lacinia mauris id faucibus. Vivamus tempus, dolor quis gravida malesuada, diam arcu rhoncus felis, sit amet laoreet lacus metus sed leo. Suspendisse vel bibendum erat. Donec massa sem, lobortis vel mi lobortis, vehicula eleifend risus. Aliquam erat volutpat. Proin euismod nulla ligula, euismod hendrerit neque sodales ac. Phasellus sed nunc a orci luctus ullamcorper at ac risus. Fusce egestas velit ut egestas elementum.</p></div>', 'Jean Valjean', 1),
(36, 'Mental Illness Awareness Week Schedule', '<div style="text-align: center;"><font size="6"><u>MAY 14-20, 2018</u></font></div><div style="text-align: center;"><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit rutrum venenatis. Integer finibus bibendum ante, sed suscipit lectus tincidunt eget. Nam tellus leo, facilisis ut tempor et, aliquet nec ligula. Duis imperdiet leo at bibendum finibus. In efficitur neque tortor, at posuere arcu finibus a. Proin erat diam, viverra vitae metus nec, fermentum euismod urna. Morbi sed diam sed sem tristique aliquet sit amet nec lorem. Aenean faucibus pretium nisl, a dignissim elit auctor a. Cras rhoncus eu nibh nec iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris pellentesque urna nec porta auctor.</span><font size="6"><br></font></div>', 'Jean Valjean', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `threadId` int(11) NOT NULL,
  `messageId` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `message` text NOT NULL,
  `chatUsername` varchar(50) NOT NULL,
  `chatType` set('anon','reg') NOT NULL,
  `status` set('read','new') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`threadId`, `messageId`, `userId`, `message`, `chatUsername`, `chatType`, `status`) VALUES
(14, 1, 14, 'Um..', 'Marius', 'reg', 'read'),
(14, 2, 14, 'Hi sir?', 'Marius', 'reg', 'read'),
(14, 3, 13, 'Hi marius', 'Jean', 'reg', 'read'),
(15, 4, 15, 'Good day sir', 'Michael', 'anon', 'read'),
(15, 5, 12, 'Good day :) \r\n', 'Hermoso', 'anon', 'read'),
(15, 6, 15, 'I have something to tell and I need some advice sir', 'Michael', 'anon', 'new'),
(15, 7, 15, 'Or maam??', 'Michael', 'anon', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` set('Student','Counselor') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `role`) VALUES
(13, 'jvaljean', '$2y$10$t4KMAkH/j17aVauFXnYcIe3UuxV5hqLQv6OFRtt8DrePGs7hbuI.6', 'Jean', 'Valjean', 'Montfermeil ,France', 'istolealoafofbread24601@lesmis.com', 'Counselor'),
(14, 'mpontmercy', '$2y$10$ZAGIK8SAysLdAYZ.5iWYeuoM.lLkYlhL.ywlPLVWzYvwhOiKBAFkC', 'Marius', 'Pontmercy', 'Montfermeil ,France', 'emptychairsandemptytables@lesmis.com', 'Student'),
(15, 'mmell', '$2y$10$Y4Z2wqS7deYntgCi/tHAnuDsY6ddxpqs.jkvhVrwzlpK.jtfZYj6u', 'Michael', 'Mell', 'Red Bank, New Jersey', 'michaelinthebathroom@bemorechill.com', 'Student'),
(12, 'htupas', '$2y$10$HkQ3fzIM5BhHptGesr8qCe4NlG/pPr.824tbNFJx.d50A.aUBfCr6', 'Hermoso', 'Tupas', 'Davao City', 'hermosotups@gmail.com', 'Counselor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD UNIQUE KEY `article_id` (`article_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`messageId`),
  ADD UNIQUE KEY `messageId` (`messageId`),
  ADD UNIQUE KEY `messageId_2` (`messageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `firstname` (`firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `messageId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
