<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forget Password</title>
</head>

<body>
    <!-- component -->
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50">
        <div class="relative bg-white px-6 pt-10 pb-9 shadow-xl mx-auto w-full max-w-lg rounded-2xl">
            <div class="mx-auto flex w-full max-w-md flex-col space-y-5">
                <div class="flex flex-col items-center justify-center text-center space-y-2">
                    <div class="font-semibold text-3xl">
                        <p>Wirex</p>
                    </div>
                    <div class="flex flex-row text-sm font-medium text-gray-400">
                        <p>Forgot your account password?</p>
                    </div>
                </div>

                <div>
                    <form action="" method="post">
                        @csrf
                        @method('POST')
                        <div class="flex flex-col space-y-4">
                            <div class="flex flex-row items-center justify-between mx-auto w-full max-w-xs">

                                <input
                                    class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-500 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-blue-700 p-4"
                                    type="email" name="email" id="token">
                            </div>
                            <div class="flex flex-col space-y-5">
                                <div>
                                    <button
                                        class="flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-blue-700 border-none text-white text-sm shadow-sm text-bold">
                                        Send Reset Email
                                    </button>
                                </div>

                                <div
                                    class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-gray-500">
                                    <p>Didn't recieve code?</p> <a class="flex flex-row items-center text-blue-600"
                                        href="#">Resend</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
