<?php 
    define('TITLE',"Profile Saya");
    include 'includes/header.php';
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<div class="content">
<div style="text-align: center">
    <img id="userDp" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> >
 
    <h1><?php echo strtoupper($_SESSION['userUid']); ?></h1>
    <hr>
</div>


<h3><?php echo strtoupper($_SESSION['f_name']) . " " . strtoupper($_SESSION['l_name']); ?></h3>                
<p>
<?php 
    if ($_SESSION['gender'] == 'm')
    {
        echo 'Laki-Laki';
    }
    else if ($_SESSION['gender'] == 'f')
    {
        echo 'Perempuan';
    }
?>
</p>

<h6><?php echo $_SESSION['headline']; ?></h6>
<p><?php echo $_SESSION['bio'];?></p> 
<hr>
<br><br>

                
                
<?php include 'includes/footer.php'; ?> 


                
