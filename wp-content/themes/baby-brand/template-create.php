<?php // Template Name: Create
get_header();
?>

<main class="main">
            <div class="create">
                <div class="create__container container">
                    <div class="create__body">
                        <div class="create__title"><?php _e('Create an account', 'baby-brand')?></div>
                        <div class="create__column">
                            <div class="create__column item-create">
                                <div class="item-create__title"></div>
                                <form action="" class="item-create__form ">
                                    <input type="text" placeholder="email">
                                </form>
                                <form action="" class="item-create__form ">
                                    <input type="text" placeholder="password">
                                </form>
                            </div>
                            <div class="create__button">
                                register
                            </div>
                            <div class="create__text"><?php _e(' By creating an account, you accept our Terms and Conditions and
                                confirm that you have read our Privacy Policy.', 'baby-brand')?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
get_footer();
