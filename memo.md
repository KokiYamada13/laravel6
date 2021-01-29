# 練習用

### new プロジェクト作成において必要なもの
- composerをダウンロード
- ダウンロードフォルダに移動し下記を実行。composerを呼び出せるようにする。
```
sudo mv composer.phar /usr/local/bin/composer
```
- パーミッション設定
```
chmod a+x /usr/local/bin/composer
```
- Laravelインストール
```
composer global require laravel/installer
```
- 環境変数追加
```
echo "export PATH=~/.composer/vendor/bin:$PATH" >> ~/.bash_profile source ~/.bash_profile
```
- プロジェクト作成
```
laravel new プロジェクト名
```
- サーバー実行
```
php artisan serve
```

#### sample
```php
Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page</p></body></html>';
});
```

#### 上手くプロジェクトを作成できない場合
- コンポーザーを削除し再インストールしてみる
```
- composer global remove laravel/installer
- composer global require laravel/installer

```

#### コントローラー作成
- `php artisan make:controller コントローラー名`


#### 便利
- デバックに
```php
dd($test);
var_dump($test);
```
- フロント側に$loop関数
例：
```php
$roop->index
```


#### blade
- @yield
- @section
- @extends
- @component
- @slot
- @each
- @inclode (部分的)
- @if, @unless, @isset, @empty, @foeeach, @php

#### memo
- フォームで送信された値は、すべてnameのプロパティとして取り出せる。

#### プロバイダー
- php artisan make:provider HelloServiceProvider
- config/app.phpに記述必要