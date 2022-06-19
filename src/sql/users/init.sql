CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '名前'  ,
  `password` varchar(255) NOT NULL COMMENT 'ハッシュ化パスワード' ,
  `email` varchar(255) NOT NULL COMMENT 'メールアドレス' ,
  `created_at` datetime  default current_timestamp COMMENT '作成日' ,
  `updated_at` datetime default current_timestamp on update current_timestamp COMMENT '更新日' ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT "ユーザー情報";


