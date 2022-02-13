@extends('layouts.main')

@section('title', 'Chamados')



@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chamado {{$id}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            
            <form action="{{url('/api/oschamado/'.$id)}}" method="POST" id="formChamadoStatus">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="DM_STATUS" id="inputChangeStatus">
              <input type="hidden" name="ID_CHAMADO" id="inputChangeIdChamado">
            </form>

            <a href="javascript:history.back()" rule="button" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-left-square" style="font-size: 1.1rem;"></i>
              Voltar
            </a>
            <button type="submit" class="btn btn-outline-secondary" id="btnStatus" form="formChamadoStatus" >
            </button>

          </div>
        </div>
      </div>

      <div class="card p-0">
        <div class="card-header bg-primary text-dark bg-opacity-10">
          Destaque
        </div>
        <div class="card-body">
          <form class="row g-3">

            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4">
                <label for="inputCodigo" class="form-label">Código</label>
                <input type="number" class="form-control form-control-sm" id="inputCodigo" disabled>
              </div>
              <div class="col-sm-8 col-md-8">
                <label for="inputCriador" class="form-label">Criador</label>
                <input type="text" class="form-control form-control-sm" id="inputCriador" disabled>
              </div>
            </div>
            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4">
                <label for="inputDtCriacao" class="form-label">Data Criação</label>
                <input type="text" class="form-control form-control-sm" id="inputDtCriacao" disabled>
              </div>

              <div class="col-sm-4 col-md-4">
                <label for="inputDtAbertura" class="form-label">Data Abertura</label>
                <input type="text" class="form-control form-control-sm" id="inputDtAbertura" disabled>
              </div>

              <div class="col-sm-4 col-md-4">
                <label for="inputDtEncerramento" class="form-label">Data Encerramento</label>
                <input type="text" class="form-control form-control-sm" id="inputDtEncerramento" disabled>
              </div>
            </div>

            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4 col-lg-2">
                <label for="inputStatus" class="form-label">Status</label>
                <input type="text" class="form-control form-control-sm" id="inputStatus" disabled>
              </div>
              <div class="col-sm-12 col-md-8 col-lg-5">
                <label for="inputEmpresa" class="form-label">Empresa</label>
                <input type="text" class="form-control form-control-sm" id="inputEmpresa" disabled>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-5">
                <label for="inputProduto" class="form-label">Produto</label>
                <input type="text" class="form-control form-control-sm" id="inputProduto" disabled>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <label for="inputAssunto" class="form-label">Assunto</label>
                <input type="text" class="form-control form-control-sm" id="inputAssunto" disabled>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <label for="inputVersao" class="form-label">Versão</label>
                <input type="text" class="form-control form-control-sm" id="inputVersao" disabled>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4">
                <label for="inputConcluido" class="form-label">Concluído</label>
                <input type="text" class="form-control form-control-sm" id="inputConcluido" disabled>
              </div>
            </div>
          </form>

          <nav class="pt-4">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-desc-prod-tab" data-bs-toggle="tab" data-bs-target="#nav-desc-prod" type="button" role="tab" aria-controls="nav-desc-prod" aria-selected="true">Descrição Problema</button>
              <button class="nav-link" id="nav-tramite-tab" data-bs-toggle="tab" data-bs-target="#nav-tramite" type="button" role="tab" aria-controls="nav-tramite" aria-selected="false">Tramite</button>
              <button class="nav-link" id="nav-anexo-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo" type="button" role="tab" aria-controls="nav-anexo" aria-selected="false">Anexo</button>
              <button class="nav-link" id="nav-solucao-tab" data-bs-toggle="tab" data-bs-target="#nav-solucao" type="button" role="tab" aria-controls="nav-solucao" aria-selected="false">Solução</button>
            </div>
          </nav>
          <div class="tab-content m-3" id="nav-tabContent" >
            <div class="tab-pane fade show active" id="nav-desc-prod" role="tabpanel" aria-labelledby="nav-desc-prod-tab">
              <div class="row col-12 pb-4">
                <div class="col-sm-12 col-md-8 col-lg-5">
                  <label for="inputResumo" class="form-label">Resumo</label>
                  <input type="text" class="form-control form-control-sm" id="inputResumo" disabled>
                </div>
              </div>
              <div class="col-12" >
                <ol class="list-group list-group-numbered" id="listObservacao">
                </ol>
              </div>

              <div class="py-4">
                <button class="btn btn-outline-primary me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#modalNovaObservacao">Nova Observação</button>
              </div>

              <p id="inputDsChamado">Descrição completa do chamado</p>
            </div>

            <div class="tab-pane fade" id="nav-tramite" role="tabpanel" aria-labelledby="nav-tramite-tab">

              <button type="button" class="btn btn-outline-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalTramiteAdd">
                <i class="bi bi-file-text" style="font-size: 1.1rem;"></i>
                  Adicionar
              </button>
              
              <div id="tableTramite" data-list="{}">
                <div class="table-responsive scrollbar">
                  <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                      <tr>
                        <th class="sort" data-sort="status">Status</th>
                        <th class="sort" data-sort="codigo">Código</th>
                        <th class="sort" data-sort="situacao">Situação</th>
                        <th class="sort" data-sort="prioridade">Prioridade</th>
                        <td class="sort" data-sort="dsresumida">Ds. Resumida</td>
                        <th class="sort" data-sort="responsavel">Responsável</th>
                        <th class="sort" data-sort="criador">Criador</th>
                        <th class="sort" data-sort="dtinicio">Dt. Inicio</th>                        
                        <th class="sort" data-sort="dtfim">Dt. Fim</th>
                        <th class="sort" data-sort="tempAtend">Tempo Atendimento</th> 
                      </tr>
                    </thead>
                    <tbody class="list" id="list-tramite-clear">
                    </tbody>
                  </table>
                </div>
                  <div class="d-flex justify-content-center mt-3">
                <!--  <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button> -->
                  <ul class="pagination mb-0"></ul>
                  <!-- <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button> -->
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="nav-anexo" role="tabpanel" aria-labelledby="nav-anexo-tab">
              <div class="mb-3">
                <label for="formFileSm" class="form-label">Anexar Arquivo</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>

              <div class="table-responsive">
                <div id="tab-anexo"></div>
              </div>

              <div id="tableAnexo" data-list="{}">
                <div class="table-responsive scrollbar">
                  <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                      <tr>
                        <th class="sort" data-sort="codigo">Código</th>
                        <th class="sort" data-sort="nome">Nome</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="list-clear">
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                <!--  <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button> -->
                  <ul class="pagination mb-0"></ul>
                  <!-- <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button> -->
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="nav-solucao" role="tabpanel" aria-labelledby="nav-solucao-tab">
              <div class="card">
                <div class="card-body" id="inputSolucao">
                  This is some text within a card body.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="modalNovaObservacao" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalNovaOSLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="{{url('/api/osobservacao')}}" method="POST" id="formObservacaoAdd">

        <div class="modal-body p-0">
          
          <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
            <h4 class="mb-1" id="modalNovaObservacaoLabel">Adicionar nova Observação</h4>
            <p class="fs--2 mb-0">Criado por <a class="link-600 fw-semi-bold" href="#" id="NomeCriadorObs"></a></p>
          </div>

          <div class="p-4">
            <div class="row">
              <input type="hidden" name="ID_CHAMADO" value="{{$id}}">

              <div class="col-lg-12">
                
                <div class="d-flex">
                  <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                  <div class="flex-1">

                    <h5 class="mb-2 fs-0">Empresa</h5>
                    <select id="inputEmpresaAdd" class="form-select form-select-sm" name="ID_EMPRESA" required>
                      <option selected></option>
                    </select>

                    <h5 class="my-2 fs-0">Produto</h5>
                    <select id="inputProdutoAdd" class="form-select form-select-sm" name="ID_PRODUTO" required>
                      <option selected></option>
                    </select>

                    <h5 class="my-2 fs-0">Assunto</h5>
                    <select id="inputAssuntoAdd" class="form-select form-select-sm" name="ID_ASSUNTO" required>
                      <option selected></option>
                    </select>
                    
                    <hr class="my-4" />
                  </div>
                </div>

                <div class="d-flex">
                  <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                  <div class="flex-1">
                    <h5 class="my-2 fs-0">Descrição</h5>
                    <div class="min-vh-50">
                      <textarea class="form-control form-control-sm min-vh-50" id="inputDescricaoAdd" name="DS_DESCRICAO" required="true"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div id="alertAdd"></div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fechar</button>
          <button class="btn btn-primary" id="btnAddObs" type="submit">Adicionar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="modalTramiteAdd" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('/api/ostramite')}}" method="POST" id="formTramiteAdd">

        <div class="modal-body p-0">
          
          <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
            <h4 class="mb-1" id="modalNovaObservacaoLabel">Adicionar novo Tramite</h4>
            <p class="fs--2 mb-0">Criado por <a class="link-600 fw-semi-bold" href="#" id="NomeCriadorTramite"></a></p>
          </div>

          <div class="p-4">
            <div class="row">
              <input type="hidden" name="ID_CHAMADO" value="{{$id}}">
              <input type="hidden" name="DM_STATUS" value="0">

              <div class="d-flex">
                <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                <div class="flex-1">

                  <h5 class="mb-2 fs-0">Para</h5>
                  <select id="inputFuncionarioAdd" class="form-select form-select-sm" name="ID_USUARIO_RESPONSAVEL" required>
                    <option selected></option>
                  </select>

                  <h5 class="mb-2 fs-0">Prioridade</h5>
                  <select id="inputPrioridadeAdd" class="form-select form-select-sm" name="NR_PRIORIDADE" required>
                    <option selected>Selecione a Prioridade</option>
                    <option value="0">Alta</option>
                    <option value="1">Média</option>
                    <option value="2">Baixa</option>
                  </select>
                  
                  <hr class="my-4" />
                </div>
              </div>
                
              <div class="col-lg-12">
                <div class="d-flex">
                  <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                  <div class="flex-1">
                    <h5 class="mb-2 fs-0">Descrição Resumida</h5>
                    <input type="text" class="form-control form-control-sm" id="inputReduzidaAdd" name="DS_REDUZIDA" required>

                    <h5 class="my-2 fs-0">Descrição</h5>

                    <div class="min-vh-50">
                      <textarea class="form-control form-control-sm min-vh-50" id="inputDsTramiteAdd" name="DS_TRAMITE" required="true"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div id="alertAdd"></div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fechar</button>
          <button class="btn btn-primary" id="btnAddObs" type="submit">Adicionar</button>
        </div>

      </form>

    </div>
  </div>
