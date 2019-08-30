<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script> 

    
    <!-- Styles -->
    <style>
        .row{

            display: flex;
            justify-content: center;

        }
        .vision{

            display: flex;
            justify-content: center;
            font-size: 4em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;

        }
        .mission{

            display: flex;
            justify-content: center;
            font-size: 4em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            
        }

        .col-sm-3 p-3 image{

            display: flex;
            justify-content: center;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;

        }

        .about_us{
            
            display: flex;
            justify-content: center;
            font-size: 2.8em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;

        }

        .about_us_content{

            display: flex;
            justify-content: center;
            font-size: 2em;
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
            <p class="mission_content">We're on a mission to make it simple for anyone to help the environment.</p>
        </div>

        
      </div>

      <div>
        <h4 class="about_us">About us</h4>
        <p class="about_us_content">AMA ARBARO IS NON-GOVERMENTAL ORGANIZATION WITH A FOCUS ON GLOBAL REFORESTATION.<br>
        We pool the donations for each project, and you can </p>


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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">SUBMIT</button>
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
                        ...
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



        

<!-- 　　　　　　　
           <div id="faq_csv_modal_window">
           {{-- モーダルウィンドウ --}}
           @include('modal_window')
           @section('modal_window')
           <div id="modal_open">
           <header id="modal_header">
            モーダルヘッダーです。
           </header>
           <main id="modal_main">

           </main>
           <footer id="modal_footer">
           <p><a id="modal-close" class="button-link">閉じる</a></p>
           </footer>
          </div>
          @endsection
          @yield('modal_window')
        </div> --> -->

    </div>

</body>
</html>