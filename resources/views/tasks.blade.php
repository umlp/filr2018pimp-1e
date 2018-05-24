@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Les entreprises
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <tbody>
                            <tr>
                                <td class="table-text"><div>1</div></td>
                                <td class="table-text"><div>Google</div></td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-btn fa-sort-asc" aria-hidden="true"></i>
                                        Rank up
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-btn fa-sort-desc"></i>
                                        Rank down
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>2</div></td>
                                <td class="table-text"><div>Netflix</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>3</div></td>
                                <td class="table-text"><div>Dassaut</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>5</div></td>
                                <td class="table-text"><div>Renault</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>6</div></td>
                                <td class="table-text"><div>Huawei</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>7</div></td>
                                <td class="table-text"><div>SNCF</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>8</div></td>
                                <td class="table-text"><div>Sopra Steria</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>9</div></td>
                                <td class="table-text"><div>Thales</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>10</div></td>
                                <td class="table-text"><div>Orange</div></td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
