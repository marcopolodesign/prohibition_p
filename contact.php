<?php
  // Checks if form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['email']; 
    $nombre = $_POST['personName'];
    $company = $_POST['companyname'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget'];
    $clientmessage = $_POST['message'];
    $message = "$nombre at $company left this message mensaje:\n\n$clientmessage\n\nFrom: $from\n\nBudget: $budget\nPhone: $phone".PHP_EOL;

    mail(
      "info@prohibitionpartners.com", 
      "Contact via website of Prohibition Partners", 
      $message,
      "From: website@prohibitionpartners.com"
    );

    header('Location: /thank-you'); 
  }
?>
<?php /* Template Name: Contact */?>

<?php get_header();?>

<div class="content-area contact-template pp-dark-blue-bg min-height-100vh flex">

    <div class="starter-div flex justify-between center contact-starter margin-auto w-80">

      <div class="form-intro w-30 flex flex-column justify-between">
        <div>
          <h1 class="white">Contact Us</h1>
          <h2 class="white">Request publications, investment consultancy or any further doubts and we will get in contact as soon as possible.</h2>
        </div>

        <div>
         

          <p class="white"><a href="mailto:info@prohibitionpartners.com" class="white pb4">info@prohibitionpartners.com</a><br>+44 020 7409 5042</p>
        </div>
      </div>
      
        <div class="form-container flex flex-column center w-60 bg-white pa5 pp-corners">
          <form action="" method="POST" id="subForm" class="sign-up form-inner justify-start no-smoothState">
            <div class="flex justify-between ">
                <input placeholder="Name*" id="fieldName" name="personName" type="text" class="mail-input w-45 " required="">
                <input placeholder="Company Name" id="companyName" name="companyname" type="text" class="mail-input w-45">
            </div>
              <div class="flex justify-between mt5">
                <input placeholder="Email*" id="fieldEmail" name="email" type="mail" class="mail-input w-45" required="">
                <input placeholder="Phone*" id="phone" name="phone" type="text" class="mail-input w-45"  >
              </div>
              <textarea placeholder="Leave us a message"  id="fieldMessage" name="message" type="text" class="mail-input message-input w-100 mt5"></textarea>
            
              <div class="w-100 button-container flex mt5">
                <button class="no-smoothState suscribe-btn pa3 w-20 send-btn"type="submit" class="ttu submit align-end " name="submit">Send</button>
              </div>
          </form>
        </div>


    </div>


  
    
</div>

<div class="offices-locations-container flex">
  <a class="pp-dark-blue-bg w-50 london-loc cover no-repeat bg-center" href="https://goo.gl/maps/F5pg6L1z1YT2" target="_blank"> 
    <div class="london-office pa6 flex margin-auto">
      <div class="london-off tc margin-auto">
        <p class="white mb4"><span class="fw5">London<br></span>
        3 Hill Street, W1J 5AL,<br>
        London, United Kingdom</p>
      </div>
    </div>
  </a> 

   <a class="w-50  bcn-loc cover no-repeat bg-center" href="https://goo.gl/maps/e1uruY5nDL82" target="_blank"> 
    <div class="bcn-office pa6 flex margin-auto">
      <div class="bcn-off tc margin-auto">
          <p class="white mb4"><span class="fw5">Barcelona<br></span>Carrer d'Estruc 9, 08002,<br>
            Barcelona, Spain</p>
        </div>
    </div>
  </a> 
 
</div>




<?php get_footer(); ?>
