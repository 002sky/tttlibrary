-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-01-12 10:32:18
-- 服务器版本： 10.4.22-MariaDB
-- PHP 版本： 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tttlibrary`
--

-- --------------------------------------------------------

--
-- 表的结构 `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `authors`
--

INSERT INTO `authors` (`id`, `authorName`, `created_at`, `updated_at`) VALUES
(1, 'Frank Herbert', '2021-12-27 22:38:22', '2022-01-10 06:57:55'),
(2, 'Neal Stephenson', '2022-01-07 06:12:52', '2022-01-10 06:58:01'),
(3, 'Andy Weir', '2022-01-09 22:22:45', '2022-01-10 06:58:26'),
(4, 'Liu Cixin', '2022-01-10 06:57:41', '2022-01-10 06:57:41'),
(5, 'Adrian Tchaikovsky', '2022-01-10 06:58:38', '2022-01-10 06:58:38'),
(6, 'Jack Ketchum', '2022-01-10 06:58:45', '2022-01-10 06:58:45'),
(7, 'Stephen King', '2022-01-10 06:58:53', '2022-01-10 06:58:53'),
(8, 'Richard Matheson', '2022-01-10 06:58:59', '2022-01-10 06:58:59'),
(9, 'Bram Stoker', '2022-01-10 06:59:07', '2022-01-10 06:59:07'),
(10, 'Scott Smith', '2022-01-10 06:59:14', '2022-01-10 06:59:14'),
(11, 'Ray Celestin', '2022-01-10 06:59:42', '2022-01-10 06:59:42'),
(12, 'Jean-Claude Grumberg', '2022-01-10 07:00:29', '2022-01-10 07:00:29'),
(13, 'Emma Stonex', '2022-01-10 07:00:37', '2022-01-10 07:00:37'),
(14, 'Sharon Penman', '2022-01-10 07:00:44', '2022-01-10 07:00:44'),
(15, 'Shelly Parker-Chan', '2022-01-10 07:00:51', '2022-01-10 07:00:51'),
(16, 'Richard Condon', '2022-01-10 07:01:02', '2022-01-10 07:01:02'),
(17, 'Tom Clancy', '2022-01-10 07:04:04', '2022-01-10 07:04:04'),
(18, 'Frederick Forsyth', '2022-01-10 07:04:13', '2022-01-10 07:04:13'),
(19, 'Michael Dobbs', '2022-01-10 07:04:22', '2022-01-10 07:04:22'),
(20, 'David Baldacci', '2022-01-10 07:04:29', '2022-01-10 07:04:29'),
(21, 'Chloe Gong', '2022-01-10 07:04:36', '2022-01-10 07:04:36'),
(22, 'Brandon Sanderson', '2022-01-10 07:04:44', '2022-01-10 07:04:44'),
(23, 'Jason Reynolds', '2022-01-10 07:05:57', '2022-01-10 07:05:57'),
(24, 'Nikole Hannah-Jones, Renée Watson, Nikkolas Smith', '2022-01-10 07:06:07', '2022-01-10 07:06:07'),
(25, 'Marissa Meyer', '2022-01-10 07:06:17', '2022-01-10 07:06:17'),
(26, 'Adebanji Alade', '2022-01-10 07:06:46', '2022-01-10 07:06:46'),
(27, 'Derek Brazell, Jo Davies', '2022-01-10 07:06:52', '2022-01-10 07:06:52'),
(28, 'Ella Frances Sanders', '2022-01-10 07:07:18', '2022-01-10 07:07:18'),
(29, 'James Gurney', '2022-01-10 07:07:27', '2022-01-10 07:07:27'),
(30, 'Marcus Aurelius', '2022-01-10 07:07:37', '2022-01-10 07:07:37'),
(31, 'Plato', '2022-01-10 07:07:46', '2022-01-10 07:07:46'),
(32, 'Niccolò Machiavelli', '2022-01-10 07:08:37', '2022-01-10 07:08:37'),
(33, 'David Hume', '2022-01-10 07:08:44', '2022-01-10 07:08:44'),
(34, 'Sun Tzu', '2022-01-10 07:08:50', '2022-01-10 07:08:50'),
(35, 'Edouard de Pomiane', '2022-01-10 07:08:58', '2022-01-10 07:08:58'),
(36, 'Jeanne Strang', '2022-01-10 07:09:04', '2022-01-10 07:09:04'),
(37, 'Valerie Moselle', '2022-01-10 07:10:09', '2022-01-10 07:10:09'),
(38, 'Dr. Kelly Starrett', '2022-01-10 07:10:16', '2022-01-10 07:10:16'),
(39, 'Jim Afremow', '2022-01-10 07:10:25', '2022-01-10 07:10:25'),
(40, 'Bret Contreras', '2022-01-10 07:10:34', '2022-01-10 07:10:34'),
(41, 'Brian Keane', '2022-01-10 07:10:42', '2022-01-10 07:10:42'),
(42, 'Peter Gilmore', '2022-01-10 07:10:49', '2022-01-10 07:10:49'),
(43, 'Charmaine Solomon', '2022-01-10 07:11:12', '2022-01-10 07:11:12'),
(44, 'Elizabeth David', '2022-01-10 07:11:20', '2022-01-10 07:11:20');

