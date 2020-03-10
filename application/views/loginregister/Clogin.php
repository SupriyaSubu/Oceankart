<div id="login">
       <form class="col s12" action="<?php echo base_url();?>CusRegister/login_validation" method="post">
            <div class="row center-align">
                <h5 class="white-text">Log in to Customer</h5>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="cemail" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="cpass" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row center-align">
                <!-- <button class="btn waves-effect waves-light">Login</button> -->
                <input type="submit" name="clog" class="btn waves-effect waves-light" value="Login">
            </div>
            <br>
            <div class="row center-align">
                <b><a>Forgot Password?</a>
            </div>
            <div class="row center-align">
                <a href="<?php echo base_url();?>CusRegister/reg">Sign Up</a></b>
            </div>
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
    <form class="col s12">
    </form>
    </div>