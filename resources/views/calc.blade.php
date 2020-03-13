<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('calc.title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- jQuery -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
            <h2 class="title">{{ __('calc.title') }}</h2>
            <p>{{ __('calc.subTitle') }}</p>
                <div class="content m-b-md">
                        <input type="text" id="input1" name="input1">

                        <select id="method" name="method">
                            <option value="add">{{ __('calc.add') }}</option>
                            <option value="subtract">{{ __('calc.subtract') }}</option>
                            <option value="multiply">{{ __('calc.multiply') }}</option>
                            <option value="divide">{{ __('calc.divide') }}</option>
                        </select>

                        <input type="text" id="input2" name="input2">

                        <input type="submit" value="Submit" id="btn-submit" name="btn-submit">

                        <div id="result"></div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $("#btn-submit").click(function(e) {
            e.preventDefault();
            var input1 = $("#input1").val();
            var method = $("#method").val();
            var input2 = $("#input2").val();
            
            $.ajax({
                type:'POST',
                url:'/api/calc',
                data: { input1, method, input2 },
                success:function(data){
                    $('#result').text('Result: ' + data);
                }
            });
        });
    </script>
</html>
