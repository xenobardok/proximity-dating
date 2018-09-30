<?php

$db = "mysql:host=localhost;dbname=proxichats";
    $user = "proxichats-admin";
    $pass = "DdvGsF6hN7AA";
    $pdo = new PDO($db, $user, $pass);
    
   ?>

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 30, 2018 at 02:15 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `proxichats`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `user1` varchar(32) NOT NULL,
  `user2` varchar(32) NOT NULL,
  `isBlocked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `chatid` int(11) NOT NULL,
  `sender` varchar(32) NOT NULL,
  `receiver` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`chatid`, `sender`, `receiver`, `message`, `time`) VALUES
(1, 'test', 'test1', 'Hi', '2018-09-30 00:02:46'),
(2, 'test', 'test1', 'Hello', '2018-09-30 00:04:42'),
(3, 'test', 'test1', 'Hello', '2018-09-30 00:06:18'),
(4, 'test', 'test1', 'Oops', '2018-09-30 00:06:44'),
(5, 'test', 'test1', 'Aii', '2018-09-30 00:25:36'),
(6, 'test', 'test1', 'lol', '2018-09-30 00:47:46'),
(7, 'test', 'test1', 'yess', '2018-09-30 01:00:59'),
(8, 'test', 'test1', 'yes', '2018-09-30 01:07:20'),
(9, 'test', 'test1', 'lol', '2018-09-30 01:07:23'),
(10, 'test', 'test1', 'Yesss', '2018-09-30 01:12:06'),
(11, 'test', 'test1', 'jkhhje', '2018-09-30 01:12:07'),
(12, 'test', 'test1', 'bhi', '2018-09-30 01:15:56'),
(13, 'test', 'test1', 'Nope', '2018-09-30 01:16:23'),
(14, 'test', 'test1', 'Yes', '2018-09-30 01:18:05'),
(15, 'test', 'test1', 'Ueser', '2018-09-30 01:18:08'),
(16, 'test', 'test1', 'Why?', '2018-09-30 01:18:12'),
(17, 'test', 'test1', 'Is it true?', '2018-09-30 01:18:16'),
(18, 'test', 'test1', 'I don', '2018-09-30 01:18:38'),
(19, 'test3', 'test', 'Hey', '2018-09-30 01:26:22'),
(20, 'test', 'test3', 'How r u', '2018-09-30 01:26:31'),
(21, 'test3', 'test', 'I am good', '2018-09-30 01:26:35'),
(22, 'test', 'test3', 'So wassup?', '2018-09-30 01:26:52'),
(23, 'test3', 'test', 'All right', '2018-09-30 01:26:56'),
(24, 'test', 'test3', 'don', '2018-09-30 01:28:17'),
(25, 'test', 'test3', 'res', '2018-09-30 01:46:30'),
(26, 'test', 'test3', 'nope', '2018-09-30 01:47:38'),
(27, 'test', 'test3', 'don\'t', '2018-09-30 01:47:43'),
(28, 'test', 'test3', 'yes', '2018-09-30 02:02:53'),
(29, 'test', 'test3', 'don\'\'\'t', '2018-09-30 02:02:56'),
(30, 'test3', 'test', 'hey', '2018-09-30 02:04:24'),
(31, 'test3', 'test', 'I\' working', '2018-09-30 02:04:35'),
(32, 'test', 'test3', 'Heuy', '2018-09-30 02:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` int(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `online` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`, `phone`, `gender`, `longitude`, `latitude`, `status`, `online`) VALUES
('test', 'Shivam Kharga', 'shivam.kharga@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'Male', '', '', '', 0),
('test1', 'Shivam', 'khargas@warhawks.ulm.edu', 'c4ca4238a0b923820dcc509a6f75849b', 2147483647, 'Male', '', '', '', 0),
('test3', 'Jessica Griggs', 'bhandas@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b', 2147483647, 'Female', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`user1`,`user2`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
