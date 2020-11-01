<section class="content">
    <div class="row">

        <!-- left column -->
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Détails gérant</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-pencil margin-r-5"></i> Nom</strong>

                    <p class="text-muted">
                        {{ $computer->macAdress}}
                    </p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> model</strong>

                    <p class="text-muted">
                        {{ $computer->model }}
                    </p>
                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> system</strong>

                    <p class="text-muted">
                        {{ $computer->system }}
                    </p>

                    <hr>

                    <strong><i class="fa fa-phone margin-r-5"></i> purchase</strong>

                    <p class="text-muted">
                        {{ $computer->purchase }}
                    </p>



                </div>
                <!-- /.box-body -->
            </div>

        </div>
    </div>
</section>
