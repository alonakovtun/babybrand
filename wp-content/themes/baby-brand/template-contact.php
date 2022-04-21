<?php // Template Name: Contact
get_header();
?>

<main class="main">
            <div class="contactpage">
                <div class="contactpage__container container">
                    <div class="contactpage__body">
                        <div class="contactpage__column">
                            <h4 class="contactpage__title"><?php the_field('customer_service_title') ?></h4>
                            <div class="contactpage__text">
                                <?php the_field('customer_service_content') ?>
                            </div>
                        </div>
                        <div class="contactpage__column">
                            <h4 class="contactpage__title"><?php the_field('company_address_title') ?></h4>
                            <div class="contactpage__text">
                                <?php the_field('company_address_content') ?>
                            </div>
                        </div>
                        <div class="contactpage__column">
                            <h4 class="contactpage__title"><?php the_field('question_title') ?></h4>
                            <div class="contactpage__text--3">
                                <?php the_field('question_content') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
get_footer();
