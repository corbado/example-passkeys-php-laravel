<!DOCTYPE html> 
<html> 
    <head> 
        <title>Corbado Example</title> 
    </head> 
    <body>
    <script src='https://{{ $project_id }}.frontendapi.corbado.io/auth.js'> </script> 
    <corbado-auth project-id="{{$project_id }}" conditional="yes">
        <input name="username" id="corbado-username" required autocomplete="webauthn" />
    </corbado-auth>
</body>

</html>