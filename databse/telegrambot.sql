-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 21, 2015 at 09:17 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TelegramBot`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_configuration`
--

CREATE TABLE `app_configuration` (
  `id_app` int(11) NOT NULL,
  `api_id` int(11) NOT NULL COMMENT 'App api_id:',
  `api_hash` varchar(100) NOT NULL COMMENT 'App api_hash:',
  `app_title` varchar(250) NOT NULL COMMENT 'App title:',
  `short_name` varchar(100) NOT NULL COMMENT 'Short name:',
  `gcm_api_key` varchar(100) NOT NULL COMMENT 'GCM API key:',
  `test_configuration` varchar(50) NOT NULL COMMENT 'Test configuration:',
  `production_configuration` varchar(50) NOT NULL COMMENT 'Production configuration:',
  `public_keys` text NOT NULL COMMENT 'Public keys:',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='All credentials and stuff from the Telegram application, at the moment you can just have one application per Telegram account(Mobile number). ';

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `idAudio` int(11) NOT NULL COMMENT 'This object represents an audio file (voice note).',
  `file_id` varchar(45) NOT NULL COMMENT 'Unique identifier for this file',
  `duration` varchar(45) NOT NULL COMMENT 'Duration of the audio in seconds as defined by sender',
  `mime_type` varchar(45) DEFAULT NULL COMMENT 'Optional. MIME type of the file as defined by sender',
  `file_size` varchar(45) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`idAudio`, `file_id`, `duration`, `mime_type`, `file_size`, `id_user`, `file_name`) VALUES
(1, '1', '1', '1', '1', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id_bot` int(11) NOT NULL COMMENT 'unique id for the bot.',
  `name` varchar(100) NOT NULL COMMENT 'bot''s name.',
  `username` varchar(100) NOT NULL COMMENT 'Username. It must end in *bot*. Example: TetrisBot or tetris_bot.',
  `description` varchar(512) DEFAULT NULL COMMENT 'bot''s description, a short text of up to 512 characters',
  `about` varchar(120) DEFAULT NULL COMMENT 'bot''s about info, an even shorter text of up to 120 characters. Users will see this text on the bot''s profile page. When they share your bot with someone, this text will be sent together with the link.',
  `bot_picture` int(11) DEFAULT NULL COMMENT 'bot‘s profile pictures. It’s always nice to put a face to a name.',
  `join_groups` tinyint(1) NOT NULL COMMENT 'join groups? determines whether your bot can be added to groups or not. Any bot must be able to process private messages, but if your bot was not designed to work in groups, you can disable this.',
  `privacy` tinyint(1) NOT NULL COMMENT 'Privacy, determines which messages your bot will receive when added to a group. With privacy mode disabled, the bot will receive all messages. We recommend leaving privacy mode enabled.',
  `deletebot` tinyint(1) NOT NULL COMMENT 'deletes your bot and frees its username.',
  `http_token` varchar(100) DEFAULT NULL COMMENT 'Token given by the botfather to recieve and send messages.',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id_bot`, `name`, `username`, `description`, `about`, `bot_picture`, `join_groups`, `privacy`, `deletebot`, `http_token`, `id_user`) VALUES
(1, 'MyFreeCamsBot', 'MyFreeCamsBot', 'To see alice', 'To see alice', 1, 1, 1, 0, 'hola', 1),
(2, '2', '2', '2', '2', 2, 2, 2, 2, '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `id_command` int(11) NOT NULL,
  `command_name` varchar(100) NOT NULL COMMENT 'Name of the command:',
  `command_value` varchar(50) NOT NULL COMMENT 'Command, should start with /',
  `argument` varchar(100) NOT NULL COMMENT 'Argument of the command. just one argument per command:',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This tables contains the commands that any bot could use. /start /help /cancel exist in any bot by default.';

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(11) NOT NULL COMMENT 'This object represents a phone contact.',
  `phone_number` varchar(100) NOT NULL COMMENT 'Contact''s phone number',
  `first_name` varchar(100) NOT NULL COMMENT 'Contact''s first name',
  `last_name` varchar(100) DEFAULT NULL COMMENT 'Optional. Contact''s last name',
  `user_id` int(11) DEFAULT NULL COMMENT 'Optional. Contact''s user identifier in Telegram',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `phone_number`, `first_name`, `last_name`, `user_id`, `id_user`) VALUES
