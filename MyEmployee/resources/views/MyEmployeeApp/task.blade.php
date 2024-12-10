@extends ('MyEmployeeApp.layout')
@section('title', 'Task')
@section('navbar')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task</title>
        <style>
            .form-container {
                position: absolute;
                margin: 10rem 10rem 10rem 11.5rem;
                width: 80%;
                border-radius: 15px;
                padding: 20px;
                background-color: white;
                box-shadow: 2px 2px 8px gray;
            }
            
            .done-button {
                width: 12rem;
                height: auto;
                border-radius: 15px;
                background-color: green;
                color: white;
                font-size: 18px;
                box-shadow: 2px 2px 8px gray;
                border: none;
                padding: 5px;
                transition: transform ease-in-out 0.3s;
            }

            .done-button:hover {
                background-color: darkgreen;   
                transform: translateY(-4px);
                box-shadow: 2px 4px 8px grey;
            }
            
            .done-button-secondary {
                background-color: rgb(223, 21, 21);
            }

            .done-button-secondary:hover {
                background-color: darkred;
                
            }
        </style>
    </head>
    <body> 
        <div class="form-container">
            <ul class="list-group">
                @foreach ($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $task->nama_tugas }}</strong>
                            <p>{{ $task->deskripsi }}</p>
                            <small>Status: {{ $task->is_completed ? 'Selesai' : 'Belum Selesai' }}</small>
                        </div>
                        <form action="{{ route('task.toggle', $task) }}" method="POST">
                            @csrf
                            <button type="submit" class="done-button done-button-{{ $task->is_completed ? 'secondary' : 'success' }}">
                                {{ $task->is_completed ? 'Tandai Belum Selesai' : 'Tandai Selesai' }}
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
    </html>
@endsection