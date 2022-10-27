<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url ('assets/css/style.css')}}" type="text/css">
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
                
                <form action="/cotacao_frete" method="POST">
                    @csrf

                    @if(session('sucesso'))
                        <div class="alert alert-success">
                            <p>{{session('sucesso')}}</p>
                        </div>
                    @endif
                    <div class="form-group">
                        <!-- <label for="exampleFormControlSelect1">Selecione a transportadora</label> -->
                        <select class="form-control @error('transportadora_id') is-invalid @enderror" id="transportadora_id" name="transportadora_id">
                            <option value=""> -- Selecione a Transportadora -- </option>
                            @foreach ($transportadoras as $transportadora)
                            <option value="{{$transportadora->id}}">{{$transportadora->nome}}</option>
                            @endforeach
                        </select>
                        @error('transportadora_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <!-- <label for="exampleFormControlSelect1">Selecione o Estado</label> -->
                        <select class="form-control @error('uf') is-invalid @enderror" id="uf" name="uf">
                            <option value=""> -- Selecione o Estado -- </option>
                            <option value="PR">PR</option>
                            <option value="SP">SP</option>
                            <option value="SC">SC</option>
                            <option value="RJ">RJ</option>
                        </select>
                        @error('uf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Percentual cotação (%)</label>
                        <input type="text" class="form-control @error('percentual_cotacao') is-invalid @enderror" id="percentual_cotacao" name="percentual_cotacao" placeholder="2.5">
                        @error('percentual_cotacao')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Valor extra (R$)</label>
                        <input type="text" class="form-control @error('valor_extra') is-invalid @enderror" id="valor_extra" name="valor_extra" placeholder="8,90">
                        @error('valor_extra')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <p class="btn_salvar">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </p>
                    </div>    
                </form>
            </main>
            </div>
        </div>
        
        <!-- COTAR FRETE -->
        <div  class="col-md-4 container">
        <div class="box"> 
                <p class="title">Cotar Frete</p>
                <form action="/cotacao_frete" method="POST">
                    @csrf
                    <div class="form-group">
                        <!-- <label for="exampleFormControlSelect1">Selecione o Estado</label> -->
                        <select class="form-control" id="uf_cotar" name="uf_cotar">
                            <option value="">UF</option>
                            <option value="PR">PR</option>
                            <option value="SP">SP</option>
                            <option value="SC">SC</option>
                            <option value="RJ">RJ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Percentual cotação (%)</label>
                        <input type="email" class="form-control" id="percentual_cot" name="percentual_cot" placeholder="2.5">
                    </div>

                    <div class="form-group">
                        <p class="btn_cotar">
                            <button type="submit" class="btn btn-primary">Cotar</button>
                        </p>
                    </div>
                    </form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Melhores resultados:</label>
                        <!-- INICIO LISTA -->
                        <div class="row">
                            <div class="container box_frete">
                                <!-- Titulos -->
                                <div class="row title_frete">
                                    <div class="col coluna_grid"> Rank </div>
                                    <div class="col coluna_grid"> Transportadora </div>
                                    <div class="col"> Valor cotação </div>
                                </div>

                                <!-- Listagem -->
                                <div class="row linha_grid">
                                    <div class="col coluna_grid"> 1 </div>
                                    <div class="col coluna_grid"> Via Transporte </div>
                                    <div class="col"> $26,31 </div>
                                </div>
                                <div class="row linha_grid">
                                    <div class="col coluna_grid"> 2 </div>
                                    <div class="col coluna_grid"> Transp... </div>
                                    <div class="col"> $28,51</div>
                                </div>
                                <div class="row linha_grid">
                                    <div class="col coluna_grid"> 3 </div>
                                    <div class="col coluna_grid"> Entrega... </div>
                                    <div class="col"> $29,01 </div>
                                </div>
                            </div>    
                        </div>
                        <!-- FINAL LISTA -->
                    </div>
                </form>
            </main>
            </div>
        </div>
    </div>

    <!-- LISTAGEM -->  
    <div class="row">
        <div class="container box_grid">
            <!-- Titulos -->
            <div class="row title_list">
                <div class="col coluna_grid"> ID </div>
                <div class="col coluna_grid"> UF </div>
                <div class="col coluna_grid"> Percentual Frete </div>
                <div class="col coluna_grid"> Valor Taxa </div>
                <div class="col"> Transportadora </div>
            </div>

            @foreach ($cadastros as $cadastro)
            <div class="row linha_grid">
                <div class="col coluna_grid"> {{ $cadastro->id }}  </div>
                <div class="col coluna_grid"> {{ $cadastro->uf }} </div>
                <div class="col coluna_grid"> {{ $cadastro->percentual_cotacao }} </div>
                <div class="col coluna_grid"> {{ $cadastro->valor_extra }} </div>
                <div class="col"> {{ $cadastro->transportadora_id }} </div>
            </div>
            @endforeach
        </div>    
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3"><li class="nav-item"></li></ul>
        <p class="text-center text-muted">© 2022 - Kaísa Fernanda</p>
    </footer>
      
  </body>
</html>
