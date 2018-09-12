<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            padding: 0 8%;
            font-size: 1.5rem;
        }
        /* Sspai Web Theme A theme to [sspai](ssp.ai) default theme. Developed by Codegass(wchweichenhao@gmial.com) & Yves(yves@sspai.com) Download Cuto on the App Store and Google Play! */ body { font-size: 15px; color:#333; background:#fff; font-family: Helvetica, Arial, "PingFang SC", "Microsoft YaHei", "WenQuanYi Micro Hei", "tohoma,sans-serif"; margin: 0; } h1 { font-size: 2.2em; font-weight: 700; line-height: 1.1; padding-top: 16px; margin-bottom: 4px; } h2, h3, h4, h5, h6 { line-height: 1.5em; margin-top: 2.2em; margin-bottom: 4px; } h2 { font-size: 1.4em; margin: 40px 10px 20px 0; padding-left: 9px; border-left: 6px solid #ff7e79; font-weight: 700; line-height: 1.4; } h3 { font-weight: 700; font-size: 1.2em; line-height: 1.4; margin: 10px 0 5px; padding-top: 10px; } h4 { font-weight: 700; text-transform: uppercase; font-size: 1.1em; line-height: 1.4; margin: 10px 0 5px; padding-top: 10px } h5, h6 { font-size: .9em; } h5 { font-weight: bold; text-transform: uppercase; } h6 { font-weight: normal; color: #AAA; } img { width: 100%; border-radius: 5px; display: block; margin-bottom: 15px; height: auto; } dl,ol,ul { margin-top: 12px; margin-bottom: 20px; padding-left: 5%; line-height: 1.8; } p { margin: 0 0 20px; padding: 0; line-height: 1.8; } a { color: #f22f27; text-decoration: none; } a:hover { color: #f55852; text-decoration: underline; } a:focus { outline-offset: -2px; } blockquote { font-size: 1em; font-style: normal; padding: 30px 38px; margin: 0 0 15px; position: relative; line-height: 1.8; text-indent: 0; border: none; color: #888; } blockquote:before { content: "“"; left: 12px; top: 0; color: #E0E0E0; font-size: 4em; font-family: Arial, serif; line-height: 1em; font-weight: 700; position: absolute; } blockquote:after { content: "”"; right: 12px; bottom: -26px; color: #E0E0E0; font-size: 4em; font-family: Arial, serif; line-height: 1em; font-weight: 700; position: absolute; bottom: -31px; } strong, dfn { font-weight: 700; } em, dfn { font-style: italic; font-weight: 400; } del { text-decoration: line-through; } pre { margin: 0 0 10px; font-size: 13px; line-height: 1.42857; word-break: break-all; word-wrap: break-word; border-radius: 4px; white-space: pre-wrap; display: block; background: #f8f8f8; padding: 10px 20px; border: none; margin-bottom: 25px; color: #666; font-family: Courier, sans-serif; } code { color: #c7254e; background-color: #f9f2f4; border-radius: 4px; font-family: Menlo, Monaco, Consolas, "Courier New", monospace; padding: 2px 4px; font-size: 90%; } p > code { color: #c7264e; background-color: #f9f2f4; font-size: .95em; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; } figure {margin: 1em 0;} figcaption {font-size: 0.75em;padding:0.5em 2em;margin-bottom: 2em;} figure img {margin-bottom: 0px;} hr { margin-top: 20px; margin-bottom: 20px; border: 0; border-top: 1px solid #eee; } ol p, ul p {margin-bottom: 0px;} li {margin-bottom: 0.75em;margin-top: 0.75em;} ol#footnotes { font-size: 0.95em; padding-top: 1em; margin-top: 1em; margin-left: 0; border-top: 1px solid #eaeaea; counter-reset: footer-counter; list-style: none; color: #555; padding-left: 5%; margin: 20px 0; } ol#footnotes li { margin-bottom: 10px; margin-left: 16px; font-weight: 400; line-height: 2; list-style-type: none; } ol#footnotes li:before { content: counter(footer-counter) ". "; counter-increment: footer-counter; font-weight: 800; font-size: .95em; } @keyframes highfade { 0% { background-color: none; } 20% { background-color: yellow; } 100% { background-color: none; } } @-webkit-keyframes highfade { 0% { background-color: none; } 20% { background-color: yellow; } 100% { background-color: none; } } a:target, ol#footnotes li:target, sup a:target { animation-name: highfade; animation-duration: 2s; animation-iteration-count: 1; animation-timing-function: ease-in-out; -webkit-animation-name: highfade; -webkit-animation-duration: 2s; -webkit-animation-iteration-count: 1; -webkit-animation-timing-function: ease-in-out; } a:target {border:0;outline: 0;} animation-iteration-count: 1; -webkit-animation-timing-function: ease-in-out; } a:target {border:0;outline: 0;}tion-iteration-count: 1; -webkit-animation-timing-function: ease-in-out; } a:target {border:0;outline: 0;}
        
        #left{
            width: 200px;
            float: left;
            border-right: 1px solid #eee;
        }

        #left a{
            color: #555;
            font-size: 80%;
        }

        #left h1{
            display: none;
        }

        #right{
            margin-left: 300px;
        }
    
    </style>
</head>
<body>
    <div id="left">
        <?php echo $loc;?>
    </div>
    <div id="right">
        <?php echo $content;?>
    </div>
</body>
</html>