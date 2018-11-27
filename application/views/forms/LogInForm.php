<body>
    <section>
        <br>
        <br>
        <br>
    </section>

    <section>
        <div class="row">
            <div class="col-md-5 mx-auto form_container">

                <div class="form_title">Log In</div>


                <form class="column form_content" method="POST" action="<?=base_url("dashboard")?>">

                    <div class="row col-md-12">
                        <div class="form_item col-md-12">
                            <span class="form_label">Email</span>
                            <input  class="form_input" type="email" placeholder="Enter Email" name="email"/>
                        </div>

                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-12">
                            <span class="form_label">Password</span>
                            <input  class="form_input" type="password" placeholder="Password" name="password"/>
                        </div>
                    </div>


                    <div class="form_item col-md-6">
                        <button type="submit">Log In</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</body>