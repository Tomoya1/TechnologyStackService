<html>
<head>
    <title>@yield('title')</title>
    <style>
        body {
            font-size: 16px;
            color: #999;
            margin: 5px;
        }
        h1 {
            font-size: 120px;
            text-align: right;
            color: #fafafa;
            margin: -10px -30px;
            letter-spacing: -4pt;
        }
        .menutitle {
            font-size: 14px;
            font-weight: bold;
        }
        .content {
            margin: 10px;
        }
        .footer {
            text-align: right;
            font-size: 10pt;
            margin: 10px;
            border-bottom: solid 1px #ccc;
            color: #ccc;
        }
        th {
            background-color: #999;
            color: #FFFFFF;
            padding: 5px 10px;
        }
        td {
            border: solid 1px #aaaaaa;
            color: #999999;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
        <ul>
            <p class="menutitle">※メニュー</p>
            <li>@show</li>
        </ul>
        <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>