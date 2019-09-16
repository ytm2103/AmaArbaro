
@extends('layouts.default')

@section('title','お問い合わせ内容の確認')
@section('content')

<div class="row">
    <h1>Confirmation of inquiries</h1>
</div>
<div class="row"     margin-left: 0px;>
    <p>The following will be sent as an inquiry. If you like, please press the “Send” button.</p>

    <table class="table table-bordered">
    <tr>
    <td class="table-secondary" style="width:20%">mail address</td>
    <td>{{ $email }}</td>
    </tr>
    <tr>
    <td class="table-secondary">subject</td>
    <td>{{ $subject }}</td>
    </tr>
    <tr>
    <td class="table-secondary">message</td>
    <td>{!! nl2br(e($message)) !!}</td>
    </tr>
    </table>
    <form action="sent" method="post">
    @csrf
        <input type="hidden" name="email" class="form-control" id="InputEmail" value="{{ $email }}">
        <input type="hidden" name="subject" class="form-control" id="InputSubject" value="{{ $subject }}">
        <input type="hidden" name="message" class="form-control" id="InputMessage" value="{{ $message }}">
    
    <button type="submit" name="action" class="btn btn-primary" value="back">back</button>
    <button type="submit" name="action" class="btn btn-primary" value="sent">sent</button>
    </form>
</div>

@endsection