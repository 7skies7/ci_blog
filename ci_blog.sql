-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 09:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_comments`
--

CREATE TABLE IF NOT EXISTS `ci_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ci_comments`
--

INSERT INTO `ci_comments` (`id`, `user_id`, `post_id`, `post_comment`, `created_at`, `updated_at`) VALUES
(1, 8, 2, 'This is the first comment.', '2017-08-06 14:31:39', '2017-08-07 14:31:39'),
(2, 8, 2, 'This is the second comment.', '2017-08-07 14:31:51', '2017-08-07 14:31:51'),
(3, 2, 2, 'First comments', '2017-08-07 18:03:45', '2017-08-07 18:03:45'),
(4, 7, 3, 'First comment for this post', '2017-08-07 18:10:52', '2017-08-07 18:10:52'),
(5, 2, 7, 'This is the first comment for form post by admin', '2017-08-07 18:56:07', '2017-08-07 18:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `ci_post`
--

CREATE TABLE IF NOT EXISTS `ci_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_desc` text NOT NULL,
  `post_author` text NOT NULL,
  `post_image` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `soft_delete` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ci_post`
--

INSERT INTO `ci_post` (`id`, `post_title`, `post_desc`, `post_author`, `post_image`, `post_date`, `soft_delete`) VALUES
(2, 'Codeigniter First steps ', '<h1>Initial steps with codeigniter.</h1>\r\n<p>Download codeigniter from the website, extract the folder and thats it. Done with installation</p>\r\n<p>To view the codeigniter website visit the link as <a href="../../../foldername">http://localhost/foldername</a></p>\r\n<p>If you see the welcome message, then you have successfully set up the&nbsp; codeigniter.</p>\r\n<p>&nbsp;</p>', '2', '1501944418cute-girly-cool-facebook-timeline-cover-photos-99.jpg', '2017-08-30 18:30:00', 0),
(3, 'Lets Build A Blog Using Codeigniter', '<h2>Learning codeigniter by building a blog.</h2>\r\n<ul>\r\n<li>A blog usually contains posts. Posts can viewed, created, edited and deleted i.e CRUD.</li>\r\n<li>A post will also include post image and a editor to edit the content of description.</li>\r\n<li>For editor we will be using free version of TinyMCE.</li>\r\n<li>Building blocks of codeigniter.\r\n<ul style="list-style-type: square;">\r\n<li>Controller : Post controller will be used to get data from model and pass it to the view.</li>\r\n<li>Model: Post model will be used to connect database and get data table from the table using queries and parameters passed by the controller.</li>\r\n<li>View: View will load the end result to the user with all the post data and post styling.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '8', 'default.jpg', '2017-08-30 18:30:00', 0),
(4, 'CodeIgniter Autoload', '<h2>How to load the required files and helpers in codeigniter.</h2>\r\n<ul>\r\n<li>Autoload is a file where we define all the model, libraries, helpers, packages, drivers required by the application when loading.</li>\r\n<li>Autoload file can be found in the config folder with the name database.</li>\r\n<li>For our blog application, we required the following:</li>\r\n</ul>\r\n<ol style="list-style-type: lower-alpha;">\r\n<li>Libraries : Database and session library</li>\r\n<li>Helper: Url and File helper</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '8', 'default.jpg', '2017-08-21 18:30:00', 0),
(5, 'Codeigniter Model', '<h2>What is a Model ?</h2>\r\n<ul>\r\n<li>A model is used to connect to the database and perform certain queries.</li>\r\n<li>A model class extends the codeigniter model class CI_model which contains the predefined methods that we can use while quering the database.</li>\r\n<li>Before connecting to database we have to load the database library without loading we wont be able to connect and query the data. We can load the library in the construct function of the model class to aboid loading it multiple times. Below is the code to load the database library from model.</li>\r\n</ul>\r\n<p><code>&nbsp;&nbsp; public function __construct()</code></p>\r\n<p><code>&nbsp; {</code></p>\r\n<p><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;load-&gt;database();</code></p>\r\n<p><code>&nbsp;&nbsp; }</code></p>\r\n<ul>\r\n<li>&nbsp;<code> TO connect to the database we will have to configure the settings in database file in the config folder.</code></li>\r\n<li>Let perform some CRUD operations using Codeigniter''s Active record</li>\r\n<li>Read:&nbsp;<code> </code></li>\r\n</ul>\r\n<p style="padding-left: 30px;"><code>$query = $this-&gt;db-&gt;get(''tablename'');</code><br /><code> return $query-&gt;result_array();</code></p>\r\n<ul>\r\n<li>Insert:&nbsp;<code> </code></li>\r\n</ul>\r\n<p style="padding-left: 30px;"><code>$query = $this-&gt;db-&gt;insert(''tablename'',$data);</code></p>\r\n<ul>\r\n<li>Update:&nbsp;<code> </code></li>\r\n</ul>\r\n<p style="padding-left: 30px;"><code>$query = $this-&gt;db-&gt;update(''tablename'',$data,array(''id''=&gt; ''postid'');</code></p>\r\n<ul>\r\n<li>Delete:&nbsp;<code> </code></li>\r\n</ul>\r\n<p style="padding-left: 30px;"><code>$query = $this-&gt;db-&gt;where(''id'',''postid'')-&gt;delete(''tablename'');<br /></code></p>\r\n<p style="padding-left: 30px;"><code></code></p>\r\n<p style="padding-left: 30px;"><code></code><br /><strong><code></code></strong></p>\r\n<p style="padding-left: 30px;"><code></code></p>\r\n<p><code></code></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2', 'default.jpg', '2017-08-03 20:48:57', 0),
(6, 'Codeigniter Controller', '<p>What is a controller?</p>\r\n<p>A controller as the name suggests controls the logic , data flow from model to view of the application.</p>\r\n<p>To get the data from model we need to perform to operations.</p>\r\n<p>Load the model in the construct function of the controller to avoid repetition.</p>\r\n<p><code> public function __construct()</code><br /><code> {</code><br /><code>&nbsp; parent::__construct();</code><br /><code>&nbsp; $this-&gt;load-&gt;model(''model_name'');</code><br /><br /><code> }</code></p>\r\n<p>After fetching the data, to pass the data to the view use the below syntax :</p>\r\n<p><code>$this-&gt;load-&gt;view(''viewname'',$data);</code></p>\r\n<p><code>We can also load other helpers and library like form and form-validation in the controller.</code></p>\r\n<p><code></code></p>', '2', 'default.jpg', '2017-08-03 20:54:08', 0),
(7, 'Form and Form Validation', '<h2>How to use Codeigniter''s Form helper and form-validation library</h2>\r\n<p>Form helper is used when we need to store some data in the database.</p>\r\n<p>Form helper is loaded in the controller or in the autoload file. In controller we can load it by using the below synatax</p>\r\n<p><code>$this-&gt;load-&gt;helper(''form'');</code></p>\r\n<p>In codeigniter we can use the form using the below syntax . It also add the CSRF token with it, to determine the authencity of the request.</p>\r\n<p><code>&lt;?php echo form_open(''formactionurl''); ?&gt;</code></p>\r\n<p>To fetch the users data after form submit, we can use the below syntax to get data.</p>\r\n<p><code>$this-&gt;input-&gt;post(''post_title'')</code></p>\r\n<p>Form Validation is used to validate the data received from the user after submitting the form. Form validation library can be loaded in controller or in the autoload file. In controller we can use the below syntax:</p>\r\n<p><code>$this-&gt;load-&gt;library(''form_validation'');</code></p>\r\n<p>We can define validation rules in the controller using the below syntax</p>\r\n<p><code>$this-&gt;form_validation-&gt;set_rules(''post_title'', ''Post Title'', ''required'');</code></p>\r\n<p>To validate the data with rules assigned we can check the correctness we can use the run() using the below syntax;</p>\r\n<p>$this-&gt;form_validation-&gt;run()<code></code></p>\r\n<p><code></code></p>\r\n<p><code></code></p>', '2', 'default.jpg', '2017-08-03 20:55:02', 0),
(15, 'Working WIth Tinymce', '<p>Steps on how to implement tinymce for our textarea, so description can be edited.</p>\r\n<ul>\r\n<li>First register at tinymce website.</li>\r\n<li>Add a script tag with includes tinymce using cloud in the header.&nbsp;</li>\r\n<li><code>&lt;script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=1f96x9ys3f9oeh3gophdxx9rfqxn87csze3e62pw22jjqr7f"&gt;&lt;/script&gt;</code></li>\r\n<li>Add the below script below the tinymce jquery file. It is for initalization of tinymce. Here we are initializing it with textarea. Remeber to add a textarea in form so that editor would be visible.</li>\r\n<li>\r\n<p><code>&lt;script&gt;</code></p>\r\n<p><code>tinymce.init({</code><br /><code> selector: ''textarea'',</code><br /><code> height: 500,</code><br /><code> menubar: false,</code><br /><code> plugins: [</code><br /><code> ''advlist autolink lists link image charmap print preview anchor'',</code><br /><code> ''searchreplace visualblocks code fullscreen'',</code><br /><code> ''insertdatetime media table contextmenu paste code''</code><br /><code> ],</code><br /><code> toolbar: ''undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'',</code><br /><code> content_css: [</code><br /><code> ''//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'',</code><br /><code> ''//www.tinymce.com/css/codepen.min.css'']</code><br /><code>});</code></p>\r\n<p><code>&lt;/script&gt;</code></p>\r\n</li>\r\n<li>And its done.<code></code></li>\r\n</ul>\r\n<p>&nbsp;</p>', '2', 'default.jpg', '2017-08-05 10:02:34', 0),
(16, 'Form File Uploads', '<h2>Lets add image to our posts.</h2>\r\n<p>To do this we will require the upload helper of codeigniter. We can use the helper and define the configurations using the syntax given below.</p>\r\n<p>Remember to use <strong>form_open_multipart();</strong></p>\r\n<p><code>$config[''upload_path''] = ''./uploads/'';</code><br /><code>$config[''allowed_types''] = ''gif|jpg|png'';</code><br /><code>$new_name = time().$_FILES["userfiles"][''name''];</code><br /><code>$config[''file_name''] = $new_name;</code></p>\r\n<p><code>$this-&gt;load-&gt;library(''upload'', $config);</code></p>\r\n<p>To upload the file use the below syntax:</p>\r\n<p><code>$this-&gt;upload-&gt;do_upload(''userfile'');</code></p>\r\n<p>If there was an error in the file uploads we can use the below syntax to get the errors.</p>\r\n<p><code>$this-&gt;upload-&gt;display_errors()</code></p>\r\n<p>If the file uploads was sucessfull then we can use the below syntax to fetch uploaded file data.</p>\r\n<p><code>$this-&gt;upload-&gt;data()</code></p>', '2', '1501935284cute-girly-cool-facebook-timeline-cover-photos-99.jpg', '2017-08-05 12:14:44', 0),
(19, 'Codeigniter Authentication', '<h2>User Authentication with Code Igniter</h2>\r\n<p>Our blogging application will have three type of user.</p>\r\n<ul>\r\n<li>User</li>\r\n<li>Content Creator</li>\r\n<li>Admin</li>\r\n</ul>', '8', 'default.jpg', '2017-08-06 22:15:16', 0),
(20, 'Admin First Post', '<p>Admin First Post</p>\r\n<p>This is to test whether admin can create posts</p>', '2', 'default.jpg', '2017-08-06 22:50:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_roles`
--

CREATE TABLE IF NOT EXISTS `ci_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ci_roles`
--

INSERT INTO `ci_roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Content Creator'),
(3, 'User'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE IF NOT EXISTS `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `content_activate` int(11) NOT NULL DEFAULT '0',
  `soft_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `name`, `password`, `email`, `role_id`, `content_activate`, `soft_delete`, `created_at`, `updated_at`) VALUES
(2, 'Akash Mudliyar', '$2y$10$uaSbyuS0/a16QAnfdFDBV.tHCPJOTvBPvsIvdL52qrvQo1YeMQuxS', 'akashmudliyar@gmail.com', 1, 0, 0, '2017-08-05 18:31:05', '2017-08-05 18:31:05'),
(3, 'Prabhakar Mudliyar', '$2y$10$jz7moLItSU8f8SFA.Zu3lOi6.uSUGD7lpex.ForwUF29GjZyb93nu', 'test@dispostable.com', 3, 0, 1, '2017-08-05 18:46:36', '2017-08-05 18:46:36'),
(4, 'Prabhakar', '$2y$10$A6XLN8VAzTeIp.2jO0VziO7Rzq1PcIx4dlIft/c1SfrRpoYxP/qp2', 'prabhakarm@dispostable.com', 3, 0, 0, '2017-08-05 18:52:11', '2017-08-05 18:52:11'),
(5, 'Prabhakar Test', '$2y$10$D/66Suhhr5DyGF2rlO1jteAjSmfBx5/Lb5zrjyVtlcVOe9kJGrYla', 'prabhakarmudliyar@dispostable.com', 3, 0, 0, '2017-08-05 18:53:29', '2017-08-05 18:53:29'),
(6, 'test', '$2y$10$5FqhM6pfhz8zUmCfI5Dm3uHCKAHQa6IRczTGQu4rnYgFmTUzrwNSm', 'testblog@dispostable.com', 3, 0, 0, '2017-08-05 18:56:54', '2017-08-05 18:56:54'),
(7, 'Akash skies', '$2y$10$wsT/1JNQgr3FZNnxeOnHxejrIkqYR9Iu.R3mTjz3kDyuT9DfgMvDa', 'akashskies@dispostable.com', 2, 0, 0, '2017-08-05 18:58:22', '2017-08-05 18:58:22'),
(8, 'Prab Cont', '$2y$10$3DbXFOmNI2Q9Utx9Ng4DXO86d1PipqJt1HvV4wF5nyuf9fxPhnUI.', 'prab.content@dispostable.com', 2, 1, 0, '2017-08-05 19:36:09', '2017-08-05 19:36:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
