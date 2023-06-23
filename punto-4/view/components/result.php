<div>
    <h4><?php echo $personName; ?></h4>
    <?php if ($ageNumber != 0) { ?>
        <h4><?php echo "Tienes " . $ageNumber . " años"; ?></h4>
    <?php } ?>
        
    <h3><?php if ($message != "")  { ?> 
        <p><?php echo $message; ?></p>
        <?php } ?>
    </h3>
   
</div>




