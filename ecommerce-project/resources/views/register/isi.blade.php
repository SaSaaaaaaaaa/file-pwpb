<div id="main-content" class="main-content">
    <div id="primary" class="content-area">
        <div id="title" class="page-title">
            <div class="section-container">
                <div class="content-title-heading">
                    <h1 class="text-title-heading">
                        Register
                    </h1>
                </div>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><span class="delimiter"></span>Register
                </div>
            </div>
        </div>

        <div id="content" class="site-content" role="main">
            <div class="section-padding">
                <div class="section-container p-l-r">
                    <div class="page-login-register">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin: auto">
                                <div class="box-form-login">
                                    <h2 class="register">Register</h2>
                                    <div class="box-content">
                                        <div class="form-register">
                                            <form method="post" class="register">
                                                @csrf

                                                <div class="email">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="name" value="">
                                                </div>
                                                <div class="email">
                                                    <label>Username <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="username" value="">
                                                </div>
                                                <div class="email">
                                                    <label>Email address <span class="required">*</span></label>
                                                    <input type="email" class="input-text" name="email" value="">
                                                </div>
                                                <div class="email">
                                                    <label>Phone number <span class="required">*</span></label>
                                                    <input type="number" class="input-text" name="nomor_hp" value="">
                                                </div>
                                                <div class="password">
                                                    <label>Password <span class="required">*</span></label>
                                                    <input type="password" class="input-text" name="password">
                                                </div>
                                                <div class="verify password">
                                                    <label>Password verify <span class="required">*</span></label>
                                                    <input type="password" class="input-text" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                                <div class="button-register">
                                                    <input type="submit" class="button" name="register" value="Register">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->