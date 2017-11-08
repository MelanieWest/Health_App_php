@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-heading" style="font-size:36px"><a href="/menu">Begin</a></div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <img src="https://lh5.ggpht.com/U7KpnhnRSH3vqZkFKgAldYHxEsl57s5DgqhBgWAKjXBNrHPgBC0IQQEB3fJNd4koNiAR=h900" style="width: 700px" alt="pretty">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
