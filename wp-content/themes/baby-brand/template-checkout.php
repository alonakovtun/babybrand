<?php // Template Name: Checkout
get_header();
?>

<main class="main">
            <div class="checkout">
                <div class="checkout__container container">
                    <div class="checkout__body">
                        <div class="chekout__gobackbtn">Go back</div>
                        <div class="checkout__column item-checkout">
                            <div class="item-checkout__name">delivery address</div>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="First name">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="Last name">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform"
                                    placeholder="Company (optional)">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="Address">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="Zip code">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="City">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>

                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="Country">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="Phone number">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <form action="" class="item-checkout__form mistakeform">
                                <input type="email" class="item-login__email mistakeform" placeholder="E-MAIL">
                                <div class="item-checkout__formtext mistakeform">this field is required</div>
                            </form>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">SHIP to different address</div>
                                <div class="option-item__plus">+</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">Invoice data (optional)</div>
                                <div class="option-item__plus">+</div>
                            </div>
                            <div class="item-checkout__subname">billing summary</div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">want to use gift card or coupon code)
                                </div>
                                <div class="option-item__plus">+</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">Item total</div>
                                <div class="option-item__total">300 EUR</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">Shipping to Poland</div>
                                <div class="option-item__total">5 EUR</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__name">total</div>
                                <div class="option-item__total">305 EUR</div>
                            </div>
                            <div class="item-checkout__subname">payment method</div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__icon option-item__icon"><img class="img-pay"
                                        src="img/paymethod1.png" alt="">
                                </div>
                                <div class="option-item__methods red">PayPal, bank transfer, credit card</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__icon"><img src="img/paymethod2.png" alt="">
                                </div>
                                <div class="option-item__methods red">PayPal, bank transfer, credit card</div>
                            </div>
                            <div class="item-checkout__option option-item ">
                                <div class="option-item__icon option-item__icon"><img class="img-pay"
                                        src="img/paymethod1.png" alt="">
                                </div>
                                <div class="option-item__methods red">PayPal, bank transfer, credit card</div>
                            </div>
                            <div class="item-checkout__buttons">
                                <div class="item-checkout__button active">place order</div>
                                <div class="item-checkout__button">pay</div>
                                <div class="item-checkout__button">delete</div>
                            </div>
                            <div class="item-checkout__radiobtns">
                                <input class="item-checkout__radio notactive" id="checkoutradio" type="radio" name=""
                                    value="">
                                <label class="item-checkout__radiotext notactive" for="checkoutradio">By proceeding I
                                    accept
                                    the
                                    Terms &
                                    conditions</label>
                            </div>

                        </div>
                        <div class="checkout__column item-column">
                            <div class="item-column-body">
                                <div class="item-checkout-img"><img src="img/cartimg.png" alt="product">
                                </div>
                                <div class="item-card__body card-body">
                                    <div class="card-body__row">
                                        <div class="card-body__name">Bucket hat</div>
                                        <div class="card-body__price">€16</div>
                                    </div>
                                    <div class="card-body__row">
                                        <div class="card-body__quantity">Quantity: 1</div>
                                        <span class="card-body__minus">-</span>
                                        <span class="card-body__plus">+</span>

                                    </div>

                                    <div class="card-body__remove">remove</div>
                                </div>

                            </div>
                            <div class="item-column-body">
                                <div class="item-checkout-img"><img src="img/cartimg.png" alt="product">
                                </div>
                                <div class="item-card__body card-body">
                                    <div class="card-body__row">
                                        <div class="card-body__name">Bucket hat</div>
                                        <div class="card-body__price">€16</div>
                                    </div>
                                    <div class="card-body__row">
                                        <div class="card-body__quantity">Quantity: 1</div>
                                        <span class="card-body__minus">-</span>
                                        <span class="card-body__plus">+</span>

                                    </div>

                                    <div class="card-body__remove">remove</div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>






        </main>

<?php
get_footer();
