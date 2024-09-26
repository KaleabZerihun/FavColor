<!-- resources/views/livewire/display-favorites.blade.php -->
<div style="padding: 20px; max-width: 800px; margin: 0 auto;">
    <h1 style="text-align: center; margin-bottom: 20px;">Favorites List</h1>
    <table style="width: 100%; border-collapse: collapse; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <thead>
        <tr style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #dee2e6;">ID</th>
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #dee2e6;">User</th>
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #dee2e6;">Name</th>
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #dee2e6;">Favorite Color</th>
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #dee2e6;">Added At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($favorites as $favorite)
            <tr style="background-color: {{ $loop->index % 2 == 0 ? '#ffffff' : '#f1f1f1' }};">
                <td style="padding: 10px; border-bottom: 1px solid #dee2e6;">{{ $favorite->id }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #dee2e6;">{{ $favorite->user->name }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #dee2e6;">{{ $favorite->name }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #dee2e6;">
                        <span style="background-color: {{ $favorite->favorite_color }}; padding: 5px 10px; border-radius: 5px; color: #fff; display: inline-block;">
                            {{ $favorite->favorite_color }}
                        </span>
                </td>
                <td style="padding: 10px; border-bottom: 1px solid #dee2e6;">{{ $favorite->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
