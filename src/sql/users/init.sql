CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '名前'  ,
  `password` varchar(255) NOT NULL COMMENT 'ハッシュ化パスワード' ,
  `email` varchar(255) NOT NULL COMMENT 'メールアドレス' ,
  `created_at` datetime  default current_timestamp COMMENT '作成日' ,
  `updated_at` datetime default current_timestamp on update current_timestamp COMMENT '更新日' ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT "ユーザー情報";



-- カラム追加

ALTER TABLE テーブル名 ADD 新規カラム名 型情報 オプション;
ALTER TABLE users ADD age int(11) NOT NULL  COMMENT '年齢' ;

-- カラム変更
 ALTER TABLE [テーブル名] CHANGE [フィールド名] [新フィールド名] [新しい型];
 ALTER TABLE users CHANGE age new_age int(11);


-- カラム削除
 ALTER TABLE users DROP COLUMN age;

CREATE INDEX user_id_index ON users (id)