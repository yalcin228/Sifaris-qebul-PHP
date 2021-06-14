<?php require("header.php"); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1 class="text-primary font-weight-bold text-center">Sifaris elave</h1>
        </div>
        <div class="card-body">
         <form action="controller/controller.php" method="post">  
            <div class="row">
            
                <div class="col-md-6 form-group">
                        <label for="">Ad Soyad</label>
                        <input type="text" name="musderi_ad" class="form-control" placeholder="Adınız Soyadınız">
                </div>
                <div class="col-md-6 form-group">
                        <label for="">Mail Adres</label>
                        <input type="mail" name="musderi_mail" class="form-control" placeholder="Mail adresinizi daxil edin">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">

                        <label for="">Telefon Nömrəsi</label>
                        <input type="number" name="musderi_tel" class="form-control" placeholder="Telefon nömrəniz">                   
                </div>
                <div class="col-md-6 form-group">              
                        <label for="">Sifariş Baslığı</label>
                        <input type="text" name="sif_baslig" class="form-control" placeholder="Sifarişin başlığını qeyd edin">                   
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                   
                        <label for="">Sifariş Vəziyyəti</label>
                        <select name="sif_veziyyet"  id="selectlabel2" class="form-control">
                            <option value="Yeni Basladi">Yeni Basladi</option>
                            <option value="Davam Eliyir">Davam Eliyir</option>
                            <option value="Bitdi">Bitdi</option>
                        </select>
                   
                </div>
                <div class="col-md-6 form-group">
                    
                        <label for="">Qiymət(AZN)</label>
                        <input type="number" name="sif_qiymet" class="form-control" placeholder="Sifarişin qiyməti">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                   
                        <label for="">Sifariş Tarixi</label>
                        <input type="date" name="sif_teslim_zamani" class="form-control" placeholder="Sifarişin verilmə tarixi">
                  
                </div>
                <div class="col-md-6 form-group">
                    
                        <label for="">Təcililik</label>
                        <select name="sif_tecililik"  id="selectlabel1" class="form-control">
                            <option value="Tecili">Tecili</option>
                            <option value="Tecili deyil">Tecili deyil</option>
                            <option value="Normal">Normal</option>
                        </select>
                    
                </div>
                <div class="form-group col-md-12">
                    <textarea name="sif_detay" class="form-control" id="textarealabel2" cols="30" rows="5"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" name="add_sif">Elave Et</button>
        </form> 
        </div>
    </div>
</div>
<?php require("footer.php"); ?>
<script src="ckeditor/ckeditor.js"></script>
<script>

CKEDITOR.replace('textarealabel2');
</script>
