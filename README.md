# ラーメンイキタイ

浜松市周辺のラーメン屋さんをまとめるシステムです。

## インストール

```bash
git clone git@gitlab.com:knowneuroknot.inc1/ramen-ikitai.git
cd ramen-ikitai
cp .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

sail up -d
sail npm install
sail npm run dev

# appKeyが無いとなるので、「Generate app key」のボタンを押す。
```

## 使い方

### リソース管理方法(git)

### ブランチ

- 本流: `master`
- 新妻: `niizuma_develop`
- 城所: `kidokoro_develop`

コマンド例:

```bash
git ch -b kidokoro_develop
```

### コミット

[gitmoji](https://gitmoji.dev/)を使ってください。主にコーディングを作る時は :lipstick: を使えばいいです。コマンド例を参考にしてみてください。

コマンド例：

```bash
git add .
git commit -m ":lipstick: <表側>ヘッダーを修正しました。"
```

### コマンド一覧

```bash
# バックエンドの環境を立ち上げる
sail up -d

# バックエンドの環境を落とす
sail down

# フロントエンドの環境を立ち上げる（バックエンドの環境が立ち上がった状態で行う）
sail npm run dev

# フロントエンドの環境を落とす
CTRL + C
```

### URL一覧

管理画面側

[http://localhost/admin](http://localhost/admin)

表側

> こちらを今は使う。

[http://localhost/](http://localhost/)

### 修正対象箇所

```plaintext
resources/js/Pages/Top.vue
```

## 参考

- [https://qiita.com/kai_kou/items/bfea0281689b3d376812](https://qiita.com/kai_kou/items/bfea0281689b3d376812)

- [https://zenn.dev/na9/articles/e5d70c156ea141#2.-%E3%83%AA%E3%83%9D%E3%82%B8%E3%83%88%E3%83%AA%E3%81%8B%E3%82%89%E3%82%AF%E3%83%AD%E3%83%BC%E3%83%B3%E3%81%99%E3%82%8B](https://zenn.dev/na9/articles/e5d70c156ea141#2.-%E3%83%AA%E3%83%9D%E3%82%B8%E3%83%88%E3%83%AA%E3%81%8B%E3%82%89%E3%82%AF%E3%83%AD%E3%83%BC%E3%83%B3%E3%81%99%E3%82%8B)

- [https://readouble.com/laravel/10.x/ja/sail.html#installing-composer-dependencies-for-existing-projects](https://readouble.com/laravel/10.x/ja/sail.html#installing-composer-dependencies-for-existing-projects)
