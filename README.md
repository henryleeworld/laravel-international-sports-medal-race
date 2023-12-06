# Laravel 10 國際體育獎牌競賽

在國際體育上獲得佳績，不僅是對選手實力的肯定，也是國力的展現。因此許多國家都提供了高額獎金，一方面吸引選手努力打拚，一方面也是獎勵為國爭光的選手。

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
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/oaKrbmy.png)
> 各國選手無不力求卓越，渴望在體育殿堂上爭得席次，獎牌代表的不止是個人實力的見證，同時也是國家榮耀的象徵

![](https://i.imgur.com/Ricad6L.png)
> 以國家為單位獲得的獎牌數目，是人們慣常用來衡量國際體育輸贏的指標