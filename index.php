<?php
require_once "vendor/autoload.php"; 
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;

$endpoint = "DefaultEndpointsProtocol=https;AccountName=".getenv('ACCOUNT_NAME').";AccountKey=".getenv('ACCOUNT_KEY');
$client = BlobRestProxy::createBlobService($endpoint);

$container_name = "imagessubmission";
$list_blob = new ListBlobsOptions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Gambar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #343A40;
            color: #FFF;
        }

        table a {
            text-decoration: none;
            background-color: #00F801;
            color: #FFF;
            padding: 15px;
            border: 1px solid #DDD;
            border-radius: 1000px;
        }
    </style>
</head>
<body>
    <h1>List Gambar</h1>
    <a href="form_insert.php">[+]Add New</a>
    <table>
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama File</th>
                <th>Link File</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                do{
                    $result = $client->listBlobs($container_name, $list_blob);
                    foreach ($result->getBlobs() as $blob)
                    {   
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$blob->getName()."</td>";
                        echo "<td>".$blob->getUrl()."</td>";
                        echo "<td><a href=vision.php?query=".$blob->getUrl().">Analisis</a></td>";
                        echo "</tr>";
                        $i++;
                    }
                } while($result->getContinuationToken());
            ?>
        </tbody>
    </table>
</body>
</html>