(1, '2', '2', '2', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `idDocument` int(11) NOT NULL COMMENT 'This object represents a general file (as opposed to photos and audio files).',
  `file_id` varchar(45) NOT NULL COMMENT 'Unique file identifier',
  `thumb` int(11) DEFAULT NULL COMMENT 'Document thumbnail as defined by sender',
  `file_name` text COMMENT 'Optional. Original filename as defined by sender',
  `mime_type` text COMMENT 'Optional. MIME type of the file as defined by sender',
  `file_size` int(11) DEFAULT NULL COMMENT 'Optional. File size',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_rules`
--

CREATE TABLE `file_rules` (
  `id_file_rules` int(11) NOT NULL,
  `id_file` int(11) NOT NULL COMMENT 'List will appear: File,Audio, Image, Video, Sticker Location AND Max ',
  `id_action` int(11) NOT NULL COMMENT 'Send message (Text field pops up), Send file (File fild pops up) -> List with actions',
  `id_next_rule` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `concat` text COMMENT 'The concatenation of rules, users, locations, size, etc.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Rules that will be executed when the bot receives a file.';

-- --------------------------------------------------------

--
-- Table structure for table `force_reply`
--

CREATE TABLE `force_reply` (
  `idForeceReply` int(11) NOT NULL,
  `force_reply` tinyint(1) NOT NULL COMMENT 'Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply''',
  `selective` tinyint(1) NOT NULL COMMENT 'Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot''s message is a reply (has reply_to_message_id), sender of the original message.',
  `id_user` int(11) NOT NULL,
  `force_reply_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot‘s message and tapped ’Reply''). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.';

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

