<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

  <link rel="stylesheet" href="http://laradev.dev/css/bootstrap.min.css">
    <style type="text/css">
        body{
            padding: 10px;
        }
        .author{
            color: #777;
        }
        .caption{
            overflow: hidden;
            word-wrap: break-word;
        }
        table{
            table { table-layout: fixed; }
            table th, table td { overflow: hidden; }

        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Z-Libray</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">Home</a></li>
                <li><a href="/books">Books</a></li>
                @if (Auth::check())
                <li><a href="/books/borrowed">My Books</a></li>
                <li><a href="/books/create">Add Book</a></li>
                @endif
            </ul>
            @if (Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/register"><span class="glyphicon glyphicon-user"> Register</span></a></li>
                    <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>
</header>
<div class="container">