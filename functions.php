<?php
    function show_alert($message) {
        echo "
        <script>
            alert('$message');
            document.location.href = '../index.php';
        </script>
        ";
    }
?>