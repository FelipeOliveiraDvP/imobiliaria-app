@extends('layouts.private.base')

@section('content')
    <div class="filters">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="email" class="form-control" id="name" placeholder="Nome do Usuário">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="EX: email@exemplo.com">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="role">Tipo</label>
                    <select class="form-control" id="role">
                        <option value="0">Administrador</option>
                        <option value="1">Imobiliária</option>
                        <option value="2">Cliente</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status">
                        <option value="0">Ativo</option>
                        <option value="1">Inativo</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Nome</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Tipo</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Telefone</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Status</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg"
                                        class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                <p class="text-xs text-secondary mb-0">Organization</p>
                            </div>
                        </td>

                        <td>
                            <p class="text-xs text-secondary mb-0 px-3">(11) 00000 0000</p>
                        </td>

                        <td class="px-3">
                            <span class="badge bg-gradient-success">Ativo</span>
                        </td>

                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                                data-original-title="Edit user">
                                Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
