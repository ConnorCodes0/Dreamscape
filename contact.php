<?php
    session_start();

    require_once 'includes/head.inc.php';
?>
<title>Dreamscape | Contact us</title>
</head>

<?php
    require_once 'includes/navbar.inc.php';
?>

<section class="contact-header">
    <h2>CONTACT US</h2>
</section>

<section class="contact">
        <div class="contact-wrap">
            <form action="includes/new-message.inc.php" method="post">
                <h2>
                    <?php
                        $formText = 'Send us a message!';

                            // checks if the session variable exists and then changes the text of the h2

                                if (isset($_SESSION['message-sent'])) {
                                    $formText = 'Message sent successfully!';
                                    session_destroy();  
                                }

                        echo $formText;
                    ?>
                </h2>
                
                <div>
                    <label for="form-name">Name:</label>

                    <div class="input-wrap">
                        <input type="text" name="name" class="form-name form-input" placeholder="Your name..." id="form-name" required>
                        <span name="name-span" class="input-span name-span"></span>
                    </div>
                </div>
                
                <div>
                    <label for="form-email">Email:</label>

                    <div class="input-wrap">
                        <input type="email" name="email" class="form-email form-input" placeholder="Your email..." id="form-email" required>
                        <span name="email-span" class="input-span email-span"></span>  
                    </div>
                </div>

                <div>
                    <label for="form-message">Message:</label>
                    <div class="input-wrap">
                        <textarea name="message" class="form-message form-input" id="form-message" cols="45" rows="7" maxlength="250" placeholder="Your message..." required></textarea>
                        <span name="message-span" class="input-span message-span"></span>
                    </div>
                </div>

                <button type="submit" name="submit" class="form-submit">Send</button>
            </form>

            <div class="contact-page-separator"></div>

            <div class="social-wrap">
                <h2>Tel: <a href="#">01782 567345</a></h2>
                <h2>Email: <a href="#">dreamscape@outlook.co.uk</a></h2>

                <ul>
                    <li class="contact-list"><a href="#" class="contact-link"><i class="fab fa-instagram"></i></a></li>
                    <li class="contact-list"><a href="#" class="contact-link"><i class="fab fa-twitter"></i></a></li>
                    <li class="contact-list"><a href="#" class="contact-link"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
</section>

<?php
    require_once 'includes/footer.inc.php';
?>