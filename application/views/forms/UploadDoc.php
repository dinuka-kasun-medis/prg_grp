<body>
<section>
    <br>
    <br>
    <br>
</section>

<style>

    h6 {
        color: black;
    }

</style

<section>
    <div class="row">
        <div class="col-md-5 mx-auto form_container">

            <div class="form_title">Upload Doc</div>


            <form  class="column form_content" method="POST" action="<?=base_url("uploader")?>">

                <div class="row col-md-12">
                    <div class="form_item col-md-12">
                        <span class="form_label">When upload your document . . . </span>
                        <h6> 1) Must be PDF or DOC </h6>
                        <h6> 2) Rename it as Job Number </h6>
                    </div>
                </div>

                <div class="form_item col-md-6">
                    <button type="submit">Upload >></button>
                </div>

            </form>
        </div>
    </div>
</section>
</body>