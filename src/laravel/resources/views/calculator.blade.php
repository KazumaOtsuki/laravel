<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!--
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
            {{Form::token()}}
            <div class="content">
                <h3>数値入力</h3>
                {{Form::open()}}
                    <section class="calculation">
                        <div>
                            {{Form::text('num1','',[
                                'id' => 'num1',
                                'class' => 'num1'
                            ])}}
                            {{Form::text('num2','',[
                                'id' => 'num2',
                                'class' => 'num2'
                            ])}}
                        </div>
                        <div>
                            {{Form::select('code',[
                                '+' => '+',
                                '-' => '-',
                                '*' => '×',
                                '/' => '÷',            
                            ],'+',[
                                'id' => 'code',
                                'class' => 'code'    
                            ])}}
                        </div>
                        <div>
                            {{Form::text('rst','',[
                                'id' => 'rst',
                                'class' => 'rst',
                                'disabled' => 'disabled'
                            ])}}
                        </div>
                    </section>
                {{Form::close()}}
            </div>
        </div>
    </body>
</html>