-- --------------------------------------------------------

--
-- 表的结构 `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `banners`
--

INSERT INTO `banners` (`id`, `bannerImage`, `bookID`, `status`, `created_at`, `updated_at`) VALUES
(5, 'banner_img_1.jpg', '1', 1, '2022-01-09 22:35:11', '2022-01-11 07:25:29'),
(6, 'banner_img_2.png', '2', 1, '2022-01-09 22:37:55', '2022-01-11 07:27:08'),
(7, 'banner_img_3.png', '13', 1, '2022-01-09 22:40:11', '2022-01-11 07:46:47');

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishingDate` year(4) NOT NULL,
  `categoryID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`id`, `bookName`, `description`, `publishingDate`, `categoryID`, `authorID`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dune', 'In 2012, WIRED US readers voted Dune the best science-fiction novel of all time. It’s also the best-selling of all time, and has inspired a mammoth universe, including 18 books set over 34,000 years and a terrible 1984 movie adaptation by David Lynch, his worst film by far. A very different effort was released in 2021, directed by Denis Villeneuve. The series is set 20,000 years in the future in galaxies stuck in the feudal ages, where computers are banned for religious reasons and noble families rule whole planets. We focus on the planet Arrakis, which holds a material used as a currency throughout the Universe for its rarity and mind-enhancing powers. Lots of giant sandworms, too.', 1965, '2', '1', 'available', 'dune.png', '2021-12-27 22:38:55', '2022-01-11 02:01:25'),
(2, 'Snow Crash', 'Frantic, fun and almost suspiciously prescient, Snow Crash grabs you from its opening sequence – a high-speed race through an anarchic Los Angeles that has been carved up into corporate-owned ‘burbclaves’ – and barely lets up. The book follows main character Hiro Protagonist (yes, really), an elite hacker and swordsman, as he tries to stop the spread of a dangerous virus being propagated by a religious cult. It combines neurolinguistics, ancient mythology and computer science, and eerily predicts social networks, cryptocurrency and Google Earth.', 1992, '2', '2', 'available', 'snow crash.jpg', '2022-01-04 03:38:15', '2022-01-10 07:29:51'),
(3, 'The martian', 'Andy Weir\'s debut novel literally puts the science into science fiction, packing in tonnes of well-researched detail about life on Mars. There\'s descriptions of how to fertilise potatoes with your own excrement, and hack a life-support system for a Martian rover – in levels of detail that the movie adaptation starring Matt Damon came nowhere near to reaching. The sassy, pop-culture laden writing style won\'t be to everyone\'s taste – this book probably won\'t get taught in English Literature lessons – but the first-person perspective makes sense for this story of an astronaut stranded on the Red Planet with no way to get home.', 2015, '2', '3', 'available', 'the martian.png', '2022-01-05 05:58:38', '2022-01-10 07:30:26'),
(4, 'The Three body problem', 'Liu Cixin was already one of China’s most revered science fiction writers when, in 2008, he decided to turn his hand to a full-length novel. The Three-Body Problem is the result – an era-spanning novel that jumps between the Cultural Revolution, the present day, and a mysterious video game. The first part of a trilogy, it’s a fascinating departure from the tropes of Western science fiction, and loaded with enough actual science that you might learn something as well as being entertained.', 2008, '2', '4', 'available', 'the three body problem.jfif', '2022-01-09 22:14:18', '2022-01-10 07:31:13'),
(5, 'Children of time', 'Children of Time is an epic book about a dying Earth. People are leaving, and there’s a plan to keep some of them safe and the human race flourishing elsewhere. However, things don’t quite pan out how they should. This is a saga of a story spanning many, many generations. That’s a tricky thing to pull off and ensure readers still follow with care and attention. But Adrian Tchaikovsky infuses interest, humanity and authenticity into every character and storyline so well. You’ll find yourself rooting for every new character that comes next – even when they’re only distantly related to the one you met a few chapters ago. The book deals with small interactions and feuds through to huge themes about belief, artificial intelligence, legacy, discovery, alienness and much more. It’s no surprise it won the 2016 Arthur C. Clarke Award. There’s a follow-up called Children of Ruin and (fingers crossed) a possible movie adaptation in the works.', 2015, '2', '5', 'available', 'children of time.jpg', '2022-01-10 07:31:47', '2022-01-10 07:31:47'),
(6, 'The girl next door', 'Horror often pivots on the corruption or warping of societal norms and rules; once you feel like you can’t rely on the natural social order, literally anything is possible. Ketchum’s disturbing novel about the unimaginable abuse suffered by two sisters when they are forced to live with their mentally unstable aunt and her three savage sons is based on real events, but it’s the central theme of an adult giving official sanction to the atrocities that makes this story so utterly horrifying.', 1989, '1', '6', 'available', 'the girl next door.jpg', '2022-01-10 07:33:40', '2022-01-11 01:13:12'),
(7, 'Pet Sematary', 'Several of King’s books could be on this list, but he frequently blunts the terror of his stories with the richness and humanity of his characterizations and the sprawl of his narratives. Pet Sematary manages to be his most terrifying novel by dint of its simple, devastating concept: a magical cemetery where buried things come back to a sort-of life—but aren’t quite what they once were. From that simple idea King ramps up to a climax that gets under your skin in a fundamental way most horror stories fail to.', 1983, '1', '7', 'available', 'pet sematary.jfif', '2022-01-10 07:34:07', '2022-01-10 07:34:07'),
(8, 'Hell House', 'What Matheson taps into in this classic haunted house story is the universal fear that we are already lost, already broken. Hired to investigate the existence of an afterlife by exploring the notoriously haunted Belasco House, a team moves in and slowly succumbs to the influence of the entity within—an entity that only uses their own weaknesses and secret shames against them. Their descent into the depths of horror is too close for comfort as a result—for everyone reading the book knows all too well that they have weaknesses, and secret shames, as well.', 1971, '1', '8', 'available', 'hell house.jpg', '2022-01-10 07:35:09', '2022-01-10 07:35:09'),
(9, 'Dracula', 'Of course you’ve heard of Dracula, but have you actually read the book? If not, it’s time to read the vampire novel that started it all. Unlike some of the charming vampires we see in pop culture today, Dracula is much darker, taking you down an evil and twisted storyline. You’ll find no sparkles or soul here, and trust us when we say that the book is much better than the movie.', 1987, '1', '9', 'available', 'dracula.jfif', '2022-01-10 07:35:36', '2022-01-11 02:06:00'),
(10, 'The ruins', 'Smith’s story is deceptively simple: a group of tourists in Mexico go off in search of an archaeological site where a friend has set up camp; they find a pyramid covered in odd vines, the land around it salted and barren. Once on the pyramid, they discover the dead body of their friend, covered in the vines, and that the nearby villagers have arrived with guns to force them to remain on the pyramid. The vines are one of those simple monsters that seem so easy to defeat at first blush, yet the inexorable doom that descends on the characters slowly, grindingly proves otherwise.', 2006, '1', '10', 'available', 'the ruins.png', '2022-01-10 07:36:07', '2022-01-10 07:36:07'),
(11, 'Sunset swing', 'Kerry Gaudet, a young nurse, travels to LA on an urgent hunt to find her missing brother. A serial killer is on the loose, and Kerry fears the worst. Meanwhile, recently retired PI Ida Young is reluctantly helping the police, when a young woman is found dead in her hotel room – the LAPD turn their gaze on Ida as the main suspect. And Dante Sanfelippo is trying to extricate himself from the Mob so he can move to the Napa Valley to make wine. First he has one more favour to do, one that throws him headlong into a dangerous conspiracy. This swirling story of life and death in the City of Angels completes Ray Celestin\'s  American crime quartet.', 1967, '3', '11', 'available', 'sunset swing.jpg', '2022-01-10 07:37:40', '2022-01-11 23:19:56'),
(12, 'The most precious of cargoes', 'Told with fairytale lyricism, this historical novel is set against the horrors of the Holocaust. Once upon a time, a poor woodcutter and his wife lived in a forest. Despite their poverty and the war raging around them, the wife prays that they will be blessed with a child. A Jewish man rides on a train with his wife and twin babies. When his wife no longer has enough milk to feed them both, in desperation he throws his daughter into the forest, hoping that she’ll be saved. When the woodcutter’s wife finds the baby she takes her home, though she knows this act of kindness may lead to her death. This moving historical fiction book is a testament to our capacity for kindness in even the darkest times.', 1967, '3', '12', 'available', 'The most precious of cargoes.jpg', '2022-01-10 07:38:06', '2022-01-10 07:38:49'),
(13, 'The lamplighters', 'Inspired by true events, Emma Stonex’s debut historical novel is a riveting mystery which will grip the reader, and a beautifully written exploration of love and grief. In Cornwall in 1972, three keepers vanish from a remote lighthouse, miles from shore. The door is locked from the inside, and the clocks have stopped. What happened to those men, and to the women they left behind?', 1972, '3', '13', 'available', 'the lamplighters.jpg', '2022-01-10 07:38:37', '2022-01-10 07:38:37'),
(14, 'The land beyond the sea', 'In 1172 the Kingdom of Jerusalem is also known as Outremer – the land beyond the sea. When the men of the First Crusade captured Jerusalem from the Saracens in 1099, many crusaders stayed on and built a life in this new world of blazing heat, exotic customs and enemies who are also neighbours. But now Saladin, leader of the vast Saracen army, is seeking retribution for the massacre in 1099 . . .', 1950, '3', '14', 'available', 'thje land beyond the sea.jpg', '2022-01-10 07:39:30', '2022-01-10 07:39:30'),
(15, 'The Manchurian Candidate', 'Condon’s 1959 novel is a paranoid classic, born at the beginning of the Cold War, that continues to influence people today (the fact that Homeland has a similar concept is a testament to the evergreen nature of the device). Soldiers captured during the Korean War are tortured and brainwashed, and one, Shaw, is programmed to fall into a hypnotic state when he sees his trigger—the Queen of Diamonds during a game of solitaire. He’s programmed to forget his orders once he regains consciousness, and thus is the perfect hidden assassin, who can pass any interrogation or test. His own ruthless, power-hungry mother is his KGB handler, and relays orders to assassinate the president in order to secure the office for the vice president, who will order martial law and request emergency powers as a puppet of the Soviets. It’s creepy, tense, and still shockingly modern—and in a bizarre real-life twist, some believe author Condon subtly cribbed from Robert Graves’ I, Claudius, number 8 on this list.', 1959, '4', '16', 'available', 'the manchurian candidate.jpg', '2022-01-10 07:40:09', '2022-01-12 01:29:55'),
(16, 'The Hund for Red October', 'Clancy’s breakout novel is set at the hot height of the Cold War, but it remains a classic political thriller because it perfectly combines thrilling spycraft, visceral action, an insider’s view of behind-closed-doors political maneuvering, and global stakes. Clancy’s expert grasp of each of these aspects makes this story of a rogue Soviet submarine captain planning to steal the experimental sub he’s been assigned to and defect to the West—and the young CIA analyst, Jack Ryan, who tries desperately to convince everyone from the president down that this isn’t the Soviet Union starting World War III—just about the Platonic ideal of a political thriller. Rumor is Clancy’s grasp of top-secret technology rattled the FBI enough that they paid him a visit, and anyone who reads the book will believe it.', 1984, '4', '17', 'available', 'the hunt for red october.jpg', '2022-01-10 07:40:36', '2022-01-10 07:40:36'),
(17, 'She who became the sun', 'An absorbing historical fantasy, She Who Became the Sun by Shelley Parker-Chan reimagines the rise to power of the Ming Dynasty’s founding emperor. In a famine-stricken village on a dusty plain, a seer shows two children their fates. For a family’s eighth-born son, there’s greatness. For the second daughter, nothing. In 1345, China lies restless under harsh Mongol rule. And when a bandit raid wipes out their home, the two children must somehow survive. Zhu Chongba despairs and gives in. But the girl resolves to overcome her destiny. So she takes her dead brother’s identity and begins her journey. Can Zhu escape what’s written in the stars, as rebellion sweeps the land? Or can she claim her brother’s greatness – and rise as high as she can dream?', 1990, '3', '15', 'available', 'she who became the sun.jpg', '2022-01-10 07:42:24', '2022-01-10 18:55:51'),
(18, 'The Day of the Jackal', 'The Cold War politics of this classic thriller are long gone, but Forsyth’s novel (winner of the 1972 Edgar Award for Best Novel) still carries the punch of a meticulously researched story set in a very real world. It’s a novel of agonizing anticipation: first, as we follow the slow, careful preparations and planning of the titular Jackal, hired to assassinate the President of France; then, as we follow along with the equally painstaking detective work of the man charged with identifying the Jackal as time runs out. The twin stories of detective and assassin remain separate right up until the moment the Jackal takes his shot, and it’s this element of cat-and-mouse between a devious killer and a brilliant agent—plus the elevated stakes of global politics—that make this a book that still resonates today. Forsyth was working in Paris when he wrote it, and used that firsthand knowledge to choose his setting. In fact, rumor has it the assassin’s sniping spot can still be located—with the precise view described in the text.', 0000, '4', '18', 'available', 'the day of the jackal.jpg', '2022-01-10 07:43:20', '2022-01-11 02:07:06'),
(19, 'House of Cards', 'The book that inspired the British TV show that in turn inspired Netflix’s very first original series, this is the story of Francis Urquhart, Chief Whip, a cynical, manipulative politician determined to become Prime Minister. He’s willing to use every secret he knows, every pressure point he can find, and every dirty trick in the book to secure his own rise to power—and in the process confirms just about every dark and terrible thing you thought you knew about politics. Dobbs drew on his extensive real-life experience in British politics for the books, and the result is an electrifying vision of how exceedingly violent governing can be behind closed doors.', 1989, '4', '19', 'available', 'house of cards.jpg', '2022-01-10 07:43:44', '2022-01-11 02:07:22'),
(20, 'Absolute Power', 'Baldacci’s audacious 1996 novel pivots off a salacious moment wherein a professional thief, having broken into the luxurious home of a billionaire, stumbles onto a two-way mirror giving him a view of the billionaire’s wife and the President of the United States having a affair. The sex turns rough, and the President’s Secret Service detail bursts in and kills the woman. The thief just barely manages to escape, but the Secret Service pins the murder on him, and a game of cat and mouse ensues as the president and his team try to cover up the truth. While conceived during the go-go Clinton years, this is another evergreen political thriller that combines a thriller plot with a plausible look at what authority decoupled from responsibility might look like.', 1995, '4', '20', 'available', 'absolute power.jpg', '2022-01-10 07:44:11', '2022-01-11 02:07:37'),
(21, 'Our violent Ends', 'This highly anticipated sequel to fantasy favorite These Violent Delights by one of our favorite YA authors, Chloe Gong, is just as heart-stopping as the first volume. With new danger afoot in Shanghai, Roma and Juliette must put aside their differences to protect their city — but can they protect their hearts from each other? Our Violent Ends is a high-stakes Romeo and Juliet retelling that somehow also feels wholly original.', 2021, '5', '21', 'available', 'our violent ends.jpg', '2022-01-10 07:44:47', '2022-01-11 02:07:53'),
(22, 'Cytonic', 'The third book in Brandon Sanderson’s epic Skyward series is another nonstop adventure as Spensa puts her life on the line, yet again, in order to save the galaxy. This fast-paced sci-fi tale by one of our favorite authors is one for the ages.', 2021, '5', '22', 'available', 'cytonic.jpg', '2022-01-10 07:45:14', '2022-01-11 02:08:09'),
(23, 'Stuntboy, in the Meantime', 'This sweet and funny illustrated novel follows Portico Reeves, a young boy with a super-secret superhero identity who protects the people in his castle, also known as an apartment building. With Portico’s parents fighting more and more, he gets the worry wiggles and makes it his mission to save them too. This relatable story about a boy experiencing anxiety and life changes from favorite author Jason Reynolds is full of heart.', 2021, '5', '23', 'available', 'stuntboy.jpg', '2022-01-10 07:45:49', '2022-01-11 02:08:22'),
(24, 'The 1619 Project: Born on the Water', 'Nikole Hannah-Jones, Renée Watson, Nikkolas Smith (Illustrator) A complement to The New York Times’ “1619 Project”, Pulitzer Prize-winning journalist Nikole Hannah-Jones and Newbery honor-winning author Renée Watson share a powerful exploration of the origins of American identity and the lingering impact it’s had on society. Nikkolas Smith’s illustrations on their own are noteworthy — when paired with Hannah-Jones and Watson’s poetry, they become groundbreaking. We haven’t seen a project like this before and it’s unlikely to see one in the future.', 2021, '5', '24', 'available', 'The 1619 Project Born on the Water.jpg', '2022-01-10 07:46:18', '2022-01-11 02:10:26'),
(25, 'Gilded', 'Mariss Meyer Darkly haunting and all-around eerie, Gilded is a richly reimagined novel based on the classic tale of Rumpelstiltskin from one of our favorite YA authors. Serilda is known for spinning enchanting stories, but when one of them attracts the attention of the evil Erlking, she is plunged into a wicked world with little hope of escape. This utterly atmospheric tale is not to be missed.', 2021, '5', '25', 'available', 'glided.jpg', '2022-01-10 07:46:52', '2022-01-11 02:10:48'),
(26, 'The Addictive Sketcher', 'Adebanji Alade is caught up in the joys of his creative adventure, and in The Addictive Sketcher, he wants you to join him. An artist, teacher and TV-presenter, Alade covers the sketching basics, starting with the tools he uses before going on to mark-making techniques such as contours, angles and ghosting. It\'s accompanied by unfussy photography and short walkthroughs, WIPs and finished art. The artist spends longer covering core art concepts such as composition and perspective, and provides a range of finished examples, annotated art and  a simplified explanation of terms. The heart of the book is given over to specific sketching scenarios, including public transport, buskers, statues and markets. All are within reach of the average artist, and Alade gives practical tips on each. If you\'re keen to step away from your desk and start sketching the outside world, this is one for you.', 2021, '6', '26', 'available', 'the addictive sketcher.webp', '2022-01-10 07:47:59', '2022-01-11 02:11:05'),
(27, 'Becoming a successful illustrator', 'Becoming a Successful Illustrator is invaluable for anyone thinking of embarking on a career in illustration (or looking for a boost in their existing career) – and this is the second edition, so it\'s bang up to date. There\'s plenty of advice from practicing illustrators (and those that commission them), practical tips on finding work, how to market yourself and run your illustration business, plus lots of inspiring artwork.', 2017, '6', '27', 'available', 'becoming a successful illustrartor.webp', '2022-01-10 07:48:45', '2022-01-11 02:11:44'),
(28, 'Lost in Translation', 'After all those books about business and self-promotion, here\'s a title that helps you remember why you love to draw in the first place. Lost in Translation: An Illustrated Compendium of Untranslatable Words from Around the World has tips on illustration. But it also features 50 drawings about words in various languages that have no direct translation into English. Author Ella Frances Sanders explains that the Japanese language have a word for the way sunlight filters through the leaves of trees, and in Finnish there\'s word for the distance a reindeer can travel before needing to rest. Those written definitions are cumbersome. Her illustrated definitions aren\'t.', 2014, '6', '28', 'available', 'lost in translation.webp', '2022-01-10 07:49:24', '2022-01-11 02:12:27'),
(29, 'Color and Light', 'We had to include the legendary artist James Gurney in our list of essential books for illustrators. We could easily have picked his first book, Imaginative Realism, in which he tells you how to paint what doesn\'t exist. But his second book, Color and Light: A Guide for the Realist Painter, is arguably the best, most exhaustive book ever written on colour and light. In it, Gurney looks at artists who were experts at using of colour and light, how light reveals form, the properties of colour and pigments, and a variety of atmospheric effects. But he does it without using jargon or overly scientific terms. This book shows Gurney is not only a master artist, but a master teacher too.', 2010, '6', '29', 'available', 'logo.png', '2022-01-10 07:49:51', '2022-01-11 02:12:38'),
(30, 'Meditations', 'Stoicism has seen an enthusiastic revival in recent years, especially in entrepreneurial circles. Reading ‘Meditations’, a defining work of stoicism, and it’s not hard to see why. Roman Emperor Marcus Aurelius wrote meditations during his experiences administrating the Roman Empire and during his life as a warrior. He outlines a timeless philosophy of commitment to virtue above pleasure, tranquility above happiness, and perhaps most importantly, a search for inner peace in the face of an endlessly changing and chaotic world. Highly practical for everyday life.', 2012, '7', '30', 'available', 'meditations.jpg', '2022-01-10 07:50:23', '2022-01-10 07:50:23'),
(31, 'The Dialogues (Gorgias, Meno, Theatetus, Sophist, Symposium, Phaedrus, Timaeus, The Republic)', '“Plato, the greatest philosopher of ancient Greece, was born in Athens in 428 or 427 B.C.E. to an aristocratic family. He studied under Socrates, who appears as a character in many of his dialogues. He attended Socrates’ trial and that traumatic experience may have led to his attempt to design an ideal society. Following the death of Socrates he traveled widely in search of learning. After twelve years he returned to Athens and founded his Academy, one of the earliest organized schools in western civilization. Among Plato’s pupils was Aristotle. Some of Plato’s other influences were Pythagoras, Anaxagoras, and Parmenides.Plato wrote extensively and most of his writings survived. His works are in the form of dialogues, where several characters argue a topic by asking questions of each other. This form allows Plato to raise various points of view and let the reader decide which is valid. Plato expounded a form of dualism, where there is a world of ideal forms separate from the world of perception. The most famous exposition of this is his metaphor of the Cave, where people living in a cave are only able to see flickering shadows projected on the wall of the external reality. This influenced many later thinkers, particularly the Neoplatonists and the Gnostics, and is similar to views held by some schools of Hindu dualistic metaphysics”', 0000, '7', '31', 'available', 'The Dialogues (Gorgias, Meno, Theatetus, Sophist, Symposium, Phaedrus, Timaeus, The Republic).jpg', '2022-01-10 07:51:23', '2022-01-10 07:51:23'),
(32, 'The Prince', 'The Prince is sometimes claimed to be one of the first works of modern philosophy, especially modern political philosophy, in which the effective truth is taken to be more important than any abstract ideal. Machiavelli emphasized the need for realism, as opposed to idealism. This is one of Machiavelli’s most lasting influences upon modernity.', 0000, '7', '32', 'available', 'the prince.jpg', '2022-01-10 07:52:33', '2022-01-10 07:52:33'),
(33, 'A Treatise of Human Nature', 'In his treatise, he attempts to use the same scientific method of reasoning in order to inquire into human psychology – namely to glimpse the depth of our understanding and potential. He ultimately argues the irrationality of human beings.', 0000, '7', '33', 'available', 'a treatise of human nature.jpg', '2022-01-10 07:53:11', '2022-01-10 07:53:11'),
(34, 'The Art of War', 'One of the most influential books ever written, The Art of War has applications in business, the military and any situation involving strategy or people. It is composed of 13 chapters, each one describing a part of warfare, relating back to tactics, and immediate application.', 0000, '7', '34', 'available', 'the art of war.jpg', '2022-01-10 07:53:34', '2022-01-10 07:53:34'),
(35, 'French Cooking in Ten Minutes', 'Pomiane’s book features simple, nutritious meals and a typically French reverence for food. ‘Modern life spoils so much that is pleasant,’ Pomiane says. ‘Let us see that it does not make us spoil our steak or our omelette. Ten minutes are sufficient – one minute more and all would be lost.’ Raymond, chef patron, Le Manoir aux Quat’Saisons in Oxfordshire, says, ‘Pomiane is my hero. He was not a chef but a renowned scientist at the Institut Pasteur in Paris, an expert in nutrition and the medical values of food. A man of real knowledge.’', 1939, '8', '35', 'available', 'french-cooking-in-ten-minutes-bc0e068.webp', '2022-01-10 07:54:07', '2022-01-11 02:13:11'),
(36, 'Goose Fat & Garlic', 'Having bought an abandoned French farmhouse in 1961, Jeanne Strang gathered recipes and regional dishes to create this celebration of food between Languedoc and Limousin. Orlando, executive consultant editor for BBC Good Food, says, ‘If ever a cookbook changed someone’s life – this was it for me! Strang’s description of south west France and its rich culinary heritage is so captivating that, in 2004, I left the rat race to move there and open a gastronomic B&B. An inspirational book packed with impeccable research and authentic recipes.’', 1991, '8', '36', 'available', 'Goose Fat & Garlic.webp', '2022-01-10 07:54:33', '2022-01-11 02:13:21'),
(37, 'French Country Cooking', 'Written when food rationing was still in force (it ended in 1954), Elizabeth David’s second book includes classics such as hare in a cream & chestnut purée. Often credited with rejuvenating post-war British food, David went on to write many more cookery books. Skye Gyngell, founder of Spring, Somerset House in London, calls it ‘a groundbreaking book. Elizabeth David was a pioneer in the total transformation of British cooking habits.’', 1951, '8', '44', 'available', 'French Country Cooking.webp', '2022-01-10 07:55:03', '2022-01-11 02:13:35'),
(38, 'The Complete Asian Cookbook', 'With 13 chapters, which include dishes from Malaysia, India, Sri Lanka, Thailand, Burma, Vietnam, Japan and Korea, this is a wide-ranging guide, not only to techniques, ingredients and equipment, but also recipes. Ping, 2014 BBC MasterChef winner, says, ‘This is my all-time favourite cookbook, it’s an extensive collection of recipes from all over south-east Asia, which is where I do a lot of my research. It provides a fantastic starting point for so many of my recipes.’', 1976, '8', '43', 'available', 'The Complete Asian Cookbook.webp', '2022-01-10 07:55:27', '2022-01-11 02:13:47'),
(39, 'Quay: Food Inspired by Nature', 'Australian chef and restaurateur Peter Gilmore shares signature recipes from his Sydney kitchen, and outlines his philosophy for natural ingredients and organic presentation. Eric, pâtissier and author, says, ‘I love this book. For me, it’s not just about the cooking and the food, it’s the whole lifestyle. It’s an aspirational feast and I never tire of revisiting this book.’', 2010, '8', '42', 'available', 'quay.webp', '2022-01-10 07:55:55', '2022-01-11 02:13:57'),
(40, 'The Fitness Mindset', '\"The Fitness Mindset\" is an everything guide to living a fitter, more energetic life. Throughout the book, fitness coach Brian Keane will help you strengthen every part of your fitness routine—your eating habits, your exercise regimen, and your ability to stay motivated. Whether you’re looking to adjust your diet, log more hours at the gym, or simply have more energy to get through the day, Keane is there to help, making this an excellent pick for anyone interested in health, fitness, and personal development.', 2021, '9', '41', 'available', 'the fitness mindset.webp', '2022-01-10 07:56:28', '2022-01-11 02:14:11'),
(41, 'Glute Lab', 'The Glute Lab is a definitive guide to building strength in—you guessed it—your glutes. Throughout the book, personal trainer Bret Contreras, PhD, CSCS, distills tons of field research and science-backed techniques into a simple training guide you can use to strengthen your glutes. Sure, it may seem a little strange to focus solely on your glutes. But the gluteus maximus is the largest muscle in your body—and it plays a key role in all kinds of basic movements (like running, jumping, and weight-lifting). Building strength there will help you build strength elsewhere. Plus, it’ll give you a clear and simple goal to focus on as you start strength-training.', 2021, '9', '40', 'available', 'glute lab.jpg', '2022-01-10 07:57:31', '2022-01-11 02:14:20'),
(42, 'Ready to Run', '\"Ready to Run\" is a must-read for anyone who runs regularly, as well as anyone who’d like to start running more. In this informative book, coach and physiotherapist Kelly Starrett, Ph.D., helps runners tackle and preempt an array of obstacles they might encounter—including injury, improper training, the challenges of switching running shoes, and more. By emphasizing 12 simple performance standards, Starrett helps runners understand not just how to run faster—but also how to run better, stronger, and free of injury.', 2021, '9', '38', 'available', 'ready to run.jpg', '2022-01-10 07:57:56', '2022-01-11 02:14:34'),
(43, 'Breathwork', 'In \"Breathwork,\" yoga teacher Valerie Moselle offers a practical guide for incorporating meditation and breathing exercises into your day. She starts by breaking down the basics of breathwork and exploring the potential benefits of strengthening the mind-body connection. Then, she offers a three-week training program full of simple, step-by-step exercises you can try to make your mornings and evenings a little more meditative.', 2021, '9', '37', 'available', 'breathwork.jpg', '2022-01-10 07:58:21', '2022-01-11 02:14:47'),
(44, 'The champion’s', '\"The Champion’s Mind\" explores one simple but imperative idea: Fitness isn’t just a physical game—it’s also a mental one, too. Over the course of this book’s 288 pages, sports psychologist Jim Afremow, Ph.D., shares strategies for sticking with goals and staying challenged over time. Though this book was written with athletes in mind, it reads like a pep talk that would motivate anyone to tackle their long-time goals.', 2021, '9', '39', 'available', 'the champion\'.jpg', '2022-01-10 07:58:43', '2022-01-11 02:14:55');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Horror', '2021-12-27 22:38:08', '2022-01-10 19:02:37'),
(2, 'Science fiction', '2022-01-07 06:00:50', '2022-01-10 06:41:48'),
(3, 'Historical fiction', '2022-01-09 22:20:02', '2022-01-10 06:42:06'),
(4, 'Political thriller', '2022-01-10 06:42:14', '2022-01-10 06:42:14'),
(5, 'Poetry', '2022-01-10 06:42:27', '2022-01-10 06:42:27'),
(6, 'Illustrate book', '2022-01-10 06:42:42', '2022-01-10 06:42:42'),
(7, 'Philosophy', '2022-01-10 06:42:50', '2022-01-10 06:42:50'),
(8, 'Cookbook', '2022-01-10 06:42:58', '2022-01-10 06:42:58'),
(9, 'Fitness book', '2022-01-10 06:43:04', '2022-01-10 06:43:04'),
(10, 'Pet', '2022-01-10 19:02:49', '2022-01-10 19:02:49');

-- --------------------------------------------------------

--
-- 表的结构 `failed_jobs`
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
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(41, '2021_12_11_110631_create_authors_table', 1),
(42, '2021_12_11_110836_create_categories_table', 1),
(43, '2021_12_12_135104_create_books_table', 1),
(44, '2021_12_12_135151_create_statuses_table', 1),
(45, '2021_12_18_111249_create_banners_table', 1);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `personal_access_tokens`
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
-- 表的结构 `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `endTime` date NOT NULL,
  `extendTime` int(11) NOT NULL,
  `bookID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `statuses`
--

INSERT INTO `statuses` (`id`, `endTime`, `extendTime`, `bookID`, `studentID`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-01-21', 0, '17', '2', 'returned', '2022-01-10 18:42:07', '2022-01-10 18:55:51'),
(2, '2022-01-15', 0, '6', '2', 'returned', '2022-01-10 18:55:22', '2022-01-11 01:13:12'),
(3, '2022-01-11', 1, '1', '2', 'returned', '2022-01-10 20:02:37', '2022-01-10 20:04:11'),
(4, '2022-01-11', 1, '11', '2', 'returned', '2022-01-11 01:23:39', '2022-01-11 23:19:56'),
(5, '2022-01-10', 1, '15', '2', 'returned', '2022-01-11 23:33:12', '2022-01-12 01:29:55');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profilePicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phoneNo`, `status`, `profilePicture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', '23, taman ulu, 23 jalan ping, 818000', '018-7872022', 'is_admin', 'logo.png', NULL, '$2y$10$p0IzrbZDFfx3G2UhbMT0U..i9PiOZOg5KbDuOMS/aHBVwA3g.HF.y', NULL, '2022-01-10 18:26:22', '2022-01-10 18:26:22'),
(2, 'Tai Kang Sheng', 'kang@gmail.com', '23, taman ulu, 23 jalan ping, 818000', '0182133462', 'student', 'logo.png', NULL, '$2y$10$/6X3RbfiLOkLZYVO3ks8/e68CVOxNSB9cToi6rD/pxaajHrfIIzRC', NULL, '2022-01-10 18:41:58', '2022-01-10 23:40:00');

--
-- 转储表的索引
--

--
-- 表的索引 `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 表的索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 表的索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 表的索引 `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用表AUTO_INCREMENT `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- 使用表AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- 使用表AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
