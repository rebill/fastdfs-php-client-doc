<?php
$dfs = new FastDFS();
$methods = get_class_methods($dfs);

foreach($methods as $m) {
    echo 'public function ', $m, '(';
    $r = new ReflectionMethod($dfs, $m);
    $params = $r->getParameters();
    $pc = count($params);
    $i = 1;
    foreach($params as $p) {
        echo "$", $p->getName(), ($p->isOptional() ? "=''" : ''), ($i<$pc ? ', ' : '');
        $i++;
    }
    echo "){}\n";
}