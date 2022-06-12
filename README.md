## Installation

### インストール

```
git clone https://github.com/kazutotakeuchi-32/docker_php_fpm2.git
```

## Usage 

### コンテナ構築

```
# build
docker-compose build 

＃ データベースでテーブルを作成後でないとschemaspyとエラー
docker-compose up
```
### コンテナ図
<img src="https://i.gyazo.com/4d8220c357ffbe39dbc11b0ddc4c61a1.png"> <br/>

- webコンテナをリバースプロキシーとし、アプリケーションサーバのphpコンテナにアクセス
- schemaspyコンテナでdbコンテナに接続してDBドキュメントを作成
- schemaspy_nginxでドキュメントを表示


### URL
- [schemaspyドキュメント](http://localhost:3000/)
- [Webサーバ](http://localhost:8080/index.php)


### mysql接続

```
# DBコンテナ接続
docker-compose exec db /bin/bash

# db接続
mysql -u root -h db -p

# 直接
docker-compose exec db mysql -u root -p
```

### schemaspy

```
# ホスト名を設定
#mysqlコンテナ内
schemaspy.host=db
#ローカル内
schemaspy.host=host.docker.internal

# ポート番号を設定
schemaspy.port=3306

# データベース名を設定
schemaspy.db=<データベース名>

# ユーザ名
schemaspy.u=<ユーザ名>

# パスワードを設定
schemaspy.p=<パスワードを設定>

# スキーマ
schemaspy.s=<スキーマ>

```

## Note

 - [schemaspyドキュメント](https://schemaspy.readthedocs.io/en/latest/)
 - [AppleシリコンMac上のDockerでSchemaspyを動かす方法](https://qiita.com/pnpk/items/d308d96ef933312f8d9a)
 - [schemaspyをdocker-composeで動かす](https://takahashik.hatenablog.com/entry/2018/10/09/075957)
 - [Check! mysqlのDockerコンテナにアクセスすると ER_NOT_SUPPORTED_AUTH_MODE エラーが出てしまうときの対処](https://qiita.com/dz_/items/ae7a0e5aad0ec9dd8ba7)
 - [Compose における起動順の制御](http://docs.docker.jp/compose/startup-order.html)
 - [【すぐわかる】シェルスクリプトのuntilの使い方](https://eng-entrance.com/linux-shellscript-until)
 - [mysql日本語化](https://pgmemo.tokyo/data/archives/271.html)

