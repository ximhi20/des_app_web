</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?>.</p>
    <?php
        if(!$index){
            // Que me permita regresar al index si no estoy ahí ya
            echo "<a href='index.php'><button type='button'>Regresar</button></a>";
        }
    ?>
</footer>
</body>
</html>