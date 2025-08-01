# 選考課題 【サマーインターンシップ】

インターンシップ選考にあたり、プログラミング課題へのご回答をお願いいたします。

## 回答期限
課題案内から3日以内

## 提出方法
回答を記載したGitHubのURLをメールにて送付ください。

> **注意事項**
> - 公開設定の上、送付をお願いします。
> - Gitでの提出が難しい場合、メール本文に直接入力いただいても問題ございません。

## 使用言語
指定はございません。

下記で各コースとの親和性が高いプログラミング言語をご案内します。
コースに合った言語で課題を提出いただいた場合、選考を優遇いたします。

| コース | 推奨言語 |
|--------|----------|
| iOSアプリケーションコース | Swift |
| Androidアプリケーションコース | Kotlin |
| Webフロントエンドコース | TypeScript(JavaScript) |
| Webバックエンドコース | PHP |

## その他
選考にあたり、回答に対して下記の観点で評価します。

- **アルゴリズムの正しさ**
- **コードの読みやすさ**
- **パフォーマンスが考慮されているか**

> たとえコードが未完成でも、これらの観点で評価できるので、諦めずにぜひご提出ください。

課題内容について、次ページに記載いたします。

---

## 課題

小括弧`()`と中括弧`{}`と大括弧`[]`のみで構成された文字列 `s` が与えられた時、`s` が下記のルールに従っているか判定するプログラムを作成せよ。

### ルール
1. **開き括弧**`({[`は、同じ種類の**閉じ括弧**`)}]`で閉じること
2. **括弧を開いた順に括弧を閉じること**

### 例

#### 例1
- **入力**: `s="()"`
- **出力**: `true`

#### 例2
- **入力**: `s="([]){}"`
- **出力**: `true`

#### 例3
- **入力**: `s="({)}"`
- **出力**: `false`
