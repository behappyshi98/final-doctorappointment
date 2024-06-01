<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    <p>Dear {{ $appointment->patient_name }},</p>
    <p>Your appointment is confirmed for {{ $appointment->appointment_date }}.</p>
    <p>Thank you for choosing our services.</p>
</body>
</html>
