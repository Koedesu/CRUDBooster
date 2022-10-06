@include('header')
<h1 class="md-12">

</h1>


    <!-- Register Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>
                <div class="col-lg-5" >

                <div class="login__form">
                    <h3>Register</h3>
                        <form action="#">
                            <div class="col-md-10" style="margin-left: 65px;">
                                <div class="row">
                                    <div class="col-md-5" style="margin-right: -78px;">

                                        <div class="input__register">
                                            <input type="text" placeholder="Name" style="widht:50px">
                                            <span class="icon_user"></span>
                                        </div>

                                        <div class="input__register">
                                            <input type="text" placeholder="Email" style="width: 511px;">
                                            <span class="icon_user"></span>
                                        </div>

                                        <div class="input__register">
                                        <input type="text" placeholder="Password">
                                        <span class="icon_user"></span>
                                        </div>

                                        <div class="input__register">
                                            <input type="country" placeholder="Country">
                                            <span class="icon_user"></span>
                                        </div>


                                    </div>


                                    <div class="col-md-5">
                                        <div class="input__registers">
                                            <input type="text" placeholder="Username">
                                            <span class="icon_user"></span>
                                        </div>
</br>
</br>
                                        <div class="input__registers" style="margin-top: 9px;">
                                            <input type="text" placeholder="Confirm Password">
                                            <span class="icon_user"></span>
                                        </div>

                                        <div class="input__registers">
                                            <input type="text" placeholder="Birthday" onfocus="(this.type='date')">
                                            <span class="icon_user"></span>
                                        </div>

                                    </div>


                                    <button type="submit" class="site-btn">Register</button>
                                </div>
                            </div>
                        </form>
                    <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>


                            </ul>
                        </div>
                    </div>
</div>

                </div>

            </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Login Section End -->

@include('footer')
