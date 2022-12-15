<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Files to download</title>
<link rel="stylesheet" href="css/themes/darkly.min.css" title="Grundlayout">
</head>
<body>
<div class="container">
<header><h1>Files to download</h1></header>
<main>
<table class="table table-bordered">
<tr>
<th>ID</th>
<th>File name</th>
<th>File size</th>
<th>Action</th>
</tr>
<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from newfiles where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();
    $file = $filepath.'/'.$data['filename'];
    
    if(file_exists($file)){
    ob_clean(); flush();
    header('Content-Type: '. $data['type']);
    header('Content-Transfer-Encoding: Binary');
    header('Content-Length: '.filesize($file));
    header('Content-disposition: attachment; filename="'.basename($file).'"');
    header('Content-Description: '.$data['description']);
    header('Content-Disposition: '. $data['disposition'].'; filename="'.basename($file).'"');
    header('Expires: '.$data['expires']);
    header('Cache-Control:'. $data['cache']);
    header('Pragma:'. $data['pragma']);
    readfile($file);
    exit;
    }}

$stmt = $db->prepare("select * from $db_table");
$stmt->execute();
while($row = $stmt->fetch()){ ?>
<tr>
<td><?php print $row['id'] ?></td>
<td><?php print $row['filename'] ?></td>
<td><?php print filesize($filepath.'/'.$row['filename']).' Byte' ?></td>
<td class="text-center"><a href="download.php?id=<?php print $row['id'] ?>" class="btn btn-primary">Download</a></td>
</tr>
<?php
}
?>
</table>
</main>
</div>
</body>
</html>
