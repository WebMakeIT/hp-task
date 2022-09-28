<!doctype html>
<html>
<head>
    <title>Last transactions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-1/2 mt-8 mx-auto">
        <h1 class="text-3xl font-bold text-center underline">
            Transactions
        </h1>
        @if(count($customers) > 0)
            <a href="/1">Customer 1</a> | <a href="/2">Customer 2</a>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="py-3 px-6">ID</th>
                        <th class="py-3 px-6">Date</th>
                        <th class="py-3 px-6">Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="py-3 px-6">{{ $customer['id'] }}</td>
                            <td class="py-3 px-6">{{ $customer['date'] }}</td>
                            <td class="py-3 px-6">{{ $customer['value'] }} {{ $customer['currency'] }}</td>
                        </tr>
                    @endforeach
                </tbody>            
            </table>
        @else
            <h3 class="text-lg">
                No data in table
            </h3>
        @endif
    </div>
  
</body>
</html>