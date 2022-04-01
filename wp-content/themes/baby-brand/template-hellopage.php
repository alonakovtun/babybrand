<?php // Template Name: Hello page
get_header();
?>

<main class="main">
            <div class="hellopage">
                <div class="hellopage__container container">
                    <ul class="adress__list">
                        <li><a href="hellopage.html" class="adress__link">hello</a></li>
                        <li><a href="/orders/" class="adress__link">Orders</a></li>
                        <li><a href="adresses.html" class="adress__link">aDdresses</a>

                        </li>
                        <li><a href="accountdetails.html" class="adress__link">account details</a></li>
                        <li><a href="wishlist.html" class="adress__link">wishlist</a></li>
                        <li><a href="" class="adress__link">logout</a></li>
                    </ul>
                    <div class="hellopage__body">
                        <div class="hellopage__title">Hello Kasia!</div>
                        <div class="hellopage__subtitle">From your account dashboard you can view your recent orders,
                            manage
                            your shipping and billing addresses,
                            and edit your password and account details.</div>
                    </div>
                </div>
            </div>
        </main>

<?php
get_footer();
