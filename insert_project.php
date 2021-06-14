<?php require("header.php"); ?>

<link rel="stylesheet" href="file_input/css/fileinput.min.css">
<link rel="stylesheet" href="file_input/themes/explorer-fas/theme.min.css">
<script src="file_input/js/fileinput.js"></script>
<script src="file_input/themes/fas/theme.min.js"></script>
<script src="file_input/themes/explorer-fas/theme.min.js"></script>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1 class="text-primary font-weight-bold text-center">Proyekt Əlavə Et.</h1>
        </div>
        <div class="card-body">
            <form id="formProyektAdd" action="controller/controller.php" method="POST" enctype="multipart/form-data" >
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="inputlabel1">Proyekt Basligi</label>
                        <input type="text" name="proyekt_baslig" id="inputlabel1" class="form-control" placeholder="Proyektinizin Basligini daxil edin...">
                    </div>
                    <div class="col-md-6">
                        <label for="inputlabel2">Proyekt Bitisi</label>
                        <input type="date" name="proyekt_bitis_tarix" id="inputlabel2" class="form-control" >
                    </div>
                    </br>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="selectlabel1">Proyekt Hazirlanacagi Muddeti</label>
                        <select name="proyekt_vaxt"  id="selectlabel1" class="form-control">
                            <option value="Tecili">Tecili</option>
                            <option value="Tecili deyil">Tecili deyil</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="selectlabel2">Proyekt Veziyyet</label>
                        <select name="proyekt_veziyyet"  id="selectlabel2" class="form-control">
                            <option value="Yeni Basladi">Yeni Basladi</option>
                            <option value="Davam Eliyir">Davam Eliyir</option>
                            <option value="Bitdi">Bitdi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <input type="file" name="proyekt_file" id="proje_dosya">
                </div>
                <div class="form-group">
                    <label for="textarealabel1">Proyekt Haqqinda</label>
                    <textarea  name="proyekt_detay" class="form-control" id="textarealabel1" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" id="AddProyekt" onclick="AddProyekt();" name="proyekt_elave" class="btn btn-primary mb-1">Elave et</button>          
            </form>
            <?php
                                 extract($_GET);
                                 if(isset($islem)){
                                     if($islem == "yes"){
                                       echo '<div class="alert alert-success">Tebrikler.Proyekt əlavə işləmi müfəvvəqiyyətlə sonladı.</div>';  
                                     }
                                     else if($islem == "bos"){ 
                                         echo '<div class="alert alert-warning">Xeberdarliq.Xanalari bos buraxmaq olmaz.</div>';
                                     }
                                     else if($islem == "no"){
                                         echo '<div class="alert alert-danger">Xeta.Proyekt əlavə edilmədi.Təkrar yoxlayın.</div>';
                                         
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


<!-- Ckeditor inteqrasyasi -->
<script src="ckeditor/ckeditor.js"></script>
<script>

CKEDITOR.replace('textarealabel1');
</script>

<!-- file yuklemek ucun 

<link rel="stylesheet" href="file_input/css/fileinput.min.css">
<link rel="stylesheet" href="file_input/themes/explorer-fas/theme.min.css">
<script src="file_input/js/fileinput.js"></script>
<script src="file_input/themes/fas/theme.min.js"></script>
<script src="file_input/themes/explorer-fas/theme.min.js"></script>


  -->
<script>
    $(document).ready(function(){
        $("#proje_dosya").fileinput({
            'theme': 'explorer-fas',
            'showUpload': false,
            'showCaption': true,
            showDownloadL: true,
            allowedFileExtensions: ["jpg","png","jpeg","mp4"],
        });
    });
</script>

