<!DOCTYPE html> 
<html> 
    <head>
        <title>Corbado Example</title> 
    </head> 
    
    <body>
        <h2>:/protected 🔒</h2>
        <p>User ID: {{ $user_id }}</p>
        <p>User Name: {{ $user_name }}</p>
        <p>User Email: {{ $user_email }}</p>
        <!-- Import Corbado SDK -->  
        <script src="https://{{ $project_id }}.frontendapi.corbado.io/auth.js"></script>
        <script src="https://{{ $project_id }}.frontendapi.corbado.io/utility.js"></script>
        <!-- Logout button -->
        <button id="logoutButton">Logout</button>

        <script inline="javascript">
            const projectID = "{{ $project_id }}";
            const session = new Corbado.Session(projectID);
            // Get logout button
            const logoutButton = document.getElementById('logoutButton');

            // Add event listener to logout button
            logoutButton.addEventListener('click', function () {
                session.logout()
                    .then(() => {
                        window.location.replace("/");
                    })
                    .catch(err => {
                        console.error(err);
                    });
            });
            </script>
        </body>
    </html>