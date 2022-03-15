<?php
$page="connection";
include("inc/head.php");
?>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3">Logın</h2>
                    <h3 class="section-subheading text-muted">Please Vote.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" action="login2.php" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                           
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="id" id="id number" type="num" placeholder="Your id number *" required="required" data-validation-required-message="Please enter your id number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" name="vote" id="vote" placeholder="Your Vote *" required="required" data-validation-required-message="Please enter your vote."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="VoteButton" type="submit">Vote</button>
                    </div>
                </form>
            </div>
        </section>
        <?php
        include("inc/footer.php");

        ?>