<?php /* Template Name: Help Desk */ 
get_header();
the_content();
?>

<!-- <div id='primary'> -->
<div id='content' role='main' >
<!-- <br> -->
    <!-- <h1 style='text-align: center; color: #800000; font-size: 64px'> CONTACT US </h1> -->

    <form id="gform" method='POST' style='padding-left: 15%' action="https://script.google.com/macros/s/AKfycbyxXxktTd9-koW4jsgkt46HWteYXJeRfygkYki0nr7LS5oT6ENS/exec">
    <strong><?php echo $result; ?></strong>
        <div >
            <strong id="errorEmail" style='color: #ff0101'> <?php// echo $errorEmail;?></strong>
            <input id="email" type='text' name='email' placeholder='Email*' style='border: solid #a5aab9 2.5px;'>
        </div>
        <br>
        <div style='width: 75%'>
            <strong style='color: #ff0101'> <?php// echo $errorSubject; ?> </strong>
            <input id="subject" type='text' name='subject' placeholder='Subject*' style='border: solid #a5aab9 2.5px' >
        </div>
        <br>
        <div style='width: 75%'>
            <strong style='color: #ff0101'><?php// echo $errorMessage; ?></strong>
            <textarea id="message" name='message' rows='3' placeholder='Message*' style='border: solid #a5aab9 2.5px' ></textarea>
        </div>
        <br>
        <input type='submit' name='submit' id='submit' style='background: #660000; color: white' value="SUBMIT" onclick="return checkField()">
        
        <script data-cfasync="false" type="text/javascript" src='<?php  print ADMIN_JS_URL."form-submission-handler.js"; ?>'></script>

    </form>
    <div style="display:none; color: green; text-align: center;font-size: 24px; " id="thankyou_message">
        <h2 id="thanks"><em>Thanks</em> for contacting us! <br>
            We will get back to you soon!</h2>
    </div> 
    <script>

        // alert("COMPILING");
        function validEmail(email) {
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return re.test(email);
            }
            
        var email = document.getElementsByName("email")[0];
        var subject = document.getElementsByName("subject")[0];
        var message = document.getElementsByName("message")[0];
        email.addEventListener("change", function() {
            if(!validEmail(email.value)) {
                alert("Please insert valie email!");
                return false;
            }
        });
        function checkField() {
            if(subject.value == "") {
                alert("Please fill in subject field!");
                if(message.value == "") {
                    alert("Please fill in message field!");
                }
                return false;
            } else if(message.value == "") {
                alert("Please fill in message field!");
            return false;
            }
        }
        // alert("PASSED");
    </script>
    <?php the_content(); ?>
    </div><!--  #content -->
<!-- </div> #primary -->
<?php get_footer(); ?>