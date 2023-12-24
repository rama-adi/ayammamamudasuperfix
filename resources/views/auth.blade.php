<x-homepage-layout title="Authentication">
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box login">
                        <h3>Log In Your Account</h3>
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <label for="email" style="display: none">Email anda</label>
                            <input type="email" id="email" name="email" placeholder="Email address">
                            <label for="password" style="display: none">Password anda</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                            <div class="remember">
                                <div class="first">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <div class="second">
                                    <!--<a href="javascript:void(0)">Forget a Password?</a>-->
                                </div>
                            </div>
                            <button type="submit" class="button">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box register">
                        <div class="parallax" style="background-image: url('{{asset('img/patron.jpg')}}')">
                    </div>
                    <h3>Log In Your Account</h3>
                    <form method="POST" action="{{ route('auth.register') }}">
                        @csrf
                        <label for="name" style="display: none">Nama anda</label>
                        <input id="name" type="text" name="name" placeholder="Nama">
                        <label for="emailreg" style="display: none">Email anda</label>
                        <input id="emailreg" type="email" name="email" placeholder="Email address">
                        <label for="passwordreg" style="display: none">Password anda</label>
                        <input id="passwordreg" type="password" name="password" placeholder="Password">
                        <p>Your personal data will be used to support your experience throughout this website, to manage
                            access to your account, and for other purposes described in our privacy policy.</p>
                        <button type="submit" class="button">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-homepage-layout>