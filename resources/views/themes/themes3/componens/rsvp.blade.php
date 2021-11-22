<section id="rsvp" class="rsvp section-boxed">
    <div class="container">
        <div class="section-title">
            <h2>RSVP</h2>
            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id tellus pretium
                quam sodales luctus. Nunc nec lacus ac arcu iaculis accumsan dictum a nulla. Nullam
                malesuada pellentesque turpis, eu elementum risus sagittis in. Nunc sit amet arcu justo.</p>
        </div>

        <div class="row">
            <!-- RSVP Form -->
            <form id="rsvp-form" class="rsvp-form" method="post" action="rsvp_form/rsvp_form.php" novalidate>
                <div class="col-md-12">
                    <div class="messages"></div>
                </div>

                <div class="controls">
                    <div class="">
                        <div class="form-group">
                            <h4>Bersedia Hadir</h4>
                            <select name="hadir" class="form-control" required="required"
                                data-error="Name is required.">
                                <option value=".......">.........</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                            <i class="form-control-icon fa fa-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <h4>Anggota yang hadir</h4>
                            <input id="form_number" type="number" name="number " class="form-control" placeholder="...."
                                required="required" data-error="Valid number is required.">
                            <i class="form-control-icon fa fa-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 text-center">
                        <input type="submit" class="button btn-send disabled" value="Submit">
                    </div>
                </div>
            </form>
            <!-- /RSVP Form -->
        </div>
    </div>
</section>