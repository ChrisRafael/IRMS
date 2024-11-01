<style>
            #togglePassword{
            border-radius:12px;
            margin-top:10px;
            color:white;
            width: 100px;
            height:20px;
            display:block;
            margin-right:4px;
            margin-left:auto;
            background-color:#550000;
        }

</style>
<button type="button" id="togglePassword">Show</button>
<script>
        //show password
             document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordField = document.getElementById('password');
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    this.textContent = 'Hide';
                } else {
                    passwordField.type = 'password';
                    this.textContent = 'Show';
                }
            });

    </script>

