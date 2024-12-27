<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /* Navigation Styling */
    .nav {
        background-color: #162938;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        font-size: 1.2em;
    }

    .nav a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        transition: color 0.3s ease;
    }

    .nav a:hover {
        color: #90caf9;
    }
</style>
<div class="nav">
    <div>Login Portal</div>
    <div>
        <a href="#">Home</a>
        <a href="{{route('login.index')}}">Login</a>
        <a href="#">Contact</a>
    </div>
</div>