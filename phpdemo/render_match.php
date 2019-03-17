<?php 
session_start();

    require 'mcq_parsers/quiz_parser.php';
    
    $matchItems = array();

    if(!isset($_SESSION['matchCounter'])){
    $_SESSION['matchCounter'] = 0;
    $_SESSION['counter'] = 0;    
}

    for($i = $_SESSION['matchCounter']; $i<1; $i++){
    array_push($matchItems, $match1[$i]);
    array_push($matchItems, $match2[$i]);
    array_push($matchItems, $match3[$i]);

    if(isset($match4[$i]))
    array_push($matchItems, $match4[$i]);
    if(isset($match5[$i]))
    array_push($matchItems, $match5[$i]);
    if(isset($match6[$i]))
    array_push($matchItems, $match6[$i]);
    if(isset($match7[$i]))
    array_push($matchItems, $match7[$i]);
    if(isset($match8[$i]))
    array_push($matchItems, $match8[$i]);
}

$randMatch = $matchItems;
shuffle($randMatch)
?>

<form action="render_match_submit.php" method="post">
    <label for="match1"><?php echo $opt1[$_SESSION['counter']]?>
    <select name="match1">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br>

    <label for="match2"><?php echo $opt2[$_SESSION['counter']]?>
    <select name="match2">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br>

    <label for="match3"><?php echo $opt3[$_SESSION['counter']]?>
    <select name="match3">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach;?>
    </select><br>

    <?php if(isset($match4[$_SESSION['matchCounter']])){?>
    <label for="match4"><?php echo $opt4[$_SESSION['counter']]?>
    <select name="match4">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br>

    <?php if(isset($match5[$_SESSION['matchCounter']])){?>
    <label for="match5"><?php echo $opt5[$_SESSION['counter']]?>
    <select name="match5">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br>

    <?php if(isset($match6[$_SESSION['matchCounter']])){?>
    <label for="match6"><?php echo $opt6[$_SESSION['counter']]?>
    <select name="match6">
        <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
        <?php endforeach; }?>
    </select><br>

    <?php if(isset($match7[$_SESSION['matchCounter']])){?>
    <label for="match7"><?php echo $opt7[$_SESSION['counter']]?>
    <select name="match7">
    <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
    <?php endforeach; }?>
    </select><br>

    <?php if(isset($match8[$_SESSION['matchCounter']])){?>   
    <label for="match8"><?php echo $opt8[$_SESSION['counter']]?>
    <select name="match8">
    <?php foreach($randMatch as $item): ?>
            <option> <?php echo $item ?></option>
    <?php endforeach; }?>
    </select><br>
<input type="hidden" name="pFeed" value=<?php echo $pFeed[$_SESSION['counter']] ?>>
<input type="hidden" name="nFeed" value=<?php echo $nFeed[$_SESSION['counter']] ?>>

<?php foreach($matchItems as $val):
        echo '<input type="hidden" name="corArr[]" value="'.$val.'">';
    endforeach; ?>

<input type="submit" name="submit" value="Submit" />
</form>

