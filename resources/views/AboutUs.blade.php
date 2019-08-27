<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Styles -->
    <style>
        .row{

            display: flex;
            justify-content: center;

        }
        .vision{

            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;

        }
        .mission{

            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            
        }

        .about_us{
            
            display: flex;
            justify-content: center;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;

        }
    </style>
    <title>About Us</title>
</head>
<body>
    <h1>About Us</h1>



    <div class="container">
    　<div class="row">
        <div class="col-sm-3 p-3">
            <h2 class="vision">Vision</h2>
            <p class="vision_content">Make donations/contribution with ZERO price</p>
        </div>
        <div class="col-sm-3 p-3 image">
            <img src="../images/batsu.jpeg">
        </div>
        <div class="col-sm-3 p-3">
            <h3 class="mission">Mission</h3>
            <p class="mission_content">We will rock you!!</p>
        </div>

        
      </div>

      <div>
        <h4 class="about_us">About us</h4>

        @extends('layouts.layouts')

        @section('title','contact')

        @section('content')
        <div class="row">
           <h1>Contact us</h1>
        </div>
        <div class="row">
           <form action="contact/confirm" method="post">
           <div class="form-group">
               <label for="InputEmail">E-mail</>
               <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
               @if($errors->has('email'))
                   <p class="text-danger">{{ $errors->first('email')}}</p>
               @endif
           </div>
           <div class="form-group">
               <label for="InputSubject">Title</label>
               <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
               @if($errors->has('subject'))
                    <p class="text-danger">{{ $errors->first('subject')}}</p>
               @endif
           </div>
           <div class="form-group">
               <label for="InputMessage">Message</label>
               <textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">
               {{ old('message') }}
               </textarea>
               @if($errors->has('message'))
                   <p class="text-danger">{{ $errors->first('message')}}</p>
               @endif
           </div>
               @csrf
              <button type="submit" name="action" class="btn btn-primary" value="sent">SUBMIT</button>
              </form>
           </div>
               @endsection
    　   </div>
　　     

    </div>

</body>
</html>