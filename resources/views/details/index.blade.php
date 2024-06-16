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

    .details2{
        margin-top: 6%;
    }
    
    .date-column {
        width: 15%;
    }
    .actions-column {
        width: 20%;
    }
</style>
<section class="details2">
<div class="container">
    <h1>Details</h1>
    <a href="{{ route('details.create') }}" class="btn btn-primary">Add Detail</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th class="date-column">Date</th>
                <th class="actions-column">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->title }}</td>
                    <td><img src="{{ ($detail->image) }}" alt="{{ $detail->title }}" width="100"></td>
                    <td>{{ $detail->content }}</td>
                    <td>{{ $detail->date }}</td>
                    <td>
                        <a href="{{ route('details.show', $detail->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('details.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('details.destroy', $detail->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>

@endsection
