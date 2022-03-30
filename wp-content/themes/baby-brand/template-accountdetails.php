<?php // Template Name: Account details
get_header();
?>

<main class="main">
            <div class="accountdetails">
                <div class="accountdetails__container container">
                    <div class="accountdetails__body">
                        <ul class="adress__list">
                            <li><a href="hellopage.html" class="adress__link">hello</a></li>
                            <li><a href="orders.html" class="adress__link">Orders</a></li>
                            <li><a href="adresses.html" class="adress__link">aDdresses</a>

                            </li>
                            <li><a href="accountdetails.html" class="adress__link">account details</a></li>
                            <li><a href="wishlist.html" class="adress__link">wishlist</a></li>
                            <li><a href="" class="adress__link">logout</a></li>
                        </ul>
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
