<?php
    function show_alert($message) {
        echo "
        <script>
            alert('$message');
            document.location.href = '../azure_app/index.php';
        </script>
        ";
    }
?>