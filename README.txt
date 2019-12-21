RAKUNORU
インターンシップで制作したデモ用のWEB/アンドロイドアプリです。
テーマは駅のホームで車椅子の方を映像認識で自動で判別し、車内表示で乗客に通知しようです。
そのデモとして簡易版を作りました。
システム構造は

→アンドロイドアプリで写真撮影
→画像をGoogle Cloud Vision APIに投稿
→画像解析されて写真内に映っているもののラベルが返ってくるので、車椅子が映っている時だけ
WEBページの画像（http://fanbedbag.php.xdomain.jp/display.php）が差し替えられます。

実装はandroid studio,PHP,HTMLで行い、Google Cloud Vision API のサンプルコードを
改変して使用させていただきました。

使用にあたって、Rakunoru/Rakunoru(Android)/RakunoruAndroid/app/build.gradleの20行目と
Rakunoru/Rakunoru(Android)/RakunoruAndroid/app/src/main/java/com/google/sample/rakunorandroid/MainActivity.javaの66行目の
YOUR_API_KEYをご自分のAPI key（Google Cloud Vision APIの登録が必要）に書き換える必要があります。
API keyをお持ちの方はぜひ試してみてください！

謝辞：一緒に案を出してくださり、表示用WEBページの画像を作ってくださったグループメンバー
の皆様に感謝申し上げます。


This software includes the work that is distributed in the Apache License 2.0.

このソフトウェアは、 Apache 2.0ライセンスで配布されている製作物が含まれています。
