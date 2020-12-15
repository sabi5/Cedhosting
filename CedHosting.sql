-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2020 at 03:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CedHosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(44) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_date` datetime NOT NULL,
  `author_name` varchar(44) NOT NULL DEFAULT 'Anonymous',
  `caption_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_info`
--

CREATE TABLE `tbl_company_info` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(55) NOT NULL,
  `comp_logo` varchar(1000) NOT NULL,
  `comp_contact` varchar(33) NOT NULL,
  `comp_email` varchar(33) NOT NULL,
  `comp_address` varchar(88) NOT NULL,
  `comp_city` varchar(44) NOT NULL,
  `comp_state` int(11) NOT NULL,
  `comp_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_billing_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `promocode_applied_id` int(11) NOT NULL,
  `discount_amt` float NOT NULL,
  `total_amt_after_dis` float NOT NULL,
  `tax_amt` float NOT NULL,
  `final_invoice_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `prod_parent_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `html` longtext DEFAULT NULL,
  `prod_available` tinyint(1) NOT NULL,
  `prod_launch_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`) VALUES
(1, 0, 'Hosting', NULL, 1, '2020-12-09 14:34:49'),
(23, 1, 'linux', '<ul> 									<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li> 									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li> 									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li> 									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li> 									<li><span>30 day </span> Money Back Guarantee</li> 								</ul', 1, '2020-12-15 09:31:11'),
(24, 1, 'windows', '<ul>\r\n									<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>\r\n									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>\r\n									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>\r\n									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>\r\n									<li><span>30 day </span> Money Back Guarantee</li>\r\n								</ul>', 1, '2020-12-15 09:31:31'),
(25, 1, 'wordpress', '<ul>\r\n									<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>\r\n									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>\r\n									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>\r\n									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>\r\n									<li><span>30 day </span> Money Back Guarantee</li>\r\n								</ul>', 1, '2020-12-15 09:32:22'),
(28, 1, 'cms', '<ul>\r\n									<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>\r\n									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>\r\n									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>\r\n									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>\r\n									<li><span>30 day </span> Money Back Guarantee</li>\r\n								</ul>', 1, '2020-12-15 09:43:19'),
(29, 25, 'Pro', 'Null', 1, '2020-12-15 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_description`
--

CREATE TABLE `tbl_product_description` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `mon_price` float NOT NULL,
  `annual_price` float NOT NULL,
  `sku` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_description`
--

INSERT INTO `tbl_product_description` (`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES
(22, 9, '{\"webspace\":\"1000\",\"bandwidth\":\"455\",\"freedomain\":\"1\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 23, 566, '1234'),
(24, 17, '{\"webspace\":\"1000\",\"bandwidth\":\"76\",\"freedomain\":\"12\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 12, 14, '1235'),
(25, 18, '{\"webspace\":\"1000\",\"bandwidth\":\"455\",\"freedomain\":\"12\",\"language\":\"PHP, Mysql\",\"mailbox\":\"0\"}', 12, 123, '1235'),
(27, 20, '{\"webspace\":\"1000\",\"bandwidth\":\"76\",\"freedomain\":\"1\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 23, 566, '123'),
(28, 21, '{\"webspace\":\"1000\",\"bandwidth\":\"76\",\"freedomain\":\"1\",\"language\":\"PHP, Mysql\",\"mailbox\":\"0\"}', 12, 566, '1235'),
(29, 22, '{\"webspace\":\"100\",\"bandwidth\":\"455\",\"freedomain\":\"12\",\"language\":\"PHP, Mysql\",\"mailbox\":\"0\"}', 12, 566, '1234'),
(30, 26, '{\"webspace\":\"1000\",\"bandwidth\":\"76\",\"freedomain\":\"12\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 23, 566, '1234'),
(31, 27, '{\"webspace\":\"1000\",\"bandwidth\":\"76\",\"freedomain\":\"1\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 12, 14, '1234'),
(32, 29, '{\"webspace\":\"657\",\"bandwidth\":\"567\",\"freedomain\":\"0\",\"language\":\"php\",\"mailbox\":\"0\"}', 56, 56, 't6'),
(33, 30, '{\"webspace\":\"100\",\"bandwidth\":\"76\",\"freedomain\":\"0\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 33, 123, 'r5'),
(34, 31, '{\"webspace\":\"100\",\"bandwidth\":\"761\",\"freedomain\":\"12\",\"language\":\"PHP\",\"mailbox\":\"0\"}', 33, 14, '1235');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode`
--

CREATE TABLE `tbl_promocode` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` varchar(22) NOT NULL,
  `max_discount` int(11) NOT NULL,
  `code` varchar(55) NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `activation_time` datetime NOT NULL,
  `tenure` char(1) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email_approved` tinyint(1) NOT NULL,
  `phone_approved` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `sign_up_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `password` varchar(100) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES
(1, 'smith@gmail.com', 'smith', '1234567876', 1, 1, 1, 1, '2020-12-09 10:42:39.000000', 'smith', 'what is your hobby?', 'singing'),
(2, 'john@gmail.com', 'john', '1234567898', 0, 0, 0, 0, '2020-12-09 10:47:09.000000', 'john', 'what is your nick name?', 'jon'),
(3, 'raj@gmail.com', 'hotemarketing8', '1234567898', 0, 0, 0, 0, '2020-12-09 11:01:21.000000', 'raj', 'what was your childhood nickname?', 'rajiv'),
(7, 'xyz@gmail.com', 'xyz', '1234567654', 0, 0, 0, 0, '2020-12-09 11:47:22.000000', 'xyz', 'what was your childhood nickname?', 'xyz'),
(8, 'jan@gmail.com', 'jan', '1234567876', 0, 0, 0, 0, '2020-12-09 11:50:04.000000', 'jan', 'jan', 'jan'),
(11, 'mno@gmail.com', 'mno', '1231231231', 1, 1, 1, 0, '2020-12-09 12:48:05.000000', 'mno', 'what is your nick name?', 'mno'),
(13, 'myth@gmail.com', 'myth', '1231231231', 1, 1, 1, 0, '2020-12-09 13:03:15.000000', 'myth', 'what was your childhood nickname?', 'myth'),
(14, '        jack@gmail.com', 'jack', '1231231231', 1, 1, 1, 0, '2020-12-09 13:05:14.000000', 'jack', 'what is your nick name?', 'jack'),
(19, 'hina@gmail.com', 'hina', '1231231231', 1, 1, 1, 0, '2020-12-09 14:41:36.000000', 'HINA123@', 'what is your nick name?', 'mno'),
(21, 'pathak.rk98@gmail.com', 'Akanksha', '7318334260', 0, 0, 0, 0, '2020-12-10 18:10:02.000000', 'Arjun@1023', '1', 'raksha'),
(23, 'arjunkumar15399@gmail.com', 'Arjun', '7318334260', 0, 0, 0, 0, '2020-12-10 18:16:46.000000', 'Arjun@1023', '1', 'arjun'),
(24, 'sabr@gmail.com', 'sabreen', '1234567898', 0, 0, 0, 0, '2020-12-10 18:31:36.000000', 'sabreen123', '1', 'rajiv'),
(25, 'sabreen@gmail.com', 'sabreen shakeel', '1234567876', 0, 0, 0, 0, '2020-12-10 19:15:45.000000', 'sabreenshakeel', '1', 'rajiv'),
(26, 'riya@gmail.com', 'riya raj', '1234567898', 0, 0, 0, 0, '2020-12-10 19:23:53.000000', 'riya1234567876', '1', 'jon'),
(27, 'chirag26oct@gmail.com', 'chirag', '9058061029', 0, 0, 0, 0, '2020-12-12 12:47:28.000000', 'Chirag@123', '2', 'chirag'),
(28, 'simran@gmail.com', 'simran kaur', '9876543219', 0, 0, 0, 0, '2020-12-15 12:42:02.000000', 'Simran@123', '1', 'simran'),
(29, 'simran1@gmail.com', 'simran kaur', '9876543219', 0, 0, 0, 0, '2020-12-15 12:49:37.000000', 'Simran@123', '2', 'simran'),
(30, 'arjun@gmail.com', 'Arjun', '9876543210', 0, 0, 0, 0, '2020-12-15 12:52:28.000000', 'Arjun@123', '1', 'arjun'),
(31, 'sam@gmail.com', 'sam', '9876543219', 0, 0, 0, 0, '2020-12-15 13:37:40.000000', 'Sameer@123', '1', 'sam'),
(32, 'shakeelsabreen@gmail.com', 'sabreena', '7318334260', 0, 0, 0, 0, '2020-12-15 13:50:34.000000', 'Sabreen@123', '1', 'sabi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_billing_add`
--

CREATE TABLE `tbl_user_billing_add` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_name` varchar(55) NOT NULL,
  `house_no` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` int(11) NOT NULL,
  `country` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
