# Fashinablylate

## 環境構築

Dockerビルド
　　1．git.cloneリンク
　　2. docker-compose up -d --build
※MYSQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築
　　 1.docker-compose exec php bash
    2.composer install
    3..env.exampleファイルから.envを作成し、環境変数を変更
    4.php artisan key:generate
    5.php artisan migrate
    6.php artisan db:seed

## 使用技術（実行環境）

   ・PHP 8.0
   ・Laravel 10.0
   ・MySql 8.0

## ER図
![alt text](er_diagram.png)

## URL
   ・開発環境:http://lacalhost/
   ・phpMyAdmin:http://localhost:8080/
