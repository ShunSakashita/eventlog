# 握手会の会話を記録できるサイトです。
## 更新情報
2021/11/12:メンバーごとに投稿を分けられる機能を実装
2021/11/20:文章の修正。<br>
2021/11/20:投稿ページの修正。グループ名を選択するとそのグループに応じてメンバーリストが出るようにした。<br>
2021/11/21:上の機能とデータベースを紐付け。<br>
2021/11/21:投稿のうち「会話内容」の検索機能を実装。<br>
2021/11/21:トップページでメンバー検索機能を実装。<br>
## 使用技術
PHP(Laravel)
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
- public/js/show_memberlist.js
    - 投稿ページでグループを選ぶと自動的にメンバーの選択肢が変わる機能の実装部分。
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

## 今後の予定(2021/11/21更新)
いいね機能の修正。
