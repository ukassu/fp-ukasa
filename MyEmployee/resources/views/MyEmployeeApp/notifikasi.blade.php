@extends ('MyEmployeeApp.layout')
@section('title', 'Notifikasi')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <style>

        .notif-container {
            background-color: white;
            position: absolute;
            margin: 10rem 0px 0px 8rem;
            width: 85%;
            border-radius: 20px;
            padding: 16px 16px 16px 16px;
        }

        .clear-button {
            margin: 0px 0px 0px 77rem;
            width: 10%;
            height: 2.5rem;
            border-radius: 15px;
            background-color: #253D90;
            color: white;
            box-shadow: 2px 2px 8px gray;
            transition: transform ease-in-out 0.3s;
        }

        .clear-button:hover {
            transform: translateY(-4px);
            background-color: #FFC20E;
            border: 0px;
            color: black;
            box-shadow: 4px 6px 10px black;
        }

        .notification-content-container {
            display: flex;
            flex-direction: row;
            width: 100%;
            margin: 2rem 0px 0px 0px;
            flex: 1 1 50%;
            padding: 0px 10px 10px 10px;
        }  

        .notif-button-container {
            width: 100%;
        }

        .notification-message {
            width: 100%;
        }
        
        .delete-btn {
            position: relative;
            left:25rem;
            width: 15%;
            height: 2.5rem;
            border-radius: 15px;
            background-color: rgb(221, 34, 34);
            color: white;
            border: 0px;
            box-shadow: 2px 2px 6px gray;
            transition: transform ease-in-out 0.3s;
        }

        .delete-btn:hover {
            background-color: rgb(196, 10, 10);
            transform: translateY(-4px);
            box-shadow: 2px 4px 10px gray;
        }

        .view-btn {
            position: relative;
            left: 24rem;
            width: 24%;
            height: 2.5rem;
            border-radius: 15px;
            padding: 5px 5px 5px 5px;
            background-color: #2693ca;
            color: white;
            border: 0px;
            box-shadow: 2px 2px 6px gray;
            transition: transform ease-in-out 0.3s;
        }

        .view-btn:hover {
            background-color: #21759f;
            transform: translateY(-4px);
            box-shadow: 2px 4px 10px gray;
        }

    </style>
</head>
<body>
    <div class="notif-container">
        <div class="card-body">
            <form action="{{ route('notifikasi.clear') }}" method="POST">
                @csrf
                <button class="clear-button" type="submit"><i class="fa-solid fa-trash" style="padding: 3px 3px 3px 3px;"></i> Clear All</button>
            </form>
            @foreach($notifikasi as $notifikasi)
                <div class="notification-content-container">
                    <div class="notification-message" id="notif-{{ $notifikasi->id }}" style="opacity: {{ $notifikasi->dibaca ? '0.5' : '1' }}">
                        <p><b>{{ $notifikasi->pesan }}</b></p>
                    </div>
                    <div class="notif-button-container">
                        <form action="{{ route('notifikasi.markasread', $notifikasi->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button class="view-btn" type="submit">
                                <i class="fa-solid fa-eye" style="padding: 3px;"></i> Mark as read
                            </button>
                        </form>
                        <form action="{{ route('notifikasi.delete', $notifikasi->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button class="delete-btn" type="submit">
                                <i class="fa-solid fa-delete-left" style="padding: 3px 3px 3px 3px;"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
                <hr style="width: 100%; border: 1px solid black;">
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection