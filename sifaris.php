<?php require("header.php"); ?>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sifarişlər</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="invoice">
                                <table class="table table-bordered" id="dataTabl" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Başlıq</th>
                                            <th>Təslim zamanı</th>
                                            <th>Təcililik</th>
                                            <th>Vəziyyət</th>
                                            <th>Detay</th>
                                            <th>Qiymət</th>
                                            <th>İşləmlər</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $sifaris=$conn->prepare("SELECT * FROM sifarisler ORDER BY sif_id DESC");
                                            $sifaris->execute();
                                            $sifaris_cek=$sifaris->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($sifaris_cek as $row){

                                        ?>
                                        <tr id="delete<?php echo $row['sif_id']; ?>">
                                            <td><?php echo $row['sif_id']; ?></td>
                                            <td><?php echo $row['sif_baslig']; ?></td>
                                            <td><?php echo $row['sif_teslim_zamani']; ?></td>
                                            <td><?php echo $row['sif_tecililik']; ?></td>
                                            <td><?php echo $row['sif_veziyyet']; ?></td>
                                            <td><?php echo substr($row['sif_detay'],0,40); ?>...</td>
                                            <td><?php echo $row['sif_qiymet']; ?> AZN</td>
                                            <td>
                                                <div class="d-flex justify-content-center" >
                                                    <form action="edit_sifaris.php?id=<?php echo $row['sif_id']; ?>" method="post" style="margin-right:5px;">
                                                        <button type="submit" name="edit" class="btn btn-warning btn-sm btn-icon-split">
                                                            <span class="icon text-white-60">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </button>
                                                    </form>

                                                    <form  method="post" style="margin-right:5px;">
                                                    
                                                        <button  onclick="deleteSifaris(<?php echo $row['sif_id']; ?>)"  class="btn btn-danger btn-sm btn-icon-split">
                                                            <span class="icon text-white-60">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </button>
                                                    </form>

                                                    <form action="#" method="post">
                                                        <input type="hidden" name="proyekt_id" value="<?php echo $row['proyekt_id']; ?>">
                                                        <button type="submit" name="edit" class="btn btn-primary btn-sm btn-icon-split">
                                                            <span class="icon text-white-60">
                                                                <i class="fas fa-eye"></i>
                                                            </span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                               <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php require("footer.php"); ?>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function() {
    $('#dataTabl').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Azerbaijan.json"
        }
    });  
} );



function deleteSifaris(id){
    if(confirm("Silmek istediyinize eminsiniz?")){
        $.ajax({
            type: "POST",
            url: "controller/sifarisler_controller.php",
            data: {delete_id:id},
            success:function(data){
                    $("#delete"+id).hide(slow);
            }
        })
    }
}
</script>

