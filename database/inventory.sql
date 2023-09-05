
--
-- Database: `inventory`
--

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Miraj', '1', NULL, '2022-12-21 01:47:54'),
(3, 'Tasgaon', '1', NULL, '2022-12-30 22:29:11'),
(4, 'Nandre', '1', NULL, '2022-12-30 22:29:17'),
(5, 'Vasagade', '1', NULL, '2022-12-30 22:29:20'),
(6, 'K-Ekand', '1', NULL, '2022-12-30 22:29:23'),
(7, 'Vita', '0', NULL, NULL),
(8, 'CR', '0', NULL, NULL),
(9, 'Arag', '0', NULL, NULL),
(10, 'Umbraj', '0', NULL, NULL),
(11, 'Rahimatpur', '0', NULL, NULL),
(12, 'Undale', '0', NULL, '2022-09-18 06:51:02'),
(13, 'Patan', '0', NULL, NULL),
(14, 'Sangliwadi', '0', NULL, NULL),
(15, 'Kupwad', '0', NULL, NULL),
(16, 'Maishal', '0', NULL, NULL),
(17, 'Karad', '0', NULL, NULL),
(18, 'Takari', '0', NULL, NULL),
(19, 'Haripur', '0', NULL, NULL),
(20, 'Wanlesswadi', '0', NULL, NULL),
(21, 'Samdoli', '0', NULL, NULL),
(22, 'SANGLI PP', '0', NULL, NULL),
(23, 'Term', '0', NULL, NULL),
(24, 'Tbranchedit', '0', NULL, '2023-04-25 01:08:58');

--
-- Dumping data for table `engineer_master`
--

