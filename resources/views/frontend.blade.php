<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple Minimalist Linktree Page" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Optional favicon -->
    <title>frontend</title>
    <style>
        /* Basic reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styling */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4; /* Light neutral background */
  font-family: "Arial", sans-serif;
  color: #333; /* Dark text color */
}

/* Container for the content */
.container {
  text-align: center;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  max-width: 400px;
  width: 100%;
}

/* Profile picture styling */
.profile-picture {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 20px;
}

/* Heading */
h1 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

/* Paragraph for description */
p {
  font-size: 1rem;
  margin-bottom: 20px;
  color: #666;
}

/* Links section */
.links {
  display: flex;
  flex-direction: column;
}

/* Button styling */
.button {
  display: inline-block;
  margin: 10px 0;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 1rem;
  color: #fff;
  background-color: #333;
  border-radius: 5px;
  transition: background-color 0.3s;
}

/* Button hover effect */
.button:hover {
  background-color: #555;
}

/* Minimalist custom scrollbar */
::-webkit-scrollbar {
  width: 8px; /* Thin scrollbar */
}

::-webkit-scrollbar-track {
  background: #f4f4f4; /* Matches body background */
}

::-webkit-scrollbar-thumb {
  background-color: #333; /* Dark color to match button styling */
  border-radius: 10px;
  border: 2px solid #f4f4f4; /* Create space around thumb for cleaner look */
}

::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Darker on hover to match button hover */
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .container {
    padding: 15px;
  }

  h1 {
    font-size: 1.2rem;
  }

  p {
    font-size: 0.9rem;
  }

  .button {
    padding: 8px 16px;
    font-size: 0.9rem;
  }
}
    </style>
  </head>
  <body>
    <main>
      <div class="container">
        <img
          src="default-avatar.jpg"
          alt="Profile Picture"
          class="profile-picture"
          id="profile-picture"
        />
        <!-- Placeholder image -->
        <h1>Faiz Hazmi Maulana</h1>
        <p>
          Tugas pertemuan 11 mengubah file pertemuan 1-ETS ke dalam framework laravel.
        </p>

        <div class="links">
          <a href="satu" class="button" target="_blank">pertemuan 1</a>
          <a href="bs1" class="button" target="_blank">bootstrap 1</a>
          <a href="coba" class="button" target="_blank">cobain</a>
          <a href="js1" class="button" target="_blank">js1</a>
          <a href="latihan js" class="button" target="_blank">latihan java script</a>
          <a href="p4pr" class="button" target="_blank">pertemuan 4 pr</a>
          <a href="p4" class="button" target="_blank">pertemuan 4</a>
          <a href="template" class="button" target="_blank">template b4</a>
          <a href="tugasLK" class="button" target="_blank">tugas_linktree</a>
          <a href="validasi" class="button" target="_blank">validasi1</a>
          <a href="ETS" class="button" target="_blank">ETS</a>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
