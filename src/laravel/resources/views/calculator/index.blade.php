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
            <div class="content">
                <h3>数値入力</h3>
                {{Form::open(['url' => '/calculator/exec'])}}
                    <section class="calculator">
                        <div>
                            <div>
                                <span>数字1:</span>
                                {{Form::text('num1',$num1,[
                                    'id' => 'num1',
                                    'class' => 'num1'
                                ])}}
                            </div>
                            <div>
                                <span>数字2:</span>
                                {{Form::text('num2',$num2,[
                                    'id' => 'num2',
                                    'class' => 'num2'
                                ])}}
                            </div>
                        </div>
                        <div>                            
                            {{Form::select('sign',[
                                $signs['plus'] => $signs['plus'],
                                $signs['minus'] => $signs['minus'],
                                $signs['times'] => $signs['times'],
                                $signs['divided'] => $signs['divided'],
                            ],$sign,[
                                'id' => 'sign',
                                'class' => 'sign'    
                            ])}}
                        </div>
                        <div>
                            {{Form::submit('計算する',[
                                'id' => 'calculationBtn',
                                'class' => 'calculation-btn',    
                            ])}}
                        </div>
                        <div>
                            {{Form::text('rst',$rst,[
                                'id' => 'rst',
                                'class' => 'rst',
                                'disabled' => 'disabled'
                            ])}}
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $e)
                                <li>{{$e}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </section>
                    
                {{Form::close()}}
            </div>
        </div>
    </body>
</html>
