<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataTable</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  
</head>
<body>
    <table id="datatable" class="display">
        <thead>
            <tr align="left">
                <th>ID</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="false">Email</th>
                <th data-sortable="false">Created at</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</body>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [[ 0, "desc" ]],
            ajax: "{{ url('users-data') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'created_at' }
            ]
        });
    });
</script>
</html>