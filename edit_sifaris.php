<?php require("header.php"); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1 class="text-primary font-weight-bold text-center">Proyekt Yenile</h1>
        </div>
        <div class="card-body">
            
            <?php
                
                $id=$_GET['id'];
                $sif=$conn->prepare("SELECT * FROM sifarisler WHERE sif_id=? ");
                $sif->execute(array($id));
                $sif_cek=$sif->fetch(PDO::FETCH_ASSOC);

            ?>
         <form  id="formEditSifarisler" method="POST" onsubmit="return false;" >
                
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Sifariş Baslığı</label>
                        <input type="text" id="sif_baslig" name="sif_baslig" value="<?php echo $sif_cek['sif_baslig']; ?>" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="hidden" id="sif_id" value="<?php echo $id ;?>" name="sif_id">
                       <label>Sifariş Təslim Tarixi</label>
                       <input type="date" name="sif_teslim_zamani" value="<?php echo $sif_cek['sif_teslim_zamani']; ?>" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-12">
                       <label>Sifariş Təcilliyi</label>
                        <select id="sif_tecililik" name="sif_tecililik" class="form-control" >
                            <option <?php if($sif_cek['sif_tecililik'] == "Tecili"){echo "selected";} ?> value="Tecili">Tecili</option>
                            <option <?php if($sif_cek['sif_tecililik'] == "Tecili deyil"){echo "selected";} ?> value="Tecili deyil">Tecili Deyil</option>
                            <option <?php if($sif_cek['sif_tecililik'] == "Normal"){echo "selected";} ?> value="Normal">Normal</option>
                        </select>                
                    </div>
                 </div> 
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Sifariş Vəziyyət</label>
                       <select name="sif_veziyyet"  id="sif_veziyyet" class="form-control">
                            <option <?php if($sif_cek['sif_veziyyet'] == "Yeni Basladi"){echo "selected";} ?> value="Yeni Basladi">Yeni Basladi</option>
                            <option <?php if($sif_cek['sif_veziyyet'] == "Davam Eliyir"){echo "selected";} ?> value="Davam Eliyir">Davam Eliyir</option>
                            <option <?php if($sif_cek['sif_veziyyet'] == "Bitdi"){echo "selected";} ?> value="Bitdi">Bitdi</option>
                        </select>                
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Sifariş Detay</label>
                        <textarea name="sif_detay" id="sif_detay" class="form-control" id="" cols="30" rows="6"><?php echo $sif_cek['sif_detay']; ?></textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Sifariş Qiymət</label>
                        <input type="number" id="sif_qiymet" name="sif_qiymet" value="<?php echo $sif_cek['sif_qiymet']; ?>" class="form-control">
                    </div>
                 </div>
                 <button type="submit" id="btneditSifaris" name="btnEditSifaris" class="btn btn-primary ml-3 mb-4">Yenilə</button> 
            </form>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
      $(document).ready(function(){
        $("#btneditSifaris").click(function(){

     
       var deger=$("#formEditSifarisler").serialize();

        $.ajax({
             type: "POST",
             url: "controller/sifarisler_controller.php",
             data: deger,
            success:function(data){
                 if(data == 'bos'){
                    Swal.fire('Diqəət!','Bos xana Buraxmaq olmaz','warning');
                 }
                 else if(data == 'no'){
                    Swal.fire( 'Xeta','Yeniıənmə zamanı xəta yaşandı.Təkrar yoxlayın.','error');
                 }
              else if(data == 'yes'){
                Swal.fire( 'Təbriklər','Yenilənmə edildi.Səhifəyə yönləndirilirsiniz.','success');
                setInterval(() => {
                    window.location.href="sifaris.php";
                }, 2000);
                 }
            }
        
        });
    });
});

</script>