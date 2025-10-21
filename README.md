# 飲食店予約サービス
## 環境構築
Dockerビルド

1.git clone git@github.com:yayo-sakura/rese.git

2.docker-compose up -d --build


＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。

Laravel環境構築

1.docker-compose exec php bash

2.composer install

3..env.exampleファイルから.envを作成し、環境変数を変更

4.php artisan key:generate

5.php artisan migrate

6.php artisan db:seed


## 使用技術

・PHP 8.4.3

・Laravel 8.83.8

・MySQL 8.0


## ER図
<img width="1015" height="812" alt="Image" src="https://github.com/user-attachments/assets/9837485a-cb5a-4889-933e-89e1459f3ec1" />


## URL
・開発環境：[http://localhost/](http://localhost/)

・phpMyAdmin:[http://localhost:8080/](http://localhost:8080/)
