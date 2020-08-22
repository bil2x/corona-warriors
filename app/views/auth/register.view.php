<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <main class="py-4">
        <div class="container">
            <div class="flex justify-center">
                <div class="flex-initial w-2/3">
                    <div class="border-solid border-2 border-gray-500 flex flex-col rounded">
                        <div class="px-3 py-5 bg-gray-300 border-b-2 border-solid border-orange-300 mb-0">Register</div>

                        <div class="flex-auto p-5">
                            <form method="POST" action="/register">

                                <div class="flex flex-wrap mb-1 mx-12 justify-center">
                                    <label for="name" class="text-right pr-2 grid-cols-6">Name</label>

                                    <div class=" flex-initial border-2 border-red-500">
                                        <input id="name" type="text" class="form-control " name="name" required autocomplete="name" autofocus>

                                    </div>
                                    <span class="help is-danger"><?php echo $_SESSION['error']['name'] ?? ''; ?></span>
                                </div>

                                <div class="flex flex-wrap mb-1 mx-12 justify-center">
                                    <label for="email" class="text-right pr-2 grid-cols-6">E-Mail Address</label>

                                    <div class=" flex-initial border-2 border-red-500">
                                        <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                                    </div>
                                    <span class="help is-danger"><?php echo $_SESSION['error']['email'] ?? ''; ?></span>
                                </div>

                                <div class="flex flex-wrap mb-1 mx-12 justify-center">
                                    <label for="password" class="text-right pr-2 grid-cols-6">Password</label>

                                    <div class=" flex-initial border-2 border-red-500">
                                        <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                    </div>
                                    <span class="help is-danger"><?php echo $_SESSION['error']['password'] ?? ''; ?></span>
                                </div>

                                <div class="flex flex-wrap mb-1 mx-12 justify-center">
                                    <label for="password-confirm" class="text-right pr-2 grid-cols-6">Confirm Password</label>

                                    <div class=" flex-initial border-2 border-red-500">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <span class="help is-danger"><?php echo $_SESSION['error']['password_confirmation'] ?? ''; ?></span>
                                </div>

                                <div class="flex flex-wrap mb-1 mx-12 justify-center mb-0">
                                    <div class="">
                                        <button type="submit" class="bg-blue-500 px-4 py-2 text-white hover:bg-blue-700">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php

unset($_SESSION['error']);
?>