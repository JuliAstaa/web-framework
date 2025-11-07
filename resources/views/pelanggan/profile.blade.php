@extends('layout')

@section('content')
    @foreach ($profiles as $profile)
        <a class="block" href="{{ route('show', ['id' => $profile['id']]) }}">
            <div>
                <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
                <div class="card">
                    <img class="h-[300px] w-[300px]" src="{{ asset('images/' . $profile['pfp']) }}" alt="gambar profile">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $profile['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td>{{ $profile['nim'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </a>
    @endforeachx
@endsection

