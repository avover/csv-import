@extends('master')

@section('content')


    <form role="form" action="" method="post" class="form-horizontal" enctype="multipart/form-data">


        <div class="form-group">
            <label class="col-sm-2 control-label"><b>Kies bestand</b></label>
            <div class="col-sm-10">
                <input type="file" name="myfile" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" name="rapport" class="btn btn-sm btn-default pull-right">CSV Uploaden</button>
    </form>

@stop