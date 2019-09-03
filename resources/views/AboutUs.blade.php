@extends('layouts.layouts')

@section('title','contact')

@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

     -->
    <!-- Styles -->
    <style>
        .row{

            display: flex;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            color: #37654E
        }
        .about_us,.vision,.mission,.h1{

            display: flex;
            justify-content: center;
            font-size: 2.8em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;

        }
        /* .mission{

            display: flex;
            justify-content: center;
            font-size: 4em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold; */
            
        /* } */

        .col-sm-6 image{

            display: flex;
            justify-content: center;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;

        }

        .grid-img{
            width: 100%
        }

       
        .about_us_content,.vision_content,.mission_content{

            display: flex;
            justify-content: center;
            font-size: 2em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;


        }

        .btn-primary {
            background: #37654E; //ボタンの背景色
            /* color: 好きな色; //ボタンのテキストの色 */
}


        
    </style>
    <title>About Us</title>
</head>
<body>
    
    <div class="container">
    　<div class="row">
        <div class="col-sm-6">
            <h2 class="about_us">About us</h2>
            <p class="about_us_content">AMA ARBARO IS NON-GOVERMENTAL ORGANIZATION WITH A FOCUS ON GLOBAL REFORESTATION.<br>
        We pool the donations for each project and send the funds to our partners.</p>
        </div>
        <div class="col-sm-6 image">
            <img src="../images/AboutUs.png" alt class="grid-img"">
        </div>
        <div class="col-sm-6 image">
            <img src="../images/vision.png" alt class="grid-img"">
        </div>
        <div class="col-sm-6">
            <h3 class="vision">Vision</h3>
            <p class="vision_content">Make donations/contribution with ZERO price.</p>
        </div>
        <div class="col-sm-6">
            <h3 class="mission">Mission</h3>
            <p class="mission_content">We're on a mission to make it simple for anyone to help the environment.
            

As an environmental charity, we aim to make it easier for individuals to be interested in environmental issues and to make donations (including sharing news) on a daily basis.
            </p>
        </div>
        <div class="col-sm-6 image">
            <img src="../images/mission.png" alt class="grid-img">
        </div>
        

        </div> 
      </div>

      

       

        <br></br>
        <br></br>
        <div class="row">
           <h1>Contact us</h1>
        </div>
        <div class="row">
           <form action="contact/thanks" method="post">
           
            <div class="form-group">
                <label for="InputEmail">E-mail</>
                <input type="email" name="email" class="form-control" cols="40" rows="4" id="InputEmail" value="{{ old('email') }}">
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
              <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal">SUBMIT</button>
              <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        @endsection

    </div>

</body>
</html>