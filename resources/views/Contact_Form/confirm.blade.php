<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>  
        @endif
        <h2 class="mb-4">Confirmation</h2>
        <div class="card p-4">
            <p><strong>Name:</strong> {{ $formData['name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Message:</strong> {{ $formData['message'] }}</p>
        </div>

        <a href="{{ route('contact.form') }}" class="btn btn-secondary mt-3">Back to Form</a>
    </div>
</body>
</html>
