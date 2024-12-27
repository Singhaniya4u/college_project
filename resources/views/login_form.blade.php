<style>
    /* Form Container Styling */
    #form {
        margin: 50px auto;
        width: 90%;
        max-width: 400px;
        padding: 20px;
        background: #f4f4f4;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Form Element Styling */
    #form form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    #form label {
        font-size: 1em;
        font-weight: 600;
        color: #162938;
    }

    #form input {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    #form input:focus {
        border-color: #162938;
        box-shadow: 0 0 5px rgba(22, 41, 56, 0.3);
    }

    /* Submit Button Styling */
    #form button {
        background-color: #162938;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #form button:hover {
        background-color: #0e3e66;
    }

    /* Error Message Styling */
    .error-messages {
        margin-top: 10px;
        padding: 10px;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
        font-size: 0.9em;
    }

    .error-messages ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
</style>
<div id="form">
    <form action="{{ route('login_check') }}" method="POST">
        @csrf
        <label for="admin_id">User ID: </label>
        <input id="admin_id" name="admin_id" type="text" placeholder="Enter Admin ID">
        <label for="password">Password: </label>
        <input id="password" name="password" type="password" placeholder="Enter Password">
        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>