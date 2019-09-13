-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 03:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdata`
--

CREATE TABLE `bookdata` (
  `ProductID` int(3) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `Price` int(3) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ImageDes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdata`
--

INSERT INTO `bookdata` (`ProductID`, `BookName`, `Price`, `Category`, `Description`, `ImageDes`) VALUES
(101, 'Dune', 500, 'Science Fictiion', 'Dune is a 1965 epic science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny\'s This Immortal for the Hugo Award in 1966,[3] and it won the inaugural Nebula Award for Best Novel.[4] It is the first installment of the Dune saga, and in 2003 was cited as the world\'s best-selling science fiction novel. ', 'cat1/sf1.jpg'),
(102, 'THE ENDERS GAME', 300, 'science fiction', 'Enders Game is a 2013 American military science fiction action film based on the novel of the same name by Orson Scott Card. Written and directed by Gavin Hood, the film stars Asa Butterfield as Andrew Ender Wiggin, an unusually gifted child who is sent to an advanced military academy in outer space to prepare for a future alien invasion', 'cat1/sf2.jpg'),
(103, 'THE NEUROMANGER', 450, 'science fiction', 'Neuromancer is a 1984 science fiction novel by American-Canadian writer William Gibson. It is one of the best-known works in the cyberpunk genre and the first novel to win the Nebula Award, the Philip K. Dick Award, and the Hugo Award.[1] It was Gibsons debut novel and the beginning of the Sprawl trilogy. The novel tells the story of a washed-up computer hacker hired by a mysterious employer to pull off the ultimate hack. ', 'cat1/sf3.jpg'),
(104, 'THE LEFT HAND OF LIGHT', 600, 'science fiction', 'A lonely woman with incredible intuitive powers considers ending her life. A dark and driven man with the ability to cross over into the Spirit World searches in vain for the soul of his lost love. When these two meet, so begins an epic adventure into places they could have never imagined while the Immortal Night, the Black Queen of Shadow contrives to ensnare and steal the life force of The Left Hand of Light into the Underworld. ', 'cat1/sf4.jpg'),
(105, 'THE TIME MACHINE', 700, 'science fiction', 'The Time Machine is a 2002 American science fiction film loosely adapted from the 1895 novel of the same name by H. G. Wells and the screenplay of the 1960 film of the same name by David Duncan. Arnold Leibovit served as executive producer and Simon Wells served as director, the great-grandson of the original author. ', 'cat1/sf5.jpg'),
(106, 'THE STRANGER IN THE STRANGE LAND', 300, 'science fiction', 'Stranger in a Strange Land is a 1961 science fiction novel by American author Robert A. Heinlein. It tells the story of Valentine Michael Smith, a human who comes to Earth in early adulthood after being born on the planet Mars and raised by Martians. The novel explores his interaction with—and eventual transformation of—Terran culture. In 2012, the US Library of Congress named it one of 88 \"Books that Shaped America\".', 'cat1/sf6.jpg'),
(107, 'THE 100', 500, 'science fiction', 'The 100 (pronounced The Hundred) is an American post-apocalyptic science fiction drama television series that premiered on March 19, 2014, on The CW. The series, developed by Jason Rothenberg, is loosely based on the 2013 book of the same name, the first in a series by Kass Morgan. \r\n', 'cat1/sf7.jpg'),
(108, 'PITCH DARK', 300, 'science fiction', '\"Pitch Dark is the story of the end of a love affair—a story that, in Renata Adler’s brilliant telling, becomes a richly diffracted, illuminating, investigation of an exceptional woman. After a nine-year affair with Jake, a married man, Kate Ennis decides to escape. She takes off, looking for something beautiful and quiet by the sea, but finds herself in a pitch dark and driving rain on a lonely Irish road. ', 'cat1/sf8.jpg'),
(109, 'RUNAWAY ALIEN', 450, 'science fiction', 'RDex is a runaway, but not your typical runaway. Hes a young alien who has stolen a star ship in order to rescue his teacher, who he thinks is being held as a prisoner on earth. After crashing on earth, RDex is befriended by two middle graders, Tommy and Hawk. RDex lives in a shed in Hawks backyard, where he watches old cowboy movies for entertainment and drinks cans of oil to quench his thirst. When Tommy and Hawk disguise RDex as a human and bring him to class, thats when things get complicate', 'cat1/sf9.jpg'),
(110, 'SAMUEL DELANY', 500, 'science fiction', 'His science fiction novels include Babel-17, The Einstein Intersection Nova, Dhalgren, and the Return to Nevèrÿon series. After winning four Nebula awards and two Hugo awards over the course of his career, Delany was inducted by the Science Fiction and Fantasy Hall of Fame in 2002. From January 2001 until his retirement in May 2015 ', 'cat1/sf10.jpg'),
(111, 'STAR WARS', 300, 'science fiction', 'The franchise began in 1977 with the release of the film Star Wars which became a worldwide pop culture phenomenon. It was followed by the successful sequels The Empire Strikes Back (1980) and Return of the Jedi (1983); these three films constitute the original Star Wars trilogy. A prequel trilogy was released between 1999 and 2005 ', 'cat1/sf11.jpg'),
(112, 'DAY ONE', 450, 'science fiction', 'Day One has helped millions of people worldwide easily capture life as they live it. To help you preserve and share these memories, we’re pleased to introduce Day One Book. As of our 2.5.12 release on iOS, book printing is now available internationally! All prices are in USD. ', 'cat1/sf12.jpg'),
(201, 'The Game Of Thrones', 500, 'tvshow', 'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss. It is an adaptation of A Song of Ice and Fire, George R. R. Martins series of fantasy novels, the first of which is A Game of Thrones.', 'cat2/tv1.jpg'),
(202, 'Friends', 300, 'tvshow', 'Friends (stylized as F•R•I•E•N•D•S) is an American television sitcom, created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.', 'cat2/tv2.jpg'),
(203, 'Narcos', 450, 'tvshow', 'Narcos is a US crime drama web television series created and produced by Chris Brancato, Carlo Bernard, and Doug Miro. Season one, comprising 10 episodes, originally aired on August 28, 2015, as a Netflix exclusive.', 'cat2/tv3.jpg'),
(204, 'The Walking Dead', 600, 'tvshow', 'The Walking Dead is an American post-apocalyptic horror television series developed by Frank Darabont for AMC that is based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard. Andrew Lincoln plays the shows lead character, sheriffs deputy Rick Grimes ', 'cat2/tv4.jpg'),
(205, 'Breaking Bad', 700, 'tvshow', 'Breaking Bad is an American neo-western crime drama television series created and produced by Vince Gilligan. The show originally aired on the AMC network for five seasons, from January 20, 2008 to September 29, 2013.It tells the story of Walter White (Bryan Cranston), a struggling high school chemistry teacher diagnosed with inoperable lung cancer.', 'cat2/tv5.jpg'),
(206, 'Mr.Robot', 300, 'tvshow', 'Mr. Robot is an American drama–thriller television series created by Sam Esmail. It stars Rami Malek as Elliot Alderson, a cybersecurity engineer and hacker who suffers from social anxiety disorder and clinical depression.', 'cat2/tv6.jpg'),
(207, 'A SERIES OF UNFORTUNE EVENTS', 500, 'tvshow', 'Lemony Snickets A Series of Unfortunate Events, or simply A Series of Unfortunate Events, is an American black comedy-drama[4] television series from Netflix, developed by Mark Hudis and Barry Sonnenfeld,based on the childrens novel series of the same name by Lemony Snicket. It stars Neil Patrick Harris, Patrick Warburton, Malina Weissman, Louis Hynes, K. Todd Freeman, and Presley Smith. ', 'cat2/tv7.jpg'),
(208, 'THE BOOK OF NEGROES', 300, 'tvshow', 'The Book of Negroes is a miniseries based on the novel of the same name by Canadian writer Lawrence Hill. The book in turn derives its origins from the historical document Book of Negroes, and tells the story of a fictional woman forcefully brought to South Carolina from West Africa at the time of the American Revolution. Clement Virgo and Hill collaborated on writing the six-part miniseries, with Virgo also directing. ', 'cat2/tv8.jpg'),
(209, 'ROSEWELL', 450, 'tvshow', 'Rosewell Plantation in Gloucester County, Virginia, was for more than 100 years the home of a branch of the Page family, one of the First Families of Virginia. Begun in 1725, the Flemish bond brick Rosewell mansion overlooking the York River was one of the most elaborate homes in the American colonies. In Mansions of Virginia, the architectural historian Thomas Tileston Waterman described the plantation house as \"the largest and finest of American houses of the colonial period.\" ', 'cat2/tv9.jpg'),
(210, 'GOOSEBUMPS', 500, 'tvshow', 'Goosebumps is a 2015 American horror comedy film based on the childrens book series of the same name by R.L. Stine. It was directed by Rob Letterman and written by Darren Lemke, from a story by Scott Alexander and Larry Karaszewski. The film stars Jack Black (in a triple role), Dylan Minnette, Odeya Rush, Amy Ryan, Ryan Lee, Jillian Bell, and Halston Sage. It was financed by Sony, LStar Capital, and Village Roadshow Picture and also produced by Sony Pictures Animation, Original Film, and Scholas', 'cat2/tv10.jpg'),
(211, 'STEELHEART', 300, 'tvshow', 'Steelheart started off as a rock band called Red Alert whose members included James Ward (bass), Chris Risola (lead guitar), Jack Wilkenson (drums) and Miljenko Matijevic (vocals). Frank DiCostanzo joined as a rhythm guitarist and John Fowler replaced Jack Wilkenson. Steelheart released their self-titled debut album in 1990. The second single \"Ill Never Let You Go (Angel Eyes)\" reached No. 14 on the Billboard charts ', 'cat2/tv11.jpg'),
(212, 'ARROW', 450, 'tvshow', 'Arrow is an American superhero television series developed by writer/producers Greg Berlanti, Marc Guggenheim, and Andrew Kreisberg. It is based on the DC Comics character Green Arrow, a costumed crime-fighter created by Mort Weisinger and George Papp. It premiered in the United States on The CW on October 10, 2012, with international broadcasting taking place in late 2012. Primarily filmed in Vancouver, British Columbia, Canada, the series follows billionaire playboy Oliver Queen (Stephen Amell', 'cat2/tv12.jpg'),
(301, 'The Amityville Horror', 500, 'Horror', 'The Amityville Horror is a book by American author Jay Anson, published in September 1977. It is also the basis of a series of films released from 1979 onwards. The book is claimed to be based on the paranormal experiences of the Lutz family, but has led to controversy and lawsuits over its truthfulness.', 'cat3/h1.jpg'),
(302, 'The Graveyard Appartment', 300, 'Horror', 'The Graveyard Apartment is a childrens fantasy novel by the English author Neil Gaiman, simultaneously published in Britain and America during 2008. The Graveyard Book traces the story of the boy Nobody \"Bod\" Owens who is adopted and raised by the supernatural occupants of a graveyard after his family is brutally murdered', 'cat3/h2.jpg'),
(303, 'Naomis Room', 450, 'Horror', 'Naomis Room is a 1991 horror novel by English author Jonathan Aycliffe, described by the Newcastle Evening Chronicle as being \"among the finest of English ghost stories\".[1] It has been optioned for film in Hollywood', 'cat3/h3.jpg'),
(304, 'IT', 600, 'Horror', 'It is a 1986 horror novel by American author Stephen King. It was his 22nd book and 18th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey. \"It\" primarily appears in the form of a clown to attract its preferred prey of young children.', 'cat3/h4.jpg'),
(305, 'The Girl From The Well', 700, 'Horror', 'The Girl from the Well is a young adult series of novels by Rin Chupeco.[1] The first book, The Girl from the Well, was published through Sourcebooks Fire on August 5, 2014 and was followed by The Suffering, which released on September 8, 2015.', 'cat3/h5.jpg'),
(306, 'Clay', 300, 'Horror', 'Clay is a childrens/young adult novel by David Almond, published in 2005. It was shortlisted for the Carnegie Medal and longlisted for the Guardian Childrens Fiction Prize.It was adapted for television in 2008 by Andrew Gunn, and aired on BBC One on 30 March 2008. ', 'cat3/h6.jpg'),
(307, 'DRACULA', 500, 'Horror', 'Dracula is an 1897 Gothic horror novel by Irish author Bram Stoker. It introduced Count Dracula, and established many conventions of subsequent vampire fantasy. The novel tells the story of Draculas attempt to move from Transylvania to England so that he may find new blood and spread the undead curse, and of the battle between Dracula and a small group of men and a woman led by Professor Abraham Van Helsing. ', 'cat3/h7.png'),
(308, 'THE TIGERS DAUGHTER', 300, 'Horror', 'The Hokkaran empire has conquered every land within their bold reach?but failed to notice a lurking darkness festering within the people. Now, their border walls begin to crumble, and villages fall to demons swarming out of the forests.Away on the silver steppes, the remaining tribes of nomadic Qorin retreat and protect their own, having bartered a treaty with the empire. \r\n', 'cat3/h8.jpg'),
(309, 'DOLL BONES', 450, 'Horror', 'Doll Bones is the story of Zachary \"Zach\" Barlow, Alice Magnaye, and Poppy Bells quest to return a haunted doll to its proper grave site in another town. Zach, Alice, and Poppy play a role-playing game with Horrific action figures and metal cut-outs. Poppy runs the game which involves Zachs character \"William the Blade\" and character \"Lady Jaye\" on fos sailing ship, Neptunes Pearl. ', 'cat3/h9.jpg'),
(310, 'THE LOST CARVERN', 500, 'Horror', 'The Lost Cavern: And Other Stories of the Fantastic eBook: H. F. Heard: Amazon.ca: Kindle Store. ... In the wilds of Mexico, a veteran spelunker hears rumors of a cave that could take him deeper than hes ever gone before. The locals whisper old ... Each month we unveil a new collection of Kindle books for $3.99 or less.', 'cat3/h10.jpg'),
(311, 'WE ARE ALWAYS WATCHING', 300, 'Horror', 'The move from New York to the decrepit Pennsylvania farmhouse is as bad as West Ridley thought it would be. His father’s crippling vertigo only seems to get worse, and even with his mother working herself to the bone, they’re out of money and options.Grandpa Abraham is a drunk bastard and the living embodiment of the long neglected farmhouse. He claims the place is haunted. Ghosts roam the hall at night and their muffled cries fill the silence of warm, summer nights.', 'cat3/h11.jpg'),
(312, 'THE DEVILS KISS', 450, 'Horror', 'Kayla Sutton faces a question no mother wants to face: what would you do to save your daughter? Broke and desperate, she siphons thousands from her employer to pay for her daughters treatment, but when Gage Channing discovers her theft, she is shocked to learn that her boss has no intention of turning her over to the police. Instead he issues an ultimatum—give him her sexual submission, or go to jail. ', 'cat3/h12.jpg'),
(401, 'Playing It My Way', 300, 'biography', 'Playing It My Way is the autobiography of former Indian cricketer Sachin Tendulkar. It was launched on 5 November 2014 in Mumbai. The book summarises Tendulkars early days, his 24 years of international career and aspects of his life that have not been shared publicly. ', 'cat4/b6.jpg'),
(402, 'When The Laughter Stops', 300, 'biography', 'When The Laughter Stops is a comedy double album by comedian Andrew Dice Clay, which was released in 1990. Produced by Rick Rubin whose concept was to record an unadvertised performance in a small club with a small crowd, many of whom would not necessarily be fans of Clay s act. Clay chose a New York club owned by comedian Rodney Dangerfield, Dangerfield s, to record during the holiday season.', 'cat4/b2.jpg'),
(403, 'Gandhi Before India', 450, 'biography', 'Gandhi Before India is a 2013 book by the Indian historian Ramachandra Guha, the first part of a planned two-volume biography of Mohandas Karamchand Gandhi. The book deals with Gandhi s life up to his return to India following a 21-year period as a lawyer and civil-rights activist in South Africa. ', 'cat4/b3.jpg'),
(404, 'John Le Carre', 600, 'biography', 'David John Moore Cornwell (born 19 October 1931) is best known by the pen name John le Carré (/l? ?k??r?e?/). He is a British author of espionage novels. During the 1950s and 60s, he worked for both the Security Service and the Secret Intelligence Service. His third novel, The Spy Who Came in from the Cold (1963)', 'cat4/b4.jpg'),
(405, 'Thet Called Me GOD', 700, 'biography', 'Harvey, now an octogenarian battling oral cancer and the effects of strokes, teams with veteran co-author Golenbock (Glory in the Fall: The Greatest Moments in World Series History, 2010, etc.) to produce a breezy and sometimes-grumpy memoir about his years in major league baseball. ', 'cat4/b5.jpg'),
(406, 'The Life', 500, 'biography', 'The Life is a musical with a book by David Newman, Ira Gasman and Cy Coleman, music by Coleman, and lyrics by Gasman.Based on an original idea by Gasman, the show explores the underbelly of Times Square s 42nd Street, inhabited by pimps and prostitutes, druggies and dealers, and runaways and street people in the era prior to its Disneyfication. ', 'cat4/b1.jpg'),
(407, 'WAYLON', 500, 'BIOGRAPHY', 'Willem Bijkerk (Dutch pronunciation: [???l?m ?b?ik?rk]; born 20 April 1980), known professionally as Waylon, is a Dutch singer. His stage name came from the name of his idol Waylon Jennings. He represented the Netherlands with Ilse DeLange as The Common Linnets at the Eurovision Song Contest 2014, finishing in second place in the final[1] and will return as a solo act to represent the Netherlands again in the Eurovision Song Contest 2018. ', 'cat4/b7.jpg'),
(408, 'APJ ABDUL KALAM', 300, 'BIOGRAPHY', 'Avul Pakir Jainulabdeen Abdul Kalam better known as A. P. J. Abdul Kalam (/?æbd?l k??l??m/ (About this sound listen); 15 October 1931 – 27 July 2015), was the 11th President of India from 2002 to 2007. A career scientist turned statesman, Kalam was born and raised in Rameswaram, Tamil Nadu, and studied physics and aerospace engineering. He spent the next four decades as a scientist and science administrator, mainly at the Defence Research and Development Organisation (DRDO) and Indian Space Rese', 'cat4/b8.jpg'),
(409, 'STEVE JOBS', 450, 'BIOGRAPHY', 'Steven Paul Jobs was an American entrepreneur, business magnate, inventor, and industrial designer. He was the chairman, chief executive officer (CEO), and a co-founder of Apple Inc., CEO and majority shareholder of Pixar, a member of The Walt Disney Companys board of directors following its acquisition of Pixar, and the founder, chairman, and CEO of NeXT. Jobs and Apple co-founder Steve Wozniak are widely recognized as pioneers of the microcomputer revolution of the 1970s and 1980s. \r\n', 'cat4/b9.jpg'),
(410, 'JAGGER', 500, 'BIOGRAPHY', 'Sir Michael Philip Jagger (born 26 July 1943) is an English singer-songwriter, multi-instrumentalist, composer and actor who gained fame as the lead singer and one of the founder members of the Rolling Stones. Jaggers career has spanned over five decades, and he has been described as \"one of the most popular and influential frontmen in the history of rock & roll\" ', 'cat4/b10.jpg'),
(411, 'NARENDRA MODI', 300, 'BIOGRAPHY', 'Narendra Damodardas Modi (Gujarati: [?n??e?nd?r? d?a?mo?d????d?a?s ?mo?d?i?] (About this sound listen); born 17 September 1950) is an Indian politician who is the 16th and current Prime Minister of India, in office since May 2014. He was the Chief Minister of Gujarat from 2001 to 2014, and is the Member of Parliament for Varanasi. Modi, a member of the Bharatiya Janata Party (BJP), is a Hindu nationalist and member of the right-wing Rashtriya Swayamsevak Sangh (RSS). ', 'cat4/b11.jpg'),
(412, 'THE MAN WHO KNEW', 450, 'BIOGRAPHY', 'The film stars Dev Patel as Srinivasa Ramanujan, a real-life mathematician who after growing up poor in Madras, India, earns admittance to Cambridge University during World War I, where he becomes a pioneer in mathematical theories with the guidance of his professor, G. H. Hardy, portrayed by Jeremy Irons.Filming began in August 2014 at Trinity College, Cambridge. ', 'cat4/b12.jpg'),
(501, 'Divergent', 500, 'fiction', 'Divergent is a 2014 American dystopian science fiction action film directed by Neil Burger, based on the novel of the same name by Veronica Roth. The film is the first installment in The Divergent Series and was produced by Lucy Fisher, Pouya Shabazian, and Douglas Wick, with a screenplay by Evan Daugherty and Vanessa Taylor. ', 'cat5/f1.jpg'),
(502, 'Four', 300, 'fiction', 'Four is a novel written by the American authors Ian Caldwell and Dustin Thomason, and published in 2004. Caldwell, a Princeton University graduate, and Thomason, a Harvard College graduate, are childhood friends who wrote the book after their graduations. ', 'cat5/f2.jpg'),
(503, 'The DA VINCI Code', 450, 'fiction', 'The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene.', 'cat5/f3.jpg'),
(504, 'Carrie', 600, 'fictio', 'Carrie is a 2013 American supernatural horror film, directed by Kimberly Peirce, and is the third film adaptation of Stephen King s 1974 novel of the same name. The film was produced by Kevin Misher, with a screenplay by Lawrence D. Cohen & Roberto Aguirre-Sacasa. \r\n', 'cat5/f4.jpg'),
(505, 'Harry Potter And The Chamber Of Sectets', 700, 'fiction', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harrys second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the schools corridors warn that the \"Chamber of Secrets\"', 'cat5/f5.jpg'),
(506, 'Blood Warrior', 300, 'fiction', 'Blood Warrior known in Japan as Ooedo Fight (??????? Ooedo Faito), is a 1993 fighting arcade game developed by Atop and published by Kaneko. It is the successor to the 1992 fighting arcade game, Shogun Warriors, also developed by Atop and published by Kaneko. ', 'cat5/f6.jpg'),
(507, 'THE BOOK THIEF', 500, 'fiction', 'The Book Thief is a 2005 historical novel by Australian author Markus Zusak and is his most popular work.Published in 2005, The Book Thief became an international bestseller and was translated into several languages. It was adapted into a 2013 feature film of the ', 'cat5/f7.jpg'),
(508, 'DIARY OF THE WIMPY KID', 300, 'fiction', 'Diary of a Wimpy Kid is a satirical realistic fiction comedy novel for children and teenagers written and illustrated by Jeff Kinney. It is the first book in the Diary of a Wimpy Kid series. The book is about a boy named Greg Heffley and his struggles to fit in as he begins middle school.Diary of a Wimpy Kid first appeared on FunBrain in 2004, where it was read 20 million times.[1] The abridged hardcover adaptation was released on April 1, 2007. ', 'cat5/f8.jpg'),
(501, 'Divergent', 500, 'fiction', 'Divergent is a 2014 American dystopian science fiction action film directed by Neil Burger, based on the novel of the same name by Veronica Roth. The film is the first installment in The Divergent Series and was produced by Lucy Fisher, Pouya Shabazian, and Douglas Wick, with a screenplay by Evan Daugherty and Vanessa Taylor. ', 'cat5/f1.jpg'),
(502, 'Four', 300, 'fiction', 'Four is a novel written by the American authors Ian Caldwell and Dustin Thomason, and published in 2004. Caldwell, a Princeton University graduate, and Thomason, a Harvard College graduate, are childhood friends who wrote the book after their graduations. ', 'cat5/f2.jpg'),
(503, 'The DA VINCI Code', 450, 'fiction', 'The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene.', 'cat5/f3.jpg'),
(504, 'Carrie', 600, 'fictio', 'Carrie is a 2013 American supernatural horror film, directed by Kimberly Peirce, and is the third film adaptation of Stephen King s 1974 novel of the same name. The film was produced by Kevin Misher, with a screenplay by Lawrence D. Cohen & Roberto Aguirre-Sacasa. \r\n', 'cat5/f4.jpg'),
(505, 'Harry Potter And The Chamber Of Sectets', 700, 'fiction', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harrys second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the schools corridors warn that the \"Chamber of Secrets\"', 'cat5/f5.jpg'),
(506, 'Blood Warrior', 300, 'fiction', 'Blood Warrior known in Japan as Ooedo Fight (??????? Ooedo Faito), is a 1993 fighting arcade game developed by Atop and published by Kaneko. It is the successor to the 1992 fighting arcade game, Shogun Warriors, also developed by Atop and published by Kaneko. ', 'cat5/f6.jpg'),
(507, 'THE BOOK THIEF', 500, 'fiction', 'The Book Thief is a 2005 historical novel by Australian author Markus Zusak and is his most popular work.Published in 2005, The Book Thief became an international bestseller and was translated into several languages. It was adapted into a 2013 feature film of the ', 'cat5/f7.jpg'),
(508, 'DIARY OF THE WIMPY KID', 300, 'fiction', 'Diary of a Wimpy Kid is a satirical realistic fiction comedy novel for children and teenagers written and illustrated by Jeff Kinney. It is the first book in the Diary of a Wimpy Kid series. The book is about a boy named Greg Heffley and his struggles to fit in as he begins middle school.Diary of a Wimpy Kid first appeared on FunBrain in 2004, where it was read 20 million times.[1] The abridged hardcover adaptation was released on April 1, 2007. ', 'cat5/f8.jpg'),
(509, 'THE LORD OF RINGS', 450, 'fiction', 'The Lord of the Rings is a film series consisting of three high fantasy adventure films directed by Peter Jackson. They are based on the novel The Lord of the Rings by J. R. R. Tolkien. The films are subtitled The Fellowship of the Ring (2001), The Two Towers (2002) and The Return of the King (2003). They are a New Zealand-American venture produced by WingNut Films and The Saul Zaentz Company and distributed by New Line Cinema. ', 'cat5/f9.jpg'),
(510, 'RUNNING OUT OF NIGHT', 500, ' fiction', 'Fans of Elijah of Buxton, Trouble Dont Last, and Stealing Freedom will be drawn to this tale of the incredible journey of an abused twelve-year-old white girl and an escaped slave girl who run away together and form a bond of friendship while seeking freedom. ', 'cat5/f10.jpg'),
(511, 'THE GIRL IN THE ICE', 300, 'fiction', 'Her eyes are wide open. Her lips parted as if to speak. Her dead body frozen in the ice…She is not the only one. When a young boy discovers the body of a woman beneath a thick sheet of ice in a South London park, Detective Erika Foster is called in to lead the murder investigation. ', 'cat5/f11.jpg'),
(512, 'ONE INDIAN GIRL', 450, 'fitcion', 'One Indian Girl is the story of Radhika Mehta, a worker at the Distressed Debt group of Goldman Sachs, an investment bank. The book begins with Radhika making arrangements regarding her marriage with Brijesh Gulati who works in the Facebook company in San Francisco. She later reveals her childhood and life in Delhi, as a nerdy personality in contrast to her elder sister Aditi. She also communicates her thoughts and decisions to her inner judgemental voice, or \"mini-me\" as called. ', 'cat5/f12.jpg'),
(1, 'The Perks Of Being A Wallflower', 500, 'tt', 'The Perks of Being a Wallflower is a coming-of-age epistolary novel by American writer Stephen Chbosky which was first published on February 1, 1999, by Pocket Books. Set in the early 1990s, the novel follows Charlie, an introverted teenager, through his freshman year of high school in a Pittsburgh suburb.', 'homepage/b1.jpg'),
(2, 'The Time Travellers Wife', 350, 'tt', 'The story follows Henry DeTamble (Bana), a Chicago librarian with a paranormal genetic disorder that causes him to randomly time travel as he tries to build a romantic relationship with Clare Abshire (McAdams), who would become his wife.', 'homepage/b2.jpg'),
(3, '13 Reasons Why', 400, 'tt', 'The series revolves around a high school student, Clay Jensen, and his friend Hannah Baker, a girl who committed suicide after suffering a series of demoralizing circumstances brought on by select individuals at her school. A box of cassette tapes recorded by Hannah before her suicide details thirteen reasons why she ended her life.', 'homepage/b3.jpg'),
(4, 'The DA VINCI Code', 450, 'ts', 'The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene.', 'homepage/b4.jpg'),
(5, 'Harry Potter And The Deathly Hallows', 700, 'ts', 'The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005), and the final confrontation between the wizards Harry Potter and Lord Voldemort, as well as revealing the previously concealed back story of several main characters. The title of the book refers to three mythical objects featured in the story, collectively known as the \"Deathly Hallows\".', 'homepage/b5.jpg'),
(6, 'The Theory of EveryThing', 600, 'ts', 'The Theory of Everything[1][2] is a 2014 British biographical romantic drama film[5] directed by James Marsh,[2] and adapted by Anthony McCarten from the memoir Travelling to Infinity: My Life with Stephen by Jane Hawking, which deals with her relationship with her ex-husband, theoretical physicist Stephen Hawking, his diagnosis of amyotrophic lateral sclerosis', 'homepage/b6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `Email` varchar(50) NOT NULL,
  `ProductID` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`Email`, `ProductID`, `Quantity`) VALUES
('nachiket944@gmail.com', 2, 1),
('nachiket944@gmail.com', 102, 1),
('nachiket944@gmail.com', 402, 2),
('nachiket944@gmail.com', 2, 1),
('nachiket944@gmail.com', 3, 1),
('rahul72p.rp@gmail.com', 103, 4),
('rahul72p.rp@gmail.com', 402, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `email`, `address`, `zipcode`, `country`, `contactno`) VALUES
('Rahul Patel', '93231235112', 'rahul72p.rp@gmail.com', 'Viile parle', '57', 'uk'),
('Rahul Patel', 'sfdsgsg', 'rahul123@gmail.com', 'aff', 'sgsg', 'uae'),
('Rahul Patel', 'sfdsgsg', 'rahul123@gmail.com', 'aff', 'sgsg', 'uae');

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `SessionID` varchar(50) NOT NULL,
  `ProductID` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Firstname`, `Lastname`, `Email`, `Password`) VALUES
('Harshal', 'Shah', 'Harshal.shah1999@gmail.com', 'h123s'),
('Nachiket', 'Bhuta', 'nachiket944@gmail.com', 'n123b'),
('Rahul', 'Patel', 'rahul72p.rp@gmail.com', 'r123p'),
('Deepanshu', 'Shah', 'shahdeepanshu90@gmail.com', 'd123s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
