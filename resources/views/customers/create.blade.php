<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Add Customer</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" required>

            <label for="jar_taken">Number of Jars Taken</label>
            <input type="number" name="jar_taken" id="jar_taken" required>

            <label for="amount_paid">Amount Paid</label>
            <input type="number" step="0.01" name="amount_paid" id="amount_paid" required>

            <button type="submit">Add Customer</button>
        </form>
    </div>
</body>
</html>
