@include('header')
<h1 class="md-12">

</h1>


    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row d-flex justify-content">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3 class="azp">Login</h3>
                        <form action="#">
                            <div class="input__item">
                                <input type="text" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="login__form">
                                <button type="submit" class="site-btn">Login</button>
                                </div>
                        </form>
                        <!-- <a href="#" class="forget_pass">Forgot Your Password?</a> -->
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>Don't have an account?</span>
                            <ul>
                                <li><a href="register"><u> Register </u></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->


@include('footer')
