<?php 
    // Message Vars
    $msg = [];
    
    // Check for submit
    if(filter_has_var(INPUT_POST,'submit')){
        // Get Form Data 
        $name = htmlspecialchars($_POST['name']); 
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // Check Email 
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
                $msg['email'] = [
                    'msg' => 'Please use a valid email',
                    'class' => 'alert-danger'
                ];
            } else { 
                // Passed
                $toEmail = 'keyos27@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>' .$name. '</p>
                    <h4>Email</h4><p>' .$email. '</p>
                    <h4>Message</h4><p>' .$message.'</p>
                    ';

                    // Email Headers
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-Type:text/html;charaset=UTF-8" . "\r\n";
                    
                    // Additional Headers
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";

                    if(mail($toEmail, $subject, $body, $headers)){
                        // Email Sent
                        $msg['default'] = [
                            'msg' => 'Your email has been sent',
                            'class' => 'alert-success'
                         ];
                    } else {
                        // Failed
                        $msg['default'] = [
                            'msg' => 'Your email was not sent',
                            'class' => 'alert-danger'
                         ];
                    }
            }
        } else {
            // Failed
            $msg['default'] = [
                'msg' => 'Please fill in all fields',
                'class' => 'alert-danger'
             ];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact US</title>
</head>
<body>
     <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
     </nav>
     <div class="container">
        <?php if(isset($msg['default'])): ?>
            <div class="alert <?php echo $msg['default']['class']; ?>"><?php echo $msg['default']['msg']?></div>
         <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
                <label for="name">Name</label> 
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                <?php if(isset($msg['name'])): ?>
                <div class="alert <?php echo $msg['name']['class']; ?>"><?php echo $msg['name']['msg']?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                <?php if(isset($msg['email'])): ?>
                <div class="alert <?php echo $msg['email']['class']; ?>"><?php echo $msg['email']['msg']?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                <?php if(isset($msg['message'])): ?>
                <div class="alert <?php echo $msg['message']['class']; ?>"><?php echo $msg['message']['msg']?></div>
             <?php endif; ?>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">
            Submit</button>
        </form>
     </div>
</body>
</html>