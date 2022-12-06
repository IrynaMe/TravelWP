<div id="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                        <div class="form-box">
                            <h1 style="color:white" id="log">Accedi</h1>


                            <form role="form" id="contact-form" action="http://localhost:8888/TravelWP/accesso" method="post">
                               
                                <!-- name field -->
                                <div class="form-group">
                                    <div id="nameError" class="sr-only" role="alert"></div>
                                    <label for="form-name-field" class="sr-only">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </div>
                                        <input type="email" class="form-control" id="email_log" value=""
                                            placeholder="email" name="email">
                                    </div>
                                </div>
                                <!-- email field -->
                                <div class="form-group">
                                    <div id="emailError" class="sr-only" role="alert"></div>
                                    <label for="form-email-field" class="sr-only">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                        <input type="password" class="form-control" id="password" value=""
                                            placeholder="il tuo password" name="password">
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <label id="label">
                                        <input type="checkbox" id="checkbox-form" onclick="showPassword()">Mostra Password
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label id="label">
                                        <input type="checkbox" id="checkbox-form">Accetto le regole privacy </label>
                                </div>
                                <br>

                                <br>
                                <button type="submit" class="btn btn-success btn-block">Invia</button>

                            </form>

<!--                             <div class="text-center">
                                <h2><a href={{ url('/registrati') }} style="color:white !important;">Registrati</a></h2>
                                <br>
                            </div> -->



                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <br>


<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
    