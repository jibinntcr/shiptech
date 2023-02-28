-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shiptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcements` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `dlt_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcements`, `link`, `status`, `dlt_status`) VALUES
(9, '   Announcement test', 'https://infinio.co.in/', 1, 0),
(13, 'Announcement2', 'https://infinio.co.in/', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `mainCaption` text DEFAULT NULL,
  `subCaption` text DEFAULT NULL,
  `image` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `dltSts` tinyint(1) DEFAULT NULL,
  `topcaption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `mainCaption`, `subCaption`, `image`, `status`, `dltSts`, `topcaption`) VALUES
(1, 'Banner 1 Main Caption', 'Banner 1 Sub Caption ', 'carousel-1.jpg', 1, NULL, 'Banner 1 Top caption'),
(2, 'Banner 2 Main Caption  ', 'Banner 2 Sub Caption', 'carousel-1.jpg', 1, NULL, 'Banner 2 Top Caption ');

-- --------------------------------------------------------

--
-- Table structure for table `completedresearchscholar`
--

CREATE TABLE `completedresearchscholar` (
  `id` int(15) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completedresearchscholar`
--

INSERT INTO `completedresearchscholar` (`id`, `reg`, `name`, `guide`, `title`, `year`, `status`) VALUES
(1, ' 2022', 'name', 'guide', 'title', '2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(35) NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `eventStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `name`, `year`, `image`, `link`, `status`, `eventStatus`) VALUES
(3, 'ICA DCA', '2022', 'thumb-ica.jpg', 'https://icadcacusat.in/', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL,
  `specialization` varchar(250) DEFAULT NULL,
  `seat` varchar(250) NOT NULL,
  `eligibility` varchar(6000) NOT NULL,
  `sllabus` varchar(250) NOT NULL,
  `sllabusLink` varchar(250) NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `syllabus2` varchar(250) DEFAULT NULL,
  `syllabus3` varchar(250) DEFAULT NULL,
  `syllabus4` varchar(250) DEFAULT NULL,
  `syllabus5` varchar(250) DEFAULT NULL,
  `syllabus6` varchar(250) DEFAULT NULL,
  `syllabus7` varchar(250) DEFAULT NULL,
  `syllabus8` varchar(250) DEFAULT NULL,
  `syllabus9` varchar(250) DEFAULT NULL,
  `syllabus10` varchar(250) DEFAULT NULL,
  `syllabus11` varchar(250) DEFAULT NULL,
  `syllabus12` varchar(250) DEFAULT NULL,
  `syllabus13` varchar(250) DEFAULT NULL,
  `syllabus14` varchar(250) DEFAULT NULL,
  `syllabus15` varchar(250) DEFAULT NULL,
  `link2` varchar(250) DEFAULT NULL,
  `link3` varchar(250) DEFAULT NULL,
  `link4` varchar(250) DEFAULT NULL,
  `link5` varchar(250) DEFAULT NULL,
  `link6` varchar(250) DEFAULT NULL,
  `link7` varchar(250) DEFAULT NULL,
  `link8` varchar(250) DEFAULT NULL,
  `link9` varchar(250) DEFAULT NULL,
  `link10` varchar(250) DEFAULT NULL,
  `link11` varchar(250) DEFAULT NULL,
  `link12` varchar(250) DEFAULT NULL,
  `link13` varchar(250) DEFAULT NULL,
  `link14` varchar(250) DEFAULT NULL,
  `link15` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `specialization`, `seat`, `eligibility`, `sllabus`, `sllabusLink`, `thumb`, `image`, `syllabus2`, `syllabus3`, `syllabus4`, `syllabus5`, `syllabus6`, `syllabus7`, `syllabus8`, `syllabus9`, `syllabus10`, `syllabus11`, `syllabus12`, `syllabus13`, `syllabus14`, `syllabus15`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`, `link13`, `link14`, `link15`, `status`) VALUES
(8, 'MCA', 'Master of Computer Applications', 'no seat', '<ul>\r\n	<li>Passed BCA/Bachelor degree in Computer Science Engineering or Equivalent degree</li>\r\n</ul>\r\n\r\n<p>OR</p>\r\n\r\n<ul>\r\n	<li>Passed BSc/BCom/BA with Mathematics at 10+2 level or at graduate level (with additional bridge course as per the norms o</li>\r\n</ul>\r\n', '2014 Admission Syllabus', 'https://dca.cusat.ac.in/assets/syllabus/MCA2014Syllabus.pdf', 'course-3.jpg', 'phd-image.jpg', '2015 Admission Syllabus', '2016 Admission Syllabus', '2019 Admission Syllabus', '2020 Admission Syllabus', '2022 Admission Syllabus', '', '', '', '', '', '', '', '', '', 'https://dca.cusat.ac.in/assets/syllabus/MCA2015Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2016Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2019Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2020Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2022Syllabus.pdf', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dcaoth`
--

CREATE TABLE `dcaoth` (
  `id` int(35) NOT NULL,
  `AuthKey` mediumtext NOT NULL,
  `any` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dcaoth`
--

INSERT INTO `dcaoth` (`id`, `AuthKey`, `any`) VALUES
(1, '<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">\r\n    <div class=\"container py-5\">\r\n        <div class=\"row g-5\">\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <!-- <img src=\"img/logo.png\" width=\"250\" class=\"\">\r\n                </br>\r\n                </br> -->\r\n\r\n                <!-- <h4 class=\"text-white mb-3\">Quick Link</h4> -->\r\n                <h5 class=\"text-white mb-3\">Quick Links</h5>\r\n                <a class=\"btn btn-link\" href=\"https://www.cusat.ac.in/\" target=\"_blank\">CUSAT Website</a>\r\n                <a class=\"btn btn-link\" href=\"https://admissions.cusat.ac.in/\" target=\"_blank\">Admissions</a>\r\n                <!-- <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>\r\n                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>\r\n                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a> -->\r\n            </div>\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <h5 class=\"text-white mb-3\">Address</h5>\r\n                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>Department of Computer Applications</br>\r\n                    Cochin University of Science and Technology, Cochin-682022</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>0484 - 2577602</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>0484 - 2576253</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-fax me-3\"></i>0484-2577602</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>dcahod@cusat.ac.in</p>\r\n                <!-- <div class=\"d-flex pt-2\">\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>\r\n                </div> -->\r\n            </div>\r\n            <div class=\"col-lg-6 col-md-4\">\r\n                <!-- <h4 class=\"text-white mb-3\">Gallery</h4> -->\r\n                <div class=\"row pt-2\">\r\n                    <iframe class=\"row\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.645178526911!2d76.32375311476514!3d10.04610989281956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c30d4ca4cff%3A0x6af14597a4b11a2a!2sDepartment%20of%20Computer%20Applications!5e0!3m2!1sen!2sin!4v1651077849312!5m2!1sen!2sin\" frameborder=\"0\" style=\"min-height: 300px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <!-- <h4 class=\"text-white mb-3\">Newsletter</h4>\r\n                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p> -->\r\n                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">\r\n                    <!-- <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\"> -->\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"copyright\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">\r\n                    &copy; <a class=\"border-bottom\" href=\"https://dca.cusat.ac.in/\">DCA CUSAT</a>, All Right Reserved.\r\n\r\n                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you\'d like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->\r\n                    <!--                   Designed By <a class=\"border-bottom\" href=\"https://infinio.co.in/#Home\">infinio.co.in</a><br><br> -->\r\n\r\n                </div>\r\n                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">Designed by\r\n                    &copy; <a class=\"border-bottom\" href=\"https://infiniio.co.in/\">INFINIO TECHNOLOGIES</a>\r\n                </div>\r\n                <!-- <div class=\"col-md-6 text-center text-md-end\">\r\n                    <div class=\"footer-menu\">\r\n                        <a href=\"\">Home</a>\r\n                        <a href=\"\">Cookies</a>\r\n                        <a href=\"\">Help</a>\r\n                        <a href=\"\">FQAs</a>\r\n                    </div>\r\n                </div> -->\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!-- <div class=\"container-fluid bg-dark text-light footer mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">\r\n    <div class=\"container py-2\">\r\n        <div class=\"row g-5\">\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <div class=\"d-flex pt-2\">\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.facebook.com/DCACochinUniversity\"><i class=\"fab fa-facebook-f\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.youtube.com/channel/UCS25dOwkInTys91KSKmdfjw\"><i class=\"fab fa-youtube\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.linkedin.com/in/dcacusat/\"><i class=\"fab fa-linkedin-in\"></i></a>\r\n                </div>\r\n            </div>\r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"copyright\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-7 text-center text-md-start mb-3 mb-md-0 text-md-end\">\r\n                &copy; DCA CUSAT . All Right Reserved | Design By <a class=\"border-bottom\" href=\"https://infinio.co.in/\">Infinio</a>\r\n\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div> -->', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `date`, `createdtime`, `content`, `status`) VALUES
(1, 'first event1 Top tech news: ChatGPT Writes a “Scary Email” to a Ghosted Client and Saves Rs 90 Lakh Payment! “G20 Summit Members Could Consider an Entire Ban on Crypto” – RBI Governor', 'about.jpg', '2023-01-31 18:30:00', '2023-02-28 06:03:56', '<p>Although ChatGPT is a heated topic online, the CEO of a design agency swears by it. The chatbot assisted Greg Isenberg, CEO of Late Checkout, in recovering Rs 90,68,187 lakh ($109,500) from a client who abandoned them without paying. Greg shared this on Twitter. Isenberg described a multi-billion-dollar client who ghosted the company because it consistently &ldquo;underpromised and over-delivered&rdquo; on its designs. Isenberg claimed that the incident was ruining the morale of his team. He considered utilizing ChatGPT to create a &ldquo;little more of a terrifying email to capture attention&rdquo; rather than taking the legal route.&rdquo; Isenberg provided context information in the prompt and instructed ChatGPT to act as though its role is to collect customer payments for the finance department. Should I forward this thread to the client who ghosted me? I never told him that I sent the collecting email using ChatGPT. I believe that would be hilarious for him.&rdquo; Isenberg concluded the thread with a post.Although ChatGPT is a heated topic online, the CEO of a design agency swears by it. The chatbot assisted Greg Isenberg, CEO of Late Checkout, in recovering Rs 90,68,187 lakh ($109,500) from a client who abandoned them without paying. Greg shared this on Twitter. Isenberg described a multi-billion-dollar client who ghosted the company because it consistently &ldquo;underpromised and over-delivered&rdquo; on its designs. Isenberg claimed that the incident was ruining the morale of his team. He considered utilizing ChatGPT to create a &ldquo;little more of a terrifying email to capture attention&rdquo; rather than taking the legal route.&rdquo; Isenberg provided context information in the prompt and instructed ChatGPT to act as though its role is to collect customer payments for the finance department. Should I forward this thread to the client who ghosted me? I never told him that I sent the collecting email using ChatGPT. I believe that would be hilarious for him.&rdquo; Isenberg concluded the thread with a post.</p>\r\n', 1),
(2, 'second event', 'feature.jpg', '2023-02-22 18:30:00', '2023-02-28 06:05:04', '<p>second conten</p>\r\n', 1),
(3, 'third one', 'feature.jpg', '2022-12-06 18:30:00', '2023-02-28 07:02:27', '<p>test event on december&nbsp;</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `iqacLink` varchar(250) NOT NULL,
  `about` mediumtext NOT NULL,
  `interest1` varchar(250) NOT NULL,
  `interest2` varchar(25) DEFAULT NULL,
  `interest3` varchar(25) DEFAULT NULL,
  `interest4` varchar(25) DEFAULT NULL,
  `interest5` varchar(25) DEFAULT NULL,
  `interest6` varchar(25) DEFAULT NULL,
  `interest7` varchar(25) DEFAULT NULL,
  `interest8` varchar(25) DEFAULT NULL,
  `interest9` varchar(25) DEFAULT NULL,
  `interest10` varchar(25) DEFAULT NULL,
  `education1` mediumtext DEFAULT NULL,
  `edDescription1` mediumtext DEFAULT NULL,
  `education2` mediumtext DEFAULT NULL,
  `edDescription2` mediumtext DEFAULT NULL,
  `education3` mediumtext DEFAULT NULL,
  `edDescription3` mediumtext DEFAULT NULL,
  `education4` mediumtext DEFAULT NULL,
  `edDescription4` mediumtext DEFAULT NULL,
  `education5` mediumtext DEFAULT NULL,
  `edDescription5` mediumtext DEFAULT NULL,
  `education6` mediumtext DEFAULT NULL,
  `edDescription6` mediumtext DEFAULT NULL,
  `experience1` mediumtext DEFAULT NULL,
  `experience2` mediumtext DEFAULT NULL,
  `experience3` mediumtext DEFAULT NULL,
  `experience4` mediumtext DEFAULT NULL,
  `experience5` mediumtext DEFAULT NULL,
  `experience6` mediumtext DEFAULT NULL,
  `experience7` mediumtext DEFAULT NULL,
  `experience8` mediumtext DEFAULT NULL,
  `experience9` mediumtext DEFAULT NULL,
  `experience10` mediumtext DEFAULT NULL,
  `expDescription1` mediumtext DEFAULT NULL,
  `expDescription2` mediumtext DEFAULT NULL,
  `expDescription3` mediumtext DEFAULT NULL,
  `expDescription4` mediumtext DEFAULT NULL,
  `expDescription5` mediumtext DEFAULT NULL,
  `expDescription6` mediumtext DEFAULT NULL,
  `expDescription7` mediumtext DEFAULT NULL,
  `expDescription8` mediumtext DEFAULT NULL,
  `expDescription9` mediumtext DEFAULT NULL,
  `expDescription10` mediumtext DEFAULT NULL,
  `publications` mediumtext DEFAULT NULL,
  `foundedProjects` varchar(250) DEFAULT NULL,
  `otherInfo` mediumtext DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role1` mediumtext DEFAULT NULL,
  `role2` mediumtext DEFAULT NULL,
  `role3` mediumtext DEFAULT NULL,
  `role4` mediumtext DEFAULT NULL,
  `role5` mediumtext DEFAULT NULL,
  `role6` mediumtext DEFAULT NULL,
  `role7` mediumtext DEFAULT NULL,
  `role8` mediumtext DEFAULT NULL,
  `role9` mediumtext DEFAULT NULL,
  `role10` mediumtext DEFAULT NULL,
  `project1` mediumtext DEFAULT NULL,
  `project2` mediumtext DEFAULT NULL,
  `project3` mediumtext DEFAULT NULL,
  `project4` mediumtext DEFAULT NULL,
  `project5` mediumtext DEFAULT NULL,
  `project6` mediumtext DEFAULT NULL,
  `project7` mediumtext DEFAULT NULL,
  `project8` mediumtext DEFAULT NULL,
  `project9` mediumtext DEFAULT NULL,
  `project10` mediumtext DEFAULT NULL,
  `agency1` mediumtext DEFAULT NULL,
  `agency2` mediumtext DEFAULT NULL,
  `agency3` mediumtext DEFAULT NULL,
  `agency4` mediumtext DEFAULT NULL,
  `agency5` mediumtext DEFAULT NULL,
  `agency6` mediumtext DEFAULT NULL,
  `agency7` mediumtext DEFAULT NULL,
  `agency8` mediumtext DEFAULT NULL,
  `agency9` mediumtext DEFAULT NULL,
  `agency10` mediumtext DEFAULT NULL,
  `thumbname` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `email`, `address`, `iqacLink`, `about`, `interest1`, `interest2`, `interest3`, `interest4`, `interest5`, `interest6`, `interest7`, `interest8`, `interest9`, `interest10`, `education1`, `edDescription1`, `education2`, `edDescription2`, `education3`, `edDescription3`, `education4`, `edDescription4`, `education5`, `edDescription5`, `education6`, `edDescription6`, `experience1`, `experience2`, `experience3`, `experience4`, `experience5`, `experience6`, `experience7`, `experience8`, `experience9`, `experience10`, `expDescription1`, `expDescription2`, `expDescription3`, `expDescription4`, `expDescription5`, `expDescription6`, `expDescription7`, `expDescription8`, `expDescription9`, `expDescription10`, `publications`, `foundedProjects`, `otherInfo`, `image`, `status`, `role1`, `role2`, `role3`, `role4`, `role5`, `role6`, `role7`, `role8`, `role9`, `role10`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `project7`, `project8`, `project9`, `project10`, `agency1`, `agency2`, `agency3`, `agency4`, `agency5`, `agency6`, `agency7`, `agency8`, `agency9`, `agency10`, `thumbname`) VALUES
(3, 'Jerry Sabu', 'designation', 'jerryaksa97@gmail.com', 'address', 'https://iqac.cusat.ac.in/Web/profile_view/184/Dr.M.V.JUDY', 'about', ' Data Mining ', 'Computational Biology', 'Big Data', 'Evolutionary Computing', 'Affective Computing', '', '', '', '', '', 'Ph.D. (Computer Science)', '2009', 'M.Phil. (Computer Science)', '2005', 'Master of Computer Applications (MCA)', '2002', '', '', '', '', '', '', 'Professor', 'Associate Professor', 'Associate Professor and H', 'Assistant Professor-III', 'Lecturer', '', '', '', '', '', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala.\r\nDecember 2019 - Till Date', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala.\r\nDecember 2016 - November 2019', 'Department of CS and IT AMRITA University (Kochi Campus)\r\nJune 2010 - December 2016', 'SASTRA University, Thanjavur.\r\nAugust 2003 - November 2009', 'Bishop Heber College, Trichy.\r\nAugust 2002 - August 2003', '', '', '', '', '', '<ul>\r\n	<li>nil</li>\r\n</ul>\r\n', NULL, '', 'faculty-judy (1).jpg', 1, 'Co-PI', 'Principal Investigator', 'Supervisor ', 'Principal Investigator', 'Principal Investigator', 'Mentor', 'Co-PI', '', '', '', 'Establishment of Bioinformatics Centre, CUSAT', 'Visual Enhancement of Underwater Optical Images and, Accuracy Improvement of Target', 'Big data analytics research Facility', 'Development of a computational tool, algorithms for Gene finding, mapping of genotype – phenotype based on classification of clinical data for Autism spectrum disorder.', 'Implementation of enhanced Deep learning algorithms for Big data analytics in computational epidemiology', 'Automated real time traffic control system', 'Securing Clinical Information in Medical Images', '', '', '', 'Department of Biotechnology, Govt of India', 'Department of Science and Technology Frontiers And Futuristic Technologies', 'CUSAT – State Plan Grants 2016-2017', 'Department of Science and Technology Cognitive Science Division', 'CUSAT – State Plan Grants 2016-2017', 'IEDC - CUSAT7', 'Rajagiri Hospital/Rajagiri School of Social Sciences', '', '', '', 'first page qualification');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` date NOT NULL,
  `image` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `year`, `image`, `status`) VALUES
(1, 'Test Form', '2023-02-20', 'INCOME.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallerimages`
--

CREATE TABLE `gallerimages` (
  `id` int(35) NOT NULL,
  `image` varchar(250) NOT NULL,
  `galleryID` int(35) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerimages`
--

INSERT INTO `gallerimages` (`id`, `image`, `galleryID`, `name`) VALUES
(7, 'galleryImages/faculty-vinod (1).jpg', 22, 'test gallery'),
(47, 'galleryImages/team-1.jpg', 26, 'test Gallery '),
(48, 'galleryImages/team-2.jpg', 26, 'test Gallery '),
(49, 'galleryImages/team-3.jpg', 26, 'test Gallery '),
(50, 'galleryImages/team-4.jpg', 26, 'test Gallery '),
(51, 'galleryImages/testimonial-1.jpg', 26, 'test Gallery '),
(52, 'galleryImages/testimonial-2.jpg', 26, 'test Gallery '),
(53, 'galleryImages/testimonial-3.jpg', 26, 'test Gallery '),
(54, 'galleryImages/testimonial-4.jpg', 26, 'test Gallery ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `thumbnail`, `status`) VALUES
(22, 'test gallery', 'innpasco2017.jpg', 0),
(26, 'test Gallery ', 'about.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `message` varchar(6000) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltSts` tinyint(1) DEFAULT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `name`, `message`, `photo`, `status`, `dltSts`, `designation`) VALUES
(7, 'Dr. M. V. JUDY', '<p>Welcome to the Department of Computer Applications!!!<br />\r\nAs the Department of Computer Applications, we are committed to providing education, research, and innovation that will impact our world for the better, and we strive to develop global leaders and socially responsible professionals. We seek to provide our students with a balance of both intellectual and practical experiences to enable them to serve the needs of society.<br />\r\n<strong>&ldquo;Let us aspire to greatness by immersing ourselves in knowledge &ldquo;</strong></p>\r\n', 'HODs desk.jpg', 0, NULL, 'Professor and Head of the Department.'),
(8, 'Hod Name ', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis numquam atque, sit voluptatum labore dolor, qui voluptatem debitis maxime praesentium officiis totam maiores sunt ea quidem facilis officia, a vel. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, perspiciatis. Repellat iste nam quos ab illum adipisci cumque. Quo dolorum quod odit qui quos non quasi nisi consectetur consequatur beatae dolores atque rerum incidunt commodi, maxime iusto optio mollitia. Quisquam magnam, a, vitae rem inventore similique molestias repellat cumque quasi libero saepe enim non repellendus impedit labore nostrum, aperiam quibusdam dolorum. Rerum suscipit culpa nam sint beatae deserunt cum maiores architecto nulla similique modi necessitatibus a fugiat sequi vel unde delectus, quasi tempore amet ullam labore eveniet! Natus exercitationem suscipit eligendi qui quod itaque quam assumenda et esse. Libero, ad?</p>\r\n', 'SOP_Mammootty2016.jpg', 1, NULL, 'HOD, Department of Ship Technology');

-- --------------------------------------------------------

--
-- Table structure for table `mous`
--

CREATE TABLE `mous` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mous`
--

INSERT INTO `mous` (`id`, `name`, `image`, `year`, `description`, `status`, `dltStatus`) VALUES
(2, '  Kerala Police Academy', 'kp.jpg', '2019', 'Cochin University of Science and Technology signed an MoU with Kerala Police Academy (KEPA) under the initiative of the Department of Computer Applications. The objective of the MoU is to promote scientific and cultural cooperation between Kerala Police Academy and Cochin University of Science and Technology. KEPA had identified the Department as their potential collaborator and under this collaboration, discussions were conducted, workshops were organized, students were given internships at KEPA, and seat reservation was done for KEPA people in the MSC Computer Science with specialization in Data Science program run by the Department.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `date`, `time`, `content`, `status`) VALUES
(1, 'new Date Changed Sunak and EU chief expected to agree new NI Brexit deal', 'about.jpg', '2023-02-25 18:30:00', '2023-02-27 10:59:32', '<p>Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.</p>\r\n', 1),
(2, 'Manish Sisodia News Live Updates: Court sends Delhi deputy CM to CBI remand till March 4 in excise policy case', 'about.jpg', '2023-03-09 18:30:00', '2023-02-27 12:01:30', '<p>Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.Xiaomi 13 series has made its global debut. The Xiaomi 13 and 13 Pro were originally launched in China in December 2022, and now the China-headquartered company is bringing the devices to global markets. In India, so far the company has launched the Xiaomi 13 Pro. Based on previous releases, Xiaomi 13 series will not launch in the US, but will be available in the UK, Europe and other parts of Asia. Xiaomi 13 Pro is the &#39;most-powerful&#39; Xiaomi phone to launch in India yet. The phone got listed on Amazon website recently and will go on sale next month.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `publicationDate` varchar(250) NOT NULL,
  `member1` varchar(250) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL,
  `member2` varchar(255) DEFAULT NULL,
  `member3` varchar(255) DEFAULT NULL,
  `member4` varchar(255) DEFAULT NULL,
  `member5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`id`, `name`, `projectname`, `publicationDate`, `member1`, `description`, `image`, `status`, `dltStatus`, `member2`, `member3`, `member4`, `member5`) VALUES
(2, 'Dr. Santosh Kumar M. B.', 'PORTABLE AGRICULTURE NETWORK SYSTEM', '24/05/2019', 'Dr. Santosh Kumar M. B.', 'Banana plant farmers are facing severe problems of uprooting and breakage of their fully grown plants due to climatic (wind or other) effects. They find it difficult to safeguard their plants from such natural forces owing to their ignorance as to how and where failure could get started. In order to predict failure pattern of banana plants through a Finite Element Analysis (FEA), the mechanical properties of the plants are essential. Isotropic behavior is assumed for the banana plants and the Young’s modulus of elasticity, Poisson’s ratio, compressive strength and flexural strength of the material of stems of banana plants were determined.', 'patent-santhosh-kumar.jpg', 1, 0, 'Kannan Balakrishnan', 'Sunilkumar Neelakantapillai', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recognition`
--

CREATE TABLE `recognition` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `recognition` varchar(6000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltSts` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recognition`
--

INSERT INTO `recognition` (`id`, `name`, `designation`, `recognition`, `status`, `dltSts`) VALUES
(2, '  Dr. Vinod P.', 'Professor', '<p><strong>MARIE SKLODOWSKA</strong></p>\r\n\r\n<p>Post Doctoral fellowship (Seal of Excellence) under Horizon Europe, for the implementation of this project, he is approved 1,88,590.08/- Euros from the host institution of research which is the University of Padua, Italy.</p>\r\n\r\n<p><br />\r\n<strong>IN 2021 HE WAS AWARDED THE SEAL OF EXCELLENCE FOR A MARIE SKŁODOWSKA</strong></p>\r\n\r\n<p>Curie Individual Fellowship project proposal (Project Title OPTIMA: Organization Specific Threat Intelligence Mining and Sharing ) by the European Commission, approved 100,000 Euros from the host institution of research which is the University of Padua, Italy.</p>\r\n\r\n<p><br />\r\n<strong>SPADE</strong></p>\r\n\r\n<p>Signature-based Packer Detection, In Symposium on Information Security (SIS 2013), BITS Pilani, Hyderabad campus, November 15-16, 2013</p>\r\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regulations`
--

CREATE TABLE `regulations` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regulations`
--

INSERT INTO `regulations` (`id`, `name`, `file`, `status`, `year`) VALUES
(4, 'Ph.D Regulations', 'PhDregulations_2018.pdf', 1, '2018');

-- --------------------------------------------------------

--
-- Table structure for table `researchguide`
--

CREATE TABLE `researchguide` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `area` varchar(6000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchguide`
--

INSERT INTO `researchguide` (`id`, `name`, `designation`, `area`, `image`, `status`) VALUES
(3, 'Dr. A. Sreekumar', 'Professor', '<ul>\r\n	<li>Algorithms</li>\r\n	<li>Graph Theory</li>\r\n	<li>Image Processing</li>\r\n	<li>Machine Intelligence</li>\r\n</ul>\r\n', 'faculty-sreekumar.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `researchlab`
--

CREATE TABLE `researchlab` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `facility2` varchar(250) DEFAULT NULL,
  `facility3` varchar(250) DEFAULT NULL,
  `facility4` varchar(250) DEFAULT NULL,
  `facility5` varchar(250) DEFAULT NULL,
  `facility6` varchar(250) DEFAULT NULL,
  `facility7` varchar(250) DEFAULT NULL,
  `facility8` varchar(250) DEFAULT NULL,
  `facility9` varchar(250) DEFAULT NULL,
  `facility10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchlab`
--

INSERT INTO `researchlab` (`id`, `name`, `image`, `content`, `status`, `facility2`, `facility3`, `facility4`, `facility5`, `facility6`, `facility7`, `facility8`, `facility9`, `facility10`) VALUES
(5, 'A I Research', 'lab-ai.jpg', 'Lenovo Thinksystem SR670 GPU server with Intel Xeon Gold 6226R processor', 1, 'GPUs - 2XTesla A100 with 40 GB memory each', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `researchscholar`
--

CREATE TABLE `researchscholar` (
  `id` int(255) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `scholarstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchscholar`
--

INSERT INTO `researchscholar` (`id`, `reg`, `name`, `guide`, `title`, `year`, `status`, `scholarstatus`) VALUES
(3, '      2528', 'James K.N', 'Dr. Babu Sundar S', 'Real Time Raga Detection and Analysis Using Computer', '2009', 1, 'Completed'),
(6, '10070', 'Jerry Sabu', 'NIl', 'Nil', '2023', 1, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `studentslab`
--

CREATE TABLE `studentslab` (
  `id` int(15) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `facility2` varchar(250) DEFAULT NULL,
  `facility3` varchar(250) DEFAULT NULL,
  `facility4` varchar(250) DEFAULT NULL,
  `facility5` varchar(250) DEFAULT NULL,
  `facility6` varchar(250) DEFAULT NULL,
  `facility7` varchar(250) DEFAULT NULL,
  `facility8` varchar(250) DEFAULT NULL,
  `facility9` varchar(250) DEFAULT NULL,
  `facility10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentslab`
--

INSERT INTO `studentslab` (`id`, `name`, `image`, `content`, `status`, `facility2`, `facility3`, `facility4`, `facility5`, `facility6`, `facility7`, `facility8`, `facility9`, `facility10`) VALUES
(2, 'MCA Computer', 'lab-mca.jpg', '90 PCs', 1, 'Windows 8/10', 'Ubuntu 16.04/18.04', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `techfest`
--

CREATE TABLE `techfest` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(35) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techfest`
--

INSERT INTO `techfest` (`id`, `name`, `year`, `image`, `link`, `status`) VALUES
(2, 'Innpasco 4.0', '2019', 'innpasco4_0.jpg', 'https://dca.cusat.ac.in/assets/pdf/INNPASCO%204.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technicalstaff`
--

CREATE TABLE `technicalstaff` (
  `id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicalstaff`
--

INSERT INTO `technicalstaff` (`id`, `name`, `designation`, `image`, `status`) VALUES
(3, 'Padmakumary A. P.', 'Technical Officer Grade I', 'faculty-padmakumary.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `message` varchar(6000) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `batch` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL,
  `course` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `message`, `designation`, `batch`, `status`, `dltStatus`, `course`) VALUES
(3, '  Navami S. Binu', 'SOP_Mammootty2016.jpg', 'I feel very proud and blessed to be a part of the DCA family. I have received such wonderful teachers who guided me throughout the course. The faculties have very good subject knowledge. The non-teaching staff are really supportive and friendly towards each student. Everyone experiences a new life with new environment and learns life skills that go beyond education. Thank you, DCA for every life lessons', 'Systems Engineer , TCS Digital', '2019-2022', 1, 0, 'MCA '),
(14, 'Jerry Sabu', 'testimonial-3.jpg', 'You may need to provide additional documents depending on your circumstances. The Home Office will contact you if you need to provide more evidence.', 'Developer', '2018', 1, 0, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('jerrysabu', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `year`, `image`, `link`, `status`) VALUES
(2, '1', '2022', 'thumb-6.jpg', 'https://dca.cusat.ac.in/assets/pdf/Data%20Science%20Workshop-RGNIYD%20&%20CUSAT.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completedresearchscholar`
--
ALTER TABLE `completedresearchscholar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dcaoth`
--
ALTER TABLE `dcaoth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerimages`
--
ALTER TABLE `gallerimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleryID` (`galleryID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mous`
--
ALTER TABLE `mous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recognition`
--
ALTER TABLE `recognition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchguide`
--
ALTER TABLE `researchguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchlab`
--
ALTER TABLE `researchlab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchscholar`
--
ALTER TABLE `researchscholar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentslab`
--
ALTER TABLE `studentslab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techfest`
--
ALTER TABLE `techfest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalstaff`
--
ALTER TABLE `technicalstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `completedresearchscholar`
--
ALTER TABLE `completedresearchscholar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dcaoth`
--
ALTER TABLE `dcaoth`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallerimages`
--
ALTER TABLE `gallerimages`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mous`
--
ALTER TABLE `mous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recognition`
--
ALTER TABLE `recognition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `researchguide`
--
ALTER TABLE `researchguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `researchlab`
--
ALTER TABLE `researchlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `researchscholar`
--
ALTER TABLE `researchscholar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentslab`
--
ALTER TABLE `studentslab`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techfest`
--
ALTER TABLE `techfest`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technicalstaff`
--
ALTER TABLE `technicalstaff`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallerimages`
--
ALTER TABLE `gallerimages`
  ADD CONSTRAINT `gallerimages_ibfk_1` FOREIGN KEY (`galleryID`) REFERENCES `gallery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
