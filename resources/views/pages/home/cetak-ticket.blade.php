<table>
    @foreach ($tickets as $ticket)
    <tr>
        <td>Name</td>
        <td>{{ $ticket->name }}</td>
    </tr>
    <tr>
        <td>Destination</td>
        <td>{{ $ticket->destination }}</td>
    </tr>
    <tr>
        <td>Date</td>
        <td>{{ $ticket->date }}</td>
    </tr>
    <tr>
        <td>People</td>
        <td>{{ $ticket->people }}</td>
    </tr>
    <tr>
        <td>Total Price</td>
        <td>{{ number_format( $ticket->total )}}</td>
    </tr>
    @endforeach
</table>
