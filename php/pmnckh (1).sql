-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 26, 2021 lúc 06:35 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pmnckh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieude` varchar(250) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `status` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `tomtat`, `noidung`, `status`, `cid`, `ngaytao`) VALUES
(1, 'Loãng xương là gì?', 'Bệnh loãng xương, hay còn gọi là bệnh giòn xương hoặc xốp xương, là hiện tượng xương liên tục mỏng dần và mật độ chất trong xương ngày càng thưa dần, điều này khiến xương giòn hơn, dễ tổn thương và dễ bị gãy dù chỉ bị chấn thương nhẹ.\r\n', 'Bệnh loãng xương, hay còn gọi là bệnh giòn xương hoặc xốp xương, là hiện tượng xương liên tục mỏng dần và mật độ chất trong xương ngày càng thưa dần, điều này khiến xương giòn hơn, dễ tổn thương và dễ bị gãy dù chỉ bị chấn thương nhẹ.<br>\r\n\r\nLoãng xương là nguyên nhân chính gây ra gãy xương ở phụ nữ sau mãn kinh và người già. Gãy xương do loãng xương có thể gặp ở bất cứ xương nào, tuy nhiên hay gặp ở xương cột sống, xương đùi, xương cổ tay. Một số xương bị gãy có thể không lành lại được, trong đó xương cột sống và xương đùi là những xương lành lại rất khó khăn, trong hầu hết trường hợp phải phẫu thuật với chi phí tốn kém.<br>\r\n\r\nBệnh loãng xương tiến triển thầm lặng. Thường người bệnh chỉ cảm thấy đau mỏi người không rõ ràng, giảm dần chiều cao, gù vẹo cột sống. Đây là những biểu hiện chỉ được phát hiện sau một thời gian dài. Nhiều trường hợp chỉ phát hiện khi có những biểu hiện gãy xương.<br>\r\n\r\nTình trạng loãng xương sẽ càng trở nặng hơn khi về già. Do độ tuổi này, mật độ xương không đảm bảo đủ mức cho phép để bảo đảm xương cứng chắc như lúc ở tuổi trưởng thành.\r\n<hr style=\"height: 1px; color: rgb(31, 107, 196); background: rgb(31, 107, 196);\">', 0, 0, 0),
(2, 'Phần mềm chẩn đoán loãng xương dành cho ai?', 'The tool is intended for men with non-metastatic prostate cancer who are deciding between conservative and radical management regimes. The tool is not for use in cases where prostate cancer has spread beyond the prostate. The tool is also less well tested and likely to be less reliable in men with very high PSA, high grade group or high stage as very few men with these characteristics were managed with conservative management in our development or validation data.<br>\r\n\r\nNothing can ever tell an individual man exactly what is going to happen to him in the future but this tool will provide a realistic estimate or ‘best guess’ about the potential survival benefits of different treatment options.', 'The tool is intended for men with non-metastatic prostate cancer who are deciding between conservative and radical management regimes. The tool is not for use in cases where prostate cancer has spread beyond the prostate. The tool is also less well tested and likely to be less reliable in men with very high PSA, high grade group or high stage as very few men with these characteristics were managed with conservative management in our development or validation data.<br>\r\n\r\nNothing can ever tell an individual man exactly what is going to happen to him in the future but this tool will provide a realistic estimate or ‘best guess’ about the potential survival benefits of different treatment options.<br>\r\n<p class=\"emphasise\">The web tool is not designed to give clinical advice and all decisions on treatment options must be made in consultation between the patient and a qualified doctor.</p>\r\n<hr style=\"height: 1px; color: rgb(31, 107, 196); background: rgb(31, 107, 196);\">', 0, 0, 0),
(3, 'Cách phần mềm hoạt động', 'This short video may help explain how Predict Prostate works.', '<a href=\"\">This short video</a> may help explain how Predict Prostate works.<br>\r\n\r\nThe estimates that Predict Prostate produces are based on observational data from thousands of men previously diagnosed with non-metastatic prostate cancer from the East of England, UK. It provides the average survival rate for men in the past of similar age and with similar characteristics.<br>\r\n\r\nThese data were then used to help produce estimates of the potential outcomes for men who have prostate cancer now, depending on characteristics about them and their tumour. The model has also been tested among men diagnosed with prostate cancer in Singapore. It has been checked to make sure that the estimates it produces are as accurate as they can be given current nowledge. It is important to note that the model can only give an estimate of what may happen and cannot say with certainty whether an individual patient will survive their cancer or not.<br>\r\n\r\n<a href=\"\">The technical section</a> has more detail on how Predict Prostate was developed and tested.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `title`, `des`, `pid`) VALUES
(1, 'Giới thiệu', '', 0),
(2, 'Tin tức', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `solieu`
--

CREATE TABLE `solieu` (
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` text COLLATE utf8_unicode_ci NOT NULL,
  `Fra-50` text COLLATE utf8_unicode_ci NOT NULL,
  `Fall-12` text COLLATE utf8_unicode_ci NOT NULL,
  `T-Score` int(11) NOT NULL,
  `BMD` int(11) NOT NULL,
  `Densitometer` text COLLATE utf8_unicode_ci NOT NULL,
  `Weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `solieu`
--

INSERT INTO `solieu` (`Name`, `Age`, `Sex`, `Fra-50`, `Fall-12`, `T-Score`, `BMD`, `Densitometer`, `Weight`) VALUES
('Huy', 50, 'Male', '2', '2', 2, 0, 'by DXA GE Lunar', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `matv` int(11) NOT NULL,
  `tentv` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tendn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`matv`, `tentv`, `tendn`, `matkhau`, `email`) VALUES
(1, 'Nguyễn Văn A', 'admin', '123456', 'htu1234@gmail.com'),
(2, 'Nguyễn Văn B', 'admin123', '123456', 'adminhtu@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`matv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `matv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
