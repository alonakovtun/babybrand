<?php // Template Name: Account details
get_header();
?>

<main class="main">
            <div class="accountdetails">
                <div class="accountdetails__container container">
                    <div class="accountdetails__body">
                       
                        <div class="accountdetails__column item-details">
                            <div class="item-details__title">personal details</div>
                            <form action="" class="item-details__form ">
                                <input type="text" placeholder="anna">
                            </form>
                            <form action="" class="item-details__form ">
                                <input type="text" placeholder="kowalska">
                            </form>
                            <form action="" class="item-details__form ">
                                <input type="text" placeholder="email@gmail.com">
                            </form>
                        </div>
                        <div class="accountdetails__column item-details">
                            <div class="item-details__title">password</div>
                            <form action="" class="item-details__form">
                                <input type="text" placeholder="current password">
                            </form>
                            <form action="" class="item-details__form">
                                <input type="text" placeholder="new password">
                            </form>
                            <form action="" class="item-details__form">
                                <input type="text" placeholder="confirm new password">
                            </form>
                        </div>
                        <div class="accountdetails__button">
                            save changes
                        </div>
                        <div class="accountdetails__forgot">
                            Forgot your current password?
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
get_footer();
