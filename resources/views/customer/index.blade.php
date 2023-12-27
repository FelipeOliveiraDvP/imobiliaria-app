@extends('layouts.private.base')

@section('content')
    <div class="d-flex justify-content-between p-3 bg-white rounded align-items-center page-header">
        <h1 class="h5 title">{{ page_title() }}</h1>
        <a class="btn btn-primary extra" href="{{ route('customers.create') }}">Novo Cliente</a>
    </div>

    <div class="d-flex justify-content-between align-items-start my-3 page-filters">
        <div class="d-flex align-items-center flex-wrap gap-2">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Pesquisar por nome" type="text">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Pesquisar por CPF" type="text">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control text-secondary" id="role">
                        <option value="">Selecione o tipo</option>
                        <option value="0">Locatário</option>
                        <option value="1">Inquilino</option>
                    </select>
                    <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control text-secondary" id="role">
                        <option value="">Pagamento</option>
                        <option value="0">Em dia</option>
                        <option value="1">Atrasado</option>
                    </select>
                    <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control text-secondary" id="role">
                        <option value="">Selecione o status</option>
                        <option value="0">Administrador</option>
                        <option value="1">Imobiliária</option>
                    </select>
                    <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <select class="form-control text-secondary" id="role">
                        <option value="">Ordenar por</option>
                        <option value="0">Nome - ASC</option>
                        <option value="1">Nome - DESC</option>
                    </select>
                    <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary mb-0">
            <i class="fas fa-filter"></i> Filtrar
        </button>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Cliente</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Contato</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Tipo</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Status</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="px-3">
                                <h6 class="mb-0 text-xs">Fulano da silva</h6>
                                <p class="text-xs text-secondary mb-0">000.000.000-00</p>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <p class="text-xs font-weight-bold mb-0">email@exemplo.com</p>
                                <p class="text-xs text-secondary mb-0">(00) 00000 0000</p>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <span class="badge bg-gradient-primary">Inqulino</span>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <span class="badge bg-gradient-success">Ativo</span>
                            </div>
                        </td>

                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                                data-original-title="Edit user">
                                Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <ul class="pagination pagination-primary justify-content-end">
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:;">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">7</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
