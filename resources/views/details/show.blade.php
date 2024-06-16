@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@400;500;700&family=Poppins:wght@300;400;500&display=swap');

    :root {
        --lg-font: 'Kaisei Tokumin', serif;
        --sm-font: 'Poppins', sans-serif;
        --green: #20d261;
    }

    .bg-primary {
        background-color: var(--green) !important;
    }

    .btn:not(.nav-btns button) {
        background-color: #fff;
        color: rgb(85, 85, 85);
        padding: 10px 28px;
        border-radius: 25px;
        border: 1px solid rgb(85, 85, 85);
    }

    .btn:not(.nav-btns button):hover {
        background-color: var(--green);
        color: #fff;
        border-color: var(--green);
    }

    .navbar {
        -webkit-box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
        box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
        width: 30px;
    }

    .navbar-brand span {
        letter-spacing: 2px;
        font-family: var(--lg-font);
    }

    .nav-link:hover {
        color: var(--green) !important;
    }

    .nav-item {
        border-bottom: 0.5px solid rgba(0, 0, 0, 0.05);
    }

</style>
<section class="py-5">
<div class="container">
<h1 style="text-align: center;">Show Product Detail</h1>
    <div class="container mt-5">
        <table class="table table-light">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <td>{{ $detail->title }}</td>
                <td><img src="{{ $detail->image }}" alt="{{ $detail->title }}" width="100"></td>
                <td>{{ $detail->content }}</td>
                <td>{{ $detail->date }}</td>
            </tbody>
        </table>    
</div>
</section>
@endsection
