<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Contacts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #2A2A2A;
            color: #fff;
        }
        .navbar {
            background-color: #000;
        }
        .card {
            background-color: #1A1A1A;
        }
        .table-container {
            background-color: #1A1A1A;
            padding: 20px;
            border-radius: 10px;
        }
        .form-control, .form-select {
            background-color: #2A2A2A;
            color: #fff;
            border: 1px solid #555;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Gestion des Contacts</a>

        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/groups">Groups</a></li>
            <li class="nav-item"><a class="nav-link active" href="/contacts">Contacts</a></li>
        </ul>
    </div>
</nav>


<div class="container my-5">

    {{-- MESSAGE SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    
    <div class="card p-4 mb-5">
        <h4 class="mb-4">Add New Contact</h4>

        <form method="POST" action="/contacts">
            @csrf

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Group</label>
                    <select name="group_id" class="form-select">
                        <option value="">-- Select Group --</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">
                                {{ $group->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fas fa-save me-2"></i>Save Contact
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- CONTACTS LIST -->
    <div class="table-container">
        <h4 class="mb-3">Contacts List</h4>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Group</th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ optional($contact->group)->name }}</td>
                        <td>
                             <form action="/contacts/{{$contact->id}}"  method="POST">
                                @csrf  
                                @method('DELETE')

                                <button  type="submit"> delete</button>
                             </form>
                        </td>
                        <td><a href="">edit</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No contacts yet</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
