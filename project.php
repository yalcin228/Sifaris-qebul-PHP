<?php require("header.php"); ?>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Proyektlere aid bütün məlumatlar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="invoice">
                                <table class="table table-bordered" id="dataTabl" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Başlıq</th>
                                            <th>Bitiş Tarixi</th>
                                            <th>Təcillik</th>
                                            <th>Vəziyyət</th>
                                            <th>Detay</th>
                                            <th>İşləmlər</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Başlıq</th>
                                            <th>Bitiş Tarixi</th>
                                            <th>Təcillik</th>
                                            <th>Vəziyyət</th>
                                            <th>Detay</th>
                                            <th>İşləmlər</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $proje=$conn->prepare("SELECT * FROM proyekt ORDER BY proyekt_id DESC");
                                            $proje->execute();
                                            $proje_cek=$proje->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($proje_cek as $row){

                                        ?>
                                        <tr id="delete<?php echo $row['proyekt_id']; ?>">
                                            <td><?php echo $row['proyekt_id']; ?></td>
                                            <td><?php echo $row['proyekt_baslig']; ?></td>
                                            <td><?php echo $row['proyekt_bitis_tarix']; ?></td>
                                            <td><?php echo $row['proyekt_vaxt']; ?></td>
                                            <td><?php echo $row['proyekt_veziyyet']; ?></td>
                                            <td><?php echo substr($row['proyekt_detay'],0,40); ?>...</td>
                                            <td>
                                                <div class="d-flex justify-content-center" >
                                                    <form action="edit_project.php?id=<?php echo $row['proyekt_id']; ?>" method="post" style="margin-right:5px;">
                                                        <button type="submit" name="edit" class="btn btn-warning btn-sm btn-icon-split">
                                                            <span class="icon text-white-60">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </button>
                                                    </form>

                                                    <form  method="post" style="margin-right:5px;">
                                                    
                                                        <button  onclick="deleteProject(<?php echo $row['proyekt_id']; ?>)"  class="btn btn-danger btn-sm btn-icon-split">
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js
"></script>
<script>
    $(document).ready(function() {
    $('#dataTabl').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Azerbaijan.json"
        },
        dom: 'Bfrtip',
        buttons: [ 
            'copy', 'excel', 'pdf'
        ],
    });  
} );



function deleteProject(id){
    if(confirm("Silmek istediyinize eminsiniz?")){
        $.ajax({
            type: "POST",
            url: "controller/controller.php",
            data: {delete_id:id},
            success:function(data){
                    $("#delete"+id).hide(slow);
            }
        })
    }
}
</script>

