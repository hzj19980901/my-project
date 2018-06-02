<?php
/**
 * Created by PhpStorm.
 * User: johnd
 * Date: 2018/6/2
 * Time: 下午4:33
 */?>

@extends('layouts.app_with_js')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">后台管理</div>
                    <div class="card-body">
                        <div class="container">
                            <ul class="list-group">
                                @foreach($issues as $issue)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $issue->description }}
                                        <button type="button" class="btn btn-primary">解决</button>
                                    </li>
                                @endforeach
                                <li class="list-group-item">
                                    {{ $issues->links() }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection