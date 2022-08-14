<?php 
/**
 * Template Name: Contact Us
 */
get_header();
?>

<section class="section-page-contact py-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-wrapper">
                    <div class="section-title text-left">
                        <h2>Get in Touch</h2>
                        <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                    </div><!-- section-title -->
                    <div class="form-inner">
                        <?php echo do_shortcode('[contact-form-7 id="39" title="Contact Form"]'); ?>
                    </div><!-- form-inner -->
                </div><!-- contact-wrapper -->
            </div><!-- col-lg-5 -->
            <div class="col-lg-5">
                <div class="contact-right">
                    <div class="info-inner">
                        <div class="contact-info india">
                            <p>Zebra Techies Solution</p>
                            <ul>
                                <li class="address">Debigarh 4th Lane, Madhyamgram Kolkata (W.B) India – 700129</li>
                                <li class="phone">+91-9804210198</li>
                            </ul>
                        </div><!-- contact-info -->
                        <div class="contact-info usa">
                            <p>Zebra Techies Solution</p>
                            <ul>
                                <li class="address">10685-B Hazelhurst Dr. #20871 Houston, TX 77043 USA</li>
                                <li class="phone">+1-213-233-1633</li>
                                <li class="email"><a href="mailto:support@zebratechies.com">support@zebratechies.com</a></li>
                            </ul>
                        </div><!-- contact-info -->
                    </div><!-- info-inner -->
                </div><!-- contact-right -->
            </div><!-- col-lg-5 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- section-page-contact -->

<?php
get_footer();