<div class="box">
    <div class="box-header">
        <h3 class="box-title">Liste des gérants</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="products-table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Mac adress</th>
                <th>Model</th>
                <th>system</th>
                <th>purchase</th>
                <th>depatement</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($computer as $manager)

                <tr>
                    <td>{{ $manager->macAdress }}</td>
                    <td>{{ $manager->model }}</td>
                    <td>{{ $manager->system }}</td>
                    <td>{{ $manager->purchase }}</td>

                    <td>{{ $manager->departement->name }}</td>


                    <td>

                    </td>
                </tr>

            @endforeach

            </tbody>
            <tfoot>
            {{ $computer->links() }}
            </tfoot>
        </table>

    </div>
</div>
