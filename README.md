# ラーメンイキタイ

浜松市周辺のラーメン屋さんをまとめるシステムです。

## インストール

```bash
cd <配置したい場所>
git clone git@gitlab.com:knowneuroknot.inc1/ramen-ikitai.git
cd ramen-ikitai
```

## 使い方

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

[http://localhost/](http://localhost/)

### 修正対象箇所

```plaintext
resources/js/Pages/Top.vue
```
