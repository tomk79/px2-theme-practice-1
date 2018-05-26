<?php
/**
 * config.php template
 */
return call_user_func( function(){

	// initialize

	/** コンフィグオブジェクト */
	$conf = new stdClass;

	// カラースキーム
	$conf->colors = json_decode( json_encode( array(
		"key" => "#ff9933",
		"sub" => "#3399ff",
		"sub2" => "#33dd99",
		"sub3" => "#9933ff",

		// "key" => "#3399ff",
		// "sub" => "#33dd99",
		// "sub2" => "#9933ff",
		// "sub3" => "#ff9933",
	) ) );

	// キーカラーが占める面積
	// $conf->keycolor_rate = 9;
	// $conf->keycolor_rate = 8;
	// $conf->keycolor_rate = 5;
	$conf->keycolor_rate = 3;
	// $conf->keycolor_rate = 0;

	// 形状
	$conf->shape = "circle";
	// $conf->shape = "simple";

	// フォント
	$conf->fonts = array(
		"ヒラギノ角ゴ Pro W6",
		// "arial black",
		"sans-serif",

		// "Hiragino Mincho ProN",
		// "ヒラギノ明朝 W3",
		// "serif",
	);

	// アイコンスタイル
	$conf->icon_style = "illustration";

	// 写真
	$conf->welcome_photo = "/images/photo001.jpg";

	// モチーフ
	$conf->motif = "";

	// 余白・マージン量
	$conf->margin_level = 4; // 0〜4

	// 枠の付け方
	$conf->framing = "frame";

	// アニメーション
	$conf->animation = "none";

	// テクスチャ
	$conf->texture = null;

	return $conf;
} );
