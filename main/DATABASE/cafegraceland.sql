SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal_amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `price`, `title`, `quantity`, `subtotal_amount`, `date`, `invoice_number`, `user_id`) VALUES
(1, '40.00', 'Americano', 1, '40.00', '2024-04-21', 'INV-760084', 0),
(2, '45.00', 'Latte', 1, '45.00', '2024-04-21', 'INV-760084', 0),
(3, '50.00', 'Mocha', 1, '50.00', '2024-04-21', 'INV-174394', 2),
(4, '50.00', 'Matcha Latte', 1, '50.00', '2024-04-21', 'INV-741371', 2),
(5, '40.00', 'Cold Brew', 1, '40.00', '2024-04-21', 'INV-982020', 2),
(6, '55.00', 'Shaken Brown Sugar Cold Brew', 1, '55.00', '2024-04-21', 'INV-144116', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'Samantha Grace', 'samantha', 'samantha@cafegraceland.com', 'hellocoffee', '2024-04-18 08:59:41'),
(2, 'admin', 'admin', 'admin@cafegraceland.com', 'coldbrew', '2024-04-18 11:00:40'),
(3, 'sample', 'sample', 'sample@cafegraceland.com', 'hello123', '2024-04-18 11:03:23'),
(4, 'Cat Lady', 'catladyxoxo', 'catlady@gmail.com', 'catsncoffee', '2024-04-19 12:14:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
