<head>
    <title>{{isset($meta['title'])?$meta['title']:'welcom test app'}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="shortlink" href="{{url()->current()}}" />
    <link rel="canonical" href="{{url()->current()}}" />

    <!-- seo tags -->
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="Apartment Living Melbourne" />
    <meta name="twitter:card" content="summary" />


    @if(isset($meta['image']))
    <meta property="og:image" content="{{$meta['image']}}" />
    @else
    <meta property="og:image" content="{{asset('images/share-image.jpg')}}" />
    @endif

    @if(isset($meta['title']))
    <meta property="og:title" content="{{$meta['title']}}" />
    <meta name="twitter:title" content="{{$meta['title']}}" />
    @else
    <meta property="og:title" content="Apartment Living Melbourne" />
    <meta name="twitter:title" content="Apartment Living Melbourne" />

    @endif

    @if(isset($meta))
    <meta name="description" content="{{$meta['description']}}" />
    <meta property="og:description" content="{{$meta['description']}}" />
    <meta name="keywords" content="{{$meta['keywords']}}" />
    @else
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:description" content="" />
    @endif
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>