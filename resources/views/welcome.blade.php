<!DOCTYPE html>
<html>
<head>
    <title>Authentication</title>
    <link
        rel="stylesheet"
        href="https://unpkg.com/@corbado/web-js@latest/dist/bundle/index.css"
    />
    <script src="https://unpkg.com/@corbado/web-js@latest/dist/bundle/index.js"></script>
</head>
<body>
<div id="corbado-auth"></div>
<script type="module">
    await Corbado.load({
        projectId: "{{ config('app.CORBADO_PROJECT_ID') }}",
        setShortSessionCookie: true,
        darkMode: "off",
    });

    async function onLoggedIn() {
        window.location.href = "/profile"
    }

    const authElement = document.getElementById('corbado-auth'); //Element where you want to render CorbadoAuth UI
    Corbado.mountAuthUI(authElement, {
        onLoggedIn: onLoggedIn,
    });
</script>
</body>
</html>
