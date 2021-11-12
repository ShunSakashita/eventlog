# 握手会の会話を記録できるサイトです。
###　更新情報
2021/11/12:メンバーごとに投稿を分けられる機能を実装
## 使用技術
PHP(Laravel)
## 制作期間(2021/10/29現在)
二週間前後
## 開発人数
一人
## 各ファイルの説明(開発の際に自分でコードを書いたファイル)
- app/Http/Controllers/PostController.php
    - MVCモデルにおけるController部分。
- app/Http/Models/Post.php
    - MVCモデルにおけるModel部分。
- database/migrations/2021_10_21_210347_create_post_table.php
    - データベースに用いるmigrationファイル。
- public/css/style.css
    - cssファイル。
- resources/views
    - MVCモデルにおけるviewのファイルフォルダ。
        - resources/views/components/layout.blade.php
            - 各ファイル共通部品のファイル。
        - resources/views/index.blade.php
            - ホーム画面のview
        - resources/views/post.blade.php
            - 投稿画面のview
        - resources/views/edit.blade.php
            - 編集画面のview
        - resources/views/update.blade.php
            - 投稿完了画面のview
        - resources/views/errorpage.blade.php
            - 編集用パスコードが違う場合に表示するview
- routes/web.php
    - ルーティング定義ファイル。

## 現在の状況(2021/11/9更新)
~~認証機能の開発中。Laravelのbreezeパッケージを利用する予定。~~
