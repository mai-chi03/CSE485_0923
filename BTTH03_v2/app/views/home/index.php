<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">QUẢN LÝ THƯ VIỆN</h3>
        <a href=""class ='btn btn-success'>Thêm mới</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">mã sách</th>
      <th scope="col">tên sách</th>
      <th scope="col">năm xuất bản</th>
      <th scope="col">mã tác giả</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require_once('../../services/SachService.php');
        $sachService = new SachService();
        $sachs=$sachService->getAllSachs();
        foreach ($sachs as $sach){
     ?>
     <tr>
      <th scope="row"><?= $sach->getId();?></th>
      <td><?= $sach->gettenSach();?></td>
      <td><?= $sach->getnamXuatBan();?></td>
      <td><?= $sach->getidTacGia();?></td>
      <td>
        <a href=""><i class="bi bi-pencil"></i></a>
        </td>
        <td>
        <a href=""><i class="bi bi-trash"></i></a>
        </td>

    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>