<?php require("header.php"); ?>
<link rel="stylesheet" href="file_input/css/fileinput.min.css">
<link rel="stylesheet" href="file_input/themes/explorer-fas/theme.min.css">
<script src="file_input/js/fileinput.js"></script>
<script src="file_input/themes/fas/theme.min.js"></script>
<script src="file_input/themes/explorer-fas/theme.min.js"></script>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1 class="text-primary font-weight-bold text-center">Proyekt Yenile</h1>
        </div>
        <div class="card-body">
            
            <?php
                
                $id=$_GET['id'];
                $proje=$conn->prepare("SELECT * FROM proyekt WHERE proyekt_id=? ");
                $proje->execute(array($id));
                $proje_cek=$proje->fetch(PDO::FETCH_ASSOC);
                $dosyayolu="img/yeni/".$proje_cek['proyekt_file'];

            ?>
         <form  action="controller/controller.php" method="POST" enctype="multipart/form-data" >
                
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Proyekt Baslığı</label>
                        <input type="text" name="proyekt_baslig" value="<?php echo $proje_cek['proyekt_baslig']; ?>" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="hidden" value="<?php echo $id ;?>" name="proyekt_id">
                       <label>Proyekt Bitiş Tarixi</label>
                       <input type="text" name="proyekt_bitis_tarix" value="<?php echo $proje_cek['proyekt_bitis_tarix']; ?>" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-12">
                       <label>Proyekt Təcilliyi</label>
                        <select name="proyekt_vaxt" class="form-control" >
                            <option <?php if($proje_cek['proyekt_vaxt'] == "Tecili"){echo "selected";} ?> value="Tecili">Tecili</option>
                            <option <?php if($proje_cek['proyekt_vaxt'] == "Tecili Deyil"){echo "selected";} ?> value="Tecili deyil">Tecili Deyil</option>
                            <option <?php if($proje_cek['proyekt_vaxt'] == "Normal"){echo "selected";} ?> value="Normal">Normal</option>
                        </select>                
                    </div>
                 </div> 
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Proyekt Vəziyyət</label>
                       <select name="proyekt_veziyyet"  id="selectlabel2" class="form-control">
                            <option <?php if($proje_cek['proyekt_veziyyet'] == "Yeni Basladi"){echo "selected";} ?> value="Yeni Basladi">Yeni Basladi</option>
                            <option <?php if($proje_cek['proyekt_veziyyet'] == "Davam Eliyir"){echo "selected";} ?> value="Davam Eliyir">Davam Eliyir</option>
                            <option <?php if($proje_cek['proyekt_veziyyet'] == "Bitdi"){echo "selected";} ?> value="Bitdi">Bitdi</option>
                        </select>                
                    </div>
                 </div>
                 <div class="form-group">
                        <input type="file" name="proyekt_file" id="proje_dosya">
                </div>
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Proyekt Detay</label>
                        <textarea name="proyekt_detay" class="form-control" id="" cols="30" rows="6"><?php echo $proje_cek['proyekt_detay']; ?></textarea>
                    </div>
                 </div>
                 <button type="submit" id="editProject" name="btnEditProject" class="btn btn-primary ml-3 mb-4">Yenilə</button> 
            </form>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>
<?php
  if(strlen($dosyayolu)>10){?>
    <script>
        $(document).ready(function(){
            var url1='<?php echo $dosyayolu ?>'
            $("#proje_dosya").fileinput({
                'theme': 'explorer-fas',
                'showUpload': false,
                'showCaption': true,
                'showDownload': true,
                allowedFileExtensions: ["jpg","png","jpeg","zip","mp4"],
                initialPreview: [
                    '<img src="<?php echo $dosyayolu ?>" style="height:100px;" class="file-preview-image" alt="Dosya" title="Dosya">'
                ],
                initialPreviewConfig: [
                    {downloadUrl: url1,
                        showRemove: false,
                    },
                ],
            });
        });
    </script>
  <?php } else { ?>
  <script>
    $(document).ready(function(){
        $("#proje_dosya").fileinput({
            'theme': 'explorer-fas',
            'showUpload': false,
                'showCaption': true,
                'showDownload': true,
                allowedFileExtensions: ["jpg","png","jpeg","zip","mp4"],

        });
    });
  </script>
  <?php } ?>
