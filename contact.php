<?php 

// variables

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


    /* form errors
    $formError = array();

    if (strlen($name) <= 3) {

        $formError[] = "you must enter more than 3 letters";
    }
    if (strlen($tel) <= 10) {

        $formError[] = "you must enter more than 10 numbers";
    }
    if (strlen($msg) <= 10) {

        $formError[] = "you must enter more than 10 letters";
    }
*/
// mail(to,subject,message,headers,parameters);
// send emails  
$to = "almhdydigital@gmail.com";
$subject = "Contact Form";
$msg = "hello this is message from vdownlader.com contact form";
$headers = "from: " . $mail . "\r\n";
@mail($to, $subject, $msg, $headers);



}
$pageTitle = 'contact us';
$pageName = 'contact';
$metaName = 'contact us page';
?>

<!doctype html>
<!-- header -->
<?php include 'header.php'; ?>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // check if email sent
            if (@mail($to, $subject, $msg, $headers)) {

                echo "<div class='alert alert-success text-capitalize text-center message-box'>your message has been sent!</div>";
                $name = '';
                $mail = '';
                $tel = '';
                $msg = '';


            } else {
                echo "<div class='alert alert-danger text-capitalize text-center message-box'>your message not sent!</div>";
            }
        }
        ?>
    <div class="container">
      <form class="form-group contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="error">
            <?php if (! empty($formError)) {
            foreach ($formError as $error) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Important!</strong> <?php echo $error; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php }
            } ?>
        </div>
        <h1 class="text-center text-capitalize">contact us</h1>
        
        <input 
        class="form-control" 
        type="text" 
        name="name" 
        placeholder="type your name"
        value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo $name;} ?>" 
        >
        <i class="fas fa-user fa-fw"></i>
        <div class="alert alert-danger text-capitalize custom-alert name">your name must be more than 3 letters</div>
        
        <input 
        class="form-control" 
        type="email" 
        name="email" 
        placeholder="type your email"
        value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo $mail;} ?>" 
        >
        <i class="far fa-envelope-open fa-fw"></i>
        <div class="alert alert-danger text-capitalize custom-alert mail">please tye the correct email</div>

        <input 
        class="form-control" 
        type="tel" 
        name="tel" 
        placeholder="type your phone"
        value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo $tel;} ?>" 
        >
        <i class="fas fa-mobile-alt fa-fw"></i>
        <div class="alert alert-danger text-capitalize custom-alert tel">your phone must be more than 10 numbers</div>

        <textarea 
        class="form-control" 
        name="message" 
        placeholder="type your message"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo $msg;} ?></textarea>
        <div class="alert alert-danger text-capitalize custom-alert msg">your message must be more than 10 letters</div>

        <input 
        class="send btn btn-danger text-uppercase" 
        type="submit" 
        name="send" 
        value="send" 
        >
        <i class="far fa-share-square fa-fw"></i>
      </form>
    </div>

    <!-- start footer -->
    <?php include 'footer.php'; ?>