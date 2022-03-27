<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// mymenu
const _MD_A_MYMENU_MYTPLSADMIN = '';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'アクセス権限';
const _MD_A_MYMENU_MYPREFERENCES = '一般設定';

// index.php
const _AM_TH_DATETIME = '日時';
const _AM_TH_USER = 'ユーザ';
const _AM_TH_IP = 'IP';
const _AM_TH_AGENT = 'AGENT';
const _AM_TH_TYPE = '種別';
const _AM_TH_DESCRIPTION = '詳細';

const _AM_TH_BADIPS = '拒否IPリスト<br><br><span style="font-weight:normal;">１行１IPアドレスで記述してください（前方一致）。空欄なら全許可。<br>IPv6 アドレスの省略表記 "::" 及び "0" の省略は使用できません。</span>';

const _AM_TH_GROUP1IPS = '管理者グループ(1)の許可IP<br><br><span style="font-weight:normal;">１行１IPアドレスで記述してください（前方一致）。<br>IPv6 アドレスの省略表記 "::" 及び "0" の省略は使用できません。<br>192.168. とすれば、192.168.*からのみ管理者になれます。空欄なら全許可。</span>';

const _AM_LABEL_COMPACTLOG = 'ログをコンパクト化する';
const _AM_BUTTON_COMPACTLOG = 'コンパクト化実行';
const _AM_JS_COMPACTLOGCONFIRM = 'IPと種別の重複したレコードを削除します';
const _AM_LABEL_REMOVEALL = '全レコードを削除する:';
const _AM_BUTTON_REMOVEALL = '全削除実行';
const _AM_JS_REMOVEALLCONFIRM = 'ログを無条件で削除します。本当によろしいですか？';
const _AM_LABEL_REMOVE = 'チェックしたレコードを削除する:';
const _AM_BUTTON_REMOVE = '削除実行';
const _AM_JS_REMOVECONFIRM = '本当に削除してよろしいですか？';
const _AM_MSG_IPFILESUPDATED = 'IPリストファイルを書き換えました';
const _AM_MSG_BADIPSCANTOPEN = '拒否IPリストファイルが開けません';
const _AM_MSG_GROUP1IPSCANTOPEN = '管理者用IPリストファイルが開けません';
const _AM_MSG_REMOVED = '削除しました';
const _AM_FMT_CONFIGSNOTWRITABLE = 'configsディレクトリが書込許可されていません: %s';

// prefix_manager.php
const _AM_H3_PREFIXMAN = 'PREFIX マネージャ';
const _AM_MSG_DBUPDATED = 'データベースが更新されました';
const _AM_CONFIRM_DELETE = '全テーブルが削除されますがよろしいですか?';
const _AM_TXT_HOWTOCHANGEDB = "prefixを変更する場合は、%s/mainfile.php 内の以下の部分を書き換えてください<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');";

// advisory.php
const _AM_ADV_NOTSECURE = '非推奨';

const _AM_ADV_TRUSTPATHPUBLIC = '上にNGという画像が表示されていたり、リンク先でエラーが出ないようならXOOPS_TRUST_PATHの設置方法に問題があります。XOOPS_TRUST_PATHはDocumentRoot外に設置するのが基本ですが、そうできない場合でもXOOPS_TRUST_PATH直下にDENY FROM ALLの一行を持つ.htaccessを追加するなどして、XOOPS_TRUST_PATH内に直接アクセスできないようにする必要があります。';
const _AM_ADV_TRUSTPATHPUBLICLINK = 'TRUST_PATH内のPHPファイルに直アクセスできないことの確認（リンク先が404,403,500エラーなら正常）';
const _AM_ADV_REGISTERGLOBALS = 'この設定は、様々な変数汚染攻撃を招きます<br>もし、.htaccessを置けるサーバであれば、XOOPSインストールディレクトリの.htaccessを作るか編集するかして下さい';
const _AM_ADV_ALLOWURLFOPEN = 'この設定だと、外部の任意のスクリプトを実行される危険性があります<br>この設定変更にはサーバの管理者権限が必要です<br>ご自身で管理しているサーバであれば、php.iniやhttpd.confを編集して下さい<br>そうでない場合は、サーバ管理者にお願いしてみて下さい';
const _AM_ADV_USETRANSSID = 'セッションIDが自動的にリンクに表示される設定となっています。<br>セッションハイジャックを防ぐためにも、XOOPSインストールディレクトリに.htaccessを作るか編集するかして下さい<br><b>php_flag session.use_trans_sid off</b>';
const _AM_ADV_DBPREFIX = 'DB接頭辞がデフォルトのxoopsのままなので、SQL Injectionに弱い状態です<br>「孤立コメントの無害化」など、SQL Injection対策の設定をONにすることをお忘れなく';
const _AM_ADV_LINK_TO_PREFIXMAN = 'PREFIXマネージャへ';
const _AM_ADV_MAINUNPATCHED = 'READMEに記述された通りに、mainfile.php にパッチを当てて下さい';
const _AM_ADV_DBFACTORYPATCHED = 'データベースファクトリは対応済みです';
const _AM_ADV_DBFACTORYUNPATCHED = 'データベースファクトリクラスへのパッチが当たっていないのでDBレイヤートラップanti-SQL-Injectionは効きません';

const _AM_ADV_SUBTITLECHECK = 'Protectorの動作チェック';
const _AM_ADV_CHECKCONTAMI = '変数汚染';
const _AM_ADV_CHECKISOCOM = '孤立コメント';
