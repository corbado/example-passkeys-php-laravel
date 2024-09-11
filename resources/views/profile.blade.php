<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link
        rel="stylesheet"
        href="https://unpkg.com/@corbado/web-js@2/dist/bundle/index.css"
    />
    <script src="https://unpkg.com/@corbado/web-js@2/dist/bundle/index.js"></script>
</head>
<body>
<h1>User Profile</h1>
@if (isset($user) && $user->isAuthenticated())
    <p><strong>Id:</strong> {{ $user->getId() }}</p>
    <p><strong>Email:</strong> {{ $user->getEmail() }}</p>
    <p><strong>Orig:</strong> {{ $user->getOrig() }}</p>
    <button id="logoutButton">
        Logout
    </button>
    <!-- Add other user information as needed -->
@else
    <p>No user information available.</p>
    <a href="/">Go back home</a>
@endif

<script type="module">
    await Corbado.load({
        projectId: "{{ config('app.CORBADO_PROJECT_ID') }}",
        setShortSessionCookie: true
    });

    document.getElementById("logoutButton").addEventListener("click", async () => {
        await Corbado.logout()
        window.location.href = "/"
    })
</script>
</body>
</html>
