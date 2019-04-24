-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 07:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artomic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `body` varchar(2000) NOT NULL,
  `articleimage` varchar(100) NOT NULL,
  `uid` int(50) NOT NULL,
  `articledate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `heading`, `body`, `articleimage`, `uid`, `articledate`) VALUES
(5, 'hello', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est elige', 'img03.jpg', 2, '18.04.2019.'),
(8, 'New Heading', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas. \r\nSit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui.', 'img05.jpg', 1, '22.04.2019.'),
(50, 'Vitae consectetur', 'Praesent in tortor in velit ullamcorper egestas. Maecenas in semper nibh. Praesent congue lectus purus, vel placerat est pellentesque et. Sed imperdiet molestie elit non ultricies. Morbi orci risus, volutpat ut quam vitae, suscipit pulvinar lorem. Aliquam lacinia elementum sapien, nec consectetur nisi lobortis feugiat. Aliquam ullamcorper erat sapien, et placerat libero aliquet eget. Curabitur quam urna, volutpat non laoreet eget, scelerisque quis eros. Vestibulum quis volutpat nunc. Phasellus ut orci in tellus fermentum dignissim in vitae tellus. Nunc lacus mi, mattis a tortor at, lacinia bibendum magna. Vestibulum sed nibh sed tellus faucibus iaculis id non nisl.\r\n\r\nVestibulum interdum et sapien vel eleifend. Integer ut tempus metus. Vivamus euismod mauris nec suscipit fermentum. Morbi aliquet urna ut pharetra lobortis. Nam nec dui tincidunt, dictum tellus vitae, placerat nisl. Donec facilisis lectus vitae tellus volutpat, eget commodo ligula luctus. Aenean feugiat risus quis urna imperdiet, non tristique velit accumsan. Mauris mattis massa diam, vel mollis nulla scelerisque sed. Nullam eu libero id mauris posuere viverra. Phasellus finibus hendrerit dolor, sit amet molestie lectus. Vestibulum ullamcorper, nunc et aliquam euismod, nulla justo blandit nunc, nec auctor est leo nec risus. Nam et imperdiet lacus, vitae consectetur eros. Sed ut dolor vel ipsum dapibus sodales et eu diam.', 'img11.jpg', 1, '24.04.2019.'),
(52, 'Uvac', 'Curabitur tristique, velit eget varius commodo, ex ante cursus dolor, ut maximus erat mauris sit amet arcu. Aenean tempus pulvinar feugiat. Vivamus eget tristique sem. Cras in congue augue. Ut scelerisque erat imperdiet metus ultrices imperdiet. Praesent ut pellentesque ante, vitae pharetra lectus. Vestibulum vel erat condimentum eros interdum ultrices tincidunt at leo. Aliquam gravida sollicitudin velit rutrum rutrum. Nunc a placerat velit, vel ornare felis. Vivamus laoreet mattis dolor, vitae vestibulum enim pharetra nec.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed tincidunt a felis non mattis. Maecenas imperdiet dolor non semper pharetra. Maecenas bibendum dictum viverra. Vivamus ornare risus sit amet turpis pharetra consectetur vitae non diam. Maecenas ac efficitur lacus. Nullam venenatis pellentesque luctus. Vestibulum mollis aliquam magna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'img35.jpg', 2, '22.04.2019.'),
(55, 'Maecenas imperdiet ', 'Maecenas imperdiet dolor non semper pharetra. Maecenas bibendum dictum viverra. Vivamus ornare risus sit amet turpis pharetra consectetur vitae non diam. Maecenas ac efficitur lacus. Nullam venenatis pellentesque luctus. Vestibulum mollis aliquam magna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nProin rutrum ipsum libero, in pretium dui finibus in. Maecenas massa est, scelerisque eget arcu sit amet, eleifend hendrerit felis. Etiam tempor nisi quis ipsum finibus faucibus. Cras sit amet gravida dui. Cras vel ante in elit congue tristique vitae ut enim. Cras rhoncus augue fringilla mi pellentesque, non facilisis arcu facilisis. Morbi consectetur tortor est. Fusce molestie ligula sed odio semper, eget interdum nisi feugiat. Suspendisse potenti. Nulla accumsan, est non ultrices ultrices, nibh metus congue ligula, non aliquam arcu quam vitae metus. Duis sed ullamcorper sem, et gravida massa. Mauris ac fermentum dolor. Vestibulum metus metus, ultrices sit amet metus quis, tristique vehicula lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam feugiat eu libero ac aliquet. Duis sit amet diam aliquet, tincidunt quam ut, hendrerit urna.', 'img22.jpg', 2, '24.04.2019.'),
(57, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi nunc, pharetra ut augue a, malesuada venenatis ante. Nullam a est volutpat, tincidunt odio sed, commodo nibh. Morbi faucibus maximus nisi. Sed at nisl sed est tristique auctor mattis sit amet diam. Maecenas fringilla scelerisque euismod. Curabitur quis finibus neque. Curabitur tristique, velit eget varius commodo, ex ante cursus dolor, ut maximus erat mauris sit amet arcu. Aenean tempus pulvinar feugiat. Vivamus eget tristique sem. Cras in congue augue. Ut scelerisque erat imperdiet metus ultrices imperdiet. Praesent ut pellentesque ante, vitae pharetra lectus. Vestibulum vel erat condimentum eros interdum ultrices tincidunt at leo. Aliquam gravida sollicitudin velit rutrum rutrum. Nunc a placerat velit, vel ornare felis. Vivamus laoreet mattis dolor, vitae vestibulum enim pharetra nec.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed tincidunt a felis non mattis. Maecenas imperdiet dolor non semper pharetra. Maecenas bibendum dictum viverra. Vivamus ornare risus sit amet turpis pharetra consectetur vitae non diam. Maecenas ac efficitur lacus. Nullam venenatis pellentesque luctus. Vestibulum mollis aliquam magna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'img21.jpg', 2, '22.04.2019.'),
(60, 'Nature', 'Morbi bibendum, lectus sed porttitor pellentesque, ante odio lobortis dolor, vel elementum lorem augue sed nulla. Suspendisse facilisis massa vel laoreet tempus. Aliquam tincidunt, magna at cursus consectetur, felis nisl accumsan risus, non accumsan massa augue sit amet purus. In varius arcu eros, ut blandit ex fermentum et. Etiam pretium, ex eu pharetra feugiat, diam arcu imperdiet tellus, eget vehicula nunc nisi eget enim. Cras posuere ac enim in dapibus.\r\n\r\nQuisque ac purus sed turpis condimentum vehicula. Nullam vehicula massa justo, ac mollis nunc pretium et. Donec euismod velit dui, eget vestibulum lacus lobortis at. Nullam interdum ut ex ac dapibus. Curabitur vel efficitur felis, id auctor mauris. Quisque posuere ornare feugiat. Maecenas mattis, purus id sodales ullamcorper, purus augue posuere magna, a gravida libero velit at sem. Quisque risus justo, convallis eu eleifend at, aliquam quis metus. Cras congue sollicitudin congue. In diam neque, imperdiet id leo ut, ornare lacinia augue. Maecenas aliquet erat ante, eu tempor tortor dapibus a. Fusce aliquet sit amet tortor at feugiat. Nam eget leo id lacus dignissim aliquet. Duis aliquam elit faucibus dui sagittis, ut volutpat felis porttitor.', 'img18.jpg', 3, '22.04.2019.'),
(61, 'Flowers', 'Nunc faucibus mi et est convallis posuere. Cras luctus, orci ut convallis luctus, lorem erat commodo risus, interdum hendrerit nisi lacus eu lacus. Aenean mollis vulputate mauris sit amet tristique. Fusce molestie accumsan ipsum, sed commodo erat mollis tincidunt. Vivamus efficitur cursus nunc, in mattis urna bibendum ut. Donec vel ornare arcu. Phasellus sit amet maximus odio.\r\n\r\nNam at orci non dui scelerisque consectetur. Morbi feugiat, mi eget facilisis auctor, nunc orci maximus purus, et vestibulum nunc nulla eu eros. Curabitur interdum venenatis nunc sit amet venenatis. Vivamus ac turpis fermentum, mollis quam at, dapibus augue. Ut maximus tellus sed nunc posuere semper. In feugiat finibus eros, a porta libero scelerisque in. Aliquam id risus vestibulum lacus scelerisque consequat mollis id justo. Cras hendrerit convallis est, et facilisis tortor pellentesque in. Nunc elementum erat orci, eget porttitor lectus scelerisque vel. Vivamus feugiat consequat nunc, vel placerat quam. Praesent faucibus, ligula vitae tempus sagittis, nisi mi molestie lorem, sit amet volutpat felis tortor ac nisi. Vivamus facilisis mauris lacus, quis tincidunt ex vestibulum non. Sed scelerisque odio id quam consectetur sollicitudin. Proin eu semper enim. Etiam eget lectus dui.', 'img06.jpg', 3, '22.04.2019.'),
(62, 'Heading 1', 'Nunc leo dolor, vehicula vitae augue non, venenatis semper neque. Curabitur egestas libero et nisl blandit rhoncus. Donec porta ut velit sit amet iaculis. Aenean est sapien, pretium sit amet mauris non, condimentum rutrum velit. Mauris semper mi nec orci pharetra, sed vehicula turpis vulputate. Duis viverra dui a interdum congue. Integer bibendum imperdiet lorem, quis mollis nibh tempor vitae. Vestibulum in pretium nisi. Quisque sollicitudin ante non lacus vestibulum, vel rutrum dui congue. Sed bibendum justo non lectus laoreet, sed dapibus nisi condimentum.\r\n\r\nPraesent in tortor in velit ullamcorper egestas. Maecenas in semper nibh. Praesent congue lectus purus, vel placerat est pellentesque et. Sed imperdiet molestie elit non ultricies. Morbi orci risus, volutpat ut quam vitae, suscipit pulvinar lorem. Aliquam lacinia elementum sapien, nec consectetur nisi lobortis feugiat. Aliquam ullamcorper erat sapien, et placerat libero aliquet eget. Curabitur quam urna, volutpat non laoreet eget, scelerisque quis eros. Vestibulum quis volutpat nunc. Phasellus ut orci in tellus fermentum dignissim in vitae tellus. Nunc lacus mi, mattis a tortor at, lacinia bibendum magna. Vestibulum sed nibh sed tellus faucibus iaculis id non nisl.', 'img19.jpg', 4, '22.04.2019.'),
(63, 'Heading 2', 'Vestibulu interdum et sapien vel eleifend. Integer ut tempus metus. Vivamus euismod mauris nec suscipit fermentum. Morbi aliquet urna ut pharetra lobortis. Nam nec dui tincidunt, dictum tellus vitae, placerat nisl. Donec facilisis lectus vitae tellus volutpat, eget commodo ligula luctus. Aenean feugiat risus quis urna imperdiet, non tristique velit accumsan. Mauris mattis massa diam, vel mollis nulla scelerisque sed. Nullam eu libero id mauris posuere viverra. Phasellus finibus hendrerit dolor, sit amet molestie lectus. Vestibulum ullamcorper, nunc et aliquam euismod, nulla justo blandit nunc, nec auctor est leo nec risus. Nam et imperdiet lacus, vitae consectetur eros. Sed ut dolor vel ipsum dapibus sodales et eu diam.\r\n\r\nNullam scelerisque orci est, feugiat congue ipsum sodales ut. Duis ornare maximus sagittis. Curabitur dignissim, ipsum at volutpat aliquam, tellus justo aliquet nibh, a placerat justo tortor et mi. Nunc in dapibus nisi, nec ullamcorper dui. Etiam in nibh odio. Ut tincidunt ligula id mauris vestibulum finibus. Proin vel consectetur velit, quis blandit erat. Donec gravida leo vel sapien facilisis tincidunt. In a leo ut lorem aliquam sagittis nec eget velit. Duis ultricies fermentum justo, a luctus eros auctor sed. Ut vitae ligula risus. Etiam molestie semper ornare.', 'img14.jpg', 4, '22.04.2019.'),
(93, 'Nulla dapibus magna ', 'Proin congue et dui ac pretium. Sed dapibus ex pellentesque lectus aliquet porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed pretium urna ut odio consequat convallis. Vivamus est nisi, aliquet et arcu condimentum, malesuada lacinia velit. Morbi nunc enim, eleifend quis nulla vitae, facilisis semper erat. Quisque nec elit a elit aliquam laoreet quis varius diam. Proin sit amet eros non felis porttitor laoreet sit amet vel lectus. In ut ornare felis. Phasellus posuere iaculis ligula at faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus mauris justo, ultrices ut elementum eu, sodales vel augue.\r\n\r\nInteger imperdiet sem in purus rhoncus elementum. Aliquam eu purus in est sollicitudin consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate, tellus at sollicitudin auctor, leo augue pretium neque, sed aliquam dui ex eget turpis. Pellentesque mi nulla, dapibus laoreet convallis sit amet, molestie non dui. Nulla dapibus magna turpis, ut tempor neque pulvinar non. Nulla scelerisque pharetra urna vitae egestas. Duis eget elementum nisl. ', 'img02.jpg', 1, '24.04.2019.'),
(94, 'New heading', 'Curabitur hendrerit lacus at elit ultricies, convallis dignissim quam congue. Nulla non urna nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque nec lectus ultricies, fermentum sem interdum, lacinia tellus. Mauris non luctus justo, ut pellentesque mi.\r\n\r\nNullam eget lacinia lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc id ultrices nisl. Vestibulum ultrices justo eu sapien lobortis, eget vestibulum sapien sollicitudin. Donec tellus lacus, pellentesque vitae enim a, facilisis gravida mauris. Duis vitae eros sapien. Nulla facilisi. In lectus risus, egestas sit amet aliquet sed, euismod sit amet neque.', 'pexels-photo-358532.jpeg', 1, '24.04.2019.'),
(97, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper aliquam sodales. Suspendisse varius vestibulum erat, sed venenatis justo dignissim ac. Sed lobortis varius quam, faucibus porta sapien vulputate quis. Sed feugiat leo at risus molestie, id ullamcorper velit interdum. Nullam ac sodales nibh. Quisque sollicitudin elit id pulvinar gravida. Etiam ut pulvinar elit. Maecenas porta, turpis ut pellentesque rutrum, ligula metus hendrerit velit, eu volutpat ante est in dui. Cras eu blandit ipsum. Nulla urna lacus, maximus sit amet sapien ac, dignissim lobortis sapien. Morbi tristique metus et lobortis mattis. Donec semper, tellus in viverra pulvinar, risus tellus mattis nunc, sed tempus mauris orci vel sem. Aliquam suscipit nibh at vulputate blandit. Proin vehicula eget lacus a fringilla.\r\n\r\nCras efficitur tellus lectus, id varius lectus consectetur et. Nam et tristique tortor. Aenean massa ante, fermentum sit amet turpis sed, vulputate posuere lacus. Phasellus mollis eros nulla, nec pellentesque leo pulvinar vel. Nam consequat purus sit amet turpis sodales, non varius magna iaculis. Suspendisse ac metus ut ligula ullamcorper fringilla non vitae dui. ', 'slika1.jpg', 2, '24.04.2019.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`) VALUES
(1, 'artomic', 'aleksandrat91@gmail.com', 'artomic'),
(2, 'pera', 'probaweb829@gmail.com', 'pera'),
(3, 'Mara', 'mara@mara.ra', 'mara'),
(4, 'Marko', 'marko@marko.ko', 'marko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
