<html lang="en-US" style="height: 100%;">

<head>
    <title>W3Schools Online Web Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="HTML,CSS,JavaScript,DOM,jQuery,PHP,SQL,XML,Bootstrap,Web,W3CSS,W3C,tutorials,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,colors,demos,tips,w3c">
    <link rel="icon" href="http://www.w3schools.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://www.w3schools.com//lib/w3.css">
    <script async="" src="//cse.google.com/adsense/search/async-ads.js"></script>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google.com/cse/cse.js?cx=012971019331610648934:m2tou3_miwy"></script>
    <script>
        (function() {
            var cx = '012971019331610648934:m2tou3_miwy';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
        })();
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-3855518-1', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
    <style>
        /* W3Schools Font Logo */
        
        .w3schools-logo {
            font-family: fontawesome;
            text-decoration: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 37px;
            letter-spacing: 3px;
            color: #555555;
            display: block;
            position: relative;
        }
        
        .w3schools-logo .dotcom {
            color: #4CAF50;
        }
        
        @font-face {
            font-family: 'fontawesome';
            src: url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'), url('../lib/fonts/fontawesome.woff?14663396') format('woff'), url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'), url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
            font-style: normal;
        }
        
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: 20px;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transform: translate(0, 0);
        }
        
        .fa-home:before {
            content: '\e800';
        }
        
        .fa-globe:before {
            content: '\e801';
        }
        
        .fa-search:before {
            content: '\e802';
        }
        
        .fa-thumbs-o-up:before {
            content: '\e803';
        }
        
        .fa-left-open:before {
            content: '\e804';
        }
        
        .fa-right-open:before {
            content: '\e805';
        }
        
        .fa-caret-down:before {
            content: '\e809';
        }
        
        .fa-caret-up:before {
            content: '\e80a';
        }
        /* Google */
        
        #nav_translate,
        #nav_search {
            display: none;
        }
        
        #nav_translate a {
            display: inline;
        }
        
        #googleSearch {
            color: #000000;
        }
        
        .searchdiv {
            max-width: 400px;
            margin: auto;
            text-align: left;
            font-size: 16px;
        }
        
        div.cse .gsc-control-cse,
        div.gsc-control-cse {
            background-color: transparent;
            border: none;
            padding: 0px;
            margin: 0px;
        }
        
        td.gsc-search-button input.gsc-search-button {
            background-color: #555555;
            border-color: #555555;
        }
        
        input.gsc-input,
        .gsc-input-box,
        .gsc-input-box-hover,
        .gsc-input-box-focus,
        .gsc-search-button {
            box-sizing: content-box;
            line-height: normal;
        }
        
        .gsc-tabsArea div {
            overflow: visible;
        }
        
        .gsst_a .gscb_a {
            margin-top: 3px;
        }
        /* Customize W3.CSS */
        
        .w3-dropnav {
            display: none;
            padding-bottom: 40px;
            position: absolute;
            width: 100%;
            z-index: 99 !important;
        }
        
        .w3-col .w3-btn {
            margin: 5px 5px 5px 0;
            font-size: 16px;
        }
        
        .w3-col.l4 .w3-card-2 {
            padding: 15px 10px;
            height: 260px;
        }
        
        .w3-closebtn {
            padding: 10px 20px !important;
            position: absolute;
            right: 0;
        }
        
        .w3-closebtn:hover {
            background-color: #cccccc;
        }
        
        .w3-theme {
            color: #fff !important;
            background-color: #4CAF50 !important;
        }
        
        .w3-accordion-content .w3-closebtn {
            display: none;
        }
        
        .w3-main {
            margin-left: 230px;
        }
        
        .w3-sidenav {
            z-index: 3;
            width: 230px;
            overflow: hidden !important;
            position: absolute !important;
            margin-bottom: -155px;
        }
        
        .w3-sidenav a {
            padding: 0 16px;
            font-size: 16px;
        }
        
        .w3-navbar {
            position: relative;
            z-index: 4;
            font-size: 17px;
        }
        
        h1 {
            font-size: 80px;
            color: #555555;
            margin: 2px 0 -20px 0 !important;
        }
        
        @media screen and (min-width:769px) {
            .w3-sidenav.w3-collapse {
                display: block !important;
            }
        }
        
        @media screen and (min-width:769px) {
            .w3-opennav,
            .w3-accordion {
                display: none !important;
            }
        }
        
        @media screen and (min-width:769px) {
            .w3-main {
                margin-left: 230px !important;
            }
        }
        
        @media screen and (max-width:768px) {
            .w3-sidenav.w3-collapse,
            .navbarbtns,
            .navex {
                display: none !important;
            }
            h1,
            .w3-jumbo {
                font-size: 60px !important;
            }
            .w3-padding-jumbo {
                padding: 32px !important;
            }
        }
    </style>
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="canonical" href="http://www.w3schools.com/">
    <script data-cfasync="false" type="text/javascript">
        window.google_analytics_uacct = "UA-80950036-41";
    </script>

    <script type="text/javascript">
        var ezouid = "880379737";
    </script>
    <base href="http://www.w3schools.com/">
    <script type="text/javascript">
        var ezoTemplate = 'old_site_gc';
        if (typeof ezouid == 'undefined') {
            var ezouid = 'none';
        }
        var ezoFormfactor = '1';
        var ezo_elements_to_check = Array();
    </script>
    <!-- START EZHEAD -->
    <script type="text/javascript">
        var soc_app_id = '0';
        var did = 34890;
        var ezdomain = 'w3schools.com';
        var ezoicSearchable = 1;
    </script>
    <!--{jquery}-->
    <!-- END EZHEAD -->
    <script type="text/javascript" cf-async="false">
        var _ezaq = {
            "ab_test_id": "mod12",
            "ab_test_val": "",
            "adgroup_rank_id": -1,
            "country": "BD",
            "device_height": 528,
            "device_width": 1280,
            "domain_id": 34890,
            "forensiq_score": -1,
            "form_factor_id": 1,
            "ip": "182.160.118.50",
            "landing_page_url": "http://www.w3schools.com/",
            "page_ad_positions": "",
            "page_view_id": "edc63008-5743-4577-6d54-0cdc29bcc30e",
            "pv_event_count": 0,
            "referrer_id": 0,
            "region": "us-east-1",
            "serverid": "54.167.164.181:29564",
            "t_epoch": 1484803919,
            "template_id": 126,
            "url": "http://www.w3schools.com/",
            "user_agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36",
            "user_id": 880379737,
            "visit_id": 99539063,
            "visit_uuid": "152ce4e4-29bc-4d93-6995-5607d799e9d8"
        };
        var _ezExtraQueries = "&ez_orig=1";
    </script>
    <script data-cfasync="false" type="text/javascript" src="http://www.w3schools.com/ezoic/imp2.js?cb=143-1&amp;v=9"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/translate_static/js/element/main.js"></script>
    <script src="https://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22search%22%2C%22version%22%3A%221.0%22%2C%22callback%22%3A%22__gcse.scb%22%2C%22style%22%3A%22https%3A%2F%2Fwww.google.com%2Fcse%2Fstyle%2Flook%2Fv2%2Fdefault.css%22%2C%22language%22%3A%22en%22%7D%5D%7D" type="text/javascript"></script>
    <script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/translate_static/js/element/61/element_main.js"></script>
    <link type="text/css" href="https://www.google.com/uds/api/search/1.0/0c3990ce7a056ed50667fe0c3873c9b6/default+en.css" rel="stylesheet">
    <link type="text/css" href="https://www.google.com/cse/style/look/v2/default.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.google.com/uds/api/search/1.0/0c3990ce7a056ed50667fe0c3873c9b6/default+en.I.js"></script>
    <style type="text/css">
        .gsc-control-cse {
            font-family: Arial, sans-serif;
            border-color: #FFFFFF;
            background-color: #FFFFFF;
        }
        
        .gsc-control-cse .gsc-table-result {
            font-family: Arial, sans-serif;
        }
        
        input.gsc-input,
        .gsc-input-box,
        .gsc-input-box-hover,
        .gsc-input-box-focus {
            border-color: #D9D9D9;
        }
        
        input.gsc-search-button,
        input.gsc-search-button:hover,
        input.gsc-search-button:focus {
            border-color: #2F5BB7;
            background-color: #357AE8;
            background-image: none;
            filter: none;
        }
        
        .gsc-tabHeader.gsc-tabhInactive {
            border-color: #CCCCCC;
            background-color: #FFFFFF;
        }
        
        .gsc-tabHeader.gsc-tabhActive {
            border-color: #CCCCCC;
            border-bottom-color: #FFFFFF;
            background-color: #FFFFFF;
        }
        
        .gsc-tabsArea {
            border-color: #CCCCCC;
        }
        
        .gsc-webResult.gsc-result,
        .gsc-results .gsc-imageResult {
            border-color: #FFFFFF;
            background-color: #FFFFFF;
        }
        
        .gsc-webResult.gsc-result:hover,
        .gsc-imageResult:hover {
            border-color: #FFFFFF;
            background-color: #FFFFFF;
        }
        
        .gs-webResult.gs-result a.gs-title:link,
        .gs-webResult.gs-result a.gs-title:link b,
        .gs-imageResult a.gs-title:link,
        .gs-imageResult a.gs-title:link b {
            color: #1155CC;
        }
        
        .gs-webResult.gs-result a.gs-title:visited,
        .gs-webResult.gs-result a.gs-title:visited b,
        .gs-imageResult a.gs-title:visited,
        .gs-imageResult a.gs-title:visited b {
            color: #1155CC;
        }
        
        .gs-webResult.gs-result a.gs-title:hover,
        .gs-webResult.gs-result a.gs-title:hover b,
        .gs-imageResult a.gs-title:hover,
        .gs-imageResult a.gs-title:hover b {
            color: #1155CC;
        }
        
        .gs-webResult.gs-result a.gs-title:active,
        .gs-webResult.gs-result a.gs-title:active b,
        .gs-imageResult a.gs-title:active,
        .gs-imageResult a.gs-title:active b {
            color: #1155CC;
        }
        
        .gsc-cursor-page {
            color: #1155CC;
        }
        
        a.gsc-trailing-more-results:link {
            color: #1155CC;
        }
        
        .gs-webResult .gs-snippet,
        .gs-imageResult .gs-snippet,
        .gs-fileFormatType {
            color: #333333;
        }
        
        .gs-webResult div.gs-visibleUrl,
        .gs-imageResult div.gs-visibleUrl {
            color: #009933;
        }
        
        .gs-webResult div.gs-visibleUrl-short {
            color: #009933;
        }
        
        .gs-webResult div.gs-visibleUrl-short {
            display: none;
        }
        
        .gs-webResult div.gs-visibleUrl-long {
            display: block;
        }
        
        .gs-promotion div.gs-visibleUrl-short {
            display: none;
        }
        
        .gs-promotion div.gs-visibleUrl-long {
            display: block;
        }
        
        .gsc-cursor-box {
            border-color: #FFFFFF;
        }
        
        .gsc-results .gsc-cursor-box .gsc-cursor-page {
            border-color: #CCCCCC;
            background-color: #FFFFFF;
            color: #1155CC;
        }
        
        .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
            border-color: #CCCCCC;
            background-color: #FFFFFF;
            color: #1155CC;
        }
        
        .gsc-webResult.gsc-result.gsc-promotion {
            border-color: #F6F6F6;
            background-color: #F6F6F6;
        }
        
        .gsc-completion-title {
            color: #1155CC;
        }
        
        .gsc-completion-snippet {
            color: #333333;
        }
        
        .gs-promotion a.gs-title:link,
        .gs-promotion a.gs-title:link *,
        .gs-promotion .gs-snippet a:link {
            color: #1155CC;
        }
        
        .gs-promotion a.gs-title:visited,
        .gs-promotion a.gs-title:visited *,
        .gs-promotion .gs-snippet a:visited {
            color: #1155CC;
        }
        
        .gs-promotion a.gs-title:hover,
        .gs-promotion a.gs-title:hover *,
        .gs-promotion .gs-snippet a:hover {
            color: #1155CC;
        }
        
        .gs-promotion a.gs-title:active,
        .gs-promotion a.gs-title:active *,
        .gs-promotion .gs-snippet a:active {
            color: #1155CC;
        }
        
        .gs-promotion .gs-snippet,
        .gs-promotion .gs-title .gs-promotion-title-right,
        .gs-promotion .gs-title .gs-promotion-title-right * {
            color: #333333;
        }
        
        .gs-promotion .gs-visibleUrl,
        .gs-promotion .gs-visibleUrl-short {
            color: #009933;
        }
    </style>
    <style type="text/css">
        .gscb_a {
            display: inline-block;
            font: 27px/13px arial, sans-serif
        }
        
        .gsst_a .gscb_a {
            color: #a1b9ed;
            cursor: pointer
        }
        
        .gsst_a:hover .gscb_a,
        .gsst_a:focus .gscb_a {
            color: #36c
        }
        
        .gsst_a {
            display: inline-block
        }
        
        .gsst_a {
            cursor: pointer;
            padding: 0 4px
        }
        
        .gsst_a:hover {
            text-decoration: none!important
        }
        
        .gsst_b {
            font-size: 16px;
            padding: 0 2px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            white-space: nowrap
        }
        
        .gsst_e {
            opacity: 0.55;
        }
        
        .gsst_a:hover .gsst_e,
        .gsst_a:focus .gsst_e {
            opacity: 0.72;
        }
        
        .gsst_a:active .gsst_e {
            opacity: 1;
        }
        
        .gsst_f {
            background: white;
            text-align: left
        }
        
        .gsst_g {
            background-color: white;
            border: 1px solid #ccc;
            border-top-color: #d9d9d9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: -1px -3px;
            padding: 0 6px
        }
        
        .gsst_h {
            background-color: white;
            height: 1px;
            margin-bottom: -1px;
            position: relative;
            top: -1px
        }
        
        .gsib_a {
            width: 100%;
            padding: 4px 6px 0
        }
        
        .gsib_a,
        .gsib_b {
            vertical-align: top
        }
        
        .gssb_c {
            border: 0;
            position: absolute;
            z-index: 989
        }
        
        .gssb_e {
            border: 1px solid #ccc;
            border-top-color: #d9d9d9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            cursor: default
        }
        
        .gssb_f {
            visibility: hidden;
            white-space: nowrap
        }
        
        .gssb_k {
            border: 0;
            display: block;
            position: absolute;
            top: 0;
            z-index: 988
        }
        
        .gsdd_a {
            border: none!important
        }
        
        .gsq_a {
            padding: 0
        }
        
        .gscsep_a {
            display: none
        }
        
        .gssb_a {
            padding: 0 7px
        }
        
        .gssb_a,
        .gssb_a td {
            white-space: nowrap;
            overflow: hidden;
            line-height: 22px
        }
        
        #gssb_b {
            font-size: 11px;
            color: #36c;
            text-decoration: none
        }
        
        #gssb_b:hover {
            font-size: 11px;
            color: #36c;
            text-decoration: underline
        }
        
        .gssb_g {
            text-align: center;
            padding: 8px 0 7px;
            position: relative
        }
        
        .gssb_h {
            font-size: 15px;
            height: 28px;
            margin: 0.2em;
            -webkit-appearance: button
        }
        
        .gssb_i {
            background: #eee
        }
        
        .gss_ifl {
            visibility: hidden;
            padding-left: 5px
        }
        
        .gssb_i .gss_ifl {
            visibility: visible
        }
        
        a.gssb_j {
            font-size: 13px;
            color: #36c;
            text-decoration: none;
            line-height: 100%
        }
        
        a.gssb_j:hover {
            text-decoration: underline
        }
        
        .gssb_l {
            height: 1px;
            background-color: #e5e5e5
        }
        
        .gssb_m {
            color: #000;
            background: #fff
        }
        
        .gsfe_a {
            border: 1px solid #b9b9b9;
            border-top-color: #a0a0a0;
            box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .gsfe_b {
            border: 1px solid #4d90fe;
            outline: none;
            box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.3);
        }
        
        .gssb_a {
            padding: 0 9px
        }
        
        .gsib_a {
            padding-right: 8px;
            padding-left: 8px
        }
        
        .gsst_a {
            padding-top: 3px
        }
        
        .gssb_e {
            border: 0
        }
        
        .gssb_l {
            margin: 5px 0
        }
        
        .gssb_c .gsc-completion-container {
            position: static
        }
        
        .gssb_c {
            z-index: 5000
        }
        
        .gsc-completion-container table {
            background: transparent;
            font-size: inherit;
            font-family: inherit
        }
        
        .gssb_c>tbody>tr,
        .gssb_c>tbody>tr>td,
        .gssb_d,
        .gssb_d>tbody>tr,
        .gssb_d>tbody>tr>td,
        .gssb_e,
        .gssb_e>tbody>tr,
        .gssb_e>tbody>tr>td {
            padding: 0;
            margin: 0;
            border: 0
        }
        
        .gssb_a table,
        .gssb_a table tr,
        .gssb_a table tr td {
            padding: 0;
            margin: 0;
            border: 0
        }
    </style>
