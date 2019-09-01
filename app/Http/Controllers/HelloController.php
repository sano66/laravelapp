<?php

namespace App\Http\Controllers;

global $head, $style, $body, $end;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

$head = '<html><head>';
$style = <<<EOF
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
EOF;

$body = '</head><body>';
$end = '</body></html>';
function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}
class HelloController extends Controller
{
    //
    public function index() {
        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello/Index</h1>
<p>これは、HelloControllerのindexアクションで作ったページです。</p>
</body>
</html>
EOF;

    }
    //
    public function index210($id='noname', $pass='unknown') {
        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello/Index</h1>
<p>これは、HelloControllerのindexアクションで作ったページです。</p>
<ul>
<li>ID: {$id}</li>
<li>PASS: {$pass}</li>
</ul>
</body>
</html>
EOF;

    }

    public function index211() {
        global $head, $style, $body, $end;
        $html = $head . tag('title', 'Hello/Index') . $style . $body
            . tag('h1','Hello211/Index') . tag('p', 'this is Index page')
            . '<a href="/hello211/other">go to Other page</a>'
            . $end;
        return $html;

    }
    public function other211() {
        global $head, $style, $body, $end;
        $html = $head . tag('title', 'Hello/Index') . $style . $body
            . tag('h1','Hello211/Other') . tag('p', 'this is Other page')
            . $end;
        return $html;

    }
    //
    public function __invoke() {
        return <<<EOF
<html>
<head>
<title>Hello/__invoke</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello/__invoke</h1>
<p>これは、HelloControllerの__invokeアクションで作ったページです。</p>
<p>__invoke()アクションは、web.phpではクラス名だけを指定したコントローラーのデフォルトアクションです。</p>
</body>
</html>
EOF;

    }
    //
    public function index215(Request $request, Response $response) {
        return <<<EOF
<html>
<head>
<title>Hello/Request/Response</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 120pt; text-align: right; color: #fafafa;
  margin: -50px 0px -120px 0px;}
</style>
</head>
<body>
<h1>Hello</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
</html>
EOF;

    }
}
