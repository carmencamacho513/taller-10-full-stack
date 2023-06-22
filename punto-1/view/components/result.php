<div>
    <p>El resultado de la Operación es:</p>

    <?php if ($message != "")  { ?> 
        <p><?php echo $message; ?></p>
        <?php } ?>
    
        <h3><?php echo number_format($result, 1, ",", "."); ?></h3>

</div>