</head>

<body style="position: relative; min-height: 100%; top: 0px;">

    <div style="position: absolute; z-index: 6; right: 60px; height: 57px; padding-top: 12px; padding-right: 20px; background-color: rgb(76, 175, 80); width: 40%;" id="googleSearch">
        <div id="___gcse_0">
            <div class="gsc-control-cse gsc-control-cse-en">
                <div class="gsc-control-wrapper-cse" dir="ltr">
                    <form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8">
                        <table cellspacing="0" cellpadding="0" class="gsc-search-box">
                            <tbody>
                                <tr>
                                    <td class="gsc-input">
                                        <div class="gsc-input-box " id="gsc-iw-id1">
                                            <table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 " style="width: 100%; padding: 0px;">
                                                <tbody>
                                                    <tr>
                                                        <td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id1" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none; background: url(&quot;http://www.google.com/cse/static/en/google_custom_search_watermark.gif&quot;) left center no-repeat rgb(255, 255, 255);"></td>
                                                        <td class="gsib_b">
                                                            <div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" style="display: none;"><span class="gscb_a" id="gs_cb50">×</span></a></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><input type="hidden" name="bgresponse" id="bgresponse"></td>
                                    <td class="gsc-search-button"><input type="image" src="https://www.google.com/uds/css/v2/search_box_icon.png" class="gsc-search-button gsc-search-button-v2" title="search"></td>
                                    <td class="gsc-clear-button">
                                        <div class="gsc-clear-button" title="clear results">&nbsp;</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellspacing="0" cellpadding="0" class="gsc-branding">
                            <tbody>
                                <tr>
                                    <td class="gsc-branding-user-defined"></td>
                                    <td class="gsc-branding-text">
                                        <div class="gsc-branding-text">powered by</div>
                                    </td>
                                    <td class="gsc-branding-img"><img src="https://www.google.com/uds/css/small-logo.png" class="gsc-branding-img"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="gsc-results-wrapper-overlay">
                        <div class="gsc-results-close-btn" tabindex="0"></div>
                        <div class="gsc-tabsAreaInvisible">
                            <div class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div>
                        <div class="gsc-tabsAreaInvisible"></div>
                        <div class="gsc-above-wrapper-area-invisible">
                            <table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container">
                                <tbody>
                                    <tr>
                                        <td class="gsc-result-info-container">
                                            <div class="gsc-result-info-invisible"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="gsc-adBlockInvisible"></div>
                        <div class="gsc-wrapper">
                            <div class="gsc-adBlockInvisible"></div>
                            <div class="gsc-resultsbox-invisible">
                                <div class="gsc-resultsRoot gsc-tabData gsc-tabdActive">
                                    <table cellspacing="0" cellpadding="0" class="gsc-resultsHeader">
                                        <tbody>
                                            <tr>
                                                <td class="gsc-twiddleRegionCell">
                                                    <div class="gsc-twiddle">
                                                        <div class="gsc-title">Web</div>
                                                    </div>
                                                    <div class="gsc-stats"></div>
                                                    <div class="gsc-results-selector gsc-all-results-active">
                                                        <div class="gsc-result-selector gsc-one-result" title="show one result">&nbsp;</div>
                                                        <div class="gsc-result-selector gsc-more-results" title="show more results">&nbsp;</div>
                                                        <div class="gsc-result-selector gsc-all-results" title="show all results">&nbsp;</div>
                                                    </div>
                                                </td>
                                                <td class="gsc-configLabelCell"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div>
                                        <div class="gsc-expansionArea"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gsc-modal-background-image" tabindex="0"></div>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none;position:absolute;z-index:5;right:120px;height:57px;background-color:#4CAF50;text-align:right;padding-top:15px;" id="google_translate_element">
        <div class="skiptranslate goog-te-gadget" dir="ltr">
            <div id=":0.targetLanguage" class="goog-te-gadget-simple" style="white-space: nowrap;"><img src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span style="vertical-align: middle;"><a role="menu" class="goog-te-menu-value" href="javascript:void(0)"><span>Select Language</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span style="border-left: 1px solid rgb(187, 187, 187);">&#8203;</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span style="color: rgb(118, 118, 118);">▼</span></a>
                </span>
            </div>
        </div>
    </div>

    <ul class="w3-navbar w3-theme w3-card-2 w3-wide">
        <li class="w3-opennav">
            <a class="w3-hover-white w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
        </li>
        <li class="navbarbtns"><a class="w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_open_nav('tutorials')" id="navbtn_tutorials" style="visibility: visible;">TUTORIALS <i class="fa fa-caret-down" style="display: none;"></i><i class="fa fa-caret-up" style="display: inline;"></i></a></li>
        <li class="navbarbtns"><a class="w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_open_nav('references')" id="navbtn_references">REFERENCES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display: none;"></i></a></li>
        <li class="navbarbtns"><a class="w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_open_nav('examples')" id="navbtn_examples">EXAMPLES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display: none;"></i></a></li>
        <li class="w3-right"><a class="w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="open_search(this)" title="Search W3Schools"><span style="font-family:verdana;font-weight:bold;display:inline-block;width:23px;text-align:center;">X</span></a></li>
        <li class="w3-right"><a class="w3-hover-white w3-padding-16 w3-right" href="javascript:void(0)" onclick="open_translate(this)" title="Translate W3Schools"><i class="fa"></i></a></li>
    </ul>



    <div id="myAccordion" class="w3-card-2 w3-light-grey w3-center w3-hide-large w3-accordion" style="display:none;cursor:default">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-closebtn w3-xlarge w3-margin-0">×</a><br>
        <div class="w3-container w3-padding-32">
            <a class="w3-btn-block w3-light-grey w3-large w3-wide w3-hover-none w3-hover-opacity" onclick="open_xs_menu('tutorials');" href="javascript:void(0);">TUTORIALS <i class="fa fa-caret-down"></i></a>
            <div id="sectionxs_tutorials" class="w3-white w3-accordion-content w3-show"></div>
            <a class="w3-btn-block w3-light-grey w3-large w3-wide w3-hover-none w3-hover-opacity" onclick="open_xs_menu('references')" href="javascript:void(0);">REFERENCES <i class="fa fa-caret-down"></i></a>
            <div id="sectionxs_references" class="w3-white w3-accordion-content w3-show"></div>
            <a class="w3-btn-block w3-light-grey w3-large w3-wide w3-hover-none w3-hover-opacity" onclick="open_xs_menu('examples')" href="javascript:void(0);">EXAMPLES <i class="fa fa-caret-down"></i></a>
            <div id="sectionxs_examples" class="w3-white w3-accordion-content w3-show"></div>
        </div>
    </div>

    <nav id="nav_tutorials" class="w3-dropnav w3-light-grey w3-card-2 w3-hide-small navex" style="display: block;">
        <span onclick="w3_close_nav('tutorials')" class="w3-closebtn w3-xlarge">×</span><br>
        <div class="w3-row-padding w3-padding-bottom">
            <div class="w3-col l3 m6">
                <h3>HTML and CSS</h3>
                <a href="/html/default.asp">Learn HTML</a>
                <a href="/css/default.asp">Learn CSS</a>
                <a href="/w3css/default.asp">Learn W3.CSS</a>
                <a href="/colors/default.asp">Learn Colors</a>
                <a href="/bootstrap/default.asp">Learn Bootstrap</a>
                <a href="/icons/default.asp">Learn Icons</a>
                <a href="/graphics/default.asp">Learn Graphics</a>
                <a href="/howto/default.asp">Learn How To</a>
            </div>
            <div class="w3-col l3 m6">
                <h3>JavaScript</h3>
                <a href="/js/default.asp">Learn JavaScript</a>
                <a href="/w3js/default.asp">Learn W3.JS</a>
                <a href="/jquery/default.asp">Learn jQuery</a>
                <a href="/jquerymobile/default.asp">Learn jQueryMobile</a>
                <a href="/appml/default.asp">Learn AppML</a>
                <a href="/angular/default.asp">Learn AngularJS</a>
                <a href="/js/js_json_intro.asp">Learn JSON</a>
                <a href="/js/js_ajax_intro.asp">Learn AJAX</a>
                <div class="w3-hide-small"><br><br></div>
            </div>
            <div class="w3-col l3 m6">
                <h3>Server Side</h3>
                <a href="/sql/default.asp">Learn SQL</a>
                <a href="/php/default.asp">Learn PHP</a>
                <a href="/asp/default.asp">Learn ASP</a>
                <h3>Web Building</h3>
                <a href="/w3css/w3css_templates.asp">Web Templates</a>
                <a href="/browsers/default.asp">Web Statistics</a>
                <a href="/cert/default.asp">Web Certificates</a>
            </div>
            <div class="w3-col l3 m6">
                <h3>XML Tutorials</h3>
                <a href="/xml/default.asp">Learn XML</a>
                <a href="/xml/ajax_intro.asp">Learn XML AJAX</a>
                <a href="/xml/dom_intro.asp">Learn XML DOM</a>
                <a href="/xml/xml_dtd_intro.asp">Learn XML DTD</a>
                <a href="/xml/schema_intro.asp">Learn XML Schema</a>
                <a href="/xml/xsl_intro.asp">Learn XSLT</a>
                <a href="/xml/xpath_intro.asp">Learn XPath</a>
                <a href="/xml/xquery_intro.asp">Learn XQuery</a>
            </div>
        </div>
    </nav>

    <nav id="nav_references" class="w3-dropnav w3-light-grey w3-card-2 w3-hide-small navex" style="display: none;">
        <span onclick="w3_close_nav('references')" class="w3-closebtn w3-xlarge">×</span><br>
        <div class="w3-row-padding w3-padding-bottom">
            <div class="w3-col m4">
                <h3>HTML</h3>
                <a href="/tags/default.asp">HTML Tag Reference</a>
                <a href="/tags/ref_eventattributes.asp">HTML Event Reference</a>
                <a href="/colors/default.asp">HTML Color Reference</a>
                <a href="/tags/ref_attributes.asp">HTML Attribute Reference</a>
                <a href="/tags/ref_canvas.asp">HTML Canvas Reference</a>
                <a href="/graphics/svg_reference.asp">HTML SVG Reference</a>
                <a href="/graphics/google_maps_reference.asp">Google Maps Reference</a>
                <h3>CSS</h3>
                <a href="/cssref/default.asp">CSS Reference</a>
                <a href="/cssref/css_selectors.asp">CSS Selector Reference</a>
                <a href="/w3css/w3css_references.asp">W3.CSS Reference</a>
                <a href="/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap Reference</a>
                <a href="/icons/icons_reference.asp">Icon Reference</a>
            </div>
            <div class="w3-col m4">
                <h3>JavaScript</h3>
                <a href="/jsref/default.asp">JavaScript Reference</a>
                <a href="/jsref/default.asp">HTML DOM Reference</a>
                <a href="/w3js/w3js_references.asp">W3.JS Reference</a>
                <a href="/jquery/jquery_ref_selectors.asp">jQuery Reference</a>
                <a href="/jquerymobile/jquerymobile_ref_data.asp">jQuery Mobile Reference</a>
                <a href="/angular/angular_ref_directives.asp">AngularJS Reference</a>
                <h3>XML</h3>
                <a href="/xml/dom_nodetype.asp">XML DOM Reference</a>
                <a href="/xml/dom_http.asp">XML Http Reference</a>
                <a href="/xml/xsl_elementref.asp">XSLT Reference</a>
                <a href="/xml/schema_elements_ref.asp">XML Schema Reference</a>

            </div>
            <div class="w3-col m4">
                <h3>Character Sets</h3>
                <a href="/charsets/default.asp">HTML Character Sets</a>
                <a href="/charsets/ref_html_ascii.asp">HTML ASCII</a>
                <a href="/charsets/ref_html_ansi.asp">HTML ANSI</a>
                <a href="/charsets/ref_html_ansi.asp">HTML Windows-1252</a>
                <a href="/charsets/ref_html_8859.asp">HTML ISO-8859-1</a>
                <a href="/charsets/ref_html_symbols.asp">HTML Symbols</a>
                <a href="/charsets/ref_html_utf8.asp">HTML UTF-8</a>
                <h3>Server Side</h3>
                <a href="/php/php_ref_array.asp">PHP Reference</a>
                <a href="/sql/sql_quickref.asp">SQL Reference</a>
                <a href="/asp/asp_ref_response.asp">ASP Reference</a>
            </div>
        </div>
    </nav>

    <nav id="nav_examples" class="w3-dropnav w3-light-grey w3-card-2 w3-hide-small navex" style="display: none;">
        <span onclick="w3_close_nav('examples')" class="w3-closebtn w3-xlarge">×</span><br>
        <div class="w3-row-padding w3-padding-bottom">
            <div class="w3-col l3 m6">
                <h3>HTML and CSS</h3>
                <a href="/html/html_examples.asp">HTML Examples</a>
                <a href="/css/css_examples.asp">CSS Examples</a>
                <a href="/w3css/w3css_examples.asp">W3.CSS Examples</a>
                <a href="/bootstrap/bootstrap_examples.asp">Bootstrap Examples</a>
            </div>
            <div class="w3-col l3 m6">
                <h3>JavaScript</h3>
                <a href="/js/js_examples.asp" target="_top">JavaScript Examples</a>
                <a href="/js/js_dom_examples.asp" target="_top">HTML DOM Examples</a>
                <a href="/w3js/w3js_examples.asp">W3.JS Examples</a>
                <a href="/jquery/jquery_examples.asp" target="_top">jQuery Examples</a>
                <a href="/jquerymobile/jquerymobile_examples.asp" target="_top">jQuery Mobile Examples</a>
                <a href="/angular/angular_examples.asp" target="_top">AngularJS Examples</a>
                <a href="/js/js_ajax_examples.asp" target="_top">AJAX Examples</a>
            </div>
            <div class="w3-col l3 m6">
                <h3>XML</h3>
                <a href="/xml/xml_examples.asp" target="_top">XML Examples</a>
                <a href="/xml/xsl_examples.asp" target="_top">XSLT Examples</a>
                <a href="/xml/xpath_examples.asp" target="_top">XPath Examples</a>
                <a href="/xml/schema_example.asp" target="_top">XML Schema Examples</a>
                <a href="/xml/ajax_examples.asp" target="_top">AJAX Examples</a>
                <a href="/graphics/svg_examples.asp" target="_top">SVG Examples</a>
                <h3>Server Side</h3>
                <a href="/php/php_examples.asp" target="_top">PHP Examples</a>
                <a href="/asp/asp_examples.asp" target="_top">ASP Examples</a>
            </div>
            <div class="w3-col l3 m6">
                <h3>Quizzes</h3>
                <a href="/quiztest/quiztest.asp?Qtest=HTML" target="_top">HTML Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=CSS" target="_top">CSS Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=JavaScript" target="_top">JavaScript Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=Bootstrap" target="_top">Bootstrap Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=jQuery" target="_top">jQuery Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=PHP" target="_top">PHP Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=SQL" target="_top">SQL Quiz</a>
                <a href="/quiztest/quiztest.asp?Qtest=XML" target="_top">XML Quiz</a>
            </div>
        </div>
    </nav>





    <!-- END MAIN -->
    </div>

    <script>
        function w3_open() {
            var x = document.getElementById("myAccordion");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function w3_close() {
            document.getElementById("myAccordion").style.display = "none";
        }

        function open_xs_menu(x) {
            if (document.getElementById("sectionxs_" + x).innerHTML == "") {
                document.getElementById("sectionxs_" + x).innerHTML = document.getElementById("nav_" + x).innerHTML;
            } else {
                document.getElementById("sectionxs_" + x).innerHTML = "";
            }
        }

        function w3_open_nav(x) {
            if (document.getElementById("nav_" + x).style.display == "block") {
                w3_close_nav(x);
            } else {
                w3_close_nav("tutorials");
                w3_close_nav("references");
                w3_close_nav("examples");
                document.getElementById("nav_" + x).style.display = "block";
                if (document.getElementById("navbtn_" + x)) {
                    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
                    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
                }
                if (x == "search") {
                    if (document.getElementById("gsc-i-id1")) {
                        document.getElementById("gsc-i-id1").focus();
                    }
                }
            }
        }

        function w3_close_nav(x) {
            document.getElementById("nav_" + x).style.display = "none";
            if (document.getElementById("navbtn_" + x)) {
                document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
                document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
            }
        }

        function open_translate(elmnt) {
            var a = document.getElementById("google_translate_element");
            if (a.style.display == "") {
                a.style.display = "none";
                elmnt.innerHTML = "<i class='fa'>&#xe801;</i>";
            } else {
                a.style.display = "";
                if (window.innerWidth > 830) {
                    a.style.width = "20%";
                } else {
                    a.style.width = "60%";
                }
                elmnt.innerHTML = "<span style='font-family:verdana;font-weight:bold;display:inline-block;width:21px;text-align:center;'>X</span>";
            }
        }

        function open_search(elmnt) {
            var a = document.getElementById("googleSearch");
            document.getElementById("navbtn_tutorials").style.visibility = "visible";
            if (a.style.display == "") {
                a.style.display = "none";
                elmnt.innerHTML = "<i class='fa'>&#xe802;</i>";
            } else {
                a.style.display = "";
                if (window.innerWidth > 1000) {
                    a.style.width = "40%";
                } else if (window.innerWidth > 768) {
                    document.getElementById("navbtn_tutorials").style.visibility = "hidden";
                    a.style.width = "80%";
                } else {
                    a.style.width = "80%";
                }
                if (document.getElementById("gsc-i-id1")) {
                    document.getElementById("gsc-i-id1").focus();
                }
                elmnt.innerHTML = "<span style='font-family:verdana;font-weight:bold;display:inline-block;width:23px;text-align:center;'>X</span>";
            }
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false,
                gaTrack: true,
                gaId: 'UA-3855518-1',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        function clickFBLike() {
            document.getElementById("fblikeframe").style.display = 'block';
            document.getElementById("popupDIV").innerHTML = "<iframe src='/fblike.asp?r=" + Math.random() + "' frameborder='no' style='height:200px;width:250px;'></iframe><br><button onclick='hideFBLike()' class='w3-btn w3-dark-grey w3-hover-black'>Close</button>";
        }

        function hideFBLike() {
            document.getElementById("fblikeframe").style.display = 'none';
        }
    </script>
    <script src="http://www.w3schools.com/lib/w3codecolor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        w3CodeColor();
    </script>
    <script type="text/javascript" src="//www.w3schools.com/utilcave_com/inc/ezf-min.php?a=a&amp;cb=1&amp;shcb=5" style="display:none;"></script>

    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div>
            </div>
        </div>
        <div class="top" style="padding: 8px; float: left; width: 100%;">
            <h1 class="title gray">Original text</h1>
        </div>
        <div class="middle" style="padding: 8px;">
            <div class="original-text"></div>
        </div>
        <div class="bottom" style="padding: 8px;">
            <div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div>
            <div class="started-activity-container">
                <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                <div class="activity-root"></div>
            </div>
        </div>
        <div class="status-message" style="display: none;"></div>
    </div>
    <table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" style="width: 180px; display: none; top: 132px; position: absolute; left: 365px;">
        <tbody>
            <tr>
                <td class="gssb_f"></td>
                <td class="gssb_e" style="width: 100%;"></td>
            </tr>
        </tbody>
    </table>
    <div class="goog-te-spinner-pos">
        <div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
    </div><iframe frameborder="0" class="goog-te-menu-frame skiptranslate" style="visibility: visible; box-sizing: content-box; width: 1003px; height: 263px; display: none;"></iframe></body>

</html>