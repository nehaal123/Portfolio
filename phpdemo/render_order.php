<?php 
    require 'mcq_parsers/story_parser.php';   
    
    $randSteps = $steps;
    shuffle($randSteps);

    echo "<h2>Put the following steps below in the correct order:</h2><hr>";
?>
<form action="render_order_submit.php" method="POST">
    <select name='step1'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br><br>
    
    <select name='step2'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br><br>

    <select name='step3'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br><br>

    <?php if(isset($randSteps[3])){?>
    <select name='step4'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[4])){?>
    <select name='step5'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[5])){?>
    <select name='step6'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[6])){?>
    <select name='step7'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[7])){?>
    <select name='step8'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[8])){?>
    <select name='step9'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[9])){?>
    <select name='step10'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[10])){?>
    <select name='step11'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[11])){?>
    <select name='step12'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[12])){?>
    <select name='step13'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[13])){?>
    <select name='step14'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php if(isset($randSteps[14])){?>
    <select name='step15'>
        <?php foreach($randSteps as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br><br>

    <?php foreach($steps as $val):
        echo '<input type="hidden" name="corArr[]" value="'.$val.'">';
    endforeach; ?>
    <input type="submit" name="submit" value="submit">
</form>