INSERT INTO `engineer_master` (`id`, `accessid`, `EngineerName`, `Mobile`, `Email`, `Designation`, `status`, `created_at`, `updated_at`) VALUES
(2, '244', 'SNG JV Birendra Thorat', '8623804447', 'birednra@gamil.com', 'TECHNICIAN', 1, NULL, NULL),
(3, '245', 'Ganesh Patil', '9270366402', 'ganesh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(4, '246', 'Sambhaji Gavade', '9271902120', 'sambhajigavade513@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(5, '247', 'PPM Naim Sharikhmasalt', '7385011220', 'naim@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(6, '248', 'MG Vaibhav Tadasare', '9923460999', 'vaibhavt@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(7, '249', 'MG Pravin jadhav', '8485843330', 'pravinj@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(8, '250', 'MG Pradhut Mohite', '7709393760', 'pradhut@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(9, '251', 'MG Mainuddin Mujawar', '9371570502', 'mainuddin@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(10, '252', 'MG Hamid Mulla', '8087336666', 'hamid@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(11, '253', 'TC-CA MG Dilawar Mujawar', '9373792555', 'dilawar@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(12, '254', 'MG Dhanaji Waghmode', '9970550651', 'dhanaji@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(13, '255', 'MG Vitthal Shinghe', '9049616904', 'vitthal@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(14, '256', 'MG Umar Sharik Maslat', '9226804618', 'umar@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(15, '257', 'MG Sharad Devkule', '9270311576', 'sharadd@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(16, '258', 'TC-CA MG Sanjay Nage', '9225827007', 'sanjayn@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(17, '259', 'TC-CA MG Sanjay Mali', '8177841166', 'sanjatm@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(18, '260', 'MG Sanjay jadhav', '8329730472', 'sanjayj@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(19, '261', 'TC-CA Sameer Mushrif', '9766683155', 'sameer@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(20, '262', 'MG Sajid Pathan', '9923241812', 'sajid@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(21, '263', 'MG Milind Patil', '9503957124', 'milindp@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(22, '264', 'MG Balram Gaikwad', '9766338223', 'balgam@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(23, '265', 'Pintu Patil', '8623032995', 'vishal@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(24, '266', 'Sandeep Swami', '9673710072', 'sandeepS@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(25, '267', 'SNG JV Rajendra Teli', '9637168887', 'rajendra@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(26, '268', 'TC-CA Amar Sayyad', '9226739158', 'amar@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(27, '269', 'SNG JV Sukumar Patil', '9372155000', 'sukumar@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(28, '270', 'SNG JV Shashikant Pol', '9371164189', 'shashikant@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(29, '271', 'SNG JV Sharad Patil', '9689711934', 'sharad@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(30, '272', 'SNG JV Sambhaji Khetre', '9371004966', 'sambhaji@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(31, '273', 'TC-CA MG Sachin Vader', '9393951111', 'sachinV@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(32, '274', 'SNG JV Riyaj Khandekar', '9371191747', 'riyaj@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(33, '275', 'SNG JV Ravi Chavan', '9372346333', 'ravi@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(34, '276', 'SNG JV Pramod Bhukate', '8208159998', 'pramod@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(35, '277', 'SNG JV Nitin Shah', '7385830115', 'nitin@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(36, '278', 'SNG JV Milind Suryawanshi', '9326650666', 'milind@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(37, '279', 'SNG JV Dilip Chavan', '8055086396', 'dilip@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(38, '280', 'SNG JV Dada Bhosale', '8484847159', 'dada@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(39, '281', 'SNG JV Santosh Kamble', '9270314000', 'bapu@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(40, '282', 'SNG JV Anil Pawar', '9423267071', 'anilp@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(41, '283', 'CA PPS Arun Gejage', '8788606440', 'arungejage@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(42, '284', 'CA PPM Sharif Pathan', '9922068087', 'sharifpathan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(43, '285', 'CA PPM Sanjay Tambade', '9226658113', 'sanjaytambade@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(44, '286', 'PPS Ashok Gundiwadi', '9096446480', 'ashokgundewadi@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(45, '287', 'CA PPS Avinash Karajgar', '9823782721', 'avinashkarjgar@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(46, '288', 'CA PPM Ratan Kabade', '7744979111', 'ratan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(47, '289', 'TC-CA PPM Ramesh Mendhe', '9921299388', 'ramesjmendhe@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(48, '290', 'CA PPM Raju Vante', '9271563488', 'rajuvante@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(49, '291', 'TC-CA PPM Pratap Kadam', '9226453954', 'pkadam9292@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(50, '292', 'PPM Prasad Yadav', '9270433900', 'prasadyadav@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(51, '293', 'PPM Najir Shaikh', '8624993426', 'najir@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(52, '294', 'PPM Mubharak Desai', '9921342329', 'mubarak@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(53, '295', 'PPM Faruk Kacchi', '9270311600', 'faruk@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(54, '296', 'TC-CA PPM Javed Tamboli', '8668390199', 'javed@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(55, '297', 'CA PPM Dastgir Pathan', '9890911736', 'dastgir@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(56, '298', 'CA PPM Balu Mulla', '7058763835', 'balumulla@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(57, '299', 'CA PPM Amir Pathan', '8208626735', 'amirpathan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(58, '300', 'PPT Raju Awsare', '9561327755', 'rajuawsare@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(59, '301', 'PPT Birudev Hajare', '9096253529', 'birudev@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(60, '302', 'CA PPS Virendra Sihasane', '8830456120', 'virendra@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(61, '303', 'CA PPS Vaibhav Pawar', '8806564462', 'vaibhav@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(62, '304', 'TC-CA PPS Suresh Pawar', '8080627455', 'sp049135@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(63, '305', 'CA PPS Suresh Mendhe', '9405572181', 'suresh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(64, '306', 'CA PPS Sanjay Tunge', '9272109891', 'sanjay@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(65, '307', 'CA PPS Suraj Yadav', '8421659361', 'suraj@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(66, '308', 'CA PPS Sachin Patil', '9272412421', 'sachin@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(67, '309', 'CA PPS Madhu Jadhav', '9271752066', 'madhu@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(68, '310', 'TC-CA MG Irshad Shaikh', '9225222444', 'irshad@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(69, '311', 'Tech Amol Thorat', '9860939740', 'amol9860939740@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(70, '312', 'CA PPS Abhijeet Inamdar', '9272361430', 'abhijeet@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(71, '313', 'Tech Sunil Koli', '9272561266', 'sunilkolisangliwadi3@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(72, '314', 'Tech Ajay Pise', '9604273111', 'ajaypise420@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(73, '315', 'Tech Ashok Sarje', '9604157677', 'ashoksarje375x@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(74, '316', 'Sandeep Fadake', '8668534241', 'sandeep@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(75, '317', 'Tech Balu Mane', '9422668488', 'balu@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(76, '318', 'Tech Sunil Kamble', '9225479913', 'Sunil9225479913@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(77, '319', 'Tech Sagar Pandhare', '9890489629', 'sagar@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(78, '320', 'Pratap Kadam', '9226453654', 'pratap@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(79, '321', 'Tech Pavan Malgave', '7249505557', 'pavanmalgave555@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(80, '322', 'TC-CA Mira Sharikmaslat', '9226742186', '78692mmira@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(81, '323', 'Mehaboob Mulla', '9225837080', 'mehaboob@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(82, '324', 'Tech Gundu Bedage', '7057459779', 'gundu@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(83, '325', 'Aanand Kamble', '8484077464', 'aanand@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(84, '326', 'Tech Rahul Wagh', '9823652277', 'rahulwagh6678@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(85, '327', 'Arun Gejage', '9421722910', 'arun@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(86, '328', 'Tech Kiran Chavan', '7304441947', 'ktc1541990@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(87, '329', 'Tech Santosh More', '9225847098', 'santoshmore@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(88, '330', 'Tech Santosh Sawarde', '8208592225', 'santoshsavarde27@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(89, '331', 'OFC Nasir Shaikh', '9860051400', 'nasir@gmail.com', 'SR TECHNICIAN', 0, NULL, NULL),
(90, '332', 'Tech Bharat Mane', '9225837022', 'manebharat4u@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(91, '333', 'Tech Sunil sonandkar', '9225681234', 'sonandkarsunil@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(92, '334', 'Tech Kuntinath Upadhey', '9284283412', 'kuntinath@gamil.com', 'TECHNICIAN', 0, NULL, NULL),
(93, '336', 'OFC Swapnil Akkiwate', '7219494131', 'swapnil@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(94, '337', 'OFC Ayub Inamdar', '7020308372', 'ayubinamdar579@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(95, '338', 'OFC Chaman Mestri', '9096428181', 'chaman@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(96, '339', 'OFC Aniket Bhosale', '9975997302', 'aniketbhosale6218@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(97, '345', 'Sanjay waghmode', '9270362697', 'Sanjaywaghmode121@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(98, '346', 'PPJ Kalim Shaikh', '9370140634', 'kalimshaikh02101975@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(99, '347', 'PPJ Ajay Wani', '8668324033', 'waniajay566@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(100, '348', 'PPJ Dipak Tayde', '9765634411', 'dipak@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(101, '349', 'PPj Chirag Shaikh', '8378904800', 'chiragshaikh465@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(102, '350', 'PPJ Kishor Thakur', '9726621876', 'imkishor47@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(103, '351', 'PPJ Tushar Kulkarni', '9130577422', 'tushar.9167228408@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(104, '352', 'PPJ Jagannath Gavali', '8329782141', 'Jagannathkgawali1982@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(105, '353', 'PPJ Rahul Morekar', '9021451108', 'rahulm@gmail.com', 'SR TECHNICIAN', 0, NULL, NULL),
(106, '354', 'PPJ Raju Kakade', '9588656721', 'rajuk@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(107, '355', 'PPJ Ram Galapure', '7020939993', 'ram@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(108, '356', 'PPJ Dipak Patil', '8668876276', 'ravip@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(109, '357', 'PPJ Sandeep Marathe', '9960239849', 'sandeepmarsthe@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(110, '358', 'PPJ Satish Gavali', '8080150765', 'gavalisatish58@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(111, '359', 'PPJ Shakti Mahajan', '9370004440', 'shakti@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(112, '360', 'PPJ Sonu Thakur', '8408866299', 'sonu@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(113, '361', 'PPJ Vijay Surve', '8600542322', 'survevijay190@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(114, '362', 'PPJ Vijay Vyas', '8668630894', 'Viju.vyas1@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(115, '363', 'PPJ Latif Shaikh', '9405444786', 'Shaikh786gayas@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(116, '364', 'PPJ Kishor Ghule', '9766625406', 'kishorghule075@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(117, '366', 'Vikas Bhosale', '8421576704', 'vikas@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(118, '367', 'PAL JV Ravindra Chintamani', '9270082601', 'chintaman@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(119, '368', 'PAL JV Ravindra Narayan', '7758010166', 'narayan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(120, '369', 'PAL JV Ravindra Ganesh', '9975955889', 'ganeshravindra@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(121, '370', 'PAL JV Ravindra Mahesh', '9270710741', 'mahesh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(122, '371', 'PAL JV Ravindra Nandu', '9766909971', 'nandu@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(123, '375', 'Akash Waghmare', '9175425394', 'akash@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(124, '376', 'Pravin kambale', '7757090670', 'pravin@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(125, '378', 'Raju gadkari', '7722099920', 'praju4363@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(126, '379', 'SNG JV Birendra Kiran', '8857081005', 'salman@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(127, '380', 'OFC Raju Patil', '8668408747', 'praju43@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(128, '387', 'TC Samir Thakur', '9860841446', 'St908345@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(129, '392', 'Vinayak Hunde', '8390505097', 'hunde@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(130, '393', 'CA Nilesh kale', '9175148753', 'nileshkale@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(131, '394', 'MG SNG Sunil Mane', '9637269580', 'sunilmane@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(132, '395', 'MG SNG Samhuanna Shety', '9527856001', 'SamhuannaShety@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(133, '396', 'Tech Milind Patil', '8788099622', 'patil.milind10@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(134, '397', 'PPS SNG Raju Shaikh', '8421670991', 'rajushaikh@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(135, '398', 'CA PPS Numan Jamadar', '8657774333', 'numan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(136, '399', 'Tech Sukumar Patil', '9225828488', 'patilsukumar1@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(137, '400', 'Asmita Kale', '9022428279', 'kaleasmita@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(138, '402', 'SNG JV Amol Sanjay Gavane Collection', '9511898365', 'ssmmss@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(139, '403', 'PPJ Dinesh Malche', '9511271833', 'malchedinesh307@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(140, '404', 'SNG JV AU Nahid Savali', '7558553837', 'auamolhajare@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(141, '406', 'OFC Manoj Yadav', '9765782063', 'manojyadav@gmail.com', 'SR TECHNICIAN', 0, NULL, NULL),
(142, '407', 'PPS Vinod Katti', '7972748188', 'vinod@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(143, '409', 'ravindra shinde', '8793461004', 'ravindrashinde@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(144, '416', 'Raju Shaikh', '8421670999', 'pappu@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(145, '417', 'PPM Ajay Kadam', '9765392436', 'ajaykadam@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(146, '418', 'Shashi Kore', '8055473411', 'kore@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(147, '419', 'Rahul yamgar', '7666864452', 'Rahulyamgar@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(148, '420', 'TC-CA AU Nahid Mujawar', '9021323555', 'nahid@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(149, '421', 'OFC Ashapak Shaikh', '9175473233', 'AshapakShaikh@gmail.com', 'SR TECHNICIAN', 0, NULL, NULL),
(150, '422', 'JAY OP_4 Kapil Kulakarni', '9309101298', 'kapil@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(151, '423', 'Tech Avinash Kolap', '9284197892', 'avinashkolap@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(152, '424', 'JAY PP Anil Pardesi', '7507317018', 'anil@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(153, '425', 'JAY PP Deepak Patil', '8149950507', 'deepak@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(154, '426', 'JAY PP Girmal Koli', '9021290183', 'girmal@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(155, '427', 'JAY PP Kiran Sadolikar', '8928544422', 'jaykiran@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(156, '428', 'JAY PP Kumar Chougule', '7709751826', 'kumar@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(157, '429', 'JAY PP Prakash Patil', '7775871258', 'prakash@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(158, '430', 'JAY PP Prashant Bhabkar', '9604821500', 'prashant@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(159, '431', 'JAY PP Rahul Kulkarni', '8237111666', 'jayrahul@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(160, '432', 'JAY PP Arun Jankar', '8855915606', 'jayarun@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(161, '433', 'JAY PP Dhananjay Bhosale', '9765623118', 'dhananjay@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(162, '434', 'JAY PP Sanjay Bandgar', '8208724629', 'jaysanjay@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(163, '435', 'JAY PP Sushant Patil', '9763459481', 'sushant@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(164, '436', 'JAY PP Praful Pardeshi', '8007439651', 'praful@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(165, '437', 'Jaysingpur Office SLA1', '9970884800', 'JaysingpurOffice@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(166, '439', 'MB Riyaz Kotwal', '7248962345', 'riyazkotwal@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(167, '443', 'Upadhey Savali', '9049645182', 'amolupadhey@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(168, '444', 'Nikhil Parmar', '8788512472', 'nikhil@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(169, '446', 'SNG JV Amol Suresh Patil', '9860682001', 'sureshpatil@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(170, '447', 'Karad Akshay Thorat', '8275455990', 'AkshayThorat@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(171, '448', 'Karad Jayawant Khabale', '9823147741', 'JayawantKhabale@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(172, '449', 'Karad Nitin Shah', '9420462221', 'NitinShah@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(173, '450', 'Karad Rajesh Shotri', '9422405925', 'RajeshShotri@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(174, '451', 'Karad Rohan Chavan', '7721823222', 'RohanChavan@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(175, '452', 'Karad Sachin Bhise', '9881813433', 'SachinBhise@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(176, '453', 'Karad Shivaji Surve', '7410171111', 'ShivajiSurve@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(177, '454', 'PPM Imtiyaz Kotwal', '8421825583', 'Imtiyaz@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(178, '455', 'AU Tech Rahim Inamdar', '8055965054', 'rahim@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(179, '456', 'PPM Deepak Jadhav', '7448080490', 'deepak1@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(180, '457', 'Najima Jamadar FC', '9168914567', 'najima.jamadar@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(181, '459', 'CA PPM Asif Sharikmaslat', '8329378692', 'asif@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(182, '460', 'CA PPM Ajay Kodole', '7040079411', 'ajaykodole@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(183, '463', 'CA PPM Asif Shaikh', '8080142093', 'asifshaikh@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(184, '464', 'Tech Dhiraj Londe', '8421774425', 'dhiraj@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(185, '465', 'Tech Sandesh Vadd', '7038592622', 'sandeshvadd@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(186, '466', 'CA Salim Shaikh', '9371142143', 'salim@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(187, '467', 'DO Sagar Korde', '9850488400', 'korde3009@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(188, '468', 'OFC Atul Sisal', '7219583203', 'atulsisal2000@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(189, '469', 'Deshmukh', '9637314007', 'Deshmukh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(190, '470', 'Tech Gautam Kamble', '8421950678', 'gautam@gmail.com', 'TECHNICIAN', 0, NULL, NULL),
(191, '473', 'Tech Prasanna', '9665822113', 'prasanna@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(192, '481', 'Microscan Sagar Sonawane', '9503634030', 'sagarns1988@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(193, '482', 'Tech AU Shubham Londhe', '7030698448', 'shubhamlondon130@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(194, '483', 'CA PPS Suhel karadgekar', '9168428915', 'suhel@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(195, '485', 'CA PPS Akram Shaikh', '8087932471', 'akram@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(196, '490', 'Sandesh Kadam', '9011025690', 'sandeshkadam@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(197, '491', 'Rajendra Teli', '9834788084', 'RajendraTeli@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(198, '492', 'Riyaz Shikalgar', '7020716211', 'riyaz@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(199, '493', 'Incharge Pankaj Pise', '9762407472', 'pankajpise77@gmail.com', 'FLD INCHARGE', 1, NULL, NULL),
(200, '494', 'Incharge Sanjay Mali', '9225750300', 'krsanjaymal10@gmail.com', 'FLD INCHARGE', 1, NULL, NULL),
(201, '495', 'TC-CA Vita Imran', '8483824422', 'Imran@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(202, '496', 'Internet Sachin Raje', '7822928524', 'sachinraje1676@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(203, '497', 'CA PPS Vishwajit kalakutagi', '7414921165', 'vishwajit@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(204, '499', 'PPJ Vinod Patil', '9922022577', 'patil.vinod9922@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(205, '501', 'Microscan Varun Kunthe', '7218350614', 'varunkhunte3@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(206, '502', 'Mircoscan Akash Kalgutagi', '7666610768', 'akashkalkutgi711@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(207, '503', 'Microscan Akshay Koli', '9021909935', 'koliakshay1545@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(208, '504', 'Microscan CA Ujef Saudagar', '8657948703', 'ujefsaudagar453@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(209, '505', 'DO Chetan Londhe', '9370859922', 'chetanlondhe188@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(210, '506', 'MS DO Sagar Kore', '9665329360', 'skore8262@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(211, '507', 'DO Omkar Kalal', '9503924767', 'omkarkalal59@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(212, '508', 'DO Abhishek Dave', '9096674372', 'abhishekdave906@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(213, '509', 'DO Adarsh Madrasi', '7038469041', 'madrasiaadarsh@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(214, '510', 'DO Prasan Gurav', '8530645809', 'prasanngurav580@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(215, '511', 'DO Prathmesh Kalgutagi', '7410157404', 'prathameshkalkutgi45@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(216, '512', 'DO Balaji Kalgutagi', '7558536460', 'kalgutagibalaji@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(217, '513', 'DO Vinayak Panhalkar', '7975858545', 'vinayakpanhlkar474@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(218, '521', 'Jayram Ghadage', '9765655150', 'jayramghadage201@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(219, '523', 'OFC Nitin Nilegavkar', '9373934498', 'nitinnilegavkar@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(220, '524', 'CA PPM SAMIR MALIDWA;E', '9011766451', 'SAMIR@GMAIL.COM', 'TECHNICIAN', 1, NULL, NULL),
(221, '525', 'PLS PP Rushikesh', '8766722928', 'rushikesh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(222, '526', 'Tech Dadaso Sawant', '7666331661', 'dadaso@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(223, '527', 'mahadev', '7722099919', 'mahadeosmc@gmail.com', 'SR TECHNICIAN', 1, NULL, NULL),
(224, '530', 'Tech Satish Patil', '9309157253', 'satish@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(225, '533', 'Microscan Saurabh Kalgutgi', '9579767069', 'Kalkutgisourabh@gmail.com', 'TECHNICIAN', 1, NULL, NULL),
(226, '534', 'Tech Atul Shinde', '9518732512', 'atulshinde9150@gmail.com', 'TECHNICIAN', 1, NULL, NULL);

--
-- Dumping data for table `inward_master`
--

INSERT INTO `inward_master` (`id`, `material_id`, `material_description`, `supplier`, `opening_stock`, `received`, `return`, `closing_stock`, `reorder`, `rate`, `amount`, `receivedon`, `status`, `image`, `receiptno`, `created_at`, `updated_at`, `transportation`, `finished`) VALUES
(1, '1', 'xxx', '1', '-142', '300', NULL, NULL, NULL, '12', '3600', '2022-12-23', '1', '', 'xxx', '2022-12-25 15:53:38', '2022-12-25 15:53:38', '', 0),
(2, '1', 'xxx', '1', '158', '200', '21', '337', NULL, '23', '4117', '2022-12-27', '1', NULL, 'xyz', '2022-12-27 08:58:47', '2022-12-27 08:58:47', '', 0),
(3, '1', 'xxx', '1', '358', '300', '18', '640', NULL, '23', '6486', '2022-12-27', '1', NULL, '123', '2022-12-27 09:05:06', '2022-12-27 09:05:06', '', 0),
(4, '1', '123', '1', '658', '302', '60', '900', NULL, '12', '2904', '2022-12-27', '1', NULL, '234', '2022-12-27 09:10:52', '2022-12-27 09:10:52', '', 0),
(5, '1', 'xxx', '1', '960', '360', '120', '1200', '300', '23', '5520', '2022-12-27', '1', NULL, '456', '2022-12-27 09:15:24', '2022-12-27 09:15:24', '', 0),
(6, '1', 'xxx', '1', '-173', '200', NULL, '27', NULL, '12', '2400', '2022-12-27', '1', '1672140644.png', 'xxxx', '2022-12-27 11:21:21', '2022-12-27 06:00:44', '', 0),
(7, '13', '1 Tap off', '5', 'undefined', '100', '0', 'NaN', '0', '5', '500', '2022-12-31', '1', NULL, '501', '2022-12-31 04:17:33', '2022-12-31 04:17:33', '', 0),
(8, '14', '2 Tap off', '5', 'undefined', '100', '0', 'NaN', '0', '5', '500', '2022-12-31', '1', NULL, '502', '2022-12-31 04:33:56', '2022-12-31 04:33:56', '', 0),
(9, '1', 'connector', '5', '1520', '0', '5', '1515', '0', '0', '0', '2023-02-01', '1', NULL, '1', '2023-02-01 15:46:41', '2023-02-01 15:46:41', '0', 0),
(10, '1', 'RG 11 descp', '4', '1520', '45', '2', '1563', '2', '12', '526', '2023-04-24', '1', '1682405150.png', '123456', '2023-04-25 06:45:50', '2023-04-25 06:45:50', '10', 0),
(11, '4', 'RG 11 Copper descp', '5', '0', '100', '0', '100', '0', '100', '10000', '2023-04-27', '1', '1682580883.png', '1234566', '2023-04-27 07:34:43', '2023-04-27 07:34:43', '0', 0),
(12, '1', 'RG 11 wire Finolex', '5', '1465', '100', '10', '1555', '10', '10', '905', '2023-04-27', '1', '1682592476.png', '678123', '2023-04-27 10:47:56', '2023-04-27 10:47:56', '5', 0),
(13, '1', NULL, '4', '1565', '100', '10', '1655', '10', '10', '910', '2023-04-27', '1', '1682592645.png', '667236', '2023-04-27 10:50:45', '2023-04-27 10:50:45', '10', 0),
(14, '11', NULL, '5', '0', '100', '20', '80', '20', '10', '802', '2023-04-27', '1', '1682592928.png', '56234', '2023-04-27 10:55:28', '2023-04-27 10:55:28', '2', 0),
(15, '1', NULL, 'Select supplier', '1665', '120', NULL, '1785', NULL, '10', '1200', '2023-04-27', '1', '1682595812.png', '645678', '2023-04-27 11:43:32', '2023-04-27 11:43:32', '0', 0),
(16, '1', NULL, '4', '1785', '100', NULL, '1885', NULL, '10', '1000', '2023-04-27', '1', '1682596006.png', '456736', '2023-04-27 11:46:46', '2023-04-27 11:46:46', '0', 0),
(17, '1', NULL, '4', '1885', '200', NULL, '2085', NULL, '10', '2000', '2023-04-27', '1', '1682596171.png', '26345', '2023-04-27 11:49:31', '2023-04-27 11:49:31', '0', 0),
(18, '1', NULL, '4', '2085', '200', '0', '2285', '0', '10', '2000', '2023-04-27', '1', '1682599292.png', '16257', '2023-04-27 12:41:32', '2023-04-27 12:41:32', '0', 0);
