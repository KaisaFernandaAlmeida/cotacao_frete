<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(url ('assets/css/style.css')); ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>Sistema de Cotação de Frete</title>
  </head>
  <body>
    
    <header class="bd-header header py-3 d-flex align-items-stretch ">
        <div class="container-fluid align-items-center header_txt">
            <h1 class="header_txt"> Sistema de Cotação de Frete </h1>
        </div>
    </header>

    <div class="row over" >
        <!-- CADASTRO DE FRETE -->
        <div class="col-md-2 container">
            <div class="box"> 
            <main class="bd-content" role="main">
                <p class="title">Cadastro Cotação de Frete</p>
                
                
                    <div class="form-group">
                        <input type="text" class="form-control" id="transportadora_id" name="transportadora_id" value="<?php echo e($cotacao->transportadora_id); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uf" name="uf" value="<?php echo e($cotacao->uf); ?>">
                    </div>
                
                    <div class="form-group">
                        <label>Percentual cotação (%)</label>
                        <input type="text" class="form-control" id="percentual_cotacao" name="percentual_cotacao" placeholder="2.5">
                    </div>

                    <div class="form-group">
                        <label>Valor extra (R$)</label>
                        <input type="text" class="form-control" id="valor_extra" name="valor_extra" placeholder="8,90">
                    </div>

                    <div class="form-group">
                        <p class="btn_salvar">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </p>
                    </div>    

            </main>
            </div>
        </div>
        
    </div>


    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3"><li class="nav-item"></li></ul>
        <p class="text-center text-muted">© 2022 - Kaísa Fernanda</p>
    </footer>
      
  </body>
</html>
<?php /**PATH C:\wampk\www\cotacao_frete\resources\views/ver.blade.php ENDPATH**/ ?>