<!-- ブログの投稿日が1日以内の場合に「NEW!」と表示する -->
<?php
date_default_timezone_set('Asia/Tokyo'); // タイムゾーンを設定
$blog = mktime(12, 30, 0, 5, 8, 2024); // 2021年2月12日15時30分のUNIXタイムスタンプを取得

if ($blog >= time() - 86400) { // 86400秒は1日
    echo "NEW!";
    }

