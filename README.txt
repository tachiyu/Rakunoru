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













This software includes the work that is distributed in the Apache License 2.0.

このソフトウェアは、 Apache 2.0ライセンスで配布されている製作物が含まれています。