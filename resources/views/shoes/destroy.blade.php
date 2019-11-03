@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Supprimer une chaussure</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('shoes.destroy', $shoe->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Supprimer la chaussure {{ $shoe->name }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