</div>


<div class="modal fade" id="modalTramiteEdt" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('/api/ostramite')}}" method="POST" id="formTramiteEdt">
        <input type="hidden" name="_method" value="PUT">
        <div class="modal-body p-0">
          <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
            <h4 class="mb-1" id="modalNovaObservacaoLabel">Editar Tramite</h4>
            <p class="fs--2 mb-0">Editado por <a class="link-600 fw-semi-bold" href="#" id="NomeEditorTramite"></a></p>
          </div>
          
          <div class="p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-tramite" role="tab" aria-controls="tab-tramite" aria-selected="true">Tramite</a></li>
              <li class="nav-item"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-solucao" role="tab" aria-controls="tab-solucao" aria-selected="false">Solução</a></li>
            </ul>
            
            <div class="tab-content border-x border-bottom p-3" id="myTabContent">
              <div class="tab-pane fade show active" id="tab-tramite" role="tabpanel" aria-labelledby="home-tab">
                <div class="py-4">
                  <div class="row">
                    <input type="hidden" name="ID_CHAMADO" value="{{$id}}">
                    <input type="hidden" id="inputTramiteIdEdt" name="ID_TRAMITE" value="">
                    <input type="hidden" id="inputDmStatusEdt" name="DM_STATUS" value="0">

                    <div class="d-flex">
                      <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                      <div class="flex-1">

                        <h5 class="mb-2 fs-0">Para</h5>
                        <select id="inputFuncionarioEdt" class="form-select form-select-sm" name="ID_USUARIO_RESPONSAVEL" required>
                          <option selected></option>
                        </select>

                        <h5 class="my-2 fs-0">Prioridade</h5>
                        <select id="inputPrioridadeEdt" class="form-select form-select-sm" name="NR_PRIORIDADE" required>
                          <option selected>Selecione a Prioridade</option>
                          <option value="0">Alta</option>
                          <option value="1">Média</option>
                          <option value="2">Baixa</option>
                        </select>
                        
                        <hr class="my-4" />
                      </div>
                    </div>
                      
                    <div class="col-lg-12">
                      <div class="d-flex">
                        <span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                        <div class="flex-1">

                          <h5 class="mb-2 fs-0">Descrição Resumida</h5>
                          <input type="text" class="form-control form-control-sm" id="inputReduzidaEdt" name="DS_REDUZIDA" required>

                          <h5 class="my-2 fs-0">Descrição</h5>
                          <div class="min-vh-50">
                            <textarea class="form-control form-control-sm min-vh-50" id="inputDsTramiteEdt" name="DS_TRAMITE" required="true"></textarea>
                          </div>

                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div id="alertAdd"></div>
              </div>
              
              <div class="tab-pane fade" id="tab-solucao" role="tabpanel" aria-labelledby="profile-tab" id="">
                <div class="min-vh-50">
                  <textarea class="form-control form-control-sm min-vh-50" id="inputDsSolucaoEdt" name="DS_SOLUCAO" required="true"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- modal-body -->

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fechar</button>
          <button class="btn btn-primary" id="btnEdtObs" type="submit">Editar</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endsection


@section('script')
<script>
  let id = `{{$id}}`;
  pgChamados.Chamado(id);
  </script>
@endsection