CREATE TABLE `groupchat` (
  `idGroupChat` int(11) NOT NULL COMMENT 'Unique identifier for this group chat',
  `title` varchar(45) DEFAULT NULL COMMENT 'Group name',
  `id_user` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_admins`
--

CREATE TABLE `group_admins` (
  `id_group` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `idLocation` int(11) NOT NULL COMMENT 'This object represents a point on the map.',
  `longitude` float NOT NULL COMMENT 'Longitude as defined by sender',
  `latitude` float NOT NULL COMMENT 'Latitude as defined by sender',
  `id_user` int(11) NOT NULL,
  `location_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message_id` int(11) NOT NULL COMMENT 'Unique message identifier',
  `from_user` int(11) NOT NULL COMMENT 'Sender',
  `date` int(11) NOT NULL COMMENT 'Date the message was sent in Unix time',
  `chat` int(11) NOT NULL COMMENT 'User or GroupChat\nConversation the message belongs to — user in case of a private message, GroupChat in case of a group',
  `forward_from` int(11) NOT NULL COMMENT 'Optional. For forwarded messages, sender of the original message',
  `forward_date` int(11) NOT NULL COMMENT 'Optional. For forwarded messages, date the original message was sent in Unix time',
  `reply_to_message` int(11) NOT NULL COMMENT 'Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.',
  `text` text COMMENT 'Optional. For text messages, the actual UTF-8 text of the message.',
  `audio` int(11) DEFAULT NULL COMMENT 'Optional. Message is an audio file, information about the file.',
  `document` text COMMENT 'Optional. Message is a general file, information about the file',
  `photo` int(11) DEFAULT NULL COMMENT 'Optional. Message is a photo, available sizes of the photo',
  `sticker` int(11) DEFAULT NULL COMMENT 'Optional. Message is a sticker, information about the sticker',
  `video` int(11) DEFAULT NULL COMMENT 'Optional. Message is a video, information about the video',
  `caption` varchar(250) DEFAULT NULL COMMENT 'Optional. Caption for the photo or video',
  `contact` int(11) DEFAULT NULL COMMENT 'Optional. Message is a shared contact, information about the contact',
  `location` int(11) DEFAULT NULL COMMENT 'Optional. Message is a shared location, information about the location',
  `new_chat_participant` int(11) DEFAULT NULL COMMENT 'Optional. A new member was added to the group, information about them (this member may be bot itself)',
  `left_chat_participant` int(11) DEFAULT NULL COMMENT 'Optional. A member was removed from the group, information about them (this member may be bot itself)',
  `new_chat_title` text COMMENT 'Optional. A group title was changed to this value',
  `new_chat_photo` int(11) DEFAULT NULL COMMENT 'Optional. A group photo was change to this value',
  `delete_chat_photo` tinyint(1) DEFAULT NULL COMMENT 'Optional. Informs that the group photo was deleted',
  `group_chat_created` tinyint(1) DEFAULT NULL COMMENT 'Optional. Informs that the group has been created',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photosize`
--

CREATE TABLE `photosize` (
  `idPhotoSize` int(11) NOT NULL COMMENT 'This object represents one size of a photo or a file / sticker thumbnail.',
  `file_id` varchar(45) NOT NULL COMMENT 'Unique identifier for this file',
  `width` int(11) NOT NULL COMMENT 'Photo width',
  `height` int(11) NOT NULL COMMENT 'Photo height',
  `file_size` int(11) DEFAULT NULL COMMENT 'Optional. File size',
  `id_user` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replykeyboardhide`
--

CREATE TABLE `replykeyboardhide` (
  `idReplyKeyboardHide` int(11) NOT NULL COMMENT 'Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (seeReplyKeyboardMarkup).',
  `hide_keyboard` tinyint(1) NOT NULL COMMENT 'Requests clients to hide the custom keyboard',
  `selective` tinyint(1) DEFAULT NULL COMMENT 'Optional. Use this parameter if you want to hide keyboard for specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot''s message is a reply (has reply_to_message_id), sender of the original message.\n\nExample: A user votes in a poll, bot returns confirmation message in reply to the vote and hides keyboard for that user, while still showing the keyboard with poll options to users who haven''t voted yet.',
  `id_user` int(11) NOT NULL,
  `reply_keyboard_hide_name` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replykeyboardmarkup`
--

CREATE TABLE `replykeyboardmarkup` (
  `idReplyKeyboardMarkup` int(11) NOT NULL COMMENT 'Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (seeReplyKeyboardMarkup).',
  `keyboard` text COMMENT 'Array of button rows, each represented by an Array of Strings',
  `resize_keyboard` tinyint(1) DEFAULT NULL COMMENT 'Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app''s standard keyboard.',
  `one_time_keyboard` tinyint(1) DEFAULT NULL COMMENT 'Optional. Requests clients to hide the keyboard as soon as it''s been used. Defaults to false.',
  `selective` tinyint(1) DEFAULT NULL COMMENT 'Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot''s message is a reply (has reply_to_message_id), sender of the original message.\n\nExample: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language. Other users in the group don’t see the keyboard.',
  `id_user` int(11) NOT NULL,
  `keyboard_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replykeyboardmarkup`
--

INSERT INTO `replykeyboardmarkup` (`idReplyKeyboardMarkup`, `keyboard`, `resize_keyboard`, `one_time_keyboard`, `selective`, `id_user`, `keyboard_name`) VALUES
(0, NULL, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sticker`
--

CREATE TABLE `sticker` (
  `idSticker` int(11) NOT NULL COMMENT 'This object represents a sticker.',
  `file_id` varchar(45) NOT NULL COMMENT 'Unique identifier for this file',
  `width` int(11) NOT NULL COMMENT 'Sticker width',
  `height` int(11) NOT NULL COMMENT 'Sticker height',
  `thumb` int(11) DEFAULT NULL COMMENT 'Sticker thumbnail in .webp or .jpg format',
  `file_size` int(11) DEFAULT NULL COMMENT 'Optional. File size',
  `id_user` int(11) NOT NULL,
  `sticker_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `telegram_application`
--

CREATE TABLE `telegram_application` (
  `id_application` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `key_application` varchar(100) NOT NULL,
  `hash_application` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To be registered as a new api.';

-- --------------------------------------------------------

--
-- Table structure for table `telegram_user`
--

CREATE TABLE `telegram_user` (
  `id_telegram_user` int(11) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `cellphone` varchar(35) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Allows to login and also to login into telegram to create bots etc.';

-- --------------------------------------------------------

--
-- Table structure for table `text_rules`
--

CREATE TABLE `text_rules` (
  `id_text_rule` int(11) NOT NULL,
  `command` int(11) NOT NULL COMMENT 'List of commands, populated from the command table.',
  `recieved_message` int(11) NOT NULL COMMENT 'The message from the table.',
  `type` varchar(50) NOT NULL COMMENT 'Equals different containts < > >= <= between (Fileds text popup).',
  `action` int(11) NOT NULL COMMENT 'Send message (Text field pops up), Send file (File fild pops up).',
  `id_next_rule` int(11) DEFAULT NULL COMMENT 'id of the next rule, could be empty.',
  `id_user` int(11) NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `concat` text COMMENT 'The concatenation of rules, users, date, etc.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL COMMENT 'Check pyramid level.',
  `group_id` int(11) NOT NULL COMMENT 'Id of the admin group.',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `level`, `group_id`, `avatar`) VALUES
(1, 'gogl92', 'exWCoRN-5aCInZuutoSQedaO8pySv790', '$2y$13$OylBn.G6Bhi3oCo0Kh7F/.Tyln.URyBtfKnaU7tYv1B1GAf.M6ifq', NULL, 'luisarmando1234@gmail.com', 10, 1435529837, 1435529837, 0, 0, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `userprofilephotos`
--

CREATE TABLE `userprofilephotos` (
  `idUserProfilePhotos` int(11) NOT NULL COMMENT 'This object represent a user''s profile pictures.',
  `total_count` int(11) NOT NULL COMMENT 'Total number of profile pictures the target user has',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofilephotos_photos`
--

CREATE TABLE `userprofilephotos_photos` (
  `idUserProfilePhotos` int(11) NOT NULL,
  `PhotoSize_idPhotoSize` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `idVideo` int(11) NOT NULL COMMENT 'This object represents a video file.',
  `file_id` varchar(45) NOT NULL COMMENT 'Unique identifier for this file',
  `width` int(11) NOT NULL COMMENT 'Video width as defined by sender',
  `height` int(11) NOT NULL COMMENT 'Video height as defined by sender',
  `duration` int(11) NOT NULL COMMENT 'Duration of the video in seconds as defined by sender',
  `thumb` int(11) DEFAULT NULL COMMENT 'Video thumbnail',
  `mime_type` varchar(100) DEFAULT NULL COMMENT 'Optional. Mime type of a file as defined by sender',
  `file_size` int(11) DEFAULT NULL COMMENT 'Optional. File size',
  `id_user` int(11) NOT NULL,
  `video_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webhook`
--

CREATE TABLE `webhook` (
  `idWebohook` int(11) NOT NULL,
  `idBot` int(11) NOT NULL,
  `webhook_hash` varchar(45) NOT NULL,
  `absolute_url` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webhook`
--

INSERT INTO `webhook` (`idWebohook`, `idBot`, `webhook_hash`, `absolute_url`) VALUES
(1, 1, 'vjndsf22jkdfn', 'https://www.promoshots.com.mx/TelegramBot/vendor/TelegramBot/'),
(2, 2, 'cnj8349djoe', 'https://www.promoshots.com.mx/TelegramBot/vendor/TelegramBot/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_configuration`
--
ALTER TABLE `app_configuration`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`idAudio`);

--
-- Indexes for table `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`id_bot`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_command`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`idDocument`);

--
-- Indexes for table `file_rules`
--
ALTER TABLE `file_rules`
  ADD PRIMARY KEY (`id_file_rules`);

--
-- Indexes for table `force_reply`
--
ALTER TABLE `force_reply`
  ADD PRIMARY KEY (`idForeceReply`);

--
-- Indexes for table `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`idGroupChat`);

--
-- Indexes for table `group_admins`
--
ALTER TABLE `group_admins`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idLocation`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `photosize`
--
ALTER TABLE `photosize`
  ADD PRIMARY KEY (`idPhotoSize`);

--
-- Indexes for table `replykeyboardhide`
--
ALTER TABLE `replykeyboardhide`
  ADD PRIMARY KEY (`idReplyKeyboardHide`);

--
-- Indexes for table `replykeyboardmarkup`
--
ALTER TABLE `replykeyboardmarkup`
  ADD PRIMARY KEY (`idReplyKeyboardMarkup`);

--
-- Indexes for table `sticker`
--
ALTER TABLE `sticker`
  ADD PRIMARY KEY (`idSticker`);

--
-- Indexes for table `telegram_application`
--
ALTER TABLE `telegram_application`
  ADD PRIMARY KEY (`id_application`);

--
-- Indexes for table `telegram_user`
--
ALTER TABLE `telegram_user`
  ADD PRIMARY KEY (`id_telegram_user`);

--
-- Indexes for table `text_rules`
--
ALTER TABLE `text_rules`
  ADD PRIMARY KEY (`id_text_rule`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofilephotos`
--
ALTER TABLE `userprofilephotos`
  ADD PRIMARY KEY (`idUserProfilePhotos`);

--
-- Indexes for table `userprofilephotos_photos`
--
ALTER TABLE `userprofilephotos_photos`
  ADD PRIMARY KEY (`idUserProfilePhotos`,`PhotoSize_idPhotoSize`),
  ADD KEY `fk_UserProfilePhotos_has_PhotoSize_PhotoSize1_idx` (`PhotoSize_idPhotoSize`),
  ADD KEY `fk_UserProfilePhotos_has_PhotoSize_UserProfilePhotos_idx` (`idUserProfilePhotos`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idVideo`);

--
-- Indexes for table `webhook`
--
ALTER TABLE `webhook`
  ADD PRIMARY KEY (`idWebohook`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `idAudio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents an audio file (voice note).',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bot`
--
ALTER TABLE `bot`
  MODIFY `id_bot` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id for the bot.',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents a phone contact.',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `idDocument` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents a general file (as opposed to photos and audio files).';
--
-- AUTO_INCREMENT for table `file_rules`
--
ALTER TABLE `file_rules`
  MODIFY `id_file_rules` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `force_reply`
--
ALTER TABLE `force_reply`
  MODIFY `idForeceReply` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `idGroupChat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for this group chat';
--
-- AUTO_INCREMENT for table `group_admins`
--
ALTER TABLE `group_admins`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `idLocation` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents a point on the map.';
--
-- AUTO_INCREMENT for table `photosize`
--
ALTER TABLE `photosize`
  MODIFY `idPhotoSize` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents one size of a photo or a file / sticker thumbnail.';
--
-- AUTO_INCREMENT for table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `idSticker` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents a sticker.';
--
-- AUTO_INCREMENT for table `telegram_application`
--
ALTER TABLE `telegram_application`
  MODIFY `id_application` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `text_rules`
--
ALTER TABLE `text_rules`
  MODIFY `id_text_rule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userprofilephotos`
--
ALTER TABLE `userprofilephotos`
  MODIFY `idUserProfilePhotos` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represent a user''s profile pictures.';
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This object represents a video file.';
--
-- AUTO_INCREMENT for table `webhook`
--
ALTER TABLE `webhook`
  MODIFY `idWebohook` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `userprofilephotos_photos`
--
ALTER TABLE `userprofilephotos_photos`
  ADD CONSTRAINT `fk_UserProfilePhotos_has_PhotoSize_PhotoSize1` FOREIGN KEY (`PhotoSize_idPhotoSize`) REFERENCES `photosize` (`idPhotoSize`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UserProfilePhotos_has_PhotoSize_UserProfilePhotos` FOREIGN KEY (`idUserProfilePhotos`) REFERENCES `userprofilephotos` (`idUserProfilePhotos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
