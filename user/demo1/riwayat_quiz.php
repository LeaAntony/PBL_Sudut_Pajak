<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengerjaan Kuis</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
       
        .main-content {
            margin-left: 270px; 
            padding: 20px;
            position: relative; 
        }

        .vertical-line {
            position: absolute;
            top: 100px;
            left: 10px; 
            width: 10px; 
            background: linear-gradient(41deg, #09c778, #01a0f9); 
            content: ''; 
            height: 10%; 
        }

    
        .admin-info {
            position: absolute;
            top: 125px; 
            left: 30px; 
            transform: translateY(-50%);
            font-weight: bold;
            font-size: 25px;
            color: black; 
        }

            .tambah {
            position: absolute;
            top: 180px; 
            right: 20px; 
            display: flex;
            align-items: center;
            background: linear-gradient(41deg, #09c778, #01a0f9); 
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        
        }

            .tambah i {
             margin-right: 5px;
             color: white; 
       }

            .tambah span {
             color: white; 
       }
    
           .crud-table table thead {
            background: linear-gradient(41deg, #09c778, #01a0f9); 
            color: white; 
        }

            .btn-delete {
             background: linear-gradient(41deg, #09c778, #01a0f9); 
             border: none;
        }

            .btn-edit {
             background: linear-gradient(41deg, #09c778, #01a0f9); 
             border: none;
        }

            .crud-table {
            margin-bottom: 100px; 
            margin-top: 70px; 
        }

           .btn-edit i,
           .btn-delete i {
            color: white; 
        }

         
         .table-auto tbody tr:nth-child(odd) {
            background-color: #ffffff; 
         }

        
        .table-auto tbody tr:nth-child(even) {
            background-color: #f3f4f6; 
        }

      
    </style>
</head>
<body>
<?php include './layout/sidebar.php'; ?>
   <!-- Konten utama -->
<div class="main-content">
    <!-- Garis vertikal -->
    <div class="vertical-line"></div>
    <!-- Tulisan Admin Infografis -->
    <h2 class="admin-info">Riwayat Pengerjaan Kuis</h2> 
    <br><br><br><br><br><br><br>
    <!-- Tabel CRUD -->
    <div class="crud-table">
    <table class="table table-auto">
        <thead>
            <tr>
                <th scope="col"> No</th>
                <th scope="col">Nama</th>
                <th scope="col">Waktu Pengerjaan</th>
                <th scope="col">Nilai/100.00</th>
                <th scope="col">Status</th>
                <th scope="col">Lihat Evaluasi</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>1</td>
                <td>Juan Antony</td>
                <td>23 menit</td>
                <td>80.00/100.00</td>
                <td>Selesai</td>
                <td><a href="#" style="color: blue; text-decoration: underline;">Evaluasi</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lea Jonathan</td>
                <td>15 menit</td>
                <td>60.00/100</td>
                <td>Selesai</td>
                <td><a href="#" style="color: blue; text-decoration: underline;">Evaluasi</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Fadli Suhairi</td>
                <td>20 menit</td>
                <td>90.00/100</td>
                <td>Selesai</td>
                <td><a href="#" style="color: blue; text-decoration: underline;">Evaluasi</a></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>


<!-- Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script>
    
</script>
</body>
</html>