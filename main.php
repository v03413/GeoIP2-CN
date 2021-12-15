<?php
$data = [];
$file = sys_get_temp_dir() . '/China_IP_list.txt';
$src  = 'https://cdn.jsdelivr.net/gh/Hackl0us/GeoIP2-CN@release/CN-ip-cidr.txt';
$arr  = explode("\n", file_get_contents($src));
foreach ($arr as $tmp) {
    $line = trim($tmp);
    if (empty($line)) {
        continue;

    }

    $data[] = $line;
}

file_put_contents($file, implode("\n", $data));
echo $file . "\n";
echo date('[Y-m-d H:i:s] ') . "成功更新：" . count($data);
echo "\n";