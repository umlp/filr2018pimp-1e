@extends('layouts.app')

@section('navbar')
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Classement des entreprises</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Les stages</a></li>
            <li class="active"><a href="#">Les entreprises</a></li>
            <li><a href="#">Rechercher un stage</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
          </ul>
        </div>
      </div>
    </nav>

@endsection

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
                            @foreach ($entreprises as $entreprise)
                                <tr>
                                    <td class="table-text"><div>{{ $entreprise->rang }}</div></td>
                                    <td class="table-text"><div>{{ $entreprise->name }}</div></td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        @if ($entreprise->rang != 1)
                                            <form action="/entreprise/up/{{ $entreprise->id }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-btn fa-sort-asc" aria-hidden="true"></i>
                                                    Rank up
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($entreprise->rang != 9)
                                            <form action="/entreprise/down/{{ $entreprise->id }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-sort-desc"></i>
                                                    Rank down
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection