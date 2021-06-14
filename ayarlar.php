<?php 
require("header.php");



?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1 class="text-primary font-weight-bold text-center">Ayarlar</h1>
        </div>
        <div class="card-body">
            <form action="controller/controller.php" method="POST" >
                <div class="form-group">
                    <div class="col-md-6">
                          <label>Sayt Başlığı</label>
                          <input type="text" name="sayt_title" value="<?php echo $ayar_cek['sayt_title']; ?>" class="form-control" placeholder="Sayt Başlığı əlavə edin...">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Sayt Açıxlama</label>
                        <input type="text" name="sayt_desc" value="<?php echo $ayar_cek['sayt_desc']; ?>" class="form-control" placeholder="Sayt Açıxlamasını əlavə edin...">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6">
                       <label>Sayt Açar Sözlər</label>
                       <input type="text" name="sayt_keyw" value="<?php echo $ayar_cek['sayt_keyw']; ?>" class="form-control" placeholder="Sayt Açar sözləri əlavə edin...">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6">
                       <label>Sayt Qurucu</label>
                       <input type="text" name="sayt_author" value="<?php echo $ayar_cek['sayt_author']; ?>" class="form-control" placeholder="Sayt Qurucusu əlavə edin...">
                
                    </div>
                 </div> 
                 <button type="submit" name="btnSubmit" class="btn btn-primary ml-3 mb-4">Yenilə</button> 
            </form>
            <?php
            extract($_GET);
            if(isset($islem)){
                if($islem == "ok"){
                    echo '<div class="alert alert-success">Tebrikler.Yenilenme islemi tamamlandi.</div>';
                }
                else if($islem == "bos"){ 
                    echo '<div class="alert alert-warning">Xeberdarliq.Xanalari bos buraxmaq olmaz.</div>';
                }
                else if($islem == "no"){
                    echo '<div class="alert alert-danger">Xeta.Yenilenme zamani xeta yasandi.Tekrar yoxlayin.</div>';
                }
            }
            else{
                echo "";
            }
               
            ?>
        </div>
    </div>
</div>
<?php require("footer.php"); ?>