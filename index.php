<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!empty($_POST["send"])){
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPhone = $_POST['userPhone'];
        $userMessage = $_POST['userMessage'];
        $userName = $_POST['userName'];
        $toEmail = $_POST['flowwersstore@gmail.com'];

        $mailHeaders = "Name: " . $userName .
        "\r\n Email: " . $userEmail .
        "\r\n Phone: " . $userPhone .
        "\r\n Message: " . $userMessage . "\r\r";
        if (mail($toEmail,$userName,$mailHeaders)){
            $message="your informations is received suceessfully.";
        }
    }
    ?>
    <div class="form-container">
        <form action="index.php" name="emailContact">
              <div class="input-row">
                <label for="">Name <em>*</em></label>
                <input type="text" name="userName" required>
              </div>
              <div class="input-row">
                <label for="">Email <em>*</em></label>
                <input type="text" name="userEmail" required>
              </div>
              <div class="input-row">
                <label for="">Phone <em>*</em></label>
                <input type="text" name="userPhone" required>
              </div>
              <div class="input-row">
                <label for="">Message <em>*</em></label>
                <input type="text" name="userMessage" required>
              </div>
              <div class="input-row">
                <input type="submit" name="send" value="submit">
                <?php  if(!empty($message)){ ?> 
                 <div class="sucess">
                    <strong><?php echo $message ?> </strong>
                 </div>
                 <?php  } ?> 
            </div>
        </form>
    </div>
</body>
</html>