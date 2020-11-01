<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouveau computer</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('computer.store') }}">

                    {{ csrf_field() }}

                    <div class="box-body">
                        <div class="form-group">
                            <label for="macAdress">macAdress</label>
                            <input type="text" class="form-control" name="macAdress" id="macAdress" placeholder="macAdress">
                        </div>

                        <div class="form-group">
                            <label for="model">model</label>
                            <input type="text" class="form-control" name="model" id="model" placeholder="model">
                        </div>

                        <div class="form-group">
                            <label for="system">system</label>
                            <input type="text" class="form-control" name="system" id="system" placeholder="system">
                        </div>

                        <div class="form-group">
                            <label for="purchase">purchase</label>
                            <input type="date" class="form-control" name="purchase" id="purchase" placeholder="purchase">
                        </div>


                        <div class="form-group">
                            <label>Station</label>
                            <select class="form-control select2" style="width: 100%;" name="departement_id" id="departement_id">
                                @foreach(App\departement::all() as $station)
                                    <option value="{{$station->id}}">{{$station->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
    </div>
</section>
