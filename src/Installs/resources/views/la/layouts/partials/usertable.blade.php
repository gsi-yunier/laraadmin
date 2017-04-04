<div class="box box-success">
    <!--<div class="box-header"></div>-->
    <div class="box-body">
        <table id="dt_modules" class="table table-bordered">
            <thead>
            <tr class="success">
                <th>ID</th>
                <th>Имя</th>
                <th>Почта</th>
                <th>Телефон</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($senders as $sender)
                <tr>
                    <td>{{ $sender->id }}</td>
                    <td>{{ $sender->name_full }}</td>
                    <td>{{ $sender->email }}</td>
                    <td>{{ $sender->tel }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
