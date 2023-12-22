@extends('layouts.private.base')

@section('content')
    <div class="filters">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="customer">Cliente</label>
                    <input type="text" class="form-control" id="customer" placeholder="Nome do Cliente">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="due_date" class="form-control-label">Data de vencimento</label>
                    <input class="form-control" type="date" value="2018-11-23" id="due_date">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
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
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Cliente</th>
                        <th class="text-uppercase text-secondary text-left text-xxs font-weight-bolder">Data de vencimento
                        </th>
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
                                <p class="text-xs font-weight-bold mb-0">00/00/0000</p>
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
