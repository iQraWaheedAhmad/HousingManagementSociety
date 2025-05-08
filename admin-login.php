<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <style>
    body {
      background-color: #f9fafb;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      padding: 24px;
    }

    .card-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .card-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 6px;
    }

    .card-description {
      font-size: 14px;
      color: #6b7280;
    }

    .form-group {
      margin-bottom: 16px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #d1d5db;
      border-radius: 4px;
      font-size: 14px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background-color: #7F3FBF;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #6d32a6;
    }

    .text-center {
      text-align: center;
    }

    .back-link {
      margin-top: 16px;
      display: inline-block;
      font-size: 14px;
      color: #6366f1;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="card-header">
      <div class="card-title">Admin Login</div>
      <div class="card-description">Enter your credentials to access the admin panel</div>
    </div>
    <form onsubmit="event.preventDefault(); console.log('Login attempt');">
      <div class="form-group">
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Enter your username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Enter your password" required />
      </div>
      <button type="submit" class="btn" id="login_btn">Login</button>
      <div class="text-center">
        <a href="/" class="back-link">Back to Home</a>
      </div>
    </form>
  </div>
</body>
</html>
