-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 04:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ludo_king_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acls`
--

CREATE TABLE `acls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `module_order` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acls`
--

INSERT INTO `acls` (`id`, `parent_id`, `title`, `path`, `icon`, `module_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 0, 'Dashboard', 'adminpnlx/dashboard', '<span class=\"svg-icon menu-icon\">\r\n                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg--><svg\r\n                        xmlns=\"http://www.w3.org/2000/svg\"\r\n                        xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"\r\n                        viewBox=\"0 0 24 24\" version=\"1.1\">\r\n                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n                            <polygon points=\"0 0 24 0 24 24 0 24\" />\r\n                            <path\r\n                            d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\"\r\n                            fill=\"#000000\" fill-rule=\"nonzero\" />\r\n                            <path\r\n                            d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\"\r\n                            fill=\"#000000\" opacity=\"0.3\" />\r\n                        </g>\r\n                    </svg>\r\n                    <!--end::Svg Icon-->\r\n                        </span>', 1, 1, '2023-04-24 07:06:49', '2023-04-24 23:29:11'),
(2, 0, 'Players', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\r\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n                                                <polygon points=\"0 0 24 0 24 24 0 24\" />\r\n                                                <path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />\r\n                                                <path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />\r\n                                            </g>\r\n                                        </svg>', 2, 1, '2023-04-24 07:10:21', '2023-04-24 05:54:53'),
(3, 4, 'Staff Management', 'adminpnlx/staff', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                                                <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />\n                                                <path d=\"M14.1124454,7.00625159 C14.0755336,7.00212117 14.0380145,7 14,7 L10,7 C9.96198549,7 9.92446641,7.00212117 9.88755465,7.00625159 L7.34761705,4.55799196 C6.95060373,4.17530866 6.9382927,3.54346816 7.32009765,3.14561006 L8.41948359,2 L15.5805164,2 L16.6799023,3.14561006 C17.0617073,3.54346816 17.0493963,4.17530866 16.6523829,4.55799196 L14.1124454,7.00625159 Z\" fill=\"#000000\" />\n                                                <path d=\"M13.7640285,9 L15.4853424,18.1494183 C15.5450675,18.4668794 15.4477627,18.7936387 15.2240963,19.0267093 L12.7215131,21.6345146 C12.7120098,21.6444174 12.7023037,21.6541236 12.6924008,21.6636269 C12.2939201,22.0460293 11.6608893,22.0329953 11.2784869,21.6345146 L8.77590372,19.0267093 C8.55223728,18.7936387 8.45493249,18.4668794 8.5146576,18.1494183 L10.2359715,9 L13.7640285,9 Z\" fill=\"#000000\" opacity=\"0.3\" />\n                                            </g>\n                                        </svg>', 3, 1, '2023-04-24 01:03:57', '2023-04-24 06:02:31'),
(4, 0, 'Staff', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                                                <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />\n                                                <path d=\"M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />\n                                            </g>\n                                        </svg>', 990, 1, '2023-04-24 01:11:35', '2023-04-24 06:02:01'),
(5, 4, 'Roles', 'adminpnlx/designations', NULL, 15, 1, '2023-04-24 01:12:45', '2023-04-24 06:49:15'),
(6, 0, 'System Management', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\r\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n                                                <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />\r\n                                                <path d=\"M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z\" fill=\"#000000\" opacity=\"0.3\" />\r\n                                                <path d=\"M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z\" fill=\"#000000\" />\r\n                                            </g>\r\n                                        </svg>', 999, 1, '2023-04-24 01:39:58', '2023-04-24 01:39:58'),
(7, 6, 'Cms Pages', 'adminpnlx/cms-manager', NULL, 17, 1, '2023-04-24 01:40:54', '2023-04-24 01:45:21'),
(9, 6, 'Email Templates', 'adminpnlx/email-templates', NULL, 19, 1, '2023-04-24 01:51:07', '2022-05-30 02:31:23'),
(10, 6, 'Email Logs', 'adminpnlx/email-logs', NULL, 20, 1, '2023-04-24 01:54:08', '2022-05-30 02:31:01'),
(11, 0, 'Settings', 'javascript::void()', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\r\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n                                                <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />\r\n                                                <path d=\"M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\" fill=\"#000000\" />\r\n                                            </g>\r\n                                        </svg>', 1000, 1, '2023-04-24 01:55:55', '2023-04-24 23:30:36'),
(14, 11, 'Reading Setting', 'adminpnlx/settings/prefix/Reading', NULL, 24, 1, '2023-04-24 23:31:32', '2023-04-24 07:41:18'),
(15, 11, 'Site Setting', 'adminpnlx/settings/prefix/Site', NULL, 23, 1, '2023-04-24 23:32:46', '2023-04-24 07:41:24'),
(40, 11, 'Contact Us', 'adminpnlx/settings/prefix/Contact', NULL, 25, 1, '2023-04-24 07:37:55', '2023-04-24 00:35:59'),
(44, 2, 'All Players', 'adminpnlx/players', NULL, 1, 1, '2023-04-24 00:07:57', '2022-12-04 23:23:11'),
(68, 0, 'Battle', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>\n        <path d=\"M7.34,19 L7.34,4.8 L12.68,4.8 C15,4.8 16.9,6.7 16.9,9.02 C16.9,10.02 16.52,10.84 15.9,11.46 C17.1,12.1 17.9,13.26 17.9,14.78 C17.9,17.12 16,19 13.6,19 L7.34,19 Z M10.54,16.06 L13.3,16.06 C14.16,16.06 14.78,15.44 14.78,14.66 C14.78,13.88 14.16,13.24 13.3,13.24 L10.54,13.24 L10.54,16.06 Z M10.54,10.54 L12.32,10.54 C13.18,10.54 13.8,9.92 13.8,9.14 C13.8,8.36 13.18,7.72 12.32,7.72 L10.54,7.72 L10.54,10.54 Z\" fill=\"#000000\"/>\n    </g>\n</svg>', 3, 1, '2023-08-20 22:40:27', '2023-08-20 22:40:27'),
(69, 68, 'New Battle', 'adminpnlx/new-battles', NULL, 1, 1, '2023-08-20 22:41:22', '2023-08-20 22:41:22'),
(70, 68, 'Running Battle', 'adminpnlx/running-battles', NULL, 2, 1, '2023-08-20 22:41:55', '2023-08-20 22:41:55'),
(71, 68, 'Battle Result', 'adminpnlx/battles-result', NULL, 3, 1, '2023-08-20 22:42:25', '2023-08-20 22:42:25'),
(72, 68, 'Battle Dispute', 'adminpnlx/battles-dispute', NULL, 4, 1, '2023-08-20 22:43:02', '2023-08-20 22:43:02'),
(73, 0, 'KYC', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>\n        <rect fill=\"#000000\" opacity=\"0.3\" x=\"2\" y=\"3\" width=\"20\" height=\"18\" rx=\"2\"></rect>\n        <path d=\"M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z\" fill=\"#000000\" fill-rule=\"nonzero\"></path>\n        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"19\" cy=\"6\" r=\"1\"></circle>\n    </g>\n</svg>', 4, 1, '2023-08-20 22:48:05', '2023-08-20 22:48:05'),
(74, 73, 'Pending KYC', 'adminpnlx/kyc-pending', NULL, 1, 1, '2023-08-20 22:48:53', '2023-08-20 22:48:53'),
(75, 73, 'Approved KYC', 'adminpnlx/kyc-approved', NULL, 1, 1, '2023-08-20 22:49:20', '2023-08-20 22:49:20'),
(76, 0, 'Payments', 'javascript::void();', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>\n        <path d=\"M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z\" fill=\"#000000\"/>\n        <path d=\"M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z\" fill=\"#000000\" opacity=\"0.3\"/>\n        <path d=\"M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) \"/>\n    </g>\n</svg>', 5, 1, '2023-08-20 22:50:03', '2023-08-20 22:50:03'),
(77, 76, 'Payment Received', 'adminpnlx/payments', NULL, 1, 1, '2023-08-20 22:50:52', '2023-08-20 22:50:52'),
(79, 76, 'Payment Settings', 'adminpnlx/payments-settings', NULL, 3, 1, '2023-08-20 22:51:40', '2023-08-20 22:51:40'),
(80, 0, 'Withdraw Request', 'adminpnlx/withdraw-request', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>\n        <path d=\"M18,16 L9,16 C8.44771525,16 8,15.5522847 8,15 C8,14.4477153 8.44771525,14 9,14 L17,14 C17.5522847,14 18,13.5522847 18,13 C18,12.4477153 17.5522847,12 17,12 L9,12 C7.34314575,12 6,13.3431458 6,15 C6,16.6568542 7.34314575,18 9,18 L19.5,18 C21,18 21,18.5 21,19 C21,19.5 21,20 19.5,20 L7,20 C4.790861,20 3,18.209139 3,16 L3,8 C3,5.790861 4.790861,4 7,4 L17,4 C19.209139,4 21,5.790861 21,8 L21,13.0000005 C21,14.6568542 19.6568542,16 18,16 Z\" fill=\"#000000\"/>\n    </g>\n</svg>', 6, 1, '2023-08-20 22:53:06', '2023-08-20 22:54:04'),
(81, 0, 'Admin Settings', 'adminpnlx/admin-settings', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\r\n                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n                                                <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />\r\n                                                <path d=\"M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\" fill=\"#000000\" />\r\n                                            </g>\r\n                                        </svg>', 7, 1, '2023-08-20 22:55:13', '2023-08-20 22:55:13'),
(82, 0, 'Games', 'adminpnlx/games', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>\n        <path d=\"M12.9486833,9.31622777 L11.0513167,8.68377223 C11.8160243,6.38964935 13.0426772,4.95855428 14.7574644,4.5298575 C15.650287,4.30665184 17,2.86951059 17,2 L19,2 C19,3.79715607 17.0163797,6.02668149 15.2425356,6.4701425 C14.2906561,6.70811238 13.517309,7.61035065 12.9486833,9.31622777 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>\n        <path d=\"M7.05661608,8.02781729 C7.20182559,8.00946022 7.34980802,8 7.5,8 L16.5,8 C16.650192,8 16.7981744,8.00946022 16.9433839,8.02781729 C17.1264244,8.00942131 17.312112,8 17.5,8 C20.5375661,8 23,10.4624339 23,13.5 C23,16.5375661 20.5375661,19 17.5,19 C15.7920631,19 14.2659538,18.2215033 13.2571621,17 L10.7428379,17 C9.73404624,18.2215033 8.20793694,19 6.5,19 C3.46243388,19 1,16.5375661 1,13.5 C1,10.4624339 3.46243388,8 6.5,8 C6.68788804,8 6.87357561,8.00942131 7.05661608,8.02781729 Z M5.5,10 C5.22385763,10 5,10.2238576 5,10.5 L5,11.5 C5,11.7761424 5.22385763,12 5.5,12 L6.5,12 C6.77614237,12 7,11.7761424 7,11.5 L7,10.5 C7,10.2238576 6.77614237,10 6.5,10 L5.5,10 Z M7.5,12 C7.22385763,12 7,12.2238576 7,12.5 L7,13.5 C7,13.7761424 7.22385763,14 7.5,14 L8.5,14 C8.77614237,14 9,13.7761424 9,13.5 L9,12.5 C9,12.2238576 8.77614237,12 8.5,12 L7.5,12 Z M19,12 C19.5522847,12 20,11.5522847 20,11 C20,10.4477153 19.5522847,10 19,10 C18.4477153,10 18,10.4477153 18,11 C18,11.5522847 18.4477153,12 19,12 Z M18,15 C18.5522847,15 19,14.5522847 19,14 C19,13.4477153 18.5522847,13 18,13 C17.4477153,13 17,13.4477153 17,14 C17,14.5522847 17.4477153,15 18,15 Z M5.5,14 C5.22385763,14 5,14.2238576 5,14.5 L5,15.5 C5,15.7761424 5.22385763,16 5.5,16 L6.5,16 C6.77614237,16 7,15.7761424 7,15.5 L7,14.5 C7,14.2238576 6.77614237,14 6.5,14 L5.5,14 Z M3.5,12 C3.22385763,12 3,12.2238576 3,12.5 L3,13.5 C3,13.7761424 3.22385763,14 3.5,14 L4.5,14 C4.77614237,14 5,13.7761424 5,13.5 L5,12.5 C5,12.2238576 4.77614237,12 4.5,12 L3.5,12 Z\" fill=\"#000000\"/>\n    </g>\n</svg>', 8, 1, '2023-08-20 22:55:46', '2023-08-20 22:55:46'),
(83, 0, 'Marquee Notification', 'adminpnlx/marquee-notification', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <path d=\"M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z\" fill=\"#000000\"/>\n        <rect fill=\"#000000\" opacity=\"0.3\" x=\"10\" y=\"16\" width=\"4\" height=\"4\" rx=\"2\"/>\n    </g>\n</svg>', 9, 1, '2023-08-20 22:56:15', '2023-08-20 22:56:15'),
(84, 0, 'Support', 'adminpnlx/support', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>\n        <path d=\"M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z\" fill=\"#000000\" fill-rule=\"nonzero\"></path>\n        <path d=\"M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z\" fill=\"#000000\" opacity=\"0.3\"></path>\n    </g>\n</svg>', 10, 1, '2023-08-20 22:56:35', '2023-08-20 22:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `acl_admin_actions`
--

CREATE TABLE `acl_admin_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_module_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `function_name` varchar(255) DEFAULT NULL,
  `is_show` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acl_admin_actions`
--

INSERT INTO `acl_admin_actions` (`id`, `admin_module_id`, `name`, `function_name`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 44, 'Changed Password', 'UsersController@changedPassword', 1, '2023-04-24 10:35:58', '2023-04-24 10:35:58'),
(2, 44, 'Index', 'UsersController@index', 1, '2023-04-24 10:40:12', '2023-04-24 10:40:12'),
(3, 44, 'Create New Record', 'UsersController@create', 1, '2023-04-24 10:40:12', '2023-04-24 10:40:12'),
(4, 44, 'Update Record', 'UsersController@update', 1, '2023-04-24 10:40:12', '2023-04-24 10:40:12'),
(5, 44, 'Delete Record', 'UsersController@destroy', 1, '2023-04-24 10:41:07', '2023-04-24 10:41:07'),
(6, 44, 'Update Status', 'UsersController@changeStatus', 1, '2023-04-24 10:41:07', '2023-04-24 10:41:07'),
(8, 7, 'Listing', 'CmspagesController@index', 1, '2023-04-24 10:51:43', '2023-04-24 10:51:43'),
(19, 9, 'Update Record', 'EmailtemplateController@edit', 1, '2023-04-24 10:59:51', '2023-04-24 10:59:51'),
(20, 9, 'Listing', 'EmailtemplateController@index', 1, '2023-04-24 11:00:10', '2023-04-24 11:00:10'),
(21, 10, 'Listing', 'EmailLogsController@index', 1, '2023-04-24 11:01:04', '2023-04-24 11:01:04'),
(22, 39, 'Create New Record', 'SeoPageController@addDoc', 1, '2023-04-24 11:01:54', '2023-04-24 11:01:54'),
(23, 39, 'Listing', 'SeoPageController@index', 1, '2023-04-24 11:02:07', '2023-04-24 11:02:07'),
(24, 39, 'Update Record', 'SeoPageController@editDoc', 1, '2023-04-24 11:02:27', '2023-04-24 11:02:27'),
(25, 39, 'Delete Record', 'SeoPageController@deletePage', 1, '2023-04-24 11:03:04', '2023-04-24 11:03:04'),
(26, 39, 'Update Status', 'SeoPageController@updateDocStatus', 1, '2023-04-24 11:03:05', '2023-04-24 11:03:05'),
(28, 14, 'Update Status', 'SettingsController@prefix', 1, '2023-04-24 11:05:13', '2023-04-24 11:05:13'),
(29, 40, 'Update Status', 'SettingsController@prefix', 1, '2023-04-24 11:05:38', '2023-04-24 11:05:38'),
(30, 15, 'Update Status', 'SettingsController@prefix', 1, '2023-04-24 11:06:40', '2023-04-24 11:06:40'),
(32, 7, 'Update', 'CmspagesController@update', 1, '2023-04-24 11:30:50', '2023-04-24 11:30:50'),
(34, 1, 'My Account', 'AdminDashboardController@myaccount', 1, '2023-04-24 11:36:50', '2023-04-24 11:36:50'),
(35, 1, 'Change Password', 'AdminDashboardController@changedPassword', 1, '2023-04-24 11:36:51', '2023-04-24 11:36:51'),
(36, 3, 'Listing', 'StaffController@index', 1, '2023-04-24 11:37:55', '2023-04-24 11:37:55'),
(37, 3, 'Create New Record', 'StaffController@store', 1, '2023-04-24 11:40:50', '2023-04-24 11:40:50'),
(38, 3, 'Update Record', 'StaffController@update', 1, '2023-04-24 11:40:51', '2023-04-24 11:40:51'),
(39, 3, 'Update Status', 'StaffController@changeStatus', 1, '2023-04-24 11:42:35', '2023-04-24 11:42:35'),
(40, 3, 'Delete Record', 'StaffController@destroy', 1, '2023-04-24 11:42:36', '2023-04-24 11:42:36'),
(41, 5, 'Create New Record', 'RolesController@store', 1, '2023-04-24 11:45:08', '2023-04-24 11:45:08'),
(42, 5, 'Listing', 'RolesController@index', 1, '2023-04-24 11:45:31', '2023-04-24 11:45:31'),
(43, 5, 'Update Record', 'RolesController@update', 1, '2023-04-24 11:50:16', '2023-04-24 11:50:16'),
(44, 5, 'Update Status', 'RolesController@changeStatus', 1, '2023-04-24 11:50:17', '2023-04-24 11:50:17'),
(46, 5, 'Delete Record', 'RolesController@destroy', 1, '2023-04-24 11:51:26', '2023-04-24 11:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `user_role_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `phone_number_prefix` varchar(255) DEFAULT NULL,
  `phone_number_country_code` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT '1',
  `forgot_password_validate_string` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `designation_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_role`, `user_role_id`, `name`, `email`, `phone_number`, `phone_number_prefix`, `phone_number_country_code`, `password`, `is_active`, `forgot_password_validate_string`, `is_deleted`, `designation_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '1', 'Admin', 'admin@gmail.com', '9929184517', NULL, NULL, '$2y$10$zqT5C62tVdwvga0/c7zMqecUxg9H1ZDXpp06dH8N5tqgE91Mmvfu2', '1', '5bb8b1e6d8134e0af3664e49079c60d0', 0, NULL, NULL, NULL, NULL, '2023-08-30 22:24:36'),
(23, NULL, '3', 'Ariana Head', 'dinesh@mailinator.com', NULL, NULL, NULL, '$2y$10$JpodOWu/95lLZV4iR8bqZ.8dm/Mbj3ON.5bcXuyyX.ZZO255ZRCRm', '1', NULL, 0, 1, NULL, NULL, '2023-08-21 05:34:38', '2023-08-21 05:34:38'),
(24, NULL, '3', 'Harper Stanton', 'qedepege@mailinator.com', NULL, NULL, NULL, '$2y$10$A90BZibGAPOz3jwyge7b8OUz5aShPjbrQJCwtRG4j20iPp/jMsqmq', '1', NULL, 0, 1, NULL, NULL, '2023-08-21 05:36:01', '2023-08-21 05:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `battles`
--

CREATE TABLE `battles` (
  `id` int(100) NOT NULL,
  `game_id` text NOT NULL,
  `battle_id` text NOT NULL,
  `LOBBY_ID` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `admin_commision` float NOT NULL DEFAULT 0,
  `reffer_id` int(11) NOT NULL DEFAULT 0,
  `reffer_comission` float NOT NULL DEFAULT 0,
  `creator_id` int(100) NOT NULL,
  `joiner_id` int(100) DEFAULT NULL,
  `creator_result` enum('win','lost','cancel') DEFAULT NULL,
  `joiner_result` enum('win','lost','cancel') DEFAULT NULL,
  `entry_fee` int(100) NOT NULL,
  `prize` float NOT NULL,
  `request_status` int(100) NOT NULL DEFAULT 0 COMMENT '0: reject,\r\n1: half-accept,\r\n2: sent\r\n3: accept',
  `game_status` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT '1:created,  2:start, 3:end, 4: Half-Start ',
  `is_running` enum('yes','no') NOT NULL DEFAULT 'no',
  `winner_id` int(11) NOT NULL DEFAULT 0,
  `creator_screenshot` varchar(255) DEFAULT NULL,
  `joiner_screenshot` varchar(100) DEFAULT NULL,
  `loser_id` int(11) NOT NULL DEFAULT 0,
  `cancel_reason` text DEFAULT NULL,
  `approve` enum('approved','under_review') DEFAULT NULL,
  `label` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `send_request_time` timestamp NULL DEFAULT NULL,
  `accept_request_time` timestamp NULL DEFAULT NULL,
  `creator_result_time` timestamp NULL DEFAULT NULL,
  `joiner_result_time` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battles`
--

INSERT INTO `battles` (`id`, `game_id`, `battle_id`, `LOBBY_ID`, `amount`, `admin_commision`, `reffer_id`, `reffer_comission`, `creator_id`, `joiner_id`, `creator_result`, `joiner_result`, `entry_fee`, `prize`, `request_status`, `game_status`, `is_running`, `winner_id`, `creator_screenshot`, `joiner_screenshot`, `loser_id`, `cancel_reason`, `approve`, `label`, `created_at`, `send_request_time`, `accept_request_time`, `creator_result_time`, `joiner_result_time`, `updated_at`) VALUES
(80, '3', '169174014742', '09040637', 1000, 10, 256, 20, 259, 256, 'win', 'lost', 1000, 1970, 0, '3', 'no', 259, '1691740200.jpg', NULL, 256, NULL, 'approved', NULL, '2023-08-11 13:19:07.000000', '2023-08-11 13:19:21', '2023-08-11 13:19:24', '2023-08-11 13:20:00', '2023-08-11 13:20:07', '2023-08-11 13:20:07.000000'),
(81, '3', '169174027469', '00017140', 1000, 10, 256, 20, 259, 256, 'win', 'lost', 1000, 1970, 0, '3', 'no', 256, '1691740302.jpg', '1691740315_34.jpg', 259, NULL, 'approved', NULL, '2023-08-11 13:21:14.000000', '2023-08-11 13:21:20', '2023-08-11 13:21:23', '2023-08-11 13:21:42', '2023-08-11 13:21:55', '2023-08-30 23:02:36.000000'),
(83, '3', '169175524676', '04047174', 500, 0, 0, 0, 254, NULL, NULL, NULL, 500, 985, 0, '1', 'no', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-08-11 17:30:46.000000', NULL, NULL, NULL, NULL, '2023-08-11 17:30:46.000000'),
(86, '3', '169272570764', '715641', 1000, 0, 0, 0, 262, NULL, NULL, NULL, 1000, 1970, 0, '1', 'no', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-08-23 06:05:07.000000', NULL, NULL, NULL, NULL, '2023-08-23 06:05:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `battle_histories`
--

CREATE TABLE `battle_histories` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `battle_id` text NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `paying_time` text NOT NULL,
  `match_result` text NOT NULL,
  `another_player_id` int(11) NOT NULL,
  `winning_amount` int(100) NOT NULL,
  `lossing_amount` int(100) NOT NULL,
  `closing_balance` int(100) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battle_histories`
--

INSERT INTO `battle_histories` (`id`, `user_id`, `battle_id`, `day`, `month`, `year`, `paying_time`, `match_result`, `another_player_id`, `winning_amount`, `lossing_amount`, `closing_balance`, `created_at`, `updated_at`) VALUES
(17, 259, '169174014742', '11', 'Aug', '2023', '01:20 PM', 'win', 256, 1970, 1000, 50970, '2023-08-11 13:20:07.000000', '2023-08-11 13:20:07.000000'),
(18, 256, '169174014742', '11', 'Aug', '2023', '01:20 PM', 'lost', 259, 0, 1000, 49000, '2023-08-11 13:20:07.000000', '2023-08-11 13:20:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_descriptions`
--

CREATE TABLE `cms_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `language_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comissions`
--

CREATE TABLE `comissions` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `battle_comission_with_referral` int(11) NOT NULL,
  `battle_comission_without_referral` int(11) NOT NULL,
  `refferal_comission` int(11) NOT NULL,
  `mode` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comissions`
--

INSERT INTO `comissions` (`id`, `admin_id`, `battle_comission_with_referral`, `battle_comission_without_referral`, `refferal_comission`, `mode`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 2, 0, '2023-08-03 13:50:36', '2023-08-23 06:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `activity_by` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `department_id`, `employer_id`, `activity_by`, `name`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Manager', 1, 0, '2023-08-21 05:33:59', '2023-08-21 05:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `designation_permissions`
--

CREATE TABLE `designation_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `admin_module_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_permissions`
--

INSERT INTO `designation_permissions` (`id`, `designation_id`, `admin_module_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(2, 1, 2, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(3, 1, 4, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(4, 1, 6, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(5, 1, 11, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(6, 1, 68, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(7, 1, 73, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(8, 1, 76, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(9, 1, 80, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(10, 1, 81, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(11, 1, 82, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(12, 1, 83, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59'),
(13, 1, 84, 1, '2023-08-21 05:33:59', '2023-08-21 05:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `designation_permission_actions`
--

CREATE TABLE `designation_permission_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `designation_permission_id` int(11) DEFAULT NULL,
  `admin_module_id` int(11) DEFAULT NULL,
  `admin_sub_module_id` varchar(255) DEFAULT NULL,
  `admin_module_action_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_permission_actions`
--

INSERT INTO `designation_permission_actions` (`id`, `designation_id`, `designation_permission_id`, `admin_module_id`, `admin_sub_module_id`, `admin_module_action_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1', 35, 1, NULL, NULL),
(2, 1, 2, 2, '44', 1, 1, NULL, NULL),
(3, 1, 2, 2, '44', 3, 1, NULL, NULL),
(4, 1, 2, 2, '44', 5, 1, NULL, NULL),
(5, 1, 2, 2, '44', 2, 1, NULL, NULL),
(6, 1, 2, 2, '44', 4, 1, NULL, NULL),
(7, 1, 2, 2, '44', 6, 1, NULL, NULL),
(8, 1, 3, 4, '3', 37, 1, NULL, NULL),
(9, 1, 3, 4, '3', 40, 1, NULL, NULL),
(10, 1, 3, 4, '3', 36, 1, NULL, NULL),
(11, 1, 3, 4, '3', 38, 1, NULL, NULL),
(12, 1, 3, 4, '3', 39, 1, NULL, NULL),
(13, 1, 3, 4, '5', 41, 1, NULL, NULL),
(14, 1, 3, 4, '5', 46, 1, NULL, NULL),
(15, 1, 3, 4, '5', 42, 1, NULL, NULL),
(16, 1, 3, 4, '5', 43, 1, NULL, NULL),
(17, 1, 3, 4, '5', 44, 1, NULL, NULL),
(18, 1, 4, 6, '7', 8, 1, NULL, NULL),
(19, 1, 4, 6, '7', 32, 1, NULL, NULL),
(20, 1, 4, 6, '9', 20, 1, NULL, NULL),
(21, 1, 4, 6, '9', 19, 1, NULL, NULL),
(22, 1, 4, 6, '10', 21, 1, NULL, NULL),
(23, 1, 5, 11, '14', 28, 1, NULL, NULL),
(24, 1, 5, 11, '15', 30, 1, NULL, NULL),
(25, 1, 5, 11, '40', 29, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_actions`
--

CREATE TABLE `email_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_actions`
--

INSERT INTO `email_actions` (`id`, `action`, `options`, `created_at`, `updated_at`) VALUES
(2, 'forgot_password', 'EMAIL,FORGOT_PASSWORD_LINK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_to` varchar(255) DEFAULT NULL,
  `email_from` varchar(255) DEFAULT NULL,
  `email_type` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `action`, `body`, `created_at`, `updated_at`) VALUES
(2, 'Password reset confirmation', 'Password reset confirmation', 'reset_password', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\"><br />\r\n						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your password has been updated successfully.</h4>\r\n						<br />\r\n						&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">&copy; Copyright&nbsp; </span></font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">| All Right Reserved 2023</span></font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-04-24 13:23:34', '2023-06-22 12:24:25'),
(6, 'Forgot password', 'Forgoting your password', 'forgot_password', '<meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"><meta name=\"x-apple-disable-message-reformatting\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n<title></title>\r\n<style type=\"text/css\">a {\r\n        text-decoration: none;\r\n        outline: none;\r\n    }\r\n\r\n    @media (max-width: 649px) {\r\n        .o_col-full {\r\n            max-width: 100% !important;\r\n        }\r\n\r\n        .o_col-half {\r\n            max-width: 50% !important;\r\n        }\r\n\r\n        .o_hide-lg {\r\n            display: inline-block !important;\r\n            font-size: inherit !important;\r\n            max-height: none !important;\r\n            line-height: inherit !important;\r\n            overflow: visible !important;\r\n            width: auto !important;\r\n            visibility: visible !important;\r\n        }\r\n\r\n        .o_hide-xs,\r\n        .o_hide-xs.o_col_i {\r\n            display: none !important;\r\n            font-size: 0 !important;\r\n            max-height: 0 !important;\r\n            width: 0 !important;\r\n            line-height: 0 !important;\r\n            overflow: hidden !important;\r\n            visibility: hidden !important;\r\n            height: 0 !important;\r\n        }\r\n\r\n        .o_xs-center {\r\n            text-align: center !important;\r\n        }\r\n\r\n        .o_xs-left {\r\n            text-align: left !important;\r\n        }\r\n\r\n        .o_xs-right {\r\n            text-align: left !important;\r\n        }\r\n\r\n        table.o_xs-left {\r\n            margin-left: 0 !important;\r\n            margin-right: auto !important;\r\n            float: none !important;\r\n        }\r\n\r\n        table.o_xs-right {\r\n            margin-left: auto !important;\r\n            margin-right: 0 !important;\r\n            float: none !important;\r\n        }\r\n\r\n        table.o_xs-center {\r\n            margin-left: auto !important;\r\n            margin-right: auto !important;\r\n            float: none !important;\r\n        }\r\n\r\n        h1.o_heading {\r\n            font-size: 32px !important;\r\n            line-height: 41px !important;\r\n        }\r\n\r\n        h2.o_heading {\r\n            font-size: 26px !important;\r\n            line-height: 37px !important;\r\n        }\r\n\r\n        h3.o_heading {\r\n            font-size: 20px !important;\r\n            line-height: 30px !important;\r\n        }\r\n\r\n        .o_xs-py-md {\r\n            padding-top: 24px !important;\r\n            padding-bottom: 24px !important;\r\n        }\r\n\r\n        .o_xs-pt-xs {\r\n            padding-top: 8px !important;\r\n        }\r\n\r\n        .o_xs-pb-xs {\r\n            padding-bottom: 8px !important;\r\n        }\r\n    }\r\n\r\n    @media screen {\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 400;\r\n            src: local(\"Roboto\"), local(\"Roboto-Regular\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format(\"woff2\");\r\n            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 400;\r\n            src: local(\"Roboto\"), local(\"Roboto-Regular\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format(\"woff2\");\r\n            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 700;\r\n            src: local(\"Roboto Bold\"), local(\"Roboto-Bold\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format(\"woff2\");\r\n            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 700;\r\n            src: local(\"Roboto Bold\"), local(\"Roboto-Bold\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format(\"woff2\");\r\n            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;\r\n        }\r\n\r\n        .o_sans,\r\n        .o_heading {\r\n            font-family: \"Roboto\", sans-serif !important;\r\n        }\r\n\r\n        .o_heading,\r\n        strong,\r\n        b {\r\n            font-weight: 700 !important;\r\n        }\r\n\r\n        a[x-apple-data-detectors] {\r\n            color: inherit !important;\r\n            text-decoration: none !important;\r\n        }\r\n    }\r\n\r\n    #canvas .o_hide,\r\n    #canvas .o_hide-lg {\r\n        font-size: inherit !important;\r\n        max-height: none !important;\r\n        width: auto !important;\r\n        line-height: inherit !important;\r\n        visibility: visible !important;\r\n    }\r\n\r\n    #canvas td.o_hide,\r\n    #canvas td.o_hide div {\r\n        display: block !important;\r\n        font-family: \"Roboto\", sans-serif;\r\n        font-size: 16px !important;\r\n        color: #000;\r\n    }\r\n\r\n    #canvas span.o_hide-lg {\r\n        display: inline-block !important;\r\n        vertical-align: top;\r\n    }\r\n\r\n    .CodeMirror {\r\n        line-height: 1.4;\r\n        font-size: 12px;\r\n        font-family: sans-serif;\r\n    }\r\n</style>\r\n<!--[if mso]>\r\n    <style>\r\n      table { border-collapse: collapse; }\r\n      .o_col { float: left; }\r\n    </style>\r\n    <xml>\r\n      <o:OfficeDocumentSettings>\r\n        <o:PixelsPerInch>96</o:PixelsPerInch>\r\n      </o:OfficeDocumentSettings>\r\n    </xml>\r\n    <![endif]-->\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 8px;color: #242b3d;font-size: 18px;line-height: 23px;\">Password Reset</h4>\r\n\r\n						<p style=\"margin-top: 0px;margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>You recently requested to reset your password for your KoreaEasyBuy account. Click the button below to reset it. &nbsp;</div>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"spacer\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td class=\"o_bg-white\" data-bgcolor=\"Bg White\" style=\"font-size: 24px;line-height: 24px;height: 24px;background-color: #ffffff;\">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"button-primary\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-xs\" data-bgcolor=\"Bg White\" style=\"background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 8px;padding-bottom: 8px;\">\r\n						<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\">\r\n							<tbody>\r\n								<tr>\r\n									<td align=\"center\" class=\"o_btn o_bg-primary o_br o_heading o_text\" data-bgcolor=\"Bg Primary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;mso-padding-alt: 12px 24px;background-color: #4A90E2;border-radius: 4px;\" width=\"300\"><a class=\"o_text-white targeted-text-selection clicked-link\" data-color=\"White\" href=\"{FORGOT_PASSWORD_LINK}\" style=\"text-decoration: none;outline: none;color: #ffffff;display: block;padding: 12px 24px;mso-text-raise: 3px;\">Reset your password&nbsp;</a></td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;color: #424651;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;\">\r\n						<p style=\"margin-top: 0px;margin-bottom: 0px;\">If you did not request a password change, ignore this email or let us know.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: #e0e0e0; color: #555555; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(211, 220, 224); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px;margin-bottom: 0;font-size: 13px;\"><span style=\"text-align: -webkit-center; background-color: rgb(224, 224, 224); font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright KoreaEasyBuy | All Right Reserved 2023</font></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]-->\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-04-24 13:28:36', '2023-06-22 12:24:18'),
(7, 'Send Credentials', 'Send Credentials', 'send_login_credentials', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Hello&nbsp;{USER_NAME}</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>You recently requested login credentials.<br />\r\n						<br />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Login Information:</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Email:&nbsp;{EMAIL}</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Password:&nbsp;{PASSWORD}</span></div>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright </font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"> | All Right Reserved 2023</font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-04-24 11:24:50', '2023-06-22 12:24:05'),
(8, 'Account Verification', 'Account Verification', 'OTP_verification', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"http://localhost/ludo_king/public/frontend/img/logo.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Account Verification</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>\r\n						<div><span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Hello,{USER_NAME}</span>\r\n\r\n						<div style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n						<div>Your account has been registered successfully. Please use the below OTP to verify your account.&nbsp;</div>\r\n\r\n						<p>OTP:{CODE}</p>\r\n						</div>\r\n						</div>\r\n						</div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\" style=\"color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif;\">&copy; Copyright </font><font color=\"#555555\" face=\"Helvetica, Arial, sans-serif\" style=\"\">Ludo Batting&nbsp;</font><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\" style=\"color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif;\">| All Right Reserved 2023</font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-19 05:49:43', '2024-01-27 15:30:22'),
(9, 'Contact Send Request', 'Contact Send Request', 'contact_send_success', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\n						</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\"><br />\n						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your request has been send successfully.</h4>\n						<br />\n						&nbsp;</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">&copy; Copyright&nbsp; </span></font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">| All Right Reserved 2023</span></font></p>\n						</td>\n					</tr>\n				</tbody>\n			</table>\n\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\n			</td>\n		</tr>\n	</tbody>\n</table>', '2023-06-21 13:12:40', '2023-06-22 12:23:58'),
(10, 'Contact Request', 'Contact Request', 'send_contact', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\n						</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Contact Request</h4>\n						&nbsp;\n\n						<div>You recently requested contact&nbsp;credentials.<br />\n						<br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Name :&nbsp;{NAME}</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Email :&nbsp;{EMAIL}<br />\n						Phone Number :&nbsp;</span>{PHONE_NUMBER}<br />\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Subject :&nbsp;</span>{SUBJECT}<br />\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Message : {MESSAGE}</span></div>\n\n						<p>&nbsp;</p>\n						</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\n	<tbody>\n		<tr>\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\n				<tbody>\n					<tr>\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright KoreaEasyBuy | All Right Reserved 2023</font></p>\n						</td>\n					</tr>\n				</tbody>\n			</table>\n\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\n			</td>\n		</tr>\n	</tbody>\n</table>', '2023-06-21 13:16:54', '2023-06-22 12:23:53'),
(11, 'Reply Contact query', 'Reply Contact query', 'reply_contact_query', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 15px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"http://quicksoft.stage04.obdemo.com/\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"quicksoft\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/admin/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Hi&nbsp;{NAME}</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">You have a reply to your contact query.<br />\r\n						<br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Replied Message:<br />\r\n						&nbsp;</strong>{REPLY}<br />\r\n						<br />\r\n						<em style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Your&nbsp;<span class=\"il\">Contact</span>&nbsp;Query:</em><br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Subject:&nbsp;</strong>{SUBJECT}<br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Message:&nbsp;</strong><span style=\"color: rgb(66, 70, 81); font-family: Helvetica, Arial, sans-serif; font-size: 16px;\">{MESSAGE}</span><br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"font-family: Helvetica, Arial, sans-serif; border-top-style: solid; border-top-color: rgb(211, 220, 224); margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\">&copy; Copyright <span style=\"color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; text-align: -webkit-center; background-color: rgb(224, 224, 224);\">KoreaEasyBuy</span> | All Right Reserved 2023</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\">&nbsp;&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 05:09:49', '2023-08-19 23:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `email_template_descriptions`
--

CREATE TABLE `email_template_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template_descriptions`
--

INSERT INTO `email_template_descriptions` (`id`, `parent_id`, `language_id`, `name`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(142, 10, 1, 'Contact Request', 'Contact Request', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Contact Request</h4>\r\n						&nbsp;\r\n\r\n						<div>You recently requested contact&nbsp;credentials.<br />\r\n						<br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Name :&nbsp;{NAME}</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Email :&nbsp;{EMAIL}<br />\r\n						Phone Number :&nbsp;</span>{PHONE_NUMBER}<br />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Subject :&nbsp;</span>{SUBJECT}<br />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Message : {MESSAGE}</span></div>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright KoreaEasyBuy | All Right Reserved 2023</font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:23:53', '2023-06-22 12:23:53'),
(143, 10, 2, NULL, NULL, NULL, '2023-06-22 12:23:53', '2023-06-22 12:23:53'),
(144, 10, 3, NULL, NULL, NULL, '2023-06-22 12:23:53', '2023-06-22 12:23:53'),
(145, 10, 4, NULL, NULL, NULL, '2023-06-22 12:23:53', '2023-06-22 12:23:53'),
(146, 9, 1, 'Contact Send Request', 'Contact Send Request', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\"><br />\r\n						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your request has been send successfully.</h4>\r\n						<br />\r\n						&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">&copy; Copyright&nbsp; </span></font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">| All Right Reserved 2023</span></font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:23:58', '2023-06-22 12:23:58'),
(147, 9, 2, NULL, NULL, NULL, '2023-06-22 12:23:58', '2023-06-22 12:23:58'),
(148, 9, 3, NULL, NULL, NULL, '2023-06-22 12:23:58', '2023-06-22 12:23:58'),
(149, 9, 4, NULL, NULL, NULL, '2023-06-22 12:23:58', '2023-06-22 12:23:58'),
(150, 7, 1, 'Send Credentials', 'Send Credentials', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Hello&nbsp;{USER_NAME}</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>You recently requested login credentials.<br />\r\n						<br />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Login Information:</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Email:&nbsp;{EMAIL}</span><br style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\" />\r\n						<span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Password:&nbsp;{PASSWORD}</span></div>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright </font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"> | All Right Reserved 2023</font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:24:05', '2023-06-22 12:24:05'),
(151, 7, 2, NULL, NULL, NULL, '2023-06-22 12:24:05', '2023-06-22 12:24:05'),
(152, 7, 3, NULL, NULL, NULL, '2023-06-22 12:24:05', '2023-06-22 12:24:05'),
(153, 7, 4, NULL, NULL, NULL, '2023-06-22 12:24:05', '2023-06-22 12:24:05'),
(154, 6, 1, 'Forgot password', 'Forgoting your password', '<meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"><meta name=\"x-apple-disable-message-reformatting\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n<title></title>\r\n<style type=\"text/css\">a {\r\n        text-decoration: none;\r\n        outline: none;\r\n    }\r\n\r\n    @media (max-width: 649px) {\r\n        .o_col-full {\r\n            max-width: 100% !important;\r\n        }\r\n\r\n        .o_col-half {\r\n            max-width: 50% !important;\r\n        }\r\n\r\n        .o_hide-lg {\r\n            display: inline-block !important;\r\n            font-size: inherit !important;\r\n            max-height: none !important;\r\n            line-height: inherit !important;\r\n            overflow: visible !important;\r\n            width: auto !important;\r\n            visibility: visible !important;\r\n        }\r\n\r\n        .o_hide-xs,\r\n        .o_hide-xs.o_col_i {\r\n            display: none !important;\r\n            font-size: 0 !important;\r\n            max-height: 0 !important;\r\n            width: 0 !important;\r\n            line-height: 0 !important;\r\n            overflow: hidden !important;\r\n            visibility: hidden !important;\r\n            height: 0 !important;\r\n        }\r\n\r\n        .o_xs-center {\r\n            text-align: center !important;\r\n        }\r\n\r\n        .o_xs-left {\r\n            text-align: left !important;\r\n        }\r\n\r\n        .o_xs-right {\r\n            text-align: left !important;\r\n        }\r\n\r\n        table.o_xs-left {\r\n            margin-left: 0 !important;\r\n            margin-right: auto !important;\r\n            float: none !important;\r\n        }\r\n\r\n        table.o_xs-right {\r\n            margin-left: auto !important;\r\n            margin-right: 0 !important;\r\n            float: none !important;\r\n        }\r\n\r\n        table.o_xs-center {\r\n            margin-left: auto !important;\r\n            margin-right: auto !important;\r\n            float: none !important;\r\n        }\r\n\r\n        h1.o_heading {\r\n            font-size: 32px !important;\r\n            line-height: 41px !important;\r\n        }\r\n\r\n        h2.o_heading {\r\n            font-size: 26px !important;\r\n            line-height: 37px !important;\r\n        }\r\n\r\n        h3.o_heading {\r\n            font-size: 20px !important;\r\n            line-height: 30px !important;\r\n        }\r\n\r\n        .o_xs-py-md {\r\n            padding-top: 24px !important;\r\n            padding-bottom: 24px !important;\r\n        }\r\n\r\n        .o_xs-pt-xs {\r\n            padding-top: 8px !important;\r\n        }\r\n\r\n        .o_xs-pb-xs {\r\n            padding-bottom: 8px !important;\r\n        }\r\n    }\r\n\r\n    @media screen {\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 400;\r\n            src: local(\"Roboto\"), local(\"Roboto-Regular\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format(\"woff2\");\r\n            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 400;\r\n            src: local(\"Roboto\"), local(\"Roboto-Regular\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format(\"woff2\");\r\n            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 700;\r\n            src: local(\"Roboto Bold\"), local(\"Roboto-Bold\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format(\"woff2\");\r\n            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;\r\n        }\r\n\r\n        @font-face {\r\n            font-family: \'Roboto\';\r\n            font-style: normal;\r\n            font-weight: 700;\r\n            src: local(\"Roboto Bold\"), local(\"Roboto-Bold\"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format(\"woff2\");\r\n            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;\r\n        }\r\n\r\n        .o_sans,\r\n        .o_heading {\r\n            font-family: \"Roboto\", sans-serif !important;\r\n        }\r\n\r\n        .o_heading,\r\n        strong,\r\n        b {\r\n            font-weight: 700 !important;\r\n        }\r\n\r\n        a[x-apple-data-detectors] {\r\n            color: inherit !important;\r\n            text-decoration: none !important;\r\n        }\r\n    }\r\n\r\n    #canvas .o_hide,\r\n    #canvas .o_hide-lg {\r\n        font-size: inherit !important;\r\n        max-height: none !important;\r\n        width: auto !important;\r\n        line-height: inherit !important;\r\n        visibility: visible !important;\r\n    }\r\n\r\n    #canvas td.o_hide,\r\n    #canvas td.o_hide div {\r\n        display: block !important;\r\n        font-family: \"Roboto\", sans-serif;\r\n        font-size: 16px !important;\r\n        color: #000;\r\n    }\r\n\r\n    #canvas span.o_hide-lg {\r\n        display: inline-block !important;\r\n        vertical-align: top;\r\n    }\r\n\r\n    .CodeMirror {\r\n        line-height: 1.4;\r\n        font-size: 12px;\r\n        font-family: sans-serif;\r\n    }\r\n</style>\r\n<!--[if mso]>\r\n    <style>\r\n      table { border-collapse: collapse; }\r\n      .o_col { float: left; }\r\n    </style>\r\n    <xml>\r\n      <o:OfficeDocumentSettings>\r\n        <o:PixelsPerInch>96</o:PixelsPerInch>\r\n      </o:OfficeDocumentSettings>\r\n    </xml>\r\n    <![endif]-->\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 8px;color: #242b3d;font-size: 18px;line-height: 23px;\">Password Reset</h4>\r\n\r\n						<p style=\"margin-top: 0px;margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>You recently requested to reset your password for your KoreaEasyBuy account. Click the button below to reset it. &nbsp;</div>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"spacer\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td class=\"o_bg-white\" data-bgcolor=\"Bg White\" style=\"font-size: 24px;line-height: 24px;height: 24px;background-color: #ffffff;\">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"button-primary\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-xs\" data-bgcolor=\"Bg White\" style=\"background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 8px;padding-bottom: 8px;\">\r\n						<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\">\r\n							<tbody>\r\n								<tr>\r\n									<td align=\"center\" class=\"o_btn o_bg-primary o_br o_heading o_text\" data-bgcolor=\"Bg Primary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;mso-padding-alt: 12px 24px;background-color: #4A90E2;border-radius: 4px;\" width=\"300\"><a class=\"o_text-white targeted-text-selection clicked-link\" data-color=\"White\" href=\"{FORGOT_PASSWORD_LINK}\" style=\"text-decoration: none;outline: none;color: #ffffff;display: block;padding: 12px 24px;mso-text-raise: 3px;\">Reset your password&nbsp;</a></td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: #f1f1f1;padding-left: 8px;padding-right: 8px;\"><!--[if mso]><table width=\"632\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" role=\"presentation\"><tbody><tr><td><![endif]-->\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;color: #424651;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;\">\r\n						<p style=\"margin-top: 0px;margin-bottom: 0px;\">If you did not request a password change, ignore this email or let us know.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px;margin: 0 auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: #e0e0e0; color: #555555; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(211, 220, 224); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px;margin-bottom: 0;font-size: 13px;\"><span style=\"text-align: -webkit-center; background-color: rgb(224, 224, 224); font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright KoreaEasyBuy | All Right Reserved 2023</font></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<!--[if mso]></td></tr></table><![endif]-->\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:24:18', '2023-06-22 12:24:18'),
(155, 6, 2, NULL, NULL, NULL, '2023-06-22 12:24:18', '2023-06-22 12:24:18'),
(156, 6, 3, NULL, NULL, NULL, '2023-06-22 12:24:18', '2023-06-22 12:24:18'),
(157, 6, 4, NULL, NULL, NULL, '2023-06-22 12:24:18', '2023-06-22 12:24:18'),
(158, 2, 1, 'Password reset confirmation', 'Password reset confirmation', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\"><br />\r\n						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your password has been updated successfully.</h4>\r\n						<br />\r\n						&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">&copy; Copyright&nbsp; </span></font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"><span style=\"font-size: 13px;\">| All Right Reserved 2023</span></font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:24:25', '2023-06-22 12:24:25'),
(159, 2, 2, NULL, NULL, NULL, '2023-06-22 12:24:25', '2023-06-22 12:24:25'),
(160, 2, 3, NULL, NULL, NULL, '2023-06-22 12:24:25', '2023-06-22 12:24:25'),
(161, 2, 4, NULL, NULL, NULL, '2023-06-22 12:24:25', '2023-06-22 12:24:25'),
(162, 8, 1, 'Account Verification', 'Account Verification', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 24px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo.png\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"https://keasybuypanel.stage02.obdemo.com/\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/public/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Account Verification</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">&nbsp;</p>\r\n\r\n						<div>\r\n						<div><span style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">Hello,{USER_NAME}</span>\r\n\r\n						<div style=\"color: rgb(66, 70, 81); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n						<div>Your account has been registered successfully. Please use the below OTP to verify your account.&nbsp;</div>\r\n\r\n						<p>OTP:{CODE}</p>\r\n						</div>\r\n						</div>\r\n						</div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"border-top-style: solid; border-top-color: rgb(211, 220, 224); font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\"><font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\">&copy; Copyright </font>KoreaEasyBuy<font color=\"#333333\" face=\"sans-serif, Arial, Verdana, Trebuchet MS\"> | All Right Reserved 2023</font></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\"><span style=\"font-size: 13px;\">&nbsp;&nbsp;</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-06-22 12:24:31', '2023-06-22 12:24:31'),
(163, 8, 2, NULL, NULL, NULL, '2023-06-22 12:24:31', '2023-06-22 12:24:31'),
(164, 8, 3, NULL, NULL, NULL, '2023-06-22 12:24:31', '2023-06-22 12:24:31'),
(165, 8, 4, NULL, NULL, NULL, '2023-06-22 12:24:31', '2023-06-22 12:24:31'),
(178, 11, 1, 'Reply Contact query', 'Reply Contact query', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"header-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pt-lg o_xs-pt-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-top: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 39px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px o_py-md o_br-t o_sans o_text\" data-bgcolor=\"Bg White\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(74, 144, 226); border-radius: 4px 4px 0px 0px; padding: 15px 16px;\">\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px; color: rgb(147, 172, 109);\"><a class=\"o_text-primary\" data-color=\"White\" href=\"http://quicksoft.stage04.obdemo.com/\" style=\"color: rgb(18, 109, 229); text-decoration-line: none; outline: none;\"><img alt=\"quicksoft\" data-crop=\"false\" src=\"https://keasybuypanel.stage02.obdemo.com/admin/img/logo-white.png\" style=\"border-width: 0px; border-style: initial; outline: none; max-width: 100%; vertical-align: middle; line-height: 16px; max-height: 100%;\" /></a></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"content-lg-left\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto; height: 106px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" class=\"o_bg-white o_px-md o_py o_sans o_text o_text-secondary\" data-bgcolor=\"Bg White\" data-color=\"Secondary\" data-max=\"20\" data-min=\"12\" data-size=\"Text Default\" style=\"font-family: Helvetica, Arial, sans-serif; margin-top: 0px; margin-bottom: 0px; font-size: 16px; line-height: 24px; background-color: rgb(255, 255, 255); color: rgb(66, 70, 81); padding: 30px 24px 16px;\">\r\n						<h4 class=\"o_heading o_text-dark o_mb-xs\" data-color=\"Dark\" data-max=\"26\" data-min=\"10\" data-size=\"Heading 4\" style=\"font-weight: bold; line-height: 23px; margin-top: 0px; margin-bottom: 8px; color: rgb(36, 43, 61); font-size: 18px;\">Hi&nbsp;{NAME}</h4>\r\n\r\n						<p style=\"margin-top: 0px; margin-bottom: 0px;\">You have a reply to your contact query.<br />\r\n						<br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Replied Message:<br />\r\n						&nbsp;</strong>{REPLY}<br />\r\n						<br />\r\n						<em style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Your&nbsp;<span class=\"il\">Contact</span>&nbsp;Query:</em><br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Subject:&nbsp;</strong>{SUBJECT}<br />\r\n						<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: small;\">Message:&nbsp;</strong><span style=\"color: rgb(66, 70, 81); font-family: Helvetica, Arial, sans-serif; font-size: 16px;\">{MESSAGE}</span><br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-module=\"footer-white\" role=\"presentation\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" class=\"o_bg-light o_px-xs o_pb-lg o_xs-pb-xs\" data-bgcolor=\"Bg Light\" style=\"background-color: rgb(241, 241, 241); padding-left: 8px; padding-right: 8px; padding-bottom: 32px;\">\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"o_block\" role=\"presentation\" style=\"max-width: 632px; margin: 0px auto;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" class=\"o_bg-white o_px-md o_py-lg o_bt-light o_br-b o_sans o_text-xs o_text-light\" data-bgcolor=\"Bg White\" data-border-top-color=\"Border Light\" data-color=\"Light\" data-max=\"18\" data-min=\"10\" data-size=\"Text XS\" style=\"font-family: Helvetica, Arial, sans-serif; border-top-style: solid; border-top-color: rgb(211, 220, 224); margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 21px; background-color: rgb(224, 224, 224); color: rgb(85, 85, 85); border-radius: 0px 0px 4px 4px; padding: 15px 24px;\">\r\n						<p class=\"o_mb\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 13px;\">&copy; Copyright <span style=\"color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; text-align: -webkit-center; background-color: rgb(224, 224, 224);\">KoreaEasyBuy</span> | All Right Reserved 2023</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div class=\"o_hide-xs\" style=\"font-size: 64px; line-height: 64px; height: 64px;\">&nbsp;&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2023-08-19 23:14:20', '2023-08-19 23:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_id` text NOT NULL,
  `game_name` text NOT NULL,
  `game_image` text NOT NULL,
  `url` text NOT NULL,
  `api_url` mediumtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_id`, `game_name`, `game_image`, `url`, `api_url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'game_7836', 'Ludo Classic', '16867207279.webp', 'Ludo Classic', 'https://api.ludoadda.co.in/api.php?uname=Ym9udXNsdWRv&key=VjFSS05HRkhUWHBVYmtKYVpIb3dPUT09', 0, '2023-06-14 11:02:07.000000', '2024-01-30 17:39:49.000000'),
(4, 'game_5385', 'Ludo Popular', 'JAN2024/1706636489-image.jpg', 'Ludo Popular', 'https://api.ludoadda.co.in/api.php?uname=Ym9udXNsdWRv&key=VjFSS05HRkhUWHBVYmtKYVpIb3dPUT09', 1, '2023-06-14 11:02:42.000000', '2024-01-30 17:41:29.000000'),
(5, 'game_7595', 'Ludo Quick', '16878877067.png', 'Ludo Quick', 'thttps://bonusludo.com/admin/games/create', 0, '2023-06-14 11:03:18.000000', '2024-01-30 17:40:06.000000'),
(6, 'game_4368', 'Snake & Ladder', '16867208606.jpg', 'Snake & Ladder', 'https://bonusludo.com/admin/games/create', 0, '2023-06-14 11:04:20.000000', '2023-08-22 06:32:07.000000'),
(7, 'game_7101', 'Thor Martin', 'AUG2023/1692644282-game_image.sql', 'Thor Martin', 'https://www.peqizomo.ws', 0, '2023-08-22 07:28:02.000000', '2024-01-30 17:40:00.000000'),
(8, 'game_2051', 'Luke Myers', 'AUG2023/1692644358-game_image.png', 'Luke Myers', 'https://www.kypexu.cc', 0, '2023-08-22 07:29:18.000000', '2024-01-30 17:39:55.000000'),
(9, 'game_7899', 'Ca--', 'AUG2023/1692644896-image.png', 'Ca  ', 'https://www.hubovyx.cm', 0, '2023-08-22 07:38:16.000000', '2024-01-30 17:40:13.000000');

-- --------------------------------------------------------

--
-- Table structure for table `marquee_notifications`
--

CREATE TABLE `marquee_notifications` (
  `id` int(11) NOT NULL,
  `marquee_text` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `notice_text` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marquee_notifications`
--

INSERT INTO `marquee_notifications` (`id`, `marquee_text`, `status`, `notice_text`, `created_at`, `updated_at`) VALUES
(1, 'Commission: 3% ◉ Referral: 2% For All Win Games', 1, 'Commission: 3% ◉ Referral: 2% For All Win Games', NULL, '2023-08-22 05:38:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(100) NOT NULL,
  `order_id` text DEFAULT NULL,
  `order_token` text DEFAULT NULL,
  `vplay_id` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile` text NOT NULL,
  `amount` float NOT NULL,
  `status` enum('PAID','ACTIVE','FAILED') NOT NULL,
  `upigateway_date` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `order_token`, `vplay_id`, `user_id`, `mobile`, `amount`, `status`, `upigateway_date`, `created_at`, `updated_at`) VALUES
(46, 'ORD/UPI735753179', '', 'OSXU0588', 256, '6377624134', 100, 'FAILED', '10-08-2023', '2023-08-10 20:46:22.000000', '2023-08-11 17:51:42.000000'),
(47, 'ORD/UPI283586625', '57958589', 'RDYU2991', 262, '8740855331', 100, 'FAILED', '12-08-2023', '2023-08-12 00:40:09.000000', '2023-08-12 00:40:22.000000'),
(48, 'ORD/UPI280862235', '', 'RDYU2991', 262, '8740855331', 100, 'FAILED', '23-08-2023', '2023-08-24 03:48:37.000000', '2023-08-24 04:50:47.000000');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `parameter_one` text DEFAULT NULL,
  `parameter_two` text DEFAULT NULL,
  `min_add_amount` int(11) NOT NULL,
  `max_add_amount` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `name`, `parameter_one`, `parameter_two`, `min_add_amount`, `max_add_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Paytm', 'kOtBHH0951sadasdas', '7S0cRkAqasdasdas', 1, 10000, '0', NULL, '2023-08-03 00:29:57'),
(2, 'Cashfree', '174787c96bcef08e28381ff8fe787471', 'd42c94ca464249d592ddbc7571da802497b8185b', 1, 10000, '0', NULL, '2023-08-03 00:29:57'),
(3, 'UPI Gateway', '8ae65205-b852-4a55-a5bb-10ad52392f79', NULL, 50, 10000, '1', NULL, '2023-08-03 20:40:22'),
(4, 'UPI GTelararia', 'h0mtl1s2ay', 'NmIyZTl0d3pzOA==', 1, 10000, '0', '2023-06-17 11:27:16', '2023-08-03 00:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `input_type` text DEFAULT NULL,
  `editable` int(11) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `title`, `description`, `input_type`, `editable`, `weight`, `created_at`, `updated_at`) VALUES
(1, 'Site.title', 'Ludo Batting', 'Site Title', NULL, 'text', 1, NULL, '2023-04-24 11:06:01', '2024-01-30 18:25:08'),
(2, 'Site.from_email', 'dy937673@gmail.com', 'From Email', NULL, 'text', 1, NULL, '2023-04-24 12:11:22', '2024-01-30 18:25:08'),
(3, 'Reading.records_per_page', '10', 'Records Per Page', NULL, 'text', 1, NULL, '2023-04-24 12:11:50', '2023-05-30 00:02:25'),
(4, 'Reading.date_time_format', 'm-d-Y h: A', 'Date Time Format', NULL, 'text', 1, NULL, '2023-04-24 12:12:16', '2023-05-30 00:02:26'),
(5, 'Reading.date_format', 'm-d-Y', 'Date Format', NULL, 'text', 1, NULL, '2023-04-24 12:13:22', '2023-05-30 00:02:28'),
(6, 'Contact.email_address', 'dummy@mailinator.com', 'Contact Email', NULL, 'text', 1, NULL, '2023-04-24 13:09:46', '2023-06-21 13:37:40'),
(7, 'Contact.admin_email', 'test@mailinator.com', 'Enquiry Will Received On', NULL, 'text', 1, NULL, '2023-04-24 13:10:24', '2023-06-21 13:37:40'),
(8, 'Social.youtube', 'https://www.youtube.com', 'Youtube Url', NULL, 'text', 1, NULL, '2023-04-24 13:10:59', '2023-04-24 06:38:35'),
(9, 'Contact.phone', '00 (123) 456 78 90', 'Contact Phone', NULL, 'text', 1, NULL, '2023-04-24 06:16:14', '2023-06-21 13:37:40'),
(10, 'contact.address', 'Moonshine St. 14/05 Light City, London, United Kingdom', 'Contact Address', NULL, 'text', 1, NULL, '2023-04-24 06:16:56', '2023-06-21 13:37:40'),
(11, 'Social.facebook', 'https://www.facebook.com', 'Facebook Url', NULL, 'text', 1, NULL, '2023-04-24 06:17:58', '2023-04-24 06:38:35'),
(12, 'Social.twitter', 'https://www.twitter.com', 'Twitter Url', NULL, 'text', 1, NULL, '2023-04-24 06:18:36', '2023-04-24 06:38:35'),
(13, 'Social.linkedin', 'https://www.linkedin.com', 'Linkedin Url', NULL, 'text', 1, NULL, '2023-04-24 06:19:24', '2023-04-24 06:38:35'),
(16, 'Site.right', 'Copyright 2023 Ludo King. All Rights Reserved.', 'Copy Right Text', NULL, 'text', 1, NULL, '2022-11-25 05:38:43', '2024-01-30 18:25:08'),
(17, 'Tawk.io', 'https://embed.tawk.to/6492742394cf5d49dc5eedaa/1h3e1bb5s', 'Tawk.io Setting', NULL, 'text', 1, NULL, '2023-06-21 09:07:39', '2023-06-21 09:09:18'),
(18, 'Google.siteKey', '6LfzzsEmAAAAAGx_YGS4kWEqu0cJqTu6x9ivOLE4', 'Google Captcha Site Key', NULL, 'text', 1, NULL, '2023-06-23 07:56:25', '2023-06-23 08:56:25'),
(19, 'Google.secretKey', '6LfzzsEmAAAAAA5foxDghzRTnrdP6aKrocnjO1nJ', 'Google Captcha Secret Key', NULL, 'text', 1, NULL, '2023-06-23 07:57:19', '2023-06-23 08:56:25'),
(20, 'Jobs.top', 'dd=', 'fr', NULL, 'text', 1, NULL, '2023-08-10 06:21:01', '2023-08-10 06:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_histories`
--

CREATE TABLE `transaction_histories` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `payment_id` int(100) DEFAULT NULL,
  `order_id` text NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `paying_time` text NOT NULL,
  `amount` int(11) NOT NULL,
  `add_or_withdraw` enum('add','withdraw') NOT NULL,
  `closing_balance` int(255) NOT NULL,
  `withdraw_status` enum('pending','success','reject') NOT NULL DEFAULT 'pending',
  `remark` mediumtext DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_histories`
--

INSERT INTO `transaction_histories` (`id`, `user_id`, `payment_id`, `order_id`, `day`, `month`, `year`, `paying_time`, `amount`, `add_or_withdraw`, `closing_balance`, `withdraw_status`, `remark`, `created_at`, `updated_at`) VALUES
(27, 256, NULL, 'penalty', '11', '8', '2023', '13:24:11', 25, 'withdraw', 47975, 'pending', 'Worng results update', '2023-08-11 07:54:11.949961', '2023-08-11 07:54:11.949961'),
(28, 262, NULL, 'bonus', '12', '8', '2023', '01:32:04', 10, 'add', 10, 'pending', NULL, '2023-08-11 20:02:04.760806', '2023-08-11 20:02:04.760806'),
(29, 262, NULL, 'bonus', '12', '8', '2023', '01:32:19', 10, 'add', 20, 'pending', 'hi', '2023-08-11 20:02:19.485595', '2023-08-11 20:02:19.485595'),
(30, 262, NULL, 'bonus', '12', '8', '2023', '01:32:58', 0, 'add', 0, 'pending', NULL, '2023-08-11 20:02:58.207960', '2023-08-11 20:02:58.207960'),
(31, 262, NULL, '5', '23', '08', '23', '12:05 AM', 199, 'withdraw', 4000, 'success', NULL, '2023-08-23 07:05:32.000000', '2023-08-24 04:08:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vplay_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `wallet` float NOT NULL DEFAULT 0,
  `wallet_reffer` float NOT NULL DEFAULT 0,
  `referral_code` text NOT NULL,
  `reffered_by` text DEFAULT NULL,
  `total_win` int(100) NOT NULL DEFAULT 0,
  `total_lost` int(100) NOT NULL DEFAULT 0,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `verify_users` int(1) NOT NULL DEFAULT 0,
  `otp` varchar(255) NOT NULL DEFAULT '0',
  `verify_token` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `vplay_id`, `name`, `mobile`, `image`, `wallet`, `wallet_reffer`, `referral_code`, `reffered_by`, `total_win`, `total_lost`, `is_active`, `is_deleted`, `verify_users`, `otp`, `verify_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', '7690002070', NULL, 10, 0, '', NULL, 0, 0, 1, 0, 0, '0', NULL, '2023-06-20 09:48:15', '2023-08-30 23:02:36'),
(240, 'PHCXU595', NULL, '8233388802', NULL, 160, 0, 'UM8802', NULL, 0, 0, 1, 0, 0, '965594', NULL, '2023-08-03 17:18:40', '2023-08-11 03:25:22'),
(252, 'FSTW9256', 'Raju', '6377479610', NULL, 0, 0, 'WO9610', NULL, 0, 0, 1, 0, 0, '0', NULL, '2023-08-10 16:24:29', '2023-08-10 16:24:29'),
(253, 'TV9IF465', 'Hdhdh', '9876543210', NULL, 0, 0, 'XW3210', 'WO9610', 0, 0, 1, 0, 0, '485589', NULL, '2023-08-10 17:03:55', '2023-08-10 19:41:00'),
(254, 'RU0C0728', 'Kirodi lal meena', '8619702170', NULL, 49500, 0, 'NM2170', 'XV4134', 0, 0, 1, 0, 0, '0', NULL, '2023-08-10 18:11:01', '2023-08-11 17:30:46'),
(255, '68XEZ266', 'Seema', '8058846400', NULL, 0, 0, 'HY6400', 'OS5959', 0, 0, 1, 0, 0, '0', NULL, '2023-08-10 18:24:58', '2023-08-10 18:24:58'),
(256, 'OSXU0588', 'Raj meena', '6377624134', NULL, 1970, 20, 'VY4134', NULL, 1, 0, 1, 0, 0, '627244', NULL, '2023-08-10 18:45:25', '2023-08-30 23:02:36'),
(257, 'YAW32771', 'Chetram meena', '9602859515', NULL, 50000, 0, 'QI9515', 'XV4134', 0, 0, 1, 0, 0, '0', NULL, '2023-08-10 19:11:33', '2023-08-11 14:36:35'),
(258, 'Q4E0T322', NULL, '6350499756', NULL, 0, 0, 'RG9756', NULL, 0, 0, 1, 0, 0, '684995', NULL, '2023-08-11 03:31:39', '2023-08-11 03:31:39'),
(259, 'YD8N2849', 'Ll meena', '9529225959', NULL, 100000000000, 0, 'JG5959', 'VY4134', 0, 0, 1, 0, 0, '0', NULL, '2023-08-11 13:15:41', '2023-08-30 23:20:39'),
(260, 'QL50B417', 'Meena', '2647826397', NULL, 0, 0, 'UI6397', NULL, 0, 0, 1, 0, 0, '0', NULL, '2023-08-11 13:16:32', '2023-08-11 13:16:32'),
(261, 'RJAE4117', 'Ganshyam dabra', '9929235885', NULL, 0, 0, 'BX5885', 'XV4134', 0, 0, 1, 0, 0, '0', NULL, '2023-08-11 18:51:09', '2023-08-21 00:27:36'),
(262, 'RDYU2991', 'Dinesh Yadav', '8740855331', NULL, 1199, 0, 'PS5331', NULL, 0, 0, 1, 0, 0, '0', NULL, '2023-08-12 00:00:28', '2023-08-24 04:05:03'),
(263, 'OVDNF440', NULL, '3333333333', NULL, 0, 0, 'QX7890', NULL, 0, 0, 1, 0, 0, '0', NULL, '2023-08-21 07:47:15', '2023-08-21 08:03:11'),
(264, 'L630H482', 'Theodore Perez', '8740855332', NULL, 0, 0, 'SK5332', '', 0, 0, 1, 0, 0, '1234', 'y9QarIhaPVwBJVV0rgoC6lLPavptmw', '2024-01-27 15:41:07', '2024-01-27 15:41:07'),
(265, 'OYY4S235', 'Dinesh', '1111111111', 'FEB2024/1706992842-image.png', 0, 0, 'KQ1111', '', 0, 0, 1, 0, 0, '', NULL, '2024-01-29 18:20:06', '2024-02-04 03:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_bank_details`
--

CREATE TABLE `users_bank_details` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `upi_account_holder_name` text DEFAULT NULL,
  `upi_id` text DEFAULT NULL,
  `bank_account_holder_name` text DEFAULT NULL,
  `bank_account_number` text DEFAULT NULL,
  `ifsc_code` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_bank_details`
--

INSERT INTO `users_bank_details` (`id`, `user_id`, `upi_account_holder_name`, `upi_id`, `bank_account_holder_name`, `bank_account_number`, `ifsc_code`, `created_at`, `updated_at`) VALUES
(69, 251, NULL, NULL, NULL, NULL, NULL, '2023-08-10 16:18:50.000000', '2023-08-10 16:18:50.000000'),
(70, 252, NULL, NULL, NULL, NULL, NULL, '2023-08-10 16:24:29.000000', '2023-08-10 16:24:29.000000'),
(71, 253, NULL, NULL, NULL, NULL, NULL, '2023-08-10 17:03:55.000000', '2023-08-10 17:03:55.000000'),
(72, 254, NULL, NULL, NULL, NULL, NULL, '2023-08-10 18:11:01.000000', '2023-08-10 18:11:01.000000'),
(73, 255, NULL, NULL, NULL, NULL, NULL, '2023-08-10 18:24:58.000000', '2023-08-10 18:24:58.000000'),
(74, 256, NULL, NULL, NULL, NULL, NULL, '2023-08-10 18:45:25.000000', '2023-08-10 18:45:25.000000'),
(75, 257, NULL, NULL, NULL, NULL, NULL, '2023-08-10 19:11:33.000000', '2023-08-10 19:11:33.000000'),
(76, 258, NULL, NULL, NULL, NULL, NULL, '2023-08-11 03:31:39.000000', '2023-08-11 03:31:39.000000'),
(77, 259, NULL, NULL, NULL, NULL, NULL, '2023-08-11 13:15:41.000000', '2023-08-11 13:15:41.000000'),
(78, 260, NULL, NULL, NULL, NULL, NULL, '2023-08-11 13:16:32.000000', '2023-08-11 13:16:32.000000'),
(79, 261, NULL, NULL, NULL, NULL, NULL, '2023-08-11 18:51:09.000000', '2023-08-11 18:51:09.000000'),
(81, 262, 'hhjghj', 'hghghj', 'jhghjg', '7675757', '657565', '2023-08-21 07:47:15.000000', '2023-08-21 07:47:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users_kyc_details`
--

CREATE TABLE `users_kyc_details` (
  `id` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vplay_id` text NOT NULL,
  `DOCUMENT_NAME` text DEFAULT NULL,
  `DOCUMENT_NUMBER` text DEFAULT NULL,
  `DOCUMENT_FIRST_NAME` text DEFAULT NULL,
  `DOCUMENT_LAST_NAME` text DEFAULT NULL,
  `DOCUMENT_DOB` text DEFAULT NULL,
  `DOCUMENT_STATE` text DEFAULT NULL,
  `DOCUMENT_FRONT_IMAGE` text DEFAULT NULL,
  `DOCUMENT_BACK_IMAGE` text DEFAULT NULL,
  `verify_status` enum('1','0') DEFAULT '0',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_kyc_details`
--

INSERT INTO `users_kyc_details` (`id`, `user_id`, `vplay_id`, `DOCUMENT_NAME`, `DOCUMENT_NUMBER`, `DOCUMENT_FIRST_NAME`, `DOCUMENT_LAST_NAME`, `DOCUMENT_DOB`, `DOCUMENT_STATE`, `DOCUMENT_FRONT_IMAGE`, `DOCUMENT_BACK_IMAGE`, `verify_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'dddj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 01:47:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_module_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `user_id`, `admin_module_id`, `is_active`, `created_at`, `updated_at`) VALUES
(15, 24, 1, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(16, 24, 0, 0, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(17, 24, 2, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(18, 24, 4, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(19, 24, 6, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(20, 24, 11, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(21, 24, 68, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(22, 24, 73, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(23, 24, 76, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(24, 24, 80, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(25, 24, 81, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(26, 24, 82, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(27, 24, 83, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(28, 24, 84, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(29, 23, 1, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(30, 23, 0, 0, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(31, 23, 2, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(32, 23, 4, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(33, 23, 6, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(34, 23, 11, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(35, 23, 68, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(36, 23, 73, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(37, 23, 76, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(38, 23, 80, 1, '2023-08-21 05:36:55', '2023-08-21 05:36:55'),
(39, 23, 81, 1, '2023-08-21 05:36:55', '2023-08-21 05:36:55'),
(40, 23, 82, 0, '2023-08-21 05:36:55', '2023-08-21 05:36:55'),
(41, 23, 83, 1, '2023-08-21 05:36:55', '2023-08-21 05:36:55'),
(42, 23, 84, 1, '2023-08-21 05:36:55', '2023-08-21 05:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission_actions`
--

CREATE TABLE `user_permission_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_permission_id` int(11) DEFAULT NULL,
  `admin_module_id` int(11) DEFAULT NULL,
  `admin_sub_module_id` int(11) DEFAULT NULL,
  `admin_module_action_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permission_actions`
--

INSERT INTO `user_permission_actions` (`id`, `user_id`, `user_permission_id`, `admin_module_id`, `admin_sub_module_id`, `admin_module_action_id`, `is_active`, `created_at`, `updated_at`) VALUES
(27, 24, 15, 1, 1, 35, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(28, 24, 16, 0, 1, 34, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(29, 24, 17, 2, 44, 1, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(30, 24, 17, 2, 44, 3, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(31, 24, 17, 2, 44, 5, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(32, 24, 17, 2, 44, 2, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(33, 24, 17, 2, 44, 4, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(34, 24, 17, 2, 44, 6, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(35, 24, 18, 4, 3, 37, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(36, 24, 18, 4, 3, 40, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(37, 24, 18, 4, 3, 36, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(38, 24, 18, 4, 3, 38, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(39, 24, 18, 4, 3, 39, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(40, 24, 18, 4, 5, 41, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(41, 24, 18, 4, 5, 46, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(42, 24, 18, 4, 5, 42, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(43, 24, 18, 4, 5, 43, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(44, 24, 18, 4, 5, 44, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(45, 24, 19, 6, 7, 8, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(46, 24, 19, 6, 7, 32, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(47, 24, 19, 6, 9, 20, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(48, 24, 19, 6, 9, 19, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(49, 24, 19, 6, 10, 21, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(50, 24, 20, 11, 14, 28, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(51, 24, 20, 11, 15, 30, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(52, 24, 20, 11, 40, 29, 1, '2023-08-21 05:36:01', '2023-08-21 05:36:01'),
(53, 23, 29, 1, 1, 35, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(54, 23, 30, 0, 1, 34, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(55, 23, 31, 2, 44, 1, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(56, 23, 31, 2, 44, 3, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(57, 23, 31, 2, 44, 5, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(58, 23, 31, 2, 44, 2, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(59, 23, 31, 2, 44, 4, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(60, 23, 31, 2, 44, 6, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(61, 23, 32, 4, 3, 37, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(62, 23, 32, 4, 3, 40, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(63, 23, 32, 4, 3, 36, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(64, 23, 32, 4, 3, 38, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(65, 23, 32, 4, 3, 39, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(66, 23, 32, 4, 5, 41, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(67, 23, 32, 4, 5, 46, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(68, 23, 32, 4, 5, 42, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(69, 23, 32, 4, 5, 43, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(70, 23, 32, 4, 5, 44, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(71, 23, 33, 6, 7, 8, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(72, 23, 33, 6, 7, 32, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(73, 23, 33, 6, 9, 20, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(74, 23, 33, 6, 9, 19, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(75, 23, 33, 6, 10, 21, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(76, 23, 34, 11, 14, 28, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(77, 23, 34, 11, 15, 30, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54'),
(78, 23, 34, 11, 40, 29, 1, '2023-08-21 05:36:54', '2023-08-21 05:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_details_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `get_amount_via` text DEFAULT NULL,
  `status` enum('process','success','reject') NOT NULL DEFAULT 'process',
  `remark` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_requests`
--

INSERT INTO `withdraw_requests` (`id`, `user_id`, `bank_details_id`, `amount`, `get_amount_via`, `status`, `remark`, `created_at`, `updated_at`) VALUES
(5, 262, 80, 199, 'UPI Transfer', 'success', NULL, '2023-08-23 07:05:32', '2023-08-24 04:49:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acls`
--
ALTER TABLE `acls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acl_admin_actions`
--
ALTER TABLE `acl_admin_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battles`
--
ALTER TABLE `battles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battle_histories`
--
ALTER TABLE `battle_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_descriptions`
--
ALTER TABLE `cms_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comissions`
--
ALTER TABLE `comissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_permissions`
--
ALTER TABLE `designation_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_permission_actions`
--
ALTER TABLE `designation_permission_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_actions`
--
ALTER TABLE `email_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template_descriptions`
--
ALTER TABLE `email_template_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee_notifications`
--
ALTER TABLE `marquee_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `users_bank_details`
--
ALTER TABLE `users_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_kyc_details`
--
ALTER TABLE `users_kyc_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permission_actions`
--
ALTER TABLE `user_permission_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acls`
--
ALTER TABLE `acls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `acl_admin_actions`
--
ALTER TABLE `acl_admin_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `battles`
--
ALTER TABLE `battles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `battle_histories`
--
ALTER TABLE `battle_histories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_descriptions`
--
ALTER TABLE `cms_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comissions`
--
ALTER TABLE `comissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designation_permissions`
--
ALTER TABLE `designation_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `designation_permission_actions`
--
ALTER TABLE `designation_permission_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `email_actions`
--
ALTER TABLE `email_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email_template_descriptions`
--
ALTER TABLE `email_template_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marquee_notifications`
--
ALTER TABLE `marquee_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `users_bank_details`
--
ALTER TABLE `users_bank_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users_kyc_details`
--
ALTER TABLE `users_kyc_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_permission_actions`
--
ALTER TABLE `user_permission_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
