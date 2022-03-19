<?php
// Include configuration file
include_once 'config.php';
$status = $statusMsg = '';
if(!empty($_SESSION['status_response'])){
    $status_response = $_SESSION['status_response'];
    $status = $status_response['status'];
    $statusMsg = $status_response['status_msg'];

    unset($_SESSION['status_response']);
}
?>
<style>
<?php include 'css/styles.css'; ?>
</style>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>


    <h1> UPLOAD YOUR CV Testing </h1>
    <form method="post" action="upload.php" class="form" enctype="multipart/form-data">
        
    <div class="sign-in-htm">
                    <div class="group">
                        <label for="fullname" class="label">Full Name</label>
                        <input id="fullname" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="email" class="input" >
                    </div>
                    <div class="group">
                        <label for="phone" class="label">Phone Number</label>
                        <input id="phone" type="tel" class="input" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
    </div>







    

        <div class="form-group">
            <label>File</label>
            <input type="file" name="file" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" name="submit" value="Upload"/>
        </div>
    </form>
