<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }

    .form-container {
        max-width: 600px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        color: #343a40;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .form-container .form-label {
        font-weight: 600;
        color: #495057;
    }

    .form-container select, 
    .form-container input {
        border-radius: 5px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .form-container input:focus, 
    .form-container select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 5px rgba(13, 110, 253, 0.3);
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        background-color: #0d6efd;
        color: white;
        border: none;
        font-size: 1em;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: #0a58ca;
    }
</style>

<div class="form-container">
    <h2>Student Registration</h2>
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="roll_number" class="form-label">Roll Number</label>
            <input type="text" class="form-control" name="roll_number" required>
        </div>
        <div class="mb-3">
            <label for="year_enrolled" class="form-label">Enrolled Year</label>
            <select class="form-select" name="year_enrolled" aria-label="Enrolled Year" required>
                <option selected disabled>select</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="year_passing" class="form-label">Passing Year</label>
            <select class="form-select" name="year_passing" aria-label="Passing Year" required>
                <option selected disabled>select</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="branch" class="form-label">Branch</label>
            <select class="form-select" name="branch" aria-label="Branch" required>
                <option selected disabled>select</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
