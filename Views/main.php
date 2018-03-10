<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Antrian Simkesmas</title>

    <!-- Bootstrap Core CSS -->
    <link href="./public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./public/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="./public/assets/css/stylish-portfolio.min.css" rel="stylesheet">
    <style type="text/css">
      .centered{
        margin: 0 auto;
      }
      #capatcha {
          margin: 0 auto;
          display: block;
          width: 50%;
      }
    </style>
  </head>

  <body id="page-top">
    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h3 class="mb-5">
          <em>PT. Siantar Madju</em>
        </h3>        
        <form action="<?php $this->url() ?>" method="post">
          <div class="form-group">
            <?php 
              if (isset($result)) {
                $display_result = "display:block;";
                $display_info = "display:none;";
              }else{
                $display_result = "display:none;";
                $display_info = "display:none;";
              }
             ?>
              <div class="alert alert-danger col-sm-8 col-md-6 centered" id="alert-result" style="text-align: left; <?php echo $display_result; ?>">
                Input : <?php echo $input ?>
                <br>
                Hasil : <?php echo $result ?>
              </div>            
              <div class="alert alert-info col-sm-8 col-md-6 centered" id="alert-info" style="text-align: left; <?php echo $display_info; ?>">
                <span id="no1" class="info" style="display: none;">
                    Merubah Urutan Kata, Input berupa teks.<br>
                    Input : "hello world"<br>
                    Output : "world hello"
                </span>
                <span id="no2" class="info" style="display: none;">
                    Mencari bilangan prima, Input berupa angka.<br>
                    Input : 10<br>
                    Output : 2,3,5,7
                </span>
                <span id="no3" class="info" style="display: none;">
                    Statistik sederhana, Input berupa deret angka dipisahkan dengan koma(,).<br>
                    Input : 1,5,2,3,4<br>
                    Output : Angka terkecil : 1 <br>
                              Angka terbesar : 5<br>
                              Rata- rata :3<br>
                              Median : 3<br>
                              Urutan : 1,2,3,4,5<br>
                </span>
              </div>
          </div>
          <div class="form-group">
              <select class="form-control col-sm-8 col-md-6 centered" name="type" required="">
                <option value="">--- Silahkan Pilih ---</option>
                <option value="1">Merubah Urutan Kata</option>
                <option value="2">Mencari Bilangan Prima</option>
                <option value="3">Deret Angka</option>
              </select>
          </div>
          <div class="form-group" id="field">
              
          </div>
          <div class="form-group">
              <input type="submit" name="" id="btn-submit" class="form-control col-sm-8 col-md-6 centered btn btn-primary btn-xl" value="Submit">
          </div>          
        </form>
      </div>
      <div class="overlay"></div>
    </header>
    <script src="./public/assets/vendor/jquery/jquery.js"></script>
    <script type="text/javascript">
      $('select[name=type]').on('change', function() {
        $('#alert-result').hide();
        $('#alert-info').show();
        $('.info').hide();
        $('#no'+$(this).val()).show();
        if ($(this).val()=="") {
          $('#alert-info').hide();
        }else if($(this).val()==2){
          $('#field').html('<input type="number" min="1" name="input" class="form-control col-sm-8 col-md-6 centered" placeholder="Silahkan Masukkan Data">');
        }else{
          $('#field').html('<input type="text" name="input" class="form-control col-sm-8 col-md-6 centered" placeholder="Silahkan Masukkan Data">');
        }
      });
    </script>
  </body>

</html>
