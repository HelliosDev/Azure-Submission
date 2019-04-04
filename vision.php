<!DOCTYPE html>
<html>
<head>
    <title>Analyze Sample</title>
    <script src="../assets/jquery-3.3.1.min.js"></script>
</head>
<body>

<script src="imageProcess.js" type="text/javascript"></script>

<h1>Analyze image:</h1>
<input type="hidden" name="inputImage" id="inputImage" value="<?= $_GET["query"]; ?>"/>
<button onclick="processImage()">Analyze</button>
<br><br>
<div id="wrapper" style="width:1020px; display:table;">
    <div id="jsonOutput" style="width:600px; display:table-cell;">
        Response:<br><br>
        <textarea id="responseTextArea" style="width:580px; height:400px;"></textarea>
    </div>
    <div id="imageDiv" style="width:420px; display:table-cell;">
        Source image:
        <br><br>
        <img id="sourceImage" width="400" />
    </div>
</div>
</body>
</html>