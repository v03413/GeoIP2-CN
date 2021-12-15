<?php
$data = [];
$dst  = './dst/';
$name = 'China_IP_list.txt';
$src  = 'https://cdn.jsdelivr.net/gh/Hackl0us/GeoIP2-CN@release/CN-ip-cidr.txt';
$arr  = explode("\n", file_get_contents($src));
foreach ($arr as $tmp) {
    $line = trim($tmp);
    if (empty($line)) {
        continue;

    }

    $data[] = $line;
}

if (!is_dir($dst)) {

    mkdir($dst);
}

file_put_contents($dst . $name, implode("\n", $data));

echo date('[Y-m-d H:i:s] ') . "成功更新：" . count($data);
echo "\n";