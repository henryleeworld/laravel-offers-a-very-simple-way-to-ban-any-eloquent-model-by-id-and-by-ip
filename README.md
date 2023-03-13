# Laravel 10 提供一種非常簡單的方法來通過編號和 IP 位址禁止任何 Eloquent 模型

引入 mchev 的 banhammer 套件來擴增提供一種非常簡單的方法來通過編號和 IP 位址禁止任何 Eloquent 模型，被禁止的 Eloquent 模型可以有一個到期日期，並使用排程自動取消禁止。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 註冊後可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/WItIFIn.png)
> 透過限制登入的 IP 位址禁止存取

![](https://i.imgur.com/v97fPAb.png)
> 解除限制登入的 IP 位址即可存取