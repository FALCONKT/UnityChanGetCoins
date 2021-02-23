@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    お問い合わせ　完了Page
                </div>
                
                <div class="panel-body">
                    <p>お問い合わせありがとうございました！！</p>
                    {!! link_to_route('/', 'TOPに戻る！！', [], ['class' => 'btn btn-primary']) !!}

                </div>
 
            </div>
        </div>
    </div>
</div>
@endsection