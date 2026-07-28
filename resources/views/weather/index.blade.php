<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Forecast</title>
    <style>
        h1, td, th { text-align: center; }
    </style>
</head>
<body>
    <h1>Weekly Weather Forecast</h1>
    <table style="border: 1px solid #ccc; border-collapse: collapse; width: 100%;" cellpadding="10">
    <thead>
        <tr style="background-color: #ecf0f1;">
        <th>Day</th>
        <th>High</th>
        <th>Low</th>
        <th>Condition</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weather as $day)
        <tr>
            <td>{{ $day['day'] }}</td>
            <td>{{ $day['high'] }}°F</td>
            <td>{{ $day['low'] }}°F</td>
            <td>{{ $day['condition'] }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>