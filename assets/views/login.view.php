<form method="POST" action="?page=login&function=login" onsubmit="return false;">
    <label>Email</label><input type="text" name="email" required><br />
    <label>Password</label><input type="password" name="password" required><br />
    <input type="submit" value="Login">
</form>

<script>
    $(document).ready(function() {
        $('form').on('submit', function() {
            axios({
                url: '?page=login&function=login',
                method: 'POST',
                data: $(this).serialize(),
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function(response) {
                console.log(response);
            })

        });
    });
</script>