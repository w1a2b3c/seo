<?php
/*
 * @Author        : 易航
 * @Url           : http://guide.bri6.cn
 * @Date          : 2023-09-29 13:18:36
 * @LastEditTime  : 2024-07-21 18:47:39
 * @Email         : 2136118039@qq.com
 * @Project       : 易航网址引导系统
 * @Description   : 一款极其优雅的易航网址引导系统
 * @Read me       : 感谢您使用易航网址引导系统，系统源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版系统会存在各种未知风险。支持正版，从我做起！
*/
 goto y0CEQ; w9iOs: define("\x59\110\137\x53\x45\122\126\105\x52", base64_decode("\x61\110\x52\60\143\104\157\166\x4c\62\x46\x31\144\x47\x67\165\x59\x6e\112\x70\116\x69\x35\x6a\x62\151\71\172\132\130\x4a\62\132\130\111\x76\132\x33\126\160\132\x47\x55\166")); goto XuuVl; ZEZkk: include_once PUBLIC_ROOT . "\146\165\156\143\164\x69\157\x6e\163\56\160\x68\160"; goto Wrdq0; LcThV: include_once PUBLIC_ROOT . "\141\165\x74\157\154\x6f\141\144\x2e\160\x68\x70"; goto wjxJa; Q2D_q: $site = options("\163\151\164\x65"); goto t6EkU; cYYE9: define("\124\x48\105\x4d\x45\x5f\x52\117\117\x54", THEME_PATH . THEME . DIRECTORY_SEPARATOR); goto X94tw; fTL8x: $options = options(); goto Q2D_q; y0CEQ: header("\x47\x65\156\x65\162\141\x74\x6f\x72\x3a\40\131\x69\x48\141\156\x67"); goto ry_lp; wjxJa: JsonDb\JsonDb\Db::setConfig(["\160\x61\164\x68" => CONTENT_ROOT . "\x4a\163\157\x6e\104\142", "\144\145\142\x75\147" => APP_DEBUG]); goto fTL8x; XuuVl: define("\x44\x41\x54\x45", date("\x59\55\x6d\x2d\144")); goto cHK66; NHWHV: error_reporting(E_ERROR); goto IIFTY; n3oXn: define("\120\125\102\114\x49\103\137\122\x4f\x4f\x54", ROOT . "\160\165\x62\154\151\x63" . DIRECTORY_SEPARATOR); goto E0Zml; jG60j: if (!(APP_DEBUG === false)) { goto X_WDU; } goto NHWHV; A1AGE: define("\x52\x4f\117\x54", (empty($_SERVER["\x44\117\x43\125\115\x45\116\x54\137\x52\x4f\117\124"]) ? dirname(dirname(__FILE__)) : $_SERVER["\x44\117\x43\x55\115\105\x4e\124\137\x52\117\x4f\124"]) . DIRECTORY_SEPARATOR); goto VPhUT; YLCRK: define("\x54\x48\x45\x4d\x45\137\120\101\124\110", CONTENT_ROOT . "\164\x68\145\x6d\145\163" . DIRECTORY_SEPARATOR); goto n3oXn; IIFTY: X_WDU: goto ZEZkk; mwbTc: define("\x44\x4f\x4d\101\111\x4e", addslashes($_SERVER["\x48\x54\124\x50\x5f\110\x4f\123\x54"])); goto w9iOs; cHK66: require PUBLIC_ROOT . "\166\145\162\x73\x69\157\x6e\56\x70\x68\x70"; goto WPPpO; E0Zml: define("\123\131\x53\124\x45\115\137\122\117\x4f\x54", ROOT . "\x73\171\163\164\x65\155" . DIRECTORY_SEPARATOR); goto mwbTc; ELHci: define("\120\x4c\x55\x47\111\x4e\123\137\x52\x4f\x4f\x54", CONTENT_ROOT . "\160\x6c\x75\x67\151\156\163" . DIRECTORY_SEPARATOR); goto YLCRK; Wrdq0: function_check(); goto LcThV; lcMwd: session_start(); goto za_Em; VPhUT: define("\x43\x4f\116\x54\105\x4e\x54\137\122\117\117\x54", ROOT . "\143\x6f\156\164\x65\156\164" . DIRECTORY_SEPARATOR); goto ELHci; WPPpO: (function () { goto ANpir; HyGin: foreach ($F6USo as $jIDQQ => $Y4h5H) { goto JorCI; moJDI: IH4Z0: goto CPuZg; JorCI: if (defined($jIDQQ)) { goto FO3Xd; } goto iy76h; VSHJf: FO3Xd: goto moJDI; iy76h: define($jIDQQ, $Y4h5H); goto VSHJf; CPuZg: } goto COwZF; dAQ8l: omeuh: goto p3A5C; COwZF: ywg5v: goto QLcqW; ANpir: if (!file_exists(PUBLIC_ROOT . "\x63\x6f\x6e\x66\151\147\56\x70\x68\160")) { goto omeuh; } goto XGrMm; p3A5C: $F6USo = ["\101\120\120\x5f\x44\105\x42\x55\x47" => false, "\x44\105\115\x4f\x5f\115\117\x44\x45" => false, "\x41\104\x4d\111\x4e\x5f\104\x49\122" => "\57\141\x64\155\x69\x6e"]; goto HyGin; XGrMm: require_once PUBLIC_ROOT . "\143\x6f\x6e\x66\x69\x67\56\x70\150\x70"; goto dAQ8l; QLcqW: })(); goto jG60j; za_Em: date_default_timezone_set("\120\122\x43"); goto A1AGE; ry_lp: header("\x41\x75\x74\x68\x6f\x72\x3a\40\131\151\x48\x61\x6e\147"); goto lcMwd; t6EkU: define("\x54\x48\x45\115\105", empty($options["\143\165\x72\x72\145\156\164\137\164\150\x65\155\x65"]) ? "\x53\x69\155\160\154\145\116\x61\166\151\x67\x61\164\x69\157\x6e" : $options["\143\165\x72\162\145\156\x74\137\164\150\x65\155\145"]); goto cYYE9; X94tw: (function () { goto RcMpL; KChkD: $W8jQv = $_SERVER["\x44\117\x43\x55\115\105\116\124\137\122\x4f\117\x54"] . ADMIN_DIR . DIRECTORY_SEPARATOR; goto Lki_b; n2iyl: if (!(is_array(options($bGTxt)) && !empty(options($bGTxt)))) { goto bFoYJ; } goto qN0MK; qN0MK: return; goto Vlg6G; R2v9M: RRo72: goto kaSAY; qPg7O: options($bGTxt, $rtD23); goto qXMD8; u1e3o: foreach ($t9wG4 as $UZazO) { goto HzCuA; FvGC0: b5QOo: goto WmVha; HzCuA: if (!empty($options[$bGTxt][$UZazO])) { goto b5QOo; } goto IG82P; WmVha: h8aJm: goto Y_bEp; IG82P: $rtD23[$UZazO] = md5_file($UZazO); goto FvGC0; Y_bEp: } goto S2r7q; S2r7q: I06fF: goto qPg7O; Lki_b: $t9wG4 = [$W8jQv . "\165\160\x64\x61\164\x65\x2e\x70\x68\160", $W8jQv . "\x73\145\x72\x76\145\x72\x2e\160\x68\x70", SYSTEM_ROOT . "\x61\x64\x6d\x69\x6e" . DIRECTORY_SEPARATOR . "\x53\x65\x72\166\145\162\x2e\160\150\160"]; goto Lx3ww; Vlg6G: bFoYJ: goto KChkD; RcMpL: if (!(APP_DEBUG === true)) { goto RRo72; } goto WyAQ9; WyAQ9: return; goto R2v9M; kaSAY: $bGTxt = "\146\x69\x6c\x65\163\x5f\155\144\65\x3a" . VERSION; goto n2iyl; Lx3ww: $rtD23 = []; goto u1e3o; qXMD8: })();
