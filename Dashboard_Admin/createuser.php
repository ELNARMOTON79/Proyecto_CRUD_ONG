<div class="flex-auto ml-64">
    <div class="flex flex-col">
        <div class="flex flex-col bg-white">
            <div class="flex flex-row space-x-3">
                <!-- La clase translate-y-2 desplaza la imagen 0.5rem (8px) hacia abajo -->
                <div class="flex-shrink-0 h-10 w-10 relative">
                    <img class="ml-3 h-10 w-10 rounded-full translate-y-2"
                        src="https://cdn.icon-icons.com/icons2/2104/PNG/512/manager_icon_129392.png" alt="">
                </div>
                <h4 class="fa-2x font-bold text-gray-500 p-1">Bienvenido <?php echo htmlspecialchars($_SESSION['tipo_usuario']); ?> <?php echo htmlspecialchars($_SESSION['nombre']); ?></h4>
            </div>
            <!-- Aqui va a ir el correo del admin-->
            <div class="text-sm text-gray-500 p-1">
                <?php
                    echo $_SESSION['correo'];
                ?>
                <!-- Aqui se encuetra para mostrar la fecha -->
                <p class="text-gray-400 p-1 text-right" id="current-date-time"></p>
            </div>
        </div>
        <div class="min-h-screen bg-blue-50">
            <div class="grid gap-3 lg:col-span-1 md:cols-1 p-4">
                <div class="col-span-2 flex flex-auto bg-white rounded shadow-sm items-center">
                    <div class="flex items-center justify-center min-h-screen w-full">
                        <div class="relative bg-white bg-opacity-90 p-8 rounded-lg shadow-md max-w-md w-full">

                            <!-- Título del formulario -->
                            <h1 class="text-2xl font-bold text-green-600 mb-6 text-center">Create User</h1>

                            <!-- Formulario -->
                            <form action="" method="post" class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-green-600">Name:</label>
                                    <input type="text" name="name" id="name" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                </div>
                                <div>
                                    <label for="age" class="block text-sm font-medium text-green-600">Age:</label>
                                    <input type="number" name="age" id="age" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                </div>
                                <div>
                                    <label for="birthday" class="block text-sm font-medium text-green-600">Birthday:</label>
                                    <input type="date" name="birthday" id="birthday" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-green-600">Email:</label>
                                    <input type="email" name="email" id="email" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                </div>
                                <div>
                                    <label for="password" class="block text-sm font-medium text-green-600">Password:</label>
                                    <input type="password" name="password" id="password" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                </div>
                                <div>
                                    <label for="gender" class="block text-sm font-medium text-green-600">Gender:</label>
                                    <select name="gender" id="gender" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Man">Man</option>
                                        <option value="Woman">Woman</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="role" class="block text-sm font-medium text-green-600">Role:</label>
                                    <select name="role" id="role" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="donator">Donator</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="student">Student</option>
                                        <option value="admin">Admin</option>
                                        <option value="cordinator">Coordinator</option>
                                    </select>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" name="enviar" class="mt-4 px-4 py-2 bg-green-600 text-white font-semibold rounded-md shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
