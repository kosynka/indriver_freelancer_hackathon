@extends('layouts.app')

@section('content')
<div class="container col">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ ('Здравствуйте, '). (Auth::user()->name) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Скоро появятся Рекомендации для сохранения и приумножения денег</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
