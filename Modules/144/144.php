<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/144.less', 'css/144.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module 144</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/144.css" rel="stylesheet" type="text/css" />
        <link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
        <script src="/js/jquery-3.4.1/jquery.min.js"></script>
        <script src="/js/bootstrap-3.4.0/bootstrap.min.js"></script>      
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/144.less', 'css/144.css');
        ?>
    </head>
    <body >
        <?php include '../144/144-content.php'; ?>
    </body>
</html>