@extends('layouts.private.base')

@section('content')
    <div class="filters">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" placeholder="EX: 0000000">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" id="code" placeholder="EX: Rua ABC, 12">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                    <label for="rented">Imóvel alugado</label>
                    <select class="form-control" id="rented">
                        <option value="0">Sim</option>
                        <option value="1">Não</option>
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
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Código</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Endereço</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Situação</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Status</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="px-3">
                                <h6 class="mb-0 text-xs">0123456</h6>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <p class="text-xs font-weight-bold mb-0">Rua ABC, 123</p>
                                <p class="text-xs text-secondary mb-0">São Paulo - SP</p>
                            </div>
                        </td>

                        <td>
                            <div class="px-3">
                                <span class="badge bg-gradient-primary">Disponível</span>
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
            </table>
        </div>
    </div>
@endsection
