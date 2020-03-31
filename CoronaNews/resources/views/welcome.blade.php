<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @foreach($articles as $article)
        <div class="article-clean card" style="min-height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <div class="intro">
                            <h1 class="text-center">{{$article['title']}}</h1>
                            <p class="text-center"><a href="#">{{$article['source']['name']}}</a> : <span class="date">{{date('d-m-Y', strtotime($article['publishedAt']))}}</span></p>
                            <div style="text-align: center;">
                                <img class="img-fluid" src="{{$article['urlToImage']}}" width="600px" />
                            </div>
                        </div>
                        <div class="text">
                            <a href="{{$article['url']}}">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>