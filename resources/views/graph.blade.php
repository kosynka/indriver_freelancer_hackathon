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
                    
                    

                    <div id="app">
                        <graph-line-timerange
                                :width="600"
                                :height="400"
                                :axis-min="0"
                                :axis-max="100"
                                :axis-reverse="false"
                                :axis-format="'HH:mm'"
                                :axis-interval="1000 * 60 * 60 * 8"
                                :labels="labels"
                                :values="values">
                            <note :text="'Line Chart'"></note>
                            <guideline :tooltip-x="true" :tooltip-y="true"></guideline>
                        </graph-line-timerange>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
