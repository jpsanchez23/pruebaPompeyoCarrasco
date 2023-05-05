@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--
                    {{ __('You are logged in!') }}
                    -->

                    <div style="margin-bottom: 20px;">
                        <a href="/posts/1"><input type="button" value="Ver Post Creados propios"></a>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <a href="/posts/2"><input type="button" value="Ver Post Creados de otros usuarios"></a>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <a href="/posts/create"><input type="button" value="Crear Post"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
