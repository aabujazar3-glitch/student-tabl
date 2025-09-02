
<?php
$students = [
    ['stdNo' => '20003', 'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGPA' => 88.7],
    ['stdNo' => '30304', 'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGPA' => 78.5],
    ['stdNo' => '10002', 'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGPA' => 98.7],
    ['stdNo' => '10005', 'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGPA' => 98.7],
    ['stdNo' => '10007', 'stdName' => 'Mohammed Ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGPA' => 98.7]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Data Table</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f4ff, #ffffff);
            font-family: 'Segoe UI', sans-serif;
}
.container {
            margin-top: 60px;
}
.card {
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}
.card-header {
            background-color: #0d6efd;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
}
.dataTables_wrapper.dt-buttons {
            margin-bottom: 10px;
}
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3><i class="bi bi-table"></i> Student Information</h3>
        </div>
        <div class="card-body">
            <table id="studentsTable" class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>GPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $index => $student):?>
                    <tr>
                        <td><?= $index + 1?></td>
                        <td><?= $student['stdNo']?></td>
                        <td><?= $student['stdName']?></td>
                        <td><?= $student['stdEmail']?></td>
                        <td><?= $student['stdGPA']?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">Total Students: <?= count($students)?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script>
$(document).ready(function() {
    $('#studentsTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            { extend: 'excelHtml5', text: 'Export to Excel', className: 'btn btn-success'},
            { extend: 'pdfHtml5', text: 'Export to PDF', className: 'btn btn-danger'},
            { extend: 'print', text: 'Print Table', className: 'btn btn-secondary'}
        ]
});
});
</script>

</body>
</html>
