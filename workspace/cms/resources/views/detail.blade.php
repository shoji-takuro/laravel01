<!-- 課題2 -->
<!-- resources/views/detail.blade.php -->

@extends('layouts.app')

@section('content')
    
    
    <div class="panel-body container">
        <div class="row">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('books/update') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="book-name" class="col-sm-3 control-label">本のタイトル</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_name" id="book-name" class="form-control" value="{{$book->item_name}}">
                </div>
            </div>
            
            <!-- 本の数 -->
            <div class="form-group">
                <label for="book-number" class="col-sm-3 control-label">冊数</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_number" id="book-number" class="form-control" value="{{$book->item_number}}">
                </div>
            </div>
            
            <!-- 本の金額 -->
            <div class="form-group">
                <label for="book-amount" class="col-sm-3 control-label">金額</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_amount" id="book-amount" class="form-control" value="{{$book->item_amount}}">
                </div>
            </div>
            
            <!-- 本の公開日 -->
            <div class="form-group">
                <label for="published" class="col-sm-3 control-label">公開日時</label>
                
                <div class="col-sm-6">
                    <input type="datetime-local" name="published" id="published" class="form-control" step="1" value="{{$book->published}}">
                </div>
            </div>
            
            <!-- 本id（隠す） -->
            <input type="hidden" name="id" value="{{$book->id}}" />
            
            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                    <a href="{{url('/')}}" class="btn btn-link pull-right"><i class="glyphicon glyphicon-backward">Back</i></a>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